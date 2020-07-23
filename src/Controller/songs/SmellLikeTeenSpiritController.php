<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class SmellLikeTeenSpiritController extends AbstractController 
{   


       /**
     * @var SongsRepository
     */
    private $repository;

    public function __construct(SongsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/SmellsLikeTeenSpirit", name="smellLikeTeenSpirit")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(2);
        return $this->render('songs/smellLikeTeenSpirit.html.twig', compact('songs'));
    }
}