<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Introcept extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->helper('form'); 
		// $this->load->library('session');
	  	// $this->load->library('form_validation');
	  	$this->load->library('session');
	  	$this->introceptview();
	}

	public function viewlist()
	{
	  	$this->load->view('introceptfetch');	
	}

	public function introceptview()
	{
		 /* Load form helper */ 
         $this->load->helper(array('form'));
			
         /* Load form validation library */ 
         $this->load->library('form_validation');
			
         /* Set validation rule for name field in the form */ 
         $this->form_validation->set_rules('name', 'Full Name', 'required|myAlpha|min_length[6]|max_length[30]');
         $this->form_validation->set_rules('gender', 'Gender', 'required');
         $this->form_validation->set_rules('phone', 'Phone Number', 'required|integer|min_length[10]|max_length[10]');
         $this->form_validation->set_rules('email', 'Email-Id', 'required|valid_email');
         $this->form_validation->set_rules('address', 'Address', 'required|min_length[3]|max_length[20]');
         $this->form_validation->set_rules('nationality', 'Nationality', 'required');
         $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
         $this->form_validation->set_rules('education', 'Education', 'required|min_length[5]|max_length[200]');

         {
         	if ($this->form_validation->run() == TRUE)
			{
		
				if (isset($_POST['applicant_submit'])){

				$name=$_POST["name"];
				$gender=$_POST["gender"];
				$phone=$_POST["phone"];
				$email=$_POST["email"];
				$address=$_POST["address"];
				$nationality=$_POST["nationality"];
				$dob=$_POST["dob"];
				$education=$_POST["education"];

				echo "<p style='color:green; margin-left:40%;'> <br> Successfully Inserted values by $name from $address. </p>";

				if(!empty($name) || !empty($gender) || !empty($phone) || !empty($email) || !empty($address) || !empty($nationality) || !empty($dob) || !empty($education)){

				$cvsData = $name . "," . $gender . "," . $phone  . "," . $email  . "," . $address  . "," . $nationality  . "," . $dob  . "," . $education  . "\n"; // Add newline

				$fp = fopen("formdata.csv","a"); // $fp is now the file pointer to file $filename

					    if($fp)
					    {
					        fwrite($fp,$cvsData); // Write information to the file
					        fclose($fp); // Close the file
					    }
					}

				}
			}


        }
        $this->load->view('introceptview');	
	}
	  	


}
