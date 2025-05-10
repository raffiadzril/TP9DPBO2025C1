<?php

/******************************************
 Asisten Pemrogaman 13 & 14
******************************************/

include("KontrakView.php");
include("presenter/ProsesMahasiswa.php");

class TampilMahasiswa implements KontrakView
{
	private $prosesmahasiswa; // Presenter yang dapat berinteraksi langsung dengan view
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->prosesmahasiswa = new ProsesMahasiswa();
	}

	function tampil()
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();
		$data = null;

		//semua terkait tampilan adalah tanggung jawab view
		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			$no = $i + 1;
			$data .= "<tr>
			<td>" . $no . "</td>
			<td>" . $this->prosesmahasiswa->getNim($i) . "</td>
			<td>" . $this->prosesmahasiswa->getNama($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTempat($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTl($i) . "</td>
			<td>" . $this->prosesmahasiswa->getGender($i) . "</td>
			<td>" . $this->prosesmahasiswa->getEmail($i) . "</td>
			<td>" . $this->prosesmahasiswa->getTelp($i) . "</td>
			<td><a href='edit.php?id=" . $this->prosesmahasiswa->getId($i) . "'>Edit</a></td>
			<td><a href='delete.php?id=" . $this->prosesmahasiswa->getId($i) . "'>Delete</a></td>
			</tr>";
			
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL", $data);

		// Menampilkan ke layar
		$this->tpl->write();
	}
	function addView($nim, $nama, $tempat, $tl, $gender, $email, $telp)
	{
		// Menampilkan form tambah data mahasiswa
		$this->prosesmahasiswa->prosesAddMahasiswa($nim, $nama, $tempat, $tl, $gender, $email, $telp);
	}
	function updateView($id)	
	{
		$this->prosesmahasiswa->prosesDataMahasiswa();

		for ($i = 0; $i < $this->prosesmahasiswa->getSize(); $i++) {
			if ($this->prosesmahasiswa->getId($i) == $id) {
				$data = [
					'DATA_ID' => $this->prosesmahasiswa->getId($i),
					'DATA_NIM' => $this->prosesmahasiswa->getNim($i),
					'DATA_NAMA' => $this->prosesmahasiswa->getNama($i),
					'DATA_TEMPAT' => $this->prosesmahasiswa->getTempat($i),
					'DATA_TL' => $this->prosesmahasiswa->getTl($i),
					'DATA_SELECTED_LAKI' => $this->prosesmahasiswa->getGender($i) == 'Laki-laki' ? 'selected' : '',
					'DATA_SELECTED_PEREMPUAN' => $this->prosesmahasiswa->getGender($i) == 'Perempuan' ? 'selected' : '',
					'DATA_EMAIL' => $this->prosesmahasiswa->getEmail($i),
					'DATA_TELP' => $this->prosesmahasiswa->getTelp($i),
				];
	
				$template = new Template("templates/skin_edit.html");
				foreach ($data as $key => $value) {
					$template->replace($key, $value);
				}
				$template->write();
				return;
			}
		}
		// Jika ID tidak ditemukan, tambahkan log atau pesan error
		echo "Data dengan ID $id tidak ditemukan.";
	}
	function editPassing($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp)
	{
		$this->prosesmahasiswa->prosesUpdateMahasiswa($id, $nim, $nama, $tempat, $tl, $gender, $email, $telp);
	}

	function deletePassing($id)
	{
		$this->prosesmahasiswa->prosesDeleteMahasiswa($id);
	}

}
