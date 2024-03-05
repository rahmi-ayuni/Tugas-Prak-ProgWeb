<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .login-container p {
            margin-top: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<h2>Login</h2>

<form method="POST" action="{{ route('login.process') }}">
    @csrf
    <label>Username:</label><br>
    <input type="username" name="username"><br>

    <label>Password:</label><br>
    <input type="password" name="password"><br>

    <button type="submit">Login</button>
</form>

</body>
</html>