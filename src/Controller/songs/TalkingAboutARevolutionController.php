<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TalkingAboutARevolutionController extends AbstractController 
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
     * @Route("/talkingAboutARevolution", name="talkingAboutARevolution")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(19);
       return $this->render('songs/talkingAboutARevolution.html.twig' , compact('songs') );
    }
}