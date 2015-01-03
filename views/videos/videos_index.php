<div class="container-fluid">
    <div class=".col-xs-6 .col-md-4"><!-- Sidebar-->
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

    <div class="col-md-8 .col-md-4"><!-- Page Header -->
        <ul class="list-group">
            <li class="list-group-item">ALL VIDEOS </li>
        </ul>
    </div><!-- Page Header -->

    <div class="row">
        <div class="col-xs-12 col-md-8">
            <?foreach( $videos as $video):?><!-- Video posts -->
                <div class="col-xs-6 .col-md-4"   >
                    <div class="thumbnail" >
                        <div class="video-container">
                            <iframe width="262" height="175" src="http://www.youtube.com/embed/<?=$video['video_number']?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="caption">
                            <h3><?=$video['video_title']?></h3>
                            <p><?=$video['video_text']?></p>

                        </div>
                    </div>
                </div>
            <? endforeach ?><!-- -Video posts -->
        </div>


    </div>
</div>

<script src="assets/components/jquery-1.11.2.min.js"></script><!-- Countdown -->
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%Dd %Hh %Mm'));
    });
</script><!-- Countdown -->