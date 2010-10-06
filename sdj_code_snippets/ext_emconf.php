<?php

########################################################################
# Extension Manager/Repository config file for ext "sdj_code_snippets".
#
# Auto generated 06-10-2010 08:53
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Code snippets',
	'description' => 'Create code snippets/syntax highlighting as a totally new content elements. Just paste your code and select your format and you\'re done. Uses GeSHi. Great for usage with T3Blog.',
	'category' => 'plugin',
	'author' => 'Sebastiaan de Jonge',
	'author_email' => 'szebi.eger@gmail.com',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => 'SebastiaanDeJonge.com',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:198:{s:9:"ChangeLog";s:4:"f65c";s:10:"README.txt";s:4:"ee2d";s:47:"class.tx_sdjcodesnippets_availableLanguages.php";s:4:"970b";s:34:"class.tx_sdjcodesnippets_geshi.php";s:4:"4081";s:12:"ext_icon.gif";s:4:"0b00";s:17:"ext_localconf.php";s:4:"81b9";s:18:"ext_recordicon.gif";s:4:"240a";s:14:"ext_tables.php";s:4:"f3dc";s:16:"locallang_db.xml";s:4:"9a76";s:19:"doc/wizard_form.dat";s:4:"c9b6";s:20:"doc/wizard_form.html";s:4:"4758";s:36:"pi1/class.tx_sdjcodesnippets_pi1.php";s:4:"05d9";s:23:"pi1/ds.flexform_pi1.xml";s:4:"f773";s:21:"pi1/locallang_pi1.xml";s:4:"d6ec";s:15:"res/css/css.css";s:4:"454c";s:16:"res/css/html.css";s:4:"2e16";s:22:"res/css/javascript.css";s:4:"a752";s:15:"res/css/php.css";s:4:"8ae5";s:22:"res/css/typoscript.css";s:4:"9865";s:17:"res/geshi/4cs.php";s:4:"660e";s:18:"res/geshi/abap.php";s:4:"a0bc";s:26:"res/geshi/actionscript.php";s:4:"6af8";s:27:"res/geshi/actionscript3.php";s:4:"6ae0";s:17:"res/geshi/ada.php";s:4:"210a";s:20:"res/geshi/apache.php";s:4:"ab16";s:25:"res/geshi/applescript.php";s:4:"7edf";s:25:"res/geshi/apt_sources.php";s:4:"dabf";s:17:"res/geshi/asm.php";s:4:"0ebf";s:17:"res/geshi/asp.php";s:4:"786e";s:22:"res/geshi/autoconf.php";s:4:"e716";s:24:"res/geshi/autohotkey.php";s:4:"6186";s:20:"res/geshi/autoit.php";s:4:"e757";s:22:"res/geshi/avisynth.php";s:4:"ae96";s:17:"res/geshi/awk.php";s:4:"1fb6";s:18:"res/geshi/bash.php";s:4:"54d7";s:22:"res/geshi/basic4gl.php";s:4:"60a7";s:16:"res/geshi/bf.php";s:4:"8cf6";s:20:"res/geshi/bibtex.php";s:4:"df39";s:24:"res/geshi/blitzbasic.php";s:4:"45f5";s:17:"res/geshi/bnf.php";s:4:"b18d";s:17:"res/geshi/boo.php";s:4:"3acf";s:15:"res/geshi/c.php";s:4:"5c24";s:19:"res/geshi/c_mac.php";s:4:"2069";s:20:"res/geshi/caddcl.php";s:4:"ef0f";s:21:"res/geshi/cadlisp.php";s:4:"99d0";s:18:"res/geshi/cfdg.php";s:4:"761a";s:17:"res/geshi/cfm.php";s:4:"5f3b";s:24:"res/geshi/chaiscript.php";s:4:"3a35";s:17:"res/geshi/cil.php";s:4:"812f";s:21:"res/geshi/clojure.php";s:4:"d52f";s:19:"res/geshi/cmake.php";s:4:"789e";s:19:"res/geshi/cobol.php";s:4:"30a5";s:20:"res/geshi/cpp-qt.php";s:4:"6563";s:17:"res/geshi/cpp.php";s:4:"19a3";s:20:"res/geshi/csharp.php";s:4:"d95b";s:17:"res/geshi/css.php";s:4:"e2fc";s:22:"res/geshi/cuesheet.php";s:4:"c3ea";s:15:"res/geshi/d.php";s:4:"76f1";s:17:"res/geshi/dcs.php";s:4:"5f16";s:20:"res/geshi/delphi.php";s:4:"02d4";s:18:"res/geshi/diff.php";s:4:"c0ab";s:17:"res/geshi/div.php";s:4:"1d41";s:17:"res/geshi/dos.php";s:4:"4b91";s:17:"res/geshi/dot.php";s:4:"b178";s:24:"res/geshi/ecmascript.php";s:4:"6c81";s:20:"res/geshi/eiffel.php";s:4:"0846";s:19:"res/geshi/email.php";s:4:"f7c8";s:20:"res/geshi/erlang.php";s:4:"122a";s:16:"res/geshi/fo.php";s:4:"b30e";s:21:"res/geshi/fortran.php";s:4:"fce4";s:23:"res/geshi/freebasic.php";s:4:"e378";s:20:"res/geshi/fsharp.php";s:4:"afe7";s:20:"res/geshi/gambas.php";s:4:"c33b";s:17:"res/geshi/gdb.php";s:4:"5c7a";s:20:"res/geshi/genero.php";s:4:"95d9";s:19:"res/geshi/genie.php";s:4:"44a2";s:21:"res/geshi/gettext.php";s:4:"026e";s:18:"res/geshi/glsl.php";s:4:"38ec";s:17:"res/geshi/gml.php";s:4:"31e8";s:21:"res/geshi/gnuplot.php";s:4:"28b7";s:20:"res/geshi/groovy.php";s:4:"d1fd";s:21:"res/geshi/gwbasic.php";s:4:"225d";s:21:"res/geshi/haskell.php";s:4:"530a";s:20:"res/geshi/hicest.php";s:4:"b4f2";s:21:"res/geshi/hq9plus.php";s:4:"96e2";s:25:"res/geshi/html4strict.php";s:4:"5028";s:18:"res/geshi/icon.php";s:4:"bf40";s:17:"res/geshi/idl.php";s:4:"28b5";s:17:"res/geshi/ini.php";s:4:"6213";s:18:"res/geshi/inno.php";s:4:"23d2";s:22:"res/geshi/intercal.php";s:4:"db5c";s:16:"res/geshi/io.php";s:4:"db1d";s:15:"res/geshi/j.php";s:4:"7906";s:18:"res/geshi/java.php";s:4:"ed4c";s:19:"res/geshi/java5.php";s:4:"237d";s:24:"res/geshi/javascript.php";s:4:"66cb";s:20:"res/geshi/jquery.php";s:4:"3f50";s:21:"res/geshi/kixtart.php";s:4:"b64d";s:20:"res/geshi/klonec.php";s:4:"5cda";s:22:"res/geshi/klonecpp.php";s:4:"5dc3";s:19:"res/geshi/latex.php";s:4:"8d8c";s:18:"res/geshi/lisp.php";s:4:"fc7f";s:23:"res/geshi/locobasic.php";s:4:"5a88";s:21:"res/geshi/logtalk.php";s:4:"7c6a";s:21:"res/geshi/lolcode.php";s:4:"1640";s:27:"res/geshi/lotusformulas.php";s:4:"4e85";s:25:"res/geshi/lotusscript.php";s:4:"7286";s:21:"res/geshi/lscript.php";s:4:"2cc2";s:18:"res/geshi/lsl2.php";s:4:"5140";s:17:"res/geshi/lua.php";s:4:"9588";s:18:"res/geshi/m68k.php";s:4:"3d5a";s:21:"res/geshi/magiksf.php";s:4:"eecc";s:18:"res/geshi/make.php";s:4:"3c6a";s:22:"res/geshi/mapbasic.php";s:4:"a4db";s:20:"res/geshi/matlab.php";s:4:"ad47";s:18:"res/geshi/mirc.php";s:4:"e77e";s:18:"res/geshi/mmix.php";s:4:"b17b";s:21:"res/geshi/modula2.php";s:4:"897c";s:21:"res/geshi/modula3.php";s:4:"92a1";s:19:"res/geshi/mpasm.php";s:4:"58c4";s:18:"res/geshi/mxml.php";s:4:"bc50";s:19:"res/geshi/mysql.php";s:4:"ce26";s:21:"res/geshi/newlisp.php";s:4:"bf99";s:18:"res/geshi/nsis.php";s:4:"3908";s:21:"res/geshi/oberon2.php";s:4:"d749";s:18:"res/geshi/objc.php";s:4:"00e0";s:25:"res/geshi/ocaml-brief.php";s:4:"c358";s:19:"res/geshi/ocaml.php";s:4:"6724";s:19:"res/geshi/oobas.php";s:4:"c1dd";s:22:"res/geshi/oracle11.php";s:4:"1f1b";s:21:"res/geshi/oracle8.php";s:4:"a261";s:21:"res/geshi/oxygene.php";s:4:"5a63";s:16:"res/geshi/oz.php";s:4:"3d4b";s:20:"res/geshi/pascal.php";s:4:"a126";s:18:"res/geshi/pcre.php";s:4:"d52e";s:17:"res/geshi/per.php";s:4:"d28b";s:18:"res/geshi/perl.php";s:4:"2cb4";s:19:"res/geshi/perl6.php";s:4:"e9ca";s:16:"res/geshi/pf.php";s:4:"5c97";s:23:"res/geshi/php-brief.php";s:4:"74ea";s:17:"res/geshi/php.php";s:4:"c595";s:19:"res/geshi/pic16.php";s:4:"d267";s:18:"res/geshi/pike.php";s:4:"bb44";s:25:"res/geshi/pixelbender.php";s:4:"79c3";s:19:"res/geshi/plsql.php";s:4:"58ab";s:24:"res/geshi/postgresql.php";s:4:"b792";s:20:"res/geshi/povray.php";s:4:"6fc0";s:26:"res/geshi/powerbuilder.php";s:4:"9e85";s:24:"res/geshi/powershell.php";s:4:"ae77";s:22:"res/geshi/progress.php";s:4:"93a6";s:20:"res/geshi/prolog.php";s:4:"85e4";s:24:"res/geshi/properties.php";s:4:"6208";s:22:"res/geshi/providex.php";s:4:"87c5";s:23:"res/geshi/purebasic.php";s:4:"5a9c";s:20:"res/geshi/python.php";s:4:"1eb4";s:15:"res/geshi/q.php";s:4:"5305";s:20:"res/geshi/qbasic.php";s:4:"9041";s:19:"res/geshi/rails.php";s:4:"e64d";s:19:"res/geshi/rebol.php";s:4:"e88e";s:17:"res/geshi/reg.php";s:4:"fc99";s:20:"res/geshi/robots.php";s:4:"20ac";s:21:"res/geshi/rpmspec.php";s:4:"e5c4";s:20:"res/geshi/rsplus.php";s:4:"62ad";s:18:"res/geshi/ruby.php";s:4:"d7eb";s:17:"res/geshi/sas.php";s:4:"708e";s:19:"res/geshi/scala.php";s:4:"8442";s:20:"res/geshi/scheme.php";s:4:"9c94";s:20:"res/geshi/scilab.php";s:4:"c151";s:22:"res/geshi/sdlbasic.php";s:4:"dd6a";s:23:"res/geshi/smalltalk.php";s:4:"72cf";s:20:"res/geshi/smarty.php";s:4:"a46f";s:17:"res/geshi/sql.php";s:4:"a549";s:27:"res/geshi/systemverilog.php";s:4:"d55a";s:17:"res/geshi/tcl.php";s:4:"114f";s:22:"res/geshi/teraterm.php";s:4:"cd9e";s:18:"res/geshi/text.php";s:4:"d82f";s:23:"res/geshi/thinbasic.php";s:4:"b054";s:18:"res/geshi/tsql.php";s:4:"89e2";s:24:"res/geshi/typoscript.php";s:4:"1da5";s:20:"res/geshi/unicon.php";s:4:"e0ec";s:18:"res/geshi/vala.php";s:4:"e6c4";s:16:"res/geshi/vb.php";s:4:"b792";s:19:"res/geshi/vbnet.php";s:4:"4f54";s:21:"res/geshi/verilog.php";s:4:"ee0f";s:18:"res/geshi/vhdl.php";s:4:"4034";s:17:"res/geshi/vim.php";s:4:"b99e";s:26:"res/geshi/visualfoxpro.php";s:4:"ba0a";s:26:"res/geshi/visualprolog.php";s:4:"ee3f";s:24:"res/geshi/whitespace.php";s:4:"8d72";s:19:"res/geshi/whois.php";s:4:"5831";s:22:"res/geshi/winbatch.php";s:4:"a916";s:20:"res/geshi/xbasic.php";s:4:"7593";s:17:"res/geshi/xml.php";s:4:"2c64";s:23:"res/geshi/xorg_conf.php";s:4:"320d";s:17:"res/geshi/xpp.php";s:4:"4b6d";s:17:"res/geshi/z80.php";s:4:"7612";s:40:"static/code_snippets__css_/constants.txt";s:4:"d41d";s:36:"static/code_snippets__css_/setup.txt";s:4:"58f2";}',
	'suggests' => array(
	),
);

?>