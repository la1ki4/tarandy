<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./mainAuth.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200;300&display=swap" rel="stylesheet">
    <title>Tarandy</title>
</head>
<body class="body">
<div class="page">
    <header class="header">
        <div class="containerWrapper">
            <div class="containerFluidInner">
                <div class="defaultWrapper">
                    <div class="header_burger">
                        <span></span>
                    </div>
                    <div class="logo">
                        <a href="http://tarandy.com/main.php"><img src="./IMG/mainIMG/image.png" alt="" srcset=""></a>
                    </div>
                    <div class="smallMenu">
                        <a href="http://tarandy.com/main.php" class="option"><div class="menulink">Главная</div></a>
                        <a href="http://tarandy.com/donate.php" class="option"><div class="menulink">Донат</div></a>
                        <a href="http://tarandy.com/guides.php" class="option"><div class="menulink">Гайды</div></a>
                        <a href="http://tarandy.com/rules.php" class="option"><div class="menulink">Правила</div></a>
                        <a href="http://tarandy.com/about.php" class="option"><div class="menulink">О проекте</div></a>
                    </div>
                    <div class="plus1">
                        <a href="./vendor/update.php?id=<?= $_SESSION['user']['id']?>">
                            <img src="./IMG/mainIMG/reload.png" class="reload" alt="" srcset="">
                        </a>
                    </div>
                    <div class="diamondsPhone">
                        <img src="./IMG/mainIMG/diamond.svg" alt="">
                        <div class="valueOfDiamonds">
                            <?php
                                echo $_SESSION['user']['diamonds'];
                            ?>
                        </div>
                    </div>
                    <div class="userPhoneMenu">
                        <div class="circle">
                            <div class="firstWord">
                                <span>
                                        <?php
                                            echo $_SESSION['user']['login'][0];
                                        ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="userMenu">
                        <div class="plus">
                            <a href="./vendor/update.php?id=<?= $_SESSION['user']['id']?>">
                                <img src="./IMG/mainIMG/reload.png"  alt="" srcset="">
                            </a>
                        </div>
                        <div class="diamonds">
                            <img src="./IMG/mainIMG/diamond.svg" alt="">
                            <div class="valueOfDiamonds">
                                <?php
                                    echo $_SESSION['user']['diamonds'];
                                ?>
                            </div>
                        </div>
                        <div class="user">
                            <div class="dropContainer">
                                <button class="dropTrigger">
                                    <div class="userGroup">
                                        <?php
                                            echo $_SESSION['user']['group'];
                                        ?>
                                    </div>
                                    <div class="username">
                                        <?php
                                            echo $_SESSION['user']['login'];
                                        ?>
                                    </div>
                                    <div class="buttonStatement"></div>
                                </button>
                                <div class="dropdownContent">
                                    <a href="./vendor/logout.php">Выйти</a>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="option">
                            <div class="userOption">Выйти</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="mainWrapper">
            <div class="mainContainerFluidInner">
                <div class="mainDefaultWrapper">
                    <div class="content">
                        <div class="whitePage">
                            <div class="headPage">
                                <div class="namePage">
                                    <div class="icon">
                                        <img src="./alistar.png" alt="">
                                    </div>
                                    <div class="text">
                                        <h1>О проекте</h1>
                                        <h2>Узнайте про нас</h2>
                                    </div>
                                </div>
                                <img src="./IMG/aboutIMG/alistarArt.jpg" alt="">
                            </div>
                            <div class="info">
                                Данный проект является курсовой работой студента Papas Alexandros из группы I2102. Вдохновлением для создания проекта Tarandy служила любовь студента к модовым проектам майнкрафта, где игроки могут реализовываться в различных направлениях. Например если потенциальному игроку нравятся технологии, то специально для такого игрока существует сборка "HiTech", в которой игрок может построить свою собственную фабрику с различными технологиями. Если же игроку нравится фантастика и магия, то специально для такого игрока существует сборка "MagicRPG", в которой игрок может почувствовать себя великим магом, и создавать пентаграммы, алтари, заклинания, накладывать проклятия и всё остальное, что вы могли видеть в фильмах про мистику. А если же вам нравится и то и другое, то для таких игроков существует сборка "TechnoMagicRPG", где игроку подвластны как и технологии, так и магические приколы. В общем каждый для себя найдёт то, что ему по душе. По этой причине я решил создать нечто подобное, ведь майнкрафт - это великолепная игра, а различные модификации её отлично дополняют!
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
    <script type="text/javascript" src="./JS/mainAuth.js"></script>
</div>
</body>
</html>
