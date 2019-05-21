<?php

/**
 * Schema object for: BillingRateAddRq
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
class QuickBooks_QBXML_Schema_Object_BillingRateAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'BillingRateAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'FixedBillingRate' => 'PRICETYPE',
  'BillingRatePerItem ItemRef ListID' => 'IDTYPE',
  'BillingRatePerItem ItemRef FullName' => 'STRTYPE',
  'BillingRatePerItem CustomRate' => 'PRICETYPE',
  'BillingRatePerItem CustomRatePercent' => 'PERCENTTYPE',
  'BillingRatePerItem AdjustPercentage' => 'PERCENTTYPE',
  'BillingRatePerItem AdjustBillingRateRelativeTo' => 'ENUMTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 31,
  'FixedBillingRate' => 0,
  'BillingRatePerItem ItemRef ListID' => 0,
  'BillingRatePerItem ItemRef FullName' => 0,
  'BillingRatePerItem CustomRate' => 0,
  'BillingRatePerItem CustomRatePercent' => 0,
  'BillingRatePerItem AdjustPercentage' => 0,
  'BillingRatePerItem AdjustBillingRateRelativeTo' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'FixedBillingRate' => false,
  'BillingRatePerItem ItemRef ListID' => true,
  'BillingRatePerItem ItemRef FullName' => true,
  'BillingRatePerItem CustomRate' => false,
  'BillingRatePerItem CustomRatePercent' => false,
  'BillingRatePerItem AdjustPercentage' => false,
  'BillingRatePerItem AdjustBillingRateRelativeTo' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'FixedBillingRate' => 999.99,
  'BillingRatePerItem ItemRef ListID' => 999.99,
  'BillingRatePerItem ItemRef FullName' => 999.99,
  'BillingRatePerItem CustomRate' => 999.99,
  'BillingRatePerItem CustomRatePercent' => 999.99,
  'BillingRatePerItem AdjustPercentage' => 999.99,
  'BillingRatePerItem AdjustBillingRateRelativeTo' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'FixedBillingRate' => false,
  'BillingRatePerItem ItemRef ListID' => false,
  'BillingRatePerItem ItemRef FullName' => false,
  'BillingRatePerItem CustomRate' => false,
  'BillingRatePerItem CustomRatePercent' => false,
  'BillingRatePerItem AdjustPercentage' => false,
  'BillingRatePerItem AdjustBillingRateRelativeTo' => false,
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
  'FixedBillingRate',
  'BillingRatePerItem',
  'BillingRatePerItem ItemRef',
  'BillingRatePerItem ItemRef ListID',
  'BillingRatePerItem ItemRef FullName',
  'BillingRatePerItem CustomRate',
  'BillingRatePerItem CustomRatePercent',
  'BillingRatePerItem AdjustPercentage',
  'BillingRatePerItem AdjustBillingRateRelativeTo',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
