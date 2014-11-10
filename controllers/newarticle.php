<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 18:19
 */

class newarticle extends Controller
    {
        function index()
        {

        }
    function index_ajax()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
    }
    function index_post()
    {
        echo "\$_POST:<br>";
        var_dump($_POST);
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        insert('post', $data);
    }


}