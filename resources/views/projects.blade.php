@extends('layouts.app')
@section('title')Projects @endsection
@section('header')
    <div class="hero projects-page">
        <header>
            <a href="#" class="logo__og"><img src="images/Logo.svg" alt="logo"></a>
            <div class="btn--burger">
                <span style="cursor:pointer" id="burger" class="burger">&#9776;</span>
            </div>
            @include('menu')
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
                @foreach($popular_buildings as $building)
                <div class="gallery-cell">
                    @foreach($building->images as $image)
                    <img src="/images/{{$image->url}}">
                    @endforeach
                    <div class="overlay project-kink">
                            <div class="project__info">
                                <div class="project__name">{{$building->title}}</div>
                            </div>

                            <div class="details s">
                                <p>{{$building->bedroom_number}}</p>
                                <span class="iconify" data-inline="false" data-icon="ion:bed" style="font-size: 20.03205108642578px;"></span>
                                <p>{{$building->bathroom_number}}</p>
                                <span class="iconify" data-inline="false" data-icon="fa-solid:shower" style="font-size: 20.03205108642578px;"></span>
                                <p>{{$building->door_number}}</p>
                                <span class="iconify" data-inline="false" data-icon="fluent:conference-room-20-filled" style="font-size: 20.03205108642578px;"></span>
                            </div>

                            <a href="/projects/{{ Str::lower($building->id) }}">
                                <div class="project__info th">
                                    <div class="project__price">{{$building->cost}} тис. грн.</div>
                                        <img src="images/projects/arrow.svg" alt="">
                                </div>
                            </a>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="search-section white-back">
                <div class="small-text">Унікальні персональні проекти</div>
                <h1>Ми підберемо Вам найкращий варіант!</h1>
                <div class="search-container">
                    <form action="#">
                        <div class="search-form">
                            <input type="text" placeholder="Хай-тек" name="search">
                        </div>
                        <button type="submit" class="btn btn__begin">Шукати</button>
                    </form>
                </div>
            </div>

            <div class="filter-section s">
                <div class="search-container">
                    <form action="#">
                        <div class="search-form filter">
                            <input type="text" id="search" onkeyup="searchFunc()" placeholder="ID">
                        </div>
                    </form>
                </div>
                @include('filter')
            </div>
    </div>
@endsection
@section('content')
    @if (Auth::check())
        <section class="all-projects">
            <h1 class="fancy"><span>Усі раніше замовлені проекти</span></h1>
            <div class="all-projects__container">
                @foreach (Auth::user()->ordered_buildings as $project)
                    <div class="project" onclick="window.location='#'" tabindex="1">
                        <a href="/projects/{{ Str::lower($project->id) }}">
                            <img src="/images/{{$project->images[0]['url']}}" alt="project">
                            <div class="project__info">
                                <div class="project__id">{{$project->index}}</div>
                                <div class="project__name">{{$project->title}}</div>
                            </div>
                        </a>
                        <div class="project__info">
                            <a href="/projects/{{ Str::lower($project->id) }}" class="btn btn__more">Переглянути</a>
                            <div class="project_details">
                                <div class="details f">
                                <span class="iconify" data-inline="false" data-icon="bx:bx-area"
                                      style="color: #606b74; font-size: 16px;"></span>
                                    <p>{{$project->square}} м<sup>2</sup></p>
                                    <span class="iconify" data-inline="false" data-icon="dashicons:money-alt"
                                          style="color: #606b74; font-size: 18px;"></span>
                                    <p>{{$project->cost}} грн</p>
                                </div>
                                <div class="details s">
                                    <p>{{$project->bedroom_number}}</p>
                                    <span class="iconify" data-inline="false" data-icon="ion:bed"
                                          style="font-size: 20.03205108642578px;"></span>
                                    <p>{{$project->bathroom_number}}</p>
                                    <span class="iconify" data-inline="false" data-icon="fa-solid:shower"
                                          style="font-size: 20.03205108642578px;"></span>
                                    <p>{{$project->door_number}}</p>
                                    <span class="iconify" data-inline="false" data-icon="fluent:conference-room-20-filled"
                                          style="font-size: 20.03205108642578px;"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endif
    <section class="all-projects">
        <h1 class="fancy"><span>Усі проекти</span></h1>
        <div class="all-projects__container">
            @include('projects_list')
            <button type="submit" class="btn btn__begin">Далі</button>
        </div>
    </section>
@endsection
