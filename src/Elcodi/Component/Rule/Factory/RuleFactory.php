<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Component\Rule\Factory;

use Elcodi\Component\Core\Factory\Abstracts\AbstractFactory;
use Elcodi\Component\Rule\Entity\Rule;

/**
 * Class RuleFactory
 */
class RuleFactory extends AbstractFactory
{
    /**
     * Creates an instance of an entity.
     *
     * This method must return always an empty instance
     *
     * @return Rule Empty entity
     */
    public function create()
    {
        /**
         * @var Rule $rule
         */
        $classNamespace = $this->getEntityNamespace();
        $rule = new $classNamespace();
        $rule->setEnabled(true);

        return $rule;
    }
}
