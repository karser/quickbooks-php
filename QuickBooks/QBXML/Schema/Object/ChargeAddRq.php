<?php

/**
 * Schema object for: ChargeAddRq
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
class QuickBooks_QBXML_Schema_Object_ChargeAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ChargeAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 'IDTYPE',
  'CustomerRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'ItemRef ListID' => 'IDTYPE',
  'ItemRef FullName' => 'STRTYPE',
  'InventorySiteRef ListID' => 'IDTYPE',
  'InventorySiteRef FullName' => 'STRTYPE',
  'InventorySiteLocationRef ListID' => 'IDTYPE',
  'InventorySiteLocationRef FullName' => 'STRTYPE',
  'Quantity' => 'QUANTYPE',
  'UnitOfMeasure' => 'STRTYPE',
  'Rate' => 'PRICETYPE',
  'OptionForPriceRuleConflict' => 'ENUMTYPE',
  'Amount' => 'AMTTYPE',
  'Desc' => 'STRTYPE',
  'ARAccountRef ListID' => 'IDTYPE',
  'ARAccountRef FullName' => 'STRTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'BilledDate' => 'DATETYPE',
  'DueDate' => 'DATETYPE',
  'OverrideItemAccountRef ListID' => 'IDTYPE',
  'OverrideItemAccountRef FullName' => 'STRTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 0,
  'CustomerRef FullName' => 209,
  'TxnDate' => 0,
  'RefNumber' => 11,
  'ItemRef ListID' => 0,
  'ItemRef FullName' => 209,
  'InventorySiteRef ListID' => 0,
  'InventorySiteRef FullName' => 209,
  'InventorySiteLocationRef ListID' => 0,
  'InventorySiteLocationRef FullName' => 209,
  'Quantity' => 0,
  'UnitOfMeasure' => 31,
  'Rate' => 0,
  'OptionForPriceRuleConflict' => 0,
  'Amount' => 0,
  'Desc' => 4095,
  'ARAccountRef ListID' => 0,
  'ARAccountRef FullName' => 209,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 209,
  'BilledDate' => 0,
  'DueDate' => 0,
  'OverrideItemAccountRef ListID' => 0,
  'OverrideItemAccountRef FullName' => 209,
  'ExternalGUID' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => true,
  'CustomerRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'ItemRef ListID' => true,
  'ItemRef FullName' => true,
  'InventorySiteRef ListID' => true,
  'InventorySiteRef FullName' => true,
  'InventorySiteLocationRef ListID' => true,
  'InventorySiteLocationRef FullName' => true,
  'Quantity' => true,
  'UnitOfMeasure' => true,
  'Rate' => true,
  'OptionForPriceRuleConflict' => true,
  'Amount' => true,
  'Desc' => true,
  'ARAccountRef ListID' => true,
  'ARAccountRef FullName' => true,
  'ClassRef ListID' => true,
  'ClassRef FullName' => true,
  'BilledDate' => true,
  'DueDate' => true,
  'OverrideItemAccountRef ListID' => true,
  'OverrideItemAccountRef FullName' => true,
  'ExternalGUID' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 999.99,
  'CustomerRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'ItemRef ListID' => 999.99,
  'ItemRef FullName' => 999.99,
  'InventorySiteRef ListID' => 999.99,
  'InventorySiteRef FullName' => 999.99,
  'InventorySiteLocationRef ListID' => 999.99,
  'InventorySiteLocationRef FullName' => 999.99,
  'Quantity' => 999.99,
  'UnitOfMeasure' => 7.0,
  'Rate' => 999.99,
  'OptionForPriceRuleConflict' => 13.0,
  'Amount' => 999.99,
  'Desc' => 999.99,
  'ARAccountRef ListID' => 999.99,
  'ARAccountRef FullName' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'BilledDate' => 999.99,
  'DueDate' => 999.99,
  'OverrideItemAccountRef ListID' => 999.99,
  'OverrideItemAccountRef FullName' => 999.99,
  'ExternalGUID' => 9.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'CustomerRef ListID' => false,
  'CustomerRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'ItemRef ListID' => false,
  'ItemRef FullName' => false,
  'InventorySiteRef ListID' => false,
  'InventorySiteRef FullName' => false,
  'InventorySiteLocationRef ListID' => false,
  'InventorySiteLocationRef FullName' => false,
  'Quantity' => false,
  'UnitOfMeasure' => false,
  'Rate' => false,
  'OptionForPriceRuleConflict' => false,
  'Amount' => false,
  'Desc' => false,
  'ARAccountRef ListID' => false,
  'ARAccountRef FullName' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'BilledDate' => false,
  'DueDate' => false,
  'OverrideItemAccountRef ListID' => false,
  'OverrideItemAccountRef FullName' => false,
  'ExternalGUID' => false,
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
  'CustomerRef',
  'CustomerRef ListID',
  'CustomerRef FullName',
  'TxnDate',
  'RefNumber',
  'ItemRef',
  'ItemRef ListID',
  'ItemRef FullName',
  'InventorySiteRef',
  'InventorySiteRef ListID',
  'InventorySiteRef FullName',
  'InventorySiteLocationRef',
  'InventorySiteLocationRef ListID',
  'InventorySiteLocationRef FullName',
  'Quantity',
  'UnitOfMeasure',
  'Rate',
  'OptionForPriceRuleConflict',
  'Amount',
  'Desc',
  'ARAccountRef',
  'ARAccountRef ListID',
  'ARAccountRef FullName',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'BilledDate',
  'DueDate',
  'OverrideItemAccountRef',
  'OverrideItemAccountRef ListID',
  'OverrideItemAccountRef FullName',
  'ExternalGUID',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
