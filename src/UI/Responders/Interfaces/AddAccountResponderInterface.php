<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Responders\Interfaces;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

interface AddAccountResponderInterface
{
    public function __construct(
        Environment $templating,
        UrlGeneratorInterface $urlGenerator
    );

    public function response(FormInterface $form): Response;
}
