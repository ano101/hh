<?php
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class SpreadsheetClass
{
    public $spreadsheet;
    public $sheet;
    private $row = 1;
    public function __construct(){
        $this->spreadsheet = new Spreadsheet();
        $this->sheet = $this->spreadsheet->getActiveSheet();
    }

    public function addRow($data){
        $col = 1;
        foreach ($data as $key => $value){
            $this->sheet->setCellValueByColumnAndRow($col, $this->row, $value);
            $col++;
        }
    }

    public function generateExample($data){
        foreach ($data as $key => $value){
            $this->addRow($value);
            $this->row++;
        }
    }

    public function save(){
        $writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($this->spreadsheet, 'Xlsx');
        $writer->save('file.xlsx');
    }
}