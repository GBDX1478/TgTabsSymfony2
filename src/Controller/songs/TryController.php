<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TryController extends AbstractController 
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
     * @Route("/try", name="try")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(22);
       return $this->render('songs/try.html.twig' , compact('songs') );
    }
}