<?php if (!defined('BASEPATH')) exit('No direct access allowed.');
/**
 * 前台父控制器
 *
 * 前台的所有控制器都需要继承这个类，
 *
 * @author		skyline
 */
class QT_Controller extends CI_Controller {	
    
	public function __construct() {
		
		parent::__construct();		
	   session_start();
		
    }


    

}

// ------------------------------------------------------------------------

/**
 *  后台父控制器
 *
 * 后台的所有控制器都需要继承这个类，主要包含验证
 *
 */
class HT_Controller extends CI_Controller {


    function __construct(){ 
	
		parent::__construct();		
		session_start();
			
		/** 检查登陆 */		
		if( @$_SESSION['limits']!=1){		
		   redirect('admin/login/index');
		}
		
    }
}

/* End of file MY_Controller.php */
/* Location: ./application/libraries/MY_Controller.php */