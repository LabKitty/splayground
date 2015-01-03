<div class="panel panel-default">
    <div class="panel-heading">Title</div>
    <div class="panel-body">
        <?foreach( $forumposts as $forumpost):?>
            <li class="list-group-item">
                <a href="<?= BASE_URL ?>forum/showthread/<?= $forumpost['subforum_id']?>"><?=$forumpost['forumpost_title']?></a>
                <br>
                <h6> Teema on alustatud <?=$forumpost['forumpost_date']?> lisas <?=$forumpost['forumpost_author']?> </h6>
            </li>
        <? endforeach ?>
    </div>
</div>


<script src="assets/components/jquery-1.11.2.min.js"></script>
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%Dd %Hh %Mm'));
    });
</script>