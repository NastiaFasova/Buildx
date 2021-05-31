@extends('layouts.app')
@section('title')Project @endsection
@section('header')
    <div class="hero project-page">
        <header>
            <a href="/" class="logo__og"><img src="/images/Logo.svg" alt="logo"></a>
            <div class="btn--burger">
                <span style="cursor:pointer" id="burger" class="burger">&#9776;</span>
            </div>
            @include('menu')
            <div class="project-slider">
                <div class="overlay">
                    <div class="overlay__info">{{$project->title}} {{$project->index}}</div>
                    @if(empty($_GET['name']))
                        <a href="/projects">Назад до проектів...</a>
                    @else
                        <a href="/projects?name={{$_GET['name']}}">Назад до проектів...</a>
                    @endif

                </div>

                @foreach($images as $image)
                    <div class="Slides fade">
                        <img src="/images/projects/{{$image->url}}" style="width:100%">
                    </div>
                @endforeach
                <div class="caption-container">
                    <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                    </div>
                </div>
                <div class="row-2">
                    @foreach($images as $image)
                    <div class="column-2">
                        <img class="demo cursor" src="/images/projects/{{$image->url}}" style="width:100%"
                             onclick="currentSlide({{$image->id}})" alt="The Woods">
                    </div>
                    @endforeach
                </div>

                <div class="btn--prev-next">
                    <a class="prev" onclick="plusSlides(-1)"><img src="/images/icons/arrow-right.svg"
                                                                  style="transform: rotate(180deg);" alt=""></a>
                    <a class="next" onclick="plusSlides(1)"><img src="/images/icons/arrow-right.svg" alt=""></a>
                </div>
            </div>
    </div>
@endsection
@section('content')
    <main class="main-project">
        <section class="main-project__info">
            <div class="main-project__part">
                <div class="main-project__details">
                    <h3>Загальні характеристики:</h3>
                    <div class="project-info__text">
                        <div class="project-info__item">
                            <p>Кут нахилу даху:</p>
                            <p>Розміри ділянки:</p>
                            <p>Перекриття:</p>
                        </div>

                        <div class="project-info__item">
                            <p>{{$characteristic->angle}}</p>
                            <p>{{$characteristic->size}}</p>
                            <p>{{$characteristic->ceiling}}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="main-project__schema">
                    <img src="/images/{{$scheme->url}}" alt="schema">
                </div>
            </div>

            <div class="main-project__part">
                <img class="form-img" src="/images/{{$project->images->where('main_picture', '=', 1)->first()->url}}
                    " alt="project">
                <h3>Замовлення ID-2545678</h3>
                <form action="#" class="project-form">
                    <div class="project-form__part">
                        <div class="form-part">
                            <label for="name">ПІБ</label>
                            <input type="text" name="name" required>
                        </div>

                        <div class="form-part">
                            <label for="phone">Телефон:</label>
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="+38 (___) ___-__-__"
                                   name="phone" required>
                        </div>
                    </div>

                    <div class="project-form__part">
                        <div class="form-part">
                            <label for="email">Електронна адреса:</label>
                            <input type="email" name="email" required>
                        </div>

                        <div class="form-part">
                            <label for="addition">Примітка:</label>
                            <input type="text" name="addition" required>
                        </div>
                    </div>

                    <div class="project-form__part">
                        <div class="form-part address">
                            <label for="addres">Адреса:</label>
                            <div class="form-address">
                                <select name="cities">
                                    <option value="" disabled selected>Місто</option>
                                    <option value="kiev">Київ</option>
                                    <option value="vinnitsya">Вінниця</option>
                                    <option value="odessa">Одеса</option>
                                    <option value="lviv">Львів</option>
                                </select>
                                <input type="text" name="street" placeholder="Вул." required>
                                <input type="text" name="house" placeholder="Буд." required>
                                <input type="text" name="flat" placeholder="Кв." required>
                            </div>
                        </div>
                    </div>

                    <div class="project-form__part">
                        <div class="form-part">
                            <label for="addres">Доставка:</label>
                            <div class="form-address">
                                <select name="way">
                                    <option value="" disabled selected>Обрати</option>
                                    <option value="kiev">Нова Пошта</option>
                                    <option value="vinnitsya">Укрпошта</option>
                                </select>
                                <select name="payment">
                                    <option value="" disabled selected>Обрати</option>
                                    <option value="kiev">Картка</option>
                                    <option value="vinnitsya">Google pay</option>
                                    <option value="odessa">Готівка</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="project-total">
                        <h3>Сума замовлення:<br> 22000 грн</h3>
                        <a href="#" class="btn btn__order">Замовити проект</a>
                    </div>
                </form>
            </div>
        </section>

        @if(empty($_GET['name']))
            <a href="/projects" class="btn btn--back">Назад до проектів...</a>
        @else
            <a href="/projects?name={{$_GET['name']}}" class="btn btn--back">Назад до проектів...</a>
        @endif
    </main>
@endsection
