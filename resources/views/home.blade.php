@extends('layouts.app')
@section('title')BuildX @endsection
@section('header')
    <div class="hero">
        <header>
            @yield('header')
            <a href="#" class="logo__og"><img src="../../images/Logo.svg" alt="logo"></a>
            <div class="btn--burger">
                <span style="cursor:pointer" id="burger" class="burger">&#9776;</span>
            </div>
            @include('menu')
        <div class="main-text">
            <p>Не можеш знайти будинок мрії?</p>
            <h1>Компанія BuildX допоможе!<br> З нас проект - з <br>Вас реалізація!</h1>
            <div class="btn btn--auth">
                <button onclick="modalWindow('id02')" id="btn-log" class="btn__login main">Ввійти</button>
                <button onclick="modalWindow('id01')" id="btn-reg" class="btn__registration main">Зареєструватись
                </button>
            </div>
        </div>
    </div>

@endsection

@section('content')
<section class="why-us">
    <div class="line"></div>
    <div class="white-line"></div>
    <div class="why-us__text">
        <div class="why-us__block">
            <h1>Чому обирають нас?</h1>
            <p>Компанія BuildX є одним із лідерів архітектурних рішень в Україні. Філії компанії є в багатьох
                містах, близько 3000 людей працюють, щоб ви були впевнені в якості свого проекту. Кожен проект є
                абсолютно унікальним, тобто створюється з нуля. Ми працюємо на умовах абсолютної прозорості,
                тобто ви слідкуєте за кожним етапом створення проекту. BuildX працює на офіційній основі, тобто
                ми вкладаємо з вами контракт, щоб ви були впевнені в тому, що отримаєте найкращий результат.</p>
            <button class="btn__documents">Документи</button>
        </div>
        <div class="why-us__img">
            <img src="../../images/boy-f.png" alt="boy">
        </div>
    </div>

    <div class="why-us__info">
        <h1>Якість протягом всього шляху</h1>
        <div class="paragraph">
            <p>Проект починається з замовлення. Спеціалісти допоможуть зупинитися на найкращому для вас
                варіанті. Потім почнеться робота.</p>
            <p>Готова робота нашої компанії - не лише проект. Ми допоможемо вам з усіма дозволами, підберемо
                кращих спеціалістів для побудови та складемо приблизну ціну.</p>
        </div>
        <button class="btn btn__begin">Розпочати роботу!</button>
    </div>
</section>

<section class="how-works">
    <h1 class="how-works__h">Як це працює?</h1>
    <div class="item one">
        <h3>1.Ви обираєте...</h3>
        <p>Є готові варіанти проектів, а також можна під замовлення.</p>
    </div>

    <img src="../../images/item-1.png" class="img-1" alt="item-1">
    <img src="../../images/item-2.png" class="img-2" alt="item-2">
    <img src="../../images/item-3.png" class="img-3" alt="item-3">

    <div class="item two">
        <h3>2.Ми робимо вам проект...</h3>
        <p>Повністю готовий до експлуатації проект, перевірений фахівцями.</p>
    </div>

    <div class="item three">
        <h3>3.Отримуємо дозвіл...</h3>
        <p>Ми позбавляємо вас головної болі - дозвіл на будівнитцтво беремо на себе!</p>
    </div>

    <div class="item four">
        <h3>4.Шукаємо будівельників...</h3>
        <p>В нашій базі є безліч надійних компаній, з якими ми співпрацюємо.</p>
    </div>

    <div class="item five">
        <h3>5.Будівництво...</h3>
        <p>Якщо все зробити правильно, ми на цьому етапі через тиждень!</p>
    </div>

    <div class="item six">
        <h3>6.Готово!</h3>
        <p>Всього 5 кроків до готового будинку. Все просто!</p>
    </div>

    <div class="btn btn--black">
        <a href="#">Зв’язатись з нами</a>
        <a href="#">Переглянути проекти</a>
    </div>
</section>

<section class="examples">
    <h1>Приклади робіт BuildX</h1>
    <div class="projects">
        @include('projects_list')
            <div class="x-img--block">
                <img class="x-img" src="images/x.png" alt="x">
            </div>
    </div>
</section>
@endsection
