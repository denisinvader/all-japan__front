<section class="container catalog-filter">
    <h2>Поиск автозапчастей</h2>
    <form action="catalog.php">
        <div class="form-group row">
            <div class="form-field col-100">
                <label for="">Название / Артикул</label>
                <input type="text"
                       name=""
                       value=""
                       placeholder="Насос ГУРа" />
            </div>
            <div class="form-field col-t-25">
                <label for="">Цена от</label>
                <input type="number"
                       min="0"
                       step="1"
                       placeholder="2000">
            </div>
            <div class="form-field col-t-25">
                <label for="">Цена до</label>
                <input type="number"
                       min="0"
                       step="1"
                       placeholder="8000">
            </div>
            <div class="form-field col-t-25">
                <label for="">Состояние</label>
                <select class="" name="">
                    <option value="">все</option>
                    <option value="">контр. (б/у)</option>
                    <option value="">новое</option>
                </select>
            </div>
            <div class="form-field col-t-25">
                <label for="">Наличие</label>
                <select class="" name="">
                    <option value="">все</option>
                    <option value="">в наличии</option>
                    <option value="">под заказ</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <h3 class="form-group__title col-100">Автомобиль</h3>
            <div class="form-field col-d-25 col-t-50">
                <label>Марка</label>
                <select class="" name="">
                    <option>все</option>
                    <option selected>ВАЗ</option>
                    <option>Toyota</option>
                    <option>Honda</option>
                    <option>ГАЗ</option>
                </select>
            </div>
            <div class="form-field col-d-25 col-t-50">
                <label>Модель</label>
                <select class="" name="">
                    <option>все</option>
                    <option>2105</option>
                    <option>2106</option>
                    <option>2107</option>
                    <option>2109</option>
                </select>
            </div>
            <div class="form-field col-d-25 col-t-50">
                <label>Двигатель</label>
                <select class="" name="">
                    <option>все</option>
                    <option>6HE1-T</option>
                    <option>6D16</option>
                </select>
            </div>
            <div class="form-field col-d-25 col-t-50">
                <label>Кузов</label>
                <select class="" name="">
                    <option>все</option>
                    <option>BE63CE</option>
                    <option>BE437</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <h3 class="form-group__title col-100">Положение</h3>
            <div class="form-field col-t-33">
                <label>Верх/низ</label>
                <select class="" name="">
                    <option>все</option>
                    <option>низ</option>
                    <option>верх</option>
                </select>
            </div>
            <div class="form-field col-t-33">
                <label>Лево/право</label>
                <select class="" name="">
                    <option>все</option>
                    <option>лево</option>
                    <option>право</option>
                </select>
            </div>
            <div class="form-field col-t-33">
                <label>Перед/зад</label>
                <select class="" name="">
                    <option>все</option>
                    <option>перед</option>
                    <option>зад</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Найти</button>
        </div>
    </form>
</section>
