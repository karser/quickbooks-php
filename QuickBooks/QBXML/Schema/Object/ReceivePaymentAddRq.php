<?php

/**
 * Schema object for: ReceivePaymentAddRq
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
class QuickBooks_QBXML_Schema_Object_ReceivePaymentAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = 'ReceivePaymentAdd';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
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
  'ExternalGUID' => 'GUIDTYPE',
  'IsAutoApply' => 'BOOLTYPE',
  'AppliedToTxnAdd TxnID' => 'IDTYPE',
  'AppliedToTxnAdd PaymentAmount' => 'AMTTYPE',
  'AppliedToTxnAdd TxnLineDetail TxnLineID' => 'IDTYPE',
  'AppliedToTxnAdd TxnLineDetail Amount' => 'AMTTYPE',
  'AppliedToTxnAdd SetCredit CreditTxnID' => 'IDTYPE',
  'AppliedToTxnAdd SetCredit TxnLineID' => 'IDTYPE',
  'AppliedToTxnAdd SetCredit AppliedAmount' => 'AMTTYPE',
  'AppliedToTxnAdd SetCredit Override' => 'BOOLTYPE',
  'AppliedToTxnAdd DiscountAmount' => 'AMTTYPE',
  'AppliedToTxnAdd DiscountAccountRef ListID' => 'IDTYPE',
  'AppliedToTxnAdd DiscountAccountRef FullName' => 'STRTYPE',
  'AppliedToTxnAdd DiscountClassRef ListID' => 'IDTYPE',
  'AppliedToTxnAdd DiscountClassRef FullName' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
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
  'ExternalGUID' => 0,
  'IsAutoApply' => 0,
  'AppliedToTxnAdd TxnID' => 0,
  'AppliedToTxnAdd PaymentAmount' => 0,
  'AppliedToTxnAdd TxnLineDetail TxnLineID' => 0,
  'AppliedToTxnAdd TxnLineDetail Amount' => 0,
  'AppliedToTxnAdd SetCredit CreditTxnID' => 0,
  'AppliedToTxnAdd SetCredit TxnLineID' => 0,
  'AppliedToTxnAdd SetCredit AppliedAmount' => 0,
  'AppliedToTxnAdd SetCredit Override' => 0,
  'AppliedToTxnAdd DiscountAmount' => 0,
  'AppliedToTxnAdd DiscountAccountRef ListID' => 0,
  'AppliedToTxnAdd DiscountAccountRef FullName' => 209,
  'AppliedToTxnAdd DiscountClassRef ListID' => 0,
  'AppliedToTxnAdd DiscountClassRef FullName' => 209,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
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
  'ExternalGUID' => true,
  'IsAutoApply' => false,
  'AppliedToTxnAdd TxnID' => false,
  'AppliedToTxnAdd PaymentAmount' => true,
  'AppliedToTxnAdd TxnLineDetail TxnLineID' => false,
  'AppliedToTxnAdd TxnLineDetail Amount' => false,
  'AppliedToTxnAdd SetCredit CreditTxnID' => false,
  'AppliedToTxnAdd SetCredit TxnLineID' => false,
  'AppliedToTxnAdd SetCredit AppliedAmount' => false,
  'AppliedToTxnAdd SetCredit Override' => true,
  'AppliedToTxnAdd DiscountAmount' => true,
  'AppliedToTxnAdd DiscountAccountRef ListID' => true,
  'AppliedToTxnAdd DiscountAccountRef FullName' => true,
  'AppliedToTxnAdd DiscountClassRef ListID' => true,
  'AppliedToTxnAdd DiscountClassRef FullName' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
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
  'ExternalGUID' => 9.0,
  'IsAutoApply' => 999.99,
  'AppliedToTxnAdd TxnID' => 0.0,
  'AppliedToTxnAdd PaymentAmount' => 999.99,
  'AppliedToTxnAdd TxnLineDetail TxnLineID' => 999.99,
  'AppliedToTxnAdd TxnLineDetail Amount' => 999.99,
  'AppliedToTxnAdd SetCredit CreditTxnID' => 0.0,
  'AppliedToTxnAdd SetCredit TxnLineID' => 999.99,
  'AppliedToTxnAdd SetCredit AppliedAmount' => 999.99,
  'AppliedToTxnAdd SetCredit Override' => 10.0,
  'AppliedToTxnAdd DiscountAmount' => 999.99,
  'AppliedToTxnAdd DiscountAccountRef ListID' => 999.99,
  'AppliedToTxnAdd DiscountAccountRef FullName' => 999.99,
  'AppliedToTxnAdd DiscountClassRef ListID' => 999.99,
  'AppliedToTxnAdd DiscountClassRef FullName' => 999.99,
  'IncludeRetElement' => 4.0,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
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
  'ExternalGUID' => false,
  'IsAutoApply' => false,
  'AppliedToTxnAdd TxnID' => false,
  'AppliedToTxnAdd PaymentAmount' => false,
  'AppliedToTxnAdd TxnLineDetail TxnLineID' => false,
  'AppliedToTxnAdd TxnLineDetail Amount' => false,
  'AppliedToTxnAdd SetCredit CreditTxnID' => false,
  'AppliedToTxnAdd SetCredit TxnLineID' => false,
  'AppliedToTxnAdd SetCredit AppliedAmount' => false,
  'AppliedToTxnAdd SetCredit Override' => false,
  'AppliedToTxnAdd DiscountAmount' => false,
  'AppliedToTxnAdd DiscountAccountRef ListID' => false,
  'AppliedToTxnAdd DiscountAccountRef FullName' => false,
  'AppliedToTxnAdd DiscountClassRef ListID' => false,
  'AppliedToTxnAdd DiscountClassRef FullName' => false,
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
  'CreditCardTxnInfo',
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
  'ExternalGUID',
  'IsAutoApply',
  'AppliedToTxnAdd',
  'AppliedToTxnAdd TxnID',
  'AppliedToTxnAdd PaymentAmount',
  'AppliedToTxnAdd TxnLineDetail TxnLineID',
  'AppliedToTxnAdd TxnLineDetail Amount',
  'AppliedToTxnAdd SetCredit CreditTxnID',
  'AppliedToTxnAdd SetCredit TxnLineID',
  'AppliedToTxnAdd SetCredit AppliedAmount',
  'AppliedToTxnAdd SetCredit Override',
  'AppliedToTxnAdd DiscountAmount',
  'AppliedToTxnAdd DiscountAccountRef ListID',
  'AppliedToTxnAdd DiscountAccountRef FullName',
  'AppliedToTxnAdd DiscountClassRef ListID',
  'AppliedToTxnAdd DiscountClassRef FullName',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
