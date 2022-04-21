<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page { size:landscape; }
        html,
        body {
            font-size: 9px;
            font-family: Arial, serif;
        }

        td {
            padding: 4px 0;
        }

        .products-table {

            border-collapse: collapse;
        }

        .products-table td {
            border: 2px solid;
            padding: 4px 8px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
<div style="width: 11.7in; margin: auto">
    <table style="margin-bottom: 14px;">
        <tr>
            <td>
                <b> The Buyer/ Покупатель</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">
                LLC <b>"QUANTUM"</b>
            </td>
            <td colspan="1">
                <b>INN:</b> 7743233079
            </td>
            <td colspan="1">
                <b>KPP:</b> 774301001
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Address:</b> Russian Federation, 125212, Moscow, Vyborgskaya St., 16, building 4, room.
            </td>
        </tr>
        <tr>
            <td colspan="3">
               <b> OGRN: 5177746201298</b>
            </td>
        </tr>
        <tr>
            <td colspan="1">
                <b>Bank details:</b> PJSC " ALFA-BANK "
            </td>
            <td colspan="2">
               <b>Address:</b>	 107078, Moscow, st. Kalanchevskaya, 27

            </td>
        </tr>
        <tr>
            <td colspan="1">
                <b>Bank account:</b> No. 40702810802790000000
            </td>
            <td colspan="2">
               <b> Corr. Account: No.</b> 107078, Moscow, st. Kalanchevskaya, 27
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Email:</b> Quantum.cent@gmail.com
            </td>
        </tr>
    </table>

    {{--Продавец--}}
    <table>
        <tr>
            <td colspan="3">
                <b>The Seller/ Продавец</b>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>«MEHRAN FARAJI CO.»</b>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Address:</b> THE ISLAMIC REPUBLIC OF IRAN, ASTARA, GHOLAM MAHALLEH, PAYANEH ST. NO.10
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Postal code:</b> JIOI888990saa
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Bank:</b> BANK TEJARAT IRAN Bank address: IRAN GILAN ASTARA STR MOTAHARI
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>Branch code:</b> 54456454564564
            </td>
        </tr>
        <tr>
            <td colspan="1">
                <b>GLN code:</b> 8800
            </td>
            <td colspan="1">
                <b>Account No:</b> 670180000000000000000000
            </td>
            <td colspan="1">
                <b>Swift code:</b> BTEJIRTHRSH
            </td>
        </tr>
    </table>
    <table style="margin-top: 14px;">
        <tr>
            <td colspan="3">
                <b>The Producer/ Производитель</b>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <b>MOHAMMAD NOORI IRAN ASTARA</b>
            </td>
        </tr>
    </table>
    <table style="margin-top: 14px;">
        <tr>
            <td colspan="1">
                <b>Contract №</b> 11111
            </td>
            <td colspan="1">
                <b>dated</b> 25.04.2022
            </td>
            <td colspan="1">
                <b> Договор №</b> 11111 / от 25.03.2022
            </td>
        </tr>
        <tr>
            <td colspan="1" style="vertical-align: baseline;">
                <table>
                    <tr>
                        <td style="vertical-align: baseline;" >
                            Delivery terms / Условия поставки:
                        </td>
                    </tr>
                </table>
            </td>
            <td colspan="2">
                <table>
                    <tr>
                        <td>DAP - VOLGOGRAD, R/P GUMRAK (Incoterms 2020) /</td>
                    </tr>
                    <tr>
                        <td>
                            DAP- Волгоград, р/п Гумрак (Инкотермс 2020)
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="margin-top: 14px;">
        <tr>
            <td>
                <b>Specification / Спецификация №</b> 1233545645445664
            </td>
            <td>
                <b> dated/от</b> 25.04.2022
            </td>
        </tr>
    </table>


    {{--Товары--}}
    <table border="2" bordercolor="#000000"  class="products-table" style="text-align: center; font-size: 10px; margin-top: 10px; font-weight: 600; ">
        <tr>
            <td>
                No. / №
            </td>
            <td>
                Name of product / Наименование товара
            </td>
            <td>
                Trademark /Торговая марка
            </td>
            <td>
                Manufacturer / Производитель
            </td>
            <td>
                HS CODE / Код товара в соответствии с ТН ВЭД
            </td>
            <td>
                Country of Origin / Страна происхождения
            </td>
            <td>
                Measurement units/ Ед. измерения
            </td>
            <td>
                Number of pallets/ Количество поддонов
            </td>
            <td>
                Package type/ Род упаковки
            </td>
            <td>
                Number of packages/ Количество мест
            </td>
            <td>
                Net weight, kg / Вес нетто, кг
            </td>
            <td>
                Gross weight, kg / Вес брутто, кг
            </td>
            <td>
                Price USD/unit of measure. / Цена, долл.США/ед
            </td>
            <td>
                Amount, USD / Стоимость , долл. США
            </td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                FRESH PEPPER / Перец Свежий
            </td>
            <td>

            </td>
            <td>
                MOHAMMAD NOORI
            </td>
            <td>
                70960
            </td>
            <td>
                IRAN/Иран
            </td>
            <td>
                KG / КГ
            </td>
            <td>
                22
            </td>
            <td>
                CARTON/ Картонная коробка
            </td>
            <td>
                3148,00
            </td>
            <td>
                14607,00
            </td>
            <td>
                16386,4
            </td>
            <td>
                0.44
            </td>
            <td>
                6427,08
            </td>
        </tr>
        <tr>
            <td>
                2
            </td>
            <td>
                FRESH PEPPER / Перец Свежий
            </td>
            <td>

            </td>
            <td>
                MOHAMMAD NOORI
            </td>
            <td>
                70960
            </td>
            <td>
                IRAN/Иран
            </td>
            <td>
                KG / КГ
            </td>
            <td>
                22
            </td>
            <td>
                CARTON/ Картонная коробка
            </td>
            <td>
                3148,00
            </td>
            <td>
                14607,00
            </td>
            <td>
                16386,4
            </td>
            <td>
                0.44
            </td>
            <td>
                6427,08
            </td>
        </tr>
        <tr>
            <td colspan="1">

            </td>
            <td colspan="1">
                TRANSPORT SERVICE
            </td>
            <td colspan="11">
                Astara,Iran-IBCP Samur/Magaramkent
            </td>
            <td colspan="1">
                720
            </td>
        </tr>
        <tr>
            <td colspan="1">

            </td>
            <td colspan="1">
                TRANSPORT SERVICE
            </td>
            <td colspan="11">
                IBCP Magaramkent -Volgograd
            </td>
            <td colspan="1">
                1780
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>

            </td>
            <td>
                22
            </td>
            <td>

            </td>
            <td>
                3168
            </td>
            <td>
                14700
            </td>
            <td>
                16500
            </td>
            <td>

            </td>
            <td>
                8968
            </td>
        </tr>
    </table>
    <table style="width: 362px; font-size: 9px; font-weight: 600; margin-top: 25px;">
        <tr>
            <td style="width: 240px;">
                Net weight, kg
            </td>
            <td>
                14700
            </td>
        </tr>
        <tr>
            <td style="width: 240px;">
                Gross weight, kg
            </td>
            <td style="text-align: left">
                16500
            </td>
        </tr>
        <tr>
            <td style="width: 240px;">
                Total packages:
            </td>
            <td style="text-align: left">
                3168
            </td>
        </tr>
        <tr>
            <td style="width: 240px;">
                Total pallets
            </td>
            <td style="text-align: left">
                22
            </td>
        </tr>
        <tr>
            <td style="width: 240px;">
                Weigt pallets, kg
            </td>
            <td style="text-align: left">
                330
            </td>
        </tr>
    </table>
</div>
</body>
</html>
