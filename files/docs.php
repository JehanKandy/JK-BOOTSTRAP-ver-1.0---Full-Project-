<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            box-sizing: border-box;            
        }
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
        .box_code1 {
            width: 800px;
            height: 110px;
            border-radius: 5px;
            border: 0;
            background-color: #ebebeb;
            margin: 0;
        }
        .box_code2 {
            width: 800px;
            height: 550px;
            border-radius: 5px;
            border: 0;
            background-color: #ebebeb;
            margin: 0;
        }
        .container {
            width: 100%;
            height: 100%;
            background-color: white;
            background-size: cover;
            background-position: center;

        }

        
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand"  style="font-family:'Bebas Neue', cursive; font-size:150%" href="#">JK BOOTSTRAP - Style everything -- Documentation</a>
    <div>
        <a href="../index.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Home</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="#" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Documentation</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="icon.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Icons</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="example.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Examples</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
    <span class="navbar-text">
        v1.0 &nbsp&nbsp&nbsp&nbsp
        <a href="files/version.php"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg> &nbsp Download</button></a>
    </span>
</nav> 


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buttons
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All Button Styles</a>
          <a class="dropdown-item" href="#">Buttons Colors</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Headers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All Headers Styles</a>
          <a class="dropdown-item" href="#">Headers Colors</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Images
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">All Images Styles</a>
          <a class="dropdown-item" href="#">Images Colors</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tables
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_tables.php">All Tables Styles</a>
          <a class="dropdown-item" href="#">Table Colors</a>

        </div>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
        <br><br><br><br><br>
        <h1>CSS</h1>
        <p>
            Copy following content to <span style="color: red;">&lt;head&gt;</span> and <span style="color: red;">&lt;/head&gt;</span> as CSS style
        </p>

        <div class="box_code1">
            <br><br>
            <pre>
                <span style="color: rgb(143, 10, 10);">&lt;link</span> <span style="color: red;">rel=</span><span style="color: blue;">"stylesheet"</span> <span style="color: red;">href=</span><span style="color: blue;">"https://drive.google.com/uc?id=11Sp-uR_3rrfpsL91BM2OlnPkQpEzTmlc"</span><span class="nt">&gt;</span>&nbsp&nbsp&nbsp&nbsp
            </pre>
            
        </div>
        <br><br><br><br>
        <h1>Full Template</h1>
        <p>
            Full template for your work.
        </p>
        <div class="box_code2">
            <br><br>
            <pre>
                <span style="color: rgb(143, 10, 10);">&lt;!DOCTYPE <span style="color: red;">html</span>&gt;</span>
                <span style="color: rgb(143, 10, 10);">&lt;html <span style="color: red;">lang=<span style="color: blue;">"en"</span></span>&gt;</span>
                <span style="color: rgb(143, 10, 10);">&lt;head&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;meta <span style="color: red;">charset=</span><span style="color:blue;">"UTF-8"</span>&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;meta <span style="color: red;">http-equiv</span><span style="color: blue;">="X-UA-Compatible"</span> <span style="color: red;">content<span style="color: blue;">="IE=edge"</span>&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;meta <span style="color: red;">name=</span><span style="color: blue;">"viewport"</span> <span style="color: red;">content</span><span style="color: blue;">="width=device-width, initial-scale=1.0"</span>&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;title&gt;<span style="color: black;">Document</span>&lt;/title&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;link</span> <span style="color: red;">rel=</span><span style="color: blue;">"stylesheet"</span> <span style="color: red;">href=</span><span style="color: blue;">"https://drive.google.com/uc?id=11Sp-uR_3rrfpsL91BM2OlnPkQpEzTmlc"</span><span class="nt">&gt;</span>&nbsp&nbsp&nbsp&nbsp
                <span style="color: rgb(143, 10, 10);">&lt;/head&gt;</span>
                <span style="color: rgb(143, 10, 10);">&lt;body&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: black;">Welcome to JK Bootstrap</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h1&gt;</span><span style="color: black;">Header 1</span><span style="color: rgb(143, 10, 10);">&lt;/h1&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h2&gt;</span><span style="color: black;">Header 2</span><span style="color: rgb(143, 10, 10);">&lt;/h2&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h3&gt;</span><span style="color: black;">Header 3</span><span style="color: rgb(143, 10, 10);">&lt;/h3&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h4&gt;</span><span style="color: black;">Header 4</span><span style="color: rgb(143, 10, 10);">&lt;/h4&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h5&gt;</span><span style="color: black;">Header 5</span><span style="color: rgb(143, 10, 10);">&lt;/h5&gt;</span>
                &nbsp&nbsp&nbsp&nbsp&nbsp<span style="color: rgb(143, 10, 10);">&lt;h6&gt;</span><span style="color: black;">Header 6</span><span style="color: rgb(143, 10, 10);">&lt;/h6&gt;</span>

                <span style="color: rgb(143, 10, 10);">&lt;/body&gt;</span>
                <span style="color: rgb(143, 10, 10);">&lt;/html&gt;</span>

            
            </pre>
        </div>

        <br><br><br><br><br>


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
                    <p><a href="../index.php">Home</a></p>
                    <p><a href="#">Documentation </a></p>
                    <p><a href="icon.php">Icons</a></p>
                    <p><a href="example.php">Examples</a></p>
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
        &copy; &nbspDEVELOPED BY : JEHANKANDY || 2022 April &nbsp&nbsp&nbsp&nbsp DEVELOPED ON April 2022
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>