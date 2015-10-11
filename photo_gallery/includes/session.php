<?php 
// A class to help work with Sessions
// In our case, primarily to manage logging users in and out

// Keep in mind when working with sessions that it is generally
// inadvisable to store DB-related objects in sessions

class Session {

	private $logged_in=false;
	public  $user_id;
	public  $message;

	function __construct() {
		session_start();
		$this->check_message(); // check previously either set a message or not.
		$this->check_login(); // This method is useful to check the person is already logged in or not.
		if($this->logged_in){
			// actions to take right away if user is logged in
		} else {
			// actions to take right away if user is not logged in
		}
	}

	public function is_logged_in() { // is logged in access this class class will set the attribute value.
		return $this->logged_in; // public way to check that whether person is logged in or not.
	}							 // is logged_in() access the private variable logged_in but we don't directly access the logged_in attribute.
								// we can read the value but we don't write the value to the variable only the class session write the variable.
	public function login($user){ // call the session mark the user logged in now.
		// database should find user based on username/password
		if($user){
			$this->user_id = $_SESSION['user_id'] = $user->id;
			$this->logged_in = true;
		}
	}

	public function logout() {
		unset($_SESSION['user_id']);
		unset($this->user_id);
		$this->logged_in = false;
	}

	public function message($msg="") { // this function work as both set or get
		if(!empty($msg)) {
			// then this is "set message"
			// make sure you understand why $this->message=$msg wouldn't work
			$_SESSION['message'] = $msg; // we actually stored message in the session not as an attribute value otherwise will not get this as in real session only find as attribute value
		} else {
			// then this is "get message"
			return $this->message;
		}
	}

	private function check_login() {
		if(isset($_SESSION['user_id'])) {
			$this->user_id 		= $_SESSION['user_id'];
			$this->logged_in 	= true;
		} else {
			unset($this->user_id);
			$this->logged_in = false;
		}
	}

	private function check_message() {
		// Is there a message stored in the session?
		if(isset($_SESSION['message'])) {
			// Add it as an attribute and erase the stored version
			$this->message = $_SESSION['message'];
			unset($_SESSION['message']);
		} else {
			$this->message = "";
		}
	}

}

$session = new Session();
$message = $session->message(); // for simplicity we never again again call this method in every page we simply this variable

?>