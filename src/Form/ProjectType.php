<?php

namespace App\Form;

use App\Entity\Developer;
use App\Entity\Project;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use App\Form\DataTransformer\DeveloperTransformer;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProjectType extends AbstractType
{
    public function __construct(
        private DeveloperTransformer $transformer,
    ) {
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        $builder
            ->add('name')
            ->add('client')
            ->add('developers', EntityType::class, [
                'class' => Developer::class,
                'choice_label' => 'name',
                'multiple' => true,
            ])
        ;
        //dd($builder->add('name'));        
        //$builder->add('developers')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
