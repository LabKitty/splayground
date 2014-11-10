<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 6.11.2014
 * Time: 18:20
 */

class newreview  extends Controller
{
    function index()
    {

    }

    function index_ajax()
    {
        echo "\$_REVIEW :<br>";
        var_dump($_REVIEW);
    }

    function index_review()
    {
        echo "\$_REVIEW:<br>";
        var_dump($_REVIEW);
        $data = $_REVIEW['data'];
        $data['review_id'] = $this->params[0];
        insert('review', $data);
    }
}