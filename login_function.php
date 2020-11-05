<?php

function input_recieved($args)
//$args is the array recieved
{
	if(is_array($args))
	{
		foreach($args AS $input)
		{
			//Iterating over each array element
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
   
	$email   =filter_var($arg['email'],FILTER_SANITIZE_EMAIL);
	$password=$arg['password'];
	$_email  =filter_var($arg['email'],FILTER_VALIDATE_EMAIL);

	return array('email'=>$email, 'password'=>$password);

}





?>