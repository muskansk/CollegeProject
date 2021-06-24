<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
            align: center;
        }

        div {
            background-image: url('img_login.jpg');
        }

        button {
            background-color: bl;
            width: 10%;
            color: orange;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 20%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid black;
            box-sizing: border-box;
        }

        button:hover {
            opacity: 0.7;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }


        .container {
            padding: 25px;
            background-color: white;
        }
    </style>
</head>

<body align="center">
    <h1> Login Form </h1>
    <form>
        <div class="container">
            <label>Username : </label>
            <input type="text" placeholder="Enter Username" name="username" required> <br>
            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required> <br>
            <button type="submit">Login</button> <br>
            <input type="checkbox" checked="checked"> Remember me <br>
            Forgot <a href="#"> password? </a>
        </div>
    </form>
</body>

</html>