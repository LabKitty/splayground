<div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
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


    </div> <!-- Carousel -->
</div>

<div class="col-md-8 .col-md-4"><!-- Latest review posts -->
    <ul class="list-group">
        <li class="list-group-item">Latest reviews</li>
    </ul>
    <?foreach( $reviews as $review):?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $review['review_pic'] ?>" alt="...">
                <div class="caption">
                    <h3><a href="<?= BASE_URL ?>reviews/view/<?= $review['review_id'] ?>"> <?=$review['review_title']?></a></h3>
                    <p><?=$review['review_text']?></p>
                </div>
            </div>
        </div>
    <? endforeach ?>
</div><!-- Latest review posts -->

<div class=".col-xs-6 .col-md-4"><!-- Sidebar-->
    <div class="pull-right">
        <div class="thumbnail">
            <img src="assets/images/tumb.PNG" alt="..." class="img-circle">
            <div class="caption">
                <h3>Thumbnail label</h3>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="badge">14</span>
                        Cras justo odio
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!-- Sidebar-->

<div class="col-md-8 .col-md-4 ">
    <ul class="list-group">
        <li class="list-group-item">Articles</li>
    </ul>

    <?foreach( $posts as $post):?>
        <div class="col-sm-5 .col-md-6">
            <div class="thumbnail">
                <img src="<?= $post['post_pic'] ?>" alt="...">
                <div class="caption">
                    <h3> <?=$post['post_title']?></h3>
                    <p><?=$post['post_text']?></p>

                </div>
            </div>

        </div>
    <? endforeach ?>
</div>


<script>
    $('.carousel').carousel({
        interval: 2000
    })
</script>