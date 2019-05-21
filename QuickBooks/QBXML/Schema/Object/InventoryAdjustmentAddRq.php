<?php

/**
 * Schema object for: InventoryAdjustmentAddRq
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
class QuickBooks_QBXML_Schema_Object_InventoryAdjustmentAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'InventoryAdjustmentAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'AccountRef ListID' => 'IDTYPE',
  'AccountRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'InventorySiteRef ListID' => 'IDTYPE',
  'InventorySiteRef FullName' => 'STRTYPE',
  'CustomerRef ListID' => 'IDTYPE',
  'CustomerRef FullName' => 'STRTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'InventoryAdjustmentLineAdd ItemRef ListID' => 'IDTYPE',
  'InventoryAdjustmentLineAdd ItemRef FullName' => 'STRTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity' => 'QUANTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference' => 'QUANTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber' => 'STRTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber' => 'STRTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID' => 'IDTYPE',
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName' => 'STRTYPE',
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity' => 'QUANTYPE',
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference' => 'QUANTYPE',
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue' => 'AMTTYPE',
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference' => 'AMTTYPE',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber' => 'STRTYPE',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber' => 'STRTYPE',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID' => 'IDTYPE',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName' => 'STRTYPE',
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber' => 'STRTYPE',
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment' => 'INTTYPE',
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID' => 'IDTYPE',
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'AccountRef ListID' => 0,
  'AccountRef FullName' => 159,
  'TxnDate' => 0,
  'RefNumber' => 11,
  'InventorySiteRef ListID' => 0,
  'InventorySiteRef FullName' => 159,
  'CustomerRef ListID' => 0,
  'CustomerRef FullName' => 159,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 159,
  'Memo' => 4095,
  'ExternalGUID' => 0,
  'InventoryAdjustmentLineAdd ItemRef ListID' => 0,
  'InventoryAdjustmentLineAdd ItemRef FullName' => 159,
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity' => 0,
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference' => 0,
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber' => 4095,
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber' => 40,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID' => 0,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName' => 159,
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity' => 0,
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference' => 0,
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue' => 0,
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference' => 0,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber' => 4095,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber' => 4095,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID' => 0,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName' => 159,
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber' => 40,
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment' => 0,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID' => 0,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName' => 159,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'AccountRef ListID' => true,
  'AccountRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'InventorySiteRef ListID' => true,
  'InventorySiteRef FullName' => true,
  'CustomerRef ListID' => true,
  'CustomerRef FullName' => true,
  'ClassRef ListID' => true,
  'ClassRef FullName' => true,
  'Memo' => true,
  'ExternalGUID' => true,
  'InventoryAdjustmentLineAdd ItemRef ListID' => true,
  'InventoryAdjustmentLineAdd ItemRef FullName' => true,
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber' => true,
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber' => true,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID' => true,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName' => true,
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference' => false,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber' => true,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber' => true,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID' => true,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName' => true,
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber' => true,
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment' => true,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID' => true,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'AccountRef ListID' => 999.99,
  'AccountRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'InventorySiteRef ListID' => 999.99,
  'InventorySiteRef FullName' => 999.99,
  'CustomerRef ListID' => 999.99,
  'CustomerRef FullName' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'Memo' => 999.99,
  'ExternalGUID' => 9.0,
  'InventoryAdjustmentLineAdd ItemRef ListID' => 999.99,
  'InventoryAdjustmentLineAdd ItemRef FullName' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID' => 999.99,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName' => 999.99,
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity' => 999.99,
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference' => 999.99,
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue' => 999.99,
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference' => 10.0,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber' => 999.99,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber' => 999.99,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID' => 999.99,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName' => 999.99,
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber' => 999.99,
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment' => 999.99,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID' => 999.99,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'AccountRef ListID' => false,
  'AccountRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'InventorySiteRef ListID' => false,
  'InventorySiteRef FullName' => false,
  'CustomerRef ListID' => false,
  'CustomerRef FullName' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'Memo' => false,
  'ExternalGUID' => false,
  'InventoryAdjustmentLineAdd ItemRef ListID' => false,
  'InventoryAdjustmentLineAdd ItemRef FullName' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID' => false,
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue' => false,
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference' => false,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber' => false,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber' => false,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID' => false,
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName' => false,
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber' => false,
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment' => false,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID' => false,
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName' => false,
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
  'AccountRef',
  'AccountRef ListID',
  'AccountRef FullName',
  'TxnDate',
  'RefNumber',
  'InventorySiteRef',
  'InventorySiteRef ListID',
  'InventorySiteRef FullName',
  'CustomerRef',
  'CustomerRef ListID',
  'CustomerRef FullName',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'Memo',
  'ExternalGUID',
  'InventoryAdjustmentLineAdd',
  'InventoryAdjustmentLineAdd ItemRef',
  'InventoryAdjustmentLineAdd ItemRef ListID',
  'InventoryAdjustmentLineAdd ItemRef FullName',
  'InventoryAdjustmentLineAdd QuantityAdjustment NewQuantity',
  'InventoryAdjustmentLineAdd QuantityAdjustment QuantityDifference',
  'InventoryAdjustmentLineAdd QuantityAdjustment SerialNumber',
  'InventoryAdjustmentLineAdd QuantityAdjustment LotNumber',
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef ListID',
  'InventoryAdjustmentLineAdd QuantityAdjustment InventorySiteLocationRef FullName',
  'InventoryAdjustmentLineAdd ValueAdjustment NewQuantity',
  'InventoryAdjustmentLineAdd ValueAdjustment QuantityDifference',
  'InventoryAdjustmentLineAdd ValueAdjustment NewValue',
  'InventoryAdjustmentLineAdd ValueAdjustment ValueDifference',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment AddSerialNumber',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment RemoveSerialNumber',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef ListID',
  'InventoryAdjustmentLineAdd SerialNumberAdjustment InventorySiteLocationRef FullName',
  'InventoryAdjustmentLineAdd LotNumberAdjustment LotNumber',
  'InventoryAdjustmentLineAdd LotNumberAdjustment CountAdjustment',
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef ListID',
  'InventoryAdjustmentLineAdd LotNumberAdjustment InventorySiteLocationRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
