<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Label;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('text', TextareaType::class)
            
->add('category', EntityType::class, [
    'class' => Category::class, 
    'choice_label' => 'name',
  'multiple' => false,
  'expanded' => false 
  ])
  ->add('labels', EntityType::class, [
    'class' => Label::class, 
    'choice_label' => 'name',
  'multiple' => true, 
  'expanded' => false

  ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
