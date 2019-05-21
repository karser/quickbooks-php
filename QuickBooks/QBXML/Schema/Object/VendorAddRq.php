<?php

/**
 * Schema object for: VendorAddRq
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
class QuickBooks_QBXML_Schema_Object_VendorAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'VendorAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Name' => 'STRTYPE',
  'IsActive' => 'BOOLTYPE',
  'ClassRef ListID' => 'IDTYPE',
  'ClassRef FullName' => 'STRTYPE',
  'CompanyName' => 'STRTYPE',
  'Salutation' => 'STRTYPE',
  'FirstName' => 'STRTYPE',
  'MiddleName' => 'STRTYPE',
  'LastName' => 'STRTYPE',
  'Suffix' => 'STRTYPE',
  'JobTitle' => 'STRTYPE',
  'VendorAddress Addr1' => 'STRTYPE',
  'VendorAddress Addr2' => 'STRTYPE',
  'VendorAddress Addr3' => 'STRTYPE',
  'VendorAddress Addr4' => 'STRTYPE',
  'VendorAddress Addr5' => 'STRTYPE',
  'VendorAddress City' => 'STRTYPE',
  'VendorAddress State' => 'STRTYPE',
  'VendorAddress PostalCode' => 'STRTYPE',
  'VendorAddress Country' => 'STRTYPE',
  'VendorAddress Note' => 'STRTYPE',
  'ShipAddress Addr1' => 'STRTYPE',
  'ShipAddress Addr2' => 'STRTYPE',
  'ShipAddress Addr3' => 'STRTYPE',
  'ShipAddress Addr4' => 'STRTYPE',
  'ShipAddress Addr5' => 'STRTYPE',
  'ShipAddress City' => 'STRTYPE',
  'ShipAddress State' => 'STRTYPE',
  'ShipAddress PostalCode' => 'STRTYPE',
  'ShipAddress Country' => 'STRTYPE',
  'ShipAddress Note' => 'STRTYPE',
  'Phone' => 'STRTYPE',
  'Mobile' => 'STRTYPE',
  'Pager' => 'STRTYPE',
  'AltPhone' => 'STRTYPE',
  'Fax' => 'STRTYPE',
  'Email' => 'STRTYPE',
  'Cc' => 'STRTYPE',
  'Contact' => 'STRTYPE',
  'AltContact' => 'STRTYPE',
  'AdditionalContactRef ContactName' => 'STRTYPE',
  'AdditionalContactRef ContactValue' => 'STRTYPE',
  'Contacts Salutation' => 'STRTYPE',
  'Contacts FirstName' => 'STRTYPE',
  'Contacts MiddleName' => 'STRTYPE',
  'Contacts LastName' => 'STRTYPE',
  'Contacts JobTitle' => 'STRTYPE',
  'Contacts AdditionalContactRef ContactName' => 'STRTYPE',
  'Contacts AdditionalContactRef ContactValue' => 'STRTYPE',
  'NameOnCheck' => 'STRTYPE',
  'AccountNumber' => 'STRTYPE',
  'Notes' => 'STRTYPE',
  'AdditionalNotes Note' => 'STRTYPE',
  'VendorTypeRef ListID' => 'IDTYPE',
  'VendorTypeRef FullName' => 'STRTYPE',
  'TermsRef ListID' => 'IDTYPE',
  'TermsRef FullName' => 'STRTYPE',
  'CreditLimit' => 'AMTTYPE',
  'VendorTaxIdent' => 'STRTYPE',
  'IsVendorEligibleFor1099' => 'BOOLTYPE',
  'OpenBalance' => 'AMTTYPE',
  'OpenBalanceDate' => 'DATETYPE',
  'BillingRateRef ListID' => 'IDTYPE',
  'BillingRateRef FullName' => 'STRTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'SalesTaxCodeRef ListID' => 'IDTYPE',
  'SalesTaxCodeRef FullName' => 'STRTYPE',
  'SalesTaxCountry' => 'ENUMTYPE',
  'IsSalesTaxAgency' => 'BOOLTYPE',
  'SalesTaxReturnRef ListID' => 'IDTYPE',
  'SalesTaxReturnRef FullName' => 'STRTYPE',
  'TaxRegistrationNumber' => 'STRTYPE',
  'ReportingPeriod' => 'ENUMTYPE',
  'IsTaxTrackedOnPurchases' => 'BOOLTYPE',
  'TaxOnPurchasesAccountRef ListID' => 'IDTYPE',
  'TaxOnPurchasesAccountRef FullName' => 'STRTYPE',
  'IsTaxTrackedOnSales' => 'BOOLTYPE',
  'TaxOnSalesAccountRef ListID' => 'IDTYPE',
  'TaxOnSalesAccountRef FullName' => 'STRTYPE',
  'IsTaxOnTax' => 'BOOLTYPE',
  'PrefillAccountRef ListID' => 'IDTYPE',
  'PrefillAccountRef FullName' => 'STRTYPE',
  'CurrencyRef ListID' => 'IDTYPE',
  'CurrencyRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Name' => 41,
  'IsActive' => 0,
  'ClassRef ListID' => 0,
  'ClassRef FullName' => 159,
  'CompanyName' => 41,
  'Salutation' => 15,
  'FirstName' => 25,
  'MiddleName' => 5,
  'LastName' => 25,
  'Suffix' => 10,
  'JobTitle' => 41,
  'VendorAddress Addr1' => 41,
  'VendorAddress Addr2' => 41,
  'VendorAddress Addr3' => 41,
  'VendorAddress Addr4' => 41,
  'VendorAddress Addr5' => 41,
  'VendorAddress City' => 31,
  'VendorAddress State' => 21,
  'VendorAddress PostalCode' => 13,
  'VendorAddress Country' => 31,
  'VendorAddress Note' => 41,
  'ShipAddress Addr1' => 41,
  'ShipAddress Addr2' => 41,
  'ShipAddress Addr3' => 41,
  'ShipAddress Addr4' => 41,
  'ShipAddress Addr5' => 41,
  'ShipAddress City' => 31,
  'ShipAddress State' => 21,
  'ShipAddress PostalCode' => 13,
  'ShipAddress Country' => 31,
  'ShipAddress Note' => 41,
  'Phone' => 21,
  'Mobile' => 21,
  'Pager' => 21,
  'AltPhone' => 21,
  'Fax' => 21,
  'Email' => 1023,
  'Cc' => 1023,
  'Contact' => 41,
  'AltContact' => 41,
  'AdditionalContactRef ContactName' => 40,
  'AdditionalContactRef ContactValue' => 255,
  'Contacts Salutation' => 15,
  'Contacts FirstName' => 25,
  'Contacts MiddleName' => 5,
  'Contacts LastName' => 25,
  'Contacts JobTitle' => 41,
  'Contacts AdditionalContactRef ContactName' => 40,
  'Contacts AdditionalContactRef ContactValue' => 255,
  'NameOnCheck' => 41,
  'AccountNumber' => 99,
  'Notes' => 4095,
  'AdditionalNotes Note' => 41,
  'VendorTypeRef ListID' => 0,
  'VendorTypeRef FullName' => 159,
  'TermsRef ListID' => 0,
  'TermsRef FullName' => 159,
  'CreditLimit' => 0,
  'VendorTaxIdent' => 15,
  'IsVendorEligibleFor1099' => 0,
  'OpenBalance' => 0,
  'OpenBalanceDate' => 0,
  'BillingRateRef ListID' => 0,
  'BillingRateRef FullName' => 159,
  'ExternalGUID' => 0,
  'SalesTaxCodeRef ListID' => 0,
  'SalesTaxCodeRef FullName' => 159,
  'SalesTaxCountry' => 0,
  'IsSalesTaxAgency' => 0,
  'SalesTaxReturnRef ListID' => 0,
  'SalesTaxReturnRef FullName' => 159,
  'TaxRegistrationNumber' => 30,
  'ReportingPeriod' => 0,
  'IsTaxTrackedOnPurchases' => 0,
  'TaxOnPurchasesAccountRef ListID' => 0,
  'TaxOnPurchasesAccountRef FullName' => 159,
  'IsTaxTrackedOnSales' => 0,
  'TaxOnSalesAccountRef ListID' => 0,
  'TaxOnSalesAccountRef FullName' => 159,
  'IsTaxOnTax' => 0,
  'PrefillAccountRef ListID' => 0,
  'PrefillAccountRef FullName' => 159,
  'CurrencyRef ListID' => 0,
  'CurrencyRef FullName' => 159,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => true,
  'ClassRef ListID' => true,
  'ClassRef FullName' => true,
  'CompanyName' => true,
  'Salutation' => true,
  'FirstName' => true,
  'MiddleName' => true,
  'LastName' => true,
  'Suffix' => true,
  'JobTitle' => true,
  'VendorAddress Addr1' => true,
  'VendorAddress Addr2' => true,
  'VendorAddress Addr3' => true,
  'VendorAddress Addr4' => true,
  'VendorAddress Addr5' => true,
  'VendorAddress City' => true,
  'VendorAddress State' => true,
  'VendorAddress PostalCode' => true,
  'VendorAddress Country' => true,
  'VendorAddress Note' => true,
  'ShipAddress Addr1' => true,
  'ShipAddress Addr2' => true,
  'ShipAddress Addr3' => true,
  'ShipAddress Addr4' => true,
  'ShipAddress Addr5' => true,
  'ShipAddress City' => true,
  'ShipAddress State' => true,
  'ShipAddress PostalCode' => true,
  'ShipAddress Country' => true,
  'ShipAddress Note' => true,
  'Phone' => true,
  'Mobile' => true,
  'Pager' => true,
  'AltPhone' => true,
  'Fax' => true,
  'Email' => true,
  'Cc' => true,
  'Contact' => true,
  'AltContact' => true,
  'AdditionalContactRef ContactName' => false,
  'AdditionalContactRef ContactValue' => false,
  'Contacts Salutation' => true,
  'Contacts FirstName' => true,
  'Contacts MiddleName' => true,
  'Contacts LastName' => true,
  'Contacts JobTitle' => true,
  'Contacts AdditionalContactRef ContactName' => false,
  'Contacts AdditionalContactRef ContactValue' => false,
  'NameOnCheck' => true,
  'AccountNumber' => true,
  'Notes' => true,
  'AdditionalNotes Note' => true,
  'VendorTypeRef ListID' => true,
  'VendorTypeRef FullName' => true,
  'TermsRef ListID' => true,
  'TermsRef FullName' => true,
  'CreditLimit' => true,
  'VendorTaxIdent' => true,
  'IsVendorEligibleFor1099' => true,
  'OpenBalance' => true,
  'OpenBalanceDate' => true,
  'BillingRateRef ListID' => true,
  'BillingRateRef FullName' => true,
  'ExternalGUID' => true,
  'SalesTaxCodeRef ListID' => true,
  'SalesTaxCodeRef FullName' => true,
  'SalesTaxCountry' => true,
  'IsSalesTaxAgency' => true,
  'SalesTaxReturnRef ListID' => true,
  'SalesTaxReturnRef FullName' => true,
  'TaxRegistrationNumber' => true,
  'ReportingPeriod' => true,
  'IsTaxTrackedOnPurchases' => true,
  'TaxOnPurchasesAccountRef ListID' => true,
  'TaxOnPurchasesAccountRef FullName' => true,
  'IsTaxTrackedOnSales' => true,
  'TaxOnSalesAccountRef ListID' => true,
  'TaxOnSalesAccountRef FullName' => true,
  'IsTaxOnTax' => true,
  'PrefillAccountRef ListID' => true,
  'PrefillAccountRef FullName' => true,
  'CurrencyRef ListID' => true,
  'CurrencyRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Name' => 999.99,
  'IsActive' => 999.99,
  'ClassRef ListID' => 999.99,
  'ClassRef FullName' => 999.99,
  'CompanyName' => 999.99,
  'Salutation' => 999.99,
  'FirstName' => 999.99,
  'MiddleName' => 999.99,
  'LastName' => 999.99,
  'Suffix' => 999.99,
  'JobTitle' => 12.0,
  'VendorAddress Addr1' => 999.99,
  'VendorAddress Addr2' => 999.99,
  'VendorAddress Addr3' => 999.99,
  'VendorAddress Addr4' => 2.0,
  'VendorAddress Addr5' => 6.0,
  'VendorAddress City' => 999.99,
  'VendorAddress State' => 999.99,
  'VendorAddress PostalCode' => 999.99,
  'VendorAddress Country' => 999.99,
  'VendorAddress Note' => 6.0,
  'ShipAddress Addr1' => 999.99,
  'ShipAddress Addr2' => 999.99,
  'ShipAddress Addr3' => 999.99,
  'ShipAddress Addr4' => 2.0,
  'ShipAddress Addr5' => 6.0,
  'ShipAddress City' => 999.99,
  'ShipAddress State' => 999.99,
  'ShipAddress PostalCode' => 999.99,
  'ShipAddress Country' => 999.99,
  'ShipAddress Note' => 6.0,
  'Phone' => 999.99,
  'Mobile' => 999.99,
  'Pager' => 999.99,
  'AltPhone' => 999.99,
  'Fax' => 999.99,
  'Email' => 999.99,
  'Cc' => 12.0,
  'Contact' => 999.99,
  'AltContact' => 999.99,
  'AdditionalContactRef ContactName' => 999.99,
  'AdditionalContactRef ContactValue' => 999.99,
  'Contacts Salutation' => 999.99,
  'Contacts FirstName' => 999.99,
  'Contacts MiddleName' => 999.99,
  'Contacts LastName' => 999.99,
  'Contacts JobTitle' => 12.0,
  'Contacts AdditionalContactRef ContactName' => 999.99,
  'Contacts AdditionalContactRef ContactValue' => 999.99,
  'NameOnCheck' => 999.99,
  'AccountNumber' => 999.99,
  'Notes' => 3.0,
  'AdditionalNotes Note' => 6.0,
  'VendorTypeRef ListID' => 999.99,
  'VendorTypeRef FullName' => 999.99,
  'TermsRef ListID' => 999.99,
  'TermsRef FullName' => 999.99,
  'CreditLimit' => 999.99,
  'VendorTaxIdent' => 999.99,
  'IsVendorEligibleFor1099' => 999.99,
  'OpenBalance' => 999.99,
  'OpenBalanceDate' => 999.99,
  'BillingRateRef ListID' => 999.99,
  'BillingRateRef FullName' => 999.99,
  'ExternalGUID' => 8.0,
  'SalesTaxCodeRef ListID' => 999.99,
  'SalesTaxCodeRef FullName' => 999.99,
  'SalesTaxCountry' => 8.0,
  'IsSalesTaxAgency' => 8.0,
  'SalesTaxReturnRef ListID' => 999.99,
  'SalesTaxReturnRef FullName' => 999.99,
  'TaxRegistrationNumber' => 8.0,
  'ReportingPeriod' => 8.0,
  'IsTaxTrackedOnPurchases' => 8.0,
  'TaxOnPurchasesAccountRef ListID' => 999.99,
  'TaxOnPurchasesAccountRef FullName' => 999.99,
  'IsTaxTrackedOnSales' => 8.0,
  'TaxOnSalesAccountRef ListID' => 999.99,
  'TaxOnSalesAccountRef FullName' => 999.99,
  'IsTaxOnTax' => 8.0,
  'PrefillAccountRef ListID' => 999.99,
  'PrefillAccountRef FullName' => 999.99,
  'CurrencyRef ListID' => 999.99,
  'CurrencyRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Name' => false,
  'IsActive' => false,
  'ClassRef ListID' => false,
  'ClassRef FullName' => false,
  'CompanyName' => false,
  'Salutation' => false,
  'FirstName' => false,
  'MiddleName' => false,
  'LastName' => false,
  'Suffix' => false,
  'JobTitle' => false,
  'VendorAddress Addr1' => false,
  'VendorAddress Addr2' => false,
  'VendorAddress Addr3' => false,
  'VendorAddress Addr4' => false,
  'VendorAddress Addr5' => false,
  'VendorAddress City' => false,
  'VendorAddress State' => false,
  'VendorAddress PostalCode' => false,
  'VendorAddress Country' => false,
  'VendorAddress Note' => false,
  'ShipAddress Addr1' => false,
  'ShipAddress Addr2' => false,
  'ShipAddress Addr3' => false,
  'ShipAddress Addr4' => false,
  'ShipAddress Addr5' => false,
  'ShipAddress City' => false,
  'ShipAddress State' => false,
  'ShipAddress PostalCode' => false,
  'ShipAddress Country' => false,
  'ShipAddress Note' => false,
  'Phone' => false,
  'Mobile' => false,
  'Pager' => false,
  'AltPhone' => false,
  'Fax' => false,
  'Email' => false,
  'Cc' => false,
  'Contact' => false,
  'AltContact' => false,
  'AdditionalContactRef ContactName' => false,
  'AdditionalContactRef ContactValue' => false,
  'Contacts Salutation' => false,
  'Contacts FirstName' => false,
  'Contacts MiddleName' => false,
  'Contacts LastName' => false,
  'Contacts JobTitle' => false,
  'Contacts AdditionalContactRef ContactName' => false,
  'Contacts AdditionalContactRef ContactValue' => false,
  'NameOnCheck' => false,
  'AccountNumber' => false,
  'Notes' => false,
  'AdditionalNotes Note' => false,
  'VendorTypeRef ListID' => false,
  'VendorTypeRef FullName' => false,
  'TermsRef ListID' => false,
  'TermsRef FullName' => false,
  'CreditLimit' => false,
  'VendorTaxIdent' => false,
  'IsVendorEligibleFor1099' => false,
  'OpenBalance' => false,
  'OpenBalanceDate' => false,
  'BillingRateRef ListID' => false,
  'BillingRateRef FullName' => false,
  'ExternalGUID' => false,
  'SalesTaxCodeRef ListID' => false,
  'SalesTaxCodeRef FullName' => false,
  'SalesTaxCountry' => false,
  'IsSalesTaxAgency' => false,
  'SalesTaxReturnRef ListID' => false,
  'SalesTaxReturnRef FullName' => false,
  'TaxRegistrationNumber' => false,
  'ReportingPeriod' => false,
  'IsTaxTrackedOnPurchases' => false,
  'TaxOnPurchasesAccountRef ListID' => false,
  'TaxOnPurchasesAccountRef FullName' => false,
  'IsTaxTrackedOnSales' => false,
  'TaxOnSalesAccountRef ListID' => false,
  'TaxOnSalesAccountRef FullName' => false,
  'IsTaxOnTax' => false,
  'PrefillAccountRef ListID' => false,
  'PrefillAccountRef FullName' => false,
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
  'Name',
  'IsActive',
  'ClassRef',
  'ClassRef ListID',
  'ClassRef FullName',
  'CompanyName',
  'Salutation',
  'FirstName',
  'MiddleName',
  'LastName',
  'Suffix',
  'JobTitle',
  'VendorAddress',
  'VendorAddress Addr1',
  'VendorAddress Addr2',
  'VendorAddress Addr3',
  'VendorAddress Addr4',
  'VendorAddress Addr5',
  'VendorAddress City',
  'VendorAddress State',
  'VendorAddress PostalCode',
  'VendorAddress Country',
  'VendorAddress Note',
  'ShipAddress',
  'ShipAddress Addr1',
  'ShipAddress Addr2',
  'ShipAddress Addr3',
  'ShipAddress Addr4',
  'ShipAddress Addr5',
  'ShipAddress City',
  'ShipAddress State',
  'ShipAddress PostalCode',
  'ShipAddress Country',
  'ShipAddress Note',
  'Phone',
  'Mobile',
  'Pager',
  'AltPhone',
  'Fax',
  'Email',
  'Cc',
  'Contact',
  'AltContact',
  'AdditionalContactRef',
  'AdditionalContactRef ContactName',
  'AdditionalContactRef ContactValue',
  'Contacts',
  'Contacts Salutation',
  'Contacts FirstName',
  'Contacts MiddleName',
  'Contacts LastName',
  'Contacts JobTitle',
  'Contacts AdditionalContactRef ContactName',
  'Contacts AdditionalContactRef ContactValue',
  'NameOnCheck',
  'AccountNumber',
  'Notes',
  'AdditionalNotes',
  'AdditionalNotes Note',
  'VendorTypeRef',
  'VendorTypeRef ListID',
  'VendorTypeRef FullName',
  'TermsRef',
  'TermsRef ListID',
  'TermsRef FullName',
  'CreditLimit',
  'VendorTaxIdent',
  'IsVendorEligibleFor1099',
  'OpenBalance',
  'OpenBalanceDate',
  'BillingRateRef',
  'BillingRateRef ListID',
  'BillingRateRef FullName',
  'ExternalGUID',
  'SalesTaxCodeRef',
  'SalesTaxCodeRef ListID',
  'SalesTaxCodeRef FullName',
  'SalesTaxCountry',
  'IsSalesTaxAgency',
  'SalesTaxReturnRef',
  'SalesTaxReturnRef ListID',
  'SalesTaxReturnRef FullName',
  'TaxRegistrationNumber',
  'ReportingPeriod',
  'IsTaxTrackedOnPurchases',
  'TaxOnPurchasesAccountRef',
  'TaxOnPurchasesAccountRef ListID',
  'TaxOnPurchasesAccountRef FullName',
  'IsTaxTrackedOnSales',
  'TaxOnSalesAccountRef',
  'TaxOnSalesAccountRef ListID',
  'TaxOnSalesAccountRef FullName',
  'IsTaxOnTax',
  'PrefillAccountRef',
  'PrefillAccountRef ListID',
  'PrefillAccountRef FullName',
  'CurrencyRef',
  'CurrencyRef ListID',
  'CurrencyRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
