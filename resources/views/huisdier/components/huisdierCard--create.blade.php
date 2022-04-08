<h2>Voeg hier een nieuw huisdier toe!</h2>
<article class="create-form">
    <form class="create-form__form a-popup" action="/huisdier" method="POST">
        @csrf

        <section class="create-form__section">
            <label for="name">Naam huisdier: </label>
            <input class="create-form__input" type="text" id="name" name="name" value="">
        </section>

        <section class="create-form__section">
            <label for="soort">Soort: </label>
            <select class="create-form__input" id="soort" name="soort">
                @foreach ($huisdier_soorten as $huisdier_soort)
                    <option value="{{$huisdier_soort->soort}}">{{$huisdier_soort->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="description">Stukje informatie: <label>
            <textarea class="create-form__input create-form__input--big" id="description" name="description"></textarea>
        </section>

        <section class="create-form__section">
            <label for="image">Afbeelding: </label>
            <select class="create-form__input" name="image" id="image">
                @foreach ($images as $image)
                    <option value={{$image->image}}>{{$image->image}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="age">Leeftijd: </label>
            <input class="create-form__input" type="text" id="age" name="age">
        </section>

        <section class="create-form__section">
            <input class="create-form__button" type="submit" value="Huisdier aanmaken">
        </section>
    </form>
</article>
