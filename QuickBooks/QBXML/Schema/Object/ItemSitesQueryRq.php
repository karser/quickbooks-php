<?php

/**
 * Schema object for: ItemSitesQueryRq
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
class QuickBooks_QBXML_Schema_Object_ItemSitesQueryRq extends QuickBooks_QBXML_Schema_Object
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
  'ItemTypeFilter' => 'ENUMTYPE',
  'ItemSiteFilter ItemFilter ListID' => 'IDTYPE',
  'ItemSiteFilter ItemFilter FullName' => 'STRTYPE',
  'ItemSiteFilter ItemFilter ListIDWithChildren' => 'IDTYPE',
  'ItemSiteFilter ItemFilter FullNameWithChildren' => 'STRTYPE',
  'ItemSiteFilter SiteFilter ListID' => 'IDTYPE',
  'ItemSiteFilter SiteFilter FullName' => 'STRTYPE',
  'MaxReturned' => 'INTTYPE',
  'ActiveStatus' => 'ENUMTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'ItemTypeFilter' => 0,
  'ItemSiteFilter ItemFilter ListID' => 0,
  'ItemSiteFilter ItemFilter FullName' => 159,
  'ItemSiteFilter ItemFilter ListIDWithChildren' => 0,
  'ItemSiteFilter ItemFilter FullNameWithChildren' => 159,
  'ItemSiteFilter SiteFilter ListID' => 0,
  'ItemSiteFilter SiteFilter FullName' => 159,
  'MaxReturned' => 0,
  'ActiveStatus' => 0,
  'IncludeRetElement' => 0,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ListID' => true,
  'ItemTypeFilter' => true,
  'ItemSiteFilter ItemFilter ListID' => true,
  'ItemSiteFilter ItemFilter FullName' => false,
  'ItemSiteFilter ItemFilter ListIDWithChildren' => false,
  'ItemSiteFilter ItemFilter FullNameWithChildren' => false,
  'ItemSiteFilter SiteFilter ListID' => true,
  'ItemSiteFilter SiteFilter FullName' => false,
  'MaxReturned' => true,
  'ActiveStatus' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ListID' => 999.99,
  'ItemTypeFilter' => 999.99,
  'ItemSiteFilter ItemFilter ListID' => 999.99,
  'ItemSiteFilter ItemFilter FullName' => 999.99,
  'ItemSiteFilter ItemFilter ListIDWithChildren' => 999.99,
  'ItemSiteFilter ItemFilter FullNameWithChildren' => 999.99,
  'ItemSiteFilter SiteFilter ListID' => 999.99,
  'ItemSiteFilter SiteFilter FullName' => 999.99,
  'MaxReturned' => 0.0,
  'ActiveStatus' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ListID' => true,
  'ItemTypeFilter' => false,
  'ItemSiteFilter ItemFilter ListID' => true,
  'ItemSiteFilter ItemFilter FullName' => true,
  'ItemSiteFilter ItemFilter ListIDWithChildren' => false,
  'ItemSiteFilter ItemFilter FullNameWithChildren' => false,
  'ItemSiteFilter SiteFilter ListID' => true,
  'ItemSiteFilter SiteFilter FullName' => true,
  'MaxReturned' => false,
  'ActiveStatus' => false,
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
  'ItemTypeFilter',
  'ItemSiteFilter',
  'ItemSiteFilter ItemFilter',
  'ItemSiteFilter ItemFilter ListID',
  'ItemSiteFilter ItemFilter FullName',
  'ItemSiteFilter ItemFilter ListIDWithChildren',
  'ItemSiteFilter ItemFilter FullNameWithChildren',
  'ItemSiteFilter SiteFilter ListID',
  'ItemSiteFilter SiteFilter FullName',
  'MaxReturned',
  'ActiveStatus',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
