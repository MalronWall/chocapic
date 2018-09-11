<?php

declare(strict_types=1);

/**
 * (c) Thibaut Tourte <thibaut.tourte17@gmail.com>
 */

namespace App\UI\Responders;

use App\UI\Responders\Interfaces\AddAccountResponderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;

class AddAccountResponder implements AddAccountResponderInterface
{
    /** @var Environment */
    private $templating;

    /** @var UrlGeneratorInterface */
    private $urlGenerator;

    /**
     * AddAccountResponder constructor.
     * @param Environment $templating
     * @param UrlGeneratorInterface $urlGenerator
     */
    public function __construct(
        Environment $templating,
        UrlGeneratorInterface $urlGenerator
    ) {
        $this->templating = $templating;
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * @param FormInterface $form
     * @return Response
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function response(FormInterface $form): Response
    {
        var_dump($this->templating->render('add_account.html.twig', [
            'form' => $form->createView()
        ]));exit;

        return new Response(
            $this->templating->render('add_account.html.twig', [
                'form' => $form->createView()
            ])
        );
    }
}
