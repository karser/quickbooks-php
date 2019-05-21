<?php

/**
 * Schema object for: TransferInventoryAddRq
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
class QuickBooks_QBXML_Schema_Object_TransferInventoryAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TransferInventoryAdd TxnDate' => 'DATETYPE',
  'TransferInventoryAdd RefNumber' => 'STRTYPE',
  'TransferInventoryAdd FromInventorySiteRef ListID' => 'IDTYPE',
  'TransferInventoryAdd FromInventorySiteRef FullName' => 'STRTYPE',
  'TransferInventoryAdd ToInventorySiteRef ListID' => 'IDTYPE',
  'TransferInventoryAdd ToInventorySiteRef FullName' => 'STRTYPE',
  'TransferInventoryAdd Memo' => 'STRTYPE',
  'TransferInventoryAdd ExternalGUID' => 'GUIDTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID' => 'IDTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName' => 'STRTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID' => 'IDTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName' => 'STRTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID' => 'IDTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName' => 'STRTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer' => 'QUANTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber' => 'STRTYPE',
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TransferInventoryAdd TxnDate' => 0,
  'TransferInventoryAdd RefNumber' => 11,
  'TransferInventoryAdd FromInventorySiteRef ListID' => 0,
  'TransferInventoryAdd FromInventorySiteRef FullName' => 31,
  'TransferInventoryAdd ToInventorySiteRef ListID' => 0,
  'TransferInventoryAdd ToInventorySiteRef FullName' => 31,
  'TransferInventoryAdd Memo' => 4095,
  'TransferInventoryAdd ExternalGUID' => 0,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID' => 0,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName' => 31,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID' => 0,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName' => 31,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID' => 0,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName' => 31,
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer' => 0,
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber' => 4095,
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber' => 40,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TransferInventoryAdd TxnDate' => true,
  'TransferInventoryAdd RefNumber' => true,
  'TransferInventoryAdd FromInventorySiteRef ListID' => true,
  'TransferInventoryAdd FromInventorySiteRef FullName' => true,
  'TransferInventoryAdd ToInventorySiteRef ListID' => true,
  'TransferInventoryAdd ToInventorySiteRef FullName' => true,
  'TransferInventoryAdd Memo' => true,
  'TransferInventoryAdd ExternalGUID' => true,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID' => true,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName' => true,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID' => true,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName' => true,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID' => true,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName' => true,
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer' => true,
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber' => true,
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TransferInventoryAdd TxnDate' => 999.99,
  'TransferInventoryAdd RefNumber' => 999.99,
  'TransferInventoryAdd FromInventorySiteRef ListID' => 999.99,
  'TransferInventoryAdd FromInventorySiteRef FullName' => 999.99,
  'TransferInventoryAdd ToInventorySiteRef ListID' => 999.99,
  'TransferInventoryAdd ToInventorySiteRef FullName' => 999.99,
  'TransferInventoryAdd Memo' => 999.99,
  'TransferInventoryAdd ExternalGUID' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber' => 999.99,
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TransferInventoryAdd TxnDate' => false,
  'TransferInventoryAdd RefNumber' => false,
  'TransferInventoryAdd FromInventorySiteRef ListID' => false,
  'TransferInventoryAdd FromInventorySiteRef FullName' => false,
  'TransferInventoryAdd ToInventorySiteRef ListID' => false,
  'TransferInventoryAdd ToInventorySiteRef FullName' => false,
  'TransferInventoryAdd Memo' => false,
  'TransferInventoryAdd ExternalGUID' => false,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID' => false,
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName' => false,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID' => false,
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName' => false,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID' => false,
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName' => false,
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer' => false,
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber' => false,
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber' => false,
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
  'TransferInventoryAdd',
  'TransferInventoryAdd TxnDate',
  'TransferInventoryAdd RefNumber',
  'TransferInventoryAdd FromInventorySiteRef ListID',
  'TransferInventoryAdd FromInventorySiteRef FullName',
  'TransferInventoryAdd ToInventorySiteRef ListID',
  'TransferInventoryAdd ToInventorySiteRef FullName',
  'TransferInventoryAdd Memo',
  'TransferInventoryAdd ExternalGUID',
  'TransferInventoryAdd',
  'TransferInventoryAdd TransferInventoryLineAdd',
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef',
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef ListID',
  'TransferInventoryAdd TransferInventoryLineAdd ItemRef FullName',
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef ListID',
  'TransferInventoryAdd TransferInventoryLineAdd FromInventorySiteLocationRef FullName',
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef ListID',
  'TransferInventoryAdd TransferInventoryLineAdd ToInventorySiteLocationRef FullName',
  'TransferInventoryAdd TransferInventoryLineAdd QuantityToTransfer',
  'TransferInventoryAdd TransferInventoryLineAdd SerialNumber',
  'TransferInventoryAdd TransferInventoryLineAdd LotNumber',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
