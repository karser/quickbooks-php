<?php

/**
 * Schema object for: LeadModRq
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
class QuickBooks_QBXML_Schema_Object_LeadModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'LeadMod ListID' => 'IDTYPE',
  'LeadMod EditSequence' => 'STRTYPE',
  'LeadMod FullName' => 'STRTYPE',
  'LeadMod Status' => 'ENUMTYPE',
  'LeadMod CompanyName' => 'STRTYPE',
  'LeadMod MainPhone' => 'STRTYPE',
  'LeadMod AdditionalContactRef ContactName' => 'STRTYPE',
  'LeadMod AdditionalContactRef ContactValue' => 'STRTYPE',
  'LeadMod LocationsMod LocationID' => 'INTTYPE',
  'LeadMod LocationsMod Location' => 'STRTYPE',
  'LeadMod LocationsMod LeadAddress Addr1' => 'STRTYPE',
  'LeadMod LocationsMod LeadAddress Addr2' => 'STRTYPE',
  'LeadMod LocationsMod LeadAddress Addr3' => 'STRTYPE',
  'LeadMod LocationsMod LeadAddress Addr4' => 'STRTYPE',
  'LeadMod LocationsMod LeadAddress Addr5' => 'STRTYPE',
  'LeadMod LeadContactsMod LeadContactID' => 'INTTYPE',
  'LeadMod LeadContactsMod Salutation' => 'STRTYPE',
  'LeadMod LeadContactsMod FirstName' => 'STRTYPE',
  'LeadMod LeadContactsMod MiddleName' => 'STRTYPE',
  'LeadMod LeadContactsMod LastName' => 'STRTYPE',
  'LeadMod LeadContactsMod JobTitle' => 'STRTYPE',
  'LeadMod LeadContactsMod AdditionalContactRef ContactName' => 'STRTYPE',
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue' => 'STRTYPE',
  'LeadMod LeadContactsMod IsPrimaryContact' => 'BOOLTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'LeadMod ListID' => 0,
  'LeadMod EditSequence' => 16,
  'LeadMod FullName' => 41,
  'LeadMod Status' => 0,
  'LeadMod CompanyName' => 41,
  'LeadMod MainPhone' => 21,
  'LeadMod AdditionalContactRef ContactName' => 40,
  'LeadMod AdditionalContactRef ContactValue' => 255,
  'LeadMod LocationsMod LocationID' => 0,
  'LeadMod LocationsMod Location' => 32,
  'LeadMod LocationsMod LeadAddress Addr1' => 41,
  'LeadMod LocationsMod LeadAddress Addr2' => 41,
  'LeadMod LocationsMod LeadAddress Addr3' => 41,
  'LeadMod LocationsMod LeadAddress Addr4' => 41,
  'LeadMod LocationsMod LeadAddress Addr5' => 41,
  'LeadMod LeadContactsMod LeadContactID' => 0,
  'LeadMod LeadContactsMod Salutation' => 15,
  'LeadMod LeadContactsMod FirstName' => 25,
  'LeadMod LeadContactsMod MiddleName' => 5,
  'LeadMod LeadContactsMod LastName' => 25,
  'LeadMod LeadContactsMod JobTitle' => 41,
  'LeadMod LeadContactsMod AdditionalContactRef ContactName' => 40,
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue' => 255,
  'LeadMod LeadContactsMod IsPrimaryContact' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'LeadMod ListID' => false,
  'LeadMod EditSequence' => false,
  'LeadMod FullName' => false,
  'LeadMod Status' => true,
  'LeadMod CompanyName' => true,
  'LeadMod MainPhone' => true,
  'LeadMod AdditionalContactRef ContactName' => false,
  'LeadMod AdditionalContactRef ContactValue' => false,
  'LeadMod LocationsMod LocationID' => false,
  'LeadMod LocationsMod Location' => false,
  'LeadMod LocationsMod LeadAddress Addr1' => true,
  'LeadMod LocationsMod LeadAddress Addr2' => true,
  'LeadMod LocationsMod LeadAddress Addr3' => true,
  'LeadMod LocationsMod LeadAddress Addr4' => true,
  'LeadMod LocationsMod LeadAddress Addr5' => true,
  'LeadMod LeadContactsMod LeadContactID' => false,
  'LeadMod LeadContactsMod Salutation' => true,
  'LeadMod LeadContactsMod FirstName' => false,
  'LeadMod LeadContactsMod MiddleName' => true,
  'LeadMod LeadContactsMod LastName' => true,
  'LeadMod LeadContactsMod JobTitle' => true,
  'LeadMod LeadContactsMod AdditionalContactRef ContactName' => false,
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue' => false,
  'LeadMod LeadContactsMod IsPrimaryContact' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'LeadMod ListID' => 999.99,
  'LeadMod EditSequence' => 999.99,
  'LeadMod FullName' => 999.99,
  'LeadMod Status' => 999.99,
  'LeadMod CompanyName' => 999.99,
  'LeadMod MainPhone' => 999.99,
  'LeadMod AdditionalContactRef ContactName' => 999.99,
  'LeadMod AdditionalContactRef ContactValue' => 999.99,
  'LeadMod LocationsMod LocationID' => 999.99,
  'LeadMod LocationsMod Location' => 999.99,
  'LeadMod LocationsMod LeadAddress Addr1' => 999.99,
  'LeadMod LocationsMod LeadAddress Addr2' => 999.99,
  'LeadMod LocationsMod LeadAddress Addr3' => 999.99,
  'LeadMod LocationsMod LeadAddress Addr4' => 2.0,
  'LeadMod LocationsMod LeadAddress Addr5' => 6.0,
  'LeadMod LeadContactsMod LeadContactID' => 999.99,
  'LeadMod LeadContactsMod Salutation' => 999.99,
  'LeadMod LeadContactsMod FirstName' => 999.99,
  'LeadMod LeadContactsMod MiddleName' => 999.99,
  'LeadMod LeadContactsMod LastName' => 999.99,
  'LeadMod LeadContactsMod JobTitle' => 999.99,
  'LeadMod LeadContactsMod AdditionalContactRef ContactName' => 999.99,
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue' => 999.99,
  'LeadMod LeadContactsMod IsPrimaryContact' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'LeadMod ListID' => false,
  'LeadMod EditSequence' => false,
  'LeadMod FullName' => false,
  'LeadMod Status' => false,
  'LeadMod CompanyName' => false,
  'LeadMod MainPhone' => false,
  'LeadMod AdditionalContactRef ContactName' => false,
  'LeadMod AdditionalContactRef ContactValue' => false,
  'LeadMod LocationsMod LocationID' => false,
  'LeadMod LocationsMod Location' => false,
  'LeadMod LocationsMod LeadAddress Addr1' => false,
  'LeadMod LocationsMod LeadAddress Addr2' => false,
  'LeadMod LocationsMod LeadAddress Addr3' => false,
  'LeadMod LocationsMod LeadAddress Addr4' => false,
  'LeadMod LocationsMod LeadAddress Addr5' => false,
  'LeadMod LeadContactsMod LeadContactID' => false,
  'LeadMod LeadContactsMod Salutation' => false,
  'LeadMod LeadContactsMod FirstName' => false,
  'LeadMod LeadContactsMod MiddleName' => false,
  'LeadMod LeadContactsMod LastName' => false,
  'LeadMod LeadContactsMod JobTitle' => false,
  'LeadMod LeadContactsMod AdditionalContactRef ContactName' => false,
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue' => false,
  'LeadMod LeadContactsMod IsPrimaryContact' => false,
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
  'LeadMod',
  'LeadMod ListID',
  'LeadMod EditSequence',
  'LeadMod FullName',
  'LeadMod Status',
  'LeadMod CompanyName',
  'LeadMod MainPhone',
  'LeadMod AdditionalContactRef ContactName',
  'LeadMod AdditionalContactRef ContactValue',
  'LeadMod LocationsMod LocationID',
  'LeadMod LocationsMod Location',
  'LeadMod LocationsMod LeadAddress Addr1',
  'LeadMod LocationsMod LeadAddress Addr2',
  'LeadMod LocationsMod LeadAddress Addr3',
  'LeadMod LocationsMod LeadAddress Addr4',
  'LeadMod LocationsMod LeadAddress Addr5',
  'LeadMod LeadContactsMod LeadContactID',
  'LeadMod LeadContactsMod Salutation',
  'LeadMod LeadContactsMod FirstName',
  'LeadMod LeadContactsMod MiddleName',
  'LeadMod LeadContactsMod LastName',
  'LeadMod LeadContactsMod JobTitle',
  'LeadMod LeadContactsMod AdditionalContactRef ContactName',
  'LeadMod LeadContactsMod AdditionalContactRef ContactValue',
  'LeadMod LeadContactsMod IsPrimaryContact',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
