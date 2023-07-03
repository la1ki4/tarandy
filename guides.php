<?php
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/guides.css">
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
                        <div class="modListContainer">
                            <div class="modListHeader">
                                <h1>Информационный портал Minecraft</h1>
                            </div>
                            <div class="modListText">
                                <div>Гайды по модам</div>
                            </div>
                            <div class="modWrapper">
                                <div class="modList">
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/4.png" alt="">
                                        Applied Energetics 2
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/1.png" alt="">
                                        Draconic Evolution
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/56.png" alt="">
                                        Industrial Craft 2
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/22.png" alt="">
                                        Botania
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/94.png" alt="">
                                        Thaumcraft 4.2.3.5
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/28.png" alt="">
                                        DivineRPG
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/43.png" alt="">
                                        Forestry
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/89.png" alt="">
                                        Tinker Construct
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/51.png" alt="">
                                        Immersive Engineering
                                    </span>
                                    <span class="mod">
                                    <img src="./IMG/guidesIMG/39.png" alt="">
                                        Extra Utilities
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="articles">
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/NTSFvxYy64o" class="namePost">Гайд на убийство всех Гайи из мода Botania</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/NTSFvxYy64o" class="imgurl">
                                    <img src="./IMG/guidesIMG/gaia.jpg" alt="">
                                </a>
                            </div>
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/7bKouJWurCg" class="namePost">Цветы Botania</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/7bKouJWurCg" class="imgurl">
                                    <img src="./IMG/guidesIMG/flowersBotania.jpg" alt="">
                                </a>
                            </div>
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/2gnOPDe4z2Q" class="namePost">МЭ система</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/2gnOPDe4z2Q" class="imgurl">
                                    <img src="./IMG/guidesIMG/AE.png" alt="">
                                </a>
                            </div>
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/AvSiN-v4Iw0" class="namePost">Голодный узел ауры</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/AvSiN-v4Iw0" class="imgurl">
                                    <img src="./IMG/guidesIMG/hungryNode.jpg" alt="">
                                </a>
                            </div>
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/4fMAiz8JLMg" class="namePost">Как открыть Ихор</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/4fMAiz8JLMg" class="imgurl">
                                    <img src="./IMG/guidesIMG/ihor.jpg" alt="">
                                </a>
                            </div>
                            <div class="post">
                                <a target="_blank" href="https://youtu.be/6gC1K_1HZP8" class="namePost">Реакторы IC2</a>
                                <div class="category">Гайды к модам</div>
                                <a target="_blank" href="https://youtu.be/6gC1K_1HZP8" class="imgurl">
                                    <img src="./IMG/guidesIMG/reactor.webp" alt="">
                                </a>
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
