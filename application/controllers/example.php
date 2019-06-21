<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* This is Example Controller
*/
class Example extends CI_Controller
{
    function __construct()
	{
        
		parent::__construct();
		$this->template->write_view('sidenavs', 'template/default_sidenavs', true);
        $this->template->write_view('navs', 'template/default_topnavs.php', true);
        $this->load->helper(array('html','url'));
    }

    function index() {
		$this->template->write('title', 'My Simple Template', TRUE);
		$this->template->write('header', 'Page Example');
		$this->template->write_view('content', 'test/mypage', '', true);
		$this->template->render();
    }
    
	function simple_template() {
		$this->template->set_template('default');
		$this->template->write('header', 'This is Header');
		$this->template->write('title', 'My Simple Template', TRUE);
		$this->template->write_view('content', 'test/mypage', '', true);
		$this->template->render();
	}    
}