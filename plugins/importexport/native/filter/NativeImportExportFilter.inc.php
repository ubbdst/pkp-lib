<?php

/**
 * @file plugins/importexport/native/filter/NativeImportExportFilter.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2000-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class NativeImportExportFilter
 * @ingroup plugins_importexport_native
 *
 * @brief Base class that converts between Native XML documents and DataObjects
 */

import('lib.pkp.classes.filter.PersistableFilter');

class NativeImportExportFilter extends PersistableFilter {
	/** @var NativeImportExportDeployment */
	var $_deployment;

	/**
	 * Constructor
	 * @param $filterGroup FilterGroup
	 */
	function NativeImportExportFilter($filterGroup) {
		parent::PersistableFilter($filterGroup);
	}


	//
	// Deployment management
	//
	/**
	 * Set the import/export deployment
	 * @param $deployment NativeImportExportDeployment
	 */
	function setDeployment($deployment) {
		$this->_deployment = $deployment;
	}

	/**
	 * Get the import/export deployment
	 * @return NativeImportExportDeployment
	 */
	function getDeployment() {
		return $this->_deployment;
	}
}

?>
