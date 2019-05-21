<?php

/**
 * Schema object for: ItemInventoryAssemblyAddRq
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
class QuickBooks_QBXML_Schema_Object_ItemInventoryAssemblyAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ItemInventoryAssemblyAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'BarCode BarCodeValue' => 'STRTYPE',
  'BarCode AssignEvenIfUsed' => 'BOOLTYPE',
  'BarCode AllowOverride' => 'BOOLTYPE',
  'IsActive' => 'BOOLTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'ParentRef ListID' => 'IDTYPE',
  'ParentRef FullName' => 'STRTYPE',
  'ManufacturerPartNumber' => 'STRTYPE',
  'UnitOfMeasureSetRef ListID' => 'IDTYPE',
  'UnitOfMeasureSetRef FullName' => 'STRTYPE',
  'IsTaxIncluded' => 'BOOLTYPE',
  'SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesTaxCodeRef FullName' => 'STRTYPE',
  'SalesDesc' => 'STRTYPE',
  'SalesPrice' => 'PRICETYPE',
  'IncomeAccountRef ListID' => 'IDTYPE',
  'IncomeAccountRef FullName' => 'STRTYPE',
  'PurchaseDesc' => 'STRTYPE',
  'PurchaseCost' => 'PRICETYPE',
  'PurchaseTaxCodeRef ListID' => 'IDTYPE',
  'PurchaseTaxCodeRef FullName' => 'STRTYPE',
  'COGSAccountRef ListID' => 'IDTYPE',
  'COGSAccountRef FullName' => 'STRTYPE',
  'PrefVendorRef ListID' => 'IDTYPE',
  'PrefVendorRef FullName' => 'STRTYPE',
  'AssetAccountRef ListID' => 'IDTYPE',
  'AssetAccountRef FullName' => 'STRTYPE',
  'BuildPoint' => 'QUANTYPE',
  'Max' => 'QUANTYPE',
  'QuantityOnHand' => 'QUANTYPE',
  'TotalValue' => 'AMTTYPE',
  'InventoryDate' => 'DATETYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'ItemInventoryAssemblyLine ItemInventoryRef ListID' => 'IDTYPE',
  'ItemInventoryAssemblyLine ItemInventoryRef FullName' => 'STRTYPE',
  'ItemInventoryAssemblyLine Quantity' => 'QUANTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 31,
  'BarCode BarCodeValue' => 50,
  'BarCode AssignEvenIfUsed' => 0,
  'BarCode AllowOverride' => 0,
  'IsActive' => 0,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 159,
  'ParentRef ListID' => 0,
  'ParentRef FullName' => 159,
  'ManufacturerPartNumber' => 31,
  'UnitOfMeasureSetRef ListID' => 0,
  'UnitOfMeasureSetRef FullName' => 159,
  'IsTaxIncluded' => 0,
  'SalesTaxCodeRef ListID' => 0,
  'SalesTaxCodeRef FullName' => 159,
  'SalesDesc' => 4095,
  'SalesPrice' => 0,
  'IncomeAccountRef ListID' => 0,
  'IncomeAccountRef FullName' => 159,
  'PurchaseDesc' => 4095,
  'PurchaseCost' => 0,
  'PurchaseTaxCodeRef ListID' => 0,
  'PurchaseTaxCodeRef FullName' => 159,
  'COGSAccountRef ListID' => 0,
  'COGSAccountRef FullName' => 159,
  'PrefVendorRef ListID' => 0,
  'PrefVendorRef FullName' => 159,
  'AssetAccountRef ListID' => 0,
  'AssetAccountRef FullName' => 159,
  'BuildPoint' => 0,
  'Max' => 0,
  'QuantityOnHand' => 0,
  'TotalValue' => 0,
  'InventoryDate' => 0,
  'ExternalGUID' => 0,
  'ItemInventoryAssemblyLine ItemInventoryRef ListID' => 0,
  'ItemInventoryAssemblyLine ItemInventoryRef FullName' => 159,
  'ItemInventoryAssemblyLine Quantity' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'BarCode BarCodeValue' => true,
  'BarCode AssignEvenIfUsed' => true,
  'BarCode AllowOverride' => true,
  'IsActive' => true,
  'ClassRef ListID' => true,
  'ClassRef FullName' => true,
  'ParentRef ListID' => true,
  'ParentRef FullName' => true,
  'ManufacturerPartNumber' => true,
  'UnitOfMeasureSetRef ListID' => true,
  'UnitOfMeasureSetRef FullName' => true,
  'IsTaxIncluded' => true,
  'SalesTaxCodeRef ListID' => true,
  'SalesTaxCodeRef FullName' => true,
  'SalesDesc' => true,
  'SalesPrice' => true,
  'IncomeAccountRef ListID' => true,
  'IncomeAccountRef FullName' => true,
  'PurchaseDesc' => true,
  'PurchaseCost' => true,
  'PurchaseTaxCodeRef ListID' => true,
  'PurchaseTaxCodeRef FullName' => true,
  'COGSAccountRef ListID' => true,
  'COGSAccountRef FullName' => true,
  'PrefVendorRef ListID' => true,
  'PrefVendorRef FullName' => true,
  'AssetAccountRef ListID' => true,
  'AssetAccountRef FullName' => true,
  'BuildPoint' => true,
  'Max' => true,
  'QuantityOnHand' => true,
  'TotalValue' => true,
  'InventoryDate' => true,
  'ExternalGUID' => true,
  'ItemInventoryAssemblyLine ItemInventoryRef ListID' => true,
  'ItemInventoryAssemblyLine ItemInventoryRef FullName' => true,
  'ItemInventoryAssemblyLine Quantity' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'BarCode BarCodeValue' => 999.99,
  'BarCode AssignEvenIfUsed' => 999.99,
  'BarCode AllowOverride' => 999.99,
  'IsActive' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'ParentRef ListID' => 999.99,
  'ParentRef FullName' => 999.99,
  'ManufacturerPartNumber' => 12.0,
  'UnitOfMeasureSetRef ListID' => 999.99,
  'UnitOfMeasureSetRef FullName' => 999.99,
  'IsTaxIncluded' => 6.0,
  'SalesTaxCodeRef ListID' => 999.99,
  'SalesTaxCodeRef FullName' => 999.99,
  'SalesDesc' => 999.99,
  'SalesPrice' => 999.99,
  'IncomeAccountRef ListID' => 999.99,
  'IncomeAccountRef FullName' => 999.99,
  'PurchaseDesc' => 999.99,
  'PurchaseCost' => 999.99,
  'PurchaseTaxCodeRef ListID' => 999.99,
  'PurchaseTaxCodeRef FullName' => 999.99,
  'COGSAccountRef ListID' => 999.99,
  'COGSAccountRef FullName' => 999.99,
  'PrefVendorRef ListID' => 999.99,
  'PrefVendorRef FullName' => 999.99,
  'AssetAccountRef ListID' => 999.99,
  'AssetAccountRef FullName' => 999.99,
  'BuildPoint' => 999.99,
  'Max' => 13.0,
  'QuantityOnHand' => 999.99,
  'TotalValue' => 999.99,
  'InventoryDate' => 999.99,
  'ExternalGUID' => 8.0,
  'ItemInventoryAssemblyLine ItemInventoryRef ListID' => 999.99,
  'ItemInventoryAssemblyLine ItemInventoryRef FullName' => 999.99,
  'ItemInventoryAssemblyLine Quantity' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'BarCode BarCodeValue' => false,
  'BarCode AssignEvenIfUsed' => false,
  'BarCode AllowOverride' => false,
  'IsActive' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'ParentRef ListID' => false,
  'ParentRef FullName' => false,
  'ManufacturerPartNumber' => false,
  'UnitOfMeasureSetRef ListID' => false,
  'UnitOfMeasureSetRef FullName' => false,
  'IsTaxIncluded' => false,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => false,
  'SalesDesc' => false,
  'SalesPrice' => false,
  'IncomeAccountRef ListID' => false,
  'IncomeAccountRef FullName' => false,
  'PurchaseDesc' => false,
  'PurchaseCost' => false,
  'PurchaseTaxCodeRef ListID' => false,
  'PurchaseTaxCodeRef FullName' => false,
  'COGSAccountRef ListID' => false,
  'COGSAccountRef FullName' => false,
  'PrefVendorRef ListID' => false,
  'PrefVendorRef FullName' => false,
  'AssetAccountRef ListID' => false,
  'AssetAccountRef FullName' => false,
  'BuildPoint' => false,
  'Max' => false,
  'QuantityOnHand' => false,
  'TotalValue' => false,
  'InventoryDate' => false,
  'ExternalGUID' => false,
  'ItemInventoryAssemblyLine ItemInventoryRef ListID' => false,
  'ItemInventoryAssemblyLine ItemInventoryRef FullName' => false,
  'ItemInventoryAssemblyLine Quantity' => false,
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
  'Name',
  'BarCode',
  'BarCode BarCodeValue',
  'BarCode AssignEvenIfUsed',
  'BarCode AllowOverride',
  'IsActive',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'ParentRef',
  'ParentRef ListID',
  'ParentRef FullName',
  'ManufacturerPartNumber',
  'UnitOfMeasureSetRef',
  'UnitOfMeasureSetRef ListID',
  'UnitOfMeasureSetRef FullName',
  'IsTaxIncluded',
  'SalesTaxCodeRef',
  'SalesTaxCodeRef ListID',
  'SalesTaxCodeRef FullName',
  'SalesDesc',
  'SalesPrice',
  'IncomeAccountRef',
  'IncomeAccountRef ListID',
  'IncomeAccountRef FullName',
  'PurchaseDesc',
  'PurchaseCost',
  'PurchaseTaxCodeRef',
  'PurchaseTaxCodeRef ListID',
  'PurchaseTaxCodeRef FullName',
  'COGSAccountRef',
  'COGSAccountRef ListID',
  'COGSAccountRef FullName',
  'PrefVendorRef',
  'PrefVendorRef ListID',
  'PrefVendorRef FullName',
  'AssetAccountRef',
  'AssetAccountRef ListID',
  'AssetAccountRef FullName',
  'BuildPoint',
  'Max',
  'QuantityOnHand',
  'TotalValue',
  'InventoryDate',
  'ExternalGUID',
  'ItemInventoryAssemblyLine',
  'ItemInventoryAssemblyLine ItemInventoryRef',
  'ItemInventoryAssemblyLine ItemInventoryRef ListID',
  'ItemInventoryAssemblyLine ItemInventoryRef FullName',
  'ItemInventoryAssemblyLine Quantity',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
