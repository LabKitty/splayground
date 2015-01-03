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
    <?foreach( $broadcasts as $broadcast):?><!-- Video posts -->
    <div class=".col-xs-12 .col-md-8"   >

        <div class="video-container">
            <?= $broadcast['broadcast_link'] ?>
        </div>

    </div>
    <? endforeach ?><!-- -Video posts -->
</div>