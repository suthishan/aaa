<?php 
include("connection.php");

$json = array();
$razorpay_payment_id = $_POST['razorpay_payment_id'];
$merchant_order_id = $_POST['merchant_order_id'];
$merchant_surl_id = $_POST['merchant_surl_id'];
$merchant_furl_id = $_POST['merchant_furl_id'];
$card_holder_name_id = $_POST['card_holder_name_id'];
$card_holder_lastname = $_POST['card_holder_lastname'];
$card_holder_email = $_POST['card_holder_email'];
$card_holder_phone = $_POST['card_holder_phone'];
$merchant_total = $_POST['merchant_total'];
$merchant_amount = $_POST['merchant_amount'];
$currency_code_id = $_POST['currency_code_id'];
$state = $_POST['state'];
$city = $_POST['city'];
$date = date('Y-m-d H:i:s');
$card_holder_message = $_POST['card_holder_message'];


$sql = "INSERT INTO `payment_list`(`id`, `name`, `last_name`, `email`, `mobile`, `state`, `city`, 
        `message`, `merchant_amount`, `merchant_total`, `payment_id`, 
        `payment_date`, `status`) VALUES ('','$card_holder_name_id','$card_holder_lastname','$card_holder_email',
        '$card_holder_phone','$state','$city','$card_holder_message','$merchant_amount','$merchant_total',
        '$razorpay_payment_id','$date','')";

    if (mysqli_query($con, $sql)) {
        echo "Success";
    } else {
        echo "Error";
    }

?>