<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 8.12.2014
 * Time: 9:06
 */

class forum extends Controller
{
    function index(){
        $this->forums = get_all("SELECT * FROM forum");
        $this->forum_1 = get_all("SELECT * FROM forum WHERE forum_id ='1'");
        $this->forum_2 = get_all("SELECT * FROM forum WHERE forum_id ='2'");
        $this->subforums = get_all("select * from forum INNER JOIN subforum ON forum.forum_id = subforum.forum_id");
        $this->subforum_1 = get_all("SELECT * FROM subforum WHERE forum_id ='1'");
        $this->subforum_2 = get_all("SELECT * FROM subforum WHERE forum_id ='2'");
        $this->forumpost = get_first("SELECT * FROM forumpost ");
        $this->forumreplays = get_all("SELECT * FROM forumreplay order by forumreplay_id DESC limit 1  ");

    }

    function forumdisplay(){
        $subforum_id = $this->params[0];
        $this->forumposts = get_all("SELECT * FROM forumpost NATURAL JOIN subforum WHERE subforum_id='$subforum_id' ");

    }

    function showthread(){
        $forumpost_id = $this->params[0];
        $this->forumpost = get_first("SELECT * FROM forumpost NATURAL JOIN user WHERE forumpost_id='$forumpost_id'");
        $this->forumreplays = get_all("SELECT * FROM forumreplay NATURAL JOIN forumpost WHERE forumpost_id='$forumpost_id'");
    }

    function showthread_post()
    {
        $data = $_POST['data'];
        $data['forumpost_id'] = $this->params[0];
        insert('forumreplay', $data);
    }

    function index_post()
    {
        $data = $_POST['data'];
        $data['forumreplay_id'] = $this->params[0];
        insert('forumreplay', $data);
    }




}


