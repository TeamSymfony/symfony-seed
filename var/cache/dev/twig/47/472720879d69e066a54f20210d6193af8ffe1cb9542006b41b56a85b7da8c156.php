<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e604c17d60b9bbb8f9cac0322a678f018970625992eb1bc06a579c5eff88914b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79873e85039fa3bb238bab9da253d5a73b22b62ff8a2698e1976c1c207590884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79873e85039fa3bb238bab9da253d5a73b22b62ff8a2698e1976c1c207590884->enter($__internal_79873e85039fa3bb238bab9da253d5a73b22b62ff8a2698e1976c1c207590884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2159f9ad161505032f4404eba64c418c9c3278b5a56a29cc505f0b1cdd70b4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2159f9ad161505032f4404eba64c418c9c3278b5a56a29cc505f0b1cdd70b4c8->enter($__internal_2159f9ad161505032f4404eba64c418c9c3278b5a56a29cc505f0b1cdd70b4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_79873e85039fa3bb238bab9da253d5a73b22b62ff8a2698e1976c1c207590884->leave($__internal_79873e85039fa3bb238bab9da253d5a73b22b62ff8a2698e1976c1c207590884_prof);

        
        $__internal_2159f9ad161505032f4404eba64c418c9c3278b5a56a29cc505f0b1cdd70b4c8->leave($__internal_2159f9ad161505032f4404eba64c418c9c3278b5a56a29cc505f0b1cdd70b4c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
