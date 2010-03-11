/** login javascript lib */

function ajaxCallBack(page, fn)
{ 
  var xhr; 
  try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
  catch (e) 
    {
      try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
      catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();     }
          catch (e3) {  xhr = false;   }
        }
    }
  
  xhr.onreadystatechange  = function()
    { 
      if(xhr.readyState  == 4)
	{
	  if(xhr.status  == 200) 
	    fn(xhr.responseText); 
	}
    }; 

  xhr.open("GET", page,  true); 
  xhr.send(null); 
} 
