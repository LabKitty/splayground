<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:49
 */

class news extends Controller {

    function index(){
        $this->news = get_all("SELECT * FROM new order by new_id DESC");
        $this->reviews = get_all("SELECT * FROM review order by review_id DESC");
    }

    function view()
    {
        $new_id = $this->params[0];
        $this->new = get_first("SELECT * FROM new NATURAL JOIN user WHERE new_id='$new_id'");
        $this->comments = get_all("SELECT * FROM comment NATURAL JOIN new WHERE new_id='$new_id'");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $data['new_id'] = $this->params[0];
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
