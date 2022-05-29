<?php

session_start();

    include("connection.php");
    include("functions.php");


    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {

            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {

                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] === $password)
                    {
                        
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: login.php");
                        die;
                    }
                }
            } 

            echo "wrong username or password!";
        }else
        {
            echo "Please enter some valid information!";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="100%" name="viewport">
  <title>Horacio Lopez</title>
  <link href="./main.d8e0d294.css" rel="stylesheet">
</head>

<body oncontextmenu="return false">
</body>
<body>
<div id="logo"> 
  <script>
    function myFunction() {
    var x = document.getElementById("yoProgramo-HoracioCesarLopez.mp4");
    }
  </script>
	<video src= "./assets/video/yoProgramo-HoracioCesarLopez.mp4" width=100%  height=745 controls autoplay loop="yoProgramo-HoracioCesarLopez.mp4">
    <video autoplay loop *ngIf="src" class="thumbnail">
      <source [src]="src" [type]="type">
    </video> 
  </video>
</div>

<div class="background-color-layer" 
  style="background-image: url('assets/images/fotofondo.jpg')">
</div>
<main class="content-wrapper">
  <header class="white-text-container section-container">
    <div class="text-center">
    <h1>Full Stack Developer Jr</h1>
    
    <style>
      #chartdiv {
        width: 100%;
        height: 500px;
      }
      </style>
      
      <!-- Resources -->
      <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/wc.js"></script>
      <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
      
      <!-- Chart code -->
      <script>
      am5.ready(function() {
      
      // Create root element
      // https://www.amcharts.com/docs/v5/getting-started/#Root_element
      var root = am5.Root.new("chartdiv");
      
      
      // Set themes
      // https://www.amcharts.com/docs/v5/concepts/themes/
      root.setThemes([
        am5themes_Animated.new(root)
      ]);
      
      
      // Add series
      // https://www.amcharts.com/docs/v5/charts/word-cloud/
      var series = root.container.children.push(am5wc.WordCloud.new(root, {
        categoryField: "tag",
        valueField: "weight",
        maxFontSize: am5.percent(15)
      }));
      
      // Configure labels
      series.labels.template.setAll({
        fontFamily: "Courier New"
      });
      
      
      setInterval(function() {  
        am5.array.each(series.dataItems, function(dataItem) {
          var value = Math.random() * 65;
          value = value - Math.random() * value;
          dataItem.set("value", value);
          dataItem.set("valueWorking", value);
        })
      }, 5000)
      
      
      // Data from:
      // https://insights.stackoverflow.com/survey/2021#section-most-popular-technologies-programming-scripting-and-markup-languages
      series.data.setAll([
      { tag: "JavaScript", weight: 64.96 },
  { tag: "HTML/CSS", weight: 56.07 },
  { tag: "Python", weight: 48.24 },
  { tag: "SQL", weight: 47.08 },
  { tag: "Java", weight: 35.35 },
  { tag: "Node.js", weight: 33.91 },
  { tag: "TypeScript", weight: 30.19 },
  { tag: "C#", weight: 27.86 },
  { tag: "Front End", weight: 27.13 },
  { tag: "Back End", weight: 24.31 },
  { tag: "PHP", weight: 21.98 },
  { tag: "Database", weight: 21.01 },
  { tag: "PowerShell", weight: 10.75 },
  { tag: "Microsoft SQL Server", weight: 9.55 },
  { tag: "Azure Data Studio", weight: 8.32 },
  { tag: "Testing", weight: 7.03 },
  { tag: "Web Security", weight: 6.75 },
  { tag: "Visual Studio", weight: 6.02 },
  { tag: "Anaconda", weight: 5.61 },
  { tag: "Jupyter Notebook", weight: 5.1 },
  { tag: "Spring Boot ", weight: 5.07 },
  { tag: "Bootstrap", weight: 4.66 },
  { tag: "GitHub", weight: 4.66 },
  
    
      ]);
      
      }); // end am5.ready()
      </script>
      
      <!-- HTML -->
      <div id="chartdiv"></div>

    <h1>Horacio Cesar Lopez</h1>
    <h1></h1>
  </div>
  </header>



<!-- Add your site or app content here -->
 
