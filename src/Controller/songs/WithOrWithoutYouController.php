<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WithOrWithoutYouController extends AbstractController 
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
     * @Route("/withOrWithoutYou", name="withOrWithoutYou")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(13);
        return $this->render('songs/withOrWithoutYou.html.twig', compact('songs'));
    }
}