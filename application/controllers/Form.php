<?php

class Form extends CI_Controller {

	public function index()
	{
		/*
		 Load the reCAPTCHA library.
		 You can pass the keys here by passing an array to the loader.
		 Check the "Setting the keys" section for more details
		*/
		$this->load->library('recaptcha');

		/*
		 Create the reCAPTCHA box.
		 You can pass an array of attributes to this method.
		 Check the "Creating the reCAPTCHA box" section for more details
		*/
		$recaptcha = $this->recaptcha->create_box();

		// Check if the form is submitted
		if($this->input->post('action') === 'submit')
		{
			/*
			 Check if the reCAPTCHA was solved
			 You can pass arguments to the `is_valid` method,
			 but it should work fine without any.
			 Check the "Validating the reCAPTCHA" section for more details
			*/
			$is_valid = $this->recaptcha->is_valid();

			if($is_valid['success'])
			{
				echo "reCAPTCHA solved";
			}
			else
			{
				echo "reCAPTCHA not solved/an error occured";
			}
		}

		$this->load->view('form', ['recaptcha' => $recaptcha]);
	}
}