<div class="filter-container">
    <div class="filter-block">
        <form method="GET" class="filter-form" action="{{route("showAll")}}">
            <table>
                <tr>
                    <th></th>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                    <th>5+</th>
                </tr>
                <tr>
                    <td><span class="iconify" data-inline="false" data-icon="ion:bed"></span></td>
                    <td><input class="radio-btn" type="radio" id="1-bed" name="bed" value="1"
                               @if(request()->has('bed')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="2-bed" name="bed" value="2"
                               @if(request()->has('bed')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="3-bed" name="bed" value="3"
                               @if(request()->has('bed')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="4-bed" name="bed" value="4"
                               @if(request()->has('bed')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="5-bed" name="bed" value="5"
                               @if(request()->has('bed')) checked @endif></td>
                </tr>
                <tr>
                    <td><span class="iconify" data-inline="false" data-icon="fa-solid:shower"></span></td>
                    <td><input class="radio-btn" type="radio" id="1-shower" name="shower" value="1"
                               @if(request()->has('shower')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="2-shower" name="shower" value="2"
                               @if(request()->has('shower')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="3-shower" name="shower" value="3"
                               @if(request()->has('shower')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="4-shower" name="shower" value="4"
                               @if(request()->has('shower')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="5-shower" name="shower" value="5"
                               @if(request()->has('shower')) checked @endif></td>
                </tr>
                <tr>
                    <td><span class="iconify" data-inline="false" data-icon="fluent:conference-room-20-filled"></span></td>
                    <td><input class="radio-btn" type="radio" id="1-room" name="room" value="1"
                               @if(request()->has('room')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="2-room" name="room" value="2"
                               @if(request()->has('room')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="3-room" name="room" value="3"
                               @if(request()->has('room')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="4-room" name="room" value="4"
                               @if(request()->has('room')) checked @endif></td>
                    <td><input class="radio-btn" type="radio" id="5-room" name="room" value="5"
                               @if(request()->has('room')) checked @endif></td>
                </tr>
            </table>

            <div class="slide">
                <div class="details filter">
                    <p>Площа, м<sup>2</sup></p>
                    <span class="iconify" data-inline="false" data-icon="bx:bx-area" style="color: #606b74; font-size: 16px;"></span>
                </div>
                <div data-role="rangeslider">
                    <input type="range" name="square" class="range-slider" id="range-square" value={{old ('square')}}}
                           min="0" max="412" oninput="inputSquare()">
                    <div class="range-text">
                        <p id="range-min-square">0</p>
                        <p>—</p>
                        <p>412</p>
                    </div>
                </div>
                <div class="details filter">
                    <p>Ціна, грн</p>
                    <span class="iconify" data-inline="false" data-icon="dashicons:money-alt" style="color: #606b74; font-size: 18px;"></span>
                </div>
                <div data-role="rangeslider">
                    <input type="range" name="price" class="range-slider" id="range-price" value={{old ('price')}}}
                           min="0" max="41200" oninput="inputPrice()">
                    <div class="range-text">
                        <p id="range-min-price">0</p>
                        <p>—</p>
                        <p>41200</p>
                    </div>
                </div>
            </div>
            <div class="check-container">
                <input type="checkbox" id="garage" name="garage" value={{old ('garage')}}} class="checkbox" checked>
                <label>Гараж</label><br>
                <input type="checkbox" id="bed" name="bed" value="Спальня на 1-му поверсі"  class="checkbox">
                <label>Спальня на 1-му поверсі</label><br>
                <input type="checkbox" id="fam" name="fam" value="Сімейний"  class="checkbox">
                <label>Сімейний</label><br>
                <button type="submit" class="btn btn__begin">Шукати</button>
            </div>
        </form>
    </div>
</div>
