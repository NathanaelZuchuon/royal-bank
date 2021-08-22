<?php

class Controller {
	
	protected function render ($view) {
		include __DIR__ . '/../views/' . $view . '.php';
	}
	
}
