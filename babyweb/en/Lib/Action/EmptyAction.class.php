<?php
class EmptyAction extends Action{
	function _empty(){
		$this->display('Public:404');
	}
	// 404
	function index() {
		$this->display('Public:404');
	}
}