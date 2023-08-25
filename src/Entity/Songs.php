<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OrderBy;
use App\Repository\SongsRepository;

/**
 * @ORM\Entity(repositoryClass=SongsRepository::class)
 */
class Songs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @OrderBy({"name" = "ASC"})
     */
    private $Name;

    /**
     * @ORM\ManyToOne(targetEntity=Authors::class)
     */
    private $Author;

    /**
     * @ORM\ManyToOne(targetEntity=MusicStyle::class)
     * @OrderBy({"name" = "ASC"})
     */
    private $musicStyle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Link;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     */
    private $chordChorus1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ORM\JoinColumn
     */
    private $chordChorus1Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @@ORM\JoinColumn(name="chordChorus2", referencedColumnName="id", nullable=true)
     */
    private $chordChorus2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus2Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus3Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus4Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse1Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse2Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse3Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse4Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse5Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordverse6Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse7Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordVerse8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordVerse8Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus5;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus5Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus7;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus7Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus8;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus8Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     * @ORM\JoinColumn
     */
    private $chordChorus6;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus6Name;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbChordsChorus;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbChordsVerse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getAuthor(): ?Authors
    {
        return $this->Author;
    }

    public function setAuthor(?Authors $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    public function __toString(){
        // to show the name of the Category in the select
        return $this->name;
        // to show the id of the Category in the select
        // return $this->id;
    }

      public function getMusicStyle(): ?MusicStyle
      {
          return $this->musicStyle;
      }

      public function setMusicStyle(?MusicStyle $musicStyle): self
      {
          $this->musicStyle = $musicStyle;

          return $this;
      }

      public function getLink(): ?string
      {
          return $this->Link;
      }

      public function setLink(string $Link): self
      {
          $this->Link = $Link;

          return $this;
      }

      public function getChordChorus1(): ?Chords
      {
          return $this->chordChorus1;
      }

      public function setChordChorus1(?Chords $chordChorus1): self
      {
          $this->chordChorus1 = $chordChorus1;

          return $this;
      }

      public function getChordChorus1Name(): ?string
      {
          return $this->chordChorus1Name;
      }

      public function setChordChorus1Name(?string $chordChorus1Name): self
      {
          $this->chordChorus1Name = $chordChorus1Name;

          return $this;
      }

      public function getChordChorus2(): ?Chords
      {
          return $this->chordChorus2;
      }

      public function setChordChorus2(?Chords $chordChorus2): self
      {
          $this->chordChorus2 = $chordChorus2;

          return $this;
      }

      public function getChordChorus2Name(): ?string
      {
          return $this->chordChorus2Name;
      }

      public function setChordChorus2Name(?string $chordChorus2Name): self
      {
          $this->chordChorus2Name = $chordChorus2Name;

          return $this;
      }

      public function getChordChorus3(): ?Chords
      {
          return $this->chordChorus3;
      }

      public function setChordChorus3(?Chords $chordChorus3): self
      {
          $this->chordChorus3 = $chordChorus3;

          return $this;
      }

      public function getChordChorus3Name(): ?string
      {
          return $this->chordChorus3Name;
      }

      public function setChordChorus3Name(?string $chordChorus3Name): self
      {
          $this->chordChorus3Name = $chordChorus3Name;

          return $this;
      }

      public function getChordChorus4(): ?Chords
      {
          return $this->chordChorus4;
      }

      public function setChordChorus4(?Chords $chordChorus4): self
      {
          $this->chordChorus4 = $chordChorus4;

          return $this;
      }

      public function getChordChorus4Name(): ?string
      {
          return $this->chordChorus4Name;
      }

      public function setChordChorus4Name(?string $chordChorus4Name): self
      {
          $this->chordChorus4Name = $chordChorus4Name;

          return $this;
      }

      public function getChordVerse1(): ?Chords
      {
          return $this->chordVerse1;
      }

      public function setChordVerse1(?Chords $chordVerse1): self
      {
          $this->chordVerse1 = $chordVerse1;

          return $this;
      }

      public function getChordVerse1Name(): ?string
      {
          return $this->chordVerse1Name;
      }

      public function setChordVerse1Name(?string $chordVerse1Name): self
      {
          $this->chordVerse1Name = $chordVerse1Name;

          return $this;
      }

      public function getChordVerse2(): ?Chords
      {
          return $this->chordVerse2;
      }

      public function setChordVerse2(?Chords $chordVerse2): self
      {
          $this->chordVerse2 = $chordVerse2;

          return $this;
      }

      public function getChordVerse2Name(): ?string
      {
          return $this->chordVerse2Name;
      }

      public function setChordVerse2Name(?string $chordVerse2Name): self
      {
          $this->chordVerse2Name = $chordVerse2Name;

          return $this;
      }

      public function getChordVerse3(): ?Chords
      {
          return $this->chordVerse3;
      }

      public function setChordVerse3(?Chords $chordVerse3): self
      {
          $this->chordVerse3 = $chordVerse3;

          return $this;
      }

      public function getChordVerse3Name(): ?string
      {
          return $this->chordVerse3Name;
      }

      public function setChordVerse3Name(?string $chordVerse3Name): self
      {
          $this->chordVerse3Name = $chordVerse3Name;

          return $this;
      }

      public function getChordVerse4(): ?Chords
      {
          return $this->chordVerse4;
      }

      public function setChordVerse4(?Chords $chordVerse4): self
      {
          $this->chordVerse4 = $chordVerse4;

          return $this;
      }

      public function getChordVerse4Name(): ?string
      {
          return $this->chordVerse4Name;
      }

      public function setChordVerse4Name(?string $chordVerse4Name): self
      {
          $this->chordVerse4Name = $chordVerse4Name;

          return $this;
      }

      public function getChordVerse5(): ?Chords
      {
          return $this->chordVerse5;
      }

      public function setChordVerse5(?Chords $chordVerse5): self
      {
          $this->chordVerse5 = $chordVerse5;

          return $this;
      }

      public function getChordVerse5Name(): ?string
      {
          return $this->chordVerse5Name;
      }

      public function setChordVerse5Name(?string $chordVerse5Name): self
      {
          $this->chordVerse5Name = $chordVerse5Name;

          return $this;
      }

      public function getChordVerse6(): ?Chords
      {
          return $this->chordVerse6;
      }

      public function setChordVerse6(?Chords $chordVerse6): self
      {
          $this->chordVerse6 = $chordVerse6;

          return $this;
      }

      public function getChordverse6Name(): ?string
      {
          return $this->chordverse6Name;
      }

      public function setChordverse6Name(?string $chordverse6Name): self
      {
          $this->chordverse6Name = $chordverse6Name;

          return $this;
      }

      public function getChordVerse7(): ?Chords
      {
          return $this->chordVerse7;
      }

      public function setChordVerse7(?Chords $chordVerse7): self
      {
          $this->chordVerse7 = $chordVerse7;

          return $this;
      }

      public function getChordVerse7Name(): ?string
      {
          return $this->chordVerse7Name;
      }

      public function setChordVerse7Name(?string $chordVerse7Name): self
      {
          $this->chordVerse7Name = $chordVerse7Name;

          return $this;
      }

      public function getChordVerse8(): ?Chords
      {
          return $this->chordVerse8;
      }

      public function setChordVerse8(?Chords $chordVerse8): self
      {
          $this->chordVerse8 = $chordVerse8;

          return $this;
      }

      public function getChordVerse8Name(): ?string
      {
          return $this->chordVerse8Name;
      }

      public function setChordVerse8Name(?string $chordVerse8Name): self
      {
          $this->chordVerse8Name = $chordVerse8Name;

          return $this;
      }

      public function getChordChorus5(): ?Chords
      {
          return $this->chordChorus5;
      }

      public function setChordChorus5(?Chords $chordChorus5): self
      {
          $this->chordChorus5 = $chordChorus5;

          return $this;
      }

      public function getChordChorus5Name(): ?string
      {
          return $this->chordChorus5Name;
      }

      public function setChordChorus5Name(?string $chordChorus5Name): self
      {
          $this->chordChorus5Name = $chordChorus5Name;

          return $this;
      }

      public function getChordChorus7(): ?Chords
      {
          return $this->chordChorus7;
      }

      public function setChordChorus7(?Chords $chordChorus7): self
      {
          $this->chordChorus7 = $chordChorus7;

          return $this;
      }

      public function getChordChorus7Name(): ?string
      {
          return $this->chordChorus7Name;
      }

      public function setChordChorus7Name(?string $chordChorus7Name): self
      {
          $this->chordChorus7Name = $chordChorus7Name;

          return $this;
      }

      public function getChordChorus8(): ?Chords
      {
          return $this->chordChorus8;
      }

      public function setChordChorus8(?Chords $chordChorus8): self
      {
          $this->chordChorus8 = $chordChorus8;

          return $this;
      }

      public function getChordChorus8Name(): ?string
      {
          return $this->chordChorus8Name;
      }

      public function setChordChorus8Name(?string $chordChorus8Name): self
      {
          $this->chordChorus8Name = $chordChorus8Name;

          return $this;
      }

      public function getChordChorus6(): ?Chords
      {
          return $this->chordChorus6;
      }

      public function setChordChorus6(?Chords $chordChorus6): self
      {
          $this->chordChorus6 = $chordChorus6;

          return $this;
      }

      public function getChordChorus6Name(): ?string
      {
          return $this->chordChorus6Name;
      }

      public function setChordChorus6Name(?string $chordChorus6Name): self
      {
          $this->chordChorus6Name = $chordChorus6Name;

          return $this;
      }

      public function getNbChordsChorus(): ?int
      {
          return $this->nbChordsChorus;
      }

      public function setNbChordsChorus(int $nbChordsChorus): self
      {
          $this->nbChordsChorus = $nbChordsChorus;

          return $this;
      }

      public function getNbChordsVerse(): ?int
      {
          return $this->nbChordsVerse;
      }

      public function setNbChordsVerse(int $nbChordsVerse): self
      {
          $this->nbChordsVerse = $nbChordsVerse;

          return $this;
      }

     
}
