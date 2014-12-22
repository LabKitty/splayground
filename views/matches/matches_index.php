<?foreach( $matchs as $match):?>

    <div id="getting-started"><?= $match['match_second'] ?></div>
    <?= $match['team_one'] ?> vs <?= $match['team_two'] ?>
<? endforeach ?>




<script src="assets/components/jquery-1.11.2.min.js"></script>
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%D days %H:%M:%S'));
    });
</script>