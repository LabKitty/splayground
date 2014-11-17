<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:49
 */

class posts extends Controller
{
    function index()
    {
        $this->posts = get_all("SELECT * FROM post");
    }

    function view()
    {
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN post WHERE post_id='$post_id'");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $data['post_id'] = $this->params[0];
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

