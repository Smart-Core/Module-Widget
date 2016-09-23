<?php

namespace SmartCore\Module\Widget\Form\Type;

use SmartCore\Bundle\CMSBundle\Module\AbstractNodePropertiesFormType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

class NodePropertiesFormType extends AbstractNodePropertiesFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('node_id',    null,       ['required' => false, 'attr' => ['autofocus' => 'autofocus']])
            ->add('controller', null,       ['required' => false])
            ->add('params',     TextareaType::class, ['required' => false, 'attr' => ['cols' => 15, 'style' => 'height: 150px;']])
            ->add('tamplate_theme', TextType::class, ['required' => false])
            ->add('open_tag',   TextareaType::class, ['required' => false, 'attr' => ['cols' => 5,  'style' => 'height: 78px;']])
            ->add('close_tag',  TextareaType::class, ['required' => false, 'attr' => ['cols' => 5,  'style' => 'height: 78px;']])
        ;
    }

    public static function getTemplate()
    {
        return '@WidgetModule/node_properties_form.html.twig';
    }

    public function getBlockPrefix()
    {
        return 'smart_module_widget_node_properties';
    }
}
