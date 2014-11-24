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
    <?foreach( $videos as $video):?><!-- Video posts -->
    <div class=".col-xs-12 .col-md-8"   >

            <div class="video-container">
                <iframe width="580" height="370" src="http://www.youtube.com/embed/<?=$video['video_number']?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="caption">
                <h3> <?=$video['video_title']?></h3>
                <p><?=$video['video_text']?></p>

            </div>
    </div>
    <? endforeach ?><!-- -Video posts -->
</div>