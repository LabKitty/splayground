<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 24.11.2014
 * Time: 13:33
 */

class coverage extends Controller {
    function index(){
        $this->broadcasts = get_all("SELECT * FROM broadcast");
    }

    function view(){
        $this->broadcasts = get_all("SELECT * FROM broadcast");
    }
}