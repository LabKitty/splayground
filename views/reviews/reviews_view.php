<div class="span8">

    <img src="<?= $review['review_pic'] ?>" alt="...">
    <h1><?=$review['review_title']?></h1>
    <p><?=$review['review_text']?></p>

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


