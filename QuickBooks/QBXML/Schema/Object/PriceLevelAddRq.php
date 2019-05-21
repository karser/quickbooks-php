<?php

/**
 * Schema object for: PriceLevelAddRq
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
class QuickBooks_QBXML_Schema_Object_PriceLevelAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'PriceLevelAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'PriceLevelFixedPercentage' => 'PERCENTTYPE',
  'PriceLevelPerItem ItemRef ListID' => 'IDTYPE',
  'PriceLevelPerItem ItemRef FullName' => 'STRTYPE',
  'PriceLevelPerItem CustomPrice' => 'PRICETYPE',
  'PriceLevelPerItem CustomPricePercent' => 'PERCENTTYPE',
  'PriceLevelPerItem AdjustPercentage' => 'PERCENTTYPE',
  'PriceLevelPerItem AdjustRelativeTo' => 'ENUMTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 31,
  'IsActive' => 0,
  'PriceLevelFixedPercentage' => 0,
  'PriceLevelPerItem ItemRef ListID' => 0,
  'PriceLevelPerItem ItemRef FullName' => 0,
  'PriceLevelPerItem CustomPrice' => 0,
  'PriceLevelPerItem CustomPricePercent' => 0,
  'PriceLevelPerItem AdjustPercentage' => 0,
  'PriceLevelPerItem AdjustRelativeTo' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => true,
  'PriceLevelFixedPercentage' => false,
  'PriceLevelPerItem ItemRef ListID' => true,
  'PriceLevelPerItem ItemRef FullName' => true,
  'PriceLevelPerItem CustomPrice' => false,
  'PriceLevelPerItem CustomPricePercent' => false,
  'PriceLevelPerItem AdjustPercentage' => false,
  'PriceLevelPerItem AdjustRelativeTo' => false,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'IsActive' => 999.99,
  'PriceLevelFixedPercentage' => 999.99,
  'PriceLevelPerItem ItemRef ListID' => 999.99,
  'PriceLevelPerItem ItemRef FullName' => 999.99,
  'PriceLevelPerItem CustomPrice' => 999.99,
  'PriceLevelPerItem CustomPricePercent' => 999.99,
  'PriceLevelPerItem AdjustPercentage' => 999.99,
  'PriceLevelPerItem AdjustRelativeTo' => 999.99,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => false,
  'PriceLevelFixedPercentage' => false,
  'PriceLevelPerItem ItemRef ListID' => false,
  'PriceLevelPerItem ItemRef FullName' => false,
  'PriceLevelPerItem CustomPrice' => false,
  'PriceLevelPerItem CustomPricePercent' => false,
  'PriceLevelPerItem AdjustPercentage' => false,
  'PriceLevelPerItem AdjustRelativeTo' => false,
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
  'Name',
  'IsActive',
  'PriceLevelFixedPercentage',
  'PriceLevelPerItem',
  'PriceLevelPerItem ItemRef',
  'PriceLevelPerItem ItemRef ListID',
  'PriceLevelPerItem ItemRef FullName',
  'PriceLevelPerItem CustomPrice',
  'PriceLevelPerItem CustomPricePercent',
  'PriceLevelPerItem AdjustPercentage',
  'PriceLevelPerItem AdjustRelativeTo',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
