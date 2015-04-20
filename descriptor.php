<?php

namespace Icybee\Modules\Careers\Offers;

use ICanBoogie\Module\Descriptor;
use ICanBoogie\ActiveRecord\Model;

return [

	Descriptor::TITLE => 'Job offers',
	Descriptor::CATEGORY => 'contents',
	Descriptor::INHERITS => 'contents',
	Descriptor::MODELS => [

		'primary' => [

			Model::EXTENDING => 'contents',
			Model::SCHEMA => [

				'fields' => [

					'start' => ['varchar', 80],
					'duration' => ['varchar', 80],
					'type' => ['varchar', 80],
					'is_provided' => 'boolean'

				]
			]
		]
	],

	Descriptor::NS => __NAMESPACE__,

	Descriptor::REQUIRES => [

		'careers.applications' => '1.0'

	]
];
