<?php

namespace ICanBoogie\Modules\Careers\Offers;

class Provider extends \Icybee\Views\Contents\Provider
{
	protected function get_return_type()
	{
		return $this->view->type == 'apply' ? self::RETURN_ONE : parent::get_return_type();
	}
}
