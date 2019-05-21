<?php

/**
 * Schema object for: BillingRateQueryRq
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
class QuickBooks_QBXML_Schema_Object_BillingRateQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ListID' => 'IDTYPE',
  'FullName' => 'STRTYPE',
  'MaxReturned' => 'INTTYPE',
  'FromModifiedDate' => 'DATETIMETYPE',
  'ToModifiedDate' => 'DATETIMETYPE',
  'NameFilter MatchCriterion' => 'ENUMTYPE',
  'NameFilter Name' => 'STRTYPE',
  'NameRangeFilter FromName' => 'STRTYPE',
  'NameRangeFilter ToName' => 'STRTYPE',
  'ItemRef ListID' => 'IDTYPE',
  'ItemRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'FullName' => 0,
  'MaxReturned' => 0,
  'FromModifiedDate' => 0,
  'ToModifiedDate' => 0,
  'NameFilter MatchCriterion' => 0,
  'NameFilter Name' => 0,
  'NameRangeFilter FromName' => 0,
  'NameRangeFilter ToName' => 0,
  'ItemRef ListID' => 0,
  'ItemRef FullName' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ListID' => false,
  'FullName' => false,
  'MaxReturned' => true,
  'FromModifiedDate' => true,
  'ToModifiedDate' => true,
  'NameFilter MatchCriterion' => false,
  'NameFilter Name' => false,
  'NameRangeFilter FromName' => true,
  'NameRangeFilter ToName' => true,
  'ItemRef ListID' => false,
  'ItemRef FullName' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ListID' => 999.99,
  'FullName' => 999.99,
  'MaxReturned' => 0.0,
  'FromModifiedDate' => 999.99,
  'ToModifiedDate' => 999.99,
  'NameFilter MatchCriterion' => 999.99,
  'NameFilter Name' => 999.99,
  'NameRangeFilter FromName' => 999.99,
  'NameRangeFilter ToName' => 999.99,
  'ItemRef ListID' => 999.99,
  'ItemRef FullName' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ListID' => true,
  'FullName' => true,
  'MaxReturned' => false,
  'FromModifiedDate' => false,
  'ToModifiedDate' => false,
  'NameFilter MatchCriterion' => false,
  'NameFilter Name' => false,
  'NameRangeFilter FromName' => false,
  'NameRangeFilter ToName' => false,
  'ItemRef ListID' => true,
  'ItemRef FullName' => true,
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
  'FullName',
  'MaxReturned',
  'FromModifiedDate',
  'ToModifiedDate',
  'NameFilter',
  'NameFilter MatchCriterion',
  'NameFilter Name',
  'NameRangeFilter',
  'NameRangeFilter FromName',
  'NameRangeFilter ToName',
  'ItemRef',
  'ItemRef ListID',
  'ItemRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
