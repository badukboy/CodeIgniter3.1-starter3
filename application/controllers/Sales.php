<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->data['pagebody'] = 'stock';
		$this->render(); 
	}
        
        public function justone($code){
            $this->data['pagebody'] = 'justone_stock';		
		$source = $this->stock->get($code);
		$this->data = array_merge($this->data, $source);
		$this->render();
        }
        

}