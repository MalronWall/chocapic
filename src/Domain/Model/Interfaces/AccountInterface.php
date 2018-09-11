<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\Domain\Model\Interfaces;

use Ramsey\Uuid\UuidInterface;

interface AccountInterface
{
    public function getId(): UuidInterface;

    public function getTotal(): float;

    public function getUpdatedAt(): \DateTime;
}
