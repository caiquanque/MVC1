<?php
class List {
	public static function view () {
	   $list = ModelList::get_all();

	   require_once 'views/list/index.php'
    }

    public static function delete () {
       if (isset($_GET['id'])) {
         ModelList::delete_by_id($_GET['id']);
         header('location: ?controller=list&action=view');
       } else {
       	   header('location:.');
       }
    }

}