<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types'][$_EXTKEY.'_pi1']['showitem'] = 'CType;;4;button;1-1-1, header;;3;;2-2-2, pi_flexform;;;;1-1-1';
$TCA['tt_content']['columns']['pi_flexform']['config']['ds'][','.$_EXTKEY.'_pi1'] = 'FILE:EXT:'.$_EXTKEY.'/pi1/ds.flexform_pi1.xml';

t3lib_extMgm::addPlugin(array(
	'LLL:EXT:sdj_code_snippets/locallang_db.xml:tt_content.CType_pi1',
	$_EXTKEY . '_pi1',
	t3lib_extMgm::extRelPath($_EXTKEY) . 'ext_recordicon.gif'
),'CType');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/code_snippets__css_/', 'Code snippets (Default configuration)');

require_once(t3lib_extMgm::extPath('sdj_code_snippets').'class.tx_sdjcodesnippets_availableLanguages.php');
?>