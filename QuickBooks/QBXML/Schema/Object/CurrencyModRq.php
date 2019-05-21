<?php

/**
 * Schema object for: CurrencyModRq
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
class QuickBooks_QBXML_Schema_Object_CurrencyModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'CurrencyMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ListID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'CurrencyCode' => 'STRTYPE',
  'CurrencyFormat ThousandSeparator' => 'ENUMTYPE',
  'CurrencyFormat ThousandSeparatorGrouping' => 'ENUMTYPE',
  'CurrencyFormat DecimalPlaces' => 'ENUMTYPE',
  'CurrencyFormat DecimalSeparator' => 'ENUMTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'EditSequence' => 16,
  'Name' => 64,
  'IsActive' => 0,
  'CurrencyCode' => 3,
  'CurrencyFormat ThousandSeparator' => 0,
  'CurrencyFormat ThousandSeparatorGrouping' => 0,
  'CurrencyFormat DecimalPlaces' => 0,
  'CurrencyFormat DecimalSeparator' => 0,
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
  'IsActive' => true,
  'CurrencyCode' => true,
  'CurrencyFormat ThousandSeparator' => true,
  'CurrencyFormat ThousandSeparatorGrouping' => true,
  'CurrencyFormat DecimalPlaces' => true,
  'CurrencyFormat DecimalSeparator' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ListID' => 999.99,
  'EditSequence' => 999.99,
  'Name' => 999.99,
  'IsActive' => 999.99,
  'CurrencyCode' => 999.99,
  'CurrencyFormat ThousandSeparator' => 999.99,
  'CurrencyFormat ThousandSeparatorGrouping' => 999.99,
  'CurrencyFormat DecimalPlaces' => 999.99,
  'CurrencyFormat DecimalSeparator' => 999.99,
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
  'IsActive' => false,
  'CurrencyCode' => false,
  'CurrencyFormat ThousandSeparator' => false,
  'CurrencyFormat ThousandSeparatorGrouping' => false,
  'CurrencyFormat DecimalPlaces' => false,
  'CurrencyFormat DecimalSeparator' => false,
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
  'IsActive',
  'CurrencyCode',
  'CurrencyFormat',
  'CurrencyFormat ThousandSeparator',
  'CurrencyFormat ThousandSeparatorGrouping',
  'CurrencyFormat DecimalPlaces',
  'CurrencyFormat DecimalSeparator',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
