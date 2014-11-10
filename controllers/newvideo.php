<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 18:20
 */

class newvideo extends Controller
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
        $data = $_POST['data'];
        $data['video_id'] = $this->params[0];
        insert('video', $data);
    }
}