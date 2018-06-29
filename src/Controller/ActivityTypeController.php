<?php

namespace App\Controller;

use App\Entity\ActivityType;
use App\Form\ActivityType1Type;
use App\Repository\ActivityTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/activity_type")
 */
class ActivityTypeController extends Controller
{
    /**
     * @Route("/", name="activity_type_index", methods="GET")
     */
    public function index(ActivityTypeRepository $activityTypeRepository): Response
    {
        return $this->render('activity_type/index.html.twig', ['activity_types' => $activityTypeRepository->findAll()]);
    }

    /**
     * @Route("/new", name="activity_type_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $activityType = new ActivityType();
        $form = $this->createForm(ActivityType1Type::class, $activityType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activityType);
            $em->flush();

            return $this->redirectToRoute('activity_type_index');
        }

        return $this->render('activity_type/new.html.twig', [
            'activity_type' => $activityType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="activity_type_show", methods="GET")
     */
    public function show(ActivityType $activityType): Response
    {
        return $this->render('activity_type/show.html.twig', ['activity_type' => $activityType]);
    }

    /**
     * @Route("/{id}/edit", name="activity_type_edit", methods="GET|POST")
     */
    public function edit(Request $request, ActivityType $activityType): Response
    {
        $form = $this->createForm(ActivityType1Type::class, $activityType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activity_type_edit', ['id' => $activityType->getId()]);
        }

        return $this->render('activity_type/edit.html.twig', [
            'activity_type' => $activityType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="activity_type_delete", methods="DELETE")
     */
    public function delete(Request $request, ActivityType $activityType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activityType->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activityType);
            $em->flush();
        }

        return $this->redirectToRoute('activity_type_index');
    }
}
