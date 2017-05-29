<div class="modal-content" id="callbackModal">
    <h3 class="modal-title">Обратная связь</h3>

    <p>
        Оставьте
        <label for="cbEmailInput">ваш e-mail</label>,
        и мы свяжемся с вами
    </p>

    <form>
        <div class="form-field">
            <label for="cbEmailInput">Email</label>
            <input type="text"
                   name="email"
                   required
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
