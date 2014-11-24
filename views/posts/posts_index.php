<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">LATEST </li>
    </ul>
</div>

<div class=".col-xs-6 .col-md-4"><!-- Sidebar -->
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
</div><!-- Sidebar -->

<div class="col-md-8 .col-md-4">
        <?foreach( $posts as $post):?>
            <div class="media">
                <a class="media-left media-middle" href="#">
                    <img src="<?=$post['post_pic']?>" alt="...">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="<?= BASE_URL ?>posts/view/<?= $post['post_id'] ?>"> <?=$post['post_title']?></a></h4>
                    <p><?=$post['post_text']?></p>
                </div>
            </div>
        <? endforeach ?>
</div>