<?php

/**
 * Schema object for: LeadAddRq
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
class QuickBooks_QBXML_Schema_Object_LeadAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'LeadAdd FullName' => 'STRTYPE',
  'LeadAdd Status' => 'ENUMTYPE',
  'LeadAdd CompanyName' => 'STRTYPE',
  'LeadAdd MainPhone' => 'STRTYPE',
  'LeadAdd AdditionalContactRef ContactName' => 'STRTYPE',
  'LeadAdd AdditionalContactRef ContactValue' => 'STRTYPE',
  'LeadAdd Locations Location' => 'STRTYPE',
  'LeadAdd Locations LeadAddress Addr1' => 'STRTYPE',
  'LeadAdd Locations LeadAddress Addr2' => 'STRTYPE',
  'LeadAdd Locations LeadAddress Addr3' => 'STRTYPE',
  'LeadAdd Locations LeadAddress Addr4' => 'STRTYPE',
  'LeadAdd Locations LeadAddress Addr5' => 'STRTYPE',
  'LeadAdd LeadContacts Salutation' => 'STRTYPE',
  'LeadAdd LeadContacts FirstName' => 'STRTYPE',
  'LeadAdd LeadContacts MiddleName' => 'STRTYPE',
  'LeadAdd LeadContacts LastName' => 'STRTYPE',
  'LeadAdd LeadContacts JobTitle' => 'STRTYPE',
  'LeadAdd LeadContacts AdditionalContactRef ContactName' => 'STRTYPE',
  'LeadAdd LeadContacts AdditionalContactRef ContactValue' => 'STRTYPE',
  'LeadAdd LeadContacts IsPrimaryContact' => 'BOOLTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'LeadAdd FullName' => 41,
  'LeadAdd Status' => 0,
  'LeadAdd CompanyName' => 41,
  'LeadAdd MainPhone' => 21,
  'LeadAdd AdditionalContactRef ContactName' => 40,
  'LeadAdd AdditionalContactRef ContactValue' => 255,
  'LeadAdd Locations Location' => 32,
  'LeadAdd Locations LeadAddress Addr1' => 41,
  'LeadAdd Locations LeadAddress Addr2' => 41,
  'LeadAdd Locations LeadAddress Addr3' => 41,
  'LeadAdd Locations LeadAddress Addr4' => 41,
  'LeadAdd Locations LeadAddress Addr5' => 41,
  'LeadAdd LeadContacts Salutation' => 15,
  'LeadAdd LeadContacts FirstName' => 25,
  'LeadAdd LeadContacts MiddleName' => 5,
  'LeadAdd LeadContacts LastName' => 25,
  'LeadAdd LeadContacts JobTitle' => 41,
  'LeadAdd LeadContacts AdditionalContactRef ContactName' => 40,
  'LeadAdd LeadContacts AdditionalContactRef ContactValue' => 255,
  'LeadAdd LeadContacts IsPrimaryContact' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'LeadAdd FullName' => false,
  'LeadAdd Status' => true,
  'LeadAdd CompanyName' => true,
  'LeadAdd MainPhone' => true,
  'LeadAdd AdditionalContactRef ContactName' => false,
  'LeadAdd AdditionalContactRef ContactValue' => false,
  'LeadAdd Locations Location' => false,
  'LeadAdd Locations LeadAddress Addr1' => true,
  'LeadAdd Locations LeadAddress Addr2' => true,
  'LeadAdd Locations LeadAddress Addr3' => true,
  'LeadAdd Locations LeadAddress Addr4' => true,
  'LeadAdd Locations LeadAddress Addr5' => true,
  'LeadAdd LeadContacts Salutation' => true,
  'LeadAdd LeadContacts FirstName' => false,
  'LeadAdd LeadContacts MiddleName' => true,
  'LeadAdd LeadContacts LastName' => true,
  'LeadAdd LeadContacts JobTitle' => true,
  'LeadAdd LeadContacts AdditionalContactRef ContactName' => false,
  'LeadAdd LeadContacts AdditionalContactRef ContactValue' => false,
  'LeadAdd LeadContacts IsPrimaryContact' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'LeadAdd FullName' => 999.99,
  'LeadAdd Status' => 999.99,
  'LeadAdd CompanyName' => 999.99,
  'LeadAdd MainPhone' => 999.99,
  'LeadAdd AdditionalContactRef ContactName' => 999.99,
  'LeadAdd AdditionalContactRef ContactValue' => 999.99,
  'LeadAdd Locations Location' => 999.99,
  'LeadAdd Locations LeadAddress Addr1' => 999.99,
  'LeadAdd Locations LeadAddress Addr2' => 999.99,
  'LeadAdd Locations LeadAddress Addr3' => 999.99,
  'LeadAdd Locations LeadAddress Addr4' => 2.0,
  'LeadAdd Locations LeadAddress Addr5' => 6.0,
  'LeadAdd LeadContacts Salutation' => 999.99,
  'LeadAdd LeadContacts FirstName' => 999.99,
  'LeadAdd LeadContacts MiddleName' => 999.99,
  'LeadAdd LeadContacts LastName' => 999.99,
  'LeadAdd LeadContacts JobTitle' => 999.99,
  'LeadAdd LeadContacts AdditionalContactRef ContactName' => 999.99,
  'LeadAdd LeadContacts AdditionalContactRef ContactValue' => 999.99,
  'LeadAdd LeadContacts IsPrimaryContact' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'LeadAdd FullName' => false,
  'LeadAdd Status' => false,
  'LeadAdd CompanyName' => false,
  'LeadAdd MainPhone' => false,
  'LeadAdd AdditionalContactRef ContactName' => false,
  'LeadAdd AdditionalContactRef ContactValue' => false,
  'LeadAdd Locations Location' => false,
  'LeadAdd Locations LeadAddress Addr1' => false,
  'LeadAdd Locations LeadAddress Addr2' => false,
  'LeadAdd Locations LeadAddress Addr3' => false,
  'LeadAdd Locations LeadAddress Addr4' => false,
  'LeadAdd Locations LeadAddress Addr5' => false,
  'LeadAdd LeadContacts Salutation' => false,
  'LeadAdd LeadContacts FirstName' => false,
  'LeadAdd LeadContacts MiddleName' => false,
  'LeadAdd LeadContacts LastName' => false,
  'LeadAdd LeadContacts JobTitle' => false,
  'LeadAdd LeadContacts AdditionalContactRef ContactName' => false,
  'LeadAdd LeadContacts AdditionalContactRef ContactValue' => false,
  'LeadAdd LeadContacts IsPrimaryContact' => false,
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
  'LeadAdd',
  'LeadAdd FullName',
  'LeadAdd Status',
  'LeadAdd CompanyName',
  'LeadAdd MainPhone',
  'LeadAdd AdditionalContactRef ContactName',
  'LeadAdd AdditionalContactRef ContactValue',
  'LeadAdd Locations Location',
  'LeadAdd Locations LeadAddress Addr1',
  'LeadAdd Locations LeadAddress Addr2',
  'LeadAdd Locations LeadAddress Addr3',
  'LeadAdd Locations LeadAddress Addr4',
  'LeadAdd Locations LeadAddress Addr5',
  'LeadAdd LeadContacts Salutation',
  'LeadAdd LeadContacts FirstName',
  'LeadAdd LeadContacts MiddleName',
  'LeadAdd LeadContacts LastName',
  'LeadAdd LeadContacts JobTitle',
  'LeadAdd LeadContacts AdditionalContactRef ContactName',
  'LeadAdd LeadContacts AdditionalContactRef ContactValue',
  'LeadAdd LeadContacts IsPrimaryContact',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
