<div class="panel panel-default">
    <?foreach( $forum_1 as $forum):?><!-- Forum title -->
    <div class="panel-heading">
        <div class="panel-heading"><?=$forum['forum_title']?></div>
    </div>

        <table class="table">
            <?foreach( $subforum_1 as $subforum):?>
            <tr>
                <td><a href="<?= BASE_URL ?>forum/forumdisplay/<?= $subforum['subforum_id'] ?>"> <?=$subforum['subforum_title']?></a><br><h6> <?=$subforum['subforum_desc']?></h6></td>
                <td>Viimane postitus: <?=$forumpost['forumpost_title']?> <?=$forumreplays['forumpost_author']?></td>
            </tr>

            <? endforeach ?>
        </table>
    <? endforeach ?>

    <?foreach( $forum_2 as $forum):?><!-- Forum title -->
    <div class="panel-heading">
        <div class="panel-heading"><?=$forum['forum_title']?></div>
    </div>

    <table class="table">
        <?foreach( $subforum_2 as $subforum):?>
            <tr>
                <td><a href="<?= BASE_URL ?>forum/forumdisplay/<?= $subforum['subforum_id'] ?>"> <?=$subforum['subforum_title']?></a><br><h6> <?=$subforum['subforum_desc']?></h6></td>
                <td>Thread:<?=$forumpost['forumpost_title']?></td>
            </tr>

        <? endforeach ?>
    </table>
<? endforeach ?>


</div>

