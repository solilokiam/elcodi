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

namespace Elcodi\Component\StateTransitionMachine\Event;

use Symfony\Component\EventDispatcher\Event;

use Elcodi\Component\StateTransitionMachine\Definition\Transition;
use Elcodi\Component\StateTransitionMachine\Entity\Interfaces\StateableInterface;

/**
 * Class TransitionEvent
 */
class TransitionEvent extends Event
{
    /**
     * @var StateableInterface
     *
     * Object
     */
    protected $object;

    /**
     * @var Transition
     *
     * Transition
     */
    protected $transition;

    /**
     * Construct
     *
     * @param StateableInterface $object     Object
     * @param Transition         $transition Transition
     */
    public function __construct(StateableInterface $object, Transition $transition)
    {
        $this->object = $object;
        $this->transition = $transition;
    }

    /**
     * Get Object
     *
     * @return StateableInterface Object
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * get transition
     *
     * @return Transition Transition
     */
    public function getTransition()
    {
        return $this->transition;
    }
}
