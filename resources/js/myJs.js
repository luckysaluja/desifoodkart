
 
	  
function loadAllProduct(limit)
{
	var limit=parseInt(limit);
	//alert(id);
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadallproduct.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadallproduct").innerHTML=obj.responseText;
			
			
		}
	}
	

  
}	  

function loadBihariProduct(limit)
{
		var limit=parseInt(limit);
	
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadbiharifood.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadbihariproduct").innerHTML=obj.responseText;
			
			
		}
	}

}


function loadPanjabiProduct(limit)
{
		var limit=parseInt(limit);
	
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadpanjabifood.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadpanjabiproduct").innerHTML=obj.responseText;
			
			
		}
	}

}
function loadRajasthaniProduct(limit)
{
		var limit=parseInt(limit);
	
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadrajasthanifood.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadrajasthaniproduct").innerHTML=obj.responseText;
			
			
		}
	}

}
function loadBengaliProduct(limit)
{
		var limit=parseInt(limit);
	
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadbengalifood.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadbengaliproduct").innerHTML=obj.responseText;
			
			
		}
	}

}
function loadSouthindianProduct(limit)
{
		var limit=parseInt(limit);
	
	if(navigator.appName=="Netscape")
	{
		obj=new XMLHttpRequest();
	}
	else
	{
		obj=new activeXObject();
	}
	obj.open("GET","loadsouthindianfood.php?limit="+limit,true);
	obj.send();
	obj.onreadystatechange=function()
	{
		if(obj.readyState==4)
		{
			document.getElementById("loadsouthindianproduct").innerHTML=obj.responseText;
			
			
		}
	}

}

function orderNow(prod_id)
	  {
		  window.location='order_now.php?prod_id='+prod_id;
	  }

function calculatePrice(price,totalitem)
{
	var price = parseInt(price);
	var totalitem= parseInt(totalitem);
	if(totalitem<1)
	{
		document.getElementById('totalitem').readonly=true;
	    document.getElementById('totalitem').value=1;
	    document.getElementById('price').value=price;


	}
	else
	{
	document.getElementById('price').value=price * totalitem;
	}
}

