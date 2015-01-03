<div class=".col-xs-6 .col-sm-4"><!-- Sidebar-->
    <div class="pull-right">

        <div class="caption"><!-- Broadcast-->
            <h3>Broadcast</h3>
            <ul class="list-group">
                <?foreach( $videos as $video):?>
                    <li class="list-group-item"><?= $video['video_title'] ?></li>
                <? endforeach ?>
            </ul>
        </div><!-- Broadcast-->

        <div class="caption"><!-- Matches-->
            <h3>Matches</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <?foreach( $matchs as $match):?>
                        <span class="badge"><div id="getting-started"><?= $match['match_second'] ?></div></span></span>
                        <?= $match['team_one'] ?> vs <?= $match['team_two'] ?>
                    <? endforeach ?>
                </li>
            </ul>
        </div><!-- Matches-->

    </div>
</div><!-- Sidebar-->

<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">NEWS</li>
    </ul>
</div>


<div class="col-md-10 .col-md-4">
    <?foreach( $news as $new):?>
        <div class="col-xs-6 col-md-3">
                <a href="<?= BASE_URL ?>news/view/<?= $new['new_id'] ?>"> <img src="<?=$new['new_pic']?>" alt="..."></a>
        </div>
    <? endforeach ?>
</div>