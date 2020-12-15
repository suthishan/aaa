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

 $bill_amount = $row['merchant_amount'];
 $name = $row['name'];

 $pay_date = $row['payment_date'];
// $bill_nember = $row['id'];


$emailtosent = $row['email'];



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



       
// custom mail
// $html="<table><tr><th>".$name."</th><th>Contact</th><th>Country</th></tr></table>";

        // $html="<body style='font-family: Arial, Helvetica, Sans-Serif; font-size: 14px;'><div style='width: 8.27in;page-break-after: always;margin: 0 auto;background-image: url('http://mock.satvatinfosol.com/sss-ashram/assets/images/img/border.jpg);background-size: cover'><table style='border: 1px solid #888;border-collapse: collapse; width: 100%'><tr><td style='text-align: center;border: 1px solid #888;padding: .5em'> <img src='http://mock.satvatinfosol.com/sss-ashram/assets/images/img/OHPC-Recruitment.jpg' ></td><td style='text-align: center;font-weight: bold;padding: .5em;' >`<h3>Odisha Hydro Power Corporation Ltd.<br> (A Govt. of Odisha Undertaking)<br> Powering Green Energy<br> e-ADMIT CARD</h3></td><td style='text-align: center;border: 1px solid #888;padding: .5em;'> <img src='http://mock.satvatinfosol.com/sss-ashram/assets/images/img/OHPC-Recruitment.jpg' width='100' height='30'></td></tr></table><div style='position: absolute;top: 156px !important;background-color: white;border: solid 1px #01056b;border-radius: 5px;right: 45%;padding: 4px 47px; '>e-ADMIT CARD</div><div style='border: 1px solid #888'><table style='border: 0;'><tr><td width='32%' style='padding: .5em'>&nbsp;<b>Bill Number : ".$id."</b></td><td colspan='3' width='44%' style='padding: .5em;'><b></td><td rowspan='5' style='text-align: center;padding: .5em;'><b>&nbsp;Date : </b></td></tr></table><table style='border: 0;border-collapse: collapse; width: 100%'><tr><td style='padding: .5em;' > &nbsp;<b>Name : <span style='font-size: 28px;'>".$name."</span></b></td><td rowspan='5' style='text-align: center;padding: .5em;'><b></b></td></tr></table></div><table style='border: 1px solid #888;border-collapse: collapse; width: 100%'><tr><td style='padding: .5em;'><div style='padding-top: 3px;padding-left: 5px;padding-bottom: 2px;'>&nbsp;Candidates shall produce the e-Admit Card along with one original Identity Proof (Passport/Voter ID/Driving License/PAN Card/ Aadhar Card)</div></td></tr></table><table style='border: 1px solid #888;border-collapse: collapse; width: 100%'><tr style='text-align: center;'><td style='border: 1px solid #888;width: 50%;padding: .5em;'><span style='background-color: white;border: solid 1px #fd4201;border-style: dashed;padding: 12px 25px;font-size: 2.5em;font-style: italic;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;'><b><span style='background-color: #fd4201;color: white'>Rs :</span> </b> ".$bill_amount."</span></td><td> <img src='http://mock.satvatinfosol.com/sss-ashram/assets/images/amman/sign_1.png' width='150' /> <br>Sr. GM (HRD), Recruitment</td></tr><tr><td colspan='2' style='font-size: 11px;text-align: justify;border: 1px solid #888;padding: .5em;'>&nbsp;Note : This e-Admit Card has been prepared based on the information furnished by the candidate in the online Application Form. Hence, this e-Admit Card does not authenticate the eligibility criteria of the candidate, but allows the candidate to sit the Computer Based Tes without any prejudice</td></tr></table></div></body>";

         $html="<body style='width:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0'><div class='es-wrapper-color' style='background-color:#F7F6F2'><table class='es-wrapper' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top'><tbody><tr style='border-collapse:collapse'><td valign='top' style='padding:0;Margin:0;'><table class='es-content' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;'><tbody><tr style='border-collapse:collapse'><td align='center' style='padding:0;Margin:0'><table class='es-content-body' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#F7F6F2;width:600px;border-bottom:1px solid #836027;' cellspacing='0' cellpadding='0' bgcolor='#f7f6f2' align='center'><tbody><tr style='border-collapse:collapse'><td style='Margin:0;padding-top:10px;background-image:url(http://mock.satvatinfosol.com/sss-ashram/assets/images/img/border.jpg);background-repeat:no-repeat;background-size: contain; background-size: 100% 100%;' align='left' background='http://mock.satvatinfosol.com/sss-ashram/assets/images/img/border.jpg'><table class='es-left' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left;width: 100%;'><tbody><tr style='border-collapse:collapse'><td class='es-m-p20b' align='left'><table style='border: 1px solid #888;border-collapse: collapse;width: 100%'><tbody><tr><td style='text-align: center;border: 1px solid #888;padding: .5em'> <img src='http://mock.satvatinfosol.com/sss-ashram/assets/images/img/OHPC-Recruitment.jpg' width='100' height='30'></td><td style='text-align: center;font-weight: bold;padding: .5em;'>`<h3>Arulmigu Sri Kolhapuri Amman Temple<br> Donation Receipt</h3></td><td style='text-align: center;border: 1px solid #888;padding: .5em;'> <img src='http://mock.satvatinfosol.com/sss-ashram/assets/images/img/OHPC-Recruitment.jpg' width='100' height='30'></td></tr></tbody></table></td></tr></tbody></table><table style=' border: 1px solid #888; border-collapse: collapse; width: 100%; '><tbody><tr style='text-align: center;border: solid 1px;border-top: 1px solid #ffffff00;'><td width='50%' style='padding: .5em;border-right: 1px solid #fd4201;'>&nbsp;<b>Bill Number : ".$id."</b></td><td width='50%' style='text-align: center;padding: .5em;'><b>&nbsp;Date : ".$pay_date."</b></td></tr><tr style='border: solid 1px;border-top: 1px solid #ffffff00;'><td colspan='2' style='font-size: 11px;text-align: justify;border: 1px solid #888;padding: .5em;'> &nbsp; &nbsp;<b><span style='font-size: 25px;font-style: italic;'>Name : ".$name."</span></td></tr><tr style='text-align: center;'><td colspan='2' style='border: 1px solid #888;width: 50%;padding: .5em;'><span style='background-color: white;border: solid 1px #fd4201;border-style: dashed;padding: 12px 25px;font-size: 1.8em;font-style: italic;padding-top: 0px;padding-left: 0px;padding-bottom: 0px;'><b><span style='background-color: #fd4201;color: white'>&nbsp;Rs :&nbsp;</span> </b>&nbsp;".$bill_amount."</span></td></tr><tr><td colspan='2' style='font-size: 11px;text-align: justify;border: 1px solid #888;padding: .5em;'>&nbsp;Note : This e-Admit Card has been prepared based on the information furnished by the candidate in the online Application Form. Hence, this e-Admit Card does not authenticate the eligibility criteria of the candidate, but allows the candidate to sit the Computer Based Tes without any prejudice</td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table><table cellpadding='0' cellspacing='0' class='es-footer' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top'><tbody><tr style='border-collapse:collapse'><td align='center' style='padding:0;Margin:0'><table class='es-footer-body' cellspacing='0' cellpadding='0' align='center' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px'><tbody><tr style='border-collapse:collapse'><td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr style='border-collapse:collapse'><td valign='top' align='center' style='padding:0;Margin:0;width:560px'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr style='border-collapse:collapse'><td style='padding:0;Margin:0'><table class='es-menu' width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr class='links' style='border-collapse:collapse'><td style='Margin:0;padding-left:5px;padding-right:5px;padding-top:0px;padding-bottom:0px;border:0' width='25.00%' bgcolor='transparent' align='center'><a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;text-decoration:none;display:block;color:#333333' href=''>Necklace</a></td><td style='Margin:0;padding-left:5px;padding-right:5px;padding-top:0px;padding-bottom:0px;border:0;border-left:1px solid #836027' width='25.00%' bgcolor='transparent' align='center'><a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;text-decoration:none;display:block;color:#333333' href=''>Bracelets</a></td><td style='Margin:0;padding-left:5px;padding-right:5px;padding-top:0px;padding-bottom:0px;border:0;border-left:1px solid #836027' width='25.00%' bgcolor='transparent' align='center'><a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;text-decoration:none;display:block;color:#333333' href=''>Rings</a></td><td style='Margin:0;padding-left:5px;padding-right:5px;padding-top:0px;padding-bottom:0px;border:0;border-left:1px solid #836027' width='25.00%' bgcolor='transparent' align='center'><a target='_blank' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;text-decoration:none;display:block;color:#333333' href=''>Earrings</a></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr style='border-collapse:collapse'><td align='left' style='padding:0;Margin:0;padding-top:20px;padding-left:20px;padding-right:20px'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr style='border-collapse:collapse'><td valign='top' align='center' style='padding:0;Margin:0;width:560px'><table width='100%' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr style='border-collapse:collapse'><td align='center' style='padding:0;Margin:0;padding-bottom:10px;font-size:0'><table class='es-table-not-adapt es-social' cellspacing='0' cellpadding='0' style='mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px'><tbody><tr style='border-collapse:collapse'><td valign='top' align='center' style='padding:0;Margin:0;padding-right:15px'> <img title='Facebook' src='https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/facebook-logo-black.png' alt='Fb' width='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:15px'> <img title='Twitter' src='https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/twitter-logo-black.png' alt='Tw' width='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:15px'> <img title='Youtube' src='https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/youtube-logo-black.png' alt='Yt' width='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td><td valign='top' align='center' style='padding:0;Margin:0;padding-right:10px'> <img title='Pinterest' src='https://tlr.stripocdn.email/content/assets/img/social-icons/logo-black/pinterest-logo-black.png' alt='P' width='32' style='display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic'></td></tr></tbody></table></td></tr><tr style='border-collapse:collapse'><td align='center' style='padding:0;Margin:0'><p style='Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:13px;line-height:20px;color:#333333'>You are receiving this email because you have visited our site or asked us about regular newsletter. Make sure our messages get to your Inbox (and not your bulk or junk folders). Please add <a target='_blank' href='mailto:your@mail.com' style='-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:13px;text-decoration:underline;color:#836027'>your@mail.com</a> to your contacts!</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></div></body>";





