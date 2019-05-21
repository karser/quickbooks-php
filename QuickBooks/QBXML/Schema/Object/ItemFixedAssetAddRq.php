<?php

/**
 * Schema object for: ItemFixedAssetAddRq
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
class QuickBooks_QBXML_Schema_Object_ItemFixedAssetAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ItemFixedAssetAdd';
		
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
  'AcquiredAs' => 'ENUMTYPE',
  'PurchaseDesc' => 'STRTYPE',
  'PurchaseDate' => 'DATETYPE',
  'PurchaseCost' => 'PRICETYPE',
  'VendorOrPayeeName' => 'STRTYPE',
  'AssetAccountRef ListID' => 'IDTYPE',
  'AssetAccountRef FullName' => 'STRTYPE',
  'FixedAssetSalesInfo SalesDesc' => 'STRTYPE',
  'FixedAssetSalesInfo SalesDate' => 'DATETYPE',
  'FixedAssetSalesInfo SalesPrice' => 'PRICETYPE',
  'FixedAssetSalesInfo SalesExpense' => 'PRICETYPE',
  'AssetDesc' => 'STRTYPE',
  'Location' => 'STRTYPE',
  'PONumber' => 'STRTYPE',
  'SerialNumber' => 'STRTYPE',
  'WarrantyExpDate' => 'DATETYPE',
  'Notes' => 'STRTYPE',
  'AssetNumber' => 'STRTYPE',
  'CostBasis' => 'AMTTYPE',
  'YearEndAccumulatedDepreciation' => 'AMTTYPE',
  'YearEndBookValue' => 'AMTTYPE',
  'ExternalGUID' => 'GUIDTYPE',
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
  'AcquiredAs' => 0,
  'PurchaseDesc' => 50,
  'PurchaseDate' => 0,
  'PurchaseCost' => 0,
  'VendorOrPayeeName' => 50,
  'AssetAccountRef ListID' => 0,
  'AssetAccountRef FullName' => 159,
  'FixedAssetSalesInfo SalesDesc' => 50,
  'FixedAssetSalesInfo SalesDate' => 0,
  'FixedAssetSalesInfo SalesPrice' => 0,
  'FixedAssetSalesInfo SalesExpense' => 0,
  'AssetDesc' => 50,
  'Location' => 50,
  'PONumber' => 30,
  'SerialNumber' => 30,
  'WarrantyExpDate' => 0,
  'Notes' => 4095,
  'AssetNumber' => 10,
  'CostBasis' => 0,
  'YearEndAccumulatedDepreciation' => 0,
  'YearEndBookValue' => 0,
  'ExternalGUID' => 0,
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
  'AcquiredAs' => false,
  'PurchaseDesc' => false,
  'PurchaseDate' => false,
  'PurchaseCost' => true,
  'VendorOrPayeeName' => true,
  'AssetAccountRef ListID' => true,
  'AssetAccountRef FullName' => true,
  'FixedAssetSalesInfo SalesDesc' => false,
  'FixedAssetSalesInfo SalesDate' => false,
  'FixedAssetSalesInfo SalesPrice' => true,
  'FixedAssetSalesInfo SalesExpense' => true,
  'AssetDesc' => true,
  'Location' => true,
  'PONumber' => true,
  'SerialNumber' => true,
  'WarrantyExpDate' => true,
  'Notes' => true,
  'AssetNumber' => true,
  'CostBasis' => true,
  'YearEndAccumulatedDepreciation' => true,
  'YearEndBookValue' => true,
  'ExternalGUID' => true,
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
  'AcquiredAs' => 999.99,
  'PurchaseDesc' => 999.99,
  'PurchaseDate' => 999.99,
  'PurchaseCost' => 999.99,
  'VendorOrPayeeName' => 999.99,
  'AssetAccountRef ListID' => 999.99,
  'AssetAccountRef FullName' => 999.99,
  'FixedAssetSalesInfo SalesDesc' => 999.99,
  'FixedAssetSalesInfo SalesDate' => 999.99,
  'FixedAssetSalesInfo SalesPrice' => 999.99,
  'FixedAssetSalesInfo SalesExpense' => 999.99,
  'AssetDesc' => 999.99,
  'Location' => 999.99,
  'PONumber' => 999.99,
  'SerialNumber' => 999.99,
  'WarrantyExpDate' => 999.99,
  'Notes' => 999.99,
  'AssetNumber' => 999.99,
  'CostBasis' => 999.99,
  'YearEndAccumulatedDepreciation' => 999.99,
  'YearEndBookValue' => 999.99,
  'ExternalGUID' => 8.0,
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
  'AcquiredAs' => false,
  'PurchaseDesc' => false,
  'PurchaseDate' => false,
  'PurchaseCost' => false,
  'VendorOrPayeeName' => false,
  'AssetAccountRef ListID' => false,
  'AssetAccountRef FullName' => false,
  'FixedAssetSalesInfo SalesDesc' => false,
  'FixedAssetSalesInfo SalesDate' => false,
  'FixedAssetSalesInfo SalesPrice' => false,
  'FixedAssetSalesInfo SalesExpense' => false,
  'AssetDesc' => false,
  'Location' => false,
  'PONumber' => false,
  'SerialNumber' => false,
  'WarrantyExpDate' => false,
  'Notes' => false,
  'AssetNumber' => false,
  'CostBasis' => false,
  'YearEndAccumulatedDepreciation' => false,
  'YearEndBookValue' => false,
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
  'Name',
  'BarCode',
  'BarCode BarCodeValue',
  'BarCode AssignEvenIfUsed',
  'BarCode AllowOverride',
  'IsActive',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'AcquiredAs',
  'PurchaseDesc',
  'PurchaseDate',
  'PurchaseCost',
  'VendorOrPayeeName',
  'AssetAccountRef',
  'AssetAccountRef ListID',
  'AssetAccountRef FullName',
  'FixedAssetSalesInfo',
  'FixedAssetSalesInfo SalesDesc',
  'FixedAssetSalesInfo SalesDate',
  'FixedAssetSalesInfo SalesPrice',
  'FixedAssetSalesInfo SalesExpense',
  'AssetDesc',
  'Location',
  'PONumber',
  'SerialNumber',
  'WarrantyExpDate',
  'Notes',
  'AssetNumber',
  'CostBasis',
  'YearEndAccumulatedDepreciation',
  'YearEndBookValue',
  'ExternalGUID',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
