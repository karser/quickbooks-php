<?php

/**
 * Schema object for: DataExtDefAddRq
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
class QuickBooks_QBXML_Schema_Object_DataExtDefAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'DataExtDefAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'OwnerID' => 'GUIDTYPE',
  'DataExtName' => 'STRTYPE',
  'DataExtType' => 'ENUMTYPE',
  'AssignToObject' => 'ENUMTYPE',
  'DataExtListRequire' => 'BOOLTYPE',
  'DataExtTxnRequire' => 'BOOLTYPE',
  'DataExtFormatString' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'OwnerID' => 0,
  'DataExtName' => 31,
  'DataExtType' => 0,
  'AssignToObject' => 0,
  'DataExtListRequire' => 0,
  'DataExtTxnRequire' => 0,
  'DataExtFormatString' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'OwnerID' => false,
  'DataExtName' => false,
  'DataExtType' => false,
  'AssignToObject' => true,
  'DataExtListRequire' => true,
  'DataExtTxnRequire' => true,
  'DataExtFormatString' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'OwnerID' => 999.99,
  'DataExtName' => 999.99,
  'DataExtType' => 999.99,
  'AssignToObject' => 999.99,
  'DataExtListRequire' => 12.0,
  'DataExtTxnRequire' => 12.0,
  'DataExtFormatString' => 12.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'OwnerID' => false,
  'DataExtName' => false,
  'DataExtType' => false,
  'AssignToObject' => true,
  'DataExtListRequire' => false,
  'DataExtTxnRequire' => false,
  'DataExtFormatString' => false,
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
  'OwnerID',
  'DataExtName',
  'DataExtType',
  'AssignToObject',
  'DataExtListRequire',
  'DataExtTxnRequire',
  'DataExtFormatString',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
