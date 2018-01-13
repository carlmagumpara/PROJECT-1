<?php  
	return [
		'gender' => [
			'Male',
			'Female',
		],
		'education_attained' => [
			'Grade School',
			'High School',
			'Vocational/Short Course',
			'Bachelors/College Degree',
			'Post Graduate Diploma/Masters Degree',
			'Professional License',
			'Docotrate Degree'
		],
		'work_status' =>  [
			'Regular',
			'Probationary',
			'Casual',
			'Project',
			'Other'
		],
		'civil_status' => [
			'Single',
			'Married',
			'Divorced/Annulled',
			'Living In'
		],
		'custody' => [
			'With us',
			'With you',
			'With spouse',
			'With relative'
		],
		'corporate_partnership' => [
			'type' => [
				'Stock Corporation',
				'Non-Stock',
				'General Partnership',
				'Limited Partnership',
			],
			'attach_fill_out' => [
				[ 
					'type' => 'Attach', 
					'label' => '* Attach the following documents',
					'name' => 'attach', 
				],
				[ 
					'type' => 'Fill Out', 
					'label' => '* Fill out the forms',
					'name' => 'fill_out', 
				],
			],
			'stockholder_type' => [
				[ 
					'type' => 'Publicly Listed', 
					'label' => 'Top 10 Majority Stockholders',
				],
				[ 
					'type' => 'Not Publicly Listed', 
					'label' => 'Limited to 10-20 Stockholders',
				],
			],
		],
		'legal_services' => [
			[ 
				'type' => 'Per Query', 
				'data-type' => 'per_query'
			],
			[ 
				'type' => 'Video Conference', 
				'data-type' => 'video_conference'
			],
			[ 
				'type' => 'Office Conference', 
				'data-type' => 'office_conference'
			],
			[ 
				'type' => 'Monthly Retainer', 
				'data-type' => 'monthly_retainer'
			],
			[ 
				'type' => 'Case/Project Retainer', 
				'data-type' => 'case_project_retainer'
			],
		],
		'mode-of-payment' => [
			'options' => [
				[
					'type' => 'Bank Deposit',
					'data-type' => 'bank_deposit',
				],
				[
					'type' => 'Paypal',
					'data-type' => 'paypal',
				],
				[
					'type' => 'GCash',
					'data-type' => 'gcash',
				],
				[
					'type' => 'SmartMoney',
					'data-type' => 'smartmoney',
				],
				[
					'type' => 'Cashsense',
					'data-type' => 'cashsense',
				],
			],
			'gcash_type' => [
				'GCash Mobile',
				'GCash Online',
				'GCash Remit',
			],
			'smartmoney_type' => [
				'Over-the-Counter',
				'Wallet-to-Wallet',
				'Mobile Banking Service',
				'Smart Padala',
			],
			'status' => [
				'Pending',
				'Overdue',
				'Confirmed',
			],
		],
	];
?>