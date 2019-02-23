<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //This funtion will read a testingCsv on develop mode [WIP]
    public function readCsv(){ //For the moment, we are'nt receiving any request
        //We have a temporally .csv file to testing on develop mode
        $file_path = public_path('temporal/testing.csv'); //File path
        $file = fopen($file_path, "r"); //Open the file
        $data = fgetcsv($file, 1000, ","); //Get the file content to read here line per line
        $row = 1;
        while ($data !== FALSE) {
            $num = count($data); //Count of fields in each line
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;

            //For each field
            for ($i=0; $i<$num; $i++) {
                echo $data[$i] . "<br />\n"; //Each field
            }
        }
        fclose($file);
    }
}
