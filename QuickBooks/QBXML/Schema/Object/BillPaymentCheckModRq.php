<?php

/**
 * Schema object for: BillPaymentCheckModRq
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
class QuickBooks_QBXML_Schema_Object_BillPaymentCheckModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'BillPaymentCheckMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'BankAccountRef ListID' => 'IDTYPE',
  'BankAccountRef FullName' => 'STRTYPE',
  'Amount' => 'AMTTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'IsToBePrinted' => 'BOOLTYPE',
  'RefNumber' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'AppliedToTxnMod TxnID' => 'IDTYPE',
  'AppliedToTxnMod PaymentAmount' => 'AMTTYPE',
  'AppliedToTxnMod SetCredit CreditTxnID' => 'IDTYPE',
  'AppliedToTxnMod SetCredit TxnLineID' => 'IDTYPE',
  'AppliedToTxnMod SetCredit AppliedAmount' => 'AMTTYPE',
  'AppliedToTxnMod SetCredit Override' => 'BOOLTYPE',
  'AppliedToTxnMod DiscountAmount' => 'AMTTYPE',
  'AppliedToTxnMod DiscountAccountRef ListID' => 'IDTYPE',
  'AppliedToTxnMod DiscountAccountRef FullName' => 'STRTYPE',
  'AppliedToTxnMod DiscountClassRef ListID' => 'IDTYPE',
  'AppliedToTxnMod DiscountClassRef FullName' => 'STRTYPE',
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
  'BankAccountRef ListID' => 0,
  'BankAccountRef FullName' => 159,
  'Amount' => 0,
  'ExchangeRate' => 0,
  'IsToBePrinted' => 0,
  'RefNumber' => 11,
  'Memo' => 4095,
  'AppliedToTxnMod TxnID' => 0,
  'AppliedToTxnMod PaymentAmount' => 0,
  'AppliedToTxnMod SetCredit CreditTxnID' => 0,
  'AppliedToTxnMod SetCredit TxnLineID' => 0,
  'AppliedToTxnMod SetCredit AppliedAmount' => 0,
  'AppliedToTxnMod SetCredit Override' => 0,
  'AppliedToTxnMod DiscountAmount' => 0,
  'AppliedToTxnMod DiscountAccountRef ListID' => 0,
  'AppliedToTxnMod DiscountAccountRef FullName' => 159,
  'AppliedToTxnMod DiscountClassRef ListID' => 0,
  'AppliedToTxnMod DiscountClassRef FullName' => 159,
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
  'BankAccountRef ListID' => true,
  'BankAccountRef FullName' => true,
  'Amount' => true,
  'ExchangeRate' => true,
  'IsToBePrinted' => false,
  'RefNumber' => false,
  'Memo' => true,
  'AppliedToTxnMod TxnID' => false,
  'AppliedToTxnMod PaymentAmount' => true,
  'AppliedToTxnMod SetCredit CreditTxnID' => false,
  'AppliedToTxnMod SetCredit TxnLineID' => true,
  'AppliedToTxnMod SetCredit AppliedAmount' => false,
  'AppliedToTxnMod SetCredit Override' => true,
  'AppliedToTxnMod DiscountAmount' => true,
  'AppliedToTxnMod DiscountAccountRef ListID' => true,
  'AppliedToTxnMod DiscountAccountRef FullName' => true,
  'AppliedToTxnMod DiscountClassRef ListID' => true,
  'AppliedToTxnMod DiscountClassRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'EditSequence' => 999.99,
  'TxnDate' => 999.99,
  'BankAccountRef ListID' => 999.99,
  'BankAccountRef FullName' => 999.99,
  'Amount' => 999.99,
  'ExchangeRate' => 8.0,
  'IsToBePrinted' => 999.99,
  'RefNumber' => 999.99,
  'Memo' => 999.99,
  'AppliedToTxnMod TxnID' => 999.99,
  'AppliedToTxnMod PaymentAmount' => 999.99,
  'AppliedToTxnMod SetCredit CreditTxnID' => 0.0,
  'AppliedToTxnMod SetCredit TxnLineID' => 999.99,
  'AppliedToTxnMod SetCredit AppliedAmount' => 999.99,
  'AppliedToTxnMod SetCredit Override' => 10.0,
  'AppliedToTxnMod DiscountAmount' => 999.99,
  'AppliedToTxnMod DiscountAccountRef ListID' => 999.99,
  'AppliedToTxnMod DiscountAccountRef FullName' => 999.99,
  'AppliedToTxnMod DiscountClassRef ListID' => 999.99,
  'AppliedToTxnMod DiscountClassRef FullName' => 999.99,
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
  'BankAccountRef ListID' => false,
  'BankAccountRef FullName' => false,
  'Amount' => false,
  'ExchangeRate' => false,
  'IsToBePrinted' => false,
  'RefNumber' => false,
  'Memo' => false,
  'AppliedToTxnMod TxnID' => false,
  'AppliedToTxnMod PaymentAmount' => false,
  'AppliedToTxnMod SetCredit CreditTxnID' => false,
  'AppliedToTxnMod SetCredit TxnLineID' => false,
  'AppliedToTxnMod SetCredit AppliedAmount' => false,
  'AppliedToTxnMod SetCredit Override' => false,
  'AppliedToTxnMod DiscountAmount' => false,
  'AppliedToTxnMod DiscountAccountRef ListID' => false,
  'AppliedToTxnMod DiscountAccountRef FullName' => false,
  'AppliedToTxnMod DiscountClassRef ListID' => false,
  'AppliedToTxnMod DiscountClassRef FullName' => false,
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
  'BankAccountRef',
  'BankAccountRef ListID',
  'BankAccountRef FullName',
  'Amount',
  'ExchangeRate',
  'IsToBePrinted',
  'RefNumber',
  'Memo',
  'AppliedToTxnMod',
  'AppliedToTxnMod TxnID',
  'AppliedToTxnMod PaymentAmount',
  'AppliedToTxnMod SetCredit CreditTxnID',
  'AppliedToTxnMod SetCredit TxnLineID',
  'AppliedToTxnMod SetCredit AppliedAmount',
  'AppliedToTxnMod SetCredit Override',
  'AppliedToTxnMod DiscountAmount',
  'AppliedToTxnMod DiscountAccountRef ListID',
  'AppliedToTxnMod DiscountAccountRef FullName',
  'AppliedToTxnMod DiscountClassRef ListID',
  'AppliedToTxnMod DiscountClassRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
