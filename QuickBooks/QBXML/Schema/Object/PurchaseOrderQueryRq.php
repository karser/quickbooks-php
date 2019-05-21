<?php

/**
 * Schema object for: PurchaseOrderQueryRq
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
class QuickBooks_QBXML_Schema_Object_PurchaseOrderQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'RefNumber' => 'STRTYPE',
  'RefNumberCaseSensitive' => 'STRTYPE',
  'MaxReturned' => 'INTTYPE',
  'ModifiedDateRangeFilter FromModifiedDate' => 'DATETIMETYPE',
  'ModifiedDateRangeFilter ToModifiedDate' => 'DATETIMETYPE',
  'TxnDateRangeFilter FromTxnDate' => 'DATETYPE',
  'TxnDateRangeFilter ToTxnDate' => 'DATETYPE',
  'TxnDateRangeFilter DateMacro' => 'ENUMTYPE',
  'EntityFilter ListID' => 'IDTYPE',
  'EntityFilter FullName' => 'STRTYPE',
  'EntityFilter ListIDWithChildren' => 'IDTYPE',
  'EntityFilter FullNameWithChildren' => 'STRTYPE',
  'AccountFilter ListID' => 'IDTYPE',
  'AccountFilter FullName' => 'STRTYPE',
  'AccountFilter ListIDWithChildren' => 'IDTYPE',
  'AccountFilter FullNameWithChildren' => 'STRTYPE',
  'RefNumberFilter MatchCriterion' => 'ENUMTYPE',
  'RefNumberFilter RefNumber' => 'STRTYPE',
  'RefNumberRangeFilter FromRefNumber' => 'STRTYPE',
  'RefNumberRangeFilter ToRefNumber' => 'STRTYPE',
  'CurrencyFilter ListID' => 'IDTYPE',
  'CurrencyFilter FullName' => 'STRTYPE',
  'IncludeLineItems' => 'BOOLTYPE',
  'IncludeLinkedTxns' => 'BOOLTYPE',
  'IncludeRetElement' => 'STRTYPE',
  'OwnerID' => 'GUIDTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnID' => 0,
  'RefNumber' => 0,
  'RefNumberCaseSensitive' => 0,
  'MaxReturned' => 0,
  'ModifiedDateRangeFilter FromModifiedDate' => 0,
  'ModifiedDateRangeFilter ToModifiedDate' => 0,
  'TxnDateRangeFilter FromTxnDate' => 0,
  'TxnDateRangeFilter ToTxnDate' => 0,
  'TxnDateRangeFilter DateMacro' => 0,
  'EntityFilter ListID' => 0,
  'EntityFilter FullName' => 0,
  'EntityFilter ListIDWithChildren' => 0,
  'EntityFilter FullNameWithChildren' => 0,
  'AccountFilter ListID' => 0,
  'AccountFilter FullName' => 0,
  'AccountFilter ListIDWithChildren' => 0,
  'AccountFilter FullNameWithChildren' => 0,
  'RefNumberFilter MatchCriterion' => 0,
  'RefNumberFilter RefNumber' => 0,
  'RefNumberRangeFilter FromRefNumber' => 0,
  'RefNumberRangeFilter ToRefNumber' => 0,
  'CurrencyFilter ListID' => 0,
  'CurrencyFilter FullName' => 0,
  'IncludeLineItems' => 0,
  'IncludeLinkedTxns' => 0,
  'IncludeRetElement' => 50,
  'OwnerID' => 0,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'RefNumber' => false,
  'RefNumberCaseSensitive' => false,
  'MaxReturned' => true,
  'ModifiedDateRangeFilter FromModifiedDate' => true,
  'ModifiedDateRangeFilter ToModifiedDate' => true,
  'TxnDateRangeFilter FromTxnDate' => true,
  'TxnDateRangeFilter ToTxnDate' => true,
  'TxnDateRangeFilter DateMacro' => false,
  'EntityFilter ListID' => false,
  'EntityFilter FullName' => false,
  'EntityFilter ListIDWithChildren' => false,
  'EntityFilter FullNameWithChildren' => false,
  'AccountFilter ListID' => false,
  'AccountFilter FullName' => false,
  'AccountFilter ListIDWithChildren' => false,
  'AccountFilter FullNameWithChildren' => false,
  'RefNumberFilter MatchCriterion' => false,
  'RefNumberFilter RefNumber' => false,
  'RefNumberRangeFilter FromRefNumber' => true,
  'RefNumberRangeFilter ToRefNumber' => true,
  'CurrencyFilter ListID' => false,
  'CurrencyFilter FullName' => false,
  'IncludeLineItems' => true,
  'IncludeLinkedTxns' => true,
  'IncludeRetElement' => true,
  'OwnerID' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'RefNumber' => 999.99,
  'RefNumberCaseSensitive' => 4.0,
  'MaxReturned' => 0.0,
  'ModifiedDateRangeFilter FromModifiedDate' => 999.99,
  'ModifiedDateRangeFilter ToModifiedDate' => 999.99,
  'TxnDateRangeFilter FromTxnDate' => 999.99,
  'TxnDateRangeFilter ToTxnDate' => 999.99,
  'TxnDateRangeFilter DateMacro' => 999.99,
  'EntityFilter ListID' => 2.0,
  'EntityFilter FullName' => 999.99,
  'EntityFilter ListIDWithChildren' => 2.0,
  'EntityFilter FullNameWithChildren' => 999.99,
  'AccountFilter ListID' => 2.0,
  'AccountFilter FullName' => 999.99,
  'AccountFilter ListIDWithChildren' => 2.0,
  'AccountFilter FullNameWithChildren' => 999.99,
  'RefNumberFilter MatchCriterion' => 999.99,
  'RefNumberFilter RefNumber' => 999.99,
  'RefNumberRangeFilter FromRefNumber' => 999.99,
  'RefNumberRangeFilter ToRefNumber' => 999.99,
  'CurrencyFilter ListID' => 2.0,
  'CurrencyFilter FullName' => 999.99,
  'IncludeLineItems' => 999.99,
  'IncludeLinkedTxns' => 3.0,
  'IncludeRetElement' => 4.0,
  'OwnerID' => 2.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => true,
  'RefNumber' => true,
  'RefNumberCaseSensitive' => true,
  'MaxReturned' => false,
  'ModifiedDateRangeFilter FromModifiedDate' => false,
  'ModifiedDateRangeFilter ToModifiedDate' => false,
  'TxnDateRangeFilter FromTxnDate' => false,
  'TxnDateRangeFilter ToTxnDate' => false,
  'TxnDateRangeFilter DateMacro' => false,
  'EntityFilter ListID' => true,
  'EntityFilter FullName' => true,
  'EntityFilter ListIDWithChildren' => false,
  'EntityFilter FullNameWithChildren' => false,
  'AccountFilter ListID' => true,
  'AccountFilter FullName' => true,
  'AccountFilter ListIDWithChildren' => false,
  'AccountFilter FullNameWithChildren' => false,
  'RefNumberFilter MatchCriterion' => false,
  'RefNumberFilter RefNumber' => true,
  'RefNumberRangeFilter FromRefNumber' => false,
  'RefNumberRangeFilter ToRefNumber' => false,
  'CurrencyFilter ListID' => true,
  'CurrencyFilter FullName' => true,
  'IncludeLineItems' => false,
  'IncludeLinkedTxns' => false,
  'IncludeRetElement' => true,
  'OwnerID' => true,
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
  'RefNumber',
  'RefNumberCaseSensitive',
  'MaxReturned',
  'ModifiedDateRangeFilter',
  'ModifiedDateRangeFilter FromModifiedDate',
  'ModifiedDateRangeFilter ToModifiedDate',
  'TxnDateRangeFilter',
  'TxnDateRangeFilter FromTxnDate',
  'TxnDateRangeFilter ToTxnDate',
  'TxnDateRangeFilter DateMacro',
  'EntityFilter',
  'EntityFilter ListID',
  'EntityFilter FullName',
  'EntityFilter ListIDWithChildren',
  'EntityFilter FullNameWithChildren',
  'AccountFilter',
  'AccountFilter ListID',
  'AccountFilter FullName',
  'AccountFilter ListIDWithChildren',
  'AccountFilter FullNameWithChildren',
  'RefNumberFilter',
  'RefNumberFilter MatchCriterion',
  'RefNumberFilter RefNumber',
  'RefNumberRangeFilter',
  'RefNumberRangeFilter FromRefNumber',
  'RefNumberRangeFilter ToRefNumber',
  'CurrencyFilter',
  'CurrencyFilter ListID',
  'CurrencyFilter FullName',
  'IncludeLineItems',
  'IncludeLinkedTxns',
  'IncludeRetElement',
  'OwnerID'
];
			
		return $paths;
	}
}
