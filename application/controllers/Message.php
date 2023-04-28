<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->library('form_validation');
		$this->load->model('M_Message');
		$this->load->model('M_Site');
		$this->site_settings = $this->M_Site->showAllSite();
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		// var_dump($this->session->userdata('id'));
		// exit();

		$data['data'] = $this->M_Message->ownerDetails();
		$this->load->view('user/message/message', $data);
	}
	public function ownerDetails()
	{
		$res = $this->M_Message->ownerDetails();
		print_r(json_encode($res));
	}
	public function allUser()
	{
		$data['data'] = $this->M_Message->allUser();
		$data['last_msg'] = array();
		$this->load->helper('url');
		if (!is_array($data['data'])) {
			echo "<p class='text-center'>No user available.</p>";
		} else {
			$count = count($data['data']);
			for ($i = 0; $i < $count; $i++) {
				$unique_id = $data['data'][$i]['id'];
				$msg = $this->M_Message->getLastMessage($unique_id);
				for ($j = 0; $j < count($msg); $j++) {

					$time = explode(" ", $msg[0]['time']); //00:00:00.0000
					$time = explode(".", $time[1]); //00:00:00
					$time = explode(":", $time[0]); //00 00 00
					if ((int)$time[0] == 12) {
						$time = $time[0] . ":" . $time[1] . " PM";
					} elseif ((int)$time[0] > 12) {
						$time = ($time[0] - 12) . ":" . $time[1] . " PM";
					} else {
						$time = $time[0] . ":" . $time[1] . " AM";
					}

					array_push($data['last_msg'], array(
						'message' => $msg[0]['message'],
						'sender_id' => $msg[0]['sender_message_id'],
						'receiver_id' => $msg[0]['receiver_message_id'],
						'time' => $time //00:00
					));
				}
			}
			$this->load->view('user/message/sampleDataShow', $data);
		}
	}
	public function getIndividual()
	{
		$returnVal = $this->M_Message->getIndividual($_POST['data']);
		print_r(json_encode($returnVal, true));
	}
	public function logout()
	{
		$date = $_POST['date'];
		$this->load->helper('url');
		$this->M_Message->logoutUser('deactive', $date);
		unset(
			$_SESSION['uniqueid'],
			$_SESSION['username'],
			$_SESSION['image']
		);
		echo base_url();
	}
	public function setNoMessage()
	{
		$data['image'] = $_POST['image'];
		$data['name'] = $_POST['name'];
		$this->load->view('user/message/notmessageyet', $data);
	}
	public function sendMessage()
	{
		if (isset($_POST['data']) && $this->session->userdata('id')) {
			$jsonDecode = json_decode($_POST['data'], true);
			$uniq = $this->session->userdata('id');
			$arr = array(
				'time' => $jsonDecode['datetime'],
				'sender_message_id' => $uniq,
				'receiver_message_id' => $jsonDecode['uniq'],
				'message' => $jsonDecode['message'],
			);
			$this->M_Message->sentMessage($arr);
		}
	}
	public function getMessage()
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		if (isset($_POST['data']) && $this->session->userdata('id')) {
			$data['data'] = $this->M_Message->getmessage($_POST['data']);
			$data['image'] = $_POST['image'];
			$this->load->view('user/message/sampleMessageShow', $data);
		}
	}
	public function updateBio()
	{
		if ($_POST) {
			$this->M_Message->updateBio($_POST);
		}
	}
	public function blockUser()
	{
		if (isset($_POST['time']) && isset($_POST['uniq'])) {
			$arr = array(
				'blocked_from' => $_SESSION['uniqueid'],
				'blocked_to' => $_POST['uniq'],
				'time' => $_POST['time']
			);
			$this->M_Message->blockUser($arr);
			return 1;
		}
	}
	public function getBlockUserData()
	{
		if (isset($_POST['uniq'])) {
			$res = $this->M_Message->getBlockUserData($_POST['uniq'], $_SESSION['uniqueid']);
			print_r(json_encode($res));
		}
	}
	public function unBlockUser()
	{
		if (isset($_POST['uniq'])) {
			$from = $_SESSION['uniqueid'];
			$to = $_POST['uniq'];
			$this->M_Message->unBlockUser($from, $to);
		}
	}
}
