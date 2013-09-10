<?php
/**
 * @defgroup plugins_citationParser_freecite FreeCite Citation Parser
 */

/**
 * @file plugins/citationParser/freecite/PKPFreeciteCitationParserPlugin.inc.php
 *
 * Copyright (c) 2003-2013 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PKPFreeciteCitationParserPlugin
 * @ingroup plugins_citationParser_freecite
 *
 * @brief Cross-application FreeCite citation parser
 */


import('classes.plugins.Plugin');

class PKPFreeciteCitationParserPlugin extends Plugin {
	/**
	 * Constructor
	 */
	function PKPFreeciteCitationParserPlugin() {
		parent::Plugin();
	}


	//
	// Override protected template methods from PKPPlugin
	//
	/**
	 * @copydoc PKPPlugin::register()
	 */
	function register($category, $path) {
		if (!parent::register($category, $path)) return false;
		$this->addLocaleData();
		return true;
	}

	/**
	 * @copydoc PKPPlugin::getName()
	 */
	function getName() {
		return 'FreeciteCitationParserPlugin';
	}

	/**
	 * @copydoc PKPPlugin::getDisplayName()
	 */
	function getDisplayName() {
		return __('plugins.citationParser.freecite.displayName');
	}

	/**
	 * @copydoc PKPPlugin::getDescription()
	 */
	function getDescription() {
		return __('plugins.citationParser.freecite.description');
	}
}

?>