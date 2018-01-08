<?php

use Illuminate\Database\Seeder;
use App\LegalCaseType;

class LegalCaseTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = array(
        	array(
        		'type' => 'Personal',
        		'description' => 'Personal - I have problem in my birth certificate, my passport, my criminal case, etc.', 
        		), 
        	array(
        		'type' => 'Family',
        		'description' => 'Family - I have a problem in annulment, child custody, adoption, etc.', 
        		), 
        	array(
        		'type' => 'Property',
        		'description' => 'Property - I have a problem with my land title, car, stocks, etc.', 
        		), 
        	array(
        		'type' => 'Contractual',
        		'description' => 'Contractual - I have a problem with my contract, sub-contract, etc.', 
        		),
        	array(
        		'type' => 'Business',
        		'description' => 'Business - I have a problem in my business.', 
        		), 
        	array(
        		'type' => 'Work',
        		'description' => 'Work - I have a problem in my work, dismissal, SSS, Pag-ibig, OWWA, etc.', 
        		), 
        	array(
        		'type' => 'Legal Documents',
        		'description' => 'Legal Documents - I need an affidavit, SPA, deed of sale, contact, etc.', 
        		), 
        	array(
        		'type' => 'Special Projects/Contracts',
        		'description' => 'Special Projects/Contracts - I need a lawyer for a big transaction.', 
        		), 
        	array(
        		'type' => 'Anything under the Sun',
        		'description' => 'Anything under the Sun - I need a legal advice before I act.', 
        		), 
        	);

        foreach ($types as $type) {
        	LegalCaseType::create($type);
        }

    }
}
