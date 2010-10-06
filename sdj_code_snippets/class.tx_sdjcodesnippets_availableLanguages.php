<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Sebastiaan de Jonge <szebi.eger@gmail.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * [CLASS/FUNCTION INDEX of SCRIPT]
 *
 * Hint: use extdeveval to insert/update function index above.
 */

/**
 * Small support class used to fill the BE content elements with available languages
 *
 * @author Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage tx_sdjcodesnippets
 */
class tx_sdjcodesnippets_availableLanguages {
	
	/**
	 * Lists the available/supported languages
	 * 
	 * @access public
	 * @static
	 * @param array $a_params
	 * @param object $o_parent
	 * @return void
	 */
	public static function listAvailableLanguages(&$a_params,&$o_parent) {
		$s_path = t3lib_extMgm::extPath('sdj_code_snippets').'res/geshi/';
		$a_contents = scandir($s_path);
		foreach($a_contents as $s_file) {
			if(!is_file($s_path.$s_file)) continue;
			
			$a_fileParts = t3lib_div::trimExplode('.',$s_file,true);
			include($s_path.$s_file);
			$a_params['items'][] = array(
				$language_data['LANG_NAME'],
				$a_fileParts[0]
			);
		}
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sdj_code_snippets/class.tx_sdjcodesnippets_availableLanguages.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sdj_code_snippets/class.tx_sdjcodesnippets_availableLanguages.php']);
}
?>