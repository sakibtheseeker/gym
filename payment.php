<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: linear-gradient(145deg, #4caf50, #81d4fa); /* Matches provided gradient */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .payment-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px; /* Fixed width to maintain container size */
            text-align: center;
        }

        .payment-container h1 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #4caf50; /* Matching green tone */
        }

        .payment-container input {
            width: 100%; /* Full width of the container */
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 50px; /* Consistent rounded edges */
            font-size: 16px;
            background: #fafafa;
            box-sizing: border-box;
        }

        .payment-container input:focus {
            border-color: #4caf50;
            outline: none;
        }

        .payment-container .btn {
            display: inline-block;
            background: linear-gradient(145deg, #81d4fa, #4caf50);
            color: #fff;
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            margin-top: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .payment-container .btn:hover {
            background: linear-gradient(145deg, #4caf50, #81d4fa); /* Reverse gradient */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .payment-container .btn:active {
            transform: scale(0.95);
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <h1>Make a Payment</h1>
        <form action="payment.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name" required>
            <input type="email" name="email" placeholder="Enter Your Email" required>
            <input type="number" name="amount" placeholder="Enter Amount" required>
            <button type="submit" name="pay" class="btn">Pay Now</button>
        </form>
        <footer>
            &copy; 2024 Your Gym Management System
        </footer>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pay'])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $amount = htmlspecialchars($_POST['amount']);

        $paymentSuccessful = true; // Replace with real logic

        if ($paymentSuccessful) {
            header("Location: success.php");
            exit();
        } else {
            echo "<p style='color: red; text-align: center;'>Payment failed. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
