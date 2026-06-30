<?php

declare(strict_types=1);

namespace byrokrat\banking\Format\Build;

/**
 * This class has been auto-generated and should not be edited directly
 *
 * Generated in accordance with BGC specifications dated 2024-04-22.
 */
class MultitudeFormatTest extends \PHPUnit\Framework\TestCase
{
    private function getAccount(): \byrokrat\banking\AccountNumber
    {
        return new \byrokrat\banking\UndefinedAccount("", "9070", "", "111113", "5");
    }

    public function testGetBankName()
    {
        $this->assertSame(
            \byrokrat\banking\BankNames::BANK_MULTITUDE,
            (new MultitudeFormat())->getBankName()
        );
    }

    public function testIsValidClearing()
    {
        $this->assertTrue(
            (new MultitudeFormat())->isValidClearing(
                $this->getAccount()
            )
        );
    }

    public function testValidate()
    {
        $this->assertTrue(
            (new MultitudeFormat())->validate($this->getAccount())->isValid()
        );
    }
}
