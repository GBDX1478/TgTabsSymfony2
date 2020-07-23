<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
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
     */
    private $Name;

    /**
     * @ORM\ManyToOne(targetEntity=Authors::class)
     */
    private $Author;

    /**
     * @ORM\ManyToOne(targetEntity=MusicStyle::class)
     */
    private $musicStyle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Link;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     */
    private $chordChorus1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus1Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     */
    private $chordChorus2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus2Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     */
    private $chordChorus3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus3Name;

    /**
     * @ORM\ManyToOne(targetEntity=Chords::class)
     */
    private $chordChorus4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $chordChorus4Name;

   

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

     
}
