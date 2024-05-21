<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #ff7eb9, #ff1493) !important;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #ff7eb9;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .login-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 40px;
            border-radius: 8px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
        }

        .label-container {
            text-align: left; /* Align labels to the left */
        }

        label {
            margin: 15px 0;
            color: #ff7eb9;
            font-weight: bold;
            display: block;
            text-align: left; /* Align each label to the left */
        }

        input {
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ff7eb9;
            border-radius: 5px;
            background-color: #ffe6f0;
            color: #333333;
            transition: background-color 0.3s ease, border-color 0.3s ease;
            width: 100%;
            box-sizing: border-box;
            text-align: left; /* Align text inside input to the left */
        }

        input:focus {
            background-color: #fcd2e7;
            border-color: #ff7eb9;
        }

        button {
            background-color: #ff7eb9;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff1493;
        }
    </style>
</head>

<body>

    <div class="login-container">
        <center>
            <h1>Login</h1>
            <form action="login_proses.php" method="post">
                <label for="user">Username:</label>
                <input type="text" id="username" name="username" required><br><br>

                <label for="pass">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <button type="submit">Login</button>
            </form>
        </center>
    </div>

</body>

</html>
