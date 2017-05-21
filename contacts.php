<?php require('./header.php'); ?>
<main>
    <div class="container contacts">
        <h1>Контакты</h1>

        <div class="contacts__section">
            Адрес: <b>г. Красноярск, ул. 60 Лет Октября 156</b>
        </div>
        <div class="contacts__section">
            График работы: <b>ежедневно 07:00-18:00</b>
        </div>
        <div class="contacts__section">
            Телефон:
            <a href="#">
                <b>+7 (998) 879 64-59</b>
            </a>
        </div>
    </div>

    <div class="container container_no-paddings contacts__map" id="contactsMap"></div>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
    <script>
        ymaps.ready(function () {
            var map = new ymaps.Map("contactsMap", {
                center: [55.985904, 92.916471],
                zoom: 15
            });

            map.geoObjects.add(new ymaps.Placemark(
                [55.985904, 92.916471],
                {
                    balloonContentHeader: 'Автотехцентр Вся Япония' ,
                    balloonContentBody: 'ул. 60 Лет Октября 156<br/>' +
                        'ежедневно с 07:00 до 18:00'
                },
                { preset: 'islands#redIcon' }
            ));

            map.behaviors.disable('scrollZoom');
        });
    </script>
</main>
<?php require('./footer.php'); ?>
