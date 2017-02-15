<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa15f58eb5b23ff33096a330603351099836f7a58ca0137ee1746301f0e7d28e extends Twig_Template
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
        $__internal_2d62cebf169a675177c9824eef6c5f9e08925054bae1f10b2e0ed759f89a5235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d62cebf169a675177c9824eef6c5f9e08925054bae1f10b2e0ed759f89a5235->enter($__internal_2d62cebf169a675177c9824eef6c5f9e08925054bae1f10b2e0ed759f89a5235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_059c0ed46f7fceab3854de382d6752d0ccf45bc25a7df253d7f083a333616364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_059c0ed46f7fceab3854de382d6752d0ccf45bc25a7df253d7f083a333616364->enter($__internal_059c0ed46f7fceab3854de382d6752d0ccf45bc25a7df253d7f083a333616364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2d62cebf169a675177c9824eef6c5f9e08925054bae1f10b2e0ed759f89a5235->leave($__internal_2d62cebf169a675177c9824eef6c5f9e08925054bae1f10b2e0ed759f89a5235_prof);

        
        $__internal_059c0ed46f7fceab3854de382d6752d0ccf45bc25a7df253d7f083a333616364->leave($__internal_059c0ed46f7fceab3854de382d6752d0ccf45bc25a7df253d7f083a333616364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
