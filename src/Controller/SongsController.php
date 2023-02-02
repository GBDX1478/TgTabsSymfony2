<?php

namespace App\Controller;

use App\Repository\ChordsRepository;
use App\Repository\SongsRepository;
use App\Repository\MusicStyleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SongsController extends AbstractController
{
    /**
     * @var SongsRepository
     */
    private $repository;

    public function __construct(SongsRepository $repository, MusicStyleRepository $musicStyleRepository, ChordsRepository $chordsRepository)
    {
        $this->repository = $repository;
        $this->musicStyleRepository = $musicStyleRepository;
        $this->chordsRepository = $chordsRepository;
    }

    /**
     * @Route("/chansons", name="songs.index")
     * @return \Symfony\Component\Httmfoundation\Response
     */
    public function index(): Response
    {
        $songs = $this->repository->findBy([], ['Name' => 'ASC']);
        $musicStyle = $this->musicStyleRepository->findAll();

        return $this->render('songs.html.twig', [
            'songs' => $songs,
            'musicStyle' => $musicStyle,
        ]);
    }

    /**
     * @Route("/chanson", name="chanson")
     * @return \Symfony\Component\Httmfoundation\Response
     */
    public function getSong(Request $request, SongsRepository $songsRepository, ChordsRepository $chordsRepository)
    {

        $idSong = $request->query->get('id');

        $song = $songsRepository->findOneById($idSong);

        // TODO : récupérer les valeurs de tous les accords de la chanson et les mettre dans un tableau
        $chordVerse1 = $song->getChordVerse1();
        $chordVerse1Name = $this->getChordName($chordVerse1);
        $chordVerse2 = $song->getChordVerse2();
        $chordVerse2Name = $this->getChordName($chordVerse2);
        $chordVerse3 = $song->getChordVerse3();
        $chordVerse3Name = $this->getChordName($chordVerse3);
        $chordVerse4 = $song->getChordVerse4();
        $chordVerse4Name = $this->getChordName($chordVerse4);
        $chordVerse5 = $song->getChordVerse5();
        $chordVerse5Name = $this->getChordName($chordVerse5);
        $chordVerse6 = $song->getChordVerse6();
        $chordVerse6Name = $this->getChordName($chordVerse6);
        $chordVerse7 = $song->getChordVerse5();
        $chordVerse7Name = $this->getChordName($chordVerse7);
        $chordVerse8 = $song->getChordVerse6();
        $chordVerse8Name = $this->getChordName($chordVerse7);

        $chordChorus1 = $song->getChordChorus1();
        $chordChorus1Name = $this->getChordName($chordChorus1);
        $chordChorus2 = $song->getChordChorus2();
        $chordChorus2Name = $this->getChordName($chordChorus2);
        $chordChorus3 = $song->getChordChorus3();
        $chordChorus3Name = $this->getChordName($chordChorus3);
        $chordChorus4 = $song->getChordChorus4();
        $chordChorus4Name = $this->getChordName($chordChorus4);
        $chordChorus5 = $song->getChordChorus5();
        $chordChorus5Name = $this->getChordName($chordChorus5);
        $chordChorus6 = $song->getChordChorus6();
        $chordChorus6Name = $this->getChordName($chordChorus6);
        $chordChorus7 = $song->getChordChorus7();
        $chordChorus7Name = $this->getChordName($chordChorus7);
        $chordChorus8 = $song->getChordChorus8();
        $chordChorus8Name = $this->getChordName($chordChorus8);

        $chordsChorus = [];
        $chordsVerse = [];

        $chordsChorus["chordChorus1"] = $chordChorus1Name;
        if ($song->getNbChordsChorus() >= 2) {
            $chordsChorus["chordChorus2"] = $chordChorus2Name;
        }
        if ($song->getNbChordsChorus() >= 3) {
            $chordsChorus["chordChorus3"] = $chordChorus3Name;
        }
        if ($song->getNbChordsChorus() >= 4) {
            $chordsChorus["chordChorus4"] = $chordChorus4Name;
        }
        if ($song->getNbChordsChorus() >= 5) {
            $chordsChorus["chordChorus5"] = $chordChorus5Name;
        }
        if ($song->getNbChordsChorus() >= 6) {
            $chordsChorus["chordChorus6"] = $chordChorus6Name;
        }
        if ($song->getNbChordsChorus() >= 7) {
            $chordsChorus["chordChorus7"] = $chordChorus7Name;
        }
        if ($song->getNbChordsChorus() >= 8) {
            $chordsChorus["chordChorus8"] = $chordChorus8Name;
        }

        $chordsVerse["chordVerse1"] = $chordVerse1Name;
        if ($song->getNbChordsVerse() >= 2) {
            $chordsVerse["chordVerse2"] = $chordVerse2Name;
        }
        if ($song->getNbChordsVerse() >= 3) {
            $chordsVerse["chordVerse3"] = $chordVerse3Name;
        }
        if ($song->getNbChordsVerse() >= 4) {
            $chordsVerse["chordVerse4"] = $chordVerse4Name;
        }
        if ($song->getNbChordsVerse() >= 5) {
            $chordsVerse["chordVerse5"] = $chordVerse5Name;
        }
        if ($song->getNbChordsVerse() >= 6) {
            $chordsVerse["chordVerse6"] = $chordVerse7Name;
        }
        if ($song->getNbChordsVerse() >= 7) {
            $chordsVerse["chordVerse7"] = $chordVerse7Name;
        }
        if ($song->getNbChordsVerse() >= 8) {
            $chordsVerse["chordVerse8"] = $chordVerse8Name;
        }

        return $this->render('song.html.twig', [
            "song" => $song,
            "chordsChorus" => $chordsChorus,
            "chordsVerse" => $chordsVerse
        ]);
    }

    public function getChordName($chord)
    {
        $chordData = $this->chordsRepository->findOneById($chord);
        $chordName = $chordData->getName();

        return $chordName;
    }
}
