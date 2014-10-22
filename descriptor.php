<?php

namespace Icybee\Modules\Careers\Offers;

use ICanBoogie\Module;
use ICanBoogie\ActiveRecord\Model;

return
[
	Module::T_TITLE => 'Job offers',
	Module::T_CATEGORY => 'contents',
	Module::T_EXTENDS => 'contents',
	Module::T_MODELS =>
	[
		'primary' =>
		[
			Model::T_EXTENDS => 'contents',
			Model::T_SCHEMA =>
			[
				'fields' =>
				[
					'start' => ['varchar', 80],
					'duration' => ['varchar', 80],
					'type' => ['varchar', 80],
					'is_provided' => 'boolean'
				]
			]
		]
	],

	Module::T_NAMESPACE => __NAMESPACE__,

	Module::T_REQUIRES =>
	[
		'careers.applications' => '1.0'
	]
];