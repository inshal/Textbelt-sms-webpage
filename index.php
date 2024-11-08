<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send SMS using TextBelt</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(270deg, #ff7e5f, #feb47b, #ff7e5f);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
            color: white;
        }
        .container {
            max-width: 600px;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: rgba(34, 34, 34, 0.8);
            color: white;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input[type="text"], input[type="tel"] {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .response {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #333;
        }
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </style>
    <script>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Send SMS using TextBelt</h1>
        <form action="send_sms.php" method="post">
            <label for="phone">Phone Numbers (comma-separated):</label>
            <input type="text" id="phone" name="phone" required>

            <label for="message">Message:</label>
            <input type="text" id="message" name="message" required>

            <label for="sender_id">Sender ID (optional):</label>
            <input type="text" id="sender_id" name="sender_id">

            <button type="submit">Send SMS</button>
        </form>
        <?php
        if (isset($_GET['response'])) {
            echo '<div class="response">';
            echo htmlspecialchars($_GET['response']);
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>