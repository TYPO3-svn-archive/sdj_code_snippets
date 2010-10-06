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

require_once(PATH_tslib.'class.tslib_pibase.php');
require_once(t3lib_extMgm::extPath('sdj_code_snippets').'class.tx_sdjcodesnippets_geshi.php');

/**
 * Plugin 'Code snippet' for the 'sdj_code_snippets' extension.
 *
 * @author Sebastiaan de Jonge <szebi.eger@gmail.com>
 * @package TYPO3
 * @subpackage tx_sdjcodesnippets
 */
class tx_sdjcodesnippets_pi1 extends tslib_pibase {
	public $prefixId      = 'tx_sdjcodesnippets_pi1';		// Same as class name
	public $scriptRelPath = 'pi1/class.tx_sdjcodesnippets_pi1.php';	// Path to this script relative to the extension dir.
	public $extKey        = 'sdj_code_snippets';	// The extension key.
	public $pi_checkCHash = true;
    private $a_conf = array();
    private $s_content = '';

    private $i_lineCount = 0;
    private $s_title = '';
    private $s_rawCode = '';
    private $s_language = '';
	
	/**
	 * The main method of the PlugIn
	 *
	 * @param string $s_content: The PlugIn content
	 * @param array $a_conf The PlugIn configuration
	 * @return The content that is displayed on the website
	 */
	public function main($s_content, $a_conf) {
		$this->init($s_content,$a_conf);
        if($this->a_conf['enable'] === 0) return $this->s_rawCode;
		
		$o_geshi = new tx_sdjcodesnippets_geshi($this->s_rawCode,$this->s_language);
		$o_geshi->set_language_path(t3lib_extMgm::siteRelPath('sdj_code_snippets').'res/geshi/');
		$o_geshi->enable_classes();
		$o_geshi->enable_line_numbers(GESHI_NORMAL_LINE_NUMBERS);
		$o_geshi->set_header_type(GESHI_HEADER_NONE);

		$s_uniqueKey = substr(md5($this->s_rawCode),3,8);

		$this->s_content = $o_geshi->parse_code();

        /**
         * This will ad a unique key to the list, which can be used to show/hide plain/highlighted code. It will also
         * provide a fix when this plugin is used with sourceopt. For some reason sourceopt seems to remove all these
         * spaces.
         */
		$this->s_content = str_replace(
            array(
                '> <',
                '<ol '
            ),
            array(
                '>&nbsp;<',
                '<ol id="hl-'.$s_uniqueKey.'" '
            ),
            $this->s_content
        );
        
        if($a_conf['code_stdWrap.']) $this->s_content = $this->cObj->stdWrap($this->s_content,$a_conf['code_stdWrap.']);

        if($this->a_conf['showPlain']) {
            $s_plain = htmlspecialchars($this->s_rawCode);
            if($this->a_conf['plain_stdWrap.']) $s_plain = $this->cObj->stdWrap($s_plain,$this->a_conf['plain_stdWrap.']);
            $this->s_content .= $s_plain;
        }

        if($this->a_conf['showTitle']) {
            $this->s_title = empty($this->s_title) ? $o_geshi->language_data['LANG_NAME'] : $this->s_title;
            if($this->a_conf['title_stdWrap.']) $this->s_title = $this->cObj->stdWrap($this->s_title,$this->a_conf['title_stdWrap.']);
            $this->s_content = $this->s_title.$this->s_content;
        }

        if($this->a_conf['full_stdWrap.']) $this->s_content = $this->cObj->stdWrap($this->s_content,$this->a_conf['full_stdWrap.']);

        $this->s_content = str_replace('###UNIQUE_KEY###',$s_uniqueKey,$this->s_content);

		return $this->s_content;
	}
	
	/**
	 * Initialize
	 *
	 * @param string $s_content: The PlugIn content
	 * @param array $a_conf The PlugIn configuration
	 * @return The content that is displayed on the website
	 */
	private function init($s_content, $a_conf) {
		$this->a_conf = $a_conf;
		$this->s_content = $s_content;
		
		$this->pi_loadLL();
		$this->pi_initPIflexForm();
		
		$a_flexFormData = $this->cObj->data['pi_flexform'];
		$this->s_rawCode = $this->pi_getFFvalue($a_flexFormData,'code');
		$this->s_language = strtoupper($this->pi_getFFvalue($a_flexFormData,'language'));
		$this->s_title = $this->pi_getFFvalue($a_flexFormData,'title');
		
		$a_lines = t3lib_div::trimExplode("\n",$this->s_rawCode,true);
		$this->i_lineCount = count($a_lines);
		unset($a_lines);
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sdj_code_snippets/pi1/class.tx_sdjcodesnippets_pi1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/sdj_code_snippets/pi1/class.tx_sdjcodesnippets_pi1.php']);
}
?>