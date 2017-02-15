<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_d7dbf3db3bb7bed2a3f4feef7501c2394c961991fa14539e0d0c8dba0b6de77c extends Twig_Template
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
        $__internal_2abef6336830f338ccc781a25ac2c30b9dd347490995fda9aaa2815affffd0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2abef6336830f338ccc781a25ac2c30b9dd347490995fda9aaa2815affffd0f6->enter($__internal_2abef6336830f338ccc781a25ac2c30b9dd347490995fda9aaa2815affffd0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_274bb649b44977cd561d61bbe056e181f6f3d50a607f903c860237caf84ad09d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_274bb649b44977cd561d61bbe056e181f6f3d50a607f903c860237caf84ad09d->enter($__internal_274bb649b44977cd561d61bbe056e181f6f3d50a607f903c860237caf84ad09d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2abef6336830f338ccc781a25ac2c30b9dd347490995fda9aaa2815affffd0f6->leave($__internal_2abef6336830f338ccc781a25ac2c30b9dd347490995fda9aaa2815affffd0f6_prof);

        
        $__internal_274bb649b44977cd561d61bbe056e181f6f3d50a607f903c860237caf84ad09d->leave($__internal_274bb649b44977cd561d61bbe056e181f6f3d50a607f903c860237caf84ad09d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
