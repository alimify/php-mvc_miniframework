<?php 

class Home extends Controller{
	
	protected function Index(){
		///Add This To method where you want integrate login..
   Module::loginCheck();

	}

}