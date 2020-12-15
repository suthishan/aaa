<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <title>OHPC Call Letter</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        border: 0;
    }

    body {
        font-family: Arial, Helvetica, Sans-Serif;
        font-size: 14px;
    }

    .wrap {
        width: 8.27in;
        page-break-after: always;
        margin: 0 auto;
        background-image: url(assets/images/invoice/border.jpg);
        background-size: cover;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    table td {
        padding: .5em;
    }

    .no-border {
        border: 0;
    }

    .border {
        border: 1px solid #888;
    }

    .td-border td {
        border: 1px solid #888;
    }

    .img {
        border: 1px solid #555;
    }

    .tCenter {
        text-align: center;
    }

    .fBold {
        font-weight: bold;
    }

    .f12 {
        font-size: 12px;
    }

    .em {
        font-style: italic;
    }

    p {
        margin: .6em 0;
    }

    .tRight {
        text-align: right;
    }

    ul,
    ol {
        padding-left: 20px;
    }

    ul li,
    ol li {
        margin: 5px 0;
    }

    ul {
        list-style: disc;
    }

    .tJustify {
        text-align: justify;
    }

    .tRight {
        text-align: right;
    }

    .ul {
        text-decoration: underline;
    }

    .pt-10 {
        padding-top: 5px;
    }

    .p-0 {
        padding: 0;
        border: 0;
    }

    .pd-05 {
        padding-top: 3px;
        padding-left: 5px;
        padding-bottom: 2px;
    }

    .thp {
        background-color: #183884;
        color: white;
        text-decoration: none;
        padding: 1px;
        margin: 0;
    }

    .width50 {
        width: 50%;
    }

    .f-11 {
        font-size: 11px;
    }

    .f-12 {
        font-size: 18px;
    }

    .pd-105 {
        padding: 0.2em;
    }

    .pdem-1 {
        padding: 1em;
    }

    .f-8 {
        font-size: 8px;
    }

    .fleft {
        float: left;
    }

    .b-left {
        border-right: 1px solid #888;
    }

    @media print {
        .wrap {
            page-break-after: always;
            margin: 3em auto;
        }

        table,
        tr,
        td {
            font-size: 13px;
        }
    }

    @page {
        size: A4;
    }

    @media print {

        html,
        body {
            width: 9.27in;
        }
    }

    
    .amount {
        background-color: white;
        border: solid 1px #fd4201;
        border-style: dashed;
        padding: 12px 25px;
        font-size: 2.5em;
        font-style: italic;
        padding-top: 0px;
        padding-left: 0px;
        padding-bottom: 0px;
    }

    .rs {
        background-color: #fd4201;
        color: white;
    }
    </style>
</head>

<body>

    <div class="wrap">
        <table class="td-border">
            <tr>
                <td class="tCenter"><img src="http://megworld.in/demo/amman/assets/images/amman/logo.png" alt=""></td>
                <td class="fBold tCenter">
                    <h3>Odisha Hydro Power Corporation Ltd.<br>
                        (A Govt. of Odisha Undertaking)<br>
                        Powering Green Energy<br>
                        e-ADMIT CARD</h3>
                </td>
                <td class="tCenter"><img src="http://megworld.in/demo/amman/assets/images/amman/veeran.png" width="100"
                        height="30"></td>
            </tr>
        </table>
        <div style="position: absolute;top: 117px !important;background-color: white;border: solid 1px #01056b;border-radius: 5px;right: 45%;padding: 4px 47px;
">e-ADMIT CARD</div>
        <div class="border">
            <table class="no-border">
                <tr>
                    <td width="32%" class="">&nbsp;<b>Bill Number : <?php echo $row['id'];?></b></td>
                    <td colspan="3" width="44%" class=""><b></td>
                    <td rowspan="5" class="tCenter"><b>&nbsp;Date : <?php echo $row['payment_date']; ?></b></td>

                </tr>

            </table>

            <table class="no-border">
                <tr>
                    <td Class="">&nbsp;<b>Name :</b>
                        <div class="input-wrapper"><input type="text" value="<?php echo $row['name']; ?>"
                                maxlength="15"></div>&nbsp;From
                        the person
                    </td>
                    <td rowspan="5" class="tCenter"><b></b></td>

                </tr>

            </table>
        </div>
        <table class="td-border">
            <tr>
                <td>
                    <div class="pd-05">

                        &nbsp;Candidates shall produce the e-Admit Card along with one original Identity Proof
                        (Passport/Voter ID/Driving License/PAN Card/ Aadhar Card)

                    </div>
                </td>
            </tr>
        </table>
        <table class="td-border">
            <tr class="tCenter">
                <td Class=""><span class="amount"><b><span class="rs">Rs
                                :</span></b><?php echo $row['merchant_amount']; ?></span></td>
                <td><img src="http://megworld.in/demo/amman/assets/images/amman/sign_1.png" width="150" /><br> Sr. GM
                    (HRD), Recruitment</td>
            </tr>
            <tr>
                <td colspan="2" class="f-11 tJustify">&nbsp;Note : This e-Admit Card has been prepared based on the
                    information furnished by the candidate in the online Application Form. Hence, this e-Admit Card does
                    not authenticate the eligibility criteria of the candidate, but allows the candidate to sit the
                    Computer Based Tes without any prejudice</td>
            </tr>
        </table>
    </div>





</body>

</html>