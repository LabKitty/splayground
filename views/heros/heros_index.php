<div class="col-md-8 .col-md-4">
    <ul class="list-group">
        <li class="list-group-item">PICK A HERO</li>
    </ul>
</div>

<div class=".col-xs-6 .col-md-4">
    <div class="pull-right">
        <div class="thumbnail">
            <img src="images/tumb.PNG" alt="..." class="img-circle">
            <h3>Matches</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">14</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-9">
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
