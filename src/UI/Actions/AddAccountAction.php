<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Actions;

use App\UI\Actions\Interfaces\AddAccountActionInterface;
use App\UI\Forms\AddAccountType;
use App\UI\Responders\Interfaces\AddAccountResponderInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddAccountAction implements AddAccountActionInterface
{
    /** @var FormFactoryInterface */
    private $formFactory;

    /** @var AddAccountResponderInterface */
    private $responder;

    public function __construct(
        FormFactoryInterface $formFactory,
        AddAccountResponderInterface $responder
    ) {
        $this->formFactory = $formFactory;
        $this->responder = $responder;
    }

    /**
     * @Route("/account/new", name="add_account")
     * @param Request $request
     * @return Response
     */
    public function add(Request $request): Response
    {
        $form = $this->formFactory->create(AddAccountType::class)
                                  ->handleRequest($request);

        return $this->responder->response($form);
    }
}
