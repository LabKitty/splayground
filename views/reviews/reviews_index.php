<nav class="nnavbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <h1>ALL REVIEWS</h1>
            </a>
        </div>
    </div>
</nav>

<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">LATEST NEWS</li>
    </ul>

    <?foreach( $news as $new):?><!-- Latest news posts -->
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $new['new_pic'] ?>" alt="...">
                <div class="caption">
                    <h3> <?=$new['new_title']?></h3>
                    <p><?=$new['new_text']?></p>

                </div>
            </div>

        </div>
    <? endforeach ?><!-- Latest news posts -->
</div>

<div class=".col-xs-6 .col-md-4"><!-- Latest sidebar  -->
    <div class="pull-right">
        <div class="thumbnail">
            <img src="images/tumb.PNG" alt="..." class="img-circle">
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
</div><!-- Latest sidebar  -->

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
                    <h4> <?=$review['review_title']?></h4>
                     <p><?=$review['review_text']?></p>
            </div>
        </div>
    </div>
<? endforeach ?><!-- Latest review posts -->
