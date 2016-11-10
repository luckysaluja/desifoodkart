<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();
class Admin extends CI_Controller {

	//Navigation Bar ........!
	public function index()
	{
		$this->load->model("admin_model");
		$this->load->view('login');
		
		
	}
	public function login($error)
	{
		$this->load->model("admin_model");
		$this->load->view('login',$error);
		
		
	}
	/*Login Authentication*/
	  public function authentication()
	    {
		$loginid=$this->input->post('loginid');
		$password=$this->input->post('password');
		$login_type=$this->input->post('login_type');
		$this->form_validation->set_rules('loginid','Login ID','required');	
		$this->form_validation->set_rules('password','Password','required');
		
		if($this->form_validation->run()==false)
			{
		      $this->index();
			}
			else
			{
				if($login_type=='Admin')
				{
					
					//admin login authentication
					$this->load->model('admin_model');
					$password=md5($password);
					$result=$this->admin_model->admin_login($loginid,$password);
					if(isset($result))
					{
						$_SESSION['admin_login_status']= $result->admin_email;
						$this->load->view('administrator/dashboard');
					}
					else
					{
						$error=array("error_message"=>"Invalid Id / Password");
						$this->login($error);
					}
				}
				else
				{
					//employee login authentication
					$this->load->model('admin_model');
					$password=md5($password);
					$result=$this->admin_model->employee_login($loginid,$password);
					if(isset($result))
					{
						$_SESSION['employee_login_status']= $result->emp_login_id;
						$_SESSION['emp_id']=$result->emp_id;
					
						
	                    $this->load->view('employee/emp_home');

					}
					else
					{
						$error=array("error_message"=>"Invalid Id / Password");
						$this->login($error);
					}
				}
			}
		
		}
		
    /*Login Authentication*/	
	
	
	//admin logout
	
	public function admin_logout()
	{
		unset($_SESSION['admin_login_status']);
		session_destroy();
		$this->load->view('login');
	}
	public function employee_logout()
	{
		unset($_SESSION['employee_login_status']);
		unset($_SESSION['emp_id']);
		session_destroy();
		$this->load->view('login');
	}
	
	public function emp_home()
	{
		if(isset($_SESSION['employee_login_status']))
		{
		$this->load->model("admin_model");
		$this->load->view('employee/emp_home');
		}
		else
		{
			$this->load->view("login");
		}
		
		
		
	}
	public function emp_change_password($emp_id)
	{
		//echo $emp_id;
		
		
	 if(isset($_SESSION['employee_login_status']))
		{
	   	$emp_new_password=$this->input->post('emp_new_password');	
		$emp_re_password=$this->input->post('emp_re_password');
	   $this->form_validation->set_rules('emp_new_password','New Password','required|matches[emp_re_password]');
	   $this->form_validation->set_rules('emp_re_password','Re-password','required');
	   
	   if($this->form_validation->run()==false)
	   {
		 $this->load->model('admin_model');
		 $error=array("error_message"=>"Password Unable To Change Try Again");
		 $this->load->view('employee/emp_home',$error); 
	   }
	   else
	   {   $emp_new_password=md5($emp_new_password);
		   $this->load->model('admin_model');
		   $this->db->Query("update employee_info SET emp_password='$emp_new_password' WHERE emp_id='$emp_id'");
		   $conformation=array("password_change_conformation"=>"Password Successfully Changed !!!!");
		   $this->load->view('employee/emp_home',$conformation); 
	   }
	   
	   }
		else
		{
			$this->load->view("login");
		}
		
		
		
		
	}
	
	public function dashboard()
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->view('administrator/dashboard');
		}
		else
		{
			$this->load->view("login");
		}
	}
	public function administrator()
	{  
	    if(isset($_SESSION['admin_login_status']))
		{
	    $this->load->model('admin_model');
		$data['r']=$this->admin_model->getRecord('admin_info');
		$this->load->view('administrator/administrator',$data);
		}
		else
		{
			$this->load->view("login");
		}
		
		
	}
	public function customer()
	{ 
	    if(isset($_SESSION['admin_login_status']))
		{
	    $this->load->model('admin_model');
		$result['r']=$this->admin_model->getRecord('customer_info');
		$this->load->view('administrator/customer',$result);
		}
		else
		{
			$this->load->view("login");
		}
	}
	public function order()
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$result['r']=$this->admin_model->getOrder('order_info');
		$this->load->view('administrator/order',$result);
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	
	//Navigation Bar ........!
	
	//Side menu bar..........!
	public function add_product()
	{    
	  if(isset($_SESSION['admin_login_status']))
		{
		$this->load->view('administrator/add_product');
		}
		else
		{
			$this->load->view("login");
		}
	}
	public function manage_product()
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');	
		$this->load->view('administrator/manage_product');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function add_employee()
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->view('administrator/add_employee');
		}
		else
		{
			$this->load->view("login");
		}
	}
	public function manage_employee()
	{ 
	    if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$this->load->view('administrator/manage_employee');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function customer_feedback()
	{  
	   if(isset($_SESSION['admin_login_status']))
		{
	    $this->load->model('admin_model');
	    $result['r']= $this->admin_model->getFeedback('customer');
		$this->load->view('administrator/customer_feedback',$result);
		}
		else
		{
			$this->load->view("login");
		}
	}
  
	
	
	public function employee_feedback()
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
	    $result['r']= $this->admin_model->getFeedback('employee');
		$this->load->view('administrator/employee_feedback',$result);
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function sales()
	{
		 if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');	
		$this->load->view('administrator/sales');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function update_payment_status($sales_id)
	{
		
		$this->load->model('admin_model');
		$this->admin_model->paymentStatus($sales_id);
		redirect('admin/sales','refresh');
	}
	public function add_food()
	{
		 if(isset($_SESSION['admin_login_status']))
		{
		
		        $config['upload_path']          = './resources/product_image/';
                $config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);

		$prod_name=$this->input->post('prod_name');
		//echo $prod_name."<br>";		
		$prod_price=$this->input->post('prod_price');
		//echo $prod_price."<br>";
		$prod_category=$this->input->post('prod_category');
		//echo $prod_category."<br>";
		$prod_deal=$this->input->post('prod_deal');
		//echo $prod_deal."<br>";
			$this->form_validation->set_rules('prod_name','Product Name','required');	
			$this->form_validation->set_rules('prod_price','Product Price','required|numeric');
			$this->form_validation->set_rules('prod_deal','Product Deal','required');
				
			if($this->form_validation->run()==false)
			{
		      $this->add_product();
			}
			else
			{	
	            $this->load->library('upload', $config);		

				if($this->upload->do_upload('prod_image'))
				{
			    $prod_image=$this->upload->data('raw_name').$this->upload->data('file_ext');  
				$prod_date=date('Y-m-d');
				$prod_time=date('h:i:s');
				$prod_ip=$_SERVER['REMOTE_ADDR'];
				$table_name='product_info'; 
			    $data = array('prod_name'=>$prod_name,
				              'prod_image'=>$prod_image,
							  'prod_price'=>$prod_price,
							  'prod_category'=>$prod_category,
							  'prod_deal'=>$prod_deal,
							  'prod_date'=>$prod_date,
							  'prod_time'=>$prod_time,
							  'prod_ip'=>$prod_ip
		 
				 );	
				 $this->load->model('admin_model');
				 $add_product_status = $this->admin_model->addRecord($table_name,$data);
				 
				 if($add_product_status==1)
				 {
					 $insert_message=array('add_status'=>'Product Successfully Inserted');
					 
					 $this->load->view('administrator/add_product');
					
				 }
				 else
				 {
					 echo "Try Again";
				 }
				 
				}
				else
				{
                    $error = array('error' => $this->upload->display_errors());

                        $this->load->view('administrator/add_product', $error);
					
				
				}
				
			}
				
				
		
		}
		else
		{
			$this->load->view("login");
		}	

                 
	}
	public function modify_product($prod_id)
	{
		if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$result['r']=$this->admin_model->modifyRecord("product_info",$prod_id,"prod_id");
		$this->load->view('administrator/modify_product',$result);
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function update_product($prod_id)
	{
	    if(isset($_SESSION['admin_login_status']))
		{
		        $config['upload_path']          = './resources/product_image/';
                $config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);

		$prod_name=$this->input->post('prod_name');
		//echo $prod_name."<br>";		
		$prod_price=$this->input->post('prod_price');
		//echo $prod_price."<br>";
		$prod_category=$this->input->post('prod_category');
		//echo $prod_category."<br>";
		$prod_deal=$this->input->post('prod_deal');
		//echo $prod_deal."<br>";
			$this->form_validation->set_rules('prod_name','Product Name','required');	
			$this->form_validation->set_rules('prod_price','Product Price','required|numeric');
			$this->form_validation->set_rules('prod_deal','Product Deal','required');
				
			if($this->form_validation->run()==false)
			{
		      $this->modify_product($prod_id);
			}
			else
			{	
	            $this->load->library('upload', $config);		

				if($this->upload->do_upload('prod_image'))
				{
			    $prod_image=$this->upload->data('raw_name').$this->upload->data('file_ext');  
				$prod_date=date('Y-m-d');
				$prod_time=date('h:i:s');
				$prod_ip=$_SERVER['REMOTE_ADDR'];
				$table_name='product_info'; 
			    $data = array('prod_name'=>$prod_name,
				              'prod_image'=>$prod_image,
							  'prod_price'=>$prod_price,
							  'prod_category'=>$prod_category,
							  'prod_deal'=>$prod_deal,
							  'prod_date'=>$prod_date,
							  'prod_time'=>$prod_time,
							  'prod_ip'=>$prod_ip
		 
				 );	
				 $this->load->model('admin_model');
				 $this->db->where('prod_id',$prod_id);
				 
				 $update_product_status=$this->db->update('product_info',$data);
				 if($update_product_status==1)
				 {
					 $insert_message=array('update_status'=>'Product Successfully Updated...!');
					 $this->load->view('administrator/manage_product',$insert_message);
				 }
				 else
				 {
					 $insert_message=array('update_status'=>'Try Again ?');
					 $this->load->view('administrator/manage_product',$insert_message);
				 }
				 
				}
				else
				{
                         
                          $this->load->model('admin_model');
		                  $result['r']=$this->admin_model->modifyRecord("product_info",$prod_id,"prod_id");
						  
                        $this->load->view('administrator/modify_product',$result);
					
				
				}
				
			}	
			}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function delete_product($prod_id)
	{
		 if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$status=$this->admin_model->deleteRecord("product_info",$prod_id,"prod_id");
		$this->load->view('administrator/manage_product');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function add_new_employee()
	{
		 if(isset($_SESSION['admin_login_status']))
		{
				$config['upload_path']          = './resources/employee_image/';
                $config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);

		$emp_name=$this->input->post('emp_name');	
		$emp_address=$this->input->post('emp_address');
		$emp_designation=$this->input->post('emp_designation');
	    $emp_term_condition=$this->input->post('emp_term_condition');		
		$emp_salary=$this->input->post('emp_salary');
		$emp_contact=$this->input->post('emp_contact');
		$emp_qualification=$this->input->post('emp_qualification');
		$emp_login_id=$this->input->post('emp_login_id');
		$emp_password=$this->input->post('emp_password');
		
		
		
		


	
			$this->form_validation->set_rules('emp_name','Employee Name','required');
			$this->form_validation->set_rules('emp_address','Employee Address','required');	
			$this->form_validation->set_rules('emp_designation','Employee Designation','required');
			$this->form_validation->set_rules(
			                  'emp_term_condition','Employee Term & condition','required'
							  );
			$this->form_validation->set_rules('emp_salary','Employee Salary','required|numeric');
			$this->form_validation->set_rules('emp_contact','Employee Contact','required|numeric');
			$this->form_validation->set_rules(
			                  'emp_qualification','Employee Qualification','required'
							  );
			$this->form_validation->set_rules('emp_login_id','Employee Login ID','required');				  
		    $this->form_validation->set_rules('emp_password','Employee Password','required');
		    $emp_password=md5($emp_password);
            $emp_term_condition=strtoupper($emp_term_condition);
							  




				
		if($this->form_validation->run()==false)
			{
		      $this->add_employee();
			}
			else
			{	
	            $this->load->library('upload', $config);		

				if($this->upload->do_upload('emp_image'))
				{
			    $emp_image=$this->upload->data('raw_name').$this->upload->data('file_ext');  
				$emp_date=date('Y-m-d');
				$emp_time=date('h:i:s');
				$emp_ip=$_SERVER['REMOTE_ADDR'];
				$table_name='employee_info'; 
			    $data = array('emp_name'=>$emp_name,
				              'emp_address'=>$emp_address,
							  'emp_designation'=>$emp_designation,
							  'emp_term_condition'=>$emp_term_condition,
							  'emp_salary'=>$emp_salary,
							  'emp_contact'=>$emp_contact,
							  'emp_qualification'=>$emp_qualification,
							  'emp_login_id'=>$emp_login_id,
							  'emp_password'=>$emp_password,
				              'emp_image'=>$emp_image,
							  'emp_date'=>$emp_date,
							  'emp_time'=>$emp_time,
							  'emp_ip'=>$emp_ip
		 
				 );	
				 $this->load->model('admin_model');
				 $add_employee_status = $this->admin_model->addRecord($table_name,$data);
				 
				 if($add_employee_status==1)
				 {
					 $insert_message=array('add_status'=>'Employee Successfully Inserted');
					 $this->load->view('administrator/add_employee',$insert_message);
				 }
				 else
				 {
					 echo "Try Again";
				 }
				 
				}
				else
				{
                    $error = array('error' => $this->upload->display_errors());

                        $this->load->view('administrator/add_employee', $error);
					
				
				}
				
			}
          }
		else
		{
			$this->load->view("login");
		}
		}
		
		public function modify_employee($emp_id)
	     {
       if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$result['r']=$this->admin_model->modifyRecord("employee_info",$emp_id,"emp_id");
		$this->load->view('administrator/modify_employee',$result);
		}
		else
		{
			$this->load->view("login");
		}
	     }
		 
		public function update_employee($emp_id)
		 {
			  if(isset($_SESSION['admin_login_status']))
		      {
			 	$config['upload_path']          = './resources/employee_image/';
                $config['allowed_types']        = 'gif|jpg|png';
				$this->load->library('upload', $config);

		$emp_name=$this->input->post('emp_name');	
		$emp_address=$this->input->post('emp_address');
		$emp_designation=$this->input->post('emp_designation');
	    $emp_term_condition=$this->input->post('emp_term_condition');		
		$emp_salary=$this->input->post('emp_salary');
		$emp_contact=$this->input->post('emp_contact');
		$emp_qualification=$this->input->post('emp_qualification');
		$emp_login_id=$this->input->post('emp_login_id');
		
		
		
		


	
			$this->form_validation->set_rules('emp_name','Employee Name','required');
			$this->form_validation->set_rules('emp_address','Employee Address','required');	
			$this->form_validation->set_rules('emp_designation','Employee Designation','required');
			$this->form_validation->set_rules(
			                  'emp_term_condition','Employee Term & condition','required'
							  );
			$this->form_validation->set_rules('emp_salary','Employee Salary','required|numeric');
			$this->form_validation->set_rules('emp_contact','Employee Contact','required|numeric');
			$this->form_validation->set_rules(
			                  'emp_qualification','Employee Qualification','required'
							  );
			$this->form_validation->set_rules('emp_login_id','Employee Login ID','required');				  
            $emp_term_condition=strtoupper($emp_term_condition);
							  




				
		if($this->form_validation->run()==false)
			{
		      $this->modify_employee($emp_id);
			}
			else
			{	
	            
				$emp_date=date('Y-m-d');
				$emp_time=date('h:i:s');
				$emp_ip=$_SERVER['REMOTE_ADDR'];
				$table_name='employee_info'; 
			    $data = array('emp_name'=>$emp_name,
				              'emp_address'=>$emp_address,
							  'emp_designation'=>$emp_designation,
							  'emp_term_condition'=>$emp_term_condition,
							  'emp_salary'=>$emp_salary,
							  'emp_contact'=>$emp_contact,
							  'emp_qualification'=>$emp_qualification,
							  'emp_login_id'=>$emp_login_id,
							  'emp_date'=>$emp_date,
							  'emp_time'=>$emp_time,
							  'emp_ip'=>$emp_ip
		 
				 );	
				 $this->load->model('admin_model');
				 $this->db->where('emp_id',$emp_id);	 
				 $update_employee_status=$this->db->update('employee_info',$data);
				 
				 if($update_employee_status==1)
				 {
					 $insert_message=array('add_status'=>'Employee Successfully Updated');
					 redirect('administrator/admin/manage_employee','refresh');
				 }
				 else
				 {
					 echo "Try Again";
				 }
				 
				
				
			}
			}
		  else
		  {
			$this->load->view("login");
		  }

		 }
		
	public function delete_employee($emp_id)
	{ 
	   if(isset($_SESSION['admin_login_status']))
		{
		$this->load->model('admin_model');
		$status=$this->admin_model->deleteRecord("employee_info",$emp_id,"emp_id");
		$this->load->view('administrator/manage_employee');
		}
		else
		{
			$this->load->view("login");
		}
	}




   public function changePassword($id)
   {  
       if(isset($_SESSION['admin_login_status']))
		{
	   	$admin_new_password=$this->input->post('admin_new_password');	
		$admin_re_password=$this->input->post('admin_re_password');
	   $this->form_validation->set_rules('admin_new_password','New Password','required|matches[admin_re_password]');
	   $this->form_validation->set_rules('admin_re_password','Re-password','required');
	   
	   if($this->form_validation->run()==false)
	   {
		 $this->load->model('admin_model');
		$data['r']=$this->admin_model->getRecord('admin_info');
		$this->load->view('administrator/administrator',$data); 
	   }
	   else
	   {   $admin_new_password=md5($admin_new_password);
		   $this->load->model('admin_model');
		   $this->db->Query("update admin_info SET admin_password='$admin_new_password' WHERE admin_id='$id'");
		   $data['r']=$this->admin_model->getRecord('admin_info');
		   redirect('administrator/admin/administrator',$data); 
	   }
	   
	   }
		else
		{
			$this->load->view("login");
		}
   }
	
	
	public function pick_order($id)
	{
		if(isset($_SESSION['employee_login_status']))
		{
		$this->load->model('admin_model');
		$emp_id=$_SESSION['emp_id'];
		
		$this->admin_model->pick($id,$emp_id);
		redirect('admin/emp_home','refresh');
		}
		else
		{
			$this->load->view("login");
		}
	}
	public function dispatch_order($order_id)
	{
		if(isset($_SESSION['employee_login_status']))
		{
		$this->load->model('admin_model');
		$this->admin_model->dicpatchOrder($order_id);
		redirect('admin/emp_home','refresh');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function emp_feedback()
	{
		if(isset($_SESSION['employee_login_status']))
		{
		$this->load->view('employee/emp_feedback');
		}
		else
		{
			$this->load->view("login");
		}
	}
	
	public function submit_feedback()
	{
		if(isset($_SESSION['employee_login_status']))
		{
			$this->load->model('admin_model');
			$description=$this->input->post('description');
		    $suggestion=$this->input->post('suggestion');
			
            $emp_login_id= $_SESSION['employee_login_status'];
			$this->db->select('emp_id');
			$this->db->from('employee_info');
			$this->db->where('emp_login_id',$emp_login_id);
			$result=$this->db->get();
			$result=$result->row();
			
			$emp_id=$result->emp_id;
			$data=array(
			            "cust_id"=>0,
						"emp_id"=>$emp_id,
						"type"=>'employee',
						"description"=>$description,
						"suggestion"=>$suggestion,
						"feedback_date"=>date('Y-m-d'),
						"feedback_time"=>date('h:i:s'),
						"feedback_ip"=>$_SERVER['REMOTE_ADDR'] );
			
         $this->db->insert('feedback',$data);
		 redirect('admin/emp_home','refresh');

		}
		else
		{
			$this->load->view("login");
		}
		
	}
	
	
}
