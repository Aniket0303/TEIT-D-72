<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  
  background-image:url("https://metbhujbalknowledgecity.ac.in/wp-content/uploads/2020/03/2.jpg");
                background-repeat:no-repeat;
                background-size:100%;
               

  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(252, 7, 7);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #130101;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #b6b6b3;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<head>
  <title>
    MET INSTITUTE OF ENGINEERING
  </title>

  <meta charset="utf-8">
  <meta name="viewport" 
        content="width=device-width, 
                 initial-scale=1">
  <link rel="stylesheet" 
        href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>

  <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
  </script>
</head>

<body>
  <body>
    <div class="container">
        <section>
            <div class="page-header">
              <h2 style="text-align:center">MET INSTITUTE OF ENGINEERING</h2>
              <h3 style="color:rgb(23, 216, 241)"
                    class="pull-left">
                </h3>
                <div class="pull-right">
                    <div class="btn-group">
                        <button class="btn btn-success">
                            Login
                        </button>
                        <button class="btn btn-success dropdown-toggle" 
                                data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="./registrationform.html">Student</a>
                            </li>
                            <li>
                                <a href="./staff.html">Staff</a>
                            </li>
                        </ul>
                    </div>
                </div>
              </div>
        </section>
    </div>
</body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="https://metbhujbalknowledgecity.ac.in/engineering/">Home</a>
  <a href="./registrationform.html" >Add Student</a>
  <a href="./staff.html">Add Staff</a>
  <a href="./feedback.html">Feed Back Form</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
