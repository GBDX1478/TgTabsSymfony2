<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ImagineController extends AbstractController 
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
     * @Route("/imagine", name="imagine")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(11);
        return $this->render('songs/imagine.html.twig', compact('songs'));
    }
}