<?php

/**
 * Schema object for: ClassModRq
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
class QuickBooks_QBXML_Schema_Object_ClassModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ClassMod ListID' => 'IDTYPE',
  'ClassMod EditSequence' => 'STRTYPE',
  'ClassMod Name' => 'STRTYPE',
  'ClassMod IsActive' => 'BOOLTYPE',
  'ClassMod ParentRef ListID' => 'IDTYPE',
  'ClassMod ParentRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ClassMod ListID' => 0,
  'ClassMod EditSequence' => 16,
  'ClassMod Name' => 31,
  'ClassMod IsActive' => 0,
  'ClassMod ParentRef ListID' => 0,
  'ClassMod ParentRef FullName' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ClassMod ListID' => false,
  'ClassMod EditSequence' => false,
  'ClassMod Name' => true,
  'ClassMod IsActive' => true,
  'ClassMod ParentRef ListID' => false,
  'ClassMod ParentRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ClassMod ListID' => 999.99,
  'ClassMod EditSequence' => 999.99,
  'ClassMod Name' => 999.99,
  'ClassMod IsActive' => 999.99,
  'ClassMod ParentRef ListID' => 999.99,
  'ClassMod ParentRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ClassMod ListID' => false,
  'ClassMod EditSequence' => false,
  'ClassMod Name' => false,
  'ClassMod IsActive' => false,
  'ClassMod ParentRef ListID' => false,
  'ClassMod ParentRef FullName' => false,
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
  'ClassMod',
  'ClassMod ListID',
  'ClassMod EditSequence',
  'ClassMod Name',
  'ClassMod IsActive',
  'ClassMod ParentRef ListID',
  'ClassMod ParentRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
