<?php

class homepage extends Controller{
    function index(){
        $this->posts = get_all("SELECT * FROM post order by post_id ");
        $this->reviews = get_all("SELECT * FROM review order by review_id desc limit 3");
    }

}
?>