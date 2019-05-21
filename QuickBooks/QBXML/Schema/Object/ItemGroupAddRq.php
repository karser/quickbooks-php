<?php

/**
 * Schema object for: ItemGroupAddRq
 * 
 * @author "Keith Palmer Jr." <Keith@ConsoliByte.com>
 * @license LICENSE.txt
 * 
 * @package QuickBooks
 * @subpackage QBXML
 */

/**
 * 
 */
require_once 'QuickBooks.php';

/**
 * 
 */
require_once 'QuickBooks/QBXML/Schema/Object.php';

/**
 * 
 */
class QuickBooks_QBXML_Schema_Object_ItemGroupAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ItemGroupAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'BarCode BarCodeValue' => 'STRTYPE',
  'BarCode AssignEvenIfUsed' => 'BOOLTYPE',
  'BarCode AllowOverride' => 'BOOLTYPE',
  'IsActive' => 'BOOLTYPE',
  'ItemDesc' => 'STRTYPE',
  'UnitOfMeasureSetRef ListID' => 'IDTYPE',
  'UnitOfMeasureSetRef FullName' => 'STRTYPE',
  'IsPrintItemsInGroup' => 'BOOLTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'ItemGroupLine ItemRef ListID' => 'IDTYPE',
  'ItemGroupLine ItemRef FullName' => 'STRTYPE',
  'ItemGroupLine Quantity' => 'QUANTYPE',
  'ItemGroupLine UnitOfMeasure' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 31,
  'BarCode BarCodeValue' => 50,
  'BarCode AssignEvenIfUsed' => 0,
  'BarCode AllowOverride' => 0,
  'IsActive' => 0,
  'ItemDesc' => 4095,
  'UnitOfMeasureSetRef ListID' => 0,
  'UnitOfMeasureSetRef FullName' => 31,
  'IsPrintItemsInGroup' => 0,
  'ExternalGUID' => 0,
  'ItemGroupLine ItemRef ListID' => 0,
  'ItemGroupLine ItemRef FullName' => 31,
  'ItemGroupLine Quantity' => 0,
  'ItemGroupLine UnitOfMeasure' => 31,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'BarCode BarCodeValue' => true,
  'BarCode AssignEvenIfUsed' => true,
  'BarCode AllowOverride' => true,
  'IsActive' => true,
  'ItemDesc' => true,
  'UnitOfMeasureSetRef ListID' => true,
  'UnitOfMeasureSetRef FullName' => true,
  'IsPrintItemsInGroup' => true,
  'ExternalGUID' => true,
  'ItemGroupLine ItemRef ListID' => true,
  'ItemGroupLine ItemRef FullName' => true,
  'ItemGroupLine Quantity' => true,
  'ItemGroupLine UnitOfMeasure' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'BarCode BarCodeValue' => 999.99,
  'BarCode AssignEvenIfUsed' => 999.99,
  'BarCode AllowOverride' => 999.99,
  'IsActive' => 999.99,
  'ItemDesc' => 999.99,
  'UnitOfMeasureSetRef ListID' => 999.99,
  'UnitOfMeasureSetRef FullName' => 999.99,
  'IsPrintItemsInGroup' => 999.99,
  'ExternalGUID' => 8.0,
  'ItemGroupLine ItemRef ListID' => 999.99,
  'ItemGroupLine ItemRef FullName' => 999.99,
  'ItemGroupLine Quantity' => 999.99,
  'ItemGroupLine UnitOfMeasure' => 7.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'BarCode BarCodeValue' => false,
  'BarCode AssignEvenIfUsed' => false,
  'BarCode AllowOverride' => false,
  'IsActive' => false,
  'ItemDesc' => false,
  'UnitOfMeasureSetRef ListID' => false,
  'UnitOfMeasureSetRef FullName' => false,
  'IsPrintItemsInGroup' => false,
  'ExternalGUID' => false,
  'ItemGroupLine ItemRef ListID' => false,
  'ItemGroupLine ItemRef FullName' => false,
  'ItemGroupLine Quantity' => false,
  'ItemGroupLine UnitOfMeasure' => false,
  'IncludeRetElement' => true,
);
			
		return $paths;
	}
	
	/*
	abstract protected function &_inLocalePaths()
	{
		static $paths = array(
			'FirstName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ), 
			'LastName' => array( 'QBD', 'QBCA', 'QBUK', 'QBAU' ),
			);
		
		return $paths;
	}
	*/
	
	protected function &_reorderPathsPaths()
	{
		static $paths = [
  'Name',
  'BarCode',
  'BarCode BarCodeValue',
  'BarCode AssignEvenIfUsed',
  'BarCode AllowOverride',
  'IsActive',
  'ItemDesc',
  'UnitOfMeasureSetRef',
  'UnitOfMeasureSetRef ListID',
  'UnitOfMeasureSetRef FullName',
  'IsPrintItemsInGroup',
  'ExternalGUID',
  'ItemGroupLine',
  'ItemGroupLine ItemRef',
  'ItemGroupLine ItemRef ListID',
  'ItemGroupLine ItemRef FullName',
  'ItemGroupLine Quantity',
  'ItemGroupLine UnitOfMeasure',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
