<?php

use Illuminate\Database\Seeder;
use App\ReportedCase;

class ReportedCaseSeeder extends Seeder
{
    public function run()
    {
    	DB::statement("SET FOREIGN_KEY_CHECKS=0");
        ReportedCase::truncate();
        DB::statement("SET FOREIGN_KEY_CHECKS=1");

        ReportedCase::create([
        	'created_by' => 2,
        	'description' => "Client entered Nigeria with goods without Customs Duty",
        	'title' => "Entry without duty",
        	'exporter_name' => 'Abubakar Suleiman',
        	'exporter_email' => 'abubakar@gmail.com',
        	'exporter_address' => 'Kaduna - Nigeria',
        	'exporter_website' => 'jon.com.ng',
        	"exporter_phone" => '+234 7061 151 982'
        ]);

        ReportedCase::create([
        	'created_by' => 4,
        	'description' => "Client entered Nigeria with goods without Customs Duty",
        	'title' => "Entry without duty",
        	'exporter_name' => 'John Ivanka',
        	'exporter_email' => 'john@gmail.com',
        	'exporter_address' => 'Kaduna - Nigeria',
        	'exporter_website' => 'ivanka.com.ng',
        	"exporter_phone" => '+234 7061 151 982'
        ]);
    }
}
