<nav class="nnavbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
                <h1>LATEST NEWS</h1>
            </a>
        </div>
    </div>
</nav>

<div class=".col-xs-6 .col-md-4">
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
</div>

<div class="col-md-8 .col-md-4">
        <?foreach( $news as $new):?>
            <div class="media">
                <a class="media-left media-middle" href="#">
                    <img src="<?=$new['new_pic']?>" alt="...">
                </a>
                <div class="media-body">

                    <h4 class="media-heading"><a href="<?= BASE_URL ?>news/view/<?= $new['new_id'] ?>"> <?=$new['new_title']?></a></h4>
                    <p><?=$new['new_text']?></p>
                </div>
            </div>

        <? endforeach ?>


</div>