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

use Brickrouge\Group;
use Brickrouge\Element;

/**
 * A block to configure careers offers.
 */
class ConfigBlock extends \Icybee\Modules\Contents\ConfigBlock
{
	protected function lazy_get_children()
	{
		global $core;

		$ns = $this->module->flat_id;

		return array_merge(parent::lazy_get_children(), [

			"local[$ns.form_id]" => $core->editors['form']->from([

				Group::LABEL => 'form_id',
				Element::REQUIRED => true,
				Element::DESCRIPTION => 'form_id'
			]),

			"local[$ns.placeholder]" => $core->editors['rte']->from([

				Group::LABEL => 'placeholder',

				'rows' => 5
			])
		]);
	}
}