
<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">LATEST NEWS</li>
    </ul>

    <?foreach( $news as $new):?><!-- Latest news posts -->
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $new['new_pic'] ?>" alt="...">
                <div class="caption">
                    <h3><a href="<?= BASE_URL ?>news/view/<?= $new['new_id'] ?>"> <?=$new['new_title']?></a></h3>
                    <p><?=$new['new_desc']?></p>

                </div>
            </div>

        </div>
    <? endforeach ?><!-- Latest news posts -->
</div>

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
    <li class="list-group-item">ALL REVIEWS </li>
</ul>

<?foreach( $reviews as $review):?><!-- Latest review posts -->
    <div class="row">
        <div class="media">
            <a class="media-left media-middle" href="#">
                 <img src="<?= $review['review_pic'] ?>" alt="...">
            </a>

            <div class="media-body">
                    <h4><a href="<?= BASE_URL ?>reviews/view/<?= $review['review_id'] ?>"> <?=$review['review_title']?></a></h4>
                     <p><?=$review['review_text']?></p>
            </div>
        </div>
    </div>
<? endforeach ?><!-- Latest review posts -->


    <script src="assets/components/jquery-1.11.2.min.js"></script>
    <script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

    <script>
        var $el = $('#getting-started');

        $el.countdown($el.html(), function(event) {
            $el.text(event.strftime('%Dd %Hh %Mm'));
        });
    </script>