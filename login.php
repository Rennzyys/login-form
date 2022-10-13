<?php
include_once("control.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAS#20</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            box-sizing: border-box;
        }
        body{
            background: lightblue;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            background: #fff;
            padding: 20px;
            border: 2px solid #ccc;
            width: 500px;
            border-radius: 15px;
            height: 300px;
        }
        p{
            display: flex;
            justify-content: center;
            align-items: center;

        }
        input{
            display: block;
            border: 2px solid #ccc;
            padding: 10px;
            width: 95%;
            margin: 10px auto;
            border-radius: 5px;
        }
        label{
            color: #999;
            font-size: 18px;
            padding: 10px;
        }
        button{
            float: left;
            padding: 10px 5px;
            border-radius: 5px;
            color: #fff;
            background: #999;
            margin-right: 10px;
            border: none;
        }

    </style>

</head>
<body>
    <div class="container">
        <form action="logincode.php" method="post">
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php }?>
                <div class="form-group">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname"><br>
                </div>
                <div class="form-group">
                    <label for="pin"><b>PIN Code:</b></label>
                    <input type="password" placeholder="Enter PIN" name="pin"><br>
                    <button type="submit">Login</button>
                </div>
        </form>
    </div>


</body>
</html>