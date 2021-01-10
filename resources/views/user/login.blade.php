<html>
<head>
    <style>
        /* Bordered form */
        form {
            border: 3px solid #f1f1f1;
        }

        /* Full-width inputs */
        input[type=text], input[type=password] {
            width: 30%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #C70039;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 30%;
        }

        /* Add a hover effect for buttons */
        button:hover {
            opacity: 0.8;
        }

        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }

    </style>
</head>
<form method="post" action="{{route('post_login')}}">
    @csrf
    <div align="center">
        </br>
        <label>Username</label>
        </br>
        <input type="text" name="name" class="form-control">
        </br>
        <label>Password</label>
        </br>
        <input type="password" name="password" class="form-control">
        </br>
        <button type="submit">Login</button>
    </div>
    <div align="center">
        <p><h3>Use This Data To Login:</h3></p>
        <p>Username: admin</p>
        <p>Password: admin</p>
    </div>
</form>
</html>
