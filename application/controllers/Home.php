<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}

	public function index()
	{
		$this->load->view('Home/index');
	}

	public function about()
	{
		$this->load->view('Home/about');
	}

	public function klasifikasi()
	{
		$this->load->view('Home/klasifikasi');
	}

	public function prosesklasifikasi()
	{
		$this->form_validation->set_rules('klasifikasi', 'Text', 'trim|required');
		$this->form_validation->set_message('required', '<b>%s</b> Tidak Boleh Kosong');

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('Home/klasifikasi');
		}
		else
		{
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
				'text' => $this->input->post('klasifikasi'),
				'session' => session_id(),
				'waktu' => date('Y-m-d h:i:s'),
			);
			$this->Home_model->tambahData('history', $data);
			$klasifikasi = $this->input->post('klasifikasi');
			$this->session->set_userdata('klasifikasi', $klasifikasi);
			redirect(base_url('Home/hasil'));
		}
	}

	public function hasil()
	{
		if($this->session->userdata('klasifikasi'))
		{
			$data = $this->session->userdata('klasifikasi');
			$data = array('data' => $data);
			$this->load->view('Home/hasil', $data);
			$this->session->sess_destroy();
		}
		else
		{
			redirect(base_url("/klasifikasi"));
		}
	}

	public function test()
	{
		$blocked = array(
			'anjing', 'babi', 'monyet', 'kunyuk', 'bajingan', 'asu', 'bangsat', 'kontol', 'memek', 'jembut', 'ngentot', 'ngewe', 'jablay', 'bego', 'goblok', 'idiot', 'geblek', 'gila', 'sinting', 'tolol', 'sarap', 'seks', 'porno', 'adegan dewasa', 'adegan ranjang', 'porn', 'adult',
		);
		$text = 'Habib suka melihat video porno bersama temannya menonton PORno. ';
		$matched = preg_match_all("/(".implode('|', $blocked).")/i", $text, $matches);
		$filter = preg_replace("/(".implode('|', $blocked).")/i", '<span style="color: red;">***</span>', $text);
		echo "Asli: " . $text . "<br>";
		echo "Filter: " . $filter . "<br>" . "Ditemukan Kata Tidak Pantas Sebanyak: " . $matched;
	}

	public function test2()
	{
		$blocked = array('anal', 'ass', 'ass hole', 'asshole', 'aseksual', 'biseksual', 'banci', 'bencong', 'bugil', 'blonde', 'bitch', 'cump', 'coli', 'coly', 'dildo', 'fuck', 'fucking', 'gay', 'gigolo', 'get the fuck', 'gtfo', 'homo', 'horny', 'horni', 'itil', 'jalang', 'jablay', 'jembut', 'kontol', 'kentu', 'kenthu', 'kimcil', 'lesbi', 'lonte', 'lonthe', 'loli', 'loly', 'maho', 'memek', 'motherfucker', 'mother fucker', 'ngaceng', 'ngentot', 'ngewe', 'ngocok', 'onani', 'orgasme', 'pejuh', 'peju', 'peli', 'pentil', 'pelacur', 'porno', 'porn', 'pussy', 'seks', 'sex', 'shit', 'shut the fuck up', 'stfu', 'telanjang', 'tete', 'tetek', 'tempik', 'what the fuck', 'what the hell', 'wtf');
	}
}
