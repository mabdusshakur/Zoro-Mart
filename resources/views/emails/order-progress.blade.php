<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .signature {
            margin-top: 20px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Order Progress</h1>
        <p>Dear {{ $mail_data['buyer_name'] }},</p>
        <p>We would like to inform you about the progress of your order.</p>
        <p>Order ID: {{ $mail_data['order_id'] }}</p>
        <p>Status: {{ $mail_data['order_status'] }}</p>
        <p>Thank you for choosing our service.</p>
        <p class="signature">Best regards,<br>The {{config('app.name')}} Team</p>
    </div>
</body>
</html>
