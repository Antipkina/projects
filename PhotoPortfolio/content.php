<!DOCTYPE html>
<html>
<head>
    <!-- META -->

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="media.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="jquery-1.9.1.min.js"></script>
    <script src="touchTouch.jquery.js"></script>

</head>
<body>

<script>
    $(document).ready(function(){
        $('.gallery a.gal').touchTouch();
        $().UItoTop({ easingType: 'easeOutQuart' });
    });
</script>

<style>
    /* Размеры картинок и подложки. Подложка должна быть > картинок */
    .container_12 {
        /*width: 220px;
        /*float: left;*/
       display: inline;
        margin-left: 10px;
        margin-right: 10px;}

    .grid_3 {
        float: left;
    }
    .gallery a.gal img {
        margin:7px 0 0 7px;
        float:left;
        border: 2px solid #8e8e8e;
        box-shadow: 2px 2px 5px 2px #717171;
        cursor:pointer;
        max-height:250px;
        }

    .gallery img {
        box-shadow: 2px 2px 5px 2px #717171;
    }

    #galleryOverlay{
        width:100%;
        height:100%;
        position:fixed;
        top:0;
        left:0;
        opacity:0;
        z-index:100000;
        background-color:#222;
       /* background-color: rgba(216, 216, 216, 0.5);*/
        background-image: url("image/bg.jpg");
        overflow:hidden;
        display:none;
        -moz-transition:opacity 1s ease;
        -webkit-transition:opacity 1s ease;
        transition:opacity 1s ease;}
    #galleryOverlay.visible{
        opacity:1;}
    #gallerySlider{
        height:100%;
        left:0;
        top:0;
        width:100%;
        white-space: nowrap;
        position:absolute;
        -moz-transition:left 0.4s ease;
        -webkit-transition:left 0.4s ease;
        transition:left 0.4s ease;}
    #gallerySlider .placeholder{
        background: url("images/preloader.gif") no-repeat center center;
        height: 100%;
        line-height: 1px;
        text-align: center;
        width:100%;
        display:inline-block;}
    #gallerySlider .placeholder:before{
        content: "";
        display: inline-block;
        height: 50%;
        width: 1px;
        margin-right:-1px;}
    #gallerySlider .placeholder img{
        display: inline-block;
        max-height: 80%;
        max-width: 80%;
        width: auto !important;
        vertical-align: middle;}
    #gallerySlider.rightSpring{
        -moz-animation: rightSpring 0.3s;
        -webkit-animation: rightSpring 0.3s;}
    #gallerySlider.leftSpring{
        -moz-animation: leftSpring 0.3s;
        -webkit-animation: leftSpring 0.3s;}

    /* Firefox Keyframe Animations */
    @-moz-keyframes rightSpring{
        0%{		margin-left:0px;}
        50%{	margin-left:-30px;}
        100%{	margin-left:0px;}}

    @-moz-keyframes leftSpring{
        0%{		margin-left:0px;}
        50%{	margin-left:30px;}
        100%{	margin-left:0px;}}

    /* Safari and Chrome Keyframe Animations */
    @-webkit-keyframes rightSpring{
        0%{		margin-left:0px;}
        50%{	margin-left:-30px;}
        100%{	margin-left:0px;}}

    @-webkit-keyframes leftSpring{
        0%{		margin-left:0px;}
        50%{	margin-left:30px;}
        100%{	margin-left:0px;}}

    /* Arrows */
    #prevArrow,#nextArrow{
        border:none;
        text-decoration:none;
        background:url('images/arrowws.png') no-repeat;
        opacity:0.5;
        cursor:pointer;
        position:absolute;
        width:43px;
        height:58px;
        z-index: 999;
        top:50%;
        margin-top:-29px;
        -moz-transition:opacity 0.2s ease;
        -webkit-transition:opacity 0.2s ease;
        transition:opacity 0.2s ease;}
    #prevArrow:hover, #nextArrow:hover{
        opacity:1;}
    #prevArrow{
        background-position:left top;
        left:20px;}
    #nextArrow{
        background-position:right top;
        right:20px;}
    .gallery {
        padding-bottom: 61px;
        text-align: center;
    }
    .container_12 {
        position: relative;
        width: 960px;
        margin: 0 auto;
        padding: 0;}
    .container_12 .grid_12 {
        width: 940px;}
    .container_12 /*.grid_3*/ {
        width: 220px;}
    .gallery a.gal {
        margin-top: 20px;
        position: relative;
        display: block;}
    .gallery a.gal span {
        display: block;
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        right: 0;
        background: url(images/magnify.png) -100px center no-repeat;
        transition: 0.5s ease;
        -o-transition: 0.5s ease;
        -webkit-transition: 0.5s ease;}
    .gallery a.gal:hover span {
        background-position: center center;}
    .gallery a.gal span {
        color: #fff;
        padding-top: 120px;
        text-shadow: 1px 1px 3px #000;}

</style>

<div class="col-lg-1 col-lg-offset-11 col-md-1 col-md-offset-11 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2" style="margin-top: 120px;">
    <a href="index.php"><img src="/image/close.png" style="margin: 10px 0px 0px 15px;"></a>
</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2">

    <!--<a href="index.php"><img src="/image/close.png" style="margin: 10px 0px 0px 15px;"></a>-->
    <div class="cursiv ">Wedding photo</div>
    <div class="text_c">
        <p>Marriage is a bright and memorable event in the life of the family. Every bride dreams of the role of a Princess from an early age. Young people in honor of such an event wear a festive suit.
            And from just a beloved young man turns into a handsome Prince who rushed to his beloved on the wings of love.</p>
        <p>But to celebrate such an event as parents did, couples often do not want. Wedding customs that have developed over the centuries, they seem ridiculous and inappropriate.They're exhausted.</p>
    </div>
</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2" style="margin-bottom: -110px;">
    <div class="gallery">
        <div class="container_12">
            <div class="grid_3"><a href="image/2.1.jpg" class="gal"><img src="image/2.1.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/5.jpg" class="gal"><img src="image/5.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/1.2.jpg" class="gal"><img src="image/1.2.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/5.jpg" class="gal"><img src="image/5.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/2.1.jpg" class="gal"><img src="image/2.1.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/5.jpg" class="gal"><img src="image/5.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/3.1.jpg" class="gal"><img src="image/3.1.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/5.jpg" class="gal"><img src="image/5.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/1.2.jpg" class="gal"><img src="image/1.2.jpg" alt=""><span></span></a></div>
            <div class="grid_3"><a href="image/3.1.jpg" class="gal"><img src="image/3.1.jpg" alt=""><span></span></a></div>
        </div>
    </div>
    <div class="border-c col-lg-12 col-md-12 col-sm-12 col-xs-12"><img src="image/curl.png" class="img-responsive"></div>
</div>

</div>

</body>
</html>