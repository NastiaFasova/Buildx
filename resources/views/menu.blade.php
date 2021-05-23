<nav id="nav" class="nav">
    <a href="javascript:void(0)" class="btn--close" onclick="closeNav()">&times;</a>
    <a href="#" class="logo"><img src="/images/Logo.svg" alt="logo"></a>
    <div class="btn btn--menu">
        <a href="/" class="btn__menu active">Головна</a>
        <a href="/projects" class="btn__menu prj">Проекти</a>
        <a href="/how-to-order" class="btn__menu">Як замовити?</a>
    </div>
    <div class="btn btn--func">
        <button onclick="modalWindow('id01')" id="btn-reg" class="btn__registration">Реєстрація</button>

        <button onclick="modalWindow('id02')" id="btn-log" class="btn__login">Вхід</button>

        <a href = "/contacts"><button class="btn__contacts">Контакти</button></a>
    </div>
</nav>

<div id="id01" class="modal registration">
    <div class="modal__container reg-block">
        <form class="modal__content animate form reg-form" method="post">
            <input type="text" placeholder="Ім’я" name="name" required>
            <input type="text" placeholder="Номер телефону" name="phoneNumber" required>
            <input type="text" placeholder="Електронна почта" name="email" required>
            <input type="password" placeholder="Пароль" name="password" required>
            <input type="password" placeholder="Повторити пароль" name="repeatPassword" required>
            <button type="submit" class="btn__register">Зареєструватись</button>
            <div class="login">Вже є аккаунт?<a class="btn__reg" href="#"><strong>Вхід</strong></a></div>
        </form>
        <div class="modal__content animate img">
            <a href="#" class="logo"><img src="/images/Logo.svg" alt="logo"></a>
        </div>
    </div>
</div>

<div id="id02" class="modal login">
    <div class="modal__container login-block">
        <form class="modal__content animate form login-form" method="post">
            <input type="text" placeholder="Електронна почта" name="email" required>
            <input type="password" placeholder="Пароль" name="password" required>
            <button type="submit" class="btn__register login-btn">Вхід</button>
            <div class="login">Немає аккаунту?<a class="btn__reg" href="#"><strong>Зареєструватись</strong></a></div>
        </form>
        <div class="modal__content animate img">
            <a href="#" class="logo"><img src="/images/Logo.svg" alt="logo"></a>
        </div>
    </div>
</div>
</header>

<aside>
    <div class="social__block">
        <div class="social__wrapper">
            <a href="#" class="btn__social">
                <h3>Facebook</h3>
                <img src="/images/social_media/facebook.svg" alt="facebook">
            </a>
            <a href="#" class="btn__social">
                <h3>YouTube</h3>
                <img src="/images/social_media/youtube.svg" alt="youtube">
            </a>
            <a href="#" class="btn__social">
                <h3>Instagram</h3>
                <img src="/images/social_media/instagram.svg" alt="instagram">
            </a>
        </div>
    </div>
</aside>
