<?php

/**
 * Schema object for: DepositModRq
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
class QuickBooks_QBXML_Schema_Object_DepositModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'DepositMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'DepositToAccountRef ListID' => 'IDTYPE',
  'DepositToAccountRef FullName' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'CashBackInfoMod AccountRef ListID' => 'IDTYPE',
  'CashBackInfoMod AccountRef FullName' => 'STRTYPE',
  'CashBackInfoMod Memo' => 'STRTYPE',
  'CashBackInfoMod Amount' => 'AMTTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'DepositLineMod TxnLineID' => 'IDTYPE',
  'DepositLineMod PaymentTxnID' => 'IDTYPE',
  'DepositLineMod PaymentTxnLineID' => 'IDTYPE',
  'DepositLineMod OverrideMemo' => 'STRTYPE',
  'DepositLineMod OverrideCheckNumber' => 'STRTYPE',
  'DepositLineMod OverrideClassRef ListID' => 'IDTYPE',
  'DepositLineMod OverrideClassRef FullName' => 'STRTYPE',
  'DepositLineMod EntityRef ListID' => 'IDTYPE',
  'DepositLineMod EntityRef FullName' => 'STRTYPE',
  'DepositLineMod AccountRef ListID' => 'IDTYPE',
  'DepositLineMod AccountRef FullName' => 'STRTYPE',
  'DepositLineMod Memo' => 'STRTYPE',
  'DepositLineMod CheckNumber' => 'STRTYPE',
  'DepositLineMod PaymentMethodRef ListID' => 'IDTYPE',
  'DepositLineMod PaymentMethodRef FullName' => 'STRTYPE',
  'DepositLineMod ClassRef ListID' => 'IDTYPE',
  'DepositLineMod ClassRef FullName' => 'STRTYPE',
  'DepositLineMod Amount' => 'AMTTYPE',
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
  'DepositToAccountRef ListID' => 0,
  'DepositToAccountRef FullName' => 159,
  'Memo' => 4095,
  'CashBackInfoMod AccountRef ListID' => 0,
  'CashBackInfoMod AccountRef FullName' => 159,
  'CashBackInfoMod Memo' => 4095,
  'CashBackInfoMod Amount' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 159,
  'ExchangeRate' => 0,
  'DepositLineMod TxnLineID' => 0,
  'DepositLineMod PaymentTxnID' => 0,
  'DepositLineMod PaymentTxnLineID' => 0,
  'DepositLineMod OverrideMemo' => 4095,
  'DepositLineMod OverrideCheckNumber' => 11,
  'DepositLineMod OverrideClassRef ListID' => 0,
  'DepositLineMod OverrideClassRef FullName' => 159,
  'DepositLineMod EntityRef ListID' => 0,
  'DepositLineMod EntityRef FullName' => 159,
  'DepositLineMod AccountRef ListID' => 0,
  'DepositLineMod AccountRef FullName' => 159,
  'DepositLineMod Memo' => 4095,
  'DepositLineMod CheckNumber' => 11,
  'DepositLineMod PaymentMethodRef ListID' => 0,
  'DepositLineMod PaymentMethodRef FullName' => 159,
  'DepositLineMod ClassRef ListID' => 0,
  'DepositLineMod ClassRef FullName' => 159,
  'DepositLineMod Amount' => 0,
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
  'DepositToAccountRef ListID' => true,
  'DepositToAccountRef FullName' => true,
  'Memo' => true,
  'CashBackInfoMod AccountRef ListID' => true,
  'CashBackInfoMod AccountRef FullName' => true,
  'CashBackInfoMod Memo' => true,
  'CashBackInfoMod Amount' => true,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'ExchangeRate' => true,
  'DepositLineMod TxnLineID' => false,
  'DepositLineMod PaymentTxnID' => false,
  'DepositLineMod PaymentTxnLineID' => true,
  'DepositLineMod OverrideMemo' => true,
  'DepositLineMod OverrideCheckNumber' => true,
  'DepositLineMod OverrideClassRef ListID' => true,
  'DepositLineMod OverrideClassRef FullName' => true,
  'DepositLineMod EntityRef ListID' => true,
  'DepositLineMod EntityRef FullName' => true,
  'DepositLineMod AccountRef ListID' => true,
  'DepositLineMod AccountRef FullName' => true,
  'DepositLineMod Memo' => true,
  'DepositLineMod CheckNumber' => true,
  'DepositLineMod PaymentMethodRef ListID' => true,
  'DepositLineMod PaymentMethodRef FullName' => true,
  'DepositLineMod ClassRef ListID' => true,
  'DepositLineMod ClassRef FullName' => true,
  'DepositLineMod Amount' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'EditSequence' => 999.99,
  'TxnDate' => 999.99,
  'DepositToAccountRef ListID' => 999.99,
  'DepositToAccountRef FullName' => 999.99,
  'Memo' => 999.99,
  'CashBackInfoMod AccountRef ListID' => 999.99,
  'CashBackInfoMod AccountRef FullName' => 999.99,
  'CashBackInfoMod Memo' => 999.99,
  'CashBackInfoMod Amount' => 999.99,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'ExchangeRate' => 8.0,
  'DepositLineMod TxnLineID' => 999.99,
  'DepositLineMod PaymentTxnID' => 0.0,
  'DepositLineMod PaymentTxnLineID' => 0.0,
  'DepositLineMod OverrideMemo' => 999.99,
  'DepositLineMod OverrideCheckNumber' => 999.99,
  'DepositLineMod OverrideClassRef ListID' => 999.99,
  'DepositLineMod OverrideClassRef FullName' => 999.99,
  'DepositLineMod EntityRef ListID' => 999.99,
  'DepositLineMod EntityRef FullName' => 999.99,
  'DepositLineMod AccountRef ListID' => 999.99,
  'DepositLineMod AccountRef FullName' => 999.99,
  'DepositLineMod Memo' => 999.99,
  'DepositLineMod CheckNumber' => 999.99,
  'DepositLineMod PaymentMethodRef ListID' => 999.99,
  'DepositLineMod PaymentMethodRef FullName' => 999.99,
  'DepositLineMod ClassRef ListID' => 999.99,
  'DepositLineMod ClassRef FullName' => 999.99,
  'DepositLineMod Amount' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'TxnDate' => false,
  'DepositToAccountRef ListID' => false,
  'DepositToAccountRef FullName' => false,
  'Memo' => false,
  'CashBackInfoMod AccountRef ListID' => false,
  'CashBackInfoMod AccountRef FullName' => false,
  'CashBackInfoMod Memo' => false,
  'CashBackInfoMod Amount' => false,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => false,
  'ExchangeRate' => false,
  'DepositLineMod TxnLineID' => false,
  'DepositLineMod PaymentTxnID' => false,
  'DepositLineMod PaymentTxnLineID' => false,
  'DepositLineMod OverrideMemo' => false,
  'DepositLineMod OverrideCheckNumber' => false,
  'DepositLineMod OverrideClassRef ListID' => false,
  'DepositLineMod OverrideClassRef FullName' => false,
  'DepositLineMod EntityRef ListID' => false,
  'DepositLineMod EntityRef FullName' => false,
  'DepositLineMod AccountRef ListID' => false,
  'DepositLineMod AccountRef FullName' => false,
  'DepositLineMod Memo' => false,
  'DepositLineMod CheckNumber' => false,
  'DepositLineMod PaymentMethodRef ListID' => false,
  'DepositLineMod PaymentMethodRef FullName' => false,
  'DepositLineMod ClassRef ListID' => false,
  'DepositLineMod ClassRef FullName' => false,
  'DepositLineMod Amount' => false,
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
  'DepositToAccountRef',
  'DepositToAccountRef ListID',
  'DepositToAccountRef FullName',
  'Memo',
  'CashBackInfoMod',
  'CashBackInfoMod AccountRef',
  'CashBackInfoMod AccountRef ListID',
  'CashBackInfoMod AccountRef FullName',
  'CashBackInfoMod Memo',
  'CashBackInfoMod Amount',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'ExchangeRate',
  'DepositLineMod',
  'DepositLineMod TxnLineID',
  'DepositLineMod PaymentTxnID',
  'DepositLineMod PaymentTxnLineID',
  'DepositLineMod OverrideMemo',
  'DepositLineMod OverrideCheckNumber',
  'DepositLineMod OverrideClassRef ListID',
  'DepositLineMod OverrideClassRef FullName',
  'DepositLineMod EntityRef ListID',
  'DepositLineMod EntityRef FullName',
  'DepositLineMod AccountRef ListID',
  'DepositLineMod AccountRef FullName',
  'DepositLineMod Memo',
  'DepositLineMod CheckNumber',
  'DepositLineMod PaymentMethodRef ListID',
  'DepositLineMod PaymentMethodRef FullName',
  'DepositLineMod ClassRef ListID',
  'DepositLineMod ClassRef FullName',
  'DepositLineMod Amount',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
