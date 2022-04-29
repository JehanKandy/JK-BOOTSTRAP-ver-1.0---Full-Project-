<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Buttons Styles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../main_style.css">
    <link rel="stylesheet" href="../style_temp.css">

    <style>    
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Josefin+Sans:ital@1&family=Teko:wght@300&display=swap');
     .container {
        width: 100%;
        height: 100%;
        background-color: white;
        background-size: cover;
        background-position: center;
    }
    .footer {
        width: 100%;
        height: 40vh;
        background-color: rgb(240, 240, 240);
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
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="docs.php">Get Started</a>
        </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Buttons
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_buttons.php">All Button Styles</a>
          <a class="dropdown-item" href="#">Buttons Colors</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Texts
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_text.php">All Text Styles</a>
          <a class="dropdown-item" href="#">Text Colors</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Images
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="all_images.php">All Images Styles</a>
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

<br><br><br><br>
<div class="container">
    <h1>Buttons</h1>
    <br>
    <b><p>JK Bootstrap Button Style </b> Normal</p>
    <input type="button" value="JK Bootstrap" class="jk-btn">
    <input type="button" value="JK Bootstrap" class="jk-btn-blue">
    <input type="button" value="JK Bootstrap" class="jk-btn-red">
    <input type="button" value="JK Bootstrap" class="jk-btn-lightblue">
    <input type="button" value="JK Bootstrap" class="jk-btn-gray">
    <input type="button" value="JK Bootstrap" class="jk-btn-dark">
    <button type="button" class="jk-btn">JK Btn</button>
    <button class="jk-btn">Hello</button>

    <br><br>
    <b><p>Code : </b>Normal Example</p>
    <div class="box-code-btn">
        <br><br>
        
        <pre>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-blue"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-red"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-lightblue"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-gray"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-dark"</span>&gt;</span>
        
            <span style="color: rgb(143, 10, 10);">&lt;button <span style="color: red;">type</span><span style="color:blue;">="button" </span></span><span style="color: red;">class</span><span style="color:blue">="jk-btn"</span><span style="color: rgb(143, 10, 10);">&gt;</span></span><span style="color: black;">JK Btn</span><span style="color: rgb(143, 10, 10);">&lt;button&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;button <span style="color: red;">class</span><span style="color:blue;">="jk-btn"<span style="color: rgb(143, 10, 10);">&gt;</span></span><span style="color: black;">Hello</span><span style="color: rgb(143, 10, 10);">&lt;button&gt;</span>        
        </pre>
    </div>
    <br><br><br>
    <b><p>JK Bootstrap Button Style </b> Outline</p>
    <input type="button" value="JK Bootstrap" class="jk-btn-outer">
    <input type="button" value="JK Bootstrap" class="jk-btn-outer-blue">
    <input type="button" value="JK Bootstrap" class="jk-btn-outer-red">
    <input type="button" value="JK Bootstrap" class="jk-btn-outer-lightblue">
    <input type="button" value="JK Bootstrap" class="jk-btn-outer-gray">
    <input type="button" value="JK Bootstrap" class="jk-btn-outer-dark">
    <button type="button" class="jk-btn-outer">JK Btn</button>
    <button class="jk-btn-outer">Hello</button>

    <br><br>
    <b><p>Code : </b>Outline Example</p>

    <div class="box-code-btn">
    <br><br>
        
        <pre>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer-blue"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer-red"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer-lightblue"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer-gray"</span>&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;input <span style="color: red;">type</span><span style="color:blue;">="button" </span><span style="color: red;">value</span><span style="color: blue;">="JK BOOTSTRAP" </span><span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer-dark"</span>&gt;</span>
        
            <span style="color: rgb(143, 10, 10);">&lt;button <span style="color: red;">type</span><span style="color:blue;">="button" </span></span><span style="color: red;">class</span><span style="color:blue">="jk-btn-outer"</span><span style="color: rgb(143, 10, 10);">&gt;</span></span><span style="color: black;">JK Btn</span><span style="color: rgb(143, 10, 10);">&lt;button&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;button <span style="color: red;">class</span><span style="color:blue;">="jk-btn-outer"<span style="color: rgb(143, 10, 10);">&gt;</span></span><span style="color: black;">Hello</span><span style="color: rgb(143, 10, 10);">&lt;button&gt;</span>        
        </pre>
    </div>
</div>
<br>

<br><br><br><br>
    <div class="footer">
        <br><br>
        <table>
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h1 style="font-family: 'Bebas Neue', cursive; color:rgba(0, 0, 0, 0.31)">JK BOOTSTRAP</h1>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h2>Links</h2>
                </td>                
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h2>Guides</h2>                    
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h2>Projects</h2>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <h2>More Infor</h2>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="vertical-align: top;">
                    <p>Create your unique web</p>
                    <p>with JK BOOTSTRAP</p>
                    <p>ongoing version - 1.0</p>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="vertical-align: top;">
                    <p><a href="../index.php">Home</a></p>
                    <p><a href="docs.php">Documentation</a></p>
                    <p><a href="icon.php">Icons</a></p>
                    <p><a href="example.php">Examples</a></p>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="vertical-align: top;">
                    <a href="docs.php">Geting Started</a>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="vertical-align: top;">
                    <a href="version.php">JK BOOTSTRAP 1</a>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td style="vertical-align: top;">
                    <p><a href="https://github.com/JehanKandy" target="_blank">GitHub</a></p>
                    <p><a href="https://www.youtube.com/channel/UC675lo49LTHGi9SCX8XbM5g" target="_blank">Youtube</a></p>
                </td>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
            </tr>
        </table>
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
