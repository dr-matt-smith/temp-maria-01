<?php

namespace App\Controller;

use App\Entity\Activity;
use App\Entity\Answer;
use App\Entity\AnswerCollection;
use App\Form\ActivityType;
use App\Repository\ActivityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/activity")
 */
class ActivityController extends Controller
{
    /**
     * @Route("/", name="activity_index", methods="GET")
     */
    public function index(ActivityRepository $activityRepository): Response
    {
        return $this->render('activity/index.html.twig', ['activities' => $activityRepository->findAll()]);
    }

    /**
     * @Route("/new", name="activity_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $activity = new Activity();
        $form = $this->createForm(ActivityType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($activity);
            $em->flush();

            return $this->redirectToRoute('activity_index');
        }

        return $this->render('activity/new.html.twig', [
            'activity' => $activity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="activity_show", methods="GET")
     */
    public function show(Activity $activity): Response
    {
        return $this->render('activity/show.html.twig', ['activity' => $activity]);
    }

    /**
     * @Route("/{id}/edit", name="activity_edit", methods="GET|POST")
     */
    public function edit(Request $request, Activity $activity): Response
    {
        $form = $this->createForm(ActivityType::class, $activity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('activity_edit', ['id' => $activity->getId()]);
        }

        return $this->render('activity/edit.html.twig', [
            'activity' => $activity,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="activity_delete", methods="DELETE")
     */
    public function delete(Request $request, Activity $activity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activity->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($activity);
            $em->flush();
        }

        return $this->redirectToRoute('activity_index');
    }


    /**
     * @Route("/show_mc/{id}", name="show_mc", methods="GET")
     */
    public function presentToStudent(ActivityRepository $activityRepository, $id): Response
    {
        // $id - would be LESSON ID......
        // $id - would be LESSON ID......
        // $id - would be LESSON ID......
        // $id - would be LESSON ID......

        $activities = $activityRepository->findAll();

        $activity0 = $activities[0];
        $activity1 = $activities[1];

        $answers0 = new AnswerCollection();
        $answers0->setAnswers([
            new Answer(1, $activity0->getAnswer1()),
            new Answer(2, $activity0->getAnswer2()),
            new Answer(3, $activity0->getAnswer3()),
        ]);
        $answers0->shuffleAnswers();

        $args = [
            'activity0' => $activity0,
            'answers0'=> $answers0,
            'activity1' => $activity1,
        ];

        return $this->render('activity/mc_show.html.twig', $args);
    }


    /**
     * @Route("/process_mc", name="process_mc", methods="POST")
     */
    public function processMultiChoice(
        Request $request,
        ActivityRepository $activityRepository
    ): Response
    {

        $activity0Id = $request->request->get('activity0Id');
        $answer0 = $request->request->get('activity0');

        // default - wrong
        $message0 = "Q0: your answer $answer0 to Activity 0 was wrong <br>correct answer was 1";

        $activity1Id = $request->request->get('activity1Id');
        $answer1 = $request->request->get('activity0');

        $message1 = "Q1: your answer $answer1 to Activity 0 was wrong <br>correct answer was 1";

        // validation here
        if(1 == $answer0){
            $message0 = "Q0: Well done, your answer $answer0 to Activity 0 was correct";
        }

        if(1 == $answer1){
            $message1 = "Q1: Well done, your answer $answer0 to Activity 0 was correct";
        }

        $args = [
            'message0' => $message0,
            'message1' => $message1,
            'id0' => $activity0Id,
            'id1' => $activity1Id,
            'answer0' => $answer0,
            'answer1' => $answer1,
        ];
        return $this->render('activity/mc_response.html.twig', $args);
    }
}
