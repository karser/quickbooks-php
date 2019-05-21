<?php

/**
 * Schema object for: ToDoAddRq
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
class QuickBooks_QBXML_Schema_Object_ToDoAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ToDoAdd Notes' => 'STRTYPE',
  'ToDoAdd IsActive' => 'BOOLTYPE',
  'ToDoAdd Type' => 'ENUMTYPE',
  'ToDoAdd Priority' => 'ENUMTYPE',
  'ToDoAdd CustomerRef ListID' => 'IDTYPE',
  'ToDoAdd CustomerRef FullName' => 'STRTYPE',
  'ToDoAdd EmployeeRef ListID' => 'IDTYPE',
  'ToDoAdd EmployeeRef FullName' => 'STRTYPE',
  'ToDoAdd LeadRef ListID' => 'IDTYPE',
  'ToDoAdd LeadRef FullName' => 'STRTYPE',
  'ToDoAdd VendorRef ListID' => 'IDTYPE',
  'ToDoAdd VendorRef FullName' => 'STRTYPE',
  'ToDoAdd IsDone' => 'BOOLTYPE',
  'ToDoAdd ReminderDate' => 'DATETYPE',
  'ToDoAdd ReminderTime' => 'TIMEINTERVALTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ToDoAdd Notes' => 4095,
  'ToDoAdd IsActive' => 0,
  'ToDoAdd Type' => 0,
  'ToDoAdd Priority' => 0,
  'ToDoAdd CustomerRef ListID' => 0,
  'ToDoAdd CustomerRef FullName' => 209,
  'ToDoAdd EmployeeRef ListID' => 0,
  'ToDoAdd EmployeeRef FullName' => 209,
  'ToDoAdd LeadRef ListID' => 0,
  'ToDoAdd LeadRef FullName' => 209,
  'ToDoAdd VendorRef ListID' => 0,
  'ToDoAdd VendorRef FullName' => 209,
  'ToDoAdd IsDone' => 0,
  'ToDoAdd ReminderDate' => 0,
  'ToDoAdd ReminderTime' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ToDoAdd Notes' => false,
  'ToDoAdd IsActive' => true,
  'ToDoAdd Type' => true,
  'ToDoAdd Priority' => true,
  'ToDoAdd CustomerRef ListID' => true,
  'ToDoAdd CustomerRef FullName' => true,
  'ToDoAdd EmployeeRef ListID' => true,
  'ToDoAdd EmployeeRef FullName' => true,
  'ToDoAdd LeadRef ListID' => true,
  'ToDoAdd LeadRef FullName' => true,
  'ToDoAdd VendorRef ListID' => true,
  'ToDoAdd VendorRef FullName' => true,
  'ToDoAdd IsDone' => true,
  'ToDoAdd ReminderDate' => true,
  'ToDoAdd ReminderTime' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ToDoAdd Notes' => 999.99,
  'ToDoAdd IsActive' => 999.99,
  'ToDoAdd Type' => 13.0,
  'ToDoAdd Priority' => 13.0,
  'ToDoAdd CustomerRef ListID' => 999.99,
  'ToDoAdd CustomerRef FullName' => 999.99,
  'ToDoAdd EmployeeRef ListID' => 999.99,
  'ToDoAdd EmployeeRef FullName' => 999.99,
  'ToDoAdd LeadRef ListID' => 999.99,
  'ToDoAdd LeadRef FullName' => 999.99,
  'ToDoAdd VendorRef ListID' => 999.99,
  'ToDoAdd VendorRef FullName' => 999.99,
  'ToDoAdd IsDone' => 999.99,
  'ToDoAdd ReminderDate' => 999.99,
  'ToDoAdd ReminderTime' => 13.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ToDoAdd Notes' => false,
  'ToDoAdd IsActive' => false,
  'ToDoAdd Type' => false,
  'ToDoAdd Priority' => false,
  'ToDoAdd CustomerRef ListID' => false,
  'ToDoAdd CustomerRef FullName' => false,
  'ToDoAdd EmployeeRef ListID' => false,
  'ToDoAdd EmployeeRef FullName' => false,
  'ToDoAdd LeadRef ListID' => false,
  'ToDoAdd LeadRef FullName' => false,
  'ToDoAdd VendorRef ListID' => false,
  'ToDoAdd VendorRef FullName' => false,
  'ToDoAdd IsDone' => false,
  'ToDoAdd ReminderDate' => false,
  'ToDoAdd ReminderTime' => false,
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
  'ToDoAdd',
  'ToDoAdd Notes',
  'ToDoAdd IsActive',
  'ToDoAdd Type',
  'ToDoAdd Priority',
  'ToDoAdd CustomerRef ListID',
  'ToDoAdd CustomerRef FullName',
  'ToDoAdd EmployeeRef ListID',
  'ToDoAdd EmployeeRef FullName',
  'ToDoAdd LeadRef ListID',
  'ToDoAdd LeadRef FullName',
  'ToDoAdd VendorRef ListID',
  'ToDoAdd VendorRef FullName',
  'ToDoAdd IsDone',
  'ToDoAdd ReminderDate',
  'ToDoAdd ReminderTime',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
