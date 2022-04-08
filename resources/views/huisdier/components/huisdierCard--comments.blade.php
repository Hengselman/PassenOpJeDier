<article class="comments a-popup">
    <section class="comments-placed">

    </section>
    <form class="comments-form" method="POST">
        @csrf
        <input class="comments-form__input form-naam" type="text" name="user" placeholder="Je naam...">
        <textarea class="comments-form__input form-textarea" name="comment" id="comment" type="text" placeholder="Plaats een reactie..." v-model="newItem"></textarea>
        <input type="submit" name="submit" class="test4" value="Plaats reactie"></button>
    </form>
</article>
