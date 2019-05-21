<?php

/**
 * Schema object for: BudgetSummaryReportQueryRq
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
class QuickBooks_QBXML_Schema_Object_BudgetSummaryReportQueryRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'BudgetSummaryReportType' => 'ENUMTYPE',
  'DisplayReport' => 'BOOLTYPE',
  'FiscalYear' => 'INTTYPE',
  'BudgetCriterion' => 'ENUMTYPE',
  'ReportPeriod FromReportDate' => 'DATETYPE',
  'ReportPeriod ToReportDate' => 'DATETYPE',
  'ReportDateMacro' => 'ENUMTYPE',
  'ReportClassFilter ListID' => 'IDTYPE',
  'ReportClassFilter FullName' => 'STRTYPE',
  'ReportClassFilter ListIDWithChildren' => 'IDTYPE',
  'ReportClassFilter FullNameWithChildren' => 'STRTYPE',
  'SummarizeBudgetColumnsBy' => 'ENUMTYPE',
  'SummarizeBudgetRowsBy' => 'ENUMTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'BudgetSummaryReportType' => 0,
  'DisplayReport' => 0,
  'FiscalYear' => 0,
  'BudgetCriterion' => 0,
  'ReportPeriod FromReportDate' => 0,
  'ReportPeriod ToReportDate' => 0,
  'ReportDateMacro' => 0,
  'ReportClassFilter ListID' => 0,
  'ReportClassFilter FullName' => 0,
  'ReportClassFilter ListIDWithChildren' => 0,
  'ReportClassFilter FullNameWithChildren' => 0,
  'SummarizeBudgetColumnsBy' => 0,
  'SummarizeBudgetRowsBy' => 0,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'BudgetSummaryReportType' => false,
  'DisplayReport' => true,
  'FiscalYear' => false,
  'BudgetCriterion' => true,
  'ReportPeriod FromReportDate' => true,
  'ReportPeriod ToReportDate' => true,
  'ReportDateMacro' => false,
  'ReportClassFilter ListID' => false,
  'ReportClassFilter FullName' => false,
  'ReportClassFilter ListIDWithChildren' => false,
  'ReportClassFilter FullNameWithChildren' => false,
  'SummarizeBudgetColumnsBy' => true,
  'SummarizeBudgetRowsBy' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'BudgetSummaryReportType' => 999.99,
  'DisplayReport' => 999.99,
  'FiscalYear' => 999.99,
  'BudgetCriterion' => 999.99,
  'ReportPeriod FromReportDate' => 999.99,
  'ReportPeriod ToReportDate' => 999.99,
  'ReportDateMacro' => 999.99,
  'ReportClassFilter ListID' => 999.99,
  'ReportClassFilter FullName' => 999.99,
  'ReportClassFilter ListIDWithChildren' => 999.99,
  'ReportClassFilter FullNameWithChildren' => 999.99,
  'SummarizeBudgetColumnsBy' => 999.99,
  'SummarizeBudgetRowsBy' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'BudgetSummaryReportType' => false,
  'DisplayReport' => false,
  'FiscalYear' => false,
  'BudgetCriterion' => false,
  'ReportPeriod FromReportDate' => false,
  'ReportPeriod ToReportDate' => false,
  'ReportDateMacro' => false,
  'ReportClassFilter ListID' => true,
  'ReportClassFilter FullName' => true,
  'ReportClassFilter ListIDWithChildren' => false,
  'ReportClassFilter FullNameWithChildren' => false,
  'SummarizeBudgetColumnsBy' => false,
  'SummarizeBudgetRowsBy' => false,
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
  'BudgetSummaryReportType',
  'DisplayReport',
  'FiscalYear',
  'BudgetCriterion',
  'ReportPeriod',
  'ReportPeriod FromReportDate',
  'ReportPeriod ToReportDate',
  'ReportDateMacro',
  'ReportClassFilter',
  'ReportClassFilter ListID',
  'ReportClassFilter FullName',
  'ReportClassFilter ListIDWithChildren',
  'ReportClassFilter FullNameWithChildren',
  'SummarizeBudgetColumnsBy',
  'SummarizeBudgetRowsBy'
];
			
		return $paths;
	}
}
