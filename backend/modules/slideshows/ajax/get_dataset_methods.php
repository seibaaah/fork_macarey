<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This action will output a list of all dataset-methods for a given module.
 *
 * @author Dave Lens <dave.lens@netlash.com>
 */
class BackendSlideshowsAjaxGetDatasetMethods extends BackendBaseAJAXAction
{
	/**
	 * Execute the action
	 */
	public function execute()
	{
		parent::execute();

		$module = SpoonFilter::getPostValue('m', null, '');
		if($module == '') $this->output(self::BAD_REQUEST, null, 'module-parameter is missing.');

		// get items
		$items = BackendSlideshowsModel::getDataSetMethods($module);

		// output
		$this->output(self::OK, $items);
	}
}
