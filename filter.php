<section class="container catalog-filter">
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
                        <option>CHAISER TURBO 1999</option>
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
</section>
