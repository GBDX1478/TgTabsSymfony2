<?php

namespace App\Controller\admin;

use App\Entity\Songs;
use App\Entity\Authors;
use App\Entity\Chords;
use App\Form\SongsType;
use App\Form\AuthorsType;
use App\Entity\MusicStyle;
use App\Form\ChordsType;
use App\Form\MusicStyleType;
use App\Repository\SongsRepository;
use App\Repository\AuthorsRepository;
use App\Repository\ChordsRepository;
use App\Repository\MusicStyleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class AdminController extends AbstractController
{
    /**
     * @var SongsRepository
     */
    private $repository;

    /**
     * @var AuthorsRepository
     */
    private $authorsRepo;

    /**
     * @var MusicStyleRepository
     */
    private $musicStyleRepo;

    /**
     * @var ChordsRepository
     */
    private $chordsRepo;

    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(SongsRepository $repository, AuthorsRepository $authorsRepo, ChordsRepository $chordsRepo, MusicStyleRepository $musicStyleRepo, EntityManagerInterface $em)
    {
        $this->repository = $repository;
        $this->authorsRepo = $authorsRepo;
        $this->musicStyleRepo = $musicStyleRepo;
        $this->chordsRepo = $chordsRepo;
        $this->em = $em;
    }

    /**
     * @Route("/admin", name="admin.song.index")
     * @return \Symfony\Component\Httpfoundation\Response
     */
    public function index()
    {
        $songs = $this->repository->findBy([], ['Name' => 'ASC']);
        $authors = $this->authorsRepo->findBy([], ['Name' => 'ASC']);
        $musicStyles = $this->musicStyleRepo->findBy([], ['name' => 'ASC']);

        $chords = $this->chordsRepo->findBy([], ['name' => 'ASC']);

        return $this->render('admin/song/index.html.twig', [
            'songs' => $songs,
            'authors' => $authors,
            'musicStyles' => $musicStyles,
            'chords' => $chords
        ]);
    }

    /**
     * @Route("admin/song/create", name="admin.song.new")
     */
    public function newSong(Request $request){
        $song = new Songs();
        $form = $this->createForm(SongsType::class, $song);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->persist($song);
            $this->em->flush();

            $this->addFlash('success', 'La chanson a bien été créée');
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/song/new.html.twig', [
            'song' => $song,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("admin/author/create", name="admin.author.new")
     */
    public function newAuthor(Request $request){
        $author = new Authors();
        $form = $this->createForm(AuthorsType::class, $author);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->persist($author);
            $this->em->flush();
            $this->addFlash('success', "L'auteur a bien été créé");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/author/new.html.twig', [
            'author' => $author,
            'form' => $form->createView()
        ]);

    }


    /**
     * @Route("admin/musicStyle/create", name="admin.musicStyle.new")
     */
    public function newMusicStyle(Request $request){
        $musicStyle = new MusicStyle();
        $form = $this->createForm(MusicStyleType::class, $musicStyle);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->persist($musicStyle);
            $this->em->flush();
            $this->addFlash('success', "Le style a bien été créé");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/musicStyle/new.html.twig', [
            'author' => $musicStyle,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("admin/chords/create", name="admin.chords.new")
     */
    public function newChord(Request $request){
        $chords = new Chords();
        $form = $this->createForm(ChordsType::class, $chords);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->persist($chords);
            $this->em->flush();
            $this->addFlash('success', "L'accord a bien été créé");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/chords/new.html.twig', [
            'chords' => $chords,
            'form' => $form->createView()
        ]);

    }

    /**
     * @Route("/admin/song/{id}", name="admin.song.edit", methods="GET|POST")
     */
    public function editSong(Songs $song, Request $request)
    {
        $form = $this->createForm(SongsType::class, $song);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {

            // dd($song);
            $this->em->persist($song);
            $this->em->flush();
            $this->addFlash('success', "La chanson a bien été modifiée" );
            return $this->redirectToRoute('admin.song.index');
            
        }

        return $this->render('admin/song/edit.html.twig', [
            'song' => $song,
            'form' => $form->createView()
        ]);
    } 

    /**
     * @Route("/admin/author/{id}", name="admin.author.edit", methods="GET|POST")
     */
    public function editAuthor(Authors $author, Request $request)
    {
        $form = $this->createForm(AuthorsType::class, $author);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush();
            $this->addFlash('success', "L'auteur a bien été modifiée");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/author/edit.html.twig', [
            'author' => $author,
            'form' => $form->createView()
        ]);

    } 

    /**
     * @Route("/admin/musicStyle/{id}", name="admin.musicStyle.edit", methods="GET|POST")
     */
    public function editMusicStyle(MusicStyle $musicStyle, Request $request)
    {
        $form = $this->createForm(MusicStyleType::class, $musicStyle);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush();
            $this->addFlash('success', "Le style a bien été modifié");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/musicStyle/edit.html.twig', [
            'musicStyle' => $musicStyle,
            'form' => $form->createView()
        ]);

    } 

    /**
     * @Route("/admin/chords/{id}", name="admin.chords.edit", methods="GET|POST")
     */
    public function editChords(Chords $chords, Request $request)
    {
        $form = $this->createForm(ChordsType::class, $chords);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush();
            $this->addFlash('success', "L'accord a bien été modifié");
            return $this->redirectToRoute('admin.song.index');
        }

        return $this->render('admin/chords/edit.html.twig', [
            'chords' => $chords,
            'form' => $form->createView()
        ]);

    } 


    /**
     * @Route("/admin/song/{id}", name="admin.song.delete", methods="DELETE")
     */
    public function deleteSong(Songs $song, Request $request){

        if($this->isCsrfTokenValid('delete' . $song->getId(), $request->get('_token'))){
            $this->em->remove($song);
            $this->em->flush();
            $this->addFlash('success', 'La chanson a bien été supprimée');
        }
        return $this->redirectToRoute('admin.song.index');

    }

    /**
     * @Route("/admin/author/{id}", name="admin.author.delete", methods="DELETE")
     */
    public function deleteAuthor(Authors $author, Request $request){

        if($this->isCsrfTokenValid('delete' . $author->getId(), $request->get('_token'))){
            $this->em->remove($author);
            $this->em->flush();
            $this->addFlash('success', "L'auteur a bien été supprimé");
        }
        return $this->redirectToRoute('admin.song.index');       
    }

    /**
    * @Route("/admin/musicStyle/{id}", name="admin.musicStyle.delete", methods="DELETE")
    */
    public function deleteMusicStyle(MusicStyle $musicStyle, Request $request){

        if($this->isCsrfTokenValid('delete' . $musicStyle->getId(), $request->get('_token'))){
            $this->em->remove($musicStyle);
            $this->em->flush();
            $this->addFlash('success', "Le style a bien été supprimé");
        }
        return $this->redirectToRoute('admin.song.index');       
    }

    /**
    * @Route("/admin/chords/{id}", name="admin.chords.delete", methods="DELETE")
    */
    public function deleteChord(Chords $chords, Request $request){

        if($this->isCsrfTokenValid('delete' . $chords->getId(), $request->get('_token'))){
            $this->em->remove($chords);
            $this->em->flush();
            $this->addFlash('success', "L'accord a bien été supprimé");
        }
        return $this->redirectToRoute('admin.song.index');       
    }

    
}