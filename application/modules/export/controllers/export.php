<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Export extends MY_Controller
{
	var $pdf;
	function __construct()
	{
		parent::__construct();
		$this->load->library('mpdf');
	}

	function test_pdf()
	{
		$data['x'] = 'MPDF is awesome';
		$html = $this->load->view('export/pdf_output', $data, true);
		$pdfFilePath = "output_pdf_name.pdf";
		$orientation = "-L";
		$pdf = new mPDF('', 'A4'.$orientation, 0, '', 15, 15, 16, 16, 9, 9, '');
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "I");

	}
}