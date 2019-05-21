<?php

/**
 * Schema object for: InventorySiteAddRq
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
class QuickBooks_QBXML_Schema_Object_InventorySiteAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'InventorySiteAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'ParentSiteRef ListID' => 'IDTYPE',
  'ParentSiteRef FullName' => 'STRTYPE',
  'SiteDesc' => 'STRTYPE',
  'Contact' => 'STRTYPE',
  'Phone' => 'STRTYPE',
  'Fax' => 'STRTYPE',
  'Email' => 'STRTYPE',
  'SiteAddress Addr1' => 'STRTYPE',
  'SiteAddress Addr2' => 'STRTYPE',
  'SiteAddress Addr3' => 'STRTYPE',
  'SiteAddress Addr4' => 'STRTYPE',
  'SiteAddress Addr5' => 'STRTYPE',
  'SiteAddress City' => 'STRTYPE',
  'SiteAddress State' => 'STRTYPE',
  'SiteAddress PostalCode' => 'STRTYPE',
  'SiteAddress Country' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 31,
  'IsActive' => 0,
  'ParentSiteRef ListID' => 0,
  'ParentSiteRef FullName' => 31,
  'SiteDesc' => 100,
  'Contact' => 41,
  'Phone' => 21,
  'Fax' => 21,
  'Email' => 1023,
  'SiteAddress Addr1' => 41,
  'SiteAddress Addr2' => 41,
  'SiteAddress Addr3' => 41,
  'SiteAddress Addr4' => 41,
  'SiteAddress Addr5' => 41,
  'SiteAddress City' => 31,
  'SiteAddress State' => 21,
  'SiteAddress PostalCode' => 13,
  'SiteAddress Country' => 31,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => true,
  'ParentSiteRef ListID' => true,
  'ParentSiteRef FullName' => true,
  'SiteDesc' => true,
  'Contact' => true,
  'Phone' => true,
  'Fax' => true,
  'Email' => true,
  'SiteAddress Addr1' => true,
  'SiteAddress Addr2' => true,
  'SiteAddress Addr3' => true,
  'SiteAddress Addr4' => true,
  'SiteAddress Addr5' => true,
  'SiteAddress City' => true,
  'SiteAddress State' => true,
  'SiteAddress PostalCode' => true,
  'SiteAddress Country' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'IsActive' => 999.99,
  'ParentSiteRef ListID' => 999.99,
  'ParentSiteRef FullName' => 999.99,
  'SiteDesc' => 999.99,
  'Contact' => 999.99,
  'Phone' => 999.99,
  'Fax' => 999.99,
  'Email' => 999.99,
  'SiteAddress Addr1' => 999.99,
  'SiteAddress Addr2' => 999.99,
  'SiteAddress Addr3' => 999.99,
  'SiteAddress Addr4' => 2.0,
  'SiteAddress Addr5' => 6.0,
  'SiteAddress City' => 999.99,
  'SiteAddress State' => 999.99,
  'SiteAddress PostalCode' => 999.99,
  'SiteAddress Country' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => false,
  'ParentSiteRef ListID' => false,
  'ParentSiteRef FullName' => false,
  'SiteDesc' => false,
  'Contact' => false,
  'Phone' => false,
  'Fax' => false,
  'Email' => false,
  'SiteAddress Addr1' => false,
  'SiteAddress Addr2' => false,
  'SiteAddress Addr3' => false,
  'SiteAddress Addr4' => false,
  'SiteAddress Addr5' => false,
  'SiteAddress City' => false,
  'SiteAddress State' => false,
  'SiteAddress PostalCode' => false,
  'SiteAddress Country' => false,
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
  'ParentSiteRef',
  'ParentSiteRef ListID',
  'ParentSiteRef FullName',
  'SiteDesc',
  'Contact',
  'Phone',
  'Fax',
  'Email',
  'SiteAddress',
  'SiteAddress Addr1',
  'SiteAddress Addr2',
  'SiteAddress Addr3',
  'SiteAddress Addr4',
  'SiteAddress Addr5',
  'SiteAddress City',
  'SiteAddress State',
  'SiteAddress PostalCode',
  'SiteAddress Country',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
