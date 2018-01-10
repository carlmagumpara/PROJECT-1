<?php

use Illuminate\Database\Seeder;
use App\LegalService;

class LegalServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$services = array(
    		array(
    			'name' => 'Per Query', 
    			'fee' => 1500.00,
    		),
    		array(
    			'name' => 'Video Conference', 
    			'fee' => 2000.00,
    		),
    		array(
    			'name' => 'Office Conference', 
    			'fee' => 2000.00,
    		),
    		array(
    			'name' => 'Monthly Retainer', 
    			'fee' => 00.00,
    		),
    		array(
    			'name' => 'Case/Project Retainer', 
    			'fee' => 00.00,
    		),
    	);

      foreach ($services as $service) {
      	LegalService::create($service);
      }
    }
}
