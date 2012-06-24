<?php

namespace ICanBoogie;

use ICanBoogie\ActiveRecord\Model;

return array
(
	Module::T_TITLE => 'Job offers',
	Module::T_CATEGORY => 'contents',
	Module::T_EXTENDS => 'contents',
	Module::T_MODELS => array
	(
		'primary' => array
		(
			Model::T_EXTENDS => 'contents',
			Model::T_SCHEMA => array
			(
				'fields' => array
				(
					'start' => array('varchar', 80),
					'duration' => array('varchar', 80),
					'type' => array('varchar', 80),
					'is_provided' => 'boolean'
				)
			)
		)
	),

	Module::T_REQUIRES => array
	(
		'careers.applications' => '1.0'
	)
);