<!DOCTYPE html>
<html>
<head>
    <!-- META -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1">
    <meta name = "apple-mobile-web-app-capable" content = "yes" />

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
    <!--  <link href="css/common.css" rel="stylesheet">

      <!--<link rel = "stylesheet" media = "screen" href = "css/common.css" />

      <!-- jQuery library -->
    <script type="text/javascript" src = "js/jquery-1.4.min.js"></script>
    <script src = "js/jquery.easing-1.3.js"></script>


    <script src = "js/jquery.iosslider.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('.iosSlider').iosSlider({
                desktopClickDrag: true,
                snapToChildren: true,
                infiniteSlider: true,
                snapSlideCenter: true,
                navSlideSelector: '.sliderContainer .slideSelectors .item',
                navPrevSelector: '.sliderContainer .slideSelectors .prev',
                navNextSelector: '.sliderContainer .slideSelectors .next',
                onSlideComplete: slideComplete,
                onSliderLoaded: sliderLoaded,
                onSlideChange: slideChange,
                autoSlide: true,
                scrollbar: true,
                scrollbarContainer: '.sliderContainer .scrollbarContainer',
                scrollbarMargin: '0',
                scrollbarBorderRadius: '0',
                keyboardControls: true
            });

        });

        function slideChange(args) {

            $('.sliderContainer .slideSelectors .item').removeClass('selected');
            $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

        }

        function slideComplete(args) {

            if(!args.slideChanged) return false;

            $(args.sliderObject).find('.text1, .text2').attr('style', '');

            $(args.currentSlideObject).find('.text1').animate({
                left: '30px',
                opacity: '0.8'
            }, 700, 'easeOutQuint');

            $(args.currentSlideObject).find('.text2').delay(200).animate({
                left: '30px',
                opacity: '0.8'
            }, 600, 'easeOutQuint');

        }

        function sliderLoaded(args) {

            $(args.sliderObject).find('.text1, .text2').attr('style', '');

            $(args.currentSlideObject).find('.text1').animate({
                left: '30px',
                opacity: '0.8'
            }, 700, 'easeOutQuint');

            $(args.currentSlideObject).find('.text2').delay(200).animate({
                left: '30px',
                opacity: '0.8'
            }, 600, 'easeOutQuint');

            slideChange(args);

        }
    </script>

    <title>Хаммам</title>

</head>
<body>
<?
if(isset($add_n)){
    $link = @mysqli_connect(localhost, ruoot, '');
    if(!$link){
        echo('Error connecting to the database: ' . $mysql_error());
        exit();
    }
    $db = @mysqli_selectdb('test');
    if(!$db){
        echo('Error selecting database: ' . $mysql_error());
        exit();
    }
    $query = "INSERT INTO news(name, email, headline, story, timestamp)VALUES('$name', '$email', '$headline', '$story', NOW())";
    $result = @mysqli_query($query);
    if(!$result){
        echo('Error adding news: ' . $mysql_error());
        exit();
    }else{
        mysqli_close($link);
        echo('Success!<br><a href="add.php">Click here</a> to add more news.<br><a href="edit.php">Click here</a> to edit news.<br><a href="../index.php">Click here</a> to return to the main page.');
    }
}else{
    ?>
    <form name="form1" method="post" action="<? echo $PHP_SELF; ?>">
        <table width="50%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="50%">Name</td>
                <td><input name="name" type="text" id="name"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" type="text" id="email"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
            </tr>
            <tr>
                <td>Headline</td>
                <td><input name="headline" type="text" id="headline"></td>
            </tr>
            <tr>
                <td>News Story</td>
                <td><textarea name="story" id="story"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><div align="center">
                        <input name="hiddenField" type="hidden" value="add_n">
                        <input name="add" type="submit" id="add" value="Submit">
                    </div></td>
            </tr>
        </table>
    </form>
<? } ?>
</body>
</html>