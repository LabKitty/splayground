
<h4 class="media-heading">Thread:<?=$forumpost['forumpost_title']?></h4>
<ul class="list-group">
    <li class="list-group-item">
        <div class="media">
            <div class="media-left media-middle" href="#">
                <img src="http://forum.gamesports.net/dota/images/avatars/chaos_knight_hphover.png" alt="...">
            </div>
            <div class="media-body">

                <p><?=$forumpost['forumpost_text']?></p>
            </div>
        </div>
    </li>
</ul>




<?foreach ($forumreplays as $forumreplay): ?><!-- Comments -->
<ul class="list-group">
    <li class="list-group-item">
        <div class="media">
            <?=$forumreplay['forumreplay_created']?><br>
            <?=$forumreplay['forumreplay_author']?><br>
            <div class="media-left media-middle" href="#">

                <img src="http://forum.gamesports.net/dota/images/avatars/chaos_knight_hphover.png" alt="...">
            </div>
            <div class="media-body">

                <p><?=$forumreplay['forumreplay_text']?></p>
            </div>
        </div>
    </li>
</ul>


<? endforeach ?><!-- Comments -->

<form class="form-inline" method="post" role="form"><!-- Comments insert  -->
    <div class="form-group">
        <input class="form-control" type="text" placeholder="Alias" name="data[forumreplay_author]"/><br>
        <textarea name="data[forumreplay_text]" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea>
    </div>

    <div class="form-group">
        <button class="btn btn-default" type="submit">Add</button>
    </div>

</form><!-- Comments insert  -->
</div>