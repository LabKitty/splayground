<?php

class admin extends Controller {

	function index(){
        $this->forumposts = get_all("SELECT * FROM forumpost");
        $this->users = get_all("SELECT * FROM user");
	}


}