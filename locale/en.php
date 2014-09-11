<?php

return array
(
	'careers_offers' => array
	(
		"All records" => "All job offers",

		'config_block.element' => array
		(
			'description' => array
			(
				'form_id' => "The form used to submit applications."
			),

			'label' => array
			(
				'form_id' => "Application form",
				'placeholder' => "Text placeholder when there is no job"
			)
		),

		'edit_block.element' => [

			'description' => [

				'metas_recipient' => "Sets the e-mail address to which applications are sent, replacing the one defined in the application form."
			],

			'label' => [

				'date' => "Offer date",
				'duration' => "Duration",
				'is_provided' => "The position has been filled",
				'metas_recipient' => "Reply address",
				'start' => "Hire date",
				'type' => "Contract type"
			]
		],

		'element.label' => array
		(
			'experience' => 'Experience',
			'cover_letter' => 'Details of your request',
			'cv' => 'C.V.',
			'apply' => 'Apply'
		),

		'manager.title.type' => 'Type',

		'button.Send' => 'Apply'
	),

	'description' => array
	(
		'is_provided' => "The record remains visible on the website but it is no longer possible to
		submit applications."
	)
);