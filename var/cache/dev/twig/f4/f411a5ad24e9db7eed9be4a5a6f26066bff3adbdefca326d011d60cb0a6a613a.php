<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_0798e37c38d513bea7b709472f00287adf735e9290f5e482edd74f4ecf2ed013 extends Twig_Template
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
        $__internal_ae95c7f287473a773f6af5e027b8182fdd9559639a523048bac32eb2dd0b7477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae95c7f287473a773f6af5e027b8182fdd9559639a523048bac32eb2dd0b7477->enter($__internal_ae95c7f287473a773f6af5e027b8182fdd9559639a523048bac32eb2dd0b7477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_0145cc8effe0c92bd985f541f920f1615f35411197ccd9b3e53db03ef3c7d0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0145cc8effe0c92bd985f541f920f1615f35411197ccd9b3e53db03ef3c7d0e2->enter($__internal_0145cc8effe0c92bd985f541f920f1615f35411197ccd9b3e53db03ef3c7d0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_ae95c7f287473a773f6af5e027b8182fdd9559639a523048bac32eb2dd0b7477->leave($__internal_ae95c7f287473a773f6af5e027b8182fdd9559639a523048bac32eb2dd0b7477_prof);

        
        $__internal_0145cc8effe0c92bd985f541f920f1615f35411197ccd9b3e53db03ef3c7d0e2->leave($__internal_0145cc8effe0c92bd985f541f920f1615f35411197ccd9b3e53db03ef3c7d0e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
