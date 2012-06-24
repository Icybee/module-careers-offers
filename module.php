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

class Module extends \ICanBoogie\Modules\Contents\Module
{
	protected function get_views()
	{
		$assets = array
		(
			'css' => array
			(
				__DIR__ . '/assets/page.css'
			)
		);

		return \ICanBoogie\array_merge_recursive
		(
			parent::get_views(), array
			(
				'view' => array
				(
					'assets' => $assets
				),

				'list' => array
				(
					'assets' => $assets
				),

				'apply' => array
				(
					'title' => "Apply to an offer",
					'provider' => 'ICanBoogie\Modules\Careers\Offers\Provider',
					'assets' => $assets,
					'renders' => \Icybee\Views\View::RENDERS_ONE
				)
			)
		);
	}
}