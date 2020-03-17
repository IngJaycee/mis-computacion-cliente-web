<?php
class Admin{
	var $CI;
	function __construct(){
		$this->CI =& get_instance(); 		
	}
	function success($msg='Ok'){
		return $this->message(200, $msg);
	}

	function redirect($url){
		return $this->message(300, 'Redirecting', $url);
	}

	function error($msg='Invalid Request'){
		return $this->message(400, $msg);
	}
	
	function message($response_code=200, $message='', $url=null){
		$tipos=array(
			'200' => 'showNoticeToast',
			'300' => 'showNoticeToast',
			'400' => 'showErrorToast',
		);
		return array(
			'type'=>$tipos[$response_code],
			'code'=>$response_code,
			 'msg'=>$message,
			 'url'=>$url
		);	

	}
	function pagination( $uri, $total, $per_page, $uri_segment=NULL ){
		$this->CI->load->library('pagination');
		$config['base_url']         = base_url( $uri );
		$config['total_rows']       = $total;
		$config['per_page']         = $per_page;
		$config['num_links']        = 5;
		$config['use_page_numbers'] = TRUE;
		$config['first_link'] = 'Inicio';
		$config['last_link'] = 'Final';
		if ( !is_null($uri_segment) ) {
			$config['uri_segment'] = $uri_segment ;
		}
		$this->CI->pagination->initialize($config);
		$links = $this->CI->pagination->create_links();
		if (strlen($links)>0){
			$links = '<section id="pagination">'.$links.'</section>';
		}
		return $links;
	}		
}