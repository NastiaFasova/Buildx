<!doctype html>
<html lang="uk">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="/css/media.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700;900&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/flickity.css" media="screen">
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://kit.fontawesome.com/ceebfa1978.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    @yield('header')
    <main>
        @yield('content')

    </main>

    <footer>
        <div class="section-1">
            <div class="item auth">
                <span class="iconify" data-inline="false" data-icon="carbon:login" style="font-size: 24px;"></span>
                <button onclick="modalWindow('id01')" id="btn-reg-footer" class="btn__menu">Реєстрація</button>
                <p>/</p>
                <button onclick="modalWindow('id02')" id="btn-log-footer" class="btn__menu">Вхід</button>
            </div>

            <div class="item">
                <a href="#" class="btn btn__menu pr">
                    <span class="iconify" data-inline="false" data-icon="bi:arrow-up-square"
                          style="font-size: 24px;"></span>
                    <p>На початок</p>
                </a>
            </div>

            <div class="item social">
                <a href='#'><img src="/images/social_media/facebook-black.svg" alt="facebook"></a>
                <a href='#'><img src="/images/social_media/instagram-black.svg" alt="instagram"></a>
                <a href='#'><img src="/images/social_media/youtube-black.svg" alt="youtube"></a>
            </div>

            <div class="item">
                <a href="/projects" class="btn btn__menu">
                    <span class="iconify" data-inline="false" data-icon="clarity:design-line"
                          style="font-size: 24px;"></span>
                    <p>Проекти</p>
                </a>
            </div>

            <div class="item">
                <a href="/how-to-order" class="btn btn__menu last">
                    <span class="iconify" data-inline="false" data-icon="ic:outline-border-color"
                          style="font-size: 24px;"></span>
                    <p>Як зробити замовлення</p>
                </a>
            </div>
        </div>

        <div class="section-2">
            <ul>
                <li>
                    <img src="/images/icons/email.svg" alt="email">
                    <p>buildX_info@gmail.com</p>
                </li>
                <li class="second-li">
                    <img src="/images/icons/phone.svg" alt="phone">
                    <p>+380951231235</p>
                </li>
                <li class="logo-footer">
                    <a href="/"><img src="/images/icons/Logo-footer.svg" alt="logo"></a>
                </li>
                <li class="cookie">
                    <a href="#">
                        <span class="iconify" data-inline="false" data-icon="fluent:cookies-20-regular"
                              style="color: #ffffff;"></span>
                        <p>Cookies</p>
                    </a>
                </li>
                <li class="last">
                    <a href="#" class="last">
                        <img src="/images/icons/privacy.svg" alt="privacy">
                        <p>Політика конфіденційності</p>
                    </a>
                </li>
            </ul>
        </div>
    </footer>
</div>
<script src="/js/script.js"></script>
<script src="/js/flickity.pkgd.min.js"></script>
<script src="/js/script.js"></script>
<script>showSlides(1);</script>
</body>
</html>
