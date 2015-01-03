<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:49
 */

class reviews extends Controller
{
    function index()
    {
        $this->news = get_all("SELECT * FROM new order by new_id DESC limit 3");
        $this->reviews = get_all("SELECT * FROM review order by review_id DESC");
        $this->matchs = get_all("SELECT * FROM matches");
        $this->broadcasts = get_all("SELECT * FROM broadcast");
    }

    function view()
    {
        $review_id = $this->params[0];
        $this->review = get_first("SELECT * FROM review NATURAL JOIN user WHERE review_id='$review_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN review WHERE review_id='$review_id'");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $data['review_id'] = $this->params[0];
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