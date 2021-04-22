<?php

/******************************************
PRAKTIKUM RPL
 ******************************************/

class Task extends DB
{

	// Mengambil data
	function getTask()
	{
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}
	function InsertTask()
	{
		if (isset($_POST['submit'])) {
			$name_td = $_POST['tname'];
			$details_td = $_POST['tdetails'];
			$subject_td = $_POST['tsubject'];
			$priority_td = $_POST['tpriority'];
			$deadline_td = $_POST['tdeadline'];
			$tstatus = ("Belum Terjual");

			$query = "INSERT INTO `tb_to_do`(`name_td`, `details_td`, `subject_td`, `priority_td`, `deadline_td`,`status_td`) 
			VALUES ('$name_td','$details_td','$subject_td','$priority_td','$deadline_td','$tstatus')";

			return $this->execute($query);
		}
	}
	function DeleteTask($id)
	{
		$query = "DELETE FROM `tb_to_do` WHERE `id`= $id";
		return $this->execute($query);
	}

	function setStatus($id)
	{
		$query = "UPDATE tb_to_do SET status_td='Terjual' WHERE id='$id'";
		return $this->execute($query);
	}
}
