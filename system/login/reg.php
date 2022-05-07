<?php 
    include("lib/functions/admin_user_func.php");

    if(isset($_POST['register'])){
        $result = userReg($_POST['user'],$_POST['email'],$_POST['password'],$_POST['cpassword']); 
        echo $result;       

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <style>
        .reg{
            width: 100%;
            height: 120%; 
            background: linear-gradient(to bottom right, #ff00ff 0%, #3333ff 100%);
            background-size: cover;
            background-position: center;
        }
        .footer{
            width: 100%;
            height: 50%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url("../../images/4419205.jpg");
            background-size: cover;
            background-position: center;            
        }
        .box-reg{
            background-color: white;
            width: 30%;
            padding: 50px;
            margin-left: 30%;
            border: none;
            border-radius: 1%;
            box-shadow: 5px 10px 10px #ff00ff;
        }
        .box-reg input{
            width: 100%;
            height: 50px;
            background: transparent;
            border-radius: 10px;
            border: none;
            background-color: rgba(0, 0, 0, 0.06);
            outline: none;
            resize: none;
        }
        .box-reg .btn-reg{
            width: 49%;
            height: 50px;
            background: linear-gradient(to right, #3333ff -120%, #ff00ff 120%);
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bolder;
            font-size: large;
            text-transform: uppercase;
        }
        .box-reg .btn-reg:hover{
            background: linear-gradient(to right, #0000cc 0%, #cc33ff 100%);
        }
        .box-reg .btn-clear{
            width: 49%;
            height: 50px;
            background: linear-gradient(to right, #3333ff -120%, #ff00ff 120%);
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bolder;
            font-size: large;
            text-transform: uppercase;
        }
        .box-reg .btn-clear:hover{
            background: linear-gradient(to right, #0000cc 0%, #cc33ff 100%);
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand"  style="font-family:'Bebas Neue', cursive; font-size:150%" href="#">&nbsp;&nbsp;&nbsp;JK BOOTSTRAP - Style everything</a>

    <span class="navbar-text">
        v1.0 &nbsp&nbsp&nbsp&nbsp
        <a href="../../index.php"><button class="btn btn-primary"> &nbsp back </button></a>&nbsp;&nbsp;&nbsp;

</span>
</nav>

<div class="reg">
<br><br><br><br>
    <div class="box-reg">
        <h1>Registration</h1>
        <hr style="color: gray;">
        <br>
        

            <form action="<?php echo ($_SERVER['PHP_SELF']);?>" method="POST">

                <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="user" id="user"  placeholder="Username" required>
                </div>

                <br>

                <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email"  placeholder="Email" required>
                </div>

                <br>

                <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"  placeholder="Password" required>
                </div>

                <br>

                <div class="form-group">
                <label for="cpass">Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword"  placeholder="Confirm Password" required>
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Registration" name="register" class="btn-reg">&nbsp;<input type="reset" value="Clear" class="btn-clear">
                </div>
            </form>
            <br>
            <hr style="color:gray;">
            <p>Already have an account? <a href="login.php" style="color: #ff00ff;">Login</a></p>

        </div>
<br><br><br><br>

</div>



<div class="footer">
    <br><br><br>
    <center>
        <table border="0">
            <tr>
                <td>
                    <a href="index.php" style="text-decoration: none;"><h1>JK BOOTSTRAP</h1></a>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3 style="color:white;">Links</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3 style="color:white;">Guides</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3 style="color:white;">Projects</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3 style="color:white;">Versions</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3 style="color:white;">More infor</h3>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <p style="color:white;">Develop your web Uniquely</p><p style="color:white;"> with JK BOOTSTRAP</p>
                    <p style="color:white;">ongoing version - 1.0</p>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td style="vertical-align: top;">
                    <p><a href="index.php">Home</a></p>
                    <p><a href="files/docs.php">Documentation </a></p>
                    <p><a href="files/icon.php">Icons</a></p>
                    <p><a href="files/example.php">Examples</a></p>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td style="vertical-align: top;">
                    <a href="files/docs.php">Getting Started</a>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td style="vertical-align: top;">
                    <a href="files/version.php">JK Bootstrap 1</a>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td style="vertical-align: top;">
                    <p><a href="files/version.php">v1.0</a></p>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td style="vertical-align: top;">
                    <p><a href="https://github.com/JehanKandy" target="_blank">GitHub</a></p>
                    <p><a href="https://www.linkedin.com/in/jehan-kandy-23a3a4223/" target="_blank">Youtube</a></p>
                </td>
            </tr>
        </table>
    </center>
    <br><br><br>
</div>
<div class="card text-center">
    <div class="card-footer text-muted">
        &copy; &nbspDEVELOPED BY : <a href="https://github.com/JehanKandy" target="_blank" style="text-decoration: none;">JEHANKANDY</a> || 2022 April &nbsp&nbsp&nbsp&nbsp DEVELOPED ON April 2022
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
</body>
</html>
