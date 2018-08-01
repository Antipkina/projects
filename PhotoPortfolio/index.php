<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">
    <meta http-equiv="content-language" content="ru">
    <meta name = "keywords" content = "Электронный дневник студента">
    <meta name="description" content="">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!--<link href="media.css" rel="stylesheet">
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
    <title>Professional photographer</title>


</head>
<body>

<script type="text/javascript">
    $(document).ready(function(){

        $('.btn0').click(function(){
            $.ajax({
                url: "content.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
        /*$("a.btn").toggle(function() {
                $("div.content").fadeIn();
                return false;
            },
            function() {
                $("div.content").fadeOut();
                return false;
            });*/
    });


   $(document).ready(function(){

        $('.btn1').click(function(){
            $.ajax({
                url: "content1.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
      /* $("a.btn1").toggle(function() {
               $("div.content").fadeIn();
               return false;
           },
           function() {
               $("div.content").fadeOut();
               return false;
           });*/
    });

    $(document).ready(function(){

        $('.btn2').click(function(){
            $.ajax({
                url: "content2.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
        /*$("a.btn2").toggle(function() {
                $("div.content").fadeIn();
                return false;
            },
            function() {
                $("div.content").fadeOut();
                return false;
            });*/
    });

    $(document).ready(function(){

        $('.btn3').click(function(){
            $.ajax({
                url: "content3.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
        /*$("a.btn3").toggle(function() {
                $("div.content").fadeIn();
                return false;
            },
            function() {
                $("div.content").fadeOut();
                return false;
            });*/
    });

    $(document).ready(function(){

        $('.btn4').click(function(){
            $.ajax({
                url: "content4.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
        /*$("a.btn4").toggle(function() {
                $("div.content").fadeIn();
                return false;
            },
            function() {
                $("div.content").fadeOut();
                return false;
            });*/
    });

    $(document).ready(function(){

        $('.btn5').click(function(){
            $.ajax({
                url: "content5.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
        /*$("a.btn5").toggle(function() {
                $("div.content").fadeIn();
                return false;
            },
            function() {
                $("div.content").fadeOut();
                return false;
            });*/
    });

    $(document).ready(function(){

        $('.btn6').click(function(){
            $.ajax({
                url: "portfolio.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

    $(document).ready(function(){

        $('.btn7').click(function(){
            $.ajax({
                url: "contacts.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

    $(document).ready(function(){

        $('.btn8').click(function(){
            $.ajax({
                url: "about.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

    $(document).ready(function(){

        $('.btn9').click(function(){
            $.ajax({
                url: "action.php",
                cache: false,
                success: function(html){
                    $("#content").html(html);
                }
            });
        });
    });

</script>

<div class="container-fluid">
    <input type="checkbox" id="nav-toggle" hidden>
    <nav class="nav">
        <label for="nav-toggle" class="nav-toggle" onclick></label>
        <div class="m">
            <ul>
                <li><a href="#content" class="btn6">Portfolio</a>
                <li><a href="#content" class="btn7">Contacts</a>
                <li><a href="#content" class="btn8">About</a>
                <li><a href="index.php">Home</a>
            </ul>
        </div>
        <div class="top_c col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!--<img src="image/facebook.png" class="left img-responsive">
            <img src="image/twitter.png" class="left img-responsive">
            <img src="image/google%20plus.png" class="left img-responsive">-->
            <a href="https://vk.com/club154663248" target="_blank"><img src="image/vk.png" class="left img-responsive"></a>
            <a href="https://www.instagram.com/antipkin.sergey/" target="_blank"><img src="image/instagram.png" class="left img-responsive"></a>
        </div>
        <div class="style left">
            <div>
                Produce © 2018
            </div>
            <div>
                author: Antipkin/ Antipkina
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12" style="margin: 0; padding: 0; background: white; position: absolute; z-index: 1;">
            <div class="text">
                <div class="cursiv">
                    Sergey Antipkin
                </div>
                <div class="info">
                    professional photographer
                </div>
            </div>
        </div>
        <!--<div id="portfolio" class=" col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>-->
        <div id="content"></div>
        <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12" style="margin-top: 90px;">
            <div class="mer col-lg-9  col-md-9 col-sm-9 col-xs-12">
                <div class="padding col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a href="#content" class="btn0"><img src="image/1.2.jpg" class="img-responsive raised"></a>
                    <a href="#content" class="btn1"><img src="image/2.1.jpg" class="img-responsive raised"></a>
                </div>
                <div class="padding col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a href="#content" class="btn2"><img src="image/3.1.jpg" class="img-responsive raised"></a>
                    <a href="#content" class="btn3"><img src="image/4.1.jpg" class="img-responsive raised"></a>
                </div>
                <div class="padding col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <a href="#content" class="btn4"><img src="image/6.jpg" class="img-responsive raised"></a>
                    <a href="#content" class="btn5"><img src="image/5.jpg" class="img-responsive raised"></a>
                </div>
            </div>
           <!-- <div class="more col-lg-12 col-md-12 col-sm-12 col-xs-12">
                load more work
            </div>-->
        </div>
    </div>
</div>
</body>

</html>
