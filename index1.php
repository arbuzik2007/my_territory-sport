<html lang="ru">
<style>
body {
  background-image: url('/bacgrnds/main.jpg');
  background-repeat:no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
           <nav class="col-sm-12 col-md-12 col-lg-12 nav">
                <div><h1> Моя Территория Спорта </h1></div>
            </nav>
            <nav class="col-sm-12 col-md-12 col-lg-12 nav">
                <?php 
                include_once("pages/menu.php");
             ?>
            </nav>
        </div>
        <div class="row">
            <nav class="col-sm-12 col-md-12 col-lg-12 nav">
                <?php
                    if(isset($_GET['page']))
                    {
                        $i = $_GET['page'];
                        if($i == 0) include_once("pages/main.php");
                        if($i == 1) include_once("pages/methodic.php");
                        if($i == 3) include_once("pages/teacher_growth.php");
                        if($i == 2) include_once("pages/vods.php");
                        if($i == 4) include_once("pages/gallery.php");
                        if($i == 5) include_once("pages/gto.php");
                        if($i == 6) include_once("pages/students.php");
                        if($i == 7) include_once("pages/olympiads.php");
                    }
                ?>
            </nav>
        </div>
    </div>
    
    <script>
        $(document).ready(function(){
            $('.dropdown-toggle').dropdown()
        });
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap-dropdown.js"></script>
</body>
</html>