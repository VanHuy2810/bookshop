<?php 
    // include "./connect_db.php";
    include './models/user.php';

    function index_users(){
        if(isset($_GET["search"])){
            $search = $_GET["search"];
            $dataUsers = get_users_by_name($search);
        } else {
            $dataUsers = get_all_users();
        }
        return ["user_data"=> $dataUsers, "total_page"=> 5];
    }

    function create($user){
        $result = insert_user_repare($user);
        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }
    }

    function edit_user($user_id){
        $data = get_user_by_id($user_id);
        return $data;
    }

    function update_user($param_update, $user_id) {
        $result = update_user_by_id($param_update, $user_id);

        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }
    }

    function delete_user($user_id) {
        $result = delete_user_by_id($user_id);

        if ($result ) {
            page_redirect('/demodb/?controller=users');
        }  
    }
?>