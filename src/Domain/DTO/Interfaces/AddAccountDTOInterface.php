<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\Domain\DTO\Interfaces;

interface AddAccountDTOInterface
{
    /**
     * AddAccountDTOInterface constructor.
     * @param null|string $firstname
     */
    public function __construct(
        ?string $firstname = ''
    );
}
