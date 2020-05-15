<?php
/**
 * QuickBooks Preferences object container
 */
QuickBooks_Loader::load('/QuickBooks/QBXML/Object.php');

class QuickBooks_QBXML_Object_Preferences extends QuickBooks_QBXML_Object
{
    public function __construct(array $arr = [])
    {
        parent::__construct($arr);
    }

    public function object(): string
    {
        return QUICKBOOKS_OBJECT_PREFERENCES;
    }

    public function setAccountingPreferencesIsUsingAccountNumbers(bool $value): bool
    {
        return $this->setBooleanType('AccountingPreferences IsUsingAccountNumbers', $value);
    }

    public function getAccountingPreferencesIsUsingAccountNumbers(): bool
    {
        return $this->getBooleanType('AccountingPreferences IsUsingAccountNumbers');
    }

    public function setFinanceChargePreferencesAnnualInterestRate(?string $value): bool
    {
        return $this->set('FinanceChargePreferences AnnualInterestRate', $value);
    }

    public function getFinanceChargePreferencesAnnualInterestRate(): ?string
    {
        return $this->get('FinanceChargePreferences AnnualInterestRate');
    }

    public function setFinanceChargePreferencesMinFinanceCharge(?string $value): bool
    {
        return $this->set('FinanceChargePreferences MinFinanceCharge', $value);
    }

    public function getFinanceChargePreferencesMinFinanceCharge(): ?string
    {
        return $this->get('FinanceChargePreferences MinFinanceCharge');
    }

    public function setMultiCurrencyPreferencesIsMultiCurrencyOn(bool $value): bool
    {
        return $this->setBooleanType('MultiCurrencyPreferences IsMultiCurrencyOn', $value);
    }

    public function getMultiCurrencyPreferencesIsMultiCurrencyOn(): bool
    {
        return $this->getBooleanType('MultiCurrencyPreferences IsMultiCurrencyOn');
    }
}
