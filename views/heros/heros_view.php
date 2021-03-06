<div class="span8">
    <h1><?=$hero['hero_title']?></h1>

    <div class="media">
        <a class="media-left" href="#">
            <img src="<?= $hero['hero_img'] ?>" alt="...">
        </a>
        <div class="media-body">
            <p><?=$hero['hero_desc']?></p>
            <p><?=$hero['hero_text']?></p>
        </div>
    </div>

    <?foreach ($comments as $comment): ?><!-- Comments -->
        <div class="commentBox">
            <ul class="commentList">
                <li>
                    <div class="commentText">
                        <?=$comment['comment_created']?>
                        <?=$comment['comment_author']?>
                        <p><?=$comment['comment_text']?></p>
                    </div>
                </li>
            </ul>
        </div>
    <? endforeach ?><!-- Comments -->

    <form class="form-inline" method="post" role="form"><!-- Comments insert  -->
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Alias" name="data[comment_author]"/><br>
            <textarea name="data[comment_text]" style="width: 500px; height:150px; margin: 10px 0px 10px 0px; border-radius: 5px;" ></textarea>
        </div>

        <div class="form-group">
            <button class="btn btn-default" type="submit">Add</button>
        </div>

    </form><!-- Comments insert  -->
</div>


