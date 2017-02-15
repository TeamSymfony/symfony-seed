<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a3115c01f0f98af2e3fa2fd019f03553964fb6866ffe8d8c011a7e57ec5b13ac extends Twig_Template
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
        $__internal_09df21eb9ca3dbbc9773109d4a1d3a6ccbf1d5c7a61b8e0b830c2162c314f555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09df21eb9ca3dbbc9773109d4a1d3a6ccbf1d5c7a61b8e0b830c2162c314f555->enter($__internal_09df21eb9ca3dbbc9773109d4a1d3a6ccbf1d5c7a61b8e0b830c2162c314f555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a2c8dd738c56d9ab61412f90bd8e1d9eb4f59cafba6ebf34e06a21655ee8f97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2c8dd738c56d9ab61412f90bd8e1d9eb4f59cafba6ebf34e06a21655ee8f97e->enter($__internal_a2c8dd738c56d9ab61412f90bd8e1d9eb4f59cafba6ebf34e06a21655ee8f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_09df21eb9ca3dbbc9773109d4a1d3a6ccbf1d5c7a61b8e0b830c2162c314f555->leave($__internal_09df21eb9ca3dbbc9773109d4a1d3a6ccbf1d5c7a61b8e0b830c2162c314f555_prof);

        
        $__internal_a2c8dd738c56d9ab61412f90bd8e1d9eb4f59cafba6ebf34e06a21655ee8f97e->leave($__internal_a2c8dd738c56d9ab61412f90bd8e1d9eb4f59cafba6ebf34e06a21655ee8f97e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
