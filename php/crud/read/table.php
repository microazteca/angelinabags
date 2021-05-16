<?php
include "db.php";
// fisrt table
$bags = $db->query("
SELECT b.*, COUNT(bi.id) images
FROM bags b 
LEFT JOIN bagsimages bi on b.id = bi.idBag
GROUP BY b.id
ORDER BY b.id
")->fetchAll(PDO::FETCH_OBJ);

echo "<div class=''><p class='text-center bg-info mx-3 fs-6'> Remember : you need to erase all the images from the bag before you erase it </p>";

echo
"<div class=''><table class='table table-hover table-striped'>
	<thead class='table-primary'><tr>
			<th>Id</th>
			<th>Description</th>
			<th>Price</th>
			<th>Lenght</th>
			<th>Width</th>
			<th>Height</th>
			<th>Handle</th>
			<th>Images</th>
			<th>Edit</th>
			<th>Erase</th>
  </tr></thead>
	<tbody>";
foreach ($bags as $bag) {
	echo
	"<tr>
    <th scope='row'>" . $bag->id . "</th>
				<td class='text-center'>" . $bag->description . "</td>
				<td>" . $bag->price . "</td>
				<td>" . $bag->lenght . "</td>
				<td>" . $bag->width . "</td>
				<td>" . $bag->height . "</td>
				<td>" . $bag->handle . "</td>
				<td>" . $bag->images . "</td>
				<td><a href='update/editBag.php?id=" . $bag->id . "' class='btn btn-warning'><i class='fas fa-edit'></i></a></td>";
	if ($bag->images != 0) {
		echo "<td><a href='delete/deleteBag.php?id=" . $bag->id . "' class='btn btn-danger disabled'><i class='far fa-trash-alt'></i></a></td>";
	} else {
		echo "<td><a href='delete/deleteBag.php?id=" . $bag->id . "' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></td>";
	}
	echo "
  </tr>
 ";
}
echo "	</tbody>
</table></div></div>";

// second table
$images = $db->query("
SELECT bi.id id, b.description description, bi.name, bi.idBag 
FROM bagsimages bi 
LEFT JOIN bags b ON b.id=bi.idBag
ORDER BY b.id")->fetchAll(PDO::FETCH_OBJ);

echo
"<div class=''><table class='table col-5 table-hover table-striped'>
	<thead class='table-success'><tr>
			<th>IdBag</th>
			<th>Description</th>
			<th>Id</th>
			<th>Name</th>
			<th>Picture</th>
			<th>Edit</th>
			<th>Erase</th>
  </tr></thead>
	<tbody>";
foreach ($images as $image) {
	echo
	"<tr>
				<td>" . $image->idBag . "</td>
				<td>" . $image->description . "</td>
				<th scope='row'>" . $image->id . "</th>
				<td>" . $image->name . "</td>
				<td><img height=50 src='" . $uploadCarpet . $image->name . "'></td>
				<td><a href='update/editImage.php?id=" . $image->id . "' class='btn btn-warning'><i class='fas fa-edit'></i></a></td>
				<td><a href='delete/deleteImage.php?id=" . $image->id . "&name=" . $image->name . "' class='btn btn-danger'><i class='far fa-trash-alt'></i></a></td>
  </tr>
 ";
}
echo "	</tbody>
</table></div>";
