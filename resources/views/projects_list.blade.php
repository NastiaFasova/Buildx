@foreach ($popular_buildings as $project)
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
    <p class="addition-text">{{$project->short_description}}</p>

@endforeach
