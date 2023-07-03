<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./alistar.png">
    <title>Tarandy</title>
</head>
<body>
<?php
if(isset($_SESSION['message']))
{
echo '
<div class="popup">
    <div class="popup__body">
        <div class="popup__content">
            <a class="popup__close"><img src="./IMG/loginIMG/x-close.svg" alt="" srcset=""></a>
            <div class="popup__title">
                Ошибка!
            </div>
            <div class="popup__text">
                 ' . $_SESSION['message'] . '
            </div>
        </div>
    </div>
</div> ';
}

unset($_SESSION['message']);
?>
<div class="page">
    <header class="header">
        <div class="containerWrapper">
            <div class="containerFluidInner">
                <div class="defaultWrapper">
                        <div class="header_burger">
                            <span></span>
                        </div>
                    <div class="logo">
                        <a href="http://tarandy.com/main.html"><img src="./IMG/mainIMG/image.png" alt="" srcset=""></a>
                    </div>
                    <div class="smallMenu">
                        <a href="http://tarandy.com/main.html" class="option"><div class="menulink">Главная</div></a>
                        <a href="http://tarandy.com/donate.html" class="option"><div class="menulink">Донат</div></a>
                        <a href="http://tarandy.com/guides.html" class="option"><div class="menulink">Гайды</div></a>
                        <a href="http://tarandy.com/rules.html" class="option"><div class="menulink">Правила</div></a>
                        <a href="http://tarandy.com/about.html" class="option"><div class="menulink">О проекте</div></a>
                    </div>
                    <div class="userPhoneMenu">
                        <img src="./IMG/loginIMG/user.png" alt="" srcset="">
                    </div>
                    <div class="userMenu">
                        <a div href="http://tarandy.com/register.php" class="option"><div class="user">Регистрация</div></a>
                        <a div href="http://tarandy.com/login.php" class="option"><div class="user">Войти</div></a>
                    </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="mainWrapper">
            <div class="mainContainerFluidInner">
                <div class="mainDefaultWrapper">
                    <div class="loginWrapper">
                        <div class="loginForm">
                            <div class="loginHeader">
                                <div class="namePage">
                                    <div class="icon">
                                        <img src="./IMG/loginIMG/notebook.svg" alt="" srcset="">
                                    </div>  
                                    <div class="loginText">
                                        <h1>Авторизация</h1>
                                        <h2>Вперёд к приключениям</h2>
                                    </div>
                                </div>
                                <img src="./IMG/loginIMG/minecraftTower.webp" alt="" srcset="">
                            </div>
                            <div class="loginMain">
                            <div class="loginForm">
                                <div class="loginLabels">
                                    <form action="./vendor/signin.php" method="post">
                                        <div class="loginLabel">
                                            <div class="loginHelper">
                                                <div class="numInstruction">
                                                    <img src="./IMG/loginIMG/num1.svg" alt="" srcset="">
                                                </div>
                                                <div class="textInstruction">
                                                    <h1>Введите логин</h1>
                                                    <h2>Ник, который будет отображаться в игре</h2>
                                                </div>
                                            </div>
                                            <div class="loginField">
                                                <input type="text" name="login">
                                            </div>
                                        </div>
                                        <div class="loginLabel">
                                            <div class="loginHelper">
                                                <div class="numInstruction">
                                                    <img src="./IMG/loginIMG/numberTwo.svg" alt="" srcset="">
                                                </div>
                                                <div class="textInstruction">
                                                    <h1>Введите пароль</h1>
                                                    <h2>Пароль защищает вас от сторонего входа</h2>
                                                </div>
                                            </div>
                                            <div class="loginField">
                                                <input type="password" name="password">
                                            </div>
                                        </div>
                                        <div class="loginLabel">
                                            <input type="submit" class="loginButton" value="Авторизация">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="footerWrapper">
            <div class="footerContainerFluidInner">
                <div class="footerDefaultWrapper">
                    <div class="navFooterContainer">
                        <div class="descriptionFooter">Курсовая работа студента Papas Alexandros группы I2102</div>
                        <span class="USM"><a href="http://fmi.usm.md/" class="footerNavigation" target="_blank">USM</a></span>
                    </div>
                </div>
                <div class="socialsContainer">
                    <ul class="socialIcons">
                        <li><a href="https://www.youtube.com/channel/UCbWLi6PWBwi7kjNsdvPwQlQ"><img src="./IMG/mainIMG/youtube.svg" alt="" srcset=""></a></li>
                        <li><a href="https://vk.com/sanyamolodec"><img src="./IMG/mainIMG/vk.svg" alt="" srcset=""></a></li>
                        <li><a href="https://www.instagram.com/1alki4/"><img src="./IMG/mainIMG/instagram.svg" alt="" srcset=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="./JS/login.js"></script>
</div>
</body>
</html>