<?php

namespace App\Controller;

use App\Repository\DeveloperRepository;
use App\Repository\ProjectRepository;
use App\Entity\Developer;
use App\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;



class AllStatController extends AbstractController
{
    #[Route('/all_stat', name: 'app_all_stat')]
    public function index(ProjectRepository $projectRepository , DeveloperRepository $developerRepository): Response
    {

        
        $statistic_age_midle = ceil($developerRepository->midleAgeDeveloper());
        $count_peaple = $developerRepository->allCountDeveloper();
        $count_project = $projectRepository->allCountProject();

        
        //dd(empty($statistic_age_midle)?'true':'false');

        return $this->render('all_stat/index.html.twig', [
            'controller_name' => 'AllStatController',
            'statistic_age_midle' => $statistic_age_midle,
            'count_peaple' => $count_peaple,
            'count_project' => $count_project,
        ]);
    }
}
