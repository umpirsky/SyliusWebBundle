<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\Sylius\Bundle\WebBundle\Menu;

use PHPSpec2\ObjectBehavior;

/**
 * Backend menu builder spec.
 *
 * @author Paweł Jędrzejewski <pjedrzejewski@diweb.pl>
 */
class BackendMenuBuilder extends ObjectBehavior
{
    /**
     * @param Knp\Menu\FactoryInterface                                $factory
     * @param Symfony\Component\Security\Core\SecurityContextInterface $securityContext
     * @param Symfony\Component\Translation\TranslatorInterface        $translator
     */
    public function let($factory, $securityContext, $translator)
    {
        $this->beConstructedWith($factory, $securityContext, $translator);
    }

    public function it_should_be_initializable()
    {
        $this->shouldHaveType('Sylius\Bundle\WebBundle\Menu\BackendMenuBuilder');
    }

    public function it_should_extend_base_menu_builder()
    {
        $this->shouldHaveType('Sylius\Bundle\WebBundle\Menu\MenuBuilder');
    }
}
