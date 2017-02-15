<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8a72aa64d0b831e00b010149ab4ce976eb1e3850427d11304701fa2c6628539c extends Twig_Template
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
        $__internal_85fdf47fe41e1848228a9d5c950a0a81f5015545092848433551c1df166f2a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85fdf47fe41e1848228a9d5c950a0a81f5015545092848433551c1df166f2a2c->enter($__internal_85fdf47fe41e1848228a9d5c950a0a81f5015545092848433551c1df166f2a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_774f1e36865726ab0000ab8f46d28c1ff3f2da149f9509d894f6fe5236c23e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_774f1e36865726ab0000ab8f46d28c1ff3f2da149f9509d894f6fe5236c23e0b->enter($__internal_774f1e36865726ab0000ab8f46d28c1ff3f2da149f9509d894f6fe5236c23e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_85fdf47fe41e1848228a9d5c950a0a81f5015545092848433551c1df166f2a2c->leave($__internal_85fdf47fe41e1848228a9d5c950a0a81f5015545092848433551c1df166f2a2c_prof);

        
        $__internal_774f1e36865726ab0000ab8f46d28c1ff3f2da149f9509d894f6fe5236c23e0b->leave($__internal_774f1e36865726ab0000ab8f46d28c1ff3f2da149f9509d894f6fe5236c23e0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
