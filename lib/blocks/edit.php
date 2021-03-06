<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Icybee\Modules\Careers\Offers;

use Brickrouge\Date;
use Brickrouge\Element;
use Brickrouge\Form;
use Brickrouge\Text;

class EditBlock extends \Icybee\Modules\Contents\EditBlock
{
	protected function lazy_get_attributes()
	{
		$attributes = parent::lazy_get_attributes();

		$attributes[Element::GROUPS]['advanced'] = array
		(
			'title' => 'advanced'
		);

		return $attributes;
	}

	protected function lazy_get_children()
	{
		return array_merge
		(
			parent::lazy_get_children(),
			[
				'subtitle' => null,

				'date' => new Date
				(
					array
					(
						Form::LABEL => 'date',
						Element::REQUIRED => true,
						Element::DEFAULT_VALUE => date('Y-m-d')
					)
				),

				'start' => new Text
				(
					array
					(
						Form::LABEL => 'start',
						Element::REQUIRED => true
					)
				),

				'duration' => new Text
				(
					array
					(
						Form::LABEL => 'duration'
					)
				),

				'type' => new Text
				(
					array
					(
						Form::LABEL => 'type'
					)
				),

				'is_provided' => new Element
				(
					Element::TYPE_CHECKBOX, array
					(
						Element::LABEL => 'is_provided',
						Element::GROUP => 'visibility',
						Element::DESCRIPTION => 'is_provided'
					)
				),

				'metas[recipient]' => new Text
				(
					array
					(
						Form::LABEL => 'metas_recipient',
						Element::GROUP => 'advanced',
						Element::DESCRIPTION => 'metas_recipient'
					)
				)
			]
		);
	}
}