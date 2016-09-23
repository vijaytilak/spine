<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Record;

class RecordTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('array_records')->delete();

        // Records
        Record::create(array(
            'record_crmid' => 12345,
            'record_module' => 'Quotes',
            'record_jobtype' => 'Regular',
            'record_gst' => 0.15,
            'record_mode' => 'Quote'
        ));

        Record::create(array(
            'record_crmid' => 1234,
            'record_module' => 'Project',
            'record_jobtype' => 'Custom',
            'record_gst' => 0.15,
            'record_mode' => 'Project'
        ));
    }
}