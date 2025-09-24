<?php
class Model_download extends CI_Model {
	
	public function downloadcontactform($fildata) {
		
		function setCell( &$worksheet, $row/*1-based*/, $col/*0-based*/, $val, $style=NULL ) {

			if ($style) {

				$worksheet->getStyleByColumnAndRow($col,$row)->applyFromArray( $style );

				$cell = $worksheet->getCellByColumnAndRow( $col, $row );

				$style = $cell->getStyle();

				if ($style->getNumberFormat()->getFormatCode() == '@') {

					$cell->setValueExplicit( $val );

				} else {

					$cell->setValue( $val );

				}

			} else {

				$cell = $worksheet->getCellByColumnAndRow( $col, $row );

				$cell->setValue( $val );

			}

		}

		function populateProductsWorksheet1( &$worksheet, &$database, &$fildata )
		{
			// The product headings row

			$i = 1;

			$j = 0;
			

			setCell( $worksheet, $i, 0, 'email');

			setCell( $worksheet, $i, 1, 'date');


			$rw=2;
			$sql="SELECT * FROM newsletter where 1=1";
			$condition="";
			if(!empty($fildata['fromdate']) && !empty($fildata['todate'])) {
				$condition.=" and date_added >= '".$fildata['fromdate']."' and date_added <= '".$fildata['todate']."'";
			}
			$sql .= $condition;
			$query = $database->query($sql);
			$result = $query->result();
			$result = $query->result();
			
			foreach ($result as $cusRW) 
			{
				setCell( $worksheet, $rw, 0,  $cusRW->email);

				setCell( $worksheet, $rw, 1,  $cusRW->date_added);

				$rw++;
			}

			$worksheet->getRowDimension($i)->setRowHeight(30);

		}

	
		require_once(ROOTDIR.'PHPExcel/Classes/PHPExcel.php');

		$workbook = new PHPExcel();

		$workbook->getDefaultStyle()->getFont()->setName('Arial');

		$workbook->getDefaultStyle()->getFont()->setSize(10);

		$workbook->getDefaultStyle()->getAlignment()->setIndent(1);

		$workbook->setActiveSheetIndex(0);

		$worksheet = $workbook->getActiveSheet();

		$worksheet->setTitle( 'Newsletter' );

		global $config;
		global $log;
		$config = $this->config;
		$database =& $this->db;

		populateProductsWorksheet1( $worksheet,$database, $fildata );

		$workbook->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

		header('Content-Disposition: attachment;filename="newslettersubscribe.xlsx"');

		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($workbook, 'Excel2007');

		$objWriter->save('php://output');

		exit();

	}

}
?>