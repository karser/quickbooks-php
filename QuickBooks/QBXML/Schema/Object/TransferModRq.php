<?php

/**
 * Schema object for: TransferModRq
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
class QuickBooks_QBXML_Schema_Object_TransferModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TransferMod TxnID' => 'IDTYPE',
  'TransferMod EditSequence' => 'STRTYPE',
  'TransferMod TxnDate' => 'DATETYPE',
  'TransferMod TransferFromAccountRef ListID' => 'IDTYPE',
  'TransferMod TransferFromAccountRef FullName' => 'STRTYPE',
  'TransferMod TransferToAccountRef ListID' => 'IDTYPE',
  'TransferMod TransferToAccountRef FullName' => 'STRTYPE',
  'TransferMod ClassRef ListID' => 'IDTYPE',
  'TransferMod ClassRef FullName' => 'STRTYPE',
  'TransferMod Amount' => 'AMTTYPE',
  'TransferMod Memo' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TransferMod TxnID' => 0,
  'TransferMod EditSequence' => 16,
  'TransferMod TxnDate' => 0,
  'TransferMod TransferFromAccountRef ListID' => 0,
  'TransferMod TransferFromAccountRef FullName' => 159,
  'TransferMod TransferToAccountRef ListID' => 0,
  'TransferMod TransferToAccountRef FullName' => 159,
  'TransferMod ClassRef ListID' => 0,
  'TransferMod ClassRef FullName' => 159,
  'TransferMod Amount' => 0,
  'TransferMod Memo' => 4095,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TransferMod TxnID' => false,
  'TransferMod EditSequence' => false,
  'TransferMod TxnDate' => true,
  'TransferMod TransferFromAccountRef ListID' => true,
  'TransferMod TransferFromAccountRef FullName' => true,
  'TransferMod TransferToAccountRef ListID' => true,
  'TransferMod TransferToAccountRef FullName' => true,
  'TransferMod ClassRef ListID' => true,
  'TransferMod ClassRef FullName' => true,
  'TransferMod Amount' => true,
  'TransferMod Memo' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TransferMod TxnID' => 999.99,
  'TransferMod EditSequence' => 999.99,
  'TransferMod TxnDate' => 999.99,
  'TransferMod TransferFromAccountRef ListID' => 999.99,
  'TransferMod TransferFromAccountRef FullName' => 999.99,
  'TransferMod TransferToAccountRef ListID' => 999.99,
  'TransferMod TransferToAccountRef FullName' => 999.99,
  'TransferMod ClassRef ListID' => 999.99,
  'TransferMod ClassRef FullName' => 999.99,
  'TransferMod Amount' => 999.99,
  'TransferMod Memo' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TransferMod TxnID' => false,
  'TransferMod EditSequence' => false,
  'TransferMod TxnDate' => false,
  'TransferMod TransferFromAccountRef ListID' => false,
  'TransferMod TransferFromAccountRef FullName' => false,
  'TransferMod TransferToAccountRef ListID' => false,
  'TransferMod TransferToAccountRef FullName' => false,
  'TransferMod ClassRef ListID' => false,
  'TransferMod ClassRef FullName' => false,
  'TransferMod Amount' => false,
  'TransferMod Memo' => false,
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
  'TransferMod',
  'TransferMod TxnID',
  'TransferMod EditSequence',
  'TransferMod TxnDate',
  'TransferMod TransferFromAccountRef ListID',
  'TransferMod TransferFromAccountRef FullName',
  'TransferMod TransferToAccountRef ListID',
  'TransferMod TransferToAccountRef FullName',
  'TransferMod ClassRef ListID',
  'TransferMod ClassRef FullName',
  'TransferMod Amount',
  'TransferMod Memo',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
