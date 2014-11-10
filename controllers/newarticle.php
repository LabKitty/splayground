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
   
    function index_post()
    {
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
        insert('post', $data);
    }


}