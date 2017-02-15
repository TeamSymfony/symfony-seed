<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_14006793ff0e0fc11971a0eb9ccd995c1b59242fb07f6c2c641d8b3cbcf95cac extends Twig_Template
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
        $__internal_9f8f97557600ad223ccc3accbdb14ca4cbafbe6405bab87e8ed0ae6678f0be6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f8f97557600ad223ccc3accbdb14ca4cbafbe6405bab87e8ed0ae6678f0be6f->enter($__internal_9f8f97557600ad223ccc3accbdb14ca4cbafbe6405bab87e8ed0ae6678f0be6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_5d6eca78f7e6ba349340f5574956a6dcdd4eca6c49ddc1ad5df4b7ba9c61fa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6eca78f7e6ba349340f5574956a6dcdd4eca6c49ddc1ad5df4b7ba9c61fa37->enter($__internal_5d6eca78f7e6ba349340f5574956a6dcdd4eca6c49ddc1ad5df4b7ba9c61fa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9f8f97557600ad223ccc3accbdb14ca4cbafbe6405bab87e8ed0ae6678f0be6f->leave($__internal_9f8f97557600ad223ccc3accbdb14ca4cbafbe6405bab87e8ed0ae6678f0be6f_prof);

        
        $__internal_5d6eca78f7e6ba349340f5574956a6dcdd4eca6c49ddc1ad5df4b7ba9c61fa37->leave($__internal_5d6eca78f7e6ba349340f5574956a6dcdd4eca6c49ddc1ad5df4b7ba9c61fa37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
