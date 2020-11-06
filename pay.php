<?php


require('config.php');
require('razorpay-php/Razorpay.php');
include("connection.php");




session_start();
$last_id=mysqli_query($con,"SELECT * FROM `payment_list` ORDER BY id DESC LIMIT 0 , 1" );
$row=mysqli_fetch_assoc($last_id);



use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

//
// We create an razorpay order using orders api
// Docs: https://docs.razorpay.com/docs/orders
//

$json = array();
$id = $row['id'];
$name = $row['name'];
$last_name = $row['last_name'];
$email = $row['email'];
$mobile = $row['mobile'];
$state = $row['state'];
$city = $row['city'];
$message = $row['message'];
$merchant_amount = $row['merchant_amount'];
$merchant_total = $row['merchant_total'];
$currency_code_id = "INR";
$payment_id = $row['payment_id'];
$date = date('Y-m-d H:i:s');





$orderData = [
    'receipt'         => 3456,
    'amount'          => 1 * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];


$razorpayOrder = $api->order->create($orderData);


$razorpayOrderId = $razorpayOrder['id'];

$_SESSION['razorpay_order_id'] = $razorpayOrderId;



$displayAmount = $amount = $orderData['amount'];

if ($displayCurrency !== 'INR')
{
    $url = "https://api.fixer.io/latest?symbols=$displayCurrency&base=INR";
    $exchange = json_decode(file_get_contents($url), true);

    $displayAmount = $exchange['rates'][$displayCurrency] * $amount / 100;
}

$checkout = 'automatic';

if (isset($_GET['checkout']) and in_array($_GET['checkout'], ['automatic', 'manual'], true))
{
    $checkout = $_GET['checkout'];
}

$data = [
    "key"               => $keyId,
    "amount"            => $amount,
    "name"              => $name,
    "description"       => "Kolla Puri Amman",
    "image"             => "assets/images/amman/logo.png",
    "prefill"           => [
    "name"              => $name,
    "email"             => $email,
    "contact"           => $mobile,
    ],
    "notes"             => [
    "address"           => "Hello World",
    "merchant_order_id" => "12312321",
    ],
    "theme"             => [
    "color"             => "#F37254"
    ],
    "order_id"          => $razorpayOrderId,
];

if ($displayCurrency !== 'INR')
{
    $data['display_currency']  = $displayCurrency;
    $data['display_amount']    = $displayAmount;
}

$json = json_encode($data);


// require("checkout/{$checkout}.php");

?>


<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>