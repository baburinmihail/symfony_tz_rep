<?php

// src/Form/DataTransformer/IssueToNumberTransformer.php
namespace App\Form\DataTransformer;

use App\Entity\Developer;
use App\Repository\DeveloperRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class DeveloperTransformer implements DataTransformerInterface
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private DeveloperRepository $developerRepository,
    ) {
    }

    public function transform($developer): string
    {
        
        if (null === $developer) {
            dd($developer);
            return '';
        }

        dd($developer);
        return $developer->getId();
    }

    public function reverseTransform($developer): ?Developer
    {
        dd($developer);
        // no issue number? It's optional, so that's ok
        if (!$developer) {
            return null;
        }

        $issue = $this->developerRepository
            ->find($developer)
        ;


        return $issue;
    }
}