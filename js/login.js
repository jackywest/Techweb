/*
Techweb Project 2010
Epitech Copyright reserved
*/

/*login page */
function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
	}

function validate_form(){
	if ($('#pass').val() != $('#pass2').val())
		return false;
	else if (!isValidEmailAddress($('#check_mail').val()))
		return false;
	else if ($('#login').val() == '')
		return false;
	else
		return true;

};

function check_password(){
	
	$('#pass').keyup(function(){
	if ($('#pass').val() != $('#pass2').val())
	{
		$('#pass_valid').removeClass('login_valid').addClass('login_error').html('Passwords do not match !');
	}
	else
	{
		$('#pass_valid').removeClass('login_error').addClass('login_valid').html('Valid !');
	}
	if ($('#pass').val() == '' && $('#pass2').val() == '')
		 $('#pass_valid').html(''); 
	});
		
	$('#pass2').keyup(function(){
	if ($('#pass').val() != $('#pass2').val())
	{
		$('#pass_valid').removeClass('login_valid').addClass('login_error').html('Passwords do not match !');
	} 
	else
	{
		$('#pass_valid').removeClass('login_error').addClass('login_valid').html('Valid password!');
	}
	if ($('#pass').val() == '' && $('#pass2').val() == '')
		 $('#pass_valid').html('');
	});
};

function check_mail(){
	$('#check_mail').keyup(function(){
	if (isValidEmailAddress($('#check_mail').val()))
	{
		$('#error_mail').removeClass('login_error').addClass('login_valid').html('Valid email!');
	}
	else
	{
		$('#error_mail').removeClass('login_valid').addClass('login_error').html('Email is not valid!');
	}
	if ($('#check_mail').val() == '')
		$('#error_mail').html('');
	
	});
};

function valid_login(){
  
  $('#login').keyup(function(){
      // alert('validating login');
      var login = $('#login').val();
      var data = 'register.php?login='+login;
      $.get(data ,function(result){
	  // alert(result);
	  if (result == 'available')
	    {
	      $('#login_valid').removeClass('login_error').addClass('login_valid').html('Login available !');
	    }
	  else
	    {
	      $('#login_valid').removeClass('login_valid').addClass('login_error').html('Login not available !');
	    }
	  // alert('checking for empty login');
	  if ($('#login').val() == '')
	    $('#login_valid').html('');
	});
    });

};

function register_data(){
	var name = $('#name').val();
	var firstname = $('#firstname').val();
	var login = $('#login').val();
	var password = $('#pass').val();
	var email = $('#check_mail').val();
	
	var data = 'register.php?name='+name+'&firstname='+firstname+'&login='+login+'&password='+password+'&email='+email;
	$.get(data, function(result){});
};

$(document).ready(function(){

    $('#dialog_box').dialog({autoOpen: false, modal: true, draggable: false, resizable: false, buttons: {"Ok": function () { $(this).dialog("close") ;}}});
    $("#reg_detail").hide();
    $(".btn-slide").click(function(){
	$("#reg_detail").slideToggle("slow");
	$(this).toggleClass("active");
      });
    /* Check password */
    check_password();
    /* check mail */
    check_mail();
    /* validating login */
    valid_login();
    /* ajax request */
    $('#register').click(function(){
	if (validate_form())
	  {
	    if ($('#login_valid').is('.login_valid'))
	      {
		// alert('registering data');
		register_data();
		$('#dialog_box').dialog('option', 'buttons', {"Ok": function() { 
		      $(this).dialog("close");
		      location.reload();
		    }
		  });
		$('#dialog_box').html('<div style="margin-top: 30px;" class="login_valid">Rigistration suscessful. You can now connect with your login and password !</div>').dialog('open');
		// location.reload();
	      }
	    else
	      {
		// alert('not registering data');
		
		$('#dialog_box').html('<div style="margin-top: 30px;" class="login_error">Exisiting login please try another one !</div>').dialog('open');
	      }
	  }
	else
	  $('#dialog_box').html('<div style="margin-top: 30px;" class="login_error">Missing or invalid parameters !</div>').dialog('open');
      });
  });



