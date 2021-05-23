@extends('layouts.app')
@section('title')How to order @endsection
@section('header')
    <div class="hero how-to-order-page">
        <header>
            <a href="#" class="logo__og"><img src="images/Logo.svg" alt="logo"></a>
            <div class="btn--burger">
                <span style="cursor:pointer" id="burger" class="burger">&#9776;</span>
            </div>
{{--            <nav id="nav" class="nav">--}}
{{--                <a href="javascript:void(0)" class="btn--close" onclick="closeNav()">&times;</a>--}}
{{--                <a href="#" class="logo"><img src="images/Logo.svg" alt="logo"></a>--}}
{{--                <div class="btn btn--menu">--}}
{{--                    <a href="#" class="btn__menu active">Головна</a>--}}
{{--                    <a href="#" class="btn__menu prj">Проекти</a>--}}
{{--                    <a href="#" class="btn__menu">Як замовити?</a>--}}
{{--                </div>--}}
{{--                <div class="btn btn--func">--}}
{{--                    <button onclick="modalWindow('id01')" id="btn-reg" class="btn__registration">Реєстрація</button>--}}

{{--                    <button onclick="modalWindow('id02')" id="btn-log" class="btn__login">Вхід</button>--}}

{{--                    <button class="btn__contacts">Контакти</button>--}}
{{--                </div>--}}
{{--            </nav>--}}

{{--            <div id="id01" class="modal registration">--}}
{{--                <div class="modal__container reg-block">--}}
{{--                    <form class="modal__content animate form reg-form" method="post">--}}
{{--                        <input type="text" placeholder="Ім’я" name="name" required>--}}
{{--                        <input type="text" placeholder="Номер телефону" name="phoneNumber" required>--}}
{{--                        <input type="text" placeholder="Електронна почта" name="email" required>--}}
{{--                        <input type="password" placeholder="Пароль" name="password" required>--}}
{{--                        <input type="password" placeholder="Повторити пароль" name="repeatPassword" required>--}}
{{--                        <button type="submit" class="btn__register">Зареєструватись</button>--}}
{{--                        <div class="login">Вже є аккаунт?<a class="btn__reg" href="#"><strong>Вхід</strong></a></div>--}}
{{--                    </form>--}}
{{--                    <div class="modal__content animate img">--}}
{{--                        <a href="#" class="logo"><img src="images/Logo.svg" alt="logo"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div id="id02" class="modal login">--}}
{{--                <div class="modal__container login-block">--}}
{{--                    <form class="modal__content animate form login-form" method="post">--}}
{{--                        <input type="text" placeholder="Електронна почта" name="email" required>--}}
{{--                        <input type="password" placeholder="Пароль" name="password" required>--}}
{{--                        <button type="submit" class="btn__register login-btn">Вхід</button>--}}
{{--                        <div class="login">Немає аккаунту?<a class="btn__reg" href="#"><strong>Зареєструватись</strong></a></div>--}}
{{--                    </form>--}}
{{--                    <div class="modal__content animate img">--}}
{{--                        <a href="#" class="logo"><img src="images/Logo.svg" alt="logo"></a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </header>--}}

{{--        <aside>--}}
{{--            <div class="social__block">--}}
{{--                <div class="social__wrapper">--}}
{{--                    <a href="#" class="btn__social">--}}
{{--                        <h3>Facebook</h3>--}}
{{--                        <img src="images/social_media/facebook.svg" alt="facebook">--}}
{{--                    </a>--}}
{{--                    <a href="#" class="btn__social">--}}
{{--                        <h3>YouTube</h3>--}}
{{--                        <img src="images/social_media/youtube.svg" alt="youtube">--}}
{{--                    </a>--}}
{{--                    <a href="#" class="btn__social">--}}
{{--                        <h3>Instagram</h3>--}}
{{--                        <img src="images/social_media/instagram.svg" alt="instagram">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </aside>--}}
            @include('menu')

        <div class="main-text how-to-order-page">
            <p>Вже обрали проект?</p>
            <h1>Лишився лише<br>один крок до<br>проекту будинку<br>мрії - замовити у<br>професіоналів!</h1>
        </div>
    </div>
@endsection
@section('content')
    <main class="main-how-to-order">
        <section class="steps">
            <div class="project">
                <img src="images/project-1.jpg" alt="project">
                <div class="project__info">
                    <div class="project__id">ID-2545678</div>
                    <div class="project__name">Проект “Сніжний”</div>
                </div>
                <div class="project__info">
                    <a class="btn btn__more">Замовити</a>
                    <div class="project_details">
                        <div class="details f">
                            <span class="iconify" data-inline="false" data-icon="bx:bx-area" style="color: #606b74; font-size: 16px;"></span>
                            <p>250 м<sup>2</sup></p>
                            <span class="iconify" data-inline="false" data-icon="dashicons:money-alt" style="color: #606b74; font-size: 18px;"></span>
                            <p>15000 грн</p>
                        </div>
                        <div class="details s">
                            <p>4</p>
                            <span class="iconify" data-inline="false" data-icon="ion:bed" style="font-size: 20.03205108642578px;"></span>
                            <p>3</p>
                            <span class="iconify" data-inline="false" data-icon="fa-solid:shower" style="font-size: 20.03205108642578px;"></span>
                            <p>6</p>
                            <span class="iconify" data-inline="false" data-icon="fluent:conference-room-20-filled" style="font-size: 20.03205108642578px;"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="steps__text">Крок 1.<br>
                Якщо знайшли свій варіант - натискайте на кнопку “замовити”.
            </div>

            <div class="steps__text s">Крок 2.<br>
                Обирайте конфігурацію в меню, та вказуйте персональні дані.
            </div>

            <img class="schema" src="images/schema.jpg" alt="schema">

            <img class="step-img" src="images/how-to-order/step-1.jpg" alt="step">

            <div class="steps__text">Крок 3.<br>
                Очікуйте, що наші спеціалісти зв’яжуться з вами протягом години!
            </div>

            <div class="steps__text last s">Крок 4.<br>
                Підписання договору, для того щоб Ви були впевнені в результаті.
            </div>
        </section>

        <a href="/projects" class="btn btn--back steps">Переглянути проекти</a>

        <section class="steps-details">
            <div class="details__item f">
                <h3>Підписання договору</h3>
                <p>
                    Здійснюється поштою. Попередній примірник договору разом з
                    завданням на проетування та рахунком ми надішлемо Вам на
                    електрону пошту. Договір вважається таким, що набув чинності
                    з моменту перерахування зазначених платежів. Робота над
                    проектною документацією починається з моменту оплати.
                </p>
            </div>

            <div class="details__item s">
                <h3>Строки виконання робіт:</h3>
                <p>
                    Від 3 до 20 робочих днів з моменту підписання договору.
                    Строки виконання проектної документації залежить від складності
                    замовлення та визначаються безпосередньо з замовником. Внесення
                    індивідуальних змін може збільшити час виконання проектних робіт.
                    Ви отримуєте в друкованому вигляді 3 примірника проектної документацїї
                    на руки поштовою доставкою через відділення нової пошти. Розрахунок
                    відбувається накладним платижем у відділені пошти. Всі поштові витрати
                    та витрати на доставку оплачує команда BuildX.
                </p>
            </div>

            <div class="details__item th">
                <h3>Цілодобова підтримка</h3>
                <p>
                    Отримати відповіді на питання, які виникають під час вибору проекта та послуг ви можете:
                <ol>
                    <li>Електронною почтою: buildX_info@gmail.com</li>
                    <li>За телефоном: +380951231235</li>
                </ol>
                </p>
            </div>
        </section>
    </main>
@endsection
