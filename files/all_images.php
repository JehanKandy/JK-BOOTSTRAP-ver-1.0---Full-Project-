<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Images Styles</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../main_style.css">
    <link rel="stylesheet" href="../style_temp.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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
        <a href="docs.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Documentation</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="icon.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Icons</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="example.php" style="text-decoration: none; color:white; font-size:250%; font-family: 'Teko', sans-serif;">Examples</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
    <span class="navbar-text">
        v1.0 &nbsp&nbsp&nbsp&nbsp
        <a href="version.php"><button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
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
    <h1>Images</h1>
    <h2>Image Tag</h2>
    <br>
    <pre><span style="color: rgb(143, 10, 10);">&lt;img </span><span style="color: red;">src</span><span style="color: blue;">="..."</span> <span style="color: red;">alt</span><span style="color: blue;">="..."</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
    <br>
    In this tag, <span style="color: red;">&lt;img&gt;</span>use for embed an Image in webpage. <br>
    The <span style="color: red;">&lt;img&gt;</span> has two attributes
    <ul>
        <li>
            src - path of image
        </li>
        <li>
            alt - alternate text
        </li>
    </ul>
    <hr>
    <h4>1). Image Style - Sizing</h4>
    <br>
    <table border="0">
        <tr>
            <td style="vertical-align: top;">
                <img src="../images/move3.jpg" alt="Image Sizing 1" class="jk-img-100-100">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Sizing 2" class="jk-img-200-200">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Sizing 3" class="jk-img-100-200">
            </td>
            <td style="vertical-align: top;">
                <img src="../images/move3.jpg" alt="Image Sizing 4" class="jk-img-200-100">
            </td>
        </tr>
        <tr>
            <td align="center">
                100x100
            </td>
            <td align="center">
                200x200
            </td>
            <td align="center">
                100x200
            </td>
            <td align="center">
                200x100
            </td>
        </tr>
    </table>
    <br>
    <h4>Code : </h4>
    <div class="box-img-style">
        <br>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- 100x100 --&gt</span></pre>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 1"</span> class<span style="color: blue;">="jk-img-100-100"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
            <br>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- 200x200 --&gt</span></pre>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 2"</span> class<span style="color: blue;">="jk-img-200-200"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
            <br>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- 100x200 --&gt</span></pre>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 3"</span> class<span style="color: blue;">="jk-img-100-200"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
            <br>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- 200x100 --&gt</span></pre>
            <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 4"</span> class<span style="color: blue;">="jk-img-200-100"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
    </div>

    
    <br><br><hr><br>
    <h4>2). Image Style - border-radius</h4>
    <br><br>
    <table border="0">
        <tr>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 1" class="jk-img-bd">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 2" class="jk-img-bd-10">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 3" class="jk-img-bd-20">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 4" class="jk-img-bd-50">
            </td>
        </tr>
        <tr>
            <td align="center">
                Normal
            </td>
            <td align="center">
                border-radius: 10px
            </td>
            <td align="center">
                border-radius: 20px
            </td>
            <td align="center">
                border-radius: 50px
            </td>
        </tr>
        <tr>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 5" class="jk-img-bd-p10">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 6" class="jk-img-bd-p20">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 7" class="jk-img-bd-p50">
            </td>
            <td>
                <img src="../images/move3.jpg" alt="Image Border 7" class="jk-img-bd-cir">
            </td>
        </tr>
        <tr>
            <td align="center">
                border-radius: 10%
            </td>
            <td align="center">
                border-radius: 20%
            </td>
            <td align="center">
                border-radius: 50%
            </td>
            <td align="center">
                border-radius: 100%
            </td>
        </tr>
    </table>
    <br>
    <h4>Code : </h4>

    <div class="box-img-bd">
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- Normal --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 1"</span> class<span style="color: blue;">="jk-img-bd"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 10px --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 2"</span> class<span style="color: blue;">="jk-img-bd-10"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 20px --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 3"</span> class<span style="color: blue;">="jk-img-bd-20"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 50px --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 4"</span> class<span style="color: blue;">="jk-img-bd-50"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 10% --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 5"</span> class<span style="color: blue;">="jk-img-bd-p10"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 20% --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 6"</span> class<span style="color: blue;">="jk-img-bd-p20"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 50% --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 7"</span> class<span style="color: blue;">="jk-img-bd-p50"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        <br>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: gray;">&lt;!-- border-radius: 100% --&gt</span></pre>
        <pre>&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;img <span style="color: red;">src<span style="color: blue;">="..."</span> alt<span style="color: blue;">="Image Sizing 8"</span> class<span style="color: blue;">="jk-img-bd-cir"</span><span style="color: rgb(143, 10, 10);">&gt;</span></pre>
        
        <br>
    </div>
    <br><br><br><br><br>

</div>


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
