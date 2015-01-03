<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:49
 */

class heros extends Controller {

    function index(){
        $this->heros = get_all("SELECT * FROM hero");
        $this->matchs = get_all("SELECT * FROM matches");
        $this->broadcasts = get_all("SELECT * FROM broadcast");
        $this->hero_attribut_1 = get_all("SELECT * FROM hero where hero_attribut = 1");
        $this->hero_attribut_2 = get_all("SELECT * FROM hero where hero_attribut = 2");
        $this->hero_attribut_3 = get_all("SELECT * FROM hero where hero_attribut = 3");
        $this->hero_attribut_4 = get_all("SELECT * FROM hero where hero_attribut = 4");
        $this->hero_attribut_5 = get_all("SELECT * FROM hero where hero_attribut = 5");
        $this->hero_attribut_6 = get_all("SELECT * FROM hero where hero_attribut = 6");

    }

    function view()
    {
        $hero_id = $this->params[0];
        $this->hero = get_first("SELECT * FROM hero NATURAL JOIN user WHERE hero_id='$hero_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN hero WHERE hero_id='$hero_id'");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $data['hero_id'] = $this->params[0];
        insert('comment', $data);
    }

    function index_post()
    {
        $data = $_POST['data'];
        $data['comment_id'] = $this->params[0];
        insert('comment', $data);
    }


}
?>