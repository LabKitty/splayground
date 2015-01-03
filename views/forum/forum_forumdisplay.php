<div class="panel panel-default">
    <div class="panel-heading">Title</div>
    <div class="panel-body">
        <?foreach( $forumposts as $forumpost):?>
            <li class="list-group-item">
                <a href="<?= BASE_URL ?>forum/showthread/<?= $forumpost['subforum_id']?>"><?=$forumpost['forumpost_title']?></a>
                <br>
                <h6> <?=$forumpost['forumpost_desc']?></h6>
            </li>
        <? endforeach ?>
    </div>
</div>