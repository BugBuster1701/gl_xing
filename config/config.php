<?php 

/**
 * Contao Open Source CMS, Copyright (C) 2005-2015 Leo Feyer
 *
 * @copyright  Glen Langer 2008..2015 <http://contao.ninja>
 * @author     Glen Langer (BugBuster)
 * @package    Xing
 * @license    LGPL
 * @filesource
 * @see	       https://github.com/BugBuster1701/contao_xing
 */


/**
 * Add back end modules
 */
$GLOBALS['BE_MOD']['content']['xing'] = array
(
	'tables' => array('tl_xing_category', 'tl_xing'),
	'icon'   => 'system/modules/xing/assets/icon.gif'
);


/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 4, array
(
	'xing' => array
	(
		'xinglist'   => 'Xing\ModuleXingList'
	)
));