<div class="container">
  <div class="row">
    <div class="col-xs-12">

       <div class="card">
         <div class="card-block">
           <h2></h2>
           <div class="row">
             <div class="col-md-4">
               <p><img src="./assets/images/figura-humana.jpg" class="img-responsive" alt=""></p>
             </div>
             <div class="col-md-8">
               <h1>Angular</h1>
               <h1>TypeScript</h1>
               <h1>Python</h1>
               <h1>C# PHP</h1>
               <h1>HTML CSS Javascript</h1>
               <h3>Front End Back End</h3>
               <p>Java / Database / Microsoft SQL Server / Azure Data Studio / Testing / Web Security / Node.js</p>
               <p>Visual Studio / IntelliJ IDEA / Anaconda / Jupyter Notebook / Spring Boot / Bootstrap / GitHub</p>
             </div>
           </div>
         </div>
       </div> 
    
                
                
                
                  
                
                
                  
                
                
                
                
                
                
                  
                
              

                
                
                
                
                 
                

              
    
        <div class="card">
          <div class="card-block">
            <h1><small>Certificaciones Tecnológicas</small></h1>
            <div class="card">
              <div class="card-block">
                <h1>Ministerio de Desarrollo Productivo   Instituto Nacional Tecnología Industrial</h1>
                <div class="row">
                  <div class="col-md-4">
                    <img src="./assets/images/.jpg" class="img-responsive" alt="">
                    <h3 class="h5"></h3>
                    <p></p>
                  </div>
                  <div class="col-md-4">
                    <img src="./assets/images/yoprogramo.jpg" class="img-responsive" alt="">
                    <h3 class="h3 date-title"><a href="https://www.argentina.gob.ar/produccion/argentina-programa/segunda-etapa" style='color: blue' title="">Full Stack Developer Jr</a></h3>
                    <p>Junio 2022</p>
                  </div>
                  <div class="col-md-4">
                    <img src="./assets/images/.jpg" class="img-responsive" alt="">
                    <h3 class="h5"></h3>
                    <p></p>
                  </div>
                </div>
              </div>
            </div>

        <div class="card">
          <div class="card-block">
            <h1>Universitat Politecnica de Valencia</h1>
            <div class="row">
              <div class="col-md-4">
                <img src="./assets/images/.jpg" class="img-responsive" alt="">
                <h3 class="h5"></h3>
                <p></p>
              </div>
              <div class="col-md-4">
                <img src="./assets/images/python-valencia.jpg" class="img-responsive" alt="">
                <h3 class="h3 date-title"><a href="https://www.edx.org/es/course/python-aprender-a-programar" style='color: blue' title="">Python 101</a></h3>
                <p>Mayo 2022</p>
              </div>
              <div class="col-md-4">
                <img src="./assets/images/.jpg" class="img-responsive" alt="">
                <h3 class="h5"></h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <h1>Ministerio de Desarrollo Productivo   Cámara Argentina de Software</h1>
            <div class="row">
              <div class="col-md-4">
                <img src="./assets/images/.jpg" class="img-responsive" alt="">
                <h3 class="h5"></h3>
                <p></p>
              </div>
              <div class="col-md-4">
                <img src="./assets/images/arg-prog-primera-etapa.jpg" class="img-responsive" alt="">
                <h3 class="h3 date-title"><a href="https://www.argentina.gob.ar/produccion/argentina-programa/primera-etapa" style='color: blue' title="">Programacion 101</a></h3>
                <p>Octubre 2021</p>
              </div>
              <div class="col-md-4">
                <img src="./assets/images/.jpg" class="img-responsive" alt="">
                <h3 class="h5"></h3>
                <p></p>
              </div>
            </div>
          </div>
        </div>

        

        <div class="card">
          <div class="card-block">
            <div class="text-center">
              <div class="text-center"></div>
                <h2></h2>
                <div class="row">
                  
                  <div class="col-sm-6">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="card-title"></h3>
                        <p class="card-text">
                        <h3></h3>   
                        </p>
            
                    
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"></h3>
                    <p class="card-text">
                    <h3></h3>  
                    </p>
                    
                  </div>
                </div>
              </div>
            </div>

            <!-- Styles -->

     
            
        
        <div class="card">
          <div class="card-block">
          <h1><small>Idiomas</small></h1>
            <div class="row">
              <div class="col-md-4">
                <div class="language-experience">
                  <h1 class="h1"> <small>Inglés</small></h1>     
                    <h1></h1>
                </div>
              </div>
              <div class="col-md-4">
                <div class="language-experience">
                  <h1 class="h1"> <small></small></h1>
                </div>
              </div>
              <div class="col-md-4">
                <div class="language-experience">
                  <h1 class="h1"> <small>Nivel C 2</small></h1>      
                    <h1></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
          <h1><small>Proyecto en desarrollo</small></h1><h2><small>JavaScript full page scrolling. Mi primer cliente es un amigo y reconocido fotógrafo internacional. Una app renovable cada año bajo el título Year Book.</small></h2> 
           
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="./assets/images/dancer.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Year Book</h3>
                  <p>2022</p>
                </div>
              </div>
              <div class="item">
                <img src="./assets/images/dancerhands.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Year Book</h3>
                  <p>2022</p>
                </div>
              </div>

              <div class="item">
                <img src="./assets/images/dancer-shoes.jpg" class="img-responsive" alt="...">
                <div class="carousel-caption">
                  <h3 class="h5">Year Book</h3>
                  <p>2022</p>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

          </div>
          </div>
        </div>

        
        
        

