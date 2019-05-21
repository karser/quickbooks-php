<?php

/**
 * Schema object for: BuildAssemblyModRq
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
class QuickBooks_QBXML_Schema_Object_BuildAssemblyModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'BuildAssemblyMod TxnID' => 'IDTYPE',
  'BuildAssemblyMod EditSequence' => 'STRTYPE',
  'BuildAssemblyMod InventorySiteRef ListID' => 'IDTYPE',
  'BuildAssemblyMod InventorySiteRef FullName' => 'STRTYPE',
  'BuildAssemblyMod InventorySiteLocationRef ListID' => 'IDTYPE',
  'BuildAssemblyMod InventorySiteLocationRef FullName' => 'STRTYPE',
  'BuildAssemblyMod SerialNumber' => 'STRTYPE',
  'BuildAssemblyMod LotNumber' => 'STRTYPE',
  'BuildAssemblyMod TxnDate' => 'DATETYPE',
  'BuildAssemblyMod RefNumber' => 'STRTYPE',
  'BuildAssemblyMod Memo' => 'STRTYPE',
  'BuildAssemblyMod QuantityToBuild' => 'QUANTYPE',
  'BuildAssemblyMod MarkPendingIfRequired' => 'BOOLTYPE',
  'BuildAssemblyMod RemovePending' => 'BOOLTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'BuildAssemblyMod TxnID' => 0,
  'BuildAssemblyMod EditSequence' => 16,
  'BuildAssemblyMod InventorySiteRef ListID' => 0,
  'BuildAssemblyMod InventorySiteRef FullName' => 31,
  'BuildAssemblyMod InventorySiteLocationRef ListID' => 0,
  'BuildAssemblyMod InventorySiteLocationRef FullName' => 31,
  'BuildAssemblyMod SerialNumber' => 4095,
  'BuildAssemblyMod LotNumber' => 40,
  'BuildAssemblyMod TxnDate' => 0,
  'BuildAssemblyMod RefNumber' => 11,
  'BuildAssemblyMod Memo' => 4095,
  'BuildAssemblyMod QuantityToBuild' => 0,
  'BuildAssemblyMod MarkPendingIfRequired' => 0,
  'BuildAssemblyMod RemovePending' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'BuildAssemblyMod TxnID' => false,
  'BuildAssemblyMod EditSequence' => false,
  'BuildAssemblyMod InventorySiteRef ListID' => true,
  'BuildAssemblyMod InventorySiteRef FullName' => true,
  'BuildAssemblyMod InventorySiteLocationRef ListID' => true,
  'BuildAssemblyMod InventorySiteLocationRef FullName' => true,
  'BuildAssemblyMod SerialNumber' => true,
  'BuildAssemblyMod LotNumber' => true,
  'BuildAssemblyMod TxnDate' => true,
  'BuildAssemblyMod RefNumber' => true,
  'BuildAssemblyMod Memo' => true,
  'BuildAssemblyMod QuantityToBuild' => true,
  'BuildAssemblyMod MarkPendingIfRequired' => true,
  'BuildAssemblyMod RemovePending' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'BuildAssemblyMod TxnID' => 0.0,
  'BuildAssemblyMod EditSequence' => 999.99,
  'BuildAssemblyMod InventorySiteRef ListID' => 999.99,
  'BuildAssemblyMod InventorySiteRef FullName' => 999.99,
  'BuildAssemblyMod InventorySiteLocationRef ListID' => 999.99,
  'BuildAssemblyMod InventorySiteLocationRef FullName' => 999.99,
  'BuildAssemblyMod SerialNumber' => 999.99,
  'BuildAssemblyMod LotNumber' => 999.99,
  'BuildAssemblyMod TxnDate' => 999.99,
  'BuildAssemblyMod RefNumber' => 999.99,
  'BuildAssemblyMod Memo' => 999.99,
  'BuildAssemblyMod QuantityToBuild' => 999.99,
  'BuildAssemblyMod MarkPendingIfRequired' => 7.0,
  'BuildAssemblyMod RemovePending' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'BuildAssemblyMod TxnID' => false,
  'BuildAssemblyMod EditSequence' => false,
  'BuildAssemblyMod InventorySiteRef ListID' => false,
  'BuildAssemblyMod InventorySiteRef FullName' => false,
  'BuildAssemblyMod InventorySiteLocationRef ListID' => false,
  'BuildAssemblyMod InventorySiteLocationRef FullName' => false,
  'BuildAssemblyMod SerialNumber' => false,
  'BuildAssemblyMod LotNumber' => false,
  'BuildAssemblyMod TxnDate' => false,
  'BuildAssemblyMod RefNumber' => false,
  'BuildAssemblyMod Memo' => false,
  'BuildAssemblyMod QuantityToBuild' => false,
  'BuildAssemblyMod MarkPendingIfRequired' => false,
  'BuildAssemblyMod RemovePending' => false,
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
  'BuildAssemblyMod',
  'BuildAssemblyMod TxnID',
  'BuildAssemblyMod EditSequence',
  'BuildAssemblyMod InventorySiteRef ListID',
  'BuildAssemblyMod InventorySiteRef FullName',
  'BuildAssemblyMod InventorySiteLocationRef ListID',
  'BuildAssemblyMod InventorySiteLocationRef FullName',
  'BuildAssemblyMod SerialNumber',
  'BuildAssemblyMod LotNumber',
  'BuildAssemblyMod TxnDate',
  'BuildAssemblyMod RefNumber',
  'BuildAssemblyMod Memo',
  'BuildAssemblyMod QuantityToBuild',
  'BuildAssemblyMod MarkPendingIfRequired',
  'BuildAssemblyMod RemovePending',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
