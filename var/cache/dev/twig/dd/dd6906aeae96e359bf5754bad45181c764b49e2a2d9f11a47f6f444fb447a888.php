<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9553fa96834c0ab4dcb8de3e70f72131636b26386dd26bde3b020531765d74b9 extends Twig_Template
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
        $__internal_e200870e9fda0590dcec9c297cb0d9ac0e404db8cae976b3834beddc053e08de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e200870e9fda0590dcec9c297cb0d9ac0e404db8cae976b3834beddc053e08de->enter($__internal_e200870e9fda0590dcec9c297cb0d9ac0e404db8cae976b3834beddc053e08de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_d4a1e77d73e8b67b77c0a588ce13caac7beb48398bf4509054be204daa91bc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4a1e77d73e8b67b77c0a588ce13caac7beb48398bf4509054be204daa91bc70->enter($__internal_d4a1e77d73e8b67b77c0a588ce13caac7beb48398bf4509054be204daa91bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e200870e9fda0590dcec9c297cb0d9ac0e404db8cae976b3834beddc053e08de->leave($__internal_e200870e9fda0590dcec9c297cb0d9ac0e404db8cae976b3834beddc053e08de_prof);

        
        $__internal_d4a1e77d73e8b67b77c0a588ce13caac7beb48398bf4509054be204daa91bc70->leave($__internal_d4a1e77d73e8b67b77c0a588ce13caac7beb48398bf4509054be204daa91bc70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
