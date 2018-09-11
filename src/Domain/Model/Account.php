<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\Domain\Model;

use App\Domain\Model\Interfaces\AccountInterface;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Account
 * @ORM\Table(name="account")
 * @ORM\Entity()
 */
class Account implements AccountInterface
{
    /**
     * @var UuidInterface*
     * @ORM\Id()
     * @ORM\Column(type="uuid")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @var \DateTime*
     * @ORM\Column(type="datetime")
     */
    private $updatedAt;

    /**
     * @var float
     * @ORM\Column(type="float")
     */
    private $total;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    private $firstname;

    public function __construct(
        string $firstname
    ) {
        $this->updatedAt = new \DateTime();
        $this->total = 0.00;
        $this->firstname = $firstname;
    }

    public function getId(): UuidInterface
    {
        // TODO: Implement getId() method.
    }

    public function getTotal(): float
    {
        // TODO: Implement getTotal() method.
    }

    public function getUpdatedAt(): \DateTime
    {
        // TODO: Implement getUpdatedAt() method.
    }
}
