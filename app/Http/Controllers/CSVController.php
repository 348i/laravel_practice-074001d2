<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CSVController extends Controller
{

    /**
     * Reads `sample-input.csv` from `storage/` and inserts new Clinic entries to the DB. Ignores invalid or duplicate entries.
     * 
     * @return response() 
     */
    public function ingestCSV()
    {
        $header = null;
        $clinics = [];

        if (($open = fopen(storage_path() . '/sample-input.csv', 'r')) !== FALSE) {
            while (($row = fgetcsv($open, 100, ',')) !== FALSE) {
                if ($header === null) {
                    $header = $row;
                    continue;
                }
                $clinics[] = $row;
            }

            fclose($open);
        }


        foreach ($clinics as $clinicDataRow) {
            Clinic::firstOrCreate([
                'clinicID' => $clinicDataRow[0],
                'clinicName' => $clinicDataRow[1],
                'clinicAddress' => $clinicDataRow[2]
            ]);
        }

        return Inertia::render('Clinics/Index', [
            'clinics' => Clinic::all(),
        ]);
    }
}
