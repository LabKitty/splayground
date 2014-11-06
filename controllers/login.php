<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:39
 */

class login extends Controller
{
    public $requires_auth = true;
    function index()
    {
        header('Location: '.BASE_URL);
    }
}