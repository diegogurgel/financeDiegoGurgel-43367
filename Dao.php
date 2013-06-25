<?php 
	interface Dao{
		function insert($object);
		function update($object);
		function delete($object);
		function select($object);
		function selectAll();
	}
 ?>