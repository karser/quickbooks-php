<?php

/**
 * Schema object for: SalesTaxReturnLineQueryRq
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
class QuickBooks_QBXML_Schema_Object_SalesTaxReturnLineQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TaxAgencyVendorRef ListID' => 'IDTYPE',
  'TaxAgencyVendorRef FullName' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TaxAgencyVendorRef ListID' => 0,
  'TaxAgencyVendorRef FullName' => 41,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TaxAgencyVendorRef ListID' => true,
  'TaxAgencyVendorRef FullName' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TaxAgencyVendorRef ListID' => 999.99,
  'TaxAgencyVendorRef FullName' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TaxAgencyVendorRef ListID' => false,
  'TaxAgencyVendorRef FullName' => false,
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
  'TaxAgencyVendorRef',
  'TaxAgencyVendorRef ListID',
  'TaxAgencyVendorRef FullName'
];
			
		return $paths;
	}
}
