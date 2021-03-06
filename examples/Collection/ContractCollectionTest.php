<?php

/*
 * This file is part of the Memio project.
 *
 * (c) Loïc Chardonnet <loic.chardonnet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Memio\Memio\Examples\Collection;

use Memio\Memio\Examples\PrettyPrinterTestCase;
use Memio\Model\Contract;

class ContractCollectionTest extends PrettyPrinterTestCase
{
    public function testZeroContracts()
    {
        $contracts = array();

        $generatedCode = $this->prettyPrinter->generateCode($contracts);

        $this->assertSame('', $generatedCode);
    }

    public function testOneContract()
    {
        $contracts = array(
            new Contract('Memio\\Memio\\MyContract'),
        );

        $generatedCode = $this->prettyPrinter->generateCode($contracts);

        $this->assertSame("MyContract\n", $generatedCode);
    }

    public function testThreeContracts()
    {
        $contracts = array(
            new Contract('Memio\\Memio\\MyFirstContract'),
            new Contract('Memio\\Memio\\MySecondContract'),
            new Contract('Memio\\Memio\\MyThirdContract'),
        );

        $generatedCode = $this->prettyPrinter->generateCode($contracts);

        $this->assertSame("MyFirstContract, MySecondContract, MyThirdContract\n", $generatedCode);
    }
}
