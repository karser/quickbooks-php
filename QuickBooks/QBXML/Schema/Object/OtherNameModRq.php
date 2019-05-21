<?php

/**
 * Schema object for: OtherNameModRq
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
class QuickBooks_QBXML_Schema_Object_OtherNameModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'OtherNameMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ListID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'CompanyName' => 'STRTYPE',
  'Salutation' => 'STRTYPE',
  'FirstName' => 'STRTYPE',
  'MiddleName' => 'STRTYPE',
  'LastName' => 'STRTYPE',
  'OtherNameAddress Addr1' => 'STRTYPE',
  'OtherNameAddress Addr2' => 'STRTYPE',
  'OtherNameAddress Addr3' => 'STRTYPE',
  'OtherNameAddress Addr4' => 'STRTYPE',
  'OtherNameAddress Addr5' => 'STRTYPE',
  'OtherNameAddress City' => 'STRTYPE',
  'OtherNameAddress State' => 'STRTYPE',
  'OtherNameAddress PostalCode' => 'STRTYPE',
  'OtherNameAddress Country' => 'STRTYPE',
  'OtherNameAddress Note' => 'STRTYPE',
  'Phone' => 'STRTYPE',
  'AltPhone' => 'STRTYPE',
  'Fax' => 'STRTYPE',
  'Email' => 'STRTYPE',
  'Contact' => 'STRTYPE',
  'AltContact' => 'STRTYPE',
  'AccountNumber' => 'STRTYPE',
  'Notes' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'EditSequence' => 16,
  'Name' => 41,
  'IsActive' => 0,
  'CompanyName' => 41,
  'Salutation' => 15,
  'FirstName' => 25,
  'MiddleName' => 5,
  'LastName' => 25,
  'OtherNameAddress Addr1' => 41,
  'OtherNameAddress Addr2' => 41,
  'OtherNameAddress Addr3' => 41,
  'OtherNameAddress Addr4' => 41,
  'OtherNameAddress Addr5' => 41,
  'OtherNameAddress City' => 31,
  'OtherNameAddress State' => 21,
  'OtherNameAddress PostalCode' => 13,
  'OtherNameAddress Country' => 31,
  'OtherNameAddress Note' => 41,
  'Phone' => 21,
  'AltPhone' => 21,
  'Fax' => 21,
  'Email' => 1023,
  'Contact' => 41,
  'AltContact' => 41,
  'AccountNumber' => 99,
  'Notes' => 4095,
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
  'CompanyName' => true,
  'Salutation' => true,
  'FirstName' => true,
  'MiddleName' => true,
  'LastName' => true,
  'OtherNameAddress Addr1' => true,
  'OtherNameAddress Addr2' => true,
  'OtherNameAddress Addr3' => true,
  'OtherNameAddress Addr4' => true,
  'OtherNameAddress Addr5' => true,
  'OtherNameAddress City' => true,
  'OtherNameAddress State' => true,
  'OtherNameAddress PostalCode' => true,
  'OtherNameAddress Country' => true,
  'OtherNameAddress Note' => true,
  'Phone' => true,
  'AltPhone' => true,
  'Fax' => true,
  'Email' => true,
  'Contact' => true,
  'AltContact' => true,
  'AccountNumber' => true,
  'Notes' => true,
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
  'CompanyName' => 999.99,
  'Salutation' => 999.99,
  'FirstName' => 999.99,
  'MiddleName' => 999.99,
  'LastName' => 999.99,
  'OtherNameAddress Addr1' => 999.99,
  'OtherNameAddress Addr2' => 999.99,
  'OtherNameAddress Addr3' => 999.99,
  'OtherNameAddress Addr4' => 2.0,
  'OtherNameAddress Addr5' => 6.0,
  'OtherNameAddress City' => 999.99,
  'OtherNameAddress State' => 999.99,
  'OtherNameAddress PostalCode' => 999.99,
  'OtherNameAddress Country' => 999.99,
  'OtherNameAddress Note' => 6.0,
  'Phone' => 999.99,
  'AltPhone' => 999.99,
  'Fax' => 999.99,
  'Email' => 999.99,
  'Contact' => 999.99,
  'AltContact' => 999.99,
  'AccountNumber' => 999.99,
  'Notes' => 3.0,
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
  'CompanyName' => false,
  'Salutation' => false,
  'FirstName' => false,
  'MiddleName' => false,
  'LastName' => false,
  'OtherNameAddress Addr1' => false,
  'OtherNameAddress Addr2' => false,
  'OtherNameAddress Addr3' => false,
  'OtherNameAddress Addr4' => false,
  'OtherNameAddress Addr5' => false,
  'OtherNameAddress City' => false,
  'OtherNameAddress State' => false,
  'OtherNameAddress PostalCode' => false,
  'OtherNameAddress Country' => false,
  'OtherNameAddress Note' => false,
  'Phone' => false,
  'AltPhone' => false,
  'Fax' => false,
  'Email' => false,
  'Contact' => false,
  'AltContact' => false,
  'AccountNumber' => false,
  'Notes' => false,
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
  'CompanyName',
  'Salutation',
  'FirstName',
  'MiddleName',
  'LastName',
  'OtherNameAddress',
  'OtherNameAddress Addr1',
  'OtherNameAddress Addr2',
  'OtherNameAddress Addr3',
  'OtherNameAddress Addr4',
  'OtherNameAddress Addr5',
  'OtherNameAddress City',
  'OtherNameAddress State',
  'OtherNameAddress PostalCode',
  'OtherNameAddress Country',
  'OtherNameAddress Note',
  'Phone',
  'AltPhone',
  'Fax',
  'Email',
  'Contact',
  'AltContact',
  'AccountNumber',
  'Notes',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
