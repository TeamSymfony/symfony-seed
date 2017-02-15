<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_928c700f1bd55e7d3ce8c237ede9f16eb961626e4bf9ade239529ad63438dae4 extends Twig_Template
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
        $__internal_a5543925753c2e2cf701b6f1638fb28d89ad28d91847699c6c0df78a7e43ebfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5543925753c2e2cf701b6f1638fb28d89ad28d91847699c6c0df78a7e43ebfa->enter($__internal_a5543925753c2e2cf701b6f1638fb28d89ad28d91847699c6c0df78a7e43ebfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f769088c34d2f8f81d8ba08d5699c3f805cd5fca922ae6421d10abbe20586b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f769088c34d2f8f81d8ba08d5699c3f805cd5fca922ae6421d10abbe20586b7d->enter($__internal_f769088c34d2f8f81d8ba08d5699c3f805cd5fca922ae6421d10abbe20586b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_a5543925753c2e2cf701b6f1638fb28d89ad28d91847699c6c0df78a7e43ebfa->leave($__internal_a5543925753c2e2cf701b6f1638fb28d89ad28d91847699c6c0df78a7e43ebfa_prof);

        
        $__internal_f769088c34d2f8f81d8ba08d5699c3f805cd5fca922ae6421d10abbe20586b7d->leave($__internal_f769088c34d2f8f81d8ba08d5699c3f805cd5fca922ae6421d10abbe20586b7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
