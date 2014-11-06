<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 10:39
 */

class logout extends Controller
{
    function index()
    {
        session_destroy();
        header('Location: '.BASE_URL);
    }
} 