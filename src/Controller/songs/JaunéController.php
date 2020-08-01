<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class JaunéController extends AbstractController 
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
     * @Route("/jauné", name="jauné")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(7);
       return $this->render('songs/jauné.html.twig' , compact('songs') );
    }
}