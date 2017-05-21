<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>All japan</title>

        <link rel="stylesheet" href="/build/styles.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div style="display:none;">
            <h1>TODO</h1>
            <ul>
                <li>В FireFox не отслеживается скролл (меню не плавает)</li>
                <li>Сделать реакцию на выкатывание плаваюшего меню меньше (dy = 10px)</li>
                <li>Сделать иконки для мобильной версии и планшета</li>
            </ul>
        </div>
        <header class="header container">
            <h1 class="header__logo">
                <a href="/">
                    <img src="/images/logo.jpg"
                         alt="Автотехцентр Вся Япония" />
                </a>
            </h1>
        </header>

        <nav class="top-nav container" id="topNav">
            <a href="#" class="top-nav__menu-toggle" id="menuToggle">
                <i class="icon icon-hamburger"></i>
            </a>
            <menu class="top-nav__menu" id="topMenu">
                <li class="">
                    <a href="#">Главная</a>
                </li>
                <li>
                    <a href="#">Запчасти</a>
                </li>
                <li class="active">
                    <a href="#">Техника</a>
                </li>
                <li>
                    <a href="/news.php">Новости</a>
                </li>
                <li>
                    <a href="#">О компании</a>
                </li>
                <li>
                    <a href="/contacts.php">Контакты</a>
                </li>
            </menu>

            <div class="top-contacts">
                <a href="#" class="top-contacts__phone">
                    +7 (999) 945 44-87
                </a>
                <a href="#" class="top-contacts__icon">
                    <i class="icon icon-phone"></i>
                </a>
            </div>
        </nav>
