<?php

class homepage extends Controller{
    function index(){
        $this->posts = get_all("SELECT * FROM post order by post_id desc limit 3");
    }

}
?>