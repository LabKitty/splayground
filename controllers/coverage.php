<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 24.11.2014
 * Time: 13:33
 */

class coverage extends Controller {
    function index(){
        $this->videos = get_all("SELECT * FROM video order by video_id DESC LIMIT 1");
    }
}