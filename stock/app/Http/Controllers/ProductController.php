<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //This funtion will read a testingCsv on develop mode [WIP]
    public function readCsv(){ //For the moment, we are'nt receiving any request
        $file_path = public_path('temporal/testing.csv'); //We have a temporally .csv file to testing on develop mode
        $file = fopen($file_path, "r"); //Open the file
        $row = 0;
        while (($data = fgetcsv($file, ",")) == true) {
            $num = count($data); //Count of fields (or commands) in each line
            $row++;
            for ($i=0; $i<$num; $i++) { 
                $idproduct = $data[0];
                $command = $data[1];
                $units = isset($data[2]) ? $data[2] : null;
            }
            $this->processCommand($idproduct, $command, $units);
        }
        fclose($file);
    }

    private function processCommand($idproduct, $command, $units){
        switch($command){
            case 'Agregar':
            break;
            case 'Restar':
            break;
            case 'Activar':
            break;
            case 'Desactivar':
            break;
            default:
                return 'No command found';
            break;
        }
    }
}
