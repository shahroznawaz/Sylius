<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Component\Product\Model;

use Doctrine\Common\Collections\Collection;
use Sylius\Component\Resource\Model\CodeAwareInterface;
use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;

/**
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
interface ProductOptionInterface extends
    ResourceInterface,
    CodeAwareInterface,
    TimestampableInterface,
    TranslatableInterface
{
    /**
     * @return string
     */
    public function getName(): ?string;

    /**
     * @param string $name
     */
    public function setName(?string $name): void;

    /**
     * @return int
     */
    public function getPosition(): ?int;

    /**
     * @param int $position
     */
    public function setPosition(?int $position): void;

    /**
     * @return Collection|ProductOptionValueInterface[]
     */
    public function getValues(): Collection;

    /**
     * @param ProductOptionValueInterface $optionValue
     */
    public function addValue(ProductOptionValueInterface $optionValue): void;

    /**
     * @param ProductOptionValueInterface $optionValue
     */
    public function removeValue(ProductOptionValueInterface $optionValue): void;

    /**
     * @param ProductOptionValueInterface $optionValue
     *
     * @return bool
     */
    public function hasValue(ProductOptionValueInterface $optionValue): bool;
}
