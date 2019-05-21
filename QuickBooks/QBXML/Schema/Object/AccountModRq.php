<?php

/**
 * Schema object for: AccountModRq
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
class QuickBooks_QBXML_Schema_Object_AccountModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'AccountMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'ListID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'ParentRef ListID' => 'IDTYPE',
  'ParentRef FullName' => 'STRTYPE',
  'AccountType' => 'ENUMTYPE',
  'AccountNumber' => 'STRTYPE',
  'BankNumber' => 'STRTYPE',
  'Desc' => 'STRTYPE',
  'OpenBalance' => 'AMTTYPE',
  'OpenBalanceDate' => 'DATETYPE',
  'SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesTaxCodeRef FullName' => 'STRTYPE',
  'TaxLineID' => 'INTTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'ListID' => 0,
  'EditSequence' => 16,
  'Name' => 31,
  'IsActive' => 0,
  'ParentRef ListID' => 0,
  'ParentRef FullName' => 0,
  'AccountType' => 0,
  'AccountNumber' => 7,
  'BankNumber' => 25,
  'Desc' => 200,
  'OpenBalance' => 0,
  'OpenBalanceDate' => 0,
  'SalesTaxCodeRef ListID' => 0,
  'SalesTaxCodeRef FullName' => 0,
  'TaxLineID' => 0,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'ListID' => false,
  'EditSequence' => false,
  'Name' => true,
  'IsActive' => true,
  'ParentRef ListID' => false,
  'ParentRef FullName' => true,
  'AccountType' => true,
  'AccountNumber' => true,
  'BankNumber' => true,
  'Desc' => true,
  'OpenBalance' => true,
  'OpenBalanceDate' => true,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => true,
  'TaxLineID' => true,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'ListID' => 999.99,
  'EditSequence' => 999.99,
  'Name' => 999.99,
  'IsActive' => 999.99,
  'ParentRef ListID' => 999.99,
  'ParentRef FullName' => 999.99,
  'AccountType' => 999.99,
  'AccountNumber' => 999.99,
  'BankNumber' => 999.99,
  'Desc' => 999.99,
  'OpenBalance' => 999.99,
  'OpenBalanceDate' => 999.99,
  'SalesTaxCodeRef ListID' => 999.99,
  'SalesTaxCodeRef FullName' => 999.99,
  'TaxLineID' => 7.0,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'ListID' => false,
  'EditSequence' => false,
  'Name' => false,
  'IsActive' => false,
  'ParentRef ListID' => false,
  'ParentRef FullName' => false,
  'AccountType' => false,
  'AccountNumber' => false,
  'BankNumber' => false,
  'Desc' => false,
  'OpenBalance' => false,
  'OpenBalanceDate' => false,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => false,
  'TaxLineID' => false,
  'CurrencyRef ListID' => false,
  'CurrencyRef FullName' => false,
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
  'ListID',
  'EditSequence',
  'Name',
  'IsActive',
  'ParentRef',
  'ParentRef ListID',
  'ParentRef FullName',
  'AccountType',
  'AccountNumber',
  'BankNumber',
  'Desc',
  'OpenBalance',
  'OpenBalanceDate',
  'SalesTaxCodeRef',
  'SalesTaxCodeRef ListID',
  'SalesTaxCodeRef FullName',
  'TaxLineID',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
