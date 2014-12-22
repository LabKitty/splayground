




        <div class="caption"><!-- Matches-->
            <h3>Matches</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <?foreach( $matchs as $match):?>
                        <span class="badge"><div id="getting-started"><?= $match['match_second'] ?></div></span></span>
                        <?= $match['team_one'] ?> vs <?= $match['team_two'] ?>
                    <? endforeach ?>
                </li>
            </ul>
        </div><!-- Matches-->

    </div>





<script src="assets/components/jquery-1.11.2.min.js"></script>
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%D days %H h %M m'));
    });
</script>