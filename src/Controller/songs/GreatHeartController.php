<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class GreatHeartController extends AbstractController 
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
     * @Route("/greatHeart", name="greatHeart")
     * 
     */
    public function index()
    {
     
        $songs = $this->repository->find(12);
        return $this->render('songs/greatHeart.html.twig', compact('songs'));
    }
}