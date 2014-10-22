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

use Icybee\Modules\Views\ViewOptions;

class Module extends \Icybee\Modules\Contents\Module
{
	protected function lazy_get_views()
	{
		$assets = [ 'css' => [ DIR . 'public/page.css' ] ];

		return \ICanBoogie\array_merge_recursive(parent::lazy_get_views(), [

			'view' =>[

				ViewOptions::ASSETS => $assets

			],

			'list' => [

				ViewOptions::ASSETS => $assets,
				ViewOptions::CONDITIONS => [

					'order' => '-date'

				]
			],

			'apply' => [

				ViewOptions::TITLE => "Apply to an offer",
				ViewOptions::PROVIDER_CLASSNAME => ViewOptions::PROVIDER_CLASSNAME_AUTO,
				ViewOptions::ASSETS => $assets,
				ViewOptions::RENDERS => ViewOptions::RENDERS_ONE

			]

		]);
	}
}