</main>
<footer class="footer-container white-text-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p><img src="./assets/images/.svg" alt=""></p>
        
        <h1>Argentina © 2022</h1>
        <p></p>
        <p>
          <a class="fa-icon fa-icon-2x" href="https://facebook.com/" title="">
            <i class="fa fa-facebook"style='color: blue'></i>
          </a>
          
          <a class="fa-icon fa-icon-2x" href="https://twitter.com/" title="">
            <i class="fa fa-twitter"style='color: blue'></i>
          </a>
          
          <a class="fa-icon fa-icon-2x" href="https://www.linkedin.com/" title="">
            <i class="fa fa-linkedin"style='color: blue'></i>
          </a>
          
        </p>
      </div>
    </div>
  </div>

    <style type="text/css">
   
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      /* Full-width input fields */
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      /* Set a style for all buttons */
      button {
        background-color: #ffdede;
        color: rgb(0, 0, 0);
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        border-radius: 5px;
      }

        button:hover {
          opacity: 0.8;
        }

      /* Extra styles for the cancel button */
      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #ffdede;
      }

      /* Center the image and position the close button */
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
        position: relative;
      }

      img.avatar {
        width: 40%;
        border-radius: 50%;
      }

      .container {
        padding: 16px;
      }

      span.psw {
        float: right;
        padding-top: 16px;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
      }

      /* The Close Button (x) */
      .close {
        position: absolute;
        right: 25px;
        top: 0;
        color: rgba(0, 0, 0, 0.936);
        font-size: 35px;
        font-weight: bold;
      }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }

      /* Add Zoom Animation */
      .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
      }

      @-webkit-keyframes animatezoom {
        from {
          -webkit-transform: scale(0)
        }

        to {
          -webkit-transform: scale(1)
        }
      }

      @keyframes animatezoom {
        from {
          transform: scale(0)
        }

        to {
          transform: scale(1)
        }
      }

      /* Change styles for span and cancel button on extra small screens */
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
    <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
      </script>
      <div id="box">

          <form method="post">
              <div style="font-size: 20px;margin: 10px;">Login</div>

              <input id="text" type="text" name="user_name"><br><br>
              <input id="text" type="password" name="password"><br><br>

              <input id="button"type="submit" value="Login"><br><br>

              <a href="signup.php">Click to Signup</a><br><br>

  
 
  
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     scrollRevelation('.card');
  });
</script>
<script>
    function myFunction() {
    var x = document.getElementById("yoProgramo-HoracioCesarLopez.mp4");
    }
  </script>
	<video src= "./assets/video/trabajointegrador.mp4" width=100%  height=745 controls autoplay loop="trabajointegrador.mp4">
    <video autoplay loop *ngIf="src" class="thumbnail">
      <source [src]="src" [type]="type">
    </video> 
  </video>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--><script type="text/javascript" src="./main.bc58148c.js"></script></body>
</html>