include('smtp/PHPMailerAutoload.php');
$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="webteam.satvat@gmail.com";
$mail->Password="Satvat@2020";
$mail->SetFrom("sreekollapuriamman@gmail.com");

//From email address and name
$mail->FromName = "Kolla Puri Amman";
//To address and name
$mail->addAddress("$emailtosent", $emailtosent);
//Address to which recipient will reply

//CC and BCC
// $mail->addCC("sreekollapuriamman@gmail.com");
// $mail->addBCC("srini.acpl@gmail.com");


// $mail->addAddress("$email");
$mail->IsHTML(true);
$mail->Subject="Kolla Puri Amman Website Payment Success";
$mail->Body=$html;
$mail->SMTPOptions=array('ssl'=>array(
'verify_peer'=>false,
'verify_peer_name'=>false,
'allow_self_signed'=>false
));
if($mail->send()){
echo "Mail send";
}else{
echo "Error occur";
}

// echo "Success";
}else{
echo "Error";
}
// $html = "<p>Your payment was successful</p>
// <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";



$html = "<div style='text-align:center'><div
        style='background: white;padding: 34px 95px;border-radius: 4px;box-shadow: 0 2px 3px #C8D0D8;display: inline-block;margin: 0 auto;text-align:center;'><div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'><i
                style='color: #4caf50;font-size: 100px;line-height: 200px;margin-left: 0px;font-family: sans-serif;'>✓</i></div><h1>Success</h1><p>Thanks for your Transfer;<br> we'll be in touch shortly!</p>
    </div>
</div>";
}
else
{ $failure = "Payment failure";


$sqlupdate = "UPDATE `payment_list` SET status = '$failure' WHERE id = '$id'";
// $html = "<p>Your payment failed</p>
// <p>{$error}</p>";

$html = "<div style='text-align:center'>
    <div
        style='background: white;padding: 34px 95px;border-radius: 4px;box-shadow: 0 2px 3px #C8D0D8;display: inline-block;margin: 0 auto;text-align:center;'>
        <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'><i
                style='color: red;font-size: 100px;line-height: 200px;margin-left: 0px;font-family: sans-serif;'>⨉</i>
        </div>
        <h1>Payment Failed</h1>
        <p><br> Please Try Again! <br>Page will automatically redirect to main page</p>
    </div>
</div>";
}

echo $html;
?>
<script>
setTimeout(function() {
    window.location.href = 'donate.php';
}, 5000);
</script>