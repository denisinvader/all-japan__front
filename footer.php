        <footer class="footer container">
            <div class="footer__subsection">
                <menu class="footer__menu">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <a href="/catalog.php">Каталог</a>
                    </li>
                    <li>
                        <a href="/news.php">Новости</a>
                    </li>
                    <li>
                        <a href="/contacts.php">Контакты</a>
                    </li>
                </menu>

                <div class="footer__callback hidden-tablet">
                    <button type="button"
                            class="btn"
                            data-fancybox
                            data-src="#callbackModal">
                        Обратная связь
                    </button>
                </div>

                <div class="clearfix"></div>
            </div>

            <div class="footer__section clearfix">
                <div class="footer__subsection">
                    <a href="/contacts.php" class="footer__link">г. Красноярск, ул. 60 Лет Октября 156</a>
                </div>
                <div class="footer__subsection">
                    <div>
                        <a href="tel:+73912016201" class="footer__link">
                            +7 (391) 201-6-201
                        </a>
                        <small>- магазин</small>
                    </div>
                    <div>
                        <a href="tel:+73912016001" class="footer__link">
                            +7 (391) 201-6-001
                        </a>
                        <small>- магазин</small>
                    </div>
                    <div>
                        <a href="tel:+73912414999" class="footer__link">
                            +7 (391) 241-4-999
                        </a>
                        <small>- разборка</small>
                    </div>
                </div>
                <div class="footer__subsection">
                    <a href="mailto:info@alljapan24.ru" class="footer__link">info@alljapan24.ru</a>
                </div>
                <div class="footer__subsection hidden-from-tablet">
                    <button type="button"
                            class="btn"
                            data-fancybox
                            data-src="#callbackModal">
                        Обратная связь
                    </button>
                </div>
            </div>

            <div class="footer__disclamer footer__section">
                Обращаем ваше внимание на то, что данный интернет-сайт носит исключительно информационный характер, вся информация носит ознакомительный характер и ни при каких условиях не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Интернет-магазин оставляет за собой право в любое время без специального уведомления вносить изменения, удалять, исправлять, дополнять, либо любым иным способом обновлять информацию, размещенную во всех разделах данного сайта.
            </div>

            <div class="footer__copyright">
                &copy; Автотехцентр Вся Япония, 2017.
            </div>
        </footer>

        <?php require './modals.php';?>

        <!-- JS VENDORS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"
                integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
        <!-- JS SCRIPTS -->
        <script type="text/javascript" src="/build/scripts.min.js"></script>
    </body>
</html>
