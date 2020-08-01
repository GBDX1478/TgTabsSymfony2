<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WhenIComeAroundController extends AbstractController 
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
     * @Route("/WhenIComeAround", name="WhenIComeAround")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(8);
       return $this->render('songs/whenIComeAround.html.twig' , compact('songs') );
    }
}