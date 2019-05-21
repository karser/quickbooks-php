<?php

/**
 * Schema object for: ItemSalesTaxModRq
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
class QuickBooks_QBXML_Schema_Object_ItemSalesTaxModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ItemSalesTaxMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ListID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'Name' => 'STRTYPE',
  'BarCode BarCodeValue' => 'STRTYPE',
  'BarCode AssignEvenIfUsed' => 'BOOLTYPE',
  'BarCode AllowOverride' => 'BOOLTYPE',
  'IsActive' => 'BOOLTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'ItemDesc' => 'STRTYPE',
  'TaxRate' => 'PERCENTTYPE',
  'TaxVendorRef ListID' => 'IDTYPE',
  'TaxVendorRef FullName' => 'STRTYPE',
  'SalesTaxReturnLineRef ListID' => 'IDTYPE',
  'SalesTaxReturnLineRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'EditSequence' => 16,
  'Name' => 31,
  'BarCode BarCodeValue' => 50,
  'BarCode AssignEvenIfUsed' => 0,
  'BarCode AllowOverride' => 0,
  'IsActive' => 0,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 159,
  'ItemDesc' => 4095,
  'TaxRate' => 0,
  'TaxVendorRef ListID' => 0,
  'TaxVendorRef FullName' => 159,
  'SalesTaxReturnLineRef ListID' => 0,
  'SalesTaxReturnLineRef FullName' => 159,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ListID' => false,
  'EditSequence' => false,
  'Name' => true,
  'BarCode BarCodeValue' => true,
  'BarCode AssignEvenIfUsed' => true,
  'BarCode AllowOverride' => true,
  'IsActive' => true,
  'ClassRef ListID' => false,
  'ClassRef FullName' => true,
  'ItemDesc' => true,
  'TaxRate' => true,
  'TaxVendorRef ListID' => false,
  'TaxVendorRef FullName' => true,
  'SalesTaxReturnLineRef ListID' => false,
  'SalesTaxReturnLineRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ListID' => 999.99,
  'EditSequence' => 999.99,
  'Name' => 999.99,
  'BarCode BarCodeValue' => 999.99,
  'BarCode AssignEvenIfUsed' => 999.99,
  'BarCode AllowOverride' => 999.99,
  'IsActive' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'ItemDesc' => 999.99,
  'TaxRate' => 999.99,
  'TaxVendorRef ListID' => 999.99,
  'TaxVendorRef FullName' => 999.99,
  'SalesTaxReturnLineRef ListID' => 999.99,
  'SalesTaxReturnLineRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ListID' => false,
  'EditSequence' => false,
  'Name' => false,
  'BarCode BarCodeValue' => false,
  'BarCode AssignEvenIfUsed' => false,
  'BarCode AllowOverride' => false,
  'IsActive' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'ItemDesc' => false,
  'TaxRate' => false,
  'TaxVendorRef ListID' => false,
  'TaxVendorRef FullName' => false,
  'SalesTaxReturnLineRef ListID' => false,
  'SalesTaxReturnLineRef FullName' => false,
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
  'ListID',
  'EditSequence',
  'Name',
  'BarCode',
  'BarCode BarCodeValue',
  'BarCode AssignEvenIfUsed',
  'BarCode AllowOverride',
  'IsActive',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'ItemDesc',
  'TaxRate',
  'TaxVendorRef',
  'TaxVendorRef ListID',
  'TaxVendorRef FullName',
  'SalesTaxReturnLineRef',
  'SalesTaxReturnLineRef ListID',
  'SalesTaxReturnLineRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
