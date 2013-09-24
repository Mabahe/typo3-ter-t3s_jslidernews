<?php

########################################################################
# Extension Manager/Repository config file for ext "t3s_jslidernews".
#
# Auto generated 10-04-2013 08:31
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'News & Content Slider',
	'description' => 'jQuery slider for tt_news, tt_content and pages with various styles and effects. Supports:dam,t3jquery,rgnewsce ... Demo: http://www.t3s-ext.de/t3s-extensions/t3s-jslidernews.html',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '4.2.4',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Helmut Hackbarth',
	'author_email' => 'info@t3solution.de',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-5.3.99',
			'typo3' => '4.5.0-4.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:109:{s:9:"ChangeLog";s:4:"0f71";s:21:"ext_conf_template.txt";s:4:"0651";s:12:"ext_icon.gif";s:4:"7c43";s:17:"ext_localconf.php";s:4:"4011";s:14:"ext_tables.php";s:4:"c173";s:15:"flexform_ds.xml";s:4:"abfa";s:13:"locallang.xml";s:4:"d660";s:16:"locallang_db.xml";s:4:"7aa0";s:27:"slidercontent_template.html";s:4:"2d7a";s:24:"slidermenu_template.html";s:4:"922c";s:24:"slidernews_template.html";s:4:"7095";s:12:"t3jquery.txt";s:4:"fb6c";s:14:"doc/manual.sxw";s:4:"46e6";s:14:"pi1/ce_wiz.gif";s:4:"bc0d";s:35:"pi1/class.tx_t3sjslidernews_pi1.php";s:4:"557b";s:43:"pi1/class.tx_t3sjslidernews_pi1_wizicon.php";s:4:"2a22";s:17:"pi1/locallang.xml";s:4:"ef35";s:21:"pi1/locallang_csh.xml";s:4:"6f70";s:20:"res/css/colorbox.css";s:4:"6273";s:16:"res/css/nivo.css";s:4:"d32f";s:18:"res/css/style1.css";s:4:"6f02";s:18:"res/css/style2.css";s:4:"3c10";s:19:"res/css/style2v.css";s:4:"2a5a";s:18:"res/css/style3.css";s:4:"8015";s:19:"res/css/style3v.css";s:4:"5435";s:18:"res/css/style4.css";s:4:"9e57";s:18:"res/css/style5.css";s:4:"5538";s:18:"res/css/style6.css";s:4:"55fa";s:22:"res/css/style8-top.css";s:4:"8f36";s:18:"res/css/style8.css";s:4:"62f5";s:25:"res/icons/icon_author.png";s:4:"88b8";s:27:"res/icons/icon_calendar.png";s:4:"876a";s:27:"res/icons/icon_category.png";s:4:"7ace";s:26:"res/icons/icon_content.png";s:4:"940e";s:24:"res/icons/icon_pages.png";s:4:"4f17";s:26:"res/icons/icon_thumb-1.jpg";s:4:"2818";s:26:"res/icons/icon_thumb-2.jpg";s:4:"0868";s:26:"res/icons/icon_thumb-3.jpg";s:4:"d78c";s:26:"res/icons/icon_thumb-4.jpg";s:4:"6ac1";s:26:"res/icons/icon_thumb-5.jpg";s:4:"cd49";s:26:"res/icons/icon_thumb-6.jpg";s:4:"a131";s:26:"res/icons/icon_thumb-7.jpg";s:4:"d03e";s:26:"res/icons/icon_thumb-8.jpg";s:4:"d850";s:25:"res/icons/icon_ttnews.gif";s:4:"5e2a";s:24:"res/icons/typo3_logo.jpg";s:4:"7349";s:16:"res/images/1.gif";s:4:"2e59";s:31:"res/images/arrow-bg-3-black.png";s:4:"222f";s:30:"res/images/arrow-bg-3-blue.png";s:4:"f27a";s:34:"res/images/arrow-bg-3-darkblue.png";s:4:"5244";s:31:"res/images/arrow-bg-3-green.png";s:4:"bb2f";s:32:"res/images/arrow-bg-3-orange.png";s:4:"be4a";s:29:"res/images/arrow-bg-3-red.png";s:4:"0c9c";s:29:"res/images/arrow-bg-black.png";s:4:"617c";s:28:"res/images/arrow-bg-blue.png";s:4:"c5f0";s:32:"res/images/arrow-bg-darkblue.png";s:4:"6575";s:31:"res/images/arrow-bg-darkred.png";s:4:"152e";s:30:"res/images/arrow-bg-orange.png";s:4:"cc50";s:27:"res/images/arrow-bg-red.png";s:4:"6794";s:23:"res/images/arrow-bg.png";s:4:"cff9";s:24:"res/images/arrow-bg2.gif";s:4:"630b";s:22:"res/images/arrow-d.png";s:4:"98b4";s:22:"res/images/arrow-l.png";s:4:"9a4f";s:22:"res/images/arrow-r.png";s:4:"94af";s:22:"res/images/arrow-u.png";s:4:"e266";s:30:"res/images/arrow-variant-2.png";s:4:"bbe4";s:28:"res/images/arrow-variant.png";s:4:"b5ac";s:21:"res/images/arrows.png";s:4:"09b2";s:22:"res/images/arrows2.png";s:4:"a700";s:21:"res/images/b_next.png";s:4:"d72d";s:21:"res/images/b_prev.png";s:4:"86e3";s:23:"res/images/badgehot.png";s:4:"56ab";s:23:"res/images/badgenew.png";s:4:"5435";s:23:"res/images/bg_trans.png";s:4:"a37f";s:20:"res/images/blank.gif";s:4:"3254";s:22:"res/images/body-bg.gif";s:4:"313c";s:23:"res/images/body-top.gif";s:4:"3770";s:22:"res/images/bullets.png";s:4:"acc6";s:23:"res/images/bullets2.png";s:4:"f18f";s:30:"res/images/bullets_nivo_sl.png";s:4:"f08d";s:23:"res/images/controls.png";s:4:"2615";s:19:"res/images/dots.png";s:4:"c57a";s:31:"res/images/fancybox_loading.gif";s:4:"c6f1";s:30:"res/images/fancybox_sprite.png";s:4:"61c6";s:28:"res/images/grad-bg-black.gif";s:4:"f797";s:27:"res/images/grad-bg-blue.gif";s:4:"4ec8";s:31:"res/images/grad-bg-darkblue.gif";s:4:"5bfc";s:29:"res/images/grad-bg-orange.gif";s:4:"4dd3";s:26:"res/images/grad-bg-red.gif";s:4:"fa56";s:22:"res/images/grad-bg.gif";s:4:"ea5c";s:23:"res/images/grad-bg2.gif";s:4:"e21c";s:19:"res/images/line.png";s:4:"e7b0";s:29:"res/images/load-indicator.gif";s:4:"4de8";s:22:"res/images/loading.gif";s:4:"c6f1";s:23:"res/images/loading2.gif";s:4:"c339";s:23:"res/images/pageBack.jpg";s:4:"dd2e";s:20:"res/images/pause.png";s:4:"7faa";s:19:"res/images/play.png";s:4:"b1f8";s:25:"res/images/play_video.png";s:4:"9de6";s:28:"res/images/play_video_on.png";s:4:"8fbf";s:23:"res/images/popup_bg.png";s:4:"8d83";s:21:"res/images/slider.png";s:4:"6c42";s:22:"res/images/spinner.gif";s:4:"2978";s:29:"res/images/transparent_bg.png";s:4:"341a";s:35:"res/images/transparent_bg_white.png";s:4:"cf17";s:25:"res/js/jquery.colorbox.js";s:4:"fb96";s:23:"res/js/jquery.easing.js";s:4:"e6a9";s:28:"res/js/jquery.nivo.slider.js";s:4:"ad9d";s:21:"res/js/jslidernews.js";s:4:"4d73";s:30:"res/js/nivo-slider-license.txt";s:4:"0376";}',
);

?>