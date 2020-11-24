<?php
/**
 * JobClass - Job Board Web Application
 * Copyright (c) BedigitCom. All Rights Reserved
 *
 * Website: http://www.bedigit.com
 *
 * LICENSE
 * -------
 * This software is furnished under a license and may be used and copied
 * only in accordance with the terms of such license and with the inclusion
 * of the above copyright notice. If you Purchased from Codecanyon,
 * Please read the full License from here - http://codecanyon.net/licenses/standard
 */

namespace App\Helpers\Search\Traits\Filters;

trait PostTypeFilter
{
	protected function applyPostTypeFilter()
	{
		if (!isset($this->posts)) {
			return;
		}
		
		$postTypeIds = [];
		if (request()->filled('type')) {
			$postTypeIds = request()->get('type');
		}
		
		if (is_array($postTypeIds) && !empty($postTypeIds)) {
			$this->posts->whereIn('post_type_id', $postTypeIds);
		}
	}
}