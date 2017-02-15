<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_43cfa4df6fa507a07dd290b4b81fca69b70f03cab0b64e18100a287cfa1b70c6 extends Twig_Template
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
        $__internal_5d87972ff9a3f4c06422ebb10f9e7d0c99043cfb1550b1864b1950b8e8b95b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d87972ff9a3f4c06422ebb10f9e7d0c99043cfb1550b1864b1950b8e8b95b9d->enter($__internal_5d87972ff9a3f4c06422ebb10f9e7d0c99043cfb1550b1864b1950b8e8b95b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_58e99338c03fbb5ebf0518c8d9e7d3cd49af197d21cd6c738bbb2804a36dcd11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e99338c03fbb5ebf0518c8d9e7d3cd49af197d21cd6c738bbb2804a36dcd11->enter($__internal_58e99338c03fbb5ebf0518c8d9e7d3cd49af197d21cd6c738bbb2804a36dcd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_5d87972ff9a3f4c06422ebb10f9e7d0c99043cfb1550b1864b1950b8e8b95b9d->leave($__internal_5d87972ff9a3f4c06422ebb10f9e7d0c99043cfb1550b1864b1950b8e8b95b9d_prof);

        
        $__internal_58e99338c03fbb5ebf0518c8d9e7d3cd49af197d21cd6c738bbb2804a36dcd11->leave($__internal_58e99338c03fbb5ebf0518c8d9e7d3cd49af197d21cd6c738bbb2804a36dcd11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
