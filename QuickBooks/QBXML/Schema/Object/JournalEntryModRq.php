<?php

/**
 * Schema object for: JournalEntryModRq
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
class QuickBooks_QBXML_Schema_Object_JournalEntryModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'JournalEntryMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'IsAdjustment' => 'BOOLTYPE',
  'IsAmountsEnteredInHomeCurrency' => 'BOOLTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'JournalLineMod TxnLineID' => 'IDTYPE',
  'JournalLineMod JournalLineType' => 'ENUMTYPE',
  'JournalLineMod AccountRef ListID' => 'IDTYPE',
  'JournalLineMod AccountRef FullName' => 'STRTYPE',
  'JournalLineMod Amount' => 'AMTTYPE',
  'JournalLineMod TaxAmount' => 'AMTTYPE',
  'JournalLineMod Memo' => 'STRTYPE',
  'JournalLineMod EntityRef ListID' => 'IDTYPE',
  'JournalLineMod EntityRef FullName' => 'STRTYPE',
  'JournalLineMod ClassRef ListID' => 'IDTYPE',
  'JournalLineMod ClassRef FullName' => 'STRTYPE',
  'JournalLineMod ItemSalesTaxRef ListID' => 'IDTYPE',
  'JournalLineMod ItemSalesTaxRef FullName' => 'STRTYPE',
  'JournalLineMod BillableStatus' => 'ENUMTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnID' => 0,
  'EditSequence' => 16,
  'TxnDate' => 0,
  'RefNumber' => 11,
  'IsAdjustment' => 0,
  'IsAmountsEnteredInHomeCurrency' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 64,
  'ExchangeRate' => 0,
  'JournalLineMod TxnLineID' => 0,
  'JournalLineMod JournalLineType' => 0,
  'JournalLineMod AccountRef ListID' => 0,
  'JournalLineMod AccountRef FullName' => 64,
  'JournalLineMod Amount' => 0,
  'JournalLineMod TaxAmount' => 0,
  'JournalLineMod Memo' => 4095,
  'JournalLineMod EntityRef ListID' => 0,
  'JournalLineMod EntityRef FullName' => 64,
  'JournalLineMod ClassRef ListID' => 0,
  'JournalLineMod ClassRef FullName' => 64,
  'JournalLineMod ItemSalesTaxRef ListID' => 0,
  'JournalLineMod ItemSalesTaxRef FullName' => 64,
  'JournalLineMod BillableStatus' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'TxnDate' => true,
  'RefNumber' => true,
  'IsAdjustment' => true,
  'IsAmountsEnteredInHomeCurrency' => true,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'ExchangeRate' => true,
  'JournalLineMod TxnLineID' => false,
  'JournalLineMod JournalLineType' => true,
  'JournalLineMod AccountRef ListID' => true,
  'JournalLineMod AccountRef FullName' => true,
  'JournalLineMod Amount' => true,
  'JournalLineMod TaxAmount' => true,
  'JournalLineMod Memo' => true,
  'JournalLineMod EntityRef ListID' => true,
  'JournalLineMod EntityRef FullName' => true,
  'JournalLineMod ClassRef ListID' => true,
  'JournalLineMod ClassRef FullName' => true,
  'JournalLineMod ItemSalesTaxRef ListID' => true,
  'JournalLineMod ItemSalesTaxRef FullName' => true,
  'JournalLineMod BillableStatus' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'EditSequence' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'IsAdjustment' => 999.99,
  'IsAmountsEnteredInHomeCurrency' => 8.0,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'ExchangeRate' => 8.0,
  'JournalLineMod TxnLineID' => 999.99,
  'JournalLineMod JournalLineType' => 999.99,
  'JournalLineMod AccountRef ListID' => 999.99,
  'JournalLineMod AccountRef FullName' => 999.99,
  'JournalLineMod Amount' => 999.99,
  'JournalLineMod TaxAmount' => 6.1,
  'JournalLineMod Memo' => 999.99,
  'JournalLineMod EntityRef ListID' => 999.99,
  'JournalLineMod EntityRef FullName' => 999.99,
  'JournalLineMod ClassRef ListID' => 999.99,
  'JournalLineMod ClassRef FullName' => 999.99,
  'JournalLineMod ItemSalesTaxRef ListID' => 999.99,
  'JournalLineMod ItemSalesTaxRef FullName' => 999.99,
  'JournalLineMod BillableStatus' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'IsAdjustment' => false,
  'IsAmountsEnteredInHomeCurrency' => false,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => false,
  'ExchangeRate' => false,
  'JournalLineMod TxnLineID' => false,
  'JournalLineMod JournalLineType' => false,
  'JournalLineMod AccountRef ListID' => false,
  'JournalLineMod AccountRef FullName' => false,
  'JournalLineMod Amount' => false,
  'JournalLineMod TaxAmount' => false,
  'JournalLineMod Memo' => false,
  'JournalLineMod EntityRef ListID' => false,
  'JournalLineMod EntityRef FullName' => false,
  'JournalLineMod ClassRef ListID' => false,
  'JournalLineMod ClassRef FullName' => false,
  'JournalLineMod ItemSalesTaxRef ListID' => false,
  'JournalLineMod ItemSalesTaxRef FullName' => false,
  'JournalLineMod BillableStatus' => false,
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
  'TxnDate',
  'RefNumber',
  'IsAdjustment',
  'IsAmountsEnteredInHomeCurrency',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'ExchangeRate',
  'JournalLineMod',
  'JournalLineMod TxnLineID',
  'JournalLineMod JournalLineType',
  'JournalLineMod AccountRef ListID',
  'JournalLineMod AccountRef FullName',
  'JournalLineMod Amount',
  'JournalLineMod TaxAmount',
  'JournalLineMod Memo',
  'JournalLineMod EntityRef ListID',
  'JournalLineMod EntityRef FullName',
  'JournalLineMod ClassRef ListID',
  'JournalLineMod ClassRef FullName',
  'JournalLineMod ItemSalesTaxRef ListID',
  'JournalLineMod ItemSalesTaxRef FullName',
  'JournalLineMod BillableStatus',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
