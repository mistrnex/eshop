<?php

namespace App\Controller;

use App\Entity\Kategorieknih;
use App\Form\KategorieknihType;
use App\Repository\KategorieknihRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/kategorieknih")
 */
class KategorieknihController extends Controller
{
    /**
     * @Route("/", name="kategorieknih_index", methods="GET")
     */
    public function index(KategorieknihRepository $kategorieknihRepository): Response
    {
        return $this->render('kategorieknih/index.html.twig', ['kategorieknihs' => $kategorieknihRepository->findAll()]);
    }

    /**
     * @Route("/new", name="kategorieknih_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $kategorieknih = new Kategorieknih();
        $form = $this->createForm(KategorieknihType::class, $kategorieknih);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($kategorieknih);
            $em->flush();

            return $this->redirectToRoute('kategorieknih_index');
        }

        return $this->render('kategorieknih/new.html.twig', [
            'kategorieknih' => $kategorieknih,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kategorieknih_show", methods="GET")
     */
    public function show(Kategorieknih $kategorieknih): Response
    {
        return $this->render('kategorieknih/show.html.twig', ['kategorieknih' => $kategorieknih]);
    }

    /**
     * @Route("/{id}/edit", name="kategorieknih_edit", methods="GET|POST")
     */
    public function edit(Request $request, Kategorieknih $kategorieknih): Response
    {
        $form = $this->createForm(KategorieknihType::class, $kategorieknih);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('kategorieknih_edit', ['id' => $kategorieknih->getId()]);
        }

        return $this->render('kategorieknih/edit.html.twig', [
            'kategorieknih' => $kategorieknih,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="kategorieknih_delete", methods="DELETE")
     */
    public function delete(Request $request, Kategorieknih $kategorieknih): Response
    {
        if ($this->isCsrfTokenValid('delete'.$kategorieknih->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($kategorieknih);
            $em->flush();
        }

        return $this->redirectToRoute('kategorieknih_index');
    }
}
