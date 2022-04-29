<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Tables Styles</title>
    <link rel="stylesheet" href="../main_style.css">
    <link rel="stylesheet" href="../style_temp.css">
    <link rel="stylesheet" href="../css/style.css">
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
    <h1>Tables</h1>
    <h2>Table Tag</h2>
    <br><br>
    <pre><span style="color: rgb(143, 10, 10);">&lt;table&gt;<span style="color: black;">...</span>&lt;/table&gt;</span></pre>
    <br>
    in this <span style="color: rgb(143, 10, 10);">&lt;table&gt;</span> and <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span> have, 
    <ul>
        <li><b>thead</b> - head of the table</li>
        <li><b>tbody</b> - body of the table</li>
        <li><b>tr</b> - rows in table</li>
        <li><b>th</b> - in <b>tr</b> </li>
        <li><b>td</b>- in <b>tr</b> </li>
    </ul>
    <br>

    <h4>Style - 01</h4>

    <br>

    <table class="jk-table">
        <thead>
            <tr>
                <th><Strong>#</Strong></th>
                <th>Name</th>
                <th>Date Of Birth</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Action</th>
                <th>Gender</th>                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>JehanKandy</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Male</td>            
            </tr>
            <tr>
                <td>2</td>
                <td>Mala</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Female</td>            
            </tr>
            <tr  class="active-row">
                <td>3</td>
                <td>JehanKandy</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Male</td>            
            </tr>
            <tr>
                <td>4</td>
                <td>JehanKandy</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Male</td>            
            </tr>
            <tr>
                <td>5</td>
                <td>JehanKandy</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Male</td>            
            </tr>
            <tr>
                <td>6</td>
                <td>JehanKandy</td>
                <td>01.01.2022</td>
                <td>Sri Lanka</td>
                <td>+94 711758851</td>
                <td><button class="jk-btn" style="padding: 10px 12px;">Action</button></td>
                <td>Male</td>            
            </tr>
        </tbody>
    </table>
    <br><br><br>

    <h4>Code : </h4>
    <div class="box-table-style">
        <br>
            <pre>
                <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table"</span></span>&gt; </span>
                &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
                &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
                &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
                &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
                <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


            </pre>
        <br>
    </div>
    <br><br><br><br>
    
    <h4>Style - 02</h4>



        <table class="jk-table-blue">
            <thead>
                <tr>
                    <th><Strong>#</Strong></th>
                    <th>Name</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Action</th>
                    <th>Gender</th>                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mala</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Female</td>            
                </tr>
                <tr  class="active-row">
                    <td>3</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>4</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>5</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>6</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-blue" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
            </tbody>
        </table>
<br><br><br>

<h4>Code : </h4>
<div class="box-table-style">
    <br>
        <pre>
            <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table-blue"</span></span>&gt; </span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-blue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


        </pre>
    <br>
</div>

    <br><br><br><br>
        
    <h4>Style - 03</h4>



        <table class="jk-table-red">
            <thead>
                <tr>
                    <th><Strong>#</Strong></th>
                    <th>Name</th>
                    <th>Date Of Birth</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Action</th>
                    <th>Gender</th>                
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mala</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Female</td>            
                </tr>
                <tr  class="active-row">
                    <td>3</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>4</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>5</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
                <tr>
                    <td>6</td>
                    <td>JehanKandy</td>
                    <td>01.01.2022</td>
                    <td>Sri Lanka</td>
                    <td>+94 711758851</td>
                    <td><button class="jk-btn-red" style="padding: 10px 12px;">Action</button></td>
                    <td>Male</td>            
                </tr>
            </tbody>
        </table>
<br><br><br>

<h4>Code : </h4>
<div class="box-table-style">
    <br>
        <pre>
            <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table-red"</span></span>&gt; </span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-red"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
            &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
            &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
            <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


        </pre>
    <br>
    
</div>
<br><br><br><br><br>

<h4>Style - 04</h4>



<table class="jk-table-lightblue">
    <thead>
        <tr>
            <th><Strong>#</Strong></th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
            <th>Gender</th>                
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>2</td>
            <td>Mala</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Female</td>            
        </tr>
        <tr  class="active-row">
            <td>3</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>4</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>5</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>6</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-lightblue" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
    </tbody>
</table>
<br><br><br>

<h4>Code : </h4>
<div class="box-table-style">
<br>
<pre>
    <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table-lightblue"</span></span>&gt; </span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-lightblue"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
    <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


</pre>
<br>

</div>
<br><br><br><br><br>

<h4>Style - 05</h4>



<table class="jk-table-gray">
    <thead>
        <tr>
            <th><Strong>#</Strong></th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
            <th>Gender</th>                
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>2</td>
            <td>Mala</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Female</td>            
        </tr>
        <tr  class="active-row">
            <td>3</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>4</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>5</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>6</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-gray" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
    </tbody>
</table>
<br><br><br>

<h4>Code : </h4>
<div class="box-table-style">
<br>
<pre>
    <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table-gray"</span></span>&gt; </span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-gray"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
    <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


</pre>
<br>

</div>
<br><br><br><br><br>

<h4>Style - 06</h4>



<table class="jk-table-dark">
    <thead>
        <tr>
            <th><Strong>#</Strong></th>
            <th>Name</th>
            <th>Date Of Birth</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
            <th>Gender</th>                
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>2</td>
            <td>Mala</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Female</td>            
        </tr>
        <tr  class="active-row">
            <td>3</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>4</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>5</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
        <tr>
            <td>6</td>
            <td>JehanKandy</td>
            <td>01.01.2022</td>
            <td>Sri Lanka</td>
            <td>+94 711758851</td>
            <td><button class="jk-btn-dark" style="padding: 10px 12px;">Action</button></td>
            <td>Male</td>            
        </tr>
    </tbody>
</table>
<br><br><br>

<h4>Code : </h4>
<div class="box-table-style">
<br>
<pre>
    <span style="color: rgb(143, 10, 10);">&lt;table <span style="color: red;">class<span style="color: blue;">="jk-table-dark"</span></span>&gt; </span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;thead&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;&lt;strong&gt;<span style="color: black;">#</span>&lt;/strong&gt;&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Name</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Date Of Birth</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Address</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Mobile</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Action</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;th&gt;<span style="color: black;">Gender</span>&lt;/th&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/thead&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;tbody&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">1</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">2</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Mala</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Female</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr <span style="color: red;">class<span style="color: blue;">="active-row"</span></span>&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">3</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">4</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">5</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;tr&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">6</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Jehankandy</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">01.01.2022</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Sri Lanka</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">+94 711758851</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;&lt;button <span style="color: red;">class<span style="color: blue;">="jk-btn-dark"</span></span>&gt;<span style="color: black;">Action</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;td&gt;<span style="color: black;">Male</span>&lt;/td&gt;</span>
    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tr&gt;</span>
    &nbsp;<span style="color: rgb(143, 10, 10);">&lt;/tbody&gt;</span>
    <span style="color: rgb(143, 10, 10);">&lt;/table&gt;</span>


</pre>
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
