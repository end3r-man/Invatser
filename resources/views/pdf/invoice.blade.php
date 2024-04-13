<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet" href="invoice.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>

        @font-face {
            font-family: "Noto Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings: "wdth" 100;
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-style: 'Nobile', sans-serif;
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
            width: 41.4%;
            background: #fff;
            margin-left: 472px;
        }

        .add_margin {
            padding-top: 15px;
        }

        .noto-font {
            font-family: "Noto Sans", sans-serif;
        }
    </style>
</head>

<body>
    <div class="invoice">
        <div class="header">
            <h1 class="top1">Date: {{ $users->created_at->format('d M Y') }}</h1>
            <h1 class="top2">Invoice: {{ $users->id }}</h1>
            <h1 class="top3">Status: <span style="color: rgb(162, 255, 162);">Paid</span></h1>
        </div>

        <div class="invoice_logo">
            <div class="logo_div tm_width_7"><img src="https://asuratoon.com/wp-content/uploads/2021/03/Group_1.png"
                    alt=""></div>
            <div class="logo_div">
                @php
                    $adi = json_decode($admin->address, true);
                @endphp
                <p> {{$adi['street']}}</p>
                <p> {{$adi['city']}}</p>
                <p> {{$adi['country']}} - {{$adi['zip']}} </p>
            </div>
            <div class="logo_div tm_border_none">
                <p> {{$admin->phone}} </p>
                <p> {{$admin->email}} </p>
                <p> {{config('app.url')}} </p>
            </div>
        </div>
        <div class="invoice_add">
            <div class="logo_div tm_width_7">
                <h3>Billled To:</h3>
                <p> {{$client->name}}</p>
                <p> {{$client->email}} </p>
                <p> {{$client->phone}} </p>
            </div>
            <div class="logo_div add_margin">
                @php
                    $option = json_decode($client->add_data, true);
                @endphp
                <p> {{$option['address']}}</p>
                <p> {{$option['city']}},{{$option['state']}}</p>
                <p> {{$option['country']}} - {{$option['pincode']}} </p>
            </div>
            <div class="logo_div add_margin tm_border_none">
                <p> Date: {{ $users->due_date }}</p>
                <p> Total: {{ $users->mtoal }}</p>
                <p> Method: Soon</p>
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
                    @php
                        $arra = json_decode($users->product, true);
                    @endphp

                    @if (count($arra) <= 1)
                        <tr style="border-bottom: 1px solid #dbdfea;">
                            <td class="tm_width_1 tm_accent_border_20">1.</td>
                            <td class="tm_width_6 tm_accent_border_20">
                                <b class="tm_primary_color tm_medium">{{ $arra[0]['product'] }}</b><br>
                            </td>
                            <td class="tm_width_2 tm_accent_border_20"><span class="noto-font">{{$admin->currency}}</span>{{ $arra[0]['price'] }}</td>
                            <td class="tm_width_1 tm_accent_border_20">{{ $arra[0]['quantity'] }}</td>
                            <td class="tm_width_2 tm_accent_border_20 tm_text_right"><span class="noto-font">{{$admin->currency}}</span>{{ $arra[0]['total'] }}</td>
                        </tr>
                    @else
                        @foreach ($arra as $index => $item)
                            <tr>
                                <td class="tm_width_1 tm_accent_border_20">1.</td>
                                <td class="tm_width_6 tm_accent_border_20">
                                    <b class="tm_primary_color tm_medium">{{ $arra[$index]['product'] }}</b><br>
                                </td>
                                <td class="tm_width_2 tm_accent_border_20"><span class="noto-font">{{$admin->currency}}</span>{{ $arra[$index]['price'] }}</td>
                                <td class="tm_width_1 tm_accent_border_20">{{ $arra[$index]['quantity'] }}</td>
                                <td class="tm_width_2 tm_accent_border_20 tm_text_right"><span class="noto-font">{{$admin->currency}}</span>{{ $arra[$index]['total'] }}
                                </td>
                            </tr>
                        @endforeach
                    @endif
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
                                class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right tm_border_none tm_bold"><span class="noto-font">{{$admin->currency}}</span>{{ $users->subtotal }}</td>
                        </tr>
                        {{-- <tr class="tm_border_left tm_border_right tm_accent_border_20">
                            <td class="tm_width_4 tm_primary_color tm_accent_border_20">Tax <span
                                    class="tm_ternary_color">(5%)</span></td>
                            <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right">+$82</td>
                        </tr> --}}
                        @if ($users->balance >= 1)
                            <tr class="tm_border_left tm_border_right tm_accent_border_20">
                                <td class="tm_width_4 tm_primary_color tm_accent_border_20">Balance</td>
                                <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right"><span class="noto-font">{{$admin->currency}}</span>{{ $users->balance }}</td>
                            </tr>
                        @endif

                        @if (!is_null($paid))
                            <tr class="tm_border_left tm_border_right tm_accent_border_20">
                                <td class="tm_width_4 tm_primary_color tm_accent_border_20">Paid</td>
                                <td class="tm_width_3 tm_primary_color tm_accent_border_20 tm_text_right"><span class="noto-font">{{$admin->currency}}</span>{{ $paid }}</td>
                            </tr>
                        @endif
                        <tr class="tm_border_bottom tm_border_left tm_border_right tm_accent_border_20 tm_accent_bg">
                            <td class="tm_width_4 tm_bold tm_f16 tm_white_color tm_accent_border_20">Grand Total </td>
                            <td class="tm_width_3 tm_bold tm_f16 tm_white_color tm_accent_border_20 tm_text_right"><span class="noto-font">{{$admin->currency}}</span>{{ $users->mtoal }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
