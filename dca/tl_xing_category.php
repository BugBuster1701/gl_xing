<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * Contao Open Source CMS
 * 
 * Modul Xing - Backend DCA tl_xing_category
 *
 * This is the data container array for table tl_xing_category.
 *
 * PHP version 5
 * @copyright  Glen Langer 2008..2011
 * @author     Glen Langer
 * @package    Xing
 * @license    GPL
 * @filesource
 */


/**
 * Table tl_xing_category 
 */
$GLOBALS['TL_DCA']['tl_xing_category'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'ctable'                      => array('tl_xing'),
		'switchToEdit'                => true,
		'enableVersioning'            => true
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('title'),
			'flag'                    => 1,
			'panelLayout'             => 'search,limit'
		),
		'label' => array
		(
			'fields'                  => array('title'),
			'format'                  => '%s' 
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset();"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_xing_category']['edit'],
				'href'                => 'table=tl_xing',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_xing_category']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_xing_category']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['tl_xing_category']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_xing_category']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif'
			)
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{title_legend},title'
	),

	// Fields
	'fields' => array
	(
		'title' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_xing_category']['title'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50')
		),
	)
);

?>