<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#home" role="tab" data-toggle="tab">Dashboard</a></li>
    <li><a href="#posts" role="tab" data-toggle="tab">Posts</a></li>
    <li><a href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
    <li><a href="#heroes" role="tab" data-toggle="tab">Heroes</a></li>
    <li><a href="#videos" role="tab" data-toggle="tab">Videos</a></li>
    <li><a href="#forum" role="tab" data-toggle="tab">Forum</a></li>
    <li><a href="#users" role="tab" data-toggle="tab">Users</a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">

    <div class="tab-pane active" id="home">


    </div>

        <div class="tab-pane" id="posts">
            <div class="list-group">
                <a href="newarticle" class="list-group-item">Add New Post</a>
            </div>
        </div>

    <div class="tab-pane" id="reviews">
        <div class="list-group">
             <a href="newreview" class="list-group-item">Add New Review</a>
        </div>
    </div>

    <div class="tab-pane" id="heroes">
        <div class="list-group">
            <a href="add_hero" class="list-group-item">Add New Hero</a>
        </div>
    </div>

    <div class="tab-pane" id="videos">
        <div class="list-group">
             <a href="newvideo" class="list-group-item">Add New Video</a>
         </div>
    </div>

    <div class="tab-pane" id="forum">
        <div class="panel panel-default">

            <div class="panel-heading">Latests forumposts</div>
            <div class="panel-body">
                <?foreach( $forumposts as $forumpost):?>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>forum/showthread/<?= $forumpost['subforum_id']?>"><?=$forumpost['forumpost_title']?></a>

                        <h6> Teema on alustatud <?=$forumpost['forumpost_date']?> lisas <?=$forumpost['forumpost_author']?> </h6>
                    </li>
                <? endforeach ?>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="users">...</div>
</div>
