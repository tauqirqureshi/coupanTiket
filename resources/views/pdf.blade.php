<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Visiting Card</title>
    <style>
        body {
            font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    flex-direction: column;
        }
        .card {
            width: 89.00mm;
            height: 53.98mm;
            background-color: white;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .header {
            display: flex;
            /* justify-content: space-between; */
            align-items: center;
            /* margin-bottom: 5px; */
            /* padding-bottom: 5px; */
            border-bottom: 1px solid #ccc;
            flex-direction:row;

        }
        .header .left img, .header .right img {
            width: 20px;
            height: 20px;
            position :fixed;
            border-radius: 50%;
        }
        .header .center {
            text-align: center;
        }
        .header .center .title {
            font-size: 13px;
            font-weight: bold;
            /* margin-bottom: 5px; */
        }
        .header .center .subtitle {
            font-size: 10px;
            color: #777;
            margin: 0;
        }
        .header .right .website {
            font-size: 10px;
            color: #777;
            text-align: right;
        }
        .tested-for {
            font-size: 10px;
            text-align: center;
            margin-bottom: 4px;
        }
        .tested-for a {
            color: black;
            text-decoration: none;
        }
        .details table {
            width: 100%;
            border-collapse: collapse;
            /* margin-bottom: 5px; */
        }
        .details th, .details td {
            padding: 1px;
        }
        .details th {
            text-align: left;
            /* background-color: #f0f0f0; */
            font-size: 8px;
            font-weight: bold;
        }
        .details td {
            /* text-align: left;
            background-color: #f0f0f0; */
            font-size: 8px;
        }
        .side-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* margin: 11px; */
        }
        .side-content .qrcode img, .side-content .image img {
            width: 63px;
            height: 63px;
            border-radius: 5px;

        }
        .imagedev{
    display: flex;
    flex-direction: row;
    padding: 0px;
    margin: 0;
    flex-wrap: nowrap;
    justify-content: space-between;
}
        .footer {
            font-size: 10px;
            /* display: flex;
            justify-content: space-between; */
            /* align-items: flex; */
            /* padding-top: 5px; */
            border-top: 1px solid #ccc;
            /* margin-top: 5px; */
        }
        .footer .certificate-no {
            font-weight: bold;
            text-align: center;
        }
        .gem-name {
            background-color: #FFD700;
            text-align: center;
            padding: 5px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 5px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <div class="left">
                 <img src="https://cdn-icons-png.flaticon.com/512/1453/1453633.png" alt="Microscope Logo">
            </div>
            <div class="center">
                <div class="title">HI TECH LAB</div>
                <div class="subtitle">Gemstone Identification Report</div>
            </div>
            <div class="right">
                 <!-- <img src="https://cdn-icons-png.flaticon.com/512/1453/1453633.png" alt="Globe Icon">  -->
                <div class="website">www.hitechlab.com</div>
            </div>
        </div>
        <div class="tested-for">Tested for <a href="https://www.CrystalHeaven.in">www.CrystalHeaven.in</a></div>
        <div class="imagedev">
        <div class="details">
            <table>
                <tr>
                    <th>Colour</th>
                    <td>Red</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td>40km</td>
                </tr>
                <tr>
                    <th>Shape</th>
                    <td>circle</td>
                </tr>
                <tr>
                    <th>R. I</th>
                    <td>4893.89</td>
                </tr>
                <tr>
                    <th>S. G</th>
                    <td>3i930.99</td>
                </tr>
                <tr>
                    <th>Hardness</th>
                    <td>No</td>
                </tr>
                <tr>
                    <th>Micro Obs.</th>
                    <td>838200.3893</td>
                </tr>
                <tr>
                    <th>Comment</th>
                    <td>dkfadslkfaldfjal;sdjfa  dflkadlfflkj</td>
                </tr>
            </table>
        </div>
        <div class="side-content">
            <div class="qrcode">
                 <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/QR_code_Wikimedia_Commons_%28URL%29.png/600px-QR_code_Wikimedia_Commons_%28URL%29.png?20110116110901" alt="QR Code">  -->
            </div>
            <div class="image">
                 <!-- <img src="https://png.pngtree.com/png-vector/20240518/ourlarge/pngtree-dried-fruits-product-emblem-png-image_12476247.png" alt="5 Mukhi Rudraksha">  -->
            </div>
        </div>
        </div>
        <div class="footer">
            <div class="certificate-no">
                Certificate No. : 484884758374759
            </div>
        </div>
        <div class="gem-name">5 Mukhi Rudraksha</div>
    </div>


</body>
</html>
