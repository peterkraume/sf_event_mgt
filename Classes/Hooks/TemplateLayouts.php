<?php
namespace DERHANSEN\SfEventMgt\Hooks;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Backend\Utility\BackendUtility;

/**
 * Hook for Template Layouts
 *
 * @author Torben Hansen <derhansen@gmail.com>
 */
class TemplateLayouts {

	/**
	 * Itemsproc function to extend the selection of templateLayouts in the plugin
	 *
	 * @param array &$config configuration array
	 * @return void
	 */
	public function user_templateLayout(array &$config) {
		$templateLayouts = $this->getTemplateLayoutsFromTsConfig($config['row']['pid']);
		foreach ($templateLayouts as $index => $layout) {
			$additionalLayout = array(
				$GLOBALS['LANG']->sL($layout, TRUE),
				$index
			);
			array_push($config['items'], $additionalLayout);
		}
	}

	/**
	 * Get template layouts defined in TsConfig
	 *
	 * @param $pageUid
	 * @return array
	 */
	protected function getTemplateLayoutsFromTsConfig($pageUid) {
		$templateLayouts = array();
		$pagesTsConfig = BackendUtility::getPagesTSconfig($pageUid);
		if (isset($pagesTsConfig['tx_sfeventmgt.']['templateLayouts.']) &&
			is_array($pagesTsConfig['tx_sfeventmgt.']['templateLayouts.'])) {
			$templateLayouts = $pagesTsConfig['tx_sfeventmgt.']['templateLayouts.'];
		}
		return $templateLayouts;
	}

}