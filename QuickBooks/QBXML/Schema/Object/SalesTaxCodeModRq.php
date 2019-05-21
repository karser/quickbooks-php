<?php

/**
 * Schema object for: SalesTaxCodeModRq
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
class QuickBooks_QBXML_Schema_Object_SalesTaxCodeModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'SalesTaxCodeMod ListID' => 'IDTYPE',
  'SalesTaxCodeMod EditSequence' => 'STRTYPE',
  'SalesTaxCodeMod Name' => 'STRTYPE',
  'SalesTaxCodeMod IsActive' => 'BOOLTYPE',
  'SalesTaxCodeMod IsTaxable' => 'BOOLTYPE',
  'SalesTaxCodeMod Desc' => 'STRTYPE',
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID' => 'IDTYPE',
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName' => 'STRTYPE',
  'SalesTaxCodeMod ItemSalesTaxRef ListID' => 'IDTYPE',
  'SalesTaxCodeMod ItemSalesTaxRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'SalesTaxCodeMod ListID' => 0,
  'SalesTaxCodeMod EditSequence' => 16,
  'SalesTaxCodeMod Name' => 3,
  'SalesTaxCodeMod IsActive' => 0,
  'SalesTaxCodeMod IsTaxable' => 0,
  'SalesTaxCodeMod Desc' => 31,
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID' => 0,
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName' => 31,
  'SalesTaxCodeMod ItemSalesTaxRef ListID' => 0,
  'SalesTaxCodeMod ItemSalesTaxRef FullName' => 31,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'SalesTaxCodeMod ListID' => false,
  'SalesTaxCodeMod EditSequence' => false,
  'SalesTaxCodeMod Name' => true,
  'SalesTaxCodeMod IsActive' => true,
  'SalesTaxCodeMod IsTaxable' => true,
  'SalesTaxCodeMod Desc' => true,
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID' => false,
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName' => true,
  'SalesTaxCodeMod ItemSalesTaxRef ListID' => false,
  'SalesTaxCodeMod ItemSalesTaxRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'SalesTaxCodeMod ListID' => 999.99,
  'SalesTaxCodeMod EditSequence' => 999.99,
  'SalesTaxCodeMod Name' => 999.99,
  'SalesTaxCodeMod IsActive' => 999.99,
  'SalesTaxCodeMod IsTaxable' => 999.99,
  'SalesTaxCodeMod Desc' => 999.99,
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID' => 999.99,
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName' => 999.99,
  'SalesTaxCodeMod ItemSalesTaxRef ListID' => 999.99,
  'SalesTaxCodeMod ItemSalesTaxRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'SalesTaxCodeMod ListID' => false,
  'SalesTaxCodeMod EditSequence' => false,
  'SalesTaxCodeMod Name' => false,
  'SalesTaxCodeMod IsActive' => false,
  'SalesTaxCodeMod IsTaxable' => false,
  'SalesTaxCodeMod Desc' => false,
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID' => false,
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName' => false,
  'SalesTaxCodeMod ItemSalesTaxRef ListID' => false,
  'SalesTaxCodeMod ItemSalesTaxRef FullName' => false,
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
  'SalesTaxCodeMod',
  'SalesTaxCodeMod ListID',
  'SalesTaxCodeMod EditSequence',
  'SalesTaxCodeMod Name',
  'SalesTaxCodeMod IsActive',
  'SalesTaxCodeMod IsTaxable',
  'SalesTaxCodeMod Desc',
  'SalesTaxCodeMod ItemPurchaseTaxRef ListID',
  'SalesTaxCodeMod ItemPurchaseTaxRef FullName',
  'SalesTaxCodeMod ItemSalesTaxRef ListID',
  'SalesTaxCodeMod ItemSalesTaxRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
