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

    function index_post()
    {
        $data = $_POST['data'];
        $data['review_id'] = $this->params[0];
        insert('review', $data);
    }
}
?>