<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 26.11.2014
 * Time: 10:04
 */

class forum extends Controller
{

    function index()
    {
        $this->forum = get_all("SELECT * FROM forum order by forum_id");


    }

    function view()
    {
        $forum_id = $this->params[0];
        $this->forums = get_first("SELECT * FROM forum NATURAL JOIN user WHERE forum_id='$forum_id'");

    }
}

?>