<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JK BOOTSTRAP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .carousel-item{
            width: 100%;
            height: 60vh;
        }
        .card-img{
            background-size: cover;
            background-position: center;
            background-color: rebeccapurple;
        }
        .footer table td h3 {
            color: rgb(54, 54, 54);
            font-size: 130%;            
        }
        .footer table td h1 {
            color: rgb(167, 167, 167);
            font-family: 'Bebas Neue', cursive;
        }

    </style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/move3.jpg" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
            <h2>Welcome</h2>
            <p>to JK BOOTSTRAP</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/move2.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
            <h2>styling</h2>
            <p>everything</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/move1.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
            <h2>Build it</h2>
            <p>Uniquely</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   

<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand"  style="font-family:'Bebas Neue', cursive; font-size:150%" href="#">JK BOOTSTRAP - Style everything</a>
    <div>
        <a href="index.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="files/docs.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Documentation</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="files/icon.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Icons</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="files/example.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Examples</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
    <span class="navbar-text">
        v1.0 &nbsp&nbsp&nbsp&nbsp
        <a href="files/version.php"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg> &nbsp Download</button></a>
    </span>
</nav>

<div class="container">
    <br><br><br>
    <h1>Get Started your web development <br> with JK BOOTSTRAP</h1>
        <br></br>
    <a href="#"><button class="btn btn-primary"><h2>Get Started</h2></button></a>

<br><br><br><br><br>

</div>

<div class="contact">
    <br><br><br>
    <center>
        <p>
            <a href="https://www.facebook.com/jayaba.jehan" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gray" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                </svg></a>
            
            &nbsp&nbsp&nbsp&nbsp
            <a href="https://www.youtube.com/channel/UC675lo49LTHGi9SCX8XbM5g" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gray" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                </svg></a>
            
            &nbsp&nbsp&nbsp&nbsp
            <a href="https://www.linkedin.com/in/jehan-kandy-23a3a4223/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gray" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                </svg></a>
            
            &nbsp&nbsp&nbsp&nbsp
            <a href="https://github.com/JehanKandy" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="gray" class="bi bi-github" viewBox="0 0 16 16">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                </svg></a>
        </p>
    </center>
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
                    <h3>Links</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3>Guides</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3>Projects</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3>Versions</h3>
                </td>
                <td>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                </td>
                <td>
                    <h3>More infor</h3>
                </td>
            </tr>
            <tr>
                <td style="vertical-align: top;">
                    <p>Develop your web Uniquely</p> with JK BOOTSTRAP
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

</div>
<div class="card text-center">
    <div class="card-footer text-muted">
        &copy; &nbspDEVELOPED BY : JEHANKANDY || 2022 April &nbsp&nbsp&nbsp&nbsp DEVELOPED ON April 2022
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>