<?php

declare(strict_types=1);

namespace byrokrat\banking\Format\Build;

/**
 * This class has been auto-generated and should not be edited directly
 *
 * Generated in accordance with BGC specifications dated 2024-04-22.
 */
class NobaFormatTest extends \PHPUnit\Framework\TestCase
{
    private function getAccount(): \byrokrat\banking\AccountNumber
    {
        return new \byrokrat\banking\UndefinedAccount("", "9640", "", "111113", "7");
    }

    public function testGetBankName()
    {
        $this->assertSame(
            \byrokrat\banking\BankNames::BANK_NOBA,
            (new NobaFormat())->getBankName()
        );
    }

    public function testIsValidClearing()
    {
        $this->assertTrue(
            (new NobaFormat())->isValidClearing(
                $this->getAccount()
            )
        );
    }

    public function testValidate()
    {
        $this->assertTrue(
            (new NobaFormat())->validate($this->getAccount())->isValid()
        );
    }
}
