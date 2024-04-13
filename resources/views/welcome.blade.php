{{--
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="invoice.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .invoice {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        }

        .header {
            width: auto;
            height: 42px;
            background: #007aff;
            font-weight: bold;
            /* padding-top: 15px; */
            padding-left: 20px;
            padding-right: 20px;
            margin-bottom: 20px;
        }

        .header h1 {
            color: #fff;
        }

        .top1 {
            float: left;
            width: 33.33%;
            font-size: 17px;
            text-align: left;
            margin-top: 10px;
        }

        .top2 {
            float: left;
            width: 33.33%;
            font-size: 17px;
            text-align: center;
            margin-top: 10px;
        }

        .top3 {
            float: left;
            width: 33.33%;
            font-size: 17px;
            text-align: right;
            margin-top: 10px;
        }

        .invoice_logo {
            width: auto;
            height: 90px;
            background: #e5f1ff;
            border: 1px solid #cce4ff;
            margin-bottom: 20px;
            grid-template-columns: repeat(3, 1fr);
            display: grid;
            list-style: none;
            align-items: center;
            padding: 20px;
        }

        .logo_div {
            float: left;
            width: 34%;
            margin-top: 15px;
            border-right: 1px solid #cce4ff;
            padding-left: 20px;
        }

        .logo_div img {
            height: 60px;
            width: 60px;
        }

        .invoice_add {
            width: auto;
            height: 110px;
            border: 1px solid rgba(123, 229, 255, 0.486);
            margin-bottom: 20px;
        }

        .tm_accent_bg {
            background: #007aff !important;
            border: 0;
        }

        table {
            margin: auto;
        }

        .tm_product {
            width: 750px !important;
        }

        th {
            padding: 10px 15px;
            line-height: 1.55em;
            text-align: left;
            border-color: #007aff;
        }

        td {
            padding: 10px 15px;
            line-height: 1.55em;
            border-top: 1px solid #dbdfea;
        }

        .tm_width_1 {
            width: 8.33333333%;
        }

        .tm_width_6 {
            width: 70%;
        }

        .tm_width_2 {
            width: 16.66666667%;
        }

        .tm_width_3 {
            width: 45%;
        }

        .tm_width_4 {
            width: 150px;
        }

        .tm_width_7 {
            width: 30%;
        }

        .tm_semi_bold {
            font-weight: 600;
        }

        .tm_white_color {
            color: white;
        }

        .tm_text_right {
            text-align: right;
        }

        .tm_accent_border_20 {
            border-color: rgba(0, 122, 255, 0.2);
        }

        .tm_border_none {
            border: none;
        }

        .tm_primary_color {
            color: #111;
        }

        .tm_bold {
            font-weight: 700;
        }

        .tm_border_right {
            border-right: 1px solid #dbdfea;
        }

        .tm_border_left {
            border-left: 1px solid #dbdfea;
        }

        .tm_border_bottom {
            border-bottom: 1px solid #dbdfea;
        }

        tr:nth-child(even) {
            background: rgba(0, 122, 255, 0.1);
            border-right: 1px solid #dbdfea;
            border-left: 1px solid #dbdfea;
            border-bottom: 1px solid #dbdfea;
        }

        tr:nth-child(odd) {
            border-right: 1px solid #dbdfea;
            border-left: 1px solid #dbdfea;
            background: #fff
        }

        .invoice_total {
            width: auto;
            margin: auto;
        }

        .total_sec {
            width: 40%;
            background: #fff;
            margin-left: 472px;
        }

        .add_margin {
            padding-top: 15px;
        }
    </style>
</head>

<body>
    <div class="invoice">
        <div class="header">
            <h1 class="top1">Date: 12-21-2092</h1>
            <h1 class="top2">Invoice #: 123456</h1>
            <h1 class="top3">Due Date: 14-21-2092</h1>
        </div>

        <div class="invoice_logo">
            <div class="logo_div tm_width_7"><img src="https://asuratoon.com/wp-content/uploads/2021/03/Group_1.png"
                    alt=""></div>
            <div class="logo_div">
                <p> 90 Paul Street, London</p>
                <p> England EC2A 4NE </p>
                <p> United Kingdom </p>
            </div>
            <div class="logo_div tm_border_none">
                <p> +01 983 345 213 </p>
                <p> email@company.com </p>
                <p> www.company.com </p>
            </div>
        </div>
        <div class="invoice_add">
            <div class="logo_div tm_width_7">
                <h3>Billled To:</h3>
                <p> 90 Paul Street, London</p>
                <p> England EC2A 4NE </p>
                <p> United Kingdom </p>
            </div>
            <div class="logo_div add_margin">
                <p> 90 Paul Street, London</p>
                <p> England EC2A 4NE </p>
                <p> United Kingdom </p>
            </div>
            <div class="logo_div add_margin tm_border_none">
                <p> 90 Paul Street, London</p>
                <p> England EC2A 4NE </p>
                <p> United Kingdom </p>
            </div>
        </div>
        <div class="tm_table_responsive">
            <table cellspacing="0" cellpadding="0" class="tm_product">
                <thead>
                    <tr class="tm_accent_bg">
                        <th class="tm_width_1 tm_semi_bold tm_white_color">No.</th>
                        <th class="tm_width_6 tm_semi_bold tm_white_color">Description</th>
                        <th class="tm_width_2 tm_semi_bold tm_white_color">Price</th>
                        <th class="tm_width_1 tm_semi_bold tm_white_color">Qty</th>
                        <th class="tm_width_2 tm_semi_bold tm_white_color tm_text_right">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="tm_width_1 tm_accent_border_20">1.</td>
                        <td class="tm_width_6 tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Website Design</b><br>
                            Six web page designs and three times revision
                        </td>
                        <td class="tm_width_2 tm_accent_border_20">$350</td>
                        <td class="tm_width_1 tm_accent_border_20">1</td>
                        <td class="tm_width_2 tm_accent_border_20 tm_text_right">$350</td>
                    </tr>
                    <tr class="tm_accent_bg_10">
                        <td class="tm_width_1 tm_accent_border_20">2.</td>
                        <td class="tm_width_6 tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Web Development</b><br>
                            Convert pixel-perfect frontend and make it dynamic
                        </td>
                        <td class="tm_width_2 tm_accent_border_20">$600</td>
                        <td class="tm_width_1 tm_accent_border_20">1</td>
                        <td class="tm_width_2 tm_accent_border_20 tm_text_right">$600</td>
                    </tr>
                    <tr>
                        <td class="tm_width_1 tm_accent_border_20">3.</td>
                        <td class="tm_width_6 tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">App Development</b><br>
                            Android &amp; Ios Application Development
                        </td>
                        <td class="tm_width_2 tm_accent_border_20">$200</td>
                        <td class="tm_width_1 tm_accent_border_20">2</td>
                        <td class="tm_width_2 tm_accent_border_20 tm_text_right">$400</td>
                    </tr>
                    <tr class="tm_accent_bg_10">
                        <td class="tm_width_1 tm_accent_border_20">4.</td>
                        <td class="tm_width_6 tm_accent_border_20">
                            <b class="tm_primary_color tm_medium">Digital Marketing</b><br>
                            Facebook, Youtube and Google Marketing
                        </td>
                        <td class="tm_width_2 tm_accent_border_20">$100</td>
                        <td class="tm_width_1 tm_accent_border_20">3</td>
                        <td class="tm_width_2 tm_accent_border_20 tm_text_right">$300</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice_total">
            <div class="total_sec">
                <table cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr class="tm_border_left tm_border_right tm_accent_border_20">
                            <td class="tm_width_4 tm_primary_color tm_accent_border_20 tm_border_none tm_bold">Subtoal
                            </td>
                            <td
                                class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right tm_border_none tm_bold">
                                $1650</td>
                        </tr>
                        <tr class="tm_border_left tm_border_right tm_accent_border_20">
                            <td class="tm_width_4 tm_primary_color tm_accent_border_20">Tax <span
                                    class="tm_ternary_color">(5%)</span></td>
                            <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right">+$82</td>
                        </tr>
                        <tr class="tm_border_left tm_border_right tm_accent_border_20">
                            <td class="tm_width_4 tm_primary_color tm_accent_border_20">Balance</td>
                            <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right">+$82</td>
                        </tr>
                        <tr class="tm_border_left tm_border_right tm_accent_border_20">
                            <td class="tm_width_4 tm_primary_color tm_accent_border_20">Paid</td>
                            <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right">+$82</td>
                        </tr>
                        <tr class="tm_border_bottom tm_border_left tm_border_right tm_accent_border_20 tm_accent_bg">
                            <td class="tm_width_4 tm_bold tm_f16 tm_white_color tm_accent_border_20">Grand Total </td>
                            <td class="tm_width_3 tm_bold tm_f16 tm_white_color tm_accent_border_20 tm_text_right">$1732
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="h-screen w-screen bg-teal-100 flex justify-center items-center">
        <div class="w-[560px] h-72 bg-white rounded-xl shadow-2xl flex justify-center items-center flex-col">
            <h1 class="text-3xl font-bold">Enter Your OTP</h1>
            <div class="mt-4 flex gap-x-3">
                
            </div>
        </div>
    </div>

</body>

</html>