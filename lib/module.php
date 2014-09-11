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

use Icybee\Modules\Views\View;

class Module extends \Icybee\Modules\Contents\Module
{
	protected function lazy_get_views()
	{
		$assets = [ 'css' => [ DIR . 'public/page.css' ] ];

		return \ICanBoogie\array_merge_recursive(parent::lazy_get_views(), [

			'view' =>[

				View::ASSETS => $assets

			],

			'list' => [

				View::ASSETS => $assets,
				View::CONDITIONS => [

					'order' => '-date'

				]
			],

			'apply' => [

				'title' => "Apply to an offer",
				'provider' => __NAMESPACE__ . '\ViewProvider',
				View::ASSETS => $assets,
				'renders' => View::RENDERS_ONE

			]

		]);
	}
}