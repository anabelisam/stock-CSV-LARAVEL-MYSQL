<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //This funtion will read a testingCsv on develop mode [WIP]
    public function readCsv(Request $request){ //For the moment, we are'nt receiving any request
        $file_path = $request->file;
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
            $this->processCommand($idproduct, $command, $units); //Choose action by command
        }
        fclose($file);
    }

    private function processCommand($idproduct, $command, $units){
        switch($command){
            case 'Agregar':
                $this->addUnits($idproduct, $units);
            break;
            case 'Restar':
                $this->substractUnits($idproduct, $units);
            break;
            case 'Activar':
                $this->updateState($idproduct, 1);
            break;
            case 'Desactivar':
                $this->updateState($idproduct, 0);
            break;
            default:
                return 'No command found';
            break;
        }
    }  
    
    private function addUnits($idproduct, $units){
        $incrementUnits = DB::table('products')->where('idproduct', $idproduct)->increment('units', $units);
    }

    private function substractUnits($idproduct, $units){
        $decrementUnits = DB::table('products')->where('idproduct', $idproduct)->decrement('units', $units);
    }

    private function updateState($idproduct, $state){
        $updateState = DB::table('products')->where('idproduct', $idproduct)->update(['state' => $state]);
    }

    public function getAllProducts(){ //It's public because is used in routes/web.php and readCsv too.
        $allProducts = DB::table('products')->get();
        return view('products', ['allProducts' => $allProducts]);
    }
}
