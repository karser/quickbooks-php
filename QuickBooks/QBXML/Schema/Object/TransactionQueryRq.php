<?php

/**
 * Schema object for: TransactionQueryRq
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
class QuickBooks_QBXML_Schema_Object_TransactionQueryRq extends QuickBooks_QBXML_Schema_Object
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
  'MaxReturned' => 'INTTYPE',
  'RefNumber' => 'STRTYPE',
  'RefNumberCaseSensitive' => 'STRTYPE',
  'RefNumberFilter MatchCriterion' => 'ENUMTYPE',
  'RefNumberFilter RefNumber' => 'STRTYPE',
  'RefNumberRangeFilter FromRefNumber' => 'STRTYPE',
  'RefNumberRangeFilter ToRefNumber' => 'STRTYPE',
  'TransactionModifiedDateRangeFilter FromModifiedDate' => 'DATETIMETYPE',
  'TransactionModifiedDateRangeFilter ToModifiedDate' => 'DATETIMETYPE',
  'TransactionModifiedDateRangeFilter DateMacro' => 'ENUMTYPE',
  'TransactionDateRangeFilter FromTxnDate' => 'DATETYPE',
  'TransactionDateRangeFilter ToTxnDate' => 'DATETYPE',
  'TransactionDateRangeFilter DateMacro' => 'ENUMTYPE',
  'TransactionEntityFilter EntityTypeFilter' => 'ENUMTYPE',
  'TransactionEntityFilter ListID' => 'IDTYPE',
  'TransactionEntityFilter FullName' => 'STRTYPE',
  'TransactionEntityFilter ListIDWithChildren' => 'IDTYPE',
  'TransactionEntityFilter FullNameWithChildren' => 'STRTYPE',
  'TransactionAccountFilter AccountTypeFilter' => 'ENUMTYPE',
  'TransactionAccountFilter ListID' => 'IDTYPE',
  'TransactionAccountFilter FullName' => 'STRTYPE',
  'TransactionAccountFilter ListIDWithChildren' => 'IDTYPE',
  'TransactionAccountFilter FullNameWithChildren' => 'STRTYPE',
  'TransactionItemFilter ItemTypeFilter' => 'ENUMTYPE',
  'TransactionItemFilter ListID' => 'IDTYPE',
  'TransactionItemFilter FullName' => 'STRTYPE',
  'TransactionItemFilter ListIDWithChildren' => 'IDTYPE',
  'TransactionItemFilter FullNameWithChildren' => 'STRTYPE',
  'TransactionClassFilter ListID' => 'IDTYPE',
  'TransactionClassFilter FullName' => 'STRTYPE',
  'TransactionClassFilter ListIDWithChildren' => 'IDTYPE',
  'TransactionClassFilter FullNameWithChildren' => 'STRTYPE',
  'TransactionTypeFilter TxnTypeFilter' => 'ENUMTYPE',
  'TransactionDetailLevelFilter' => 'ENUMTYPE',
  'TransactionPostingStatusFilter' => 'ENUMTYPE',
  'TransactionPaidStatusFilter' => 'ENUMTYPE',
  'CurrencyFilter ListID' => 'IDTYPE',
  'CurrencyFilter FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TxnID' => 0,
  'MaxReturned' => 0,
  'RefNumber' => 0,
  'RefNumberCaseSensitive' => 0,
  'RefNumberFilter MatchCriterion' => 0,
  'RefNumberFilter RefNumber' => 0,
  'RefNumberRangeFilter FromRefNumber' => 0,
  'RefNumberRangeFilter ToRefNumber' => 0,
  'TransactionModifiedDateRangeFilter FromModifiedDate' => 0,
  'TransactionModifiedDateRangeFilter ToModifiedDate' => 0,
  'TransactionModifiedDateRangeFilter DateMacro' => 0,
  'TransactionDateRangeFilter FromTxnDate' => 0,
  'TransactionDateRangeFilter ToTxnDate' => 0,
  'TransactionDateRangeFilter DateMacro' => 0,
  'TransactionEntityFilter EntityTypeFilter' => 0,
  'TransactionEntityFilter ListID' => 0,
  'TransactionEntityFilter FullName' => 0,
  'TransactionEntityFilter ListIDWithChildren' => 0,
  'TransactionEntityFilter FullNameWithChildren' => 0,
  'TransactionAccountFilter AccountTypeFilter' => 0,
  'TransactionAccountFilter ListID' => 0,
  'TransactionAccountFilter FullName' => 0,
  'TransactionAccountFilter ListIDWithChildren' => 0,
  'TransactionAccountFilter FullNameWithChildren' => 0,
  'TransactionItemFilter ItemTypeFilter' => 0,
  'TransactionItemFilter ListID' => 0,
  'TransactionItemFilter FullName' => 0,
  'TransactionItemFilter ListIDWithChildren' => 0,
  'TransactionItemFilter FullNameWithChildren' => 0,
  'TransactionClassFilter ListID' => 0,
  'TransactionClassFilter FullName' => 0,
  'TransactionClassFilter ListIDWithChildren' => 0,
  'TransactionClassFilter FullNameWithChildren' => 0,
  'TransactionTypeFilter TxnTypeFilter' => 0,
  'TransactionDetailLevelFilter' => 0,
  'TransactionPostingStatusFilter' => 0,
  'TransactionPaidStatusFilter' => 0,
  'CurrencyFilter ListID' => 0,
  'CurrencyFilter FullName' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'MaxReturned' => true,
  'RefNumber' => false,
  'RefNumberCaseSensitive' => false,
  'RefNumberFilter MatchCriterion' => false,
  'RefNumberFilter RefNumber' => false,
  'RefNumberRangeFilter FromRefNumber' => true,
  'RefNumberRangeFilter ToRefNumber' => true,
  'TransactionModifiedDateRangeFilter FromModifiedDate' => true,
  'TransactionModifiedDateRangeFilter ToModifiedDate' => true,
  'TransactionModifiedDateRangeFilter DateMacro' => false,
  'TransactionDateRangeFilter FromTxnDate' => true,
  'TransactionDateRangeFilter ToTxnDate' => true,
  'TransactionDateRangeFilter DateMacro' => false,
  'TransactionEntityFilter EntityTypeFilter' => false,
  'TransactionEntityFilter ListID' => false,
  'TransactionEntityFilter FullName' => false,
  'TransactionEntityFilter ListIDWithChildren' => false,
  'TransactionEntityFilter FullNameWithChildren' => false,
  'TransactionAccountFilter AccountTypeFilter' => false,
  'TransactionAccountFilter ListID' => false,
  'TransactionAccountFilter FullName' => false,
  'TransactionAccountFilter ListIDWithChildren' => false,
  'TransactionAccountFilter FullNameWithChildren' => false,
  'TransactionItemFilter ItemTypeFilter' => false,
  'TransactionItemFilter ListID' => false,
  'TransactionItemFilter FullName' => false,
  'TransactionItemFilter ListIDWithChildren' => false,
  'TransactionItemFilter FullNameWithChildren' => false,
  'TransactionClassFilter ListID' => false,
  'TransactionClassFilter FullName' => false,
  'TransactionClassFilter ListIDWithChildren' => false,
  'TransactionClassFilter FullNameWithChildren' => false,
  'TransactionTypeFilter TxnTypeFilter' => false,
  'TransactionDetailLevelFilter' => true,
  'TransactionPostingStatusFilter' => true,
  'TransactionPaidStatusFilter' => true,
  'CurrencyFilter ListID' => false,
  'CurrencyFilter FullName' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TxnID' => 999.99,
  'MaxReturned' => 0.0,
  'RefNumber' => 999.99,
  'RefNumberCaseSensitive' => 4.0,
  'RefNumberFilter MatchCriterion' => 999.99,
  'RefNumberFilter RefNumber' => 999.99,
  'RefNumberRangeFilter FromRefNumber' => 999.99,
  'RefNumberRangeFilter ToRefNumber' => 999.99,
  'TransactionModifiedDateRangeFilter FromModifiedDate' => 999.99,
  'TransactionModifiedDateRangeFilter ToModifiedDate' => 999.99,
  'TransactionModifiedDateRangeFilter DateMacro' => 999.99,
  'TransactionDateRangeFilter FromTxnDate' => 999.99,
  'TransactionDateRangeFilter ToTxnDate' => 999.99,
  'TransactionDateRangeFilter DateMacro' => 999.99,
  'TransactionEntityFilter EntityTypeFilter' => 999.99,
  'TransactionEntityFilter ListID' => 999.99,
  'TransactionEntityFilter FullName' => 999.99,
  'TransactionEntityFilter ListIDWithChildren' => 999.99,
  'TransactionEntityFilter FullNameWithChildren' => 999.99,
  'TransactionAccountFilter AccountTypeFilter' => 999.99,
  'TransactionAccountFilter ListID' => 999.99,
  'TransactionAccountFilter FullName' => 999.99,
  'TransactionAccountFilter ListIDWithChildren' => 999.99,
  'TransactionAccountFilter FullNameWithChildren' => 999.99,
  'TransactionItemFilter ItemTypeFilter' => 999.99,
  'TransactionItemFilter ListID' => 999.99,
  'TransactionItemFilter FullName' => 999.99,
  'TransactionItemFilter ListIDWithChildren' => 999.99,
  'TransactionItemFilter FullNameWithChildren' => 999.99,
  'TransactionClassFilter ListID' => 999.99,
  'TransactionClassFilter FullName' => 999.99,
  'TransactionClassFilter ListIDWithChildren' => 999.99,
  'TransactionClassFilter FullNameWithChildren' => 999.99,
  'TransactionTypeFilter TxnTypeFilter' => 999.99,
  'TransactionDetailLevelFilter' => 999.99,
  'TransactionPostingStatusFilter' => 999.99,
  'TransactionPaidStatusFilter' => 999.99,
  'CurrencyFilter ListID' => 999.99,
  'CurrencyFilter FullName' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TxnID' => true,
  'MaxReturned' => false,
  'RefNumber' => true,
  'RefNumberCaseSensitive' => true,
  'RefNumberFilter MatchCriterion' => false,
  'RefNumberFilter RefNumber' => true,
  'RefNumberRangeFilter FromRefNumber' => false,
  'RefNumberRangeFilter ToRefNumber' => false,
  'TransactionModifiedDateRangeFilter FromModifiedDate' => false,
  'TransactionModifiedDateRangeFilter ToModifiedDate' => false,
  'TransactionModifiedDateRangeFilter DateMacro' => false,
  'TransactionDateRangeFilter FromTxnDate' => false,
  'TransactionDateRangeFilter ToTxnDate' => false,
  'TransactionDateRangeFilter DateMacro' => false,
  'TransactionEntityFilter EntityTypeFilter' => false,
  'TransactionEntityFilter ListID' => true,
  'TransactionEntityFilter FullName' => true,
  'TransactionEntityFilter ListIDWithChildren' => false,
  'TransactionEntityFilter FullNameWithChildren' => false,
  'TransactionAccountFilter AccountTypeFilter' => false,
  'TransactionAccountFilter ListID' => true,
  'TransactionAccountFilter FullName' => true,
  'TransactionAccountFilter ListIDWithChildren' => false,
  'TransactionAccountFilter FullNameWithChildren' => false,
  'TransactionItemFilter ItemTypeFilter' => false,
  'TransactionItemFilter ListID' => true,
  'TransactionItemFilter FullName' => true,
  'TransactionItemFilter ListIDWithChildren' => false,
  'TransactionItemFilter FullNameWithChildren' => false,
  'TransactionClassFilter ListID' => true,
  'TransactionClassFilter FullName' => true,
  'TransactionClassFilter ListIDWithChildren' => false,
  'TransactionClassFilter FullNameWithChildren' => false,
  'TransactionTypeFilter TxnTypeFilter' => true,
  'TransactionDetailLevelFilter' => false,
  'TransactionPostingStatusFilter' => false,
  'TransactionPaidStatusFilter' => false,
  'CurrencyFilter ListID' => true,
  'CurrencyFilter FullName' => true,
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
  'MaxReturned',
  'RefNumber',
  'RefNumberCaseSensitive',
  'RefNumberFilter',
  'RefNumberFilter MatchCriterion',
  'RefNumberFilter RefNumber',
  'RefNumberRangeFilter',
  'RefNumberRangeFilter FromRefNumber',
  'RefNumberRangeFilter ToRefNumber',
  'TransactionModifiedDateRangeFilter',
  'TransactionModifiedDateRangeFilter FromModifiedDate',
  'TransactionModifiedDateRangeFilter ToModifiedDate',
  'TransactionModifiedDateRangeFilter DateMacro',
  'TransactionDateRangeFilter',
  'TransactionDateRangeFilter FromTxnDate',
  'TransactionDateRangeFilter ToTxnDate',
  'TransactionDateRangeFilter DateMacro',
  'TransactionEntityFilter',
  'TransactionEntityFilter EntityTypeFilter',
  'TransactionEntityFilter ListID',
  'TransactionEntityFilter FullName',
  'TransactionEntityFilter ListIDWithChildren',
  'TransactionEntityFilter FullNameWithChildren',
  'TransactionAccountFilter',
  'TransactionAccountFilter AccountTypeFilter',
  'TransactionAccountFilter ListID',
  'TransactionAccountFilter FullName',
  'TransactionAccountFilter ListIDWithChildren',
  'TransactionAccountFilter FullNameWithChildren',
  'TransactionItemFilter',
  'TransactionItemFilter ItemTypeFilter',
  'TransactionItemFilter ListID',
  'TransactionItemFilter FullName',
  'TransactionItemFilter ListIDWithChildren',
  'TransactionItemFilter FullNameWithChildren',
  'TransactionClassFilter',
  'TransactionClassFilter ListID',
  'TransactionClassFilter FullName',
  'TransactionClassFilter ListIDWithChildren',
  'TransactionClassFilter FullNameWithChildren',
  'TransactionTypeFilter',
  'TransactionTypeFilter TxnTypeFilter',
  'TransactionDetailLevelFilter',
  'TransactionPostingStatusFilter',
  'TransactionPaidStatusFilter',
  'CurrencyFilter',
  'CurrencyFilter ListID',
  'CurrencyFilter FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
