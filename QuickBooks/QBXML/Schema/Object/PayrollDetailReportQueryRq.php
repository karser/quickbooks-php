<?php

/**
 * Schema object for: PayrollDetailReportQueryRq
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
class QuickBooks_QBXML_Schema_Object_PayrollDetailReportQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'PayrollDetailReportType' => 'ENUMTYPE',
  'DisplayReport' => 'BOOLTYPE',
  'ReportPeriod FromReportDate' => 'DATETYPE',
  'ReportPeriod ToReportDate' => 'DATETYPE',
  'ReportDateMacro' => 'ENUMTYPE',
  'ReportAccountFilter AccountTypeFilter' => 'ENUMTYPE',
  'ReportAccountFilter ListID' => 'IDTYPE',
  'ReportAccountFilter FullName' => 'STRTYPE',
  'ReportAccountFilter ListIDWithChildren' => 'IDTYPE',
  'ReportAccountFilter FullNameWithChildren' => 'STRTYPE',
  'ReportEntityFilter EntityTypeFilter' => 'ENUMTYPE',
  'ReportEntityFilter ListID' => 'IDTYPE',
  'ReportEntityFilter FullName' => 'STRTYPE',
  'ReportEntityFilter ListIDWithChildren' => 'IDTYPE',
  'ReportEntityFilter FullNameWithChildren' => 'STRTYPE',
  'ReportItemFilter ItemTypeFilter' => 'ENUMTYPE',
  'ReportItemFilter ListID' => 'IDTYPE',
  'ReportItemFilter FullName' => 'STRTYPE',
  'ReportItemFilter ListIDWithChildren' => 'IDTYPE',
  'ReportItemFilter FullNameWithChildren' => 'STRTYPE',
  'ReportClassFilter ListID' => 'IDTYPE',
  'ReportClassFilter FullName' => 'STRTYPE',
  'ReportClassFilter ListIDWithChildren' => 'IDTYPE',
  'ReportClassFilter FullNameWithChildren' => 'STRTYPE',
  'ReportModifiedDateRangeFilter FromReportModifiedDate' => 'DATETYPE',
  'ReportModifiedDateRangeFilter ToReportModifiedDate' => 'DATETYPE',
  'ReportModifiedDateRangeMacro' => 'ENUMTYPE',
  'ReportDetailLevelFilter' => 'ENUMTYPE',
  'ReportPostingStatusFilter' => 'ENUMTYPE',
  'SummarizeRowsBy' => 'ENUMTYPE',
  'IncludeColumn' => 'ENUMTYPE',
  'IncludeAccounts' => 'ENUMTYPE',
  'ReportOpenBalanceAsOf' => 'ENUMTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'PayrollDetailReportType' => 0,
  'DisplayReport' => 0,
  'ReportPeriod FromReportDate' => 0,
  'ReportPeriod ToReportDate' => 0,
  'ReportDateMacro' => 0,
  'ReportAccountFilter AccountTypeFilter' => 0,
  'ReportAccountFilter ListID' => 0,
  'ReportAccountFilter FullName' => 0,
  'ReportAccountFilter ListIDWithChildren' => 0,
  'ReportAccountFilter FullNameWithChildren' => 0,
  'ReportEntityFilter EntityTypeFilter' => 0,
  'ReportEntityFilter ListID' => 0,
  'ReportEntityFilter FullName' => 0,
  'ReportEntityFilter ListIDWithChildren' => 0,
  'ReportEntityFilter FullNameWithChildren' => 0,
  'ReportItemFilter ItemTypeFilter' => 0,
  'ReportItemFilter ListID' => 0,
  'ReportItemFilter FullName' => 0,
  'ReportItemFilter ListIDWithChildren' => 0,
  'ReportItemFilter FullNameWithChildren' => 0,
  'ReportClassFilter ListID' => 0,
  'ReportClassFilter FullName' => 0,
  'ReportClassFilter ListIDWithChildren' => 0,
  'ReportClassFilter FullNameWithChildren' => 0,
  'ReportModifiedDateRangeFilter FromReportModifiedDate' => 0,
  'ReportModifiedDateRangeFilter ToReportModifiedDate' => 0,
  'ReportModifiedDateRangeMacro' => 0,
  'ReportDetailLevelFilter' => 0,
  'ReportPostingStatusFilter' => 0,
  'SummarizeRowsBy' => 0,
  'IncludeColumn' => 0,
  'IncludeAccounts' => 0,
  'ReportOpenBalanceAsOf' => 0,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'PayrollDetailReportType' => false,
  'DisplayReport' => true,
  'ReportPeriod FromReportDate' => true,
  'ReportPeriod ToReportDate' => true,
  'ReportDateMacro' => false,
  'ReportAccountFilter AccountTypeFilter' => false,
  'ReportAccountFilter ListID' => false,
  'ReportAccountFilter FullName' => false,
  'ReportAccountFilter ListIDWithChildren' => false,
  'ReportAccountFilter FullNameWithChildren' => false,
  'ReportEntityFilter EntityTypeFilter' => false,
  'ReportEntityFilter ListID' => false,
  'ReportEntityFilter FullName' => false,
  'ReportEntityFilter ListIDWithChildren' => false,
  'ReportEntityFilter FullNameWithChildren' => false,
  'ReportItemFilter ItemTypeFilter' => false,
  'ReportItemFilter ListID' => false,
  'ReportItemFilter FullName' => false,
  'ReportItemFilter ListIDWithChildren' => false,
  'ReportItemFilter FullNameWithChildren' => false,
  'ReportClassFilter ListID' => false,
  'ReportClassFilter FullName' => false,
  'ReportClassFilter ListIDWithChildren' => false,
  'ReportClassFilter FullNameWithChildren' => false,
  'ReportModifiedDateRangeFilter FromReportModifiedDate' => true,
  'ReportModifiedDateRangeFilter ToReportModifiedDate' => true,
  'ReportModifiedDateRangeMacro' => false,
  'ReportDetailLevelFilter' => true,
  'ReportPostingStatusFilter' => true,
  'SummarizeRowsBy' => true,
  'IncludeColumn' => true,
  'IncludeAccounts' => true,
  'ReportOpenBalanceAsOf' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'PayrollDetailReportType' => 999.99,
  'DisplayReport' => 3.0,
  'ReportPeriod FromReportDate' => 999.99,
  'ReportPeriod ToReportDate' => 999.99,
  'ReportDateMacro' => 999.99,
  'ReportAccountFilter AccountTypeFilter' => 999.99,
  'ReportAccountFilter ListID' => 999.99,
  'ReportAccountFilter FullName' => 999.99,
  'ReportAccountFilter ListIDWithChildren' => 999.99,
  'ReportAccountFilter FullNameWithChildren' => 999.99,
  'ReportEntityFilter EntityTypeFilter' => 999.99,
  'ReportEntityFilter ListID' => 999.99,
  'ReportEntityFilter FullName' => 999.99,
  'ReportEntityFilter ListIDWithChildren' => 999.99,
  'ReportEntityFilter FullNameWithChildren' => 999.99,
  'ReportItemFilter ItemTypeFilter' => 999.99,
  'ReportItemFilter ListID' => 999.99,
  'ReportItemFilter FullName' => 999.99,
  'ReportItemFilter ListIDWithChildren' => 999.99,
  'ReportItemFilter FullNameWithChildren' => 999.99,
  'ReportClassFilter ListID' => 999.99,
  'ReportClassFilter FullName' => 999.99,
  'ReportClassFilter ListIDWithChildren' => 999.99,
  'ReportClassFilter FullNameWithChildren' => 999.99,
  'ReportModifiedDateRangeFilter FromReportModifiedDate' => 999.99,
  'ReportModifiedDateRangeFilter ToReportModifiedDate' => 999.99,
  'ReportModifiedDateRangeMacro' => 999.99,
  'ReportDetailLevelFilter' => 3.0,
  'ReportPostingStatusFilter' => 3.0,
  'SummarizeRowsBy' => 999.99,
  'IncludeColumn' => 999.99,
  'IncludeAccounts' => 999.99,
  'ReportOpenBalanceAsOf' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'PayrollDetailReportType' => false,
  'DisplayReport' => false,
  'ReportPeriod FromReportDate' => false,
  'ReportPeriod ToReportDate' => false,
  'ReportDateMacro' => false,
  'ReportAccountFilter AccountTypeFilter' => false,
  'ReportAccountFilter ListID' => true,
  'ReportAccountFilter FullName' => true,
  'ReportAccountFilter ListIDWithChildren' => false,
  'ReportAccountFilter FullNameWithChildren' => false,
  'ReportEntityFilter EntityTypeFilter' => false,
  'ReportEntityFilter ListID' => true,
  'ReportEntityFilter FullName' => true,
  'ReportEntityFilter ListIDWithChildren' => false,
  'ReportEntityFilter FullNameWithChildren' => false,
  'ReportItemFilter ItemTypeFilter' => false,
  'ReportItemFilter ListID' => true,
  'ReportItemFilter FullName' => true,
  'ReportItemFilter ListIDWithChildren' => false,
  'ReportItemFilter FullNameWithChildren' => false,
  'ReportClassFilter ListID' => true,
  'ReportClassFilter FullName' => true,
  'ReportClassFilter ListIDWithChildren' => false,
  'ReportClassFilter FullNameWithChildren' => false,
  'ReportModifiedDateRangeFilter FromReportModifiedDate' => false,
  'ReportModifiedDateRangeFilter ToReportModifiedDate' => false,
  'ReportModifiedDateRangeMacro' => false,
  'ReportDetailLevelFilter' => false,
  'ReportPostingStatusFilter' => false,
  'SummarizeRowsBy' => false,
  'IncludeColumn' => true,
  'IncludeAccounts' => false,
  'ReportOpenBalanceAsOf' => false,
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
  'PayrollDetailReportType',
  'DisplayReport',
  'ReportPeriod',
  'ReportPeriod FromReportDate',
  'ReportPeriod ToReportDate',
  'ReportDateMacro',
  'ReportAccountFilter',
  'ReportAccountFilter AccountTypeFilter',
  'ReportAccountFilter ListID',
  'ReportAccountFilter FullName',
  'ReportAccountFilter ListIDWithChildren',
  'ReportAccountFilter FullNameWithChildren',
  'ReportEntityFilter',
  'ReportEntityFilter EntityTypeFilter',
  'ReportEntityFilter ListID',
  'ReportEntityFilter FullName',
  'ReportEntityFilter ListIDWithChildren',
  'ReportEntityFilter FullNameWithChildren',
  'ReportItemFilter',
  'ReportItemFilter ItemTypeFilter',
  'ReportItemFilter ListID',
  'ReportItemFilter FullName',
  'ReportItemFilter ListIDWithChildren',
  'ReportItemFilter FullNameWithChildren',
  'ReportClassFilter',
  'ReportClassFilter ListID',
  'ReportClassFilter FullName',
  'ReportClassFilter ListIDWithChildren',
  'ReportClassFilter FullNameWithChildren',
  'ReportModifiedDateRangeFilter',
  'ReportModifiedDateRangeFilter FromReportModifiedDate',
  'ReportModifiedDateRangeFilter ToReportModifiedDate',
  'ReportModifiedDateRangeMacro',
  'ReportDetailLevelFilter',
  'ReportPostingStatusFilter',
  'SummarizeRowsBy',
  'IncludeColumn',
  'IncludeAccounts',
  'ReportOpenBalanceAsOf'
];
			
		return $paths;
	}
}
