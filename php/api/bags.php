<?php
include "../crud/db.php";
class request
{
	function __construct($db, $imagesUrl)
	{
		$this->db = $db;
		$this->imagesUrl = $imagesUrl;
	}
	function getOne($id)
	{
		$query = "SELECT * FROM bags WHERE id=$id";
		$bags = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);
		foreach ($bags as $bag) {
			$query = "SELECT * FROM bagsimages WHERE idBag=$bag->id";
			$images = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);
			foreach ($images as $image) {
				$image->url = $this->imagesUrl . $image;
			}
			$bag->images = $images;
		}
		echo json_encode($bags);
	}
	function getAll()
	{
		$query = "SELECT * FROM bags ORDER BY id";
		$bags = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);
		foreach ($bags as $bag) {
			$query = "SELECT * FROM bagsimages WHERE idBag=$bag->id";
			$images = $this->db->query($query)->fetchAll(PDO::FETCH_OBJ);
			$bag->images = $images;
		}
		echo json_encode($bags);
	}
}
