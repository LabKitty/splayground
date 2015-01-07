<?php
/**
 * Created by PhpStorm.
 * User: Nika
 * Date: 05.01.2015
 * Time: 10:49
 */

class registration extends Controller {

    function index(){

    }

    function index_post(){
        $data = $_POST['data'];
        $data['user_id'] = $this->params[0];
        insert('user', $data);
    }

    function edit_post(){
        $data = $_POST['data'];
        $data['user_id'] = $this->params[0];
        $data['active'] = isset($data['active']) ? 1 : 0;
        insert('user', $data);
        header('Location: '.BASE_URL .'users/view/'.$this->params[0]);
    }
    function delete_post(){
        $user_id = $_POST['user_id'];
        update('user', ['deleted'=>'1'], "user_id = '$user_id'");
        exit("1");
    }
    function edit(){
        $user_id = $this->params[0];
        $this->user = get_first("SELECT * FROM user WHERE user_id = '$user_id'");
    }


}

?>
