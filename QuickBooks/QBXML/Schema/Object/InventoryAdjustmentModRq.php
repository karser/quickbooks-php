<?php

/**
 * Schema object for: InventoryAdjustmentModRq
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
class QuickBooks_QBXML_Schema_Object_InventoryAdjustmentModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'InventoryAdjustmentMod TxnID' => 'IDTYPE',
  'InventoryAdjustmentMod EditSequence' => 'STRTYPE',
  'InventoryAdjustmentMod AccountRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod AccountRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod InventorySiteRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod InventorySiteRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod TxnDate' => 'DATETYPE',
  'InventoryAdjustmentMod RefNumber' => 'STRTYPE',
  'InventoryAdjustmentMod CustomerRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod CustomerRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod ClassRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod ClassRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod Memo' => 'STRTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID' => 'IDTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber' => 'STRTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber' => 'STRTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment' => 'INTTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID' => 'IDTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName' => 'STRTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference' => 'QUANTYPE',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference' => 'AMTTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'InventoryAdjustmentMod TxnID' => 0,
  'InventoryAdjustmentMod EditSequence' => 16,
  'InventoryAdjustmentMod AccountRef ListID' => 0,
  'InventoryAdjustmentMod AccountRef FullName' => 159,
  'InventoryAdjustmentMod InventorySiteRef ListID' => 0,
  'InventoryAdjustmentMod InventorySiteRef FullName' => 159,
  'InventoryAdjustmentMod TxnDate' => 0,
  'InventoryAdjustmentMod RefNumber' => 11,
  'InventoryAdjustmentMod CustomerRef ListID' => 0,
  'InventoryAdjustmentMod CustomerRef FullName' => 159,
  'InventoryAdjustmentMod ClassRef ListID' => 0,
  'InventoryAdjustmentMod ClassRef FullName' => 159,
  'InventoryAdjustmentMod Memo' => 4095,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID' => 0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID' => 0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName' => 159,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber' => 4095,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber' => 40,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment' => 0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID' => 0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName' => 159,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference' => 0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'InventoryAdjustmentMod TxnID' => false,
  'InventoryAdjustmentMod EditSequence' => false,
  'InventoryAdjustmentMod AccountRef ListID' => true,
  'InventoryAdjustmentMod AccountRef FullName' => true,
  'InventoryAdjustmentMod InventorySiteRef ListID' => true,
  'InventoryAdjustmentMod InventorySiteRef FullName' => true,
  'InventoryAdjustmentMod TxnDate' => true,
  'InventoryAdjustmentMod RefNumber' => true,
  'InventoryAdjustmentMod CustomerRef ListID' => true,
  'InventoryAdjustmentMod CustomerRef FullName' => true,
  'InventoryAdjustmentMod ClassRef ListID' => true,
  'InventoryAdjustmentMod ClassRef FullName' => true,
  'InventoryAdjustmentMod Memo' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference' => true,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'InventoryAdjustmentMod TxnID' => 999.99,
  'InventoryAdjustmentMod EditSequence' => 999.99,
  'InventoryAdjustmentMod AccountRef ListID' => 999.99,
  'InventoryAdjustmentMod AccountRef FullName' => 999.99,
  'InventoryAdjustmentMod InventorySiteRef ListID' => 999.99,
  'InventoryAdjustmentMod InventorySiteRef FullName' => 999.99,
  'InventoryAdjustmentMod TxnDate' => 999.99,
  'InventoryAdjustmentMod RefNumber' => 999.99,
  'InventoryAdjustmentMod CustomerRef ListID' => 999.99,
  'InventoryAdjustmentMod CustomerRef FullName' => 999.99,
  'InventoryAdjustmentMod ClassRef ListID' => 999.99,
  'InventoryAdjustmentMod ClassRef FullName' => 999.99,
  'InventoryAdjustmentMod Memo' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber' => 11.0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber' => 11.0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment' => 11.0,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference' => 999.99,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'InventoryAdjustmentMod TxnID' => false,
  'InventoryAdjustmentMod EditSequence' => false,
  'InventoryAdjustmentMod AccountRef ListID' => false,
  'InventoryAdjustmentMod AccountRef FullName' => false,
  'InventoryAdjustmentMod InventorySiteRef ListID' => false,
  'InventoryAdjustmentMod InventorySiteRef FullName' => false,
  'InventoryAdjustmentMod TxnDate' => false,
  'InventoryAdjustmentMod RefNumber' => false,
  'InventoryAdjustmentMod CustomerRef ListID' => false,
  'InventoryAdjustmentMod CustomerRef FullName' => false,
  'InventoryAdjustmentMod ClassRef ListID' => false,
  'InventoryAdjustmentMod ClassRef FullName' => false,
  'InventoryAdjustmentMod Memo' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference' => false,
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference' => false,
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
  'InventoryAdjustmentMod',
  'InventoryAdjustmentMod TxnID',
  'InventoryAdjustmentMod EditSequence',
  'InventoryAdjustmentMod AccountRef ListID',
  'InventoryAdjustmentMod AccountRef FullName',
  'InventoryAdjustmentMod InventorySiteRef ListID',
  'InventoryAdjustmentMod InventorySiteRef FullName',
  'InventoryAdjustmentMod TxnDate',
  'InventoryAdjustmentMod RefNumber',
  'InventoryAdjustmentMod CustomerRef ListID',
  'InventoryAdjustmentMod CustomerRef FullName',
  'InventoryAdjustmentMod ClassRef ListID',
  'InventoryAdjustmentMod ClassRef FullName',
  'InventoryAdjustmentMod Memo',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod TxnLineID',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef ListID',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ItemRef FullName',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod SerialNumber',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod LotNumber',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod CountAdjustment',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef ListID',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod InventorySiteLocationRef FullName',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod QuantityDifference',
  'InventoryAdjustmentMod InventoryAdjustmentLineMod ValueDifference',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
