<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\Evaluator\Parser;

interface PhpParserInterface
{
    /**
     * @param string $path
     *
     * @return array<\PhpParser\Node>
     */
    public function parse(string $path): array;
}