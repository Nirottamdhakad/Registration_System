<?php

function input_recieved($args)
{
	if(is_array($args))
	{
		foreach($args AS $input)
		{
			if ($input=="" OR $input==null) 
			{
				return "missing input";
			}
		}
	}
	return true;

}

function validate_sanitize_inputs($arg)
{
	$fullname=filter_var($arg['fullname'],FILTER_SANITIZE_STRING);
	$dob=filter_var($arg['dob'],FILTER_SANITIZE_STRING);
	$city=filter_var($arg['city'],FILTER_SANITIZE_STRING);
	$address=filter_var($arg['address'],FILTER_SANITIZE_STRING);
	$country=filter_var($arg['country'],FILTER_SANITIZE_STRING);
	$email   =filter_var($arg['email'],FILTER_SANITIZE_EMAIL);
	$password=password_hash($arg['password'],PASSWORD_DEFAULT);
	$_email  =filter_var($arg['email'],FILTER_VALIDATE_EMAIL);


	return array('fullname' =>$fullname ,'email'=>$email, 'password'=>$password);
}





?>