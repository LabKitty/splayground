

<div class=".col-xs-6 .col-sm-4"><!-- Sidebar-->
    <div class="pull-right">
        <div class="thumbnail">

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
    </div>
</div><!-- Sidebar-->

<div class="row"><!-- Left Side Content -->
    <div class="col-xs-12 col-sm-6 col-md-8">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"><!-- Carousel -->
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class=".col-xs-6 .col-md-4">
            <div class="carousel-inner">
                <div class="item active">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x315" alt="...">
                    <div class="carousel-caption">
                        <h3>Caption Text</h3>
                    </div>
                </div>
            </div>

            </div>
        </div> <!-- Carousel -->
    </div>

    <div class="col-md-8 .col-md-4"><!-- Posts -->
        <?foreach( $posts as $post):?>
            <div class="media">
                <a class="media-left media-middle" href="#">
                    <img src="<?=$post['post_pic']?>" alt="...">
                </a>
                <div class="media-body">
                    <h3> <a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"> <?=$post['post_title']?></a></h3>
                    <p><?=$post['post_text']?></p>
                </div>
            </div>
        <? endforeach ?>
    </div><!-- Posts -->

</div><!-- Left Side Content -->

<script>
    $('.carousel').carousel({
        interval: 2000
    })


</script>


<script src="assets/components/jquery-1.11.2.min.js"></script>
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%D days %H:%M:%S'));
    });
</script>