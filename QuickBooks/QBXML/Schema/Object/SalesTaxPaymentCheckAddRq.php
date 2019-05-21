<?php

/**
 * Schema object for: SalesTaxPaymentCheckAddRq
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
class QuickBooks_QBXML_Schema_Object_SalesTaxPaymentCheckAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID' => 'IDTYPE',
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd TxnDate' => 'DATETYPE',
  'SalesTaxPaymentCheckAdd BankAccountRef ListID' => 'IDTYPE',
  'SalesTaxPaymentCheckAdd BankAccountRef FullName' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd IsToBePrinted' => 'BOOLTYPE',
  'SalesTaxPaymentCheckAdd RefNumber' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Memo' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Addr1' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Addr2' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Addr3' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Addr4' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Addr5' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address City' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address State' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address PostalCode' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Country' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd Address Note' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd ExternalGUID' => 'GUIDTYPE',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID' => 'IDTYPE',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName' => 'STRTYPE',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount' => 'AMTTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID' => 0,
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName' => 209,
  'SalesTaxPaymentCheckAdd TxnDate' => 0,
  'SalesTaxPaymentCheckAdd BankAccountRef ListID' => 0,
  'SalesTaxPaymentCheckAdd BankAccountRef FullName' => 209,
  'SalesTaxPaymentCheckAdd IsToBePrinted' => 0,
  'SalesTaxPaymentCheckAdd RefNumber' => 0,
  'SalesTaxPaymentCheckAdd Memo' => 4095,
  'SalesTaxPaymentCheckAdd Address Addr1' => 41,
  'SalesTaxPaymentCheckAdd Address Addr2' => 41,
  'SalesTaxPaymentCheckAdd Address Addr3' => 41,
  'SalesTaxPaymentCheckAdd Address Addr4' => 41,
  'SalesTaxPaymentCheckAdd Address Addr5' => 41,
  'SalesTaxPaymentCheckAdd Address City' => 31,
  'SalesTaxPaymentCheckAdd Address State' => 21,
  'SalesTaxPaymentCheckAdd Address PostalCode' => 13,
  'SalesTaxPaymentCheckAdd Address Country' => 31,
  'SalesTaxPaymentCheckAdd Address Note' => 41,
  'SalesTaxPaymentCheckAdd ExternalGUID' => 0,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID' => 0,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName' => 209,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID' => true,
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName' => true,
  'SalesTaxPaymentCheckAdd TxnDate' => false,
  'SalesTaxPaymentCheckAdd BankAccountRef ListID' => true,
  'SalesTaxPaymentCheckAdd BankAccountRef FullName' => true,
  'SalesTaxPaymentCheckAdd IsToBePrinted' => false,
  'SalesTaxPaymentCheckAdd RefNumber' => false,
  'SalesTaxPaymentCheckAdd Memo' => true,
  'SalesTaxPaymentCheckAdd Address Addr1' => true,
  'SalesTaxPaymentCheckAdd Address Addr2' => true,
  'SalesTaxPaymentCheckAdd Address Addr3' => true,
  'SalesTaxPaymentCheckAdd Address Addr4' => true,
  'SalesTaxPaymentCheckAdd Address Addr5' => true,
  'SalesTaxPaymentCheckAdd Address City' => true,
  'SalesTaxPaymentCheckAdd Address State' => true,
  'SalesTaxPaymentCheckAdd Address PostalCode' => true,
  'SalesTaxPaymentCheckAdd Address Country' => true,
  'SalesTaxPaymentCheckAdd Address Note' => true,
  'SalesTaxPaymentCheckAdd ExternalGUID' => true,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID' => true,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName' => true,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID' => 999.99,
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName' => 999.99,
  'SalesTaxPaymentCheckAdd TxnDate' => 999.99,
  'SalesTaxPaymentCheckAdd BankAccountRef ListID' => 999.99,
  'SalesTaxPaymentCheckAdd BankAccountRef FullName' => 999.99,
  'SalesTaxPaymentCheckAdd IsToBePrinted' => 999.99,
  'SalesTaxPaymentCheckAdd RefNumber' => 999.99,
  'SalesTaxPaymentCheckAdd Memo' => 12.0,
  'SalesTaxPaymentCheckAdd Address Addr1' => 999.99,
  'SalesTaxPaymentCheckAdd Address Addr2' => 999.99,
  'SalesTaxPaymentCheckAdd Address Addr3' => 999.99,
  'SalesTaxPaymentCheckAdd Address Addr4' => 2.0,
  'SalesTaxPaymentCheckAdd Address Addr5' => 6.0,
  'SalesTaxPaymentCheckAdd Address City' => 999.99,
  'SalesTaxPaymentCheckAdd Address State' => 999.99,
  'SalesTaxPaymentCheckAdd Address PostalCode' => 999.99,
  'SalesTaxPaymentCheckAdd Address Country' => 999.99,
  'SalesTaxPaymentCheckAdd Address Note' => 6.0,
  'SalesTaxPaymentCheckAdd ExternalGUID' => 9.0,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID' => 999.99,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName' => 999.99,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID' => false,
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName' => false,
  'SalesTaxPaymentCheckAdd TxnDate' => false,
  'SalesTaxPaymentCheckAdd BankAccountRef ListID' => false,
  'SalesTaxPaymentCheckAdd BankAccountRef FullName' => false,
  'SalesTaxPaymentCheckAdd IsToBePrinted' => false,
  'SalesTaxPaymentCheckAdd RefNumber' => false,
  'SalesTaxPaymentCheckAdd Memo' => false,
  'SalesTaxPaymentCheckAdd Address Addr1' => false,
  'SalesTaxPaymentCheckAdd Address Addr2' => false,
  'SalesTaxPaymentCheckAdd Address Addr3' => false,
  'SalesTaxPaymentCheckAdd Address Addr4' => false,
  'SalesTaxPaymentCheckAdd Address Addr5' => false,
  'SalesTaxPaymentCheckAdd Address City' => false,
  'SalesTaxPaymentCheckAdd Address State' => false,
  'SalesTaxPaymentCheckAdd Address PostalCode' => false,
  'SalesTaxPaymentCheckAdd Address Country' => false,
  'SalesTaxPaymentCheckAdd Address Note' => false,
  'SalesTaxPaymentCheckAdd ExternalGUID' => false,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID' => false,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName' => false,
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount' => false,
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
  'SalesTaxPaymentCheckAdd',
  'SalesTaxPaymentCheckAdd PayeeEntityRef',
  'SalesTaxPaymentCheckAdd PayeeEntityRef ListID',
  'SalesTaxPaymentCheckAdd PayeeEntityRef FullName',
  'SalesTaxPaymentCheckAdd TxnDate',
  'SalesTaxPaymentCheckAdd BankAccountRef ListID',
  'SalesTaxPaymentCheckAdd BankAccountRef FullName',
  'SalesTaxPaymentCheckAdd IsToBePrinted',
  'SalesTaxPaymentCheckAdd RefNumber',
  'SalesTaxPaymentCheckAdd Memo',
  'SalesTaxPaymentCheckAdd Address Addr1',
  'SalesTaxPaymentCheckAdd Address Addr2',
  'SalesTaxPaymentCheckAdd Address Addr3',
  'SalesTaxPaymentCheckAdd Address Addr4',
  'SalesTaxPaymentCheckAdd Address Addr5',
  'SalesTaxPaymentCheckAdd Address City',
  'SalesTaxPaymentCheckAdd Address State',
  'SalesTaxPaymentCheckAdd Address PostalCode',
  'SalesTaxPaymentCheckAdd Address Country',
  'SalesTaxPaymentCheckAdd Address Note',
  'SalesTaxPaymentCheckAdd ExternalGUID',
  'SalesTaxPaymentCheckAdd',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef ListID',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd ItemSalesTaxRef FullName',
  'SalesTaxPaymentCheckAdd SalesTaxPaymentCheckLineAdd Amount',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
