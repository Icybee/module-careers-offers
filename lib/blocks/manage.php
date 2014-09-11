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

class ManageBlock extends \Icybee\Modules\Contents\ManageBlock
{
	public function __construct(Module $module, array $attributes)
	{
		parent::__construct
		(
			$module, $attributes + [

				self::T_COLUMNS_ORDER => [ 'title', 'is_online', 'uid', 'type', 'date', 'updated_at' ]
			]
		);
	}

	protected function get_available_columns()
	{
		return array_merge(parent::get_available_columns(),
		[
			'type' => __CLASS__ . '\TypeColumn',
			'start' => 'Icybee\ManageBlock\Column'
		]);
	}
}

namespace Icybee\Modules\Careers\Offers\ManageBlock;

use Icybee\ManageBlock\Column;

class TypeColumn extends Column
{
	/*array
			(
				'label' => 'Type',
				'sortable' => true,
				'orderable' => true,
				'discreet' => true
			)

	protected function render_cell_type($record, $property)
	{
		return $this->render_filter_cell($record, $property);
	}
	*/
}