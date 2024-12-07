<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .success-container {
            text-align: center;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .success-container h1 {
            color: #28a745;
            margin-bottom: 10px;
        }
        .success-container p {
            font-size: 18px;
            color: #555;
        }
        .success-container .tick {
            font-size: 100px;
            color: #28a745;
        }
    </style>
    <script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 5000);
    </script>
</head>
<body>
    <div class="success-container">
        <div class="tick">✔</div>
        <h1>Payment Successful</h1>
        <p>Thank you! Your payment has been successfully processed.</p>
        <p>You will be redirected to the homepage shortly...</p>
    </div>
</body>
</html>
