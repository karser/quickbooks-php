<?php

/**
 * Schema object for: SalesOrderModRq
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
class QuickBooks_QBXML_Schema_Object_SalesOrderModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'SalesOrderMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'CustomerRef ListID' => 'IDTYPE',
  'CustomerRef FullName' => 'STRTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'TemplateRef ListID' => 'IDTYPE',
  'TemplateRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'BillAddress Addr1' => 'STRTYPE',
  'BillAddress Addr2' => 'STRTYPE',
  'BillAddress Addr3' => 'STRTYPE',
  'BillAddress Addr4' => 'STRTYPE',
  'BillAddress Addr5' => 'STRTYPE',
  'BillAddress City' => 'STRTYPE',
  'BillAddress State' => 'STRTYPE',
  'BillAddress PostalCode' => 'STRTYPE',
  'BillAddress Country' => 'STRTYPE',
  'BillAddress Note' => 'STRTYPE',
  'ShipAddress Addr1' => 'STRTYPE',
  'ShipAddress Addr2' => 'STRTYPE',
  'ShipAddress Addr3' => 'STRTYPE',
  'ShipAddress Addr4' => 'STRTYPE',
  'ShipAddress Addr5' => 'STRTYPE',
  'ShipAddress City' => 'STRTYPE',
  'ShipAddress State' => 'STRTYPE',
  'ShipAddress PostalCode' => 'STRTYPE',
  'ShipAddress Country' => 'STRTYPE',
  'ShipAddress Note' => 'STRTYPE',
  'PONumber' => 'STRTYPE',
  'TermsRef ListID' => 'IDTYPE',
  'TermsRef FullName' => 'STRTYPE',
  'DueDate' => 'DATETYPE',
  'SalesRepRef ListID' => 'IDTYPE',
  'SalesRepRef FullName' => 'STRTYPE',
  'FOB' => 'STRTYPE',
  'ShipDate' => 'DATETYPE',
  'ShipMethodRef ListID' => 'IDTYPE',
  'ShipMethodRef FullName' => 'STRTYPE',
  'ItemSalesTaxRef ListID' => 'IDTYPE',
  'ItemSalesTaxRef FullName' => 'STRTYPE',
  'IsManuallyClosed' => 'BOOLTYPE',
  'Memo' => 'STRTYPE',
  'CustomerMsgRef ListID' => 'IDTYPE',
  'CustomerMsgRef FullName' => 'STRTYPE',
  'IsToBePrinted' => 'BOOLTYPE',
  'IsToBeEmailed' => 'BOOLTYPE',
  'IsTaxIncluded' => 'BOOLTYPE',
  'CustomerSalesTaxCodeRef ListID' => 'IDTYPE',
  'CustomerSalesTaxCodeRef FullName' => 'STRTYPE',
  'Other' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'SalesOrderLineMod TxnLineID' => 'IDTYPE',
  'SalesOrderLineMod ItemRef ListID' => 'IDTYPE',
  'SalesOrderLineMod ItemRef FullName' => 'STRTYPE',
  'SalesOrderLineMod Desc' => 'STRTYPE',
  'SalesOrderLineMod Quantity' => 'QUANTYPE',
  'SalesOrderLineMod UnitOfMeasure' => 'STRTYPE',
  'SalesOrderLineMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'SalesOrderLineMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'SalesOrderLineMod Rate' => 'PRICETYPE',
  'SalesOrderLineMod RatePercent' => 'PERCENTTYPE',
  'SalesOrderLineMod PriceLevelRef ListID' => 'IDTYPE',
  'SalesOrderLineMod PriceLevelRef FullName' => 'STRTYPE',
  'SalesOrderLineMod ClassRef ListID' => 'IDTYPE',
  'SalesOrderLineMod ClassRef FullName' => 'STRTYPE',
  'SalesOrderLineMod Amount' => 'AMTTYPE',
  'SalesOrderLineMod TaxAmount' => 'AMTTYPE',
  'SalesOrderLineMod OptionForPriceRuleConflict' => 'ENUMTYPE',
  'SalesOrderLineMod InventorySiteRef ListID' => 'IDTYPE',
  'SalesOrderLineMod InventorySiteRef FullName' => 'STRTYPE',
  'SalesOrderLineMod InventorySiteLocationRef ListID' => 'IDTYPE',
  'SalesOrderLineMod InventorySiteLocationRef FullName' => 'STRTYPE',
  'SalesOrderLineMod SerialNumber' => 'STRTYPE',
  'SalesOrderLineMod LotNumber' => 'STRTYPE',
  'SalesOrderLineMod SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesOrderLineMod SalesTaxCodeRef FullName' => 'STRTYPE',
  'SalesOrderLineMod IsManuallyClosed' => 'BOOLTYPE',
  'SalesOrderLineMod Other1' => 'STRTYPE',
  'SalesOrderLineMod Other2' => 'STRTYPE',
  'SalesOrderLineGroupMod TxnLineID' => 'IDTYPE',
  'SalesOrderLineGroupMod ItemGroupRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod ItemGroupRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod Quantity' => 'QUANTYPE',
  'SalesOrderLineGroupMod UnitOfMeasure' => 'STRTYPE',
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Desc' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity' => 'QUANTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Rate' => 'PRICETYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent' => 'PERCENTTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Amount' => 'AMTTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount' => 'AMTTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict' => 'ENUMTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed' => 'BOOLTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Other1' => 'STRTYPE',
  'SalesOrderLineGroupMod SalesOrderLineMod Other2' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnID' => 0,
  'EditSequence' => 16,
  'CustomerRef ListID' => 0,
  'CustomerRef FullName' => 209,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 209,
  'TemplateRef ListID' => 0,
  'TemplateRef FullName' => 209,
  'TxnDate' => 0,
  'RefNumber' => 11,
  'BillAddress Addr1' => 41,
  'BillAddress Addr2' => 41,
  'BillAddress Addr3' => 41,
  'BillAddress Addr4' => 41,
  'BillAddress Addr5' => 41,
  'BillAddress City' => 31,
  'BillAddress State' => 21,
  'BillAddress PostalCode' => 13,
  'BillAddress Country' => 31,
  'BillAddress Note' => 41,
  'ShipAddress Addr1' => 41,
  'ShipAddress Addr2' => 41,
  'ShipAddress Addr3' => 41,
  'ShipAddress Addr4' => 41,
  'ShipAddress Addr5' => 41,
  'ShipAddress City' => 31,
  'ShipAddress State' => 21,
  'ShipAddress PostalCode' => 13,
  'ShipAddress Country' => 31,
  'ShipAddress Note' => 41,
  'PONumber' => 25,
  'TermsRef ListID' => 0,
  'TermsRef FullName' => 209,
  'DueDate' => 0,
  'SalesRepRef ListID' => 0,
  'SalesRepRef FullName' => 209,
  'FOB' => 13,
  'ShipDate' => 0,
  'ShipMethodRef ListID' => 0,
  'ShipMethodRef FullName' => 209,
  'ItemSalesTaxRef ListID' => 0,
  'ItemSalesTaxRef FullName' => 209,
  'IsManuallyClosed' => 0,
  'Memo' => 4095,
  'CustomerMsgRef ListID' => 0,
  'CustomerMsgRef FullName' => 209,
  'IsToBePrinted' => 0,
  'IsToBeEmailed' => 0,
  'IsTaxIncluded' => 0,
  'CustomerSalesTaxCodeRef ListID' => 0,
  'CustomerSalesTaxCodeRef FullName' => 209,
  'Other' => 29,
  'ExchangeRate' => 0,
  'SalesOrderLineMod TxnLineID' => 0,
  'SalesOrderLineMod ItemRef ListID' => 0,
  'SalesOrderLineMod ItemRef FullName' => 209,
  'SalesOrderLineMod Desc' => 4095,
  'SalesOrderLineMod Quantity' => 0,
  'SalesOrderLineMod UnitOfMeasure' => 31,
  'SalesOrderLineMod OverrideUOMSetRef ListID' => 0,
  'SalesOrderLineMod OverrideUOMSetRef FullName' => 209,
  'SalesOrderLineMod Rate' => 0,
  'SalesOrderLineMod RatePercent' => 0,
  'SalesOrderLineMod PriceLevelRef ListID' => 0,
  'SalesOrderLineMod PriceLevelRef FullName' => 209,
  'SalesOrderLineMod ClassRef ListID' => 0,
  'SalesOrderLineMod ClassRef FullName' => 209,
  'SalesOrderLineMod Amount' => 0,
  'SalesOrderLineMod TaxAmount' => 0,
  'SalesOrderLineMod OptionForPriceRuleConflict' => 0,
  'SalesOrderLineMod InventorySiteRef ListID' => 0,
  'SalesOrderLineMod InventorySiteRef FullName' => 209,
  'SalesOrderLineMod InventorySiteLocationRef ListID' => 0,
  'SalesOrderLineMod InventorySiteLocationRef FullName' => 209,
  'SalesOrderLineMod SerialNumber' => 4095,
  'SalesOrderLineMod LotNumber' => 40,
  'SalesOrderLineMod SalesTaxCodeRef ListID' => 0,
  'SalesOrderLineMod SalesTaxCodeRef FullName' => 209,
  'SalesOrderLineMod IsManuallyClosed' => 0,
  'SalesOrderLineMod Other1' => 29,
  'SalesOrderLineMod Other2' => 29,
  'SalesOrderLineGroupMod TxnLineID' => 0,
  'SalesOrderLineGroupMod ItemGroupRef ListID' => 0,
  'SalesOrderLineGroupMod ItemGroupRef FullName' => 209,
  'SalesOrderLineGroupMod Quantity' => 0,
  'SalesOrderLineGroupMod UnitOfMeasure' => 31,
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID' => 0,
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod Desc' => 4095,
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure' => 31,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod Rate' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod Amount' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber' => 4095,
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber' => 40,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName' => 209,
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed' => 0,
  'SalesOrderLineGroupMod SalesOrderLineMod Other1' => 29,
  'SalesOrderLineGroupMod SalesOrderLineMod Other2' => 29,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'CustomerRef ListID' => true,
  'CustomerRef FullName' => true,
  'ClassRef ListID' => true,
  'ClassRef FullName' => true,
  'TemplateRef ListID' => true,
  'TemplateRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'BillAddress Addr1' => true,
  'BillAddress Addr2' => true,
  'BillAddress Addr3' => true,
  'BillAddress Addr4' => true,
  'BillAddress Addr5' => true,
  'BillAddress City' => true,
  'BillAddress State' => true,
  'BillAddress PostalCode' => true,
  'BillAddress Country' => true,
  'BillAddress Note' => true,
  'ShipAddress Addr1' => true,
  'ShipAddress Addr2' => true,
  'ShipAddress Addr3' => true,
  'ShipAddress Addr4' => true,
  'ShipAddress Addr5' => true,
  'ShipAddress City' => true,
  'ShipAddress State' => true,
  'ShipAddress PostalCode' => true,
  'ShipAddress Country' => true,
  'ShipAddress Note' => true,
  'PONumber' => true,
  'TermsRef ListID' => true,
  'TermsRef FullName' => true,
  'DueDate' => true,
  'SalesRepRef ListID' => true,
  'SalesRepRef FullName' => true,
  'FOB' => true,
  'ShipDate' => true,
  'ShipMethodRef ListID' => true,
  'ShipMethodRef FullName' => true,
  'ItemSalesTaxRef ListID' => true,
  'ItemSalesTaxRef FullName' => true,
  'IsManuallyClosed' => true,
  'Memo' => true,
  'CustomerMsgRef ListID' => true,
  'CustomerMsgRef FullName' => true,
  'IsToBePrinted' => true,
  'IsToBeEmailed' => true,
  'IsTaxIncluded' => true,
  'CustomerSalesTaxCodeRef ListID' => true,
  'CustomerSalesTaxCodeRef FullName' => true,
  'Other' => true,
  'ExchangeRate' => true,
  'SalesOrderLineMod TxnLineID' => false,
  'SalesOrderLineMod ItemRef ListID' => true,
  'SalesOrderLineMod ItemRef FullName' => true,
  'SalesOrderLineMod Desc' => true,
  'SalesOrderLineMod Quantity' => true,
  'SalesOrderLineMod UnitOfMeasure' => true,
  'SalesOrderLineMod OverrideUOMSetRef ListID' => true,
  'SalesOrderLineMod OverrideUOMSetRef FullName' => true,
  'SalesOrderLineMod Rate' => false,
  'SalesOrderLineMod RatePercent' => false,
  'SalesOrderLineMod PriceLevelRef ListID' => true,
  'SalesOrderLineMod PriceLevelRef FullName' => true,
  'SalesOrderLineMod ClassRef ListID' => true,
  'SalesOrderLineMod ClassRef FullName' => true,
  'SalesOrderLineMod Amount' => true,
  'SalesOrderLineMod TaxAmount' => true,
  'SalesOrderLineMod OptionForPriceRuleConflict' => true,
  'SalesOrderLineMod InventorySiteRef ListID' => true,
  'SalesOrderLineMod InventorySiteRef FullName' => true,
  'SalesOrderLineMod InventorySiteLocationRef ListID' => true,
  'SalesOrderLineMod InventorySiteLocationRef FullName' => true,
  'SalesOrderLineMod SerialNumber' => true,
  'SalesOrderLineMod LotNumber' => true,
  'SalesOrderLineMod SalesTaxCodeRef ListID' => true,
  'SalesOrderLineMod SalesTaxCodeRef FullName' => true,
  'SalesOrderLineMod IsManuallyClosed' => true,
  'SalesOrderLineMod Other1' => true,
  'SalesOrderLineMod Other2' => true,
  'SalesOrderLineGroupMod TxnLineID' => false,
  'SalesOrderLineGroupMod ItemGroupRef ListID' => true,
  'SalesOrderLineGroupMod ItemGroupRef FullName' => true,
  'SalesOrderLineGroupMod Quantity' => true,
  'SalesOrderLineGroupMod UnitOfMeasure' => true,
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID' => true,
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Desc' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Rate' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Amount' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Other1' => true,
  'SalesOrderLineGroupMod SalesOrderLineMod Other2' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'EditSequence' => 999.99,
  'CustomerRef ListID' => 999.99,
  'CustomerRef FullName' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'TemplateRef ListID' => 999.99,
  'TemplateRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'BillAddress Addr1' => 999.99,
  'BillAddress Addr2' => 999.99,
  'BillAddress Addr3' => 999.99,
  'BillAddress Addr4' => 2.0,
  'BillAddress Addr5' => 6.0,
  'BillAddress City' => 999.99,
  'BillAddress State' => 999.99,
  'BillAddress PostalCode' => 999.99,
  'BillAddress Country' => 999.99,
  'BillAddress Note' => 6.0,
  'ShipAddress Addr1' => 999.99,
  'ShipAddress Addr2' => 999.99,
  'ShipAddress Addr3' => 999.99,
  'ShipAddress Addr4' => 2.0,
  'ShipAddress Addr5' => 6.0,
  'ShipAddress City' => 999.99,
  'ShipAddress State' => 999.99,
  'ShipAddress PostalCode' => 999.99,
  'ShipAddress Country' => 999.99,
  'ShipAddress Note' => 6.0,
  'PONumber' => 999.99,
  'TermsRef ListID' => 999.99,
  'TermsRef FullName' => 999.99,
  'DueDate' => 999.99,
  'SalesRepRef ListID' => 999.99,
  'SalesRepRef FullName' => 999.99,
  'FOB' => 999.99,
  'ShipDate' => 999.99,
  'ShipMethodRef ListID' => 999.99,
  'ShipMethodRef FullName' => 999.99,
  'ItemSalesTaxRef ListID' => 999.99,
  'ItemSalesTaxRef FullName' => 999.99,
  'IsManuallyClosed' => 999.99,
  'Memo' => 999.99,
  'CustomerMsgRef ListID' => 999.99,
  'CustomerMsgRef FullName' => 999.99,
  'IsToBePrinted' => 999.99,
  'IsToBeEmailed' => 6.0,
  'IsTaxIncluded' => 6.0,
  'CustomerSalesTaxCodeRef ListID' => 999.99,
  'CustomerSalesTaxCodeRef FullName' => 999.99,
  'Other' => 6.0,
  'ExchangeRate' => 8.0,
  'SalesOrderLineMod TxnLineID' => 999.99,
  'SalesOrderLineMod ItemRef ListID' => 999.99,
  'SalesOrderLineMod ItemRef FullName' => 999.99,
  'SalesOrderLineMod Desc' => 999.99,
  'SalesOrderLineMod Quantity' => 999.99,
  'SalesOrderLineMod UnitOfMeasure' => 7.0,
  'SalesOrderLineMod OverrideUOMSetRef ListID' => 999.99,
  'SalesOrderLineMod OverrideUOMSetRef FullName' => 999.99,
  'SalesOrderLineMod Rate' => 999.99,
  'SalesOrderLineMod RatePercent' => 999.99,
  'SalesOrderLineMod PriceLevelRef ListID' => 999.99,
  'SalesOrderLineMod PriceLevelRef FullName' => 999.99,
  'SalesOrderLineMod ClassRef ListID' => 999.99,
  'SalesOrderLineMod ClassRef FullName' => 999.99,
  'SalesOrderLineMod Amount' => 999.99,
  'SalesOrderLineMod TaxAmount' => 6.1,
  'SalesOrderLineMod OptionForPriceRuleConflict' => 13.0,
  'SalesOrderLineMod InventorySiteRef ListID' => 999.99,
  'SalesOrderLineMod InventorySiteRef FullName' => 999.99,
  'SalesOrderLineMod InventorySiteLocationRef ListID' => 999.99,
  'SalesOrderLineMod InventorySiteLocationRef FullName' => 999.99,
  'SalesOrderLineMod SerialNumber' => 999.99,
  'SalesOrderLineMod LotNumber' => 999.99,
  'SalesOrderLineMod SalesTaxCodeRef ListID' => 999.99,
  'SalesOrderLineMod SalesTaxCodeRef FullName' => 999.99,
  'SalesOrderLineMod IsManuallyClosed' => 999.99,
  'SalesOrderLineMod Other1' => 6.0,
  'SalesOrderLineMod Other2' => 6.0,
  'SalesOrderLineGroupMod TxnLineID' => 999.99,
  'SalesOrderLineGroupMod ItemGroupRef ListID' => 999.99,
  'SalesOrderLineGroupMod ItemGroupRef FullName' => 999.99,
  'SalesOrderLineGroupMod Quantity' => 999.99,
  'SalesOrderLineGroupMod UnitOfMeasure' => 7.0,
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID' => 999.99,
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod Desc' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure' => 7.0,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod Rate' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod Amount' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount' => 6.1,
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict' => 13.0,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed' => 999.99,
  'SalesOrderLineGroupMod SalesOrderLineMod Other1' => 6.0,
  'SalesOrderLineGroupMod SalesOrderLineMod Other2' => 6.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'CustomerRef ListID' => false,
  'CustomerRef FullName' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'TemplateRef ListID' => false,
  'TemplateRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'BillAddress Addr1' => false,
  'BillAddress Addr2' => false,
  'BillAddress Addr3' => false,
  'BillAddress Addr4' => false,
  'BillAddress Addr5' => false,
  'BillAddress City' => false,
  'BillAddress State' => false,
  'BillAddress PostalCode' => false,
  'BillAddress Country' => false,
  'BillAddress Note' => false,
  'ShipAddress Addr1' => false,
  'ShipAddress Addr2' => false,
  'ShipAddress Addr3' => false,
  'ShipAddress Addr4' => false,
  'ShipAddress Addr5' => false,
  'ShipAddress City' => false,
  'ShipAddress State' => false,
  'ShipAddress PostalCode' => false,
  'ShipAddress Country' => false,
  'ShipAddress Note' => false,
  'PONumber' => false,
  'TermsRef ListID' => false,
  'TermsRef FullName' => false,
  'DueDate' => false,
  'SalesRepRef ListID' => false,
  'SalesRepRef FullName' => false,
  'FOB' => false,
  'ShipDate' => false,
  'ShipMethodRef ListID' => false,
  'ShipMethodRef FullName' => false,
  'ItemSalesTaxRef ListID' => false,
  'ItemSalesTaxRef FullName' => false,
  'IsManuallyClosed' => false,
  'Memo' => false,
  'CustomerMsgRef ListID' => false,
  'CustomerMsgRef FullName' => false,
  'IsToBePrinted' => false,
  'IsToBeEmailed' => false,
  'IsTaxIncluded' => false,
  'CustomerSalesTaxCodeRef ListID' => false,
  'CustomerSalesTaxCodeRef FullName' => false,
  'Other' => false,
  'ExchangeRate' => false,
  'SalesOrderLineMod TxnLineID' => false,
  'SalesOrderLineMod ItemRef ListID' => false,
  'SalesOrderLineMod ItemRef FullName' => false,
  'SalesOrderLineMod Desc' => false,
  'SalesOrderLineMod Quantity' => false,
  'SalesOrderLineMod UnitOfMeasure' => false,
  'SalesOrderLineMod OverrideUOMSetRef ListID' => false,
  'SalesOrderLineMod OverrideUOMSetRef FullName' => false,
  'SalesOrderLineMod Rate' => false,
  'SalesOrderLineMod RatePercent' => false,
  'SalesOrderLineMod PriceLevelRef ListID' => false,
  'SalesOrderLineMod PriceLevelRef FullName' => false,
  'SalesOrderLineMod ClassRef ListID' => false,
  'SalesOrderLineMod ClassRef FullName' => false,
  'SalesOrderLineMod Amount' => false,
  'SalesOrderLineMod TaxAmount' => false,
  'SalesOrderLineMod OptionForPriceRuleConflict' => false,
  'SalesOrderLineMod InventorySiteRef ListID' => false,
  'SalesOrderLineMod InventorySiteRef FullName' => false,
  'SalesOrderLineMod InventorySiteLocationRef ListID' => false,
  'SalesOrderLineMod InventorySiteLocationRef FullName' => false,
  'SalesOrderLineMod SerialNumber' => false,
  'SalesOrderLineMod LotNumber' => false,
  'SalesOrderLineMod SalesTaxCodeRef ListID' => false,
  'SalesOrderLineMod SalesTaxCodeRef FullName' => false,
  'SalesOrderLineMod IsManuallyClosed' => false,
  'SalesOrderLineMod Other1' => false,
  'SalesOrderLineMod Other2' => false,
  'SalesOrderLineGroupMod TxnLineID' => false,
  'SalesOrderLineGroupMod ItemGroupRef ListID' => false,
  'SalesOrderLineGroupMod ItemGroupRef FullName' => false,
  'SalesOrderLineGroupMod Quantity' => false,
  'SalesOrderLineGroupMod UnitOfMeasure' => false,
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID' => false,
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Desc' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Rate' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Amount' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Other1' => false,
  'SalesOrderLineGroupMod SalesOrderLineMod Other2' => false,
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
  'TxnID',
  'EditSequence',
  'CustomerRef',
  'CustomerRef ListID',
  'CustomerRef FullName',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'TemplateRef',
  'TemplateRef ListID',
  'TemplateRef FullName',
  'TxnDate',
  'RefNumber',
  'BillAddress',
  'BillAddress Addr1',
  'BillAddress Addr2',
  'BillAddress Addr3',
  'BillAddress Addr4',
  'BillAddress Addr5',
  'BillAddress City',
  'BillAddress State',
  'BillAddress PostalCode',
  'BillAddress Country',
  'BillAddress Note',
  'ShipAddress',
  'ShipAddress Addr1',
  'ShipAddress Addr2',
  'ShipAddress Addr3',
  'ShipAddress Addr4',
  'ShipAddress Addr5',
  'ShipAddress City',
  'ShipAddress State',
  'ShipAddress PostalCode',
  'ShipAddress Country',
  'ShipAddress Note',
  'PONumber',
  'TermsRef',
  'TermsRef ListID',
  'TermsRef FullName',
  'DueDate',
  'SalesRepRef',
  'SalesRepRef ListID',
  'SalesRepRef FullName',
  'FOB',
  'ShipDate',
  'ShipMethodRef',
  'ShipMethodRef ListID',
  'ShipMethodRef FullName',
  'ItemSalesTaxRef',
  'ItemSalesTaxRef ListID',
  'ItemSalesTaxRef FullName',
  'IsManuallyClosed',
  'Memo',
  'CustomerMsgRef',
  'CustomerMsgRef ListID',
  'CustomerMsgRef FullName',
  'IsToBePrinted',
  'IsToBeEmailed',
  'IsTaxIncluded',
  'CustomerSalesTaxCodeRef',
  'CustomerSalesTaxCodeRef ListID',
  'CustomerSalesTaxCodeRef FullName',
  'Other',
  'ExchangeRate',
  'SalesOrderLineMod',
  'SalesOrderLineMod TxnLineID',
  'SalesOrderLineMod ItemRef ListID',
  'SalesOrderLineMod ItemRef FullName',
  'SalesOrderLineMod Desc',
  'SalesOrderLineMod Quantity',
  'SalesOrderLineMod UnitOfMeasure',
  'SalesOrderLineMod OverrideUOMSetRef ListID',
  'SalesOrderLineMod OverrideUOMSetRef FullName',
  'SalesOrderLineMod Rate',
  'SalesOrderLineMod RatePercent',
  'SalesOrderLineMod PriceLevelRef ListID',
  'SalesOrderLineMod PriceLevelRef FullName',
  'SalesOrderLineMod ClassRef ListID',
  'SalesOrderLineMod ClassRef FullName',
  'SalesOrderLineMod Amount',
  'SalesOrderLineMod TaxAmount',
  'SalesOrderLineMod OptionForPriceRuleConflict',
  'SalesOrderLineMod InventorySiteRef ListID',
  'SalesOrderLineMod InventorySiteRef FullName',
  'SalesOrderLineMod InventorySiteLocationRef ListID',
  'SalesOrderLineMod InventorySiteLocationRef FullName',
  'SalesOrderLineMod SerialNumber',
  'SalesOrderLineMod LotNumber',
  'SalesOrderLineMod SalesTaxCodeRef ListID',
  'SalesOrderLineMod SalesTaxCodeRef FullName',
  'SalesOrderLineMod IsManuallyClosed',
  'SalesOrderLineMod Other1',
  'SalesOrderLineMod Other2',
  'SalesOrderLineGroupMod',
  'SalesOrderLineGroupMod TxnLineID',
  'SalesOrderLineGroupMod ItemGroupRef ListID',
  'SalesOrderLineGroupMod ItemGroupRef FullName',
  'SalesOrderLineGroupMod Quantity',
  'SalesOrderLineGroupMod UnitOfMeasure',
  'SalesOrderLineGroupMod OverrideUOMSetRef ListID',
  'SalesOrderLineGroupMod OverrideUOMSetRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod TxnLineID',
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod ItemRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod Desc',
  'SalesOrderLineGroupMod SalesOrderLineMod Quantity',
  'SalesOrderLineGroupMod SalesOrderLineMod UnitOfMeasure',
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod OverrideUOMSetRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod Rate',
  'SalesOrderLineGroupMod SalesOrderLineMod RatePercent',
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod PriceLevelRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod ClassRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod Amount',
  'SalesOrderLineGroupMod SalesOrderLineMod TaxAmount',
  'SalesOrderLineGroupMod SalesOrderLineMod OptionForPriceRuleConflict',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod InventorySiteLocationRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod SerialNumber',
  'SalesOrderLineGroupMod SalesOrderLineMod LotNumber',
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef ListID',
  'SalesOrderLineGroupMod SalesOrderLineMod SalesTaxCodeRef FullName',
  'SalesOrderLineGroupMod SalesOrderLineMod IsManuallyClosed',
  'SalesOrderLineGroupMod SalesOrderLineMod Other1',
  'SalesOrderLineGroupMod SalesOrderLineMod Other2',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
