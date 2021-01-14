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
<form method="post" action="{{URL::to('/store')}}">
    @csrf
    <div align="center">
        </br>
        <label>Username</label>
        </br>
        <input type="text" name="name" value="" class="form-control">
        </br>
        <label>Email</label>
        </br>
        <input type="text" name="email" value="" class="form-control">

        <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">

        </br>
        <label>Password</label>
        </br>
        <input type="password" name="password" value="" class="form-control">
        </br>
        <button type="submit">Register</button>
        </br>
    </div>
</form>
<div align="center">
<button align="center" onclick="location.href='/users/login'">Login</button>
</div>
</html>
