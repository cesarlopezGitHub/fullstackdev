<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

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
<body>

    <a href="logout.php">Logout</a>
    <h1>Proximamente editable por el administrador</h1>

    <br>
    HOLA, <?php echo $user_data['user_name']; ?>
</body>
<body oncontextmenu="return false">
</body>

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
         <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
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
          <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
            <h1><small>Certificaciones Tecnológicas</small></h1>
            <div class="card">
              <div class="card-block">
              <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
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
          <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
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
          <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
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
          <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
          <h1><small>Lengua Extranjera</small></h1>
            <div class="row">
              <div class="col-md-4">
                <div class="language-experience">
                  <h1 class="h1"> <small>INGLES</small></h1>     
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
                  <h1 class="h1"> <small>NIVEL C 2</small></h1>      
                    <h1></h1>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
          <div class="float-right btn-group btn-group-sm">
             <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
             <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-times"></i></a>
         </div>
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

</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     scrollRevelation('.card');
  });
</script>
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