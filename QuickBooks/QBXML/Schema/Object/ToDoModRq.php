<?php

/**
 * Schema object for: ToDoModRq
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
class QuickBooks_QBXML_Schema_Object_ToDoModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ToDoMod ListID' => 'IDTYPE',
  'ToDoMod EditSequence' => 'STRTYPE',
  'ToDoMod Notes' => 'STRTYPE',
  'ToDoMod IsActive' => 'BOOLTYPE',
  'ToDoMod Type' => 'ENUMTYPE',
  'ToDoMod Priority' => 'ENUMTYPE',
  'ToDoMod CustomerRef ListID' => 'IDTYPE',
  'ToDoMod CustomerRef FullName' => 'STRTYPE',
  'ToDoMod EmployeeRef ListID' => 'IDTYPE',
  'ToDoMod EmployeeRef FullName' => 'STRTYPE',
  'ToDoMod LeadRef ListID' => 'IDTYPE',
  'ToDoMod LeadRef FullName' => 'STRTYPE',
  'ToDoMod VendorRef ListID' => 'IDTYPE',
  'ToDoMod VendorRef FullName' => 'STRTYPE',
  'ToDoMod IsDone' => 'BOOLTYPE',
  'ToDoMod ReminderDate' => 'DATETYPE',
  'ToDoMod ReminderTime' => 'TIMEINTERVALTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ToDoMod ListID' => 0,
  'ToDoMod EditSequence' => 16,
  'ToDoMod Notes' => 4095,
  'ToDoMod IsActive' => 0,
  'ToDoMod Type' => 0,
  'ToDoMod Priority' => 0,
  'ToDoMod CustomerRef ListID' => 0,
  'ToDoMod CustomerRef FullName' => 209,
  'ToDoMod EmployeeRef ListID' => 0,
  'ToDoMod EmployeeRef FullName' => 209,
  'ToDoMod LeadRef ListID' => 0,
  'ToDoMod LeadRef FullName' => 209,
  'ToDoMod VendorRef ListID' => 0,
  'ToDoMod VendorRef FullName' => 209,
  'ToDoMod IsDone' => 0,
  'ToDoMod ReminderDate' => 0,
  'ToDoMod ReminderTime' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ToDoMod ListID' => false,
  'ToDoMod EditSequence' => false,
  'ToDoMod Notes' => true,
  'ToDoMod IsActive' => true,
  'ToDoMod Type' => true,
  'ToDoMod Priority' => true,
  'ToDoMod CustomerRef ListID' => false,
  'ToDoMod CustomerRef FullName' => true,
  'ToDoMod EmployeeRef ListID' => false,
  'ToDoMod EmployeeRef FullName' => true,
  'ToDoMod LeadRef ListID' => false,
  'ToDoMod LeadRef FullName' => true,
  'ToDoMod VendorRef ListID' => false,
  'ToDoMod VendorRef FullName' => true,
  'ToDoMod IsDone' => true,
  'ToDoMod ReminderDate' => true,
  'ToDoMod ReminderTime' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ToDoMod ListID' => 999.99,
  'ToDoMod EditSequence' => 999.99,
  'ToDoMod Notes' => 999.99,
  'ToDoMod IsActive' => 999.99,
  'ToDoMod Type' => 13.0,
  'ToDoMod Priority' => 13.0,
  'ToDoMod CustomerRef ListID' => 999.99,
  'ToDoMod CustomerRef FullName' => 999.99,
  'ToDoMod EmployeeRef ListID' => 999.99,
  'ToDoMod EmployeeRef FullName' => 999.99,
  'ToDoMod LeadRef ListID' => 999.99,
  'ToDoMod LeadRef FullName' => 999.99,
  'ToDoMod VendorRef ListID' => 999.99,
  'ToDoMod VendorRef FullName' => 999.99,
  'ToDoMod IsDone' => 999.99,
  'ToDoMod ReminderDate' => 999.99,
  'ToDoMod ReminderTime' => 13.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ToDoMod ListID' => false,
  'ToDoMod EditSequence' => false,
  'ToDoMod Notes' => false,
  'ToDoMod IsActive' => false,
  'ToDoMod Type' => false,
  'ToDoMod Priority' => false,
  'ToDoMod CustomerRef ListID' => false,
  'ToDoMod CustomerRef FullName' => false,
  'ToDoMod EmployeeRef ListID' => false,
  'ToDoMod EmployeeRef FullName' => false,
  'ToDoMod LeadRef ListID' => false,
  'ToDoMod LeadRef FullName' => false,
  'ToDoMod VendorRef ListID' => false,
  'ToDoMod VendorRef FullName' => false,
  'ToDoMod IsDone' => false,
  'ToDoMod ReminderDate' => false,
  'ToDoMod ReminderTime' => false,
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
  'ToDoMod',
  'ToDoMod ListID',
  'ToDoMod EditSequence',
  'ToDoMod Notes',
  'ToDoMod IsActive',
  'ToDoMod Type',
  'ToDoMod Priority',
  'ToDoMod CustomerRef ListID',
  'ToDoMod CustomerRef FullName',
  'ToDoMod EmployeeRef ListID',
  'ToDoMod EmployeeRef FullName',
  'ToDoMod LeadRef ListID',
  'ToDoMod LeadRef FullName',
  'ToDoMod VendorRef ListID',
  'ToDoMod VendorRef FullName',
  'ToDoMod IsDone',
  'ToDoMod ReminderDate',
  'ToDoMod ReminderTime',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
