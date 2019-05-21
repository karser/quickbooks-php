<?php

/**
 * Schema object for: BuildAssemblyAddRq
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
class QuickBooks_QBXML_Schema_Object_BuildAssemblyAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID' => 'IDTYPE',
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName' => 'STRTYPE',
  'BuildAssemblyAdd InventorySiteRef ListID' => 'IDTYPE',
  'BuildAssemblyAdd InventorySiteRef FullName' => 'STRTYPE',
  'BuildAssemblyAdd InventorySiteLocationRef ListID' => 'IDTYPE',
  'BuildAssemblyAdd InventorySiteLocationRef FullName' => 'STRTYPE',
  'BuildAssemblyAdd SerialNumber' => 'STRTYPE',
  'BuildAssemblyAdd LotNumber' => 'STRTYPE',
  'BuildAssemblyAdd TxnDate' => 'DATETYPE',
  'BuildAssemblyAdd RefNumber' => 'STRTYPE',
  'BuildAssemblyAdd Memo' => 'STRTYPE',
  'BuildAssemblyAdd QuantityToBuild' => 'QUANTYPE',
  'BuildAssemblyAdd MarkPendingIfRequired' => 'BOOLTYPE',
  'BuildAssemblyAdd ExternalGUID' => 'GUIDTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID' => 0,
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName' => 159,
  'BuildAssemblyAdd InventorySiteRef ListID' => 0,
  'BuildAssemblyAdd InventorySiteRef FullName' => 159,
  'BuildAssemblyAdd InventorySiteLocationRef ListID' => 0,
  'BuildAssemblyAdd InventorySiteLocationRef FullName' => 159,
  'BuildAssemblyAdd SerialNumber' => 4095,
  'BuildAssemblyAdd LotNumber' => 40,
  'BuildAssemblyAdd TxnDate' => 0,
  'BuildAssemblyAdd RefNumber' => 11,
  'BuildAssemblyAdd Memo' => 4095,
  'BuildAssemblyAdd QuantityToBuild' => 0,
  'BuildAssemblyAdd MarkPendingIfRequired' => 0,
  'BuildAssemblyAdd ExternalGUID' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID' => true,
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName' => true,
  'BuildAssemblyAdd InventorySiteRef ListID' => true,
  'BuildAssemblyAdd InventorySiteRef FullName' => true,
  'BuildAssemblyAdd InventorySiteLocationRef ListID' => true,
  'BuildAssemblyAdd InventorySiteLocationRef FullName' => true,
  'BuildAssemblyAdd SerialNumber' => true,
  'BuildAssemblyAdd LotNumber' => true,
  'BuildAssemblyAdd TxnDate' => true,
  'BuildAssemblyAdd RefNumber' => true,
  'BuildAssemblyAdd Memo' => true,
  'BuildAssemblyAdd QuantityToBuild' => false,
  'BuildAssemblyAdd MarkPendingIfRequired' => true,
  'BuildAssemblyAdd ExternalGUID' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID' => 999.99,
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName' => 999.99,
  'BuildAssemblyAdd InventorySiteRef ListID' => 999.99,
  'BuildAssemblyAdd InventorySiteRef FullName' => 999.99,
  'BuildAssemblyAdd InventorySiteLocationRef ListID' => 999.99,
  'BuildAssemblyAdd InventorySiteLocationRef FullName' => 999.99,
  'BuildAssemblyAdd SerialNumber' => 999.99,
  'BuildAssemblyAdd LotNumber' => 999.99,
  'BuildAssemblyAdd TxnDate' => 999.99,
  'BuildAssemblyAdd RefNumber' => 999.99,
  'BuildAssemblyAdd Memo' => 999.99,
  'BuildAssemblyAdd QuantityToBuild' => 999.99,
  'BuildAssemblyAdd MarkPendingIfRequired' => 7.0,
  'BuildAssemblyAdd ExternalGUID' => 9.0,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID' => false,
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName' => false,
  'BuildAssemblyAdd InventorySiteRef ListID' => false,
  'BuildAssemblyAdd InventorySiteRef FullName' => false,
  'BuildAssemblyAdd InventorySiteLocationRef ListID' => false,
  'BuildAssemblyAdd InventorySiteLocationRef FullName' => false,
  'BuildAssemblyAdd SerialNumber' => false,
  'BuildAssemblyAdd LotNumber' => false,
  'BuildAssemblyAdd TxnDate' => false,
  'BuildAssemblyAdd RefNumber' => false,
  'BuildAssemblyAdd Memo' => false,
  'BuildAssemblyAdd QuantityToBuild' => false,
  'BuildAssemblyAdd MarkPendingIfRequired' => false,
  'BuildAssemblyAdd ExternalGUID' => false,
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
  'BuildAssemblyAdd',
  'BuildAssemblyAdd ItemInventoryAssemblyRef',
  'BuildAssemblyAdd ItemInventoryAssemblyRef ListID',
  'BuildAssemblyAdd ItemInventoryAssemblyRef FullName',
  'BuildAssemblyAdd InventorySiteRef ListID',
  'BuildAssemblyAdd InventorySiteRef FullName',
  'BuildAssemblyAdd InventorySiteLocationRef ListID',
  'BuildAssemblyAdd InventorySiteLocationRef FullName',
  'BuildAssemblyAdd SerialNumber',
  'BuildAssemblyAdd LotNumber',
  'BuildAssemblyAdd TxnDate',
  'BuildAssemblyAdd RefNumber',
  'BuildAssemblyAdd Memo',
  'BuildAssemblyAdd QuantityToBuild',
  'BuildAssemblyAdd MarkPendingIfRequired',
  'BuildAssemblyAdd ExternalGUID',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
