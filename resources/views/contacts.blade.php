@extends('layouts.app')
@section('title')BuildX @endsection
<div class="hero projects-page">
    <header>
        <a href="#" class="logo__og"><img src="images/Logo.svg" alt="logo"></a>
        <div class="btn--burger">
            <span style="cursor:pointer" id="burger" class="burger">&#9776;</span>
        </div>
@include('menu')
        <div class="contacts-container">
            <div class="contacts-container__card">
                <div class="contacts-container__imgBx">
                    <img src="images/contacts/cont1.jpg" alt="">
                </div>
                <div class="contacts-container__content">
                    <h2>Директор компанії</h2>
                    <h3>Петренко П.П.</h3>
                    <p>“Робота не вовк, в ліс не втече.”</p>
                    <p>Контакти: <br>
                        petrenko.vovk@gmail.com</p>
                </div>
            </div>

            <div class="contacts-container__card">
                <div class="contacts-container__imgBx">
                    <img src="images/contacts/cont2.jpg" alt="">
                </div>
                <div class="contacts-container__content">
                    <h2>Директор компанії</h2>
                    <h3>Петренко П.П.</h3>
                    <p>“Робота не вовк, в ліс не втече.”</p>
                    <p>Контакти: <br>
                        petrenko.vovk@gmail.com</p>
                </div>
            </div>
            <div class="contacts-container__card">
                <div class="contacts-container__imgBx">
                    <img src="images/contacts/cont3.jpg" alt="">
                </div>
                <div class="contacts-container__content">
                    <h2>Директор компанії</h2>
                    <h3>Петренко П.П.</h3>
                    <p>“Робота не вовк, в ліс не втече.”</p>
                    <p>Контакти: <br>
                        petrenko.vovk@gmail.com</p>
                </div>
            </div>
        </div>
</div>

<main class="contacts-page">
    <section class="location">
        <h1>Місцезнаходження:</h1>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.56676366827!2d30.453960015731347!3d50.44916987947517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce82b9bc8a47%3A0x47514e5d91216bf3!2z0JrQuNC10LLRgdC60LjQuSDQv9C-0LvQuNGC0LXRhdC90LjRh9C10YHQutC40Lkg0LjQvdGB0YLQuNGC0YPRgg!5e0!3m2!1sru!2sua!4v1621594894608!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <section class="contacts-forms">
        <div class="contacts-form__text">
            <h1>Завжди готові відповісти на Ваша запитання!</h1>
            <p>Спеціалісти працюють цілодобово. Ви можете зв’язатися з нами, зручним Вам шляхом, у зручний для Вас час.</p>
            <p>Контактна інформація:<br>
                Зателефонуйте нам: 380951231235 <br>
                Напишіть нам: buildX_info@gmail.com</p>
            <hr size="5" width="55%" color="white">
        </div>

        <div class="contacts-form__form">
            <p>Ми Вам передзвонимо!</p>
            <form method="post">
                <input type="text" placeholder="Ім’я" name="name" required>
                <input type="text" placeholder="Номер телефону" name="phoneNumber" required>
                <input type="text" placeholder="Замітка" name="notes" required class="contacts-form input-last">
                <button class="btn contacts-form__send-btn" type="submit">Надіслати</button>
            </form>
        </div>
    </section>
</main>

