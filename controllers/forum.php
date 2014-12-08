<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 8.12.2014
 * Time: 9:06
 */

class forum extends Controller
{
    function index()
    {
        $this->forum = get_all("SELECT * FROM forum order by forum_id DESC ");
        $this->forum_1 = get_all("SELECT * FROM forum where forum_attribut = 1 ");
        $this->forum_2 = get_all("SELECT * FROM forum where forum_attribut = 2 ");
        $this->forum_3 = get_all("SELECT * FROM forum where forum_attribut = 3 ");
        $this->forumdata = get_all("SELECT * FROM forumdata");
        $this->forumdata_1 = get_all("SELECT * FROM forumdata where forum_data_attribut = 1 ");
        $this->forumdata_2 = get_all("SELECT * FROM forumdata where forum_data_attribut = 2 ");
        $this->forumdata_3 = get_all("SELECT * FROM forumdata where forum_data_attribut = 3 ");

    }

    function view()
    {
        $forumpost_id = $this->params[0];
        $this->forumpost = get_first("SELECT * FROM forumpost NATURAL JOIN user WHERE forumpost_id='$forumpost_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN forumpost WHERE forumpost_id='$forumpost_id'");

    }

    function display()
    {
        $forumpost_id = $this->params[0];
        $this->forumpost = get_all("SELECT * FROM forumpost NATURAL JOIN user WHERE forumpost_id='$forumpost_id'");

    }


}