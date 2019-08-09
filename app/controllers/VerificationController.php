<?php


/**
 * this class is the default controller of our application,
 * 
*/
class VerificationController extends controller
{






	public function __construct(){

		if (! $this->admin()) {

			$this->middleware('current_user')
				->mustbe_loggedin();
		}

		
	}











	public function complete_profile()
	{

		$this->view('auth/profile');
	}





	public function write_letter_of_happiness()
	{

		$this->view('auth/write-testimony');

	}



	public function phone()
	{

		$this->view('auth/verify_phone');

	}





	public function email()
	{

		if (strlen($this->auth()->email_verification) <= 1) {
			Redirect::to("user/dashboard");
		}

		$this->view('auth/verify_email');
	}




}























?>