<li class="a-popup u-list-style-none huisdierGridCard" data-huisdier-soort="{{$huisdier->soort}}">
    <a class="huisdierGridCard__link" href="/huisdier/{{$huisdier->id}}">
        <article>
            <header class="huisdierGridCard__header u-flex-v-center">
                <h2 class="huisdierGridCard__heading"> {{$huisdier->name}}</h2>
            </header>
            <figure class="huisdierGridCard__figure">
                <img class="huisdierGridCard__image" src="{{$huisdier->image}}" alt="{{$huisdier->name}} de {{$huisdier->soort}}">
            </figure>
            <section class="huisdierGridCard__textSection">
                <p class="huisdierGridCard__text"> {{$huisdier->description}}</p>
            </section>
        </article>
    </a>
</li>
