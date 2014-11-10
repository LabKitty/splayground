<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 13:04
 */

class news extends Controller {
    function index(){
        $this->news = get_all("SELECT * FROM new order by new_id DESC");
    }
}