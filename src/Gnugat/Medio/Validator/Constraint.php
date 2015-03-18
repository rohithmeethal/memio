<?php

/*
 * This file is part of the Medio project.
 *
 * (c) Loïc Chardonnet <loic.chardonnet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gnugat\Medio\Validator;

interface Constraint
{
    /**
     * @param mixed $model
     *
     * @return Violation
     */
    public function validate($model);
}
