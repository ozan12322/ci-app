<?php  

	class Mahasiswa_model extends CI_model {
		public function getAllMahasiswa()
		{
			return $query = $this->db->get('mahasiswa')->result_array();
		}

		public function tambahDataMahasiswa()
		{
			$data = [
				"nama" => $this->input->post('nama', true),
				"nrp" => $this->input->post('nrp', true),
				"email" => $this->input->post('email', true),
				"jurusan" => $this->input->post('jurusan', true)
			];

			$this->db->insert('mahasiswa', $data);
		}

		public function hapusDataMahasiswa($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('mahasiswa');
		}
	}