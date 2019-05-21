<?php

/**
 * Schema object for: TransferAddRq
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
class QuickBooks_QBXML_Schema_Object_TransferAddRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'TransferAdd TxnDate' => 'DATETYPE',
  'TransferAdd TransferFromAccountRef ListID' => 'IDTYPE',
  'TransferAdd TransferFromAccountRef FullName' => 'STRTYPE',
  'TransferAdd TransferToAccountRef ListID' => 'IDTYPE',
  'TransferAdd TransferToAccountRef FullName' => 'STRTYPE',
  'TransferAdd ClassRef ListID' => 'IDTYPE',
  'TransferAdd ClassRef FullName' => 'STRTYPE',
  'TransferAdd Amount' => 'AMTTYPE',
  'TransferAdd Memo' => 'STRTYPE',
  'IncludeRetElement' => 'STRTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'TransferAdd TxnDate' => 0,
  'TransferAdd TransferFromAccountRef ListID' => 0,
  'TransferAdd TransferFromAccountRef FullName' => 159,
  'TransferAdd TransferToAccountRef ListID' => 0,
  'TransferAdd TransferToAccountRef FullName' => 159,
  'TransferAdd ClassRef ListID' => 0,
  'TransferAdd ClassRef FullName' => 159,
  'TransferAdd Amount' => 0,
  'TransferAdd Memo' => 4095,
  'IncludeRetElement' => 50,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'TransferAdd TxnDate' => true,
  'TransferAdd TransferFromAccountRef ListID' => true,
  'TransferAdd TransferFromAccountRef FullName' => true,
  'TransferAdd TransferToAccountRef ListID' => true,
  'TransferAdd TransferToAccountRef FullName' => true,
  'TransferAdd ClassRef ListID' => true,
  'TransferAdd ClassRef FullName' => true,
  'TransferAdd Amount' => true,
  'TransferAdd Memo' => true,
  'IncludeRetElement' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'TransferAdd TxnDate' => 999.99,
  'TransferAdd TransferFromAccountRef ListID' => 999.99,
  'TransferAdd TransferFromAccountRef FullName' => 999.99,
  'TransferAdd TransferToAccountRef ListID' => 999.99,
  'TransferAdd TransferToAccountRef FullName' => 999.99,
  'TransferAdd ClassRef ListID' => 999.99,
  'TransferAdd ClassRef FullName' => 999.99,
  'TransferAdd Amount' => 999.99,
  'TransferAdd Memo' => 999.99,
  'IncludeRetElement' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'TransferAdd TxnDate' => false,
  'TransferAdd TransferFromAccountRef ListID' => false,
  'TransferAdd TransferFromAccountRef FullName' => false,
  'TransferAdd TransferToAccountRef ListID' => false,
  'TransferAdd TransferToAccountRef FullName' => false,
  'TransferAdd ClassRef ListID' => false,
  'TransferAdd ClassRef FullName' => false,
  'TransferAdd Amount' => false,
  'TransferAdd Memo' => false,
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
  'TransferAdd',
  'TransferAdd TxnDate',
  'TransferAdd TransferFromAccountRef ListID',
  'TransferAdd TransferFromAccountRef FullName',
  'TransferAdd TransferToAccountRef ListID',
  'TransferAdd TransferToAccountRef FullName',
  'TransferAdd ClassRef ListID',
  'TransferAdd ClassRef FullName',
  'TransferAdd Amount',
  'TransferAdd Memo',
  'IncludeRetElement'
];
			
		return $paths;
	}
}
