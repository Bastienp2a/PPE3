<?php

namespace App\Controller;

use App\Entity\Pratiquer;
use App\Form\PratiquerType;
use App\Repository\PratiquerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pratiquer")
 */
class PratiquerController extends AbstractController
{
    /**
     * @Route("/", name="pratiquer_index", methods={"GET"})
     */
    public function index(PratiquerRepository $pratiquerRepository): Response
    {
        return $this->render('pratiquer/index.html.twig', [
            'pratiquers' => $pratiquerRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pratiquer_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $pratiquer = new Pratiquer();
        $form = $this->createForm(PratiquerType::class, $pratiquer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($pratiquer);
            $entityManager->flush();

            return $this->redirectToRoute('pratiquer_index');
        }

        return $this->render('pratiquer/new.html.twig', [
            'pratiquer' => $pratiquer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pratiquer_show", methods={"GET"})
     */
    public function show(Pratiquer $pratiquer): Response
    {
        return $this->render('pratiquer/show.html.twig', [
            'pratiquer' => $pratiquer,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pratiquer_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Pratiquer $pratiquer): Response
    {
        $form = $this->createForm(PratiquerType::class, $pratiquer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pratiquer_index');
        }

        return $this->render('pratiquer/edit.html.twig', [
            'pratiquer' => $pratiquer,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pratiquer_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Pratiquer $pratiquer): Response
    {
        if ($this->isCsrfTokenValid('delete'.$pratiquer->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($pratiquer);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pratiquer_index');
    }
}
