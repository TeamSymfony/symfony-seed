<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0bf77a47730e02fcf23c94ec7e89c784ea00fe6ec14f2c3a6da988c62afea9a4 extends Twig_Template
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
        $__internal_ab54d20c304e1330443b1a3abf537e345b54b18399493fd3922644f7594e628a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab54d20c304e1330443b1a3abf537e345b54b18399493fd3922644f7594e628a->enter($__internal_ab54d20c304e1330443b1a3abf537e345b54b18399493fd3922644f7594e628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_a6f0a48983045c83d8807e6cf017416f741ca2b142c212194826a9cb7d6dc3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6f0a48983045c83d8807e6cf017416f741ca2b142c212194826a9cb7d6dc3c3->enter($__internal_a6f0a48983045c83d8807e6cf017416f741ca2b142c212194826a9cb7d6dc3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ab54d20c304e1330443b1a3abf537e345b54b18399493fd3922644f7594e628a->leave($__internal_ab54d20c304e1330443b1a3abf537e345b54b18399493fd3922644f7594e628a_prof);

        
        $__internal_a6f0a48983045c83d8807e6cf017416f741ca2b142c212194826a9cb7d6dc3c3->leave($__internal_a6f0a48983045c83d8807e6cf017416f741ca2b142c212194826a9cb7d6dc3c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
