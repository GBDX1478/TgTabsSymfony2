<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class WhereverYouWillGoController extends AbstractController 
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
     * @Route("/whereverYouWillGo", name="whereverYouWillGo")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(14);
        return $this->render('songs/whereverYouWillGo.html.twig', compact('songs'));
    }
}