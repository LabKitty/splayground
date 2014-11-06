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

<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">Latest reviews</li>
    </ul>
    <?foreach( $posts as $post): ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="images/tumb.PNG" alt="...">
                <div class="caption">
                    <h3> <?=$post['post_title']?></h3>
                    <p><?=$post['post_text']?></p>

                </div>
            </div>

        </div>
    <? endforeach ?>



</div>

<div class=".col-xs-6 .col-md-4">
    <div class="pull-right">
        <div class="thumbnail">
            <img src="images/tumb.PNG" alt="...">
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
</div>

<div class="col-md-8 .col-md-4 ">
    <ul class="list-group">
        <li class="list-group-item">Articles</li>
    </ul>

<?foreach( $posts as $post):?>
    <div class="col-sm-5 .col-md-6">
        <div class="thumbnail">
            <img src="<?= getDataURI($post['post_img']) ?>" />
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