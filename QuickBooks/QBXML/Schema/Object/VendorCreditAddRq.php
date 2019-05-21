<?php

/**
 * Schema object for: VendorCreditAddRq
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
class QuickBooks_QBXML_Schema_Object_VendorCreditAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'VendorCreditAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'VendorRef ListID' => 'IDTYPE',
  'VendorRef FullName' => 'STRTYPE',
  'APAccountRef ListID' => 'IDTYPE',
  'APAccountRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'IsTaxIncluded' => 'BOOLTYPE',
  'SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesTaxCodeRef FullName' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'ExpenseLineAdd AccountRef ListID' => 'IDTYPE',
  'ExpenseLineAdd AccountRef FullName' => 'STRTYPE',
  'ExpenseLineAdd Amount' => 'AMTTYPE',
  'ExpenseLineAdd TaxAmount' => 'AMTTYPE',
  'ExpenseLineAdd Memo' => 'STRTYPE',
  'ExpenseLineAdd CustomerRef ListID' => 'IDTYPE',
  'ExpenseLineAdd CustomerRef FullName' => 'STRTYPE',
  'ExpenseLineAdd ClassRef ListID' => 'IDTYPE',
  'ExpenseLineAdd ClassRef FullName' => 'STRTYPE',
  'ExpenseLineAdd SalesTaxCodeRef ListID' => 'IDTYPE',
  'ExpenseLineAdd SalesTaxCodeRef FullName' => 'STRTYPE',
  'ExpenseLineAdd BillableStatus' => 'ENUMTYPE',
  'ExpenseLineAdd SalesRepRef ListID' => 'IDTYPE',
  'ExpenseLineAdd SalesRepRef FullName' => 'STRTYPE',
  'ExpenseLineAdd DataExt OwnerID' => 'GUIDTYPE',
  'ExpenseLineAdd DataExt DataExtName' => 'STRTYPE',
  'ExpenseLineAdd DataExt DataExtValue' => 'STRTYPE',
  'ItemLineAdd ItemRef ListID' => 'IDTYPE',
  'ItemLineAdd ItemRef FullName' => 'STRTYPE',
  'ItemLineAdd InventorySiteRef ListID' => 'IDTYPE',
  'ItemLineAdd InventorySiteRef FullName' => 'STRTYPE',
  'ItemLineAdd InventorySiteLocationRef ListID' => 'IDTYPE',
  'ItemLineAdd InventorySiteLocationRef FullName' => 'STRTYPE',
  'ItemLineAdd SerialNumber' => 'STRTYPE',
  'ItemLineAdd LotNumber' => 'STRTYPE',
  'ItemLineAdd Desc' => 'STRTYPE',
  'ItemLineAdd Quantity' => 'QUANTYPE',
  'ItemLineAdd UnitOfMeasure' => 'STRTYPE',
  'ItemLineAdd Cost' => 'PRICETYPE',
  'ItemLineAdd Amount' => 'AMTTYPE',
  'ItemLineAdd TaxAmount' => 'AMTTYPE',
  'ItemLineAdd CustomerRef ListID' => 'IDTYPE',
  'ItemLineAdd CustomerRef FullName' => 'STRTYPE',
  'ItemLineAdd ClassRef ListID' => 'IDTYPE',
  'ItemLineAdd ClassRef FullName' => 'STRTYPE',
  'ItemLineAdd SalesTaxCodeRef ListID' => 'IDTYPE',
  'ItemLineAdd SalesTaxCodeRef FullName' => 'STRTYPE',
  'ItemLineAdd BillableStatus' => 'ENUMTYPE',
  'ItemLineAdd OverrideItemAccountRef ListID' => 'IDTYPE',
  'ItemLineAdd OverrideItemAccountRef FullName' => 'STRTYPE',
  'ItemLineAdd LinkToTxn TxnID' => 'IDTYPE',
  'ItemLineAdd LinkToTxn TxnLineID' => 'IDTYPE',
  'ItemLineAdd SalesRepRef ListID' => 'IDTYPE',
  'ItemLineAdd SalesRepRef FullName' => 'STRTYPE',
  'ItemLineAdd DataExt OwnerID' => 'GUIDTYPE',
  'ItemLineAdd DataExt DataExtName' => 'STRTYPE',
  'ItemLineAdd DataExt DataExtValue' => 'STRTYPE',
  'ItemGroupLineAdd ItemGroupRef ListID' => 'IDTYPE',
  'ItemGroupLineAdd ItemGroupRef FullName' => 'STRTYPE',
  'ItemGroupLineAdd Desc' => 'STRTYPE',
  'ItemGroupLineAdd Quantity' => 'QUANTYPE',
  'ItemGroupLineAdd UnitOfMeasure' => 'STRTYPE',
  'ItemGroupLineAdd InventorySiteRef ListID' => 'IDTYPE',
  'ItemGroupLineAdd InventorySiteRef FullName' => 'STRTYPE',
  'ItemGroupLineAdd InventorySiteLocationRef ListID' => 'IDTYPE',
  'ItemGroupLineAdd InventorySiteLocationRef FullName' => 'STRTYPE',
  'ItemGroupLineAdd DataExt OwnerID' => 'GUIDTYPE',
  'ItemGroupLineAdd DataExt DataExtName' => 'STRTYPE',
  'ItemGroupLineAdd DataExt DataExtValue' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'VendorRef ListID' => 0,
  'VendorRef FullName' => 41,
  'APAccountRef ListID' => 0,
  'APAccountRef FullName' => 41,
  'TxnDate' => 0,
  'RefNumber' => 20,
  'Memo' => 4095,
  'IsTaxIncluded' => 0,
  'SalesTaxCodeRef ListID' => 0,
  'SalesTaxCodeRef FullName' => 41,
  'ExchangeRate' => 0,
  'ExternalGUID' => 0,
  'ExpenseLineAdd AccountRef ListID' => 0,
  'ExpenseLineAdd AccountRef FullName' => 41,
  'ExpenseLineAdd Amount' => 0,
  'ExpenseLineAdd TaxAmount' => 0,
  'ExpenseLineAdd Memo' => 4095,
  'ExpenseLineAdd CustomerRef ListID' => 0,
  'ExpenseLineAdd CustomerRef FullName' => 41,
  'ExpenseLineAdd ClassRef ListID' => 0,
  'ExpenseLineAdd ClassRef FullName' => 41,
  'ExpenseLineAdd SalesTaxCodeRef ListID' => 0,
  'ExpenseLineAdd SalesTaxCodeRef FullName' => 41,
  'ExpenseLineAdd BillableStatus' => 0,
  'ExpenseLineAdd SalesRepRef ListID' => 0,
  'ExpenseLineAdd SalesRepRef FullName' => 41,
  'ExpenseLineAdd DataExt OwnerID' => 0,
  'ExpenseLineAdd DataExt DataExtName' => 31,
  'ExpenseLineAdd DataExt DataExtValue' => 0,
  'ItemLineAdd ItemRef ListID' => 0,
  'ItemLineAdd ItemRef FullName' => 41,
  'ItemLineAdd InventorySiteRef ListID' => 0,
  'ItemLineAdd InventorySiteRef FullName' => 41,
  'ItemLineAdd InventorySiteLocationRef ListID' => 0,
  'ItemLineAdd InventorySiteLocationRef FullName' => 41,
  'ItemLineAdd SerialNumber' => 4095,
  'ItemLineAdd LotNumber' => 40,
  'ItemLineAdd Desc' => 4095,
  'ItemLineAdd Quantity' => 0,
  'ItemLineAdd UnitOfMeasure' => 31,
  'ItemLineAdd Cost' => 0,
  'ItemLineAdd Amount' => 0,
  'ItemLineAdd TaxAmount' => 0,
  'ItemLineAdd CustomerRef ListID' => 0,
  'ItemLineAdd CustomerRef FullName' => 41,
  'ItemLineAdd ClassRef ListID' => 0,
  'ItemLineAdd ClassRef FullName' => 41,
  'ItemLineAdd SalesTaxCodeRef ListID' => 0,
  'ItemLineAdd SalesTaxCodeRef FullName' => 41,
  'ItemLineAdd BillableStatus' => 0,
  'ItemLineAdd OverrideItemAccountRef ListID' => 0,
  'ItemLineAdd OverrideItemAccountRef FullName' => 41,
  'ItemLineAdd LinkToTxn TxnID' => 0,
  'ItemLineAdd LinkToTxn TxnLineID' => 0,
  'ItemLineAdd SalesRepRef ListID' => 0,
  'ItemLineAdd SalesRepRef FullName' => 41,
  'ItemLineAdd DataExt OwnerID' => 0,
  'ItemLineAdd DataExt DataExtName' => 31,
  'ItemLineAdd DataExt DataExtValue' => 0,
  'ItemGroupLineAdd ItemGroupRef ListID' => 0,
  'ItemGroupLineAdd ItemGroupRef FullName' => 41,
  'ItemGroupLineAdd Desc' => 4095,
  'ItemGroupLineAdd Quantity' => 0,
  'ItemGroupLineAdd UnitOfMeasure' => 31,
  'ItemGroupLineAdd InventorySiteRef ListID' => 0,
  'ItemGroupLineAdd InventorySiteRef FullName' => 41,
  'ItemGroupLineAdd InventorySiteLocationRef ListID' => 0,
  'ItemGroupLineAdd InventorySiteLocationRef FullName' => 41,
  'ItemGroupLineAdd DataExt OwnerID' => 0,
  'ItemGroupLineAdd DataExt DataExtName' => 31,
  'ItemGroupLineAdd DataExt DataExtValue' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'VendorRef ListID' => true,
  'VendorRef FullName' => true,
  'APAccountRef ListID' => true,
  'APAccountRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'Memo' => true,
  'IsTaxIncluded' => true,
  'SalesTaxCodeRef ListID' => true,
  'SalesTaxCodeRef FullName' => true,
  'ExchangeRate' => true,
  'ExternalGUID' => true,
  'ExpenseLineAdd AccountRef ListID' => true,
  'ExpenseLineAdd AccountRef FullName' => true,
  'ExpenseLineAdd Amount' => true,
  'ExpenseLineAdd TaxAmount' => true,
  'ExpenseLineAdd Memo' => true,
  'ExpenseLineAdd CustomerRef ListID' => true,
  'ExpenseLineAdd CustomerRef FullName' => true,
  'ExpenseLineAdd ClassRef ListID' => true,
  'ExpenseLineAdd ClassRef FullName' => true,
  'ExpenseLineAdd SalesTaxCodeRef ListID' => true,
  'ExpenseLineAdd SalesTaxCodeRef FullName' => true,
  'ExpenseLineAdd BillableStatus' => true,
  'ExpenseLineAdd SalesRepRef ListID' => true,
  'ExpenseLineAdd SalesRepRef FullName' => true,
  'ExpenseLineAdd DataExt OwnerID' => false,
  'ExpenseLineAdd DataExt DataExtName' => false,
  'ExpenseLineAdd DataExt DataExtValue' => false,
  'ItemLineAdd ItemRef ListID' => true,
  'ItemLineAdd ItemRef FullName' => true,
  'ItemLineAdd InventorySiteRef ListID' => true,
  'ItemLineAdd InventorySiteRef FullName' => true,
  'ItemLineAdd InventorySiteLocationRef ListID' => true,
  'ItemLineAdd InventorySiteLocationRef FullName' => true,
  'ItemLineAdd SerialNumber' => true,
  'ItemLineAdd LotNumber' => true,
  'ItemLineAdd Desc' => true,
  'ItemLineAdd Quantity' => true,
  'ItemLineAdd UnitOfMeasure' => true,
  'ItemLineAdd Cost' => true,
  'ItemLineAdd Amount' => true,
  'ItemLineAdd TaxAmount' => true,
  'ItemLineAdd CustomerRef ListID' => true,
  'ItemLineAdd CustomerRef FullName' => true,
  'ItemLineAdd ClassRef ListID' => true,
  'ItemLineAdd ClassRef FullName' => true,
  'ItemLineAdd SalesTaxCodeRef ListID' => true,
  'ItemLineAdd SalesTaxCodeRef FullName' => true,
  'ItemLineAdd BillableStatus' => true,
  'ItemLineAdd OverrideItemAccountRef ListID' => true,
  'ItemLineAdd OverrideItemAccountRef FullName' => true,
  'ItemLineAdd LinkToTxn TxnID' => false,
  'ItemLineAdd LinkToTxn TxnLineID' => false,
  'ItemLineAdd SalesRepRef ListID' => true,
  'ItemLineAdd SalesRepRef FullName' => true,
  'ItemLineAdd DataExt OwnerID' => false,
  'ItemLineAdd DataExt DataExtName' => false,
  'ItemLineAdd DataExt DataExtValue' => false,
  'ItemGroupLineAdd ItemGroupRef ListID' => true,
  'ItemGroupLineAdd ItemGroupRef FullName' => true,
  'ItemGroupLineAdd Desc' => true,
  'ItemGroupLineAdd Quantity' => true,
  'ItemGroupLineAdd UnitOfMeasure' => true,
  'ItemGroupLineAdd InventorySiteRef ListID' => true,
  'ItemGroupLineAdd InventorySiteRef FullName' => true,
  'ItemGroupLineAdd InventorySiteLocationRef ListID' => true,
  'ItemGroupLineAdd InventorySiteLocationRef FullName' => true,
  'ItemGroupLineAdd DataExt OwnerID' => false,
  'ItemGroupLineAdd DataExt DataExtName' => false,
  'ItemGroupLineAdd DataExt DataExtValue' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'VendorRef ListID' => 999.99,
  'VendorRef FullName' => 999.99,
  'APAccountRef ListID' => 999.99,
  'APAccountRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'Memo' => 999.99,
  'IsTaxIncluded' => 8.0,
  'SalesTaxCodeRef ListID' => 999.99,
  'SalesTaxCodeRef FullName' => 999.99,
  'ExchangeRate' => 8.0,
  'ExternalGUID' => 9.0,
  'ExpenseLineAdd AccountRef ListID' => 999.99,
  'ExpenseLineAdd AccountRef FullName' => 999.99,
  'ExpenseLineAdd Amount' => 999.99,
  'ExpenseLineAdd TaxAmount' => 6.1,
  'ExpenseLineAdd Memo' => 999.99,
  'ExpenseLineAdd CustomerRef ListID' => 999.99,
  'ExpenseLineAdd CustomerRef FullName' => 999.99,
  'ExpenseLineAdd ClassRef ListID' => 999.99,
  'ExpenseLineAdd ClassRef FullName' => 999.99,
  'ExpenseLineAdd SalesTaxCodeRef ListID' => 999.99,
  'ExpenseLineAdd SalesTaxCodeRef FullName' => 999.99,
  'ExpenseLineAdd BillableStatus' => 2.0,
  'ExpenseLineAdd SalesRepRef ListID' => 999.99,
  'ExpenseLineAdd SalesRepRef FullName' => 999.99,
  'ExpenseLineAdd DataExt OwnerID' => 999.99,
  'ExpenseLineAdd DataExt DataExtName' => 999.99,
  'ExpenseLineAdd DataExt DataExtValue' => 999.99,
  'ItemLineAdd ItemRef ListID' => 999.99,
  'ItemLineAdd ItemRef FullName' => 999.99,
  'ItemLineAdd InventorySiteRef ListID' => 999.99,
  'ItemLineAdd InventorySiteRef FullName' => 999.99,
  'ItemLineAdd InventorySiteLocationRef ListID' => 999.99,
  'ItemLineAdd InventorySiteLocationRef FullName' => 999.99,
  'ItemLineAdd SerialNumber' => 999.99,
  'ItemLineAdd LotNumber' => 999.99,
  'ItemLineAdd Desc' => 999.99,
  'ItemLineAdd Quantity' => 999.99,
  'ItemLineAdd UnitOfMeasure' => 7.0,
  'ItemLineAdd Cost' => 999.99,
  'ItemLineAdd Amount' => 999.99,
  'ItemLineAdd TaxAmount' => 6.1,
  'ItemLineAdd CustomerRef ListID' => 999.99,
  'ItemLineAdd CustomerRef FullName' => 999.99,
  'ItemLineAdd ClassRef ListID' => 999.99,
  'ItemLineAdd ClassRef FullName' => 999.99,
  'ItemLineAdd SalesTaxCodeRef ListID' => 999.99,
  'ItemLineAdd SalesTaxCodeRef FullName' => 999.99,
  'ItemLineAdd BillableStatus' => 2.0,
  'ItemLineAdd OverrideItemAccountRef ListID' => 999.99,
  'ItemLineAdd OverrideItemAccountRef FullName' => 999.99,
  'ItemLineAdd LinkToTxn TxnID' => 999.99,
  'ItemLineAdd LinkToTxn TxnLineID' => 999.99,
  'ItemLineAdd SalesRepRef ListID' => 999.99,
  'ItemLineAdd SalesRepRef FullName' => 999.99,
  'ItemLineAdd DataExt OwnerID' => 999.99,
  'ItemLineAdd DataExt DataExtName' => 999.99,
  'ItemLineAdd DataExt DataExtValue' => 999.99,
  'ItemGroupLineAdd ItemGroupRef ListID' => 999.99,
  'ItemGroupLineAdd ItemGroupRef FullName' => 999.99,
  'ItemGroupLineAdd Desc' => 999.99,
  'ItemGroupLineAdd Quantity' => 999.99,
  'ItemGroupLineAdd UnitOfMeasure' => 7.0,
  'ItemGroupLineAdd InventorySiteRef ListID' => 999.99,
  'ItemGroupLineAdd InventorySiteRef FullName' => 999.99,
  'ItemGroupLineAdd InventorySiteLocationRef ListID' => 999.99,
  'ItemGroupLineAdd InventorySiteLocationRef FullName' => 999.99,
  'ItemGroupLineAdd DataExt OwnerID' => 999.99,
  'ItemGroupLineAdd DataExt DataExtName' => 999.99,
  'ItemGroupLineAdd DataExt DataExtValue' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'VendorRef ListID' => false,
  'VendorRef FullName' => false,
  'APAccountRef ListID' => false,
  'APAccountRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'Memo' => false,
  'IsTaxIncluded' => false,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => false,
  'ExchangeRate' => false,
  'ExternalGUID' => false,
  'ExpenseLineAdd AccountRef ListID' => false,
  'ExpenseLineAdd AccountRef FullName' => false,
  'ExpenseLineAdd Amount' => false,
  'ExpenseLineAdd TaxAmount' => false,
  'ExpenseLineAdd Memo' => false,
  'ExpenseLineAdd CustomerRef ListID' => false,
  'ExpenseLineAdd CustomerRef FullName' => false,
  'ExpenseLineAdd ClassRef ListID' => false,
  'ExpenseLineAdd ClassRef FullName' => false,
  'ExpenseLineAdd SalesTaxCodeRef ListID' => false,
  'ExpenseLineAdd SalesTaxCodeRef FullName' => false,
  'ExpenseLineAdd BillableStatus' => false,
  'ExpenseLineAdd SalesRepRef ListID' => false,
  'ExpenseLineAdd SalesRepRef FullName' => false,
  'ExpenseLineAdd DataExt OwnerID' => false,
  'ExpenseLineAdd DataExt DataExtName' => false,
  'ExpenseLineAdd DataExt DataExtValue' => false,
  'ItemLineAdd ItemRef ListID' => false,
  'ItemLineAdd ItemRef FullName' => false,
  'ItemLineAdd InventorySiteRef ListID' => false,
  'ItemLineAdd InventorySiteRef FullName' => false,
  'ItemLineAdd InventorySiteLocationRef ListID' => false,
  'ItemLineAdd InventorySiteLocationRef FullName' => false,
  'ItemLineAdd SerialNumber' => false,
  'ItemLineAdd LotNumber' => false,
  'ItemLineAdd Desc' => false,
  'ItemLineAdd Quantity' => false,
  'ItemLineAdd UnitOfMeasure' => false,
  'ItemLineAdd Cost' => false,
  'ItemLineAdd Amount' => false,
  'ItemLineAdd TaxAmount' => false,
  'ItemLineAdd CustomerRef ListID' => false,
  'ItemLineAdd CustomerRef FullName' => false,
  'ItemLineAdd ClassRef ListID' => false,
  'ItemLineAdd ClassRef FullName' => false,
  'ItemLineAdd SalesTaxCodeRef ListID' => false,
  'ItemLineAdd SalesTaxCodeRef FullName' => false,
  'ItemLineAdd BillableStatus' => false,
  'ItemLineAdd OverrideItemAccountRef ListID' => false,
  'ItemLineAdd OverrideItemAccountRef FullName' => false,
  'ItemLineAdd LinkToTxn TxnID' => false,
  'ItemLineAdd LinkToTxn TxnLineID' => false,
  'ItemLineAdd SalesRepRef ListID' => false,
  'ItemLineAdd SalesRepRef FullName' => false,
  'ItemLineAdd DataExt OwnerID' => false,
  'ItemLineAdd DataExt DataExtName' => false,
  'ItemLineAdd DataExt DataExtValue' => false,
  'ItemGroupLineAdd ItemGroupRef ListID' => false,
  'ItemGroupLineAdd ItemGroupRef FullName' => false,
  'ItemGroupLineAdd Desc' => false,
  'ItemGroupLineAdd Quantity' => false,
  'ItemGroupLineAdd UnitOfMeasure' => false,
  'ItemGroupLineAdd InventorySiteRef ListID' => false,
  'ItemGroupLineAdd InventorySiteRef FullName' => false,
  'ItemGroupLineAdd InventorySiteLocationRef ListID' => false,
  'ItemGroupLineAdd InventorySiteLocationRef FullName' => false,
  'ItemGroupLineAdd DataExt OwnerID' => false,
  'ItemGroupLineAdd DataExt DataExtName' => false,
  'ItemGroupLineAdd DataExt DataExtValue' => false,
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
  'VendorRef',
  'VendorRef ListID',
  'VendorRef FullName',
  'APAccountRef',
  'APAccountRef ListID',
  'APAccountRef FullName',
  'TxnDate',
  'RefNumber',
  'Memo',
  'IsTaxIncluded',
  'SalesTaxCodeRef',
  'SalesTaxCodeRef ListID',
  'SalesTaxCodeRef FullName',
  'ExchangeRate',
  'ExternalGUID',
  'ExpenseLineAdd',
  'ExpenseLineAdd AccountRef',
  'ExpenseLineAdd AccountRef ListID',
  'ExpenseLineAdd AccountRef FullName',
  'ExpenseLineAdd Amount',
  'ExpenseLineAdd TaxAmount',
  'ExpenseLineAdd Memo',
  'ExpenseLineAdd CustomerRef ListID',
  'ExpenseLineAdd CustomerRef FullName',
  'ExpenseLineAdd ClassRef ListID',
  'ExpenseLineAdd ClassRef FullName',
  'ExpenseLineAdd SalesTaxCodeRef ListID',
  'ExpenseLineAdd SalesTaxCodeRef FullName',
  'ExpenseLineAdd BillableStatus',
  'ExpenseLineAdd SalesRepRef ListID',
  'ExpenseLineAdd SalesRepRef FullName',
  'ExpenseLineAdd DataExt OwnerID',
  'ExpenseLineAdd DataExt DataExtName',
  'ExpenseLineAdd DataExt DataExtValue',
  'ItemLineAdd',
  'ItemLineAdd ItemRef ListID',
  'ItemLineAdd ItemRef FullName',
  'ItemLineAdd InventorySiteRef ListID',
  'ItemLineAdd InventorySiteRef FullName',
  'ItemLineAdd InventorySiteLocationRef ListID',
  'ItemLineAdd InventorySiteLocationRef FullName',
  'ItemLineAdd SerialNumber',
  'ItemLineAdd LotNumber',
  'ItemLineAdd Desc',
  'ItemLineAdd Quantity',
  'ItemLineAdd UnitOfMeasure',
  'ItemLineAdd Cost',
  'ItemLineAdd Amount',
  'ItemLineAdd TaxAmount',
  'ItemLineAdd CustomerRef ListID',
  'ItemLineAdd CustomerRef FullName',
  'ItemLineAdd ClassRef ListID',
  'ItemLineAdd ClassRef FullName',
  'ItemLineAdd SalesTaxCodeRef ListID',
  'ItemLineAdd SalesTaxCodeRef FullName',
  'ItemLineAdd BillableStatus',
  'ItemLineAdd OverrideItemAccountRef ListID',
  'ItemLineAdd OverrideItemAccountRef FullName',
  'ItemLineAdd LinkToTxn TxnID',
  'ItemLineAdd LinkToTxn TxnLineID',
  'ItemLineAdd SalesRepRef ListID',
  'ItemLineAdd SalesRepRef FullName',
  'ItemLineAdd DataExt OwnerID',
  'ItemLineAdd DataExt DataExtName',
  'ItemLineAdd DataExt DataExtValue',
  'ItemGroupLineAdd',
  'ItemGroupLineAdd ItemGroupRef ListID',
  'ItemGroupLineAdd ItemGroupRef FullName',
  'ItemGroupLineAdd Desc',
  'ItemGroupLineAdd Quantity',
  'ItemGroupLineAdd UnitOfMeasure',
  'ItemGroupLineAdd InventorySiteRef ListID',
  'ItemGroupLineAdd InventorySiteRef FullName',
  'ItemGroupLineAdd InventorySiteLocationRef ListID',
  'ItemGroupLineAdd InventorySiteLocationRef FullName',
  'ItemGroupLineAdd DataExt OwnerID',
  'ItemGroupLineAdd DataExt DataExtName',
  'ItemGroupLineAdd DataExt DataExtValue',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
