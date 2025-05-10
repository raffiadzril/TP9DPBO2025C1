<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

interface KontrakView{
	public function tampil();
	public function addView($nim, $nama, $tempat, $tl, $gender, $email, $telp);

	public function updateView($id);

	public function editPassing($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp);

	public function deletePassing($id);

	


}
?>