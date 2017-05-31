<?php require './header.php';?>
<div class="container">
    <h1>Каталог товаров</h1>
</div>
<div class="container catalog-categories-container hidden" id="catalogCategories">
    <button class="js-toggle-categories fancybox-close-small catalog-categories__close-btn" title="Скрыть"></button>
    <h2>Категории</h2>
    <?php require './catalog-categories.php';?>
</div>
<div class="container p-b-16">
    <a href="#" class="js-toggle-categories" data-open>
        <b>Показать категории</b>
    </a>
</div>
<div class="container catalog-filter opened" id="catalogFilter">
    <button class="js-toggle-filter fancybox-close-small catalog-filter__hide-btn" title="Скрыть"></button>
    <h2>Поиск автозапчастей</h2>
    <form action="catalog.php" class="row">
        <div class="form-group col-t-33">
            <div class="form-field">
                <label for="">Название / Артикул</label>
                <input type="text"
                       name=""
                       value=""
                       placeholder="Насос ГУРа" />
            </div>
            <div class="row">
                <div class="form-field col-50">
                    <label for="">Состояние</label>
                    <select class="" name="">
                        <option value="">все</option>
                        <option value="">контр. (б/у)</option>
                        <option value="">новое</option>
                    </select>
                </div>
                <div class="form-field col-50">
                    <label for="">Наличие</label>
                    <select class="" name="">
                        <option value="">все</option>
                        <option value="">в наличии</option>
                        <option value="">под заказ</option>
                    </select>
                </div>
            </div>
            <div class="form-field row">
                <label class="col-100">Только</label>
                <div class="col-50">
                    <label class="checkbox-btn block">
                        <input type="checkbox"/>
                        <div>с ценой</div>
                    </label>
                </div>
                <div class="col-50">
                    <label class="checkbox-btn block">
                        <input type="checkbox"/>
                        <div>с фото</div>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group col-t-33">
            <div class="row">
                <div class="form-field col-50">
                    <label>Марка</label>
                    <select class="" name="">
                        <option>все</option>
                        <option selected>ВАЗ</option>
                        <option>Toyota</option>
                        <option>Honda</option>
                        <option>ГАЗ</option>
                    </select>
                </div>
                <div class="form-field col-50">
                    <label>Модель</label>
                    <select class="" name="">
                        <option>все</option>
                        <option>2105</option>
                        <option>2106</option>
                        <option>2107</option>
                        <option>2109</option>
                        <option>DUTRO \ 300</option>
                    </select>
                </div>
                <div class="form-field col-50">
                    <label>Двигатель</label>
                    <select class="" name="" disabled>
                        <option>все</option>
                        <option>6HE1-T</option>
                        <option>6D16</option>
                    </select>
                </div>
                <div class="form-field col-50">
                    <label>Кузов</label>
                    <select class="" name="" disabled>
                        <option>все</option>
                        <option>BE63CE</option>
                        <option>BE437</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group col-t-33">
            <div class="form-field">
                <label>Расположение</label>
                <div class="radio-line-container">
                    <div class="radio-line-row">
                        <label class="radio-line-item">
                            <input type="radio" checked name="x"/>
                            <div>все</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="x"/>
                            <div>низ</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="x"/>
                            <div>верх</div>
                        </label>
                    </div>
                </div>
                <div class="radio-line-container">
                    <div class="radio-line-row">
                        <label class="radio-line-item">
                            <input type="radio" checked name="y"/>
                            <div>все</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="y"/>
                            <div>лево</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="y"/>
                            <div>право</div>
                        </label>
                    </div>
                </div>
                <div class="radio-line-container">
                    <div class="radio-line-row">
                        <label class="radio-line-item">
                            <input type="radio" checked name="z"/>
                            <div>все</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="z"/>
                            <div>перед</div>
                        </label>
                        <label class="radio-line-item">
                            <input type="radio" name="z"/>
                            <div>зад</div>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-field col-50">
                    <label for="">Цена от</label>
                    <input type="number"
                           min="0"
                           placeholder="2000">
                </div>
                <div class="form-field col-50">
                    <label for="">до</label>
                    <input type="number"
                           min="0"
                           placeholder="8000">
                </div>
            </div>
        </div>
        <div class="form-group col-100 text-right">
            <button type="submit" class="btn">Найти</button>
        </div>
    </form>
</div>
<div class="container">
    <a href="#" class="js-toggle-filter hidden" data-open>
        <b>
            Показать фильтр
        </b>
    </a>
</div>
<div class="container">
    <div class="catalog-table-container">
        <?php require './catalog-table.php';?>
    </div>
    <?php require './pagination.php';?>
</section>
<?php require './footer.php';?>
