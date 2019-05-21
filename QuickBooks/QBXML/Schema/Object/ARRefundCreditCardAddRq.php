<?php

/**
 * Schema object for: ARRefundCreditCardAddRq
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
class QuickBooks_QBXML_Schema_Object_ARRefundCreditCardAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ARRefundCreditCardAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 'IDTYPE',
  'CustomerRef FullName' => 'STRTYPE',
  'RefundFromAccountRef ListID' => 'IDTYPE',
  'RefundFromAccountRef FullName' => 'STRTYPE',
  'ARAccountRef ListID' => 'IDTYPE',
  'ARAccountRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'Address Addr1' => 'STRTYPE',
  'Address Addr2' => 'STRTYPE',
  'Address Addr3' => 'STRTYPE',
  'Address Addr4' => 'STRTYPE',
  'Address Addr5' => 'STRTYPE',
  'Address City' => 'STRTYPE',
  'Address State' => 'STRTYPE',
  'Address PostalCode' => 'STRTYPE',
  'Address Country' => 'STRTYPE',
  'Address Note' => 'STRTYPE',
  'PaymentMethodRef ListID' => 'IDTYPE',
  'PaymentMethodRef FullName' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth' => 'INTTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear' => 'INTTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode' => 'INTTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID' => 'STRTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode' => 'INTTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus' => 'ENUMTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime' => 'DATETIMETYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp' => 'INTTYPE',
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID' => 'STRTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'ExternalGUID' => 'GUIDTYPE',
  'RefundAppliedToTxnAdd TxnID' => 'IDTYPE',
  'RefundAppliedToTxnAdd RefundAmount' => 'AMTTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 0,
  'CustomerRef FullName' => 209,
  'RefundFromAccountRef ListID' => 0,
  'RefundFromAccountRef FullName' => 209,
  'ARAccountRef ListID' => 0,
  'ARAccountRef FullName' => 209,
  'TxnDate' => 0,
  'RefNumber' => 11,
  'Address Addr1' => 41,
  'Address Addr2' => 41,
  'Address Addr3' => 41,
  'Address Addr4' => 41,
  'Address Addr5' => 41,
  'Address City' => 31,
  'Address State' => 21,
  'Address PostalCode' => 13,
  'Address Country' => 31,
  'Address Note' => 41,
  'PaymentMethodRef ListID' => 0,
  'PaymentMethodRef FullName' => 209,
  'Memo' => 4095,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber' => 25,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth' => 0,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear' => 0,
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard' => 41,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress' => 41,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode' => 18,
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode' => 24,
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode' => 0,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage' => 60,
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID' => 24,
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber' => 32,
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode' => 12,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID' => 84,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp' => 0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID' => 16,
  'ExchangeRate' => 0,
  'ExternalGUID' => 0,
  'RefundAppliedToTxnAdd TxnID' => 0,
  'RefundAppliedToTxnAdd RefundAmount' => 0,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => true,
  'CustomerRef FullName' => true,
  'RefundFromAccountRef ListID' => true,
  'RefundFromAccountRef FullName' => true,
  'ARAccountRef ListID' => true,
  'ARAccountRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'Address Addr1' => true,
  'Address Addr2' => true,
  'Address Addr3' => true,
  'Address Addr4' => true,
  'Address Addr5' => true,
  'Address City' => true,
  'Address State' => true,
  'Address PostalCode' => true,
  'Address Country' => true,
  'Address Note' => true,
  'PaymentMethodRef ListID' => true,
  'PaymentMethodRef FullName' => true,
  'Memo' => true,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress' => true,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode' => true,
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode' => true,
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode' => true,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp' => true,
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID' => true,
  'ExchangeRate' => true,
  'ExternalGUID' => true,
  'RefundAppliedToTxnAdd TxnID' => false,
  'RefundAppliedToTxnAdd RefundAmount' => false,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'CustomerRef ListID' => 999.99,
  'CustomerRef FullName' => 999.99,
  'RefundFromAccountRef ListID' => 999.99,
  'RefundFromAccountRef FullName' => 999.99,
  'ARAccountRef ListID' => 999.99,
  'ARAccountRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'Address Addr1' => 999.99,
  'Address Addr2' => 999.99,
  'Address Addr3' => 999.99,
  'Address Addr4' => 2.0,
  'Address Addr5' => 6.0,
  'Address City' => 999.99,
  'Address State' => 999.99,
  'Address PostalCode' => 999.99,
  'Address Country' => 999.99,
  'Address Note' => 6.0,
  'PaymentMethodRef ListID' => 999.99,
  'PaymentMethodRef FullName' => 999.99,
  'Memo' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth' => 0.0,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode' => 999.99,
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode' => 6.0,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType' => 7.0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch' => 6.0,
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp' => 999.99,
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID' => 6.0,
  'ExchangeRate' => 9.0,
  'ExternalGUID' => 9.0,
  'RefundAppliedToTxnAdd TxnID' => 0.0,
  'RefundAppliedToTxnAdd RefundAmount' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'CustomerRef ListID' => false,
  'CustomerRef FullName' => false,
  'RefundFromAccountRef ListID' => false,
  'RefundFromAccountRef FullName' => false,
  'ARAccountRef ListID' => false,
  'ARAccountRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'Address Addr1' => false,
  'Address Addr2' => false,
  'Address Addr3' => false,
  'Address Addr4' => false,
  'Address Addr5' => false,
  'Address City' => false,
  'Address State' => false,
  'Address PostalCode' => false,
  'Address Country' => false,
  'Address Note' => false,
  'PaymentMethodRef ListID' => false,
  'PaymentMethodRef FullName' => false,
  'Memo' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode' => false,
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp' => false,
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID' => false,
  'ExchangeRate' => false,
  'ExternalGUID' => false,
  'RefundAppliedToTxnAdd TxnID' => false,
  'RefundAppliedToTxnAdd RefundAmount' => false,
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
  'CustomerRef',
  'CustomerRef ListID',
  'CustomerRef FullName',
  'RefundFromAccountRef',
  'RefundFromAccountRef ListID',
  'RefundFromAccountRef FullName',
  'ARAccountRef',
  'ARAccountRef ListID',
  'ARAccountRef FullName',
  'TxnDate',
  'RefNumber',
  'Address',
  'Address Addr1',
  'Address Addr2',
  'Address Addr3',
  'Address Addr4',
  'Address Addr5',
  'Address City',
  'Address State',
  'Address PostalCode',
  'Address Country',
  'Address Note',
  'PaymentMethodRef',
  'PaymentMethodRef ListID',
  'PaymentMethodRef FullName',
  'Memo',
  'CreditCardTxnInfo',
  'CreditCardTxnInfo CreditCardTxnInputInfo',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardNumber',
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationMonth',
  'CreditCardTxnInfo CreditCardTxnInputInfo ExpirationYear',
  'CreditCardTxnInfo CreditCardTxnInputInfo NameOnCard',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardAddress',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardPostalCode',
  'CreditCardTxnInfo CreditCardTxnInputInfo CommercialCardCode',
  'CreditCardTxnInfo CreditCardTxnInputInfo TransactionMode',
  'CreditCardTxnInfo CreditCardTxnInputInfo CreditCardTxnType',
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultCode',
  'CreditCardTxnInfo CreditCardTxnResultInfo ResultMessage',
  'CreditCardTxnInfo CreditCardTxnResultInfo CreditCardTransID',
  'CreditCardTxnInfo CreditCardTxnResultInfo MerchantAccountNumber',
  'CreditCardTxnInfo CreditCardTxnResultInfo AuthorizationCode',
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSStreet',
  'CreditCardTxnInfo CreditCardTxnResultInfo AVSZip',
  'CreditCardTxnInfo CreditCardTxnResultInfo CardSecurityCodeMatch',
  'CreditCardTxnInfo CreditCardTxnResultInfo ReconBatchID',
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentGroupingCode',
  'CreditCardTxnInfo CreditCardTxnResultInfo PaymentStatus',
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationTime',
  'CreditCardTxnInfo CreditCardTxnResultInfo TxnAuthorizationStamp',
  'CreditCardTxnInfo CreditCardTxnResultInfo ClientTransID',
  'ExchangeRate',
  'ExternalGUID',
  'RefundAppliedToTxnAdd',
  'RefundAppliedToTxnAdd TxnID',
  'RefundAppliedToTxnAdd RefundAmount',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
