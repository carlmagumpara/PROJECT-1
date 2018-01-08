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
				'Publicly Listed',
				'Not Publicly Listed',
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
	];
?>