<nav class="nnavbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <h1>ALL VIDEO</h1>
            </a>
        </div>
    </div>
</nav>




<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">ALL VIDEOS </li>
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



<?foreach( $videos as $video):?><!-- Video posts -->
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <div class="video-container">
                <iframe width="300" height="168" src="http://www.youtube.com/embed/<?=$video['video_number']?>" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="caption">
                <a class="youtube" href="http://www.youtube.com/embed/4eYSpIz2FjU"> <h3><?=$video['video_title']?></h3></a>
           </div>
         </div>
    </div>

<? endforeach ?><!-- -Video posts -->

