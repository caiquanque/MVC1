<?php

class ModelList extends MasterModel {
	
	public static function get_all ($table) {
	  return parent::get_all_from('song');
	}

	public static function delete_by_id ($id) {
	  parent::delete('song', 'id', $id);
	}

	
}