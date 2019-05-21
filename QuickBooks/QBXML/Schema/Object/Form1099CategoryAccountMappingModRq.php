<?php

/**
 * Schema object for: Form1099CategoryAccountMappingModRq
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
class QuickBooks_QBXML_Schema_Object_Form1099CategoryAccountMappingModRq extends QuickBooks_QBXML_Schema_Object
{
	protected function &_qbxmlWrapper()
	{
		static $wrapper = '';
		
		return $wrapper;
	}
	
	protected function &_dataTypePaths()
	{
		static $paths = array (
  'Form1099CategoryAccountMappingMod IsFiling1099Misc' => 'BOOLTYPE',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory' => 'ENUMTYPE',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID' => 'IDTYPE',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName' => 'STRTYPE',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping' => 'BOOLTYPE',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold' => 'AMTTYPE',
);
		
		return $paths;
	}
	
	protected function &_maxLengthPaths()
	{
		static $paths = array (
  'Form1099CategoryAccountMappingMod IsFiling1099Misc' => 0,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory' => 0,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID' => 0,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName' => 159,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping' => 0,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold' => 0,
);
		
		return $paths;
	}
	
	protected function &_isOptionalPaths()
	{
		static $paths = array (
  'Form1099CategoryAccountMappingMod IsFiling1099Misc' => true,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID' => true,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName' => true,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping' => true,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold' => true,
);
	}
	
	protected function &_sinceVersionPaths()
	{
		static $paths = array (
  'Form1099CategoryAccountMappingMod IsFiling1099Misc' => 999.99,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory' => 999.99,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID' => 999.99,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName' => 999.99,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping' => 999.99,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold' => 999.99,
);
		
		return $paths;
	}
	
	protected function &_isRepeatablePaths()
	{
		static $paths = array (
  'Form1099CategoryAccountMappingMod IsFiling1099Misc' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping' => false,
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold' => false,
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
  'Form1099CategoryAccountMappingMod',
  'Form1099CategoryAccountMappingMod IsFiling1099Misc',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingCategory',
  'Form1099CategoryAccountMappingMod',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef ListID',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount AccountRef FullName',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod MappingAccount ForceMapping',
  'Form1099CategoryAccountMappingMod CategoryAccountMappingMod Threshold'
];
			
		return $paths;
	}
}
