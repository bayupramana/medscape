<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Medscape extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_medscape');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function privacy()
	{
		$this->load->view('about2');
	}

	public function cookie()
	{
		$this->load->view('about3');
	}

	public function term()
	{
		$this->load->view('about4');
	}

	public function advertising()
	{
		$this->load->view('about5');
	}

	public function viewall()
	{
		$this->load->view('viewall');
	}

	public function drugs()
	{
		$this->load->view('dnd');
	}

	public function dotc()
	{
		$this->load->view('d_otc_h');
	}

	public function ragwitek()
	{
		$this->load->view('ragwitek');
	}

	public function rbc()
	{
		$this->load->view('RBC');
	}

	public function anatomy()
	{
		$this->load->view('anatomy');
	}

	public function ankle()
	{
		$this->load->view('ankle');
	}

	public function ear()
	{
		$this->load->view('ear');
	}

	public function heart()
	{
		$this->load->view('heart');
	}


	public function register()
	{
		$this->form_validation->set_rules('country', 'Country', 'required|trim');
		$this->form_validation->set_rules('firstName', 'FirstName', 'required|trim');
		$this->form_validation->set_rules('lastName', 'LastName', 'required|trim');
		$this->form_validation->set_rules('zipCode', 'PostalCode', 'required|trim');
		$this->form_validation->set_rules('emailAddress', 'Email', 'required|trim|is_unique[user.email]|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required|trim');
		$this->form_validation->set_rules('confirmPassword', 'confirmPassword', 'required|trim');
		$this->form_validation->set_rules('profession', 'Profession', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$data = [
				'country' => $this->input->post('country', true),
				'firstName' => $this->input->post('firstName', true),
				'lastName' => $this->input->post('lastName', true),
				'postalCode' => $this->input->post('zipCode', true),
				'email' => $this->input->post('emailAddress', true),
				'password' => pasSword_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'profession' => $this->input->post('profession', true),
			];
			$table = 'user';
			$register = $this->db->insert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				redirect('medscape/login');
			}
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('userId', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$this->login_process();
		}
	}

	public function login_process()
	{
		$email = $this->input->post('userId');
		$password = $this->input->post('password');
		$login = $this->db->get_where('user', ['email' => $email])->row_array();
		if ($login) {
			if (password_verify($password, $login['password'])) {
				$data = $login['email'];
				$this->session->set_userdata($data);
				redirect('medscape/index');
			} else {
				$this->session->set_flashdata('message', 'Gagal login: Cek password! ');
				redirect('medscape/login');
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal login: Cek username! ');
			redirect('medscape/login');
		}
	}
}
