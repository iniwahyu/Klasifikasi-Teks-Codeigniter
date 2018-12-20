<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home/index');
	}

	public function prosesklasifikasi()
	{
		$this->form_validation->set_rules('klasifikasi', 'Text', 'trim|required');
		$this->form_validation->set_message('required', '<b>%s</b> Tidak Boleh Kosong');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('home/index');
		}
		else
		{
			$klasifikasi = $this->input->post('klasifikasi');
			$this->session->set_userdata('klasifikasi', $klasifikasi);
			redirect(base_url('home/hasil'));
		}
	}

	public function hasil()
	{
		if($this->session->userdata('klasifikasi'))
		{
			$data = $this->session->userdata('klasifikasi');
			$data = array('data' => $data);
			$this->load->view('home/hasil', $data);
			// $this->session->sess_destroy();
		}
		else
		{
			echo "u sapa?";
		}
	}

	public function test()
	{
		$blocked = array('porn', 'adult');
		$text = 'Habib suka melihat video porno bersama temannya menonton PORno. ';
		$matched = preg_match_all("/(".implode('|', $blocked).")/i", $text, $matches);
		$filter = preg_replace("/(".implode('|', $blocked).")/i", '<span style="color: red;">***</span>', $text);
		echo "Asli: " . $text . "<br>";
		echo "Filter: " . $filter . "<br>" . "Ditemukan Kata Tidak Pantas Sebanyak: " . $matched;
	}
}
