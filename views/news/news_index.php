<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">NEWS</li>
    </ul>
</div>

<div class=".col-xs-6 .col-md-4"><!-- Sidebar -->
    <div class="pull-right">
        <div class="thumbnail">
            <h3>Matches</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">14</span>
                </li>
            </ul>
        </div>
    </div>
</div><!-- Sidebar -->

<div class="col-md-10 .col-md-4">
    <?foreach( $news as $new):?>
        <div class="col-xs-6 col-md-3">
                <a href="<?= BASE_URL ?>news/view/<?= $new['new_id'] ?>"> <img src="<?=$new['new_pic']?>" alt="..."></a>
        </div>
    <? endforeach ?>
</div>