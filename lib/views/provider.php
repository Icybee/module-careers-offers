<?php

namespace Icybee\Modules\Careers\Offers;

class ViewProvider extends \Icybee\Modules\Contents\ViewProvider
{
	protected function get_return_type()
	{
		return $this->view->type == 'apply' ? self::RETURN_ONE : parent::get_return_type();
	}
}
