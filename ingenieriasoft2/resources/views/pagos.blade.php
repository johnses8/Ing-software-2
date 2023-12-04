<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout-Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">

    <!--ADD POPPINS FONT-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!--Icon for title bar-->
    <link href="favicon.ico" rel="icon" type="image/x-icon">
</head>

<body>

    <div id="box" style="border-radius: 19px;margin: 0 auto;margin-top: 7%;">

        <div id="item1">
            <table
                style="padding-top: 2%; padding-left: 5%;padding-right: 5%; padding-bottom: 2%; background-color: white;border-radius: 19px;border-top-right-radius: 0px;border-bottom-right-radius: 0px;height: 100%;">
                <tr>

                    <td style="font-size: 22px;text-align:center;border-bottom:1px solid grey ;" colspan="3">
                        Order Summary
                    </td>
                    <td style="width: 150px;"></td>
                </tr>
                <tr>
                    <td><img src="img/nike.jpg" style="height: 70px;"></td>
                    <td
                        style="padding-left: 10%;width: 70%;vertical-align: middle;line-height: 20px;padding-top: 20px;">
                        <span style="font-weight: 600;"> Nike<br>Free Run 3.0
                            Women</span><br>Color:Grey/Orange,Size:10.5
                    </td>
                    <td style="width: 15%;"></td>
                </tr>
                <tr>
                    <td colspan="3" style="border-bottom:1px solid grey ;text-align: right;color: rgb(13, 118, 216);">
                        $99.95
                    </td>
                </tr>

                <tr style="height: 20px;"></tr>
                <tr>
                    <td><img src="https://rukminim1.flixcart.com/image/400/400/jeka07k0/backpack/r/g/h/songo-plus-02-songoplus02-backpack-american-tourister-original-imaf384xhqhpgb2g.jpeg?q=90"
                            style="height: 80px;margin-left:20px"></td>
                    <td
                        style="padding-left: 10%;width: 70%;vertical-align: middle;line-height: 20px;padding-top: 20px;">
                        <span style="font-weight: 600;"> American Tourister <br>Vintage
                            Backpack</span><br>Color:Olive, Size:
                        20L
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;border-bottom:1px solid grey ;color: rgb(13, 118, 216);">
                        $235.95
                    </td>
                </tr>
                <tr style="height: 20px;"></tr>
                <tr>
                    <td><img src="https://i.pinimg.com/originals/fc/e3/ba/fce3ba619beda462efbfd6c3279dab3c.png"
                            style="height: 80px;margin-left:10px"></td>
                    <td
                        style="padding-left: 10%;width: 70%;vertical-align: middle;line-height: 20px;padding-top: 20px;">
                        <span style="font-weight: 600;"> Monobento<br>Double Lunchbox</span><br>Color:Pink,
                        Size: Medium
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;border-bottom:1px solid grey ;color: rgb(13, 118, 216);">
                        $25.95
                    </td>
                </tr>
                <tr style="height: 20px;"></tr>
                <tr>
                    <td style="text-align: right;">VAT 19% <br>Delivery<br><span style="font-weight: 600;">TOTAL</span></td>
                    <td style="text-align: right;" colspan="2">$68.75<br>$4.95<br><span
                            style="font-weight: 700;">$435.55</span></td>
                </tr>
            </table>
        </div>
        <div style="background-color: rgb(54, 148, 236);border-top-right-radius: 19px;border-bottom-right-radius: 19px;width: 50%;"
            id="item2">
            <table style="line-height: 30px; padding-right: 5%;margin-left: 2%;" id="t2">
                <form>
                    <tr>
                        <td>
                            <label style="color:whitesmoke; font-weight: 600;">
                                Please select your card:
                            </label></td>
                        <td>
                            <select style="height: 28px; width: 100%; text-align-last:center; background-color:rgb(91, 177, 253); border: none;color: white; outline: none;"id="selectBox" onchange="changeFunc()">
                                <option>
                                    Visa
                                </option>
                                <option>
                                    American Express
                                </option>
                            </select>
                        </td>
                    </tr>
                    <tr style="height: 120px;">
                        <td colspan="2"><img id="cardlogo" src="img/visa.png"
                                style="height: 70px;display: block;margin:0 auto;"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label style="color:whitesmoke;font-weight: 600;">Card Number</label><br />
                            <input type="number"
                                style="height: 30px;width: 100%;background-color:rgb(91, 177, 253);border: none;color: white;outline: none;"
                                id="card" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <label style="color:whitesmoke;font-weight: 600;">Card Holder</label><br />
                            <input type="text"
                                style="height: 30px;width: 100%;background-color:rgb(91, 177, 253);border: none;color: white;outline: none;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 50%;">
                            <label style="color:whitesmoke;font-weight: 600;">Expires</label><br>
                            <input type="date"
                                style="height: 30px;width: 100%;background-color:rgb(91, 177, 253);border: none;color: white;outline: none;" />
                        </td>
                        <td style="width:50% ;padding-left: 20px;">
                            <label style="color:whitesmoke;font-weight: 600;">CVC</label><br>
                            <input type="number"
                                style="height: 30px;width: 100%;background-color:rgb(91, 177, 253);border: none;color: white;outline: none;" />
                        </td>
                    </tr>
                    <tr>

                        <td colspan="2" style="padding-top: 70px;padding-bottom: 10px;" id="td-button">
                            <a href="#"  class="btn hvr-right" onclick= "check();">Checkout</a>
                        </td>
                        <div id="popup-modal" class="modal">
                            <div class="modal-content animated bounce">
                                <a class="modal-close">×</a>
                            <div class="modal-text">
                                <h2>Thank you for shopping with us!</h2>
                                <p>Your order has been placed successfully. Soon you will receive your tracking ID on your email.</p>
                            </div>
                        </div>
                    </tr>
                </form>
            </table>
        </div>
        </tr>


    </div>
</body>
<script src="js/script.js"></script>

</html>
<!-- https://1000logos.net/wp-content/uploads/2016/10/American-Express-Logo.png -->