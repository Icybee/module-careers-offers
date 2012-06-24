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

class ManageBlock extends \ICanBoogie\Modules\Contents\ManageBlock
{
	public function __construct(Module $module, array $attributes)
	{
		parent::__construct
		(
			$module, $attributes + array
			(
				self::T_COLUMNS_ORDER => array('title', 'is_online', 'uid', 'type', 'date', 'modified')
			)
		);
	}

	protected function columns()
	{
		return parent::columns() + array
		(
			'type' => array
			(
				'label' => 'Type',
				'sortable' => true,
				'orderable' => true,
				'discreet' => true
			),

			'start' => array
			(
				'class' => 'date'
			)
		);
	}

	protected function render_cell_type($record, $property)
	{
		return $this->render_filter_cell($record, $property);
	}
}