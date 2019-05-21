<?php

/**
 * Schema object for: SalesTaxPaymentCheckModRq
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
class QuickBooks_QBXML_Schema_Object_SalesTaxPaymentCheckModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckMod TxnID' => 'IDTYPE',
  'SalesTaxPaymentCheckMod EditSequence' => 'STRTYPE',
  'SalesTaxPaymentCheckMod TxnDate' => 'DATETYPE',
  'SalesTaxPaymentCheckMod BankAccountRef ListID' => 'IDTYPE',
  'SalesTaxPaymentCheckMod BankAccountRef FullName' => 'STRTYPE',
  'SalesTaxPaymentCheckMod IsToBePrinted' => 'BOOLTYPE',
  'SalesTaxPaymentCheckMod RefNumber' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Memo' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Addr1' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Addr2' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Addr3' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Addr4' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Addr5' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address City' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address State' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address PostalCode' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Country' => 'STRTYPE',
  'SalesTaxPaymentCheckMod Address Note' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckMod TxnID' => 0,
  'SalesTaxPaymentCheckMod EditSequence' => 16,
  'SalesTaxPaymentCheckMod TxnDate' => 0,
  'SalesTaxPaymentCheckMod BankAccountRef ListID' => 0,
  'SalesTaxPaymentCheckMod BankAccountRef FullName' => 159,
  'SalesTaxPaymentCheckMod IsToBePrinted' => 0,
  'SalesTaxPaymentCheckMod RefNumber' => 0,
  'SalesTaxPaymentCheckMod Memo' => 4095,
  'SalesTaxPaymentCheckMod Address Addr1' => 41,
  'SalesTaxPaymentCheckMod Address Addr2' => 41,
  'SalesTaxPaymentCheckMod Address Addr3' => 41,
  'SalesTaxPaymentCheckMod Address Addr4' => 41,
  'SalesTaxPaymentCheckMod Address Addr5' => 41,
  'SalesTaxPaymentCheckMod Address City' => 31,
  'SalesTaxPaymentCheckMod Address State' => 21,
  'SalesTaxPaymentCheckMod Address PostalCode' => 13,
  'SalesTaxPaymentCheckMod Address Country' => 31,
  'SalesTaxPaymentCheckMod Address Note' => 41,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckMod TxnID' => false,
  'SalesTaxPaymentCheckMod EditSequence' => false,
  'SalesTaxPaymentCheckMod TxnDate' => true,
  'SalesTaxPaymentCheckMod BankAccountRef ListID' => true,
  'SalesTaxPaymentCheckMod BankAccountRef FullName' => true,
  'SalesTaxPaymentCheckMod IsToBePrinted' => false,
  'SalesTaxPaymentCheckMod RefNumber' => false,
  'SalesTaxPaymentCheckMod Memo' => true,
  'SalesTaxPaymentCheckMod Address Addr1' => true,
  'SalesTaxPaymentCheckMod Address Addr2' => true,
  'SalesTaxPaymentCheckMod Address Addr3' => true,
  'SalesTaxPaymentCheckMod Address Addr4' => true,
  'SalesTaxPaymentCheckMod Address Addr5' => true,
  'SalesTaxPaymentCheckMod Address City' => true,
  'SalesTaxPaymentCheckMod Address State' => true,
  'SalesTaxPaymentCheckMod Address PostalCode' => true,
  'SalesTaxPaymentCheckMod Address Country' => true,
  'SalesTaxPaymentCheckMod Address Note' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckMod TxnID' => 999.99,
  'SalesTaxPaymentCheckMod EditSequence' => 999.99,
  'SalesTaxPaymentCheckMod TxnDate' => 999.99,
  'SalesTaxPaymentCheckMod BankAccountRef ListID' => 999.99,
  'SalesTaxPaymentCheckMod BankAccountRef FullName' => 999.99,
  'SalesTaxPaymentCheckMod IsToBePrinted' => 999.99,
  'SalesTaxPaymentCheckMod RefNumber' => 999.99,
  'SalesTaxPaymentCheckMod Memo' => 999.99,
  'SalesTaxPaymentCheckMod Address Addr1' => 999.99,
  'SalesTaxPaymentCheckMod Address Addr2' => 999.99,
  'SalesTaxPaymentCheckMod Address Addr3' => 999.99,
  'SalesTaxPaymentCheckMod Address Addr4' => 2.0,
  'SalesTaxPaymentCheckMod Address Addr5' => 6.0,
  'SalesTaxPaymentCheckMod Address City' => 999.99,
  'SalesTaxPaymentCheckMod Address State' => 999.99,
  'SalesTaxPaymentCheckMod Address PostalCode' => 999.99,
  'SalesTaxPaymentCheckMod Address Country' => 999.99,
  'SalesTaxPaymentCheckMod Address Note' => 6.0,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckMod TxnID' => false,
  'SalesTaxPaymentCheckMod EditSequence' => false,
  'SalesTaxPaymentCheckMod TxnDate' => false,
  'SalesTaxPaymentCheckMod BankAccountRef ListID' => false,
  'SalesTaxPaymentCheckMod BankAccountRef FullName' => false,
  'SalesTaxPaymentCheckMod IsToBePrinted' => false,
  'SalesTaxPaymentCheckMod RefNumber' => false,
  'SalesTaxPaymentCheckMod Memo' => false,
  'SalesTaxPaymentCheckMod Address Addr1' => false,
  'SalesTaxPaymentCheckMod Address Addr2' => false,
  'SalesTaxPaymentCheckMod Address Addr3' => false,
  'SalesTaxPaymentCheckMod Address Addr4' => false,
  'SalesTaxPaymentCheckMod Address Addr5' => false,
  'SalesTaxPaymentCheckMod Address City' => false,
  'SalesTaxPaymentCheckMod Address State' => false,
  'SalesTaxPaymentCheckMod Address PostalCode' => false,
  'SalesTaxPaymentCheckMod Address Country' => false,
  'SalesTaxPaymentCheckMod Address Note' => false,
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
  'SalesTaxPaymentCheckMod',
  'SalesTaxPaymentCheckMod TxnID',
  'SalesTaxPaymentCheckMod EditSequence',
  'SalesTaxPaymentCheckMod TxnDate',
  'SalesTaxPaymentCheckMod BankAccountRef ListID',
  'SalesTaxPaymentCheckMod BankAccountRef FullName',
  'SalesTaxPaymentCheckMod IsToBePrinted',
  'SalesTaxPaymentCheckMod RefNumber',
  'SalesTaxPaymentCheckMod Memo',
  'SalesTaxPaymentCheckMod Address Addr1',
  'SalesTaxPaymentCheckMod Address Addr2',
  'SalesTaxPaymentCheckMod Address Addr3',
  'SalesTaxPaymentCheckMod Address Addr4',
  'SalesTaxPaymentCheckMod Address Addr5',
  'SalesTaxPaymentCheckMod Address City',
  'SalesTaxPaymentCheckMod Address State',
  'SalesTaxPaymentCheckMod Address PostalCode',
  'SalesTaxPaymentCheckMod Address Country',
  'SalesTaxPaymentCheckMod Address Note',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
