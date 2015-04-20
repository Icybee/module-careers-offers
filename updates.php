<?php

namespace Icybee\Modules\Careers\Offers;

use ICanBoogie\Updater\AssertionFailed;
use ICanBoogie\Updater\Update;

/**
 * - Rename table `jobs_offers` as `careers_offers`.
 *
 * @module careers.offers
 */
class Update20120101 extends Update
{
	public function update_table_sites()
	{
		$db = $this->app->db;

		if (!$db->table_exists('jobs_offers'))
		{
			throw new AssertionFailed('assert_table_exists', 'jobs_offers');
		}

		$db("RENAME TABLE `{prefix}jobs_offers` TO `{prefix}careers_offers`");
	}

	public function update_constructor_type()
	{
		$db = $this->app->db;
		$db("UPDATE {prefix}nodes SET constructor = 'careers.offers' WHERE constructor = 'jobs.offers'");
	}

	public function update_registry_keys()
	{
		$db = $this->app->db;
		$db("UPDATE {prefix}registry__site SET name = REPLACE(name, 'jobs_offers.', 'careers_offers.') WHERE name LIKE 'jobs_offers.%'");
		$db("UPDATE {prefix}registry__site SET name = REPLACE(name, 'views.targets.jobs_offers/', 'views.targets.careers_offers/') WHERE name LIKE 'views.targets.jobs_offers/%'");
	}
}
