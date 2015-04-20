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

class Offer extends \Icybee\Modules\Contents\Content
{
	const MODEL_ID = 'careers.offers';

	public $start;
	public $duration;
	public $type;
	public $is_provided;
}
