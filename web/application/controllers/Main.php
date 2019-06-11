<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "Dashboard | E-Toll";
		$data['user'] = $this->db->get('user');
		$data['log'] = $this->db->get('log');
		if ($this->input->post('submit')==true) {
			$user = [
					'rfid' => $this->input->post('rfid'),
					'nama' => $this->input->post('nama'),
					'saldo' => $this->input->post('saldo')
				];
			$this->db->insert('user', $user);
			redirect('main');

		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('main/main', $data);
			$this->load->view('templates/footer');
			
		}
		/**/

	}
	public function delete(){
		$this->db->delete('user', array('RFID' => $this->uri->segment('3')));
		redirect('main');
	}
	public function topup(){
		$data['title'] = "Top Up | E-Toll";
		$data['user'] = $this->db->get_where('user', array('RFID' => $this->uri->segment('3')))->row_array();
		if ($this->input->post('submit')==true) {
			$topup = [
					'Saldo' => $data['user']['Saldo'] + $this->input->post('topup')
				];

			//var_dump($this->input->post('topup'));
		
			$this->db->update('user', $topup, array('RFID'=>$this->input->post('rfid')));
			redirect('main');

		}else{
			$this->load->view('templates/header', $data);
			$this->load->view('main/topup', $data);
			$this->load->view('templates/footer');

		}
	}
	public function clearlog(){
		$this->db->empty_table('log','');
		redirect('main');
	}
}
