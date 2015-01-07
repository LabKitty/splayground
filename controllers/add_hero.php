<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 7.01.2015
 * Time: 9:15
 */

class add_hero extends Controller {

    function index(){
    }

    function view()
    {

    }

    function index_post()
    {
        $data = $_POST['data'];
        $data['hero_id'] = $this->params[0];
        insert('hero', $data);
    }


}
?>