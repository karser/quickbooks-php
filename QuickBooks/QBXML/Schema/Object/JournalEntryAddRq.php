<?php

/**
 * Schema object for: JournalEntryAddRq
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
class QuickBooks_QBXML_Schema_Object_JournalEntryAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'JournalEntryAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'IsAdjustment' => 'BOOLTYPE',
  'IsHomeCurrencyAdjustment' => 'BOOLTYPE',
  'IsAmountsEnteredInHomeCurrency' => 'BOOLTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'JournalDebitLine TxnLineID' => 'IDTYPE',
  'JournalDebitLine AccountRef ListID' => 'IDTYPE',
  'JournalDebitLine AccountRef FullName' => 'STRTYPE',
  'JournalDebitLine Amount' => 'AMTTYPE',
  'JournalDebitLine TaxAmount' => 'AMTTYPE',
  'JournalDebitLine Memo' => 'STRTYPE',
  'JournalDebitLine EntityRef ListID' => 'IDTYPE',
  'JournalDebitLine EntityRef FullName' => 'STRTYPE',
  'JournalDebitLine ClassRef ListID' => 'IDTYPE',
  'JournalDebitLine ClassRef FullName' => 'STRTYPE',
  'JournalDebitLine ItemSalesTaxRef ListID' => 'IDTYPE',
  'JournalDebitLine ItemSalesTaxRef FullName' => 'STRTYPE',
  'JournalDebitLine BillableStatus' => 'ENUMTYPE',
  'JournalCreditLine TxnLineID' => 'IDTYPE',
  'JournalCreditLine AccountRef ListID' => 'IDTYPE',
  'JournalCreditLine AccountRef FullName' => 'STRTYPE',
  'JournalCreditLine Amount' => 'AMTTYPE',
  'JournalCreditLine TaxAmount' => 'AMTTYPE',
  'JournalCreditLine Memo' => 'STRTYPE',
  'JournalCreditLine EntityRef ListID' => 'IDTYPE',
  'JournalCreditLine EntityRef FullName' => 'STRTYPE',
  'JournalCreditLine ClassRef ListID' => 'IDTYPE',
  'JournalCreditLine ClassRef FullName' => 'STRTYPE',
  'JournalCreditLine ItemSalesTaxRef ListID' => 'IDTYPE',
  'JournalCreditLine ItemSalesTaxRef FullName' => 'STRTYPE',
  'JournalCreditLine BillableStatus' => 'ENUMTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnDate' => 0,
  'RefNumber' => 11,
  'Memo' => 4000,
  'IsAdjustment' => 0,
  'IsHomeCurrencyAdjustment' => 0,
  'IsAmountsEnteredInHomeCurrency' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 64,
  'ExchangeRate' => 0,
  'ExternalGUID' => 0,
  'JournalDebitLine TxnLineID' => 0,
  'JournalDebitLine AccountRef ListID' => 0,
  'JournalDebitLine AccountRef FullName' => 64,
  'JournalDebitLine Amount' => 0,
  'JournalDebitLine TaxAmount' => 0,
  'JournalDebitLine Memo' => 4000,
  'JournalDebitLine EntityRef ListID' => 0,
  'JournalDebitLine EntityRef FullName' => 64,
  'JournalDebitLine ClassRef ListID' => 0,
  'JournalDebitLine ClassRef FullName' => 64,
  'JournalDebitLine ItemSalesTaxRef ListID' => 0,
  'JournalDebitLine ItemSalesTaxRef FullName' => 64,
  'JournalDebitLine BillableStatus' => 0,
  'JournalCreditLine TxnLineID' => 0,
  'JournalCreditLine AccountRef ListID' => 0,
  'JournalCreditLine AccountRef FullName' => 64,
  'JournalCreditLine Amount' => 0,
  'JournalCreditLine TaxAmount' => 0,
  'JournalCreditLine Memo' => 4000,
  'JournalCreditLine EntityRef ListID' => 0,
  'JournalCreditLine EntityRef FullName' => 64,
  'JournalCreditLine ClassRef ListID' => 0,
  'JournalCreditLine ClassRef FullName' => 64,
  'JournalCreditLine ItemSalesTaxRef ListID' => 0,
  'JournalCreditLine ItemSalesTaxRef FullName' => 64,
  'JournalCreditLine BillableStatus' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnDate' => true,
  'RefNumber' => true,
  'Memo' => true,
  'IsAdjustment' => true,
  'IsHomeCurrencyAdjustment' => false,
  'IsAmountsEnteredInHomeCurrency' => true,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'ExchangeRate' => true,
  'ExternalGUID' => true,
  'JournalDebitLine TxnLineID' => true,
  'JournalDebitLine AccountRef ListID' => true,
  'JournalDebitLine AccountRef FullName' => true,
  'JournalDebitLine Amount' => true,
  'JournalDebitLine TaxAmount' => true,
  'JournalDebitLine Memo' => true,
  'JournalDebitLine EntityRef ListID' => true,
  'JournalDebitLine EntityRef FullName' => true,
  'JournalDebitLine ClassRef ListID' => true,
  'JournalDebitLine ClassRef FullName' => true,
  'JournalDebitLine ItemSalesTaxRef ListID' => true,
  'JournalDebitLine ItemSalesTaxRef FullName' => true,
  'JournalDebitLine BillableStatus' => true,
  'JournalCreditLine TxnLineID' => true,
  'JournalCreditLine AccountRef ListID' => true,
  'JournalCreditLine AccountRef FullName' => true,
  'JournalCreditLine Amount' => true,
  'JournalCreditLine TaxAmount' => true,
  'JournalCreditLine Memo' => true,
  'JournalCreditLine EntityRef ListID' => true,
  'JournalCreditLine EntityRef FullName' => true,
  'JournalCreditLine ClassRef ListID' => true,
  'JournalCreditLine ClassRef FullName' => true,
  'JournalCreditLine ItemSalesTaxRef ListID' => true,
  'JournalCreditLine ItemSalesTaxRef FullName' => true,
  'JournalCreditLine BillableStatus' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'Memo' => 999.99,
  'IsAdjustment' => 3.0,
  'IsHomeCurrencyAdjustment' => 8.0,
  'IsAmountsEnteredInHomeCurrency' => 8.0,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'ExchangeRate' => 8.0,
  'ExternalGUID' => 9.0,
  'JournalDebitLine TxnLineID' => 999.99,
  'JournalDebitLine AccountRef ListID' => 999.99,
  'JournalDebitLine AccountRef FullName' => 999.99,
  'JournalDebitLine Amount' => 999.99,
  'JournalDebitLine TaxAmount' => 6.1,
  'JournalDebitLine Memo' => 999.99,
  'JournalDebitLine EntityRef ListID' => 999.99,
  'JournalDebitLine EntityRef FullName' => 999.99,
  'JournalDebitLine ClassRef ListID' => 999.99,
  'JournalDebitLine ClassRef FullName' => 999.99,
  'JournalDebitLine ItemSalesTaxRef ListID' => 999.99,
  'JournalDebitLine ItemSalesTaxRef FullName' => 999.99,
  'JournalDebitLine BillableStatus' => 3.0,
  'JournalCreditLine TxnLineID' => 999.99,
  'JournalCreditLine AccountRef ListID' => 999.99,
  'JournalCreditLine AccountRef FullName' => 999.99,
  'JournalCreditLine Amount' => 999.99,
  'JournalCreditLine TaxAmount' => 6.1,
  'JournalCreditLine Memo' => 999.99,
  'JournalCreditLine EntityRef ListID' => 999.99,
  'JournalCreditLine EntityRef FullName' => 999.99,
  'JournalCreditLine ClassRef ListID' => 999.99,
  'JournalCreditLine ClassRef FullName' => 999.99,
  'JournalCreditLine ItemSalesTaxRef ListID' => 999.99,
  'JournalCreditLine ItemSalesTaxRef FullName' => 999.99,
  'JournalCreditLine BillableStatus' => 3.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnDate' => false,
  'RefNumber' => false,
  'Memo' => false,
  'IsAdjustment' => false,
  'IsHomeCurrencyAdjustment' => false,
  'IsAmountsEnteredInHomeCurrency' => false,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => false,
  'ExchangeRate' => false,
  'ExternalGUID' => false,
  'JournalDebitLine TxnLineID' => false,
  'JournalDebitLine AccountRef ListID' => false,
  'JournalDebitLine AccountRef FullName' => false,
  'JournalDebitLine Amount' => false,
  'JournalDebitLine TaxAmount' => false,
  'JournalDebitLine Memo' => false,
  'JournalDebitLine EntityRef ListID' => false,
  'JournalDebitLine EntityRef FullName' => false,
  'JournalDebitLine ClassRef ListID' => false,
  'JournalDebitLine ClassRef FullName' => false,
  'JournalDebitLine ItemSalesTaxRef ListID' => false,
  'JournalDebitLine ItemSalesTaxRef FullName' => false,
  'JournalDebitLine BillableStatus' => false,
  'JournalCreditLine TxnLineID' => false,
  'JournalCreditLine AccountRef ListID' => false,
  'JournalCreditLine AccountRef FullName' => false,
  'JournalCreditLine Amount' => false,
  'JournalCreditLine TaxAmount' => false,
  'JournalCreditLine Memo' => false,
  'JournalCreditLine EntityRef ListID' => false,
  'JournalCreditLine EntityRef FullName' => false,
  'JournalCreditLine ClassRef ListID' => false,
  'JournalCreditLine ClassRef FullName' => false,
  'JournalCreditLine ItemSalesTaxRef ListID' => false,
  'JournalCreditLine ItemSalesTaxRef FullName' => false,
  'JournalCreditLine BillableStatus' => false,
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
  'TxnDate',
  'RefNumber',
  'Memo',
  'IsAdjustment',
  'IsHomeCurrencyAdjustment',
  'IsAmountsEnteredInHomeCurrency',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'ExchangeRate',
  'ExternalGUID',
  'JournalDebitLine',
  'JournalDebitLine TxnLineID',
  'JournalDebitLine AccountRef ListID',
  'JournalDebitLine AccountRef FullName',
  'JournalDebitLine Amount',
  'JournalDebitLine TaxAmount',
  'JournalDebitLine Memo',
  'JournalDebitLine EntityRef ListID',
  'JournalDebitLine EntityRef FullName',
  'JournalDebitLine ClassRef ListID',
  'JournalDebitLine ClassRef FullName',
  'JournalDebitLine ItemSalesTaxRef ListID',
  'JournalDebitLine ItemSalesTaxRef FullName',
  'JournalDebitLine BillableStatus',
  'JournalCreditLine',
  'JournalCreditLine TxnLineID',
  'JournalCreditLine AccountRef ListID',
  'JournalCreditLine AccountRef FullName',
  'JournalCreditLine Amount',
  'JournalCreditLine TaxAmount',
  'JournalCreditLine Memo',
  'JournalCreditLine EntityRef ListID',
  'JournalCreditLine EntityRef FullName',
  'JournalCreditLine ClassRef ListID',
  'JournalCreditLine ClassRef FullName',
  'JournalCreditLine ItemSalesTaxRef ListID',
  'JournalCreditLine ItemSalesTaxRef FullName',
  'JournalCreditLine BillableStatus',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
