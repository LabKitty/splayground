<?php

class reviews extends Controller{
    function index(){
        $this->news = get_all("SELECT * FROM new order by new_id DESC limit 3");
        $this->reviews = get_all("SELECT * FROM review order by review_id DESC");
    }
    function view()
    {
        $review_id = $this ->params[0];
        $this->review = get_first("SELECT * FROM review NATURAL JOIN user WHERE review_id='$review_id'");
    }
}
?>