<?php

class posts extends Controller
{
    function index()
    {
        $this->posts = get_all("SELECT * FROM post order by post_id");
        $this->reviews = get_all("SELECT * FROM review order by review_id DESC");
    }

    function view()
    {
        $post_id = $this->params[0];
        $this->post= get_first("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN post WHERE post_id='$post_id'");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $data['comment_id'] = $this->params[0];
        insert('comment', $data);
    }

}
?>