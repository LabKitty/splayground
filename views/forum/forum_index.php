<div class="panel panel-default">
    <?foreach( $forum_1 as $forum):?><!-- Forum title -->
         <div class="panel-heading"><?=$forum['forum_title']?></div>
            <div class="panel-body"><!-- Subforums-->
                <?foreach( $subforum_1 as $subforum):?>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>forum/forumdisplay/<?= $subforum['subforum_id'] ?>"> <?=$subforum['subforum_title']?></a>
                        <br>
                        <h6> <?=$subforum['subforum_desc']?></h6>
                    </li>
                <? endforeach ?>
            </div><!-- Subforums-->
    <? endforeach ?>

    <?foreach( $forum_2 as $forum):?><!-- Forum title -->
        <div class="panel-heading"><?=$forum['forum_title']?></div>
            <div class="panel-body"><!-- Subforums-->
                <?foreach( $subforum_2 as $subforum):?>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>forum/forumdisplay/<?= $subforum['subforum_id'] ?>"> <?=$subforum['subforum_title']?></a>
                        <br>
                        <h6> <?=$subforum['subforum_desc']?></h6>
                    </li>
                <? endforeach ?>
            </div><!-- Subforums-->
    <? endforeach ?>


</div>
