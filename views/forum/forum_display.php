<div class="panel panel-default">
    <div class="panel-heading">Title</div>
    <div class="panel-body">
        <?foreach( $forumpost as $forumpost):?>
            <li class="list-group-item">
                <a href="<?= BASE_URL ?>forum/view/<?= $forumpost['forumpost_id'] ?>"><?=$forumpost['forumpost_title']?></a>
                <br>
                <h6> <?=$forumpost['forumpost_desc']?></h6>
            </li>
        <? endforeach ?>
    </div>
</div>


