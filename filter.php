<section class="container">
    <h2>Поиск автозапчастей</h2>
    <form class="catalog-filter" action="catalog.php" method="post">
        <div class="">
            <input type="text"
                   name=""
                   value=""
                   placeholder="Название / OEM / Артикул" />
        </div>
        <div class="">
            <h3>Автомобиль</h3>
            <div class="">
                Марка
                <select class="" name="">
                    <option>Любая</option>
                    <option selected>ВАЗ</option>
                    <option>Toyota</option>
                    <option>Honda</option>
                    <option>ГАЗ</option>
                </select>
            </div>
            <div class="">
                Модель
                <select class="" name="">
                    <option>Любая</option>
                    <option>2105</option>
                    <option>2106</option>
                    <option>2107</option>
                    <option>2109</option>
                </select>
            </div>
            <div class="">
                Двигатель
                <select class="" name="">
                    <option>Любой</option>
                    <option>6HE1-T</option>
                    <option>6D16</option>
                </select>
            </div>
            <div class="">
                Кузов
                <select class="" name="">
                    <option>Любой</option>
                    <option>BE63CE</option>
                    <option>BE437</option>
                </select>
            </div>
        </div>
        <div class="">
            <h3>Положение</h3>
            <div class="">
                Верх/низ
                <select class="" name="">
                    <option>Любое</option>
                    <option>Низ</option>
                    <option>Верх</option>
                </select>
            </div>
            <div class="">
                Лево/право
                <select class="" name="">
                    <option>Любое</option>
                    <option>Лево</option>
                    <option>Право</option>
                </select>
            </div>
            <div class="">
                Перед/зад
                <select class="" name="">
                    <option>Любое</option>
                    <option>Перед</option>
                    <option>Зад</option>
                </select>
            </div>
            <div class="">
                <h3>Цена</h3>
                от
                <input type="text" name="" value="">
                до
                <input type="text" name="" value="">
            </div>
        </div>
        <div class="">
            <button type="submit" name="button">Найти</button>
        </div>
    </form>
</section>
