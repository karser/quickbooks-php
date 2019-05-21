<?php

/**
 * Schema object for: SpecialAccountAddRq
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
class QuickBooks_QBXML_Schema_Object_SpecialAccountAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'SpecialAccountAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'SpecialAccountType' => 'ENUMTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'SpecialAccountType' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 64,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'SpecialAccountType' => false,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'SpecialAccountType' => 999.99,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'SpecialAccountType' => false,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => false,
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
  'SpecialAccountType',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
