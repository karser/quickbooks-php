<?php

/**
 * Schema object for: TransferInventoryModRq
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
class QuickBooks_QBXML_Schema_Object_TransferInventoryModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TransferInventoryMod TxnID' => 'IDTYPE',
  'TransferInventoryMod EditSequence' => 'STRTYPE',
  'TransferInventoryMod TxnDate' => 'DATETYPE',
  'TransferInventoryMod RefNumber' => 'STRTYPE',
  'TransferInventoryMod FromInventorySiteRef ListID' => 'IDTYPE',
  'TransferInventoryMod FromInventorySiteRef FullName' => 'STRTYPE',
  'TransferInventoryMod ToInventorySiteRef ListID' => 'IDTYPE',
  'TransferInventoryMod ToInventorySiteRef FullName' => 'STRTYPE',
  'TransferInventoryMod Memo' => 'STRTYPE',
  'TransferInventoryMod TransferInventoryLineMod TxnLineID' => 'IDTYPE',
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID' => 'IDTYPE',
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName' => 'STRTYPE',
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID' => 'IDTYPE',
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName' => 'STRTYPE',
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID' => 'IDTYPE',
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName' => 'STRTYPE',
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer' => 'QUANTYPE',
  'TransferInventoryMod TransferInventoryLineMod SerialNumber' => 'STRTYPE',
  'TransferInventoryMod TransferInventoryLineMod LotNumber' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TransferInventoryMod TxnID' => 0,
  'TransferInventoryMod EditSequence' => 16,
  'TransferInventoryMod TxnDate' => 0,
  'TransferInventoryMod RefNumber' => 11,
  'TransferInventoryMod FromInventorySiteRef ListID' => 0,
  'TransferInventoryMod FromInventorySiteRef FullName' => 31,
  'TransferInventoryMod ToInventorySiteRef ListID' => 0,
  'TransferInventoryMod ToInventorySiteRef FullName' => 31,
  'TransferInventoryMod Memo' => 4095,
  'TransferInventoryMod TransferInventoryLineMod TxnLineID' => 0,
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID' => 0,
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName' => 31,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID' => 0,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName' => 31,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID' => 0,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName' => 31,
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer' => 0,
  'TransferInventoryMod TransferInventoryLineMod SerialNumber' => 4095,
  'TransferInventoryMod TransferInventoryLineMod LotNumber' => 40,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TransferInventoryMod TxnID' => false,
  'TransferInventoryMod EditSequence' => false,
  'TransferInventoryMod TxnDate' => true,
  'TransferInventoryMod RefNumber' => true,
  'TransferInventoryMod FromInventorySiteRef ListID' => true,
  'TransferInventoryMod FromInventorySiteRef FullName' => true,
  'TransferInventoryMod ToInventorySiteRef ListID' => true,
  'TransferInventoryMod ToInventorySiteRef FullName' => true,
  'TransferInventoryMod Memo' => true,
  'TransferInventoryMod TransferInventoryLineMod TxnLineID' => false,
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID' => true,
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName' => true,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID' => true,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName' => true,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID' => true,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName' => true,
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer' => true,
  'TransferInventoryMod TransferInventoryLineMod SerialNumber' => true,
  'TransferInventoryMod TransferInventoryLineMod LotNumber' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TransferInventoryMod TxnID' => 999.99,
  'TransferInventoryMod EditSequence' => 999.99,
  'TransferInventoryMod TxnDate' => 999.99,
  'TransferInventoryMod RefNumber' => 999.99,
  'TransferInventoryMod FromInventorySiteRef ListID' => 999.99,
  'TransferInventoryMod FromInventorySiteRef FullName' => 999.99,
  'TransferInventoryMod ToInventorySiteRef ListID' => 999.99,
  'TransferInventoryMod ToInventorySiteRef FullName' => 999.99,
  'TransferInventoryMod Memo' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod TxnLineID' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod SerialNumber' => 999.99,
  'TransferInventoryMod TransferInventoryLineMod LotNumber' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TransferInventoryMod TxnID' => false,
  'TransferInventoryMod EditSequence' => false,
  'TransferInventoryMod TxnDate' => false,
  'TransferInventoryMod RefNumber' => false,
  'TransferInventoryMod FromInventorySiteRef ListID' => false,
  'TransferInventoryMod FromInventorySiteRef FullName' => false,
  'TransferInventoryMod ToInventorySiteRef ListID' => false,
  'TransferInventoryMod ToInventorySiteRef FullName' => false,
  'TransferInventoryMod Memo' => false,
  'TransferInventoryMod TransferInventoryLineMod TxnLineID' => false,
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID' => false,
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName' => false,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID' => false,
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName' => false,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID' => false,
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName' => false,
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer' => false,
  'TransferInventoryMod TransferInventoryLineMod SerialNumber' => false,
  'TransferInventoryMod TransferInventoryLineMod LotNumber' => false,
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
  'TransferInventoryMod',
  'TransferInventoryMod TxnID',
  'TransferInventoryMod EditSequence',
  'TransferInventoryMod TxnDate',
  'TransferInventoryMod RefNumber',
  'TransferInventoryMod FromInventorySiteRef ListID',
  'TransferInventoryMod FromInventorySiteRef FullName',
  'TransferInventoryMod ToInventorySiteRef ListID',
  'TransferInventoryMod ToInventorySiteRef FullName',
  'TransferInventoryMod Memo',
  'TransferInventoryMod TransferInventoryLineMod TxnLineID',
  'TransferInventoryMod TransferInventoryLineMod ItemRef ListID',
  'TransferInventoryMod TransferInventoryLineMod ItemRef FullName',
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef ListID',
  'TransferInventoryMod TransferInventoryLineMod FromInventorySiteLocationRef FullName',
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef ListID',
  'TransferInventoryMod TransferInventoryLineMod ToInventorySiteLocationRef FullName',
  'TransferInventoryMod TransferInventoryLineMod QuantityToTransfer',
  'TransferInventoryMod TransferInventoryLineMod SerialNumber',
  'TransferInventoryMod TransferInventoryLineMod LotNumber',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
