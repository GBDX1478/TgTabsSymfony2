<?php

namespace App\Controller\songs;


use App\Repository\SongsRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class DepuisToujoursController extends AbstractController 
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
     * @Route("/depuistoujours", name="depuisToujours")
     * 
     */
    public function index()
    {
    $songs = $this->repository->find(3);
       return $this->render('songs/depuisToujours.html.twig' , compact('songs') );
    }
}