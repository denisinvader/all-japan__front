<div class="modal-content" id="callbackModal">
    <h3 class="modal-title">Обратная связь</h3>

    <p>
        Оставьте
        <label for="cbPhoneInput">ваш номер в Красноярске</label>
        <br/>
        или
        <label for="cbEmailInput">ваш e-mail</label>,
        и мы свяжемся с вами
    </p>

    <form>
        <div class="form-field">
            <label for="cbPhoneInput">Номер телефона</label>
            <input type="text"
                   name="phone"
                   id="cbPhoneInput"
                   data-mask="+7 (999) 999 99-99"
                   placeholder="+7 (___) ___ __-__"/>
        </div>
        <div class="form-field">
            <label for="cbEmailInput">Email</label>
            <input type="text"
                   name="email"
                   id="cbEmailInput"
                   placeholder="example@mail.ru"/>
        </div>
        <div class="form-field">
            <label for="cbMessageTextarea">Ваш вопрос</label>
            <textarea name="message"
                      id="cbMessageTextarea"
                      rows="5"
                      placeholder="(не обязательно)"></textarea>
        </div>
        <div class="form-field">
            <button type="submit" class="btn">Отправить</button>
        </div>
    </form>
</div>

<div class="modal-content" id="orderCallModal">
    <h3 class="modal-title">Заказать звонок</h3>

    <p>
        Оставьте
        <label for="cbPhoneInput">ваш номер в Красноярске</label>,
        и мы свяжемся с вами
    </p>

    <form>
        <div class="form-field">
            <label for="cbPhoneInput">Номер телефона</label>
            <input type="text"
                   name="phone"
                   id="cbPhoneInput"
                   required
                   data-mask="+7 (999) 999 99-99"
                   placeholder="+7 (___) ___ __-__"/>
        </div>
        <div class="form-field">
            <button type="submit" class="btn">Заказать звонок</button>
        </div>
    </form>
</div>
