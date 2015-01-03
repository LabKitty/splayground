<div class="container-fluid">

    <div class=".col-xs-6 .col-md-4"><!-- Sidebar-->
        <div class="pull-right">

            <div class="caption"><!-- Broadcast-->
                <h3>Broadcast</h3>
                <ul class="list-group">
                    <?foreach( $broadcasts as $broadcast):?>
                        <li class="list-group-item">
                            <a href="<?= BASE_URL ?>coverage"><?= $broadcast['broadcast_title'] ?></a>
                        </li>
                    <? endforeach ?>
                </ul>
            </div><!-- Broadcast-->

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
    </div><!-- Sidebar-->

    <div class="col-md-8 .col-md-4"><!-- Page Header -->
        <ul class="list-group">
            <li class="list-group-item">PICK A HERO</li>
        </ul>
    </div><!-- Page Header -->

    <div class="row">
        <div class="col-xs-12 col-md-8">
            <div class="row">
                <div class="col-xs-8 col-sm-6">
                    <h3>Radiant Strength</h3>
                    <?foreach( $hero_attribut_1 as $hero):?>
                        <div class="col-md-2">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                </a>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>

                <div class="col-xs-4 col-sm-6">
                    <h3>Dire Strength</h3>
                    <?foreach( $hero_attribut_2 as $hero):?>
                         <div class="col-md-2">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                </a>
                            </div>
                        </div>
                    <? endforeach ?>
                </div>

                <div class="col-xs-8 col-sm-6">
                    <h3>Radiant Agility</h3>
                    <?foreach( $hero_attribut_3 as $hero):?>
                            <div class="col-md-2">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                    </a>
                                </div>
                            </div>
                          <? endforeach ?>
                </div>

                <div class="col-xs-4 col-sm-6">
                    <h3>Dire Agility</h3>
                    <?foreach( $hero_attribut_4 as $hero):?>
                             <div class="col-md-2">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                    </a>
                                </div>
                              </div>
                        <? endforeach ?>
                </div>

                <div class="col-xs-8 col-sm-6">
                    <h3>Radiant Intelligence</h3>
                    <?foreach( $hero_attribut_5 as $hero):?>
                             <div class="col-md-2">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                    </a>
                                </div>
                             </div>
                        <? endforeach ?>
                </div>

                <div class="col-xs-4 col-sm-6">
                    <h3>Dire Intelligence</h3>
                    <?foreach( $hero_attribut_6 as $hero):?>
                            <div class="col-md-2">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <a href="<?= BASE_URL ?>heros/view/<?= $hero['hero_id'] ?>"> <img src="<?=$hero['hero_pic']?>"></a>
                                    </a>
                                </div>
                            </div>
                        <? endforeach ?>

                </div>
            </div>
        </div>
    </div>
</div>



<script src="assets/components/jquery-1.11.2.min.js"></script><!-- Countdown -->
<script src="assets/components/jquery.countdown-2.0.4/jquery.countdown.min.js"></script>

<script>
    var $el = $('#getting-started');

    $el.countdown($el.html(), function(event) {
        $el.text(event.strftime('%Dd %Hh %Mm'));
    });
</script><!-- Countdown -->