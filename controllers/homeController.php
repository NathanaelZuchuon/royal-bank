<?php

include_once __DIR__ . '/../models/homeModel.php';

$home = new homeModel();

class homeController extends Controller {
	
	public function def () {
		include __DIR__ . '/../views/home.php';
	}
	
	/*
	private function passHacker ($password, $action='encrypt') : string {
		// Set session's infos
		foreach ($infos[0] as $key => $value) {
			if ( gettype($key) == "string" ) {
				$_SESSION[$key] = $value;
			}
		}
		// -------------------
		return encrypt_decrypt($password, $action);
	}
	*/
	
	private function checkAccess () : bool {
		if ( count($_SESSION) == 0 ) {
			header("Location: 127.0.0.1/bhent_prods/royal_bank/home");
			return false;
		}
		return true;
	}
	
	public function func () {
		if ( $this->checkAccess() ) {
			$ok = true;
			return die( json_encode( array('ok' => $ok) ) );
		}
	}
	
	public function logout () {
		if ( $this->checkAccess() ) {
			foreach ( $_SESSION as $key => $value ) {
				unset($_SESSION[$key]);
			}
		}
	}
}
