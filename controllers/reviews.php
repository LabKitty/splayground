<?php

class reviews extends Controller{
    function index(){

        $this->reviews = get_all("SELECT * FROM review order by review_id desc limit 3");
    }

}
?>