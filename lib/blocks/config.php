<?php

/*
 * This file is part of the Icybee package.
 *
 * (c) Olivier Laviale <olivier.laviale@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ICanBoogie\Modules\Careers\Offers;

use Brickrouge\Form;
use Brickrouge\Element;

/**
 * A block to configure careers offers.
 */
class ConfigBlock extends \ICanBoogie\Modules\Contents\ConfigBlock
{
	protected function alter_children(array $children, array &$properties, array &$attributes)
	{
		$ns = $this->module->flat_id;

		return array_merge
		(
			parent::alter_children($children, $properties, $attributes), array
			(
				"local[$ns.form_id]" => new \WdFormSelectorElement
				(
					'select', array
					(
						Form::LABEL => 'form_id',
						Element::GROUP => 'primary',
						Element::REQUIRED => true,
						Element::DESCRIPTION => 'form_id'
					)
				),

				"local[$ns.placeholder]" => new \moo_WdEditorElement
				(
					array
					(
						Form::LABEL => 'placeholder',
						Element::GROUP => 'primary',

						'rows' => 6
					)
				)
			)
		);
	}
}