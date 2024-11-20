<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
class Project
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[Assert\NotBlank]
    #[Assert\NotNull]
    #[ORM\Column(length: 255)]
    private ?string $client = null;

    ///////////////////////////
    #[ORM\JoinTable(name: 'projects_to_developers')]
    #[ORM\JoinColumn(name: 'project_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'developer_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: Developer::class, cascade:['persist'])]
    private ArrayCollection|PersistentCollection $developers ;

    /////////////////////////////////

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getClient(): ?string
    {
        return $this->client;
    }

    public function setClient(string $client): static
    {
        $this->client = $client;

        return $this;
    }

    //developer many to many
    public function getDevelopers(): ArrayCollection|PersistentCollection
    {
        return $this->developers;
    }

    
    public function setDevelopers(ArrayCollection $developers): static
    {
        $this->developers = $developers;

        return $this;
    }

    
    public function addDeveloper(Developer $developer): void
    {
        $this->developers[] = $developer;
    }
    
}
