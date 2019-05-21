<?php

/**
 * Schema object for: BillToPayQueryRq
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
class QuickBooks_QBXML_Schema_Object_BillToPayQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'PayeeEntityRef ListID' => 'IDTYPE',
  'PayeeEntityRef FullName' => 'STRTYPE',
  'APAccountRef ListID' => 'IDTYPE',
  'APAccountRef FullName' => 'STRTYPE',
  'DueDate' => 'DATETYPE',
  'CurrencyFilter ListID' => 'IDTYPE',
  'CurrencyFilter FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'PayeeEntityRef ListID' => 0,
  'PayeeEntityRef FullName' => 209,
  'APAccountRef ListID' => 0,
  'APAccountRef FullName' => 209,
  'DueDate' => 0,
  'CurrencyFilter ListID' => 0,
  'CurrencyFilter FullName' => 209,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'PayeeEntityRef ListID' => true,
  'PayeeEntityRef FullName' => true,
  'APAccountRef ListID' => true,
  'APAccountRef FullName' => true,
  'DueDate' => true,
  'CurrencyFilter ListID' => true,
  'CurrencyFilter FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'PayeeEntityRef ListID' => 999.99,
  'PayeeEntityRef FullName' => 999.99,
  'APAccountRef ListID' => 999.99,
  'APAccountRef FullName' => 999.99,
  'DueDate' => 999.99,
  'CurrencyFilter ListID' => 999.99,
  'CurrencyFilter FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'PayeeEntityRef ListID' => false,
  'PayeeEntityRef FullName' => false,
  'APAccountRef ListID' => false,
  'APAccountRef FullName' => false,
  'DueDate' => false,
  'CurrencyFilter ListID' => false,
  'CurrencyFilter FullName' => false,
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
  'PayeeEntityRef',
  'PayeeEntityRef ListID',
  'PayeeEntityRef FullName',
  'APAccountRef',
  'APAccountRef ListID',
  'APAccountRef FullName',
  'DueDate',
  'CurrencyFilter',
  'CurrencyFilter ListID',
  'CurrencyFilter FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
