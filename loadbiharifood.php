<?php  include ("include/connection.php") ?>

 
 <div class="row">
            <div class="container-fluid" style="margin-top:0px; background:#CFC;border-top-left-radius:30px;
            border-bottom-right-radius:30px;color:purple">
                <h4>All Bihari Food</h4>
            </div>
            <div class="col-lg-12">
               <?php 
			    
			       $limit=$_REQUEST['limit'];
				  
			       $query="select * from product_info WHERE prod_category='Bihari Food'  LIMIT $limit,8";
				   $result=mysql_query($query);
				   $rows= mysql_num_rows($result);
				   echo "<div class='row' style='margin-bottom:20px'>";
				   
				   while($row=mysql_fetch_array($result))
				   {  
				    
					   echo "<div class='col-lg-3 col-m-3'style='height:230px; width:270px; 
					   ;border-radius:10px;box-shadow:0px 0px 3px grey; margin-left:17px;
					    margin-right:2px; background:#E9E9E9 ; margin-top:20px'>";
						
						  echo "<div class=' col-lg-12'
						   style=' background-image:url(resources/image/tech.jpg); border-bottom-right-radius:15px
						  ;border-top-left-radius:15px; color:black ;margin-top:5px ; height:40px;'>";
					       echo $row['prod_name'];
						  echo "</div>" ;
						  
						  echo "<div class=' col-lg-12' style=' background-image:url(resources/image/tech.jpg)
						  ; border-top-right-radius:15px
						  ;border-bottom-left-radius:15px; color:black; height:180px'>";
						  $img_src='admin/resources/product_image/'.$row['prod_image'];
						  $price=$row['prod_price']."&nbsp;&nbsp;(".$row['prod_deal'].")";
					          echo"<div class='col-lg-12' style='height:160px; text-align:center'>
							  
							   <div class='col-lg-12' style='height:125px; margin-top:5px; text-align:center'>
							  <img src='$img_src' width='150px'
							   height='120px' style='border-radius:7px'>
							   
							   </div>
							   
							   
							   <div class='col-lg-12' style='height:10px'><img src='resources/image/rupee-indian.png' width='15px'
							   height='15px'>&nbsp;&nbsp;<span style='color:blue'>$price</span></div>
							  </div>";
							  $prod_id=$row['prod_id'];
							  echo"<div class=' col-lg-12' style='height:30px'>
							   <center><input type='button' class='btn btn-success' value='Order Now' 
							   onclick='orderNow($prod_id)'/></center>
							  </div>";
						  echo "</div>" ;
						  
					   echo "</div>";
					   
					 
					  
				   }
				   echo "<div class='col-lg-12 ' style=' margin-top:5px;height:20px'>";
				   
			              echo"<div class='row'>";
						    echo"<div class='col-lg-6'>";
							if($limit!=0)
							{
							    $limit-=8;
								echo"<span onClick='loadBihariProduct($limit)' 
								style='color:blue; text-decoration:underline;cursor:pointer'>Prev</span>";  
							  
							}
						   echo"</div>";
						
						 
						   echo"<div class='col-lg-6' style='text-align:right'>";
						     if($limit==$rows && $limit>$rows )
							{
						      
					
							}
							else
							{
								$limit+=8;
								if($limit>$rows)
								{
								
								}
								else
								{
									echo"<span onClick='loadBihariProduct($limit)' 
								style='color:blue; text-decoration:underline;cursor:pointer'>Next</span>";
								}
							}
						   echo"</div>";
						echo"</div>";
					
				   echo "</div>"; 
			    ?>
            </div>
        </div>