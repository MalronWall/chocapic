<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Actions\Interfaces;

use App\UI\Responders\Interfaces\AddAccountResponderInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface AddAccountActionInterface
{
    /**
     * AddAccountInterface constructor.
     * @param FormFactoryInterface $formFactory
     */
    public function __construct(
        FormFactoryInterface $formFactory,
        AddAccountResponderInterface $responder
    );

    /**
     * @param Request $request
     * @return Response
     */
    public function add(Request $request): Response;
}
