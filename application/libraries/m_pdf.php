<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_pdf {
	function m_pdf()
	{
		$CI = & get_instance();
		log_message('Debug', 'mPDF class has been loaded');
	}
	// function load($orientation=NULL)
	// {
	// 	include_once APPPATH.'/third_party/mpdf/mpdf.php';
	// 	if ($orientation == NULL)
	// 	{
	// 		$param = '"en-GB-x","A4","","",10,10,10,10,6,3';
	// 	}
	// 	else
	// 	{
	// 		$param = "'', 'A4-L', 0, '', 15, 15, 16, 16, 9, 9, ''";
	// 	}
	// 	return new mPDF($param);
	// }
}