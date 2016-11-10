<?php
class Admin_model extends CI_Model

{
	function admin_login($loginid,$password)
	{
	 $result=$this->db->Query("select admin_email,admin_password from admin_info WHERE admin_email='$loginid' AND  
	 admin_password='$password'");	
	 return $result->row();
	}
	function employee_login($loginid,$password)
	{
	 $result=$this->db->Query("select emp_id,emp_login_id,emp_password from employee_info WHERE emp_login_id='$loginid' AND 
	 emp_password='$password'");	
	 return $result->row();
	}
	function addRecord($table_name,$data)
	{
		$result= $this->db->insert($table_name,$data);
		return $result;
		
	}
	function getRecord($tableName)
	 {
		 $query=$this->db->get($tableName);
		 return $query->result();
	 }
	 function deleteRecord($tableName,$id,$field_name)
	 {
		$this->db->where($field_name,$id);
		$query=$this->db->delete($tableName);
		
	 }
	 function modifyRecord($tableName,$id,$field_name)
	 {
		$this->db->where($field_name,$id);
		$query=$this->db->get($tableName);
		return $query->row();
	 }
	 
	function getFeedback($type)
	{
		$query=$this->db->Query("select * from feedback where type='$type'");
		return $query->result();	
	}
	
	
	function getOrder($tableName)
	{
		$this->db->from($tableName);
        $this->db->order_by("order_status", "desc");
		$this->db->order_by("order_date", "desc");
        $query = $this->db->get(); 
        return $query->result();
		
	}
	
	function getTodayOrder($date)
    {
		
		$query=$this->db->Query("select id,order_id,delivery_time,order_time,order_date,order_status,total_item,p.prod_name
		 from order_info o,product_info p WHERE order_date ='$date' AND order_cancellation='NO' AND emp_id=0 AND order_status='INCOMPLETE' AND
		 p.prod_id=o.prod_id 
		");
		return $query->result();
		
	}
	
	function getCompletedOrder($date)
    {
	
		$query=$this->db->Query("select id, order_id,delivery_time,order_time,order_date,order_status,total_item,E.emp_name
		 from order_info O, employee_info E  WHERE order_date ='$date' AND E.emp_id=O.emp_id AND order_status='COMPLETE'");
		return $query->result();
		
	}
	
	function getCencelledOrder($date)
	{
		$query=$this->db->Query("select * from order_info WHERE order_cancellation='YES' AND order_date='$date'");
		return $query->result();
	}
	function pick($order_id , $emp_id)
	{
		
		$query=$this->db->Query("UPDATE  order_info SET emp_id='$emp_id' WHERE id='$order_id'");
		
	}
	
	function yourPickedOrder($date,$emp_id)
	{  
	    
		$query=$this->db->Query("select id,order_id,delivery_time,order_time,order_date,order_status,total_item,p.prod_name
		 from order_info o,product_info p WHERE order_date ='$date' AND order_cancellation='NO' AND emp_id='$emp_id'  AND
		 p.prod_id=o.prod_id 
		");
		return $query->result();
	}
	function dicpatchOrder($order_id)
	{
				$query=$this->db->Query("UPDATE  order_info SET order_status='COMPLETE' WHERE id='$order_id'");
				
				$result=$this->db->Query("select prod_id,cust_id,id,emp_id,pay_status from order_info WHERE id='$order_id'");
				$data=$result->row();
				if(isset($data))
				{
				$this->db->insert('sales_info',$data);
				}


				

	}
	function getEmployee($emp_login_id)
	{
		$this->db->where('emp_login_id',$emp_login_id);
		$result=$this->db->get('employee_info');
		return $result->row();
	}
	function todaySales($date)
	{
		$query=$this->db->Query("select P.prod_name,
		                                O.id,
		                                O.order_time,
										O.order_date,
										O.total_item,
										O.order_status,
										O.price,
										E.emp_name,
										S.pay_status,
										S.sales_id
										
										 FROM
										 
										     sales_info S,
											 product_info P,
											 order_info O,
											 employee_info E
											 
										 
										 WHERE
										   S.pay_status='NO'
										 AND
										   S.prod_id=P.prod_id
										 AND
										   S.id=O.id 
										 AND
										   S.emp_id=E.emp_id
										 AND
										   O.order_date='$date'   
										   
										 
		                         ");
								 
				return $query->result();				 
	}
	function allSales()
	{
		$query=$this->db->Query("select P.prod_name,
		                                O.id,
		                                O.order_time,
										O.order_date,
										O.total_item,
										O.order_status,
										O.price,
										E.emp_name,
										S.pay_status,
										S.sales_id
										
										 FROM
										 
										     sales_info S,
											 product_info P,
											 order_info O,
											 employee_info E
											
											
										 
										 WHERE
										   S.pay_status='YES'
										 AND
										   S.prod_id=P.prod_id
										 AND
										   S.id=O.id 
										 AND
										   S.emp_id=E.emp_id
										  
										   ORDER BY O.order_date DESC 
										   
										 
		                         ");
								 
				return $query->result();				 
	}
	function paymentStatus($sales_id)
	{
	        $this->db->Query("update sales_info SET pay_status='YES' WHERE sales_id='$sales_id'");
	
		    $result=$this->db->Query("select id from sales_info WHERE sales_id ='$sales_id'");
		    $order_id=$result->row();
			$id=$order_id->id;
			$this->db->Query("update order_info SET pay_status='YES' WHERE id='$id'");
			$query=$this->db->Query("select pay_mode,price FROM order_info WHERE id='$id'");
			$result1=$query->row();
		    $pay_ip=$_SERVER['REMOTE_ADDR'];
			$pay_date=date('Y-m-d');
			$pay_time=date('h:i:s');
			$pay_data=array(
			                 "pay_mode"=>$result1->pay_mode,
							 "pay_ip"=>$pay_ip,
							 "pay_date"=>$pay_date,
							 "pay_amount"=>$result1->price,
							 "id"=>$id,
							 "pay_time"=>$pay_time
			
			);
			$this->db->insert('payment_info',$pay_data);
 
		

		
	}
	
	function todayIncome($date)
	{
		$result=$this->db->Query("select pay_amount from payment_info WHERE pay_date='$date'");
		return $result->result();
	}
	function grossIncome()
	{
		$result=$this->db->Query("select pay_amount from payment_info ");
		return $result->result();
	}
}


?>