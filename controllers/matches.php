<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 22.12.2014
 * Time: 12:47
 */


class matches extends Controller
{
    function index()
    {
        $this->matchs = get_all("SELECT * FROM matches");
    }

}

?>