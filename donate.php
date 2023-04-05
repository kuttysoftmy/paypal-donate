<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            box-shadow: 0px 0px 10px #999;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }

        img {
            margin-bottom: 20px;
            max-width: 100%;
            height: auto;
        }

        form {
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="path/to/image" alt="Image related to your cause">
        <h1>Donate Now</h1>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_donations">
            <input type="hidden" name="business" value="your_paypal_email_address">
            <input type="hidden" name="currency_code" value="USD">
            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
        </form>
    </div>
</body>
</html>
