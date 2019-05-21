<?php

/**
 * Schema object for: ReceivePaymentModRq
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
class QuickBooks_QBXML_Schema_Object_ReceivePaymentModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ReceivePaymentMod';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TxnID' => 'IDTYPE',
  'EditSequence' => 'STRTYPE',
  'CustomerRef ListID' => 'IDTYPE',
  'CustomerRef FullName' => 'STRTYPE',
  'ARAccountRef ListID' => 'IDTYPE',
  'ARAccountRef FullName' => 'STRTYPE',
  'TxnDate' => 'DATETYPE',
  'RefNumber' => 'STRTYPE',
  'TotalAmount' => 'AMTTYPE',
  'ExchangeRate' => 'FLOATTYPE',
  'PaymentMethodRef ListID' => 'IDTYPE',
  'PaymentMethodRef FullName' => 'STRTYPE',
  'Memo' => 'STRTYPE',
  'DepositToAccountRef ListID' => 'IDTYPE',
  'DepositToAccountRef FullName' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth' => 'INTTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear' => 'INTTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode' => 'INTTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID' => 'STRTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode' => 'INTTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus' => 'ENUMTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime' => 'DATETIMETYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp' => 'INTTYPE',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID' => 'STRTYPE',
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
  'CustomerRef ListID' => 0,
  'CustomerRef FullName' => 209,
  'ARAccountRef ListID' => 0,
  'ARAccountRef FullName' => 209,
  'TxnDate' => 0,
  'RefNumber' => 20,
  'TotalAmount' => 0,
  'ExchangeRate' => 0,
  'PaymentMethodRef ListID' => 0,
  'PaymentMethodRef FullName' => 209,
  'Memo' => 4095,
  'DepositToAccountRef ListID' => 0,
  'DepositToAccountRef FullName' => 209,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber' => 25,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth' => 0,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear' => 0,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard' => 41,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress' => 41,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode' => 18,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode' => 24,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode' => 0,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage' => 60,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID' => 24,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber' => 32,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode' => 12,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID' => 84,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp' => 0,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID' => 16,
  'AppliedToTxnMod TxnID' => 0,
  'AppliedToTxnMod PaymentAmount' => 0,
  'AppliedToTxnMod SetCredit CreditTxnID' => 0,
  'AppliedToTxnMod SetCredit TxnLineID' => 0,
  'AppliedToTxnMod SetCredit AppliedAmount' => 0,
  'AppliedToTxnMod SetCredit Override' => 0,
  'AppliedToTxnMod DiscountAmount' => 0,
  'AppliedToTxnMod DiscountAccountRef ListID' => 0,
  'AppliedToTxnMod DiscountAccountRef FullName' => 209,
  'AppliedToTxnMod DiscountClassRef ListID' => 0,
  'AppliedToTxnMod DiscountClassRef FullName' => 209,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TxnID' => false,
  'EditSequence' => false,
  'CustomerRef ListID' => true,
  'CustomerRef FullName' => true,
  'ARAccountRef ListID' => true,
  'ARAccountRef FullName' => true,
  'TxnDate' => true,
  'RefNumber' => true,
  'TotalAmount' => true,
  'ExchangeRate' => true,
  'PaymentMethodRef ListID' => true,
  'PaymentMethodRef FullName' => true,
  'Memo' => true,
  'DepositToAccountRef ListID' => true,
  'DepositToAccountRef FullName' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode' => true,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp' => true,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID' => true,
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
  'CustomerRef ListID' => 999.99,
  'CustomerRef FullName' => 999.99,
  'ARAccountRef ListID' => 999.99,
  'ARAccountRef FullName' => 999.99,
  'TxnDate' => 999.99,
  'RefNumber' => 999.99,
  'TotalAmount' => 999.99,
  'ExchangeRate' => 8.0,
  'PaymentMethodRef ListID' => 999.99,
  'PaymentMethodRef FullName' => 999.99,
  'Memo' => 999.99,
  'DepositToAccountRef ListID' => 999.99,
  'DepositToAccountRef FullName' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth' => 0.0,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp' => 999.99,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID' => 999.99,
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
  'CustomerRef ListID' => false,
  'CustomerRef FullName' => false,
  'ARAccountRef ListID' => false,
  'ARAccountRef FullName' => false,
  'TxnDate' => false,
  'RefNumber' => false,
  'TotalAmount' => false,
  'ExchangeRate' => false,
  'PaymentMethodRef ListID' => false,
  'PaymentMethodRef FullName' => false,
  'Memo' => false,
  'DepositToAccountRef ListID' => false,
  'DepositToAccountRef FullName' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode' => false,
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp' => false,
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID' => false,
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
  'CustomerRef',
  'CustomerRef ListID',
  'CustomerRef FullName',
  'ARAccountRef',
  'ARAccountRef ListID',
  'ARAccountRef FullName',
  'TxnDate',
  'RefNumber',
  'TotalAmount',
  'ExchangeRate',
  'PaymentMethodRef',
  'PaymentMethodRef ListID',
  'PaymentMethodRef FullName',
  'Memo',
  'DepositToAccountRef',
  'DepositToAccountRef ListID',
  'DepositToAccountRef FullName',
  'CreditCardTxnInfoMod',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardNumber',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationMonth',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod ExpirationYear',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod NameOnCard',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardAddress',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardPostalCode',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CommercialCardCode',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod TransactionMode',
  'CreditCardTxnInfoMod CreditCardTxnInputInfoMod CreditCardTxnType',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultCode',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ResultMessage',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CreditCardTransID',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod MerchantAccountNumber',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AuthorizationCode',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSStreet',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod AVSZip',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod CardSecurityCodeMatch',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ReconBatchID',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentGroupingCode',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod PaymentStatus',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationTime',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod TxnAuthorizationStamp',
  'CreditCardTxnInfoMod CreditCardTxnResultInfoMod ClientTransID',
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
