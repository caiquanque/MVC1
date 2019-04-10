<?php

class MasterModel {
	public static function get_all_from ($table) {
		$db = Database::connect();

		$sql = "SELECT * FROM $table";
		$stmt = $db->prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

		return $result;
	}

	public static function delete ($table, $column, $value) {
		$db = Database::connect();

		$sql = "DELETE FROM $table WHERE $column = :value";
		$stmt = $db->prepare($sql);
		$stmt = bindParam(':value', $value);
		$stmt->execute();
		$result = $stmt->fetchll(PDO::FETCH_ASSOC);
		$stmt->closeCursor();

	}
}