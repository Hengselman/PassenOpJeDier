<?php
    use App\Models\Comment;
    use App\Models\Huisdier;

     $comments = Comment::where('huisdier_id',$huisdier->id)->get();
     $huisdier_id = Huisdier::find($huisdier->id);
 ?>

<article class="comments a-popup">
    @foreach($comments as $comment)
        <section class="comments-placed">
            <header class="commentCard__header u-flex-v-center">
                <h2 class="commentCard__name"> {{$comment->user}}</h2>
            </header>
            <section class="commentCard__sectionContent">
                <p class="commentCard__content"> {{$comment->content}}</p>
            </section>
        </section>
    @endforeach
    <form class="comments-form" action="/huisdier/{id}/comment" method="POST">
        @csrf

        <input id="huisdier_id" name="huisdier_id" value="5" type="hidden" />

        <input class="comments-form__input form-naam" type="text" name="user" id="user" placeholder="Je naam...">
        <textarea class="comments-form__input form-textarea" name="content" id="content" type="text" placeholder="Plaats een reactie..." v-model="newItem"></textarea>
        <input type="submit" name="submit" class="test4" value="Plaats reactie"></button>
    </form>
</article>
