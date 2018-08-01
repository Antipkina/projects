<!DOCTYPE html>
<html>
<head>
    <!-- META -->

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/js/popup_img.js"></script>

    <!DOCTYPE html>
    <html>
    <head>
        <!-- META -->

        <link href="/css/bootstrap.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="/js/popup_img.js"></script>

    </head>
<body>

<script type="text/javascript">
    $(document).ready(FUNCTION() { // Ждём загрузки страницы
        $(".image").click(FUNCTION(){    // Событие клика на маленькое изображение
            VAR img = $(THIS);    // Получаем изображение, на которое кликнули
            VAR src = img.attr('src'); // Достаем из этого изображения путь до картинки
            $("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
                "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
                "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
                "</div>");
            $(".popup").fadeIn(800); // Медленно выводим изображение
            $(".popup_bg").click(FUNCTION(){    // Событие клика на затемненный фон
                $(".popup").fadeOut(100);    // Медленно убираем всплывающее окно
                setTimeout(FUNCTION() {    // Выставляем таймер
                    $(".popup").remove(); // Удаляем разметку всплывающего окна
                }, 100);});
        });
    });
</script>


<div class="col-lg-1 col-lg-offset-11 col-md-1 col-md-offset-11 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2" style="margin-top: 120px;">
    <a href="index.php"><img src="/image/close.png" style="margin: 10px 0px 0px 15px;"></a>
</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-6 col-sm-offset-2 col-xs-6 col-xs-offset-2">
    <!--<a href="index.php"><img src="/image/close.png" style="margin: 10px 0px 0px 15px;"></a>-->
    <div class="cursiv">Свадебная фотография</div>
    <div class="text_c">
        <p>Бракосочетание - яркое и запоминающиеся событие в жизни семьи. Каждая невеста мечтает о роли принцессы с ранних лет. Молодые люди в честь такого события надевают
            праздничный костюм. И из просто любимого молодой человек превращается в прекрасного принца, который примчался к своей возлюбленной на крыльях любви. Но праздновать
            такое событие так, как это делали родители, пары часто не желают. Свадебные обычаи, сложившиеся веками, кажутся им смешными и неуместными.Они изжили себя. - Читайте
            подробнее на FB.ru: http://fb.ru/article/257594/sovremennaya-svadba-opisanie-traditsii-stsenariy-i-osobennosti</p>
    </div>
</div>

<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
    <img src="/image/2.1.jpg" class="image photo">
    <img src="/image/5.jpg" class="image photo">
    <img src="/image/1.2.jpg" class="image photo">
    <img src="/image/5.jpg" class="image photo">
    <img src="/image/2.1.jpg" class="image photo">
    <img src="/image/5.jpg" class="image photo">
    <img src="/image/3.1.jpg" class="image photo">
    <img src="/image/1.2.jpg" class="image photo">
    <img src="/image/3.1.jpg" class="image photo">
    <img src="/image/5.jpg" class="image photo">
</div>

</body>
</html>