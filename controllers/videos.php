<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 13:33
 */

class videos extends Controller {
    function index(){
        $this->videos = get_all("SELECT * FROM video order by video_id DESC");
    }
}