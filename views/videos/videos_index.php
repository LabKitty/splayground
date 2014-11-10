<nav class="nnavbar navbar-inverse" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <h1>ALL VIDEO</h1>
            </a>
        </div>
    </div>
</nav>


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

    <ul class="list-group">
        <li class="list-group-item">ALL VIDEOS </li>
    </ul>

<?foreach( $videos as $video):?><!-- Video posts -->
    <div class="container">
        <div class="row">
            <div class="span8">
                <div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
                    <iframe allowfullscreen="" src="<?= $video['video_link'] ?>" frameborder="0"></iframe>
                </div>
            </div>
        </div>
    </div>
<? endforeach ?><!-- -Video posts -->
