<?php

require('config.php');
include("connection.php");

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$last_id=mysqli_query($con,"SELECT * FROM `payment_list` ORDER BY id DESC LIMIT 0 , 1" );
$row=mysqli_fetch_assoc($last_id);

$id = $row['id'];



$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{   
    $success = "Payment Success";
    $payment_id = $_POST['razorpay_payment_id'];

    $sqlupdate = "UPDATE `payment_list` SET payment_id = '$payment_id', status = '$success' WHERE id = '$id'";

    if (mysqli_query($con, $sqlupdate)) {
        echo "Success";
    }else{
        echo "Error";
    }
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{   $failure = "Payment failure";
    

    $sqlupdate = "UPDATE `payment_list` SET status = '$failure' WHERE id = '$id'";
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>
<script>
setTimeout(function () {
   window.location.href= 'donate.php'; 
},5000);
</script>


