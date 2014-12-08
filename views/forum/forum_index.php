<div class="panel panel-default">
    <?foreach( $forum_1 as $forum):?><!-- Forum title -->
        <div class="panel-heading"><?=$forum['forum_title']?></div>
            <div class="panel-body"><!-- Subforums-->
                 <?foreach( $forumdata_1 as $forumdata):?>
                     <li class="list-group-item">
                         <a href="<?= BASE_URL ?>forum/display/<?= $forum['forum_id'] ?>"><?=$forumdata['forum_title']?></a>
                         <br>
                         <h6> <?=$forumdata['forum_desc']?></h6>
                     </li>
                 <? endforeach ?>
             </div><!-- Subforums-->
    <? endforeach ?>
</div>

<div class="panel panel-default">
    <?foreach( $forum_2 as $forum):?><!-- Forum title -->
        <div class="panel-heading"><?=$forum['forum_title']?></div>
            <div class="panel-body"><!-- Subforums-->
                <?foreach( $forumdata_2 as $forumdata):?>
                    <li class="list-group-item">
                        <a href="<?= BASE_URL ?>forum/display/<?= $forum['forum_id'] ?>"><?=$forumdata['forum_title']?></a>
                            <br>
                         <h6> <?=$forumdata['forum_desc']?></h6>
                    </li>
                <? endforeach ?>
            </div><!-- Subforums-->
    <? endforeach ?><!-- Forum title -->
</div>

<div class="panel panel-default">
    <?foreach( $forum_3 as $forum):?><!-- Forum title -->
         <div class="panel-heading"><?=$forum['forum_title']?></div>
            <div class="panel-body"><!-- Subforums-->
               <?foreach( $forumdata_3 as $forumdata):?>
                   <li class="list-group-item">
                       <a href="<?= BASE_URL ?>forum/display/<?= $forum['forum_id'] ?>"><?=$forumdata['forum_title']?></a>
                       <br>
                       <h6> <?=$forumdata['forum_desc']?></h6>
                   </li>
                <? endforeach ?>
             </div><!-- Subforums-->
    <? endforeach ?><!-- Forum title -->
</div>

