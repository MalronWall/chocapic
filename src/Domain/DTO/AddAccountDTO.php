<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\Domain\DTO;

use App\Domain\DTO\Interfaces\AddAccountDTOInterface;
use Symfony\Component\Validator\Constraints as Assert;

class AddAccountDTO implements AddAccountDTOInterface
{
    /**
     * @var string
     * @Assert\NotBlank(
     *     message="Le prénom est obligatoire !!"
     * )
     * @Assert\Length(
     *     min="2",
     *     minMessage="Je ne connais pas de prénom étant aussi court...",
     *     max="80",
     *     maxMessage="C'est quoi ce prénom ??"
     * )
     */
    public $firstname;

    /**
     * AddAccountDTOInterface constructor.
     * @param null|string $firstname
     */
    public function __construct(?string $firstname = '')
    {
        $this->firstname = $firstname;
    }
}
