<?php

class homepage extends Controller{
    function index(){
        $this->users = get_all("SELECT * FROM user");
        $this->posts = get_all("SELECT * FROM post");
    }

}
?>