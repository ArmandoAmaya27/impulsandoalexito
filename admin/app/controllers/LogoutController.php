<?php  
class LogoutController extends Controllers{


	public function __construct(){
		parent::__construct(true);
		
	}

	public function index(){
		Util::Requir('Str');
		unset($_SESSION[SESSION_ID]);
		session_write_close();
		session_unset();
		Str::redir();
	}

	
}