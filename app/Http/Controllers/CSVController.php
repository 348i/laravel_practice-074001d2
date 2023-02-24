<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CSVController extends Controller
{

    /**
     * Reads `sample-input.csv` from `storage/` and inserts new Clinic entries to the DB. Ignores invalid or duplicate entries.
     * 
     * @return response() 
     */
    public function ingestCSV()
    {
        $clinics = [];

        if (($open = fopen(storage_path() . '/sample-input.csv', 'r')) !== FALSE) {
            while(($data = fgetcsv($open, 100, ',')) !== FALSE) {
                $clinics[] = $data;
            }

            fclose($open);
        }

        echo "<pre>";
        print_r($clinics);
    }
}
