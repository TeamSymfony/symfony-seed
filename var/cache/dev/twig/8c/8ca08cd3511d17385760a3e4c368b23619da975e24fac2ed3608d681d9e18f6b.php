<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5dd881581bc15836809338988f2ffb1d30def9304e678fa262239ebe510c712a extends Twig_Template
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
        $__internal_dd5e5ea895d6696d674c8b8c12b91735f82e66615b869d45b9caf1bc080b41c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5e5ea895d6696d674c8b8c12b91735f82e66615b869d45b9caf1bc080b41c3->enter($__internal_dd5e5ea895d6696d674c8b8c12b91735f82e66615b869d45b9caf1bc080b41c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_aa84ff99ae221e9ad97bfe5878a028e3b57244d0475165cc69e2309848016284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa84ff99ae221e9ad97bfe5878a028e3b57244d0475165cc69e2309848016284->enter($__internal_aa84ff99ae221e9ad97bfe5878a028e3b57244d0475165cc69e2309848016284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_dd5e5ea895d6696d674c8b8c12b91735f82e66615b869d45b9caf1bc080b41c3->leave($__internal_dd5e5ea895d6696d674c8b8c12b91735f82e66615b869d45b9caf1bc080b41c3_prof);

        
        $__internal_aa84ff99ae221e9ad97bfe5878a028e3b57244d0475165cc69e2309848016284->leave($__internal_aa84ff99ae221e9ad97bfe5878a028e3b57244d0475165cc69e2309848016284_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
