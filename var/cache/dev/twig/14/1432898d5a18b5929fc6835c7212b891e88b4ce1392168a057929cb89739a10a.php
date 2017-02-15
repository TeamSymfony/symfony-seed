<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c6f06d42be8bf90389e58359ef7b6d90c87b52f4126969fecd20e7ec7bc4287d extends Twig_Template
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
        $__internal_72e7d994acd487d4ac2c34c079b03f34a1bd7b165e88fb753ef1f8addd94c061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e7d994acd487d4ac2c34c079b03f34a1bd7b165e88fb753ef1f8addd94c061->enter($__internal_72e7d994acd487d4ac2c34c079b03f34a1bd7b165e88fb753ef1f8addd94c061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_e4e7518085aae256647e8f8500c84a5dac5df6d6e272879c7b3c42d97340dc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e7518085aae256647e8f8500c84a5dac5df6d6e272879c7b3c42d97340dc4c->enter($__internal_e4e7518085aae256647e8f8500c84a5dac5df6d6e272879c7b3c42d97340dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_72e7d994acd487d4ac2c34c079b03f34a1bd7b165e88fb753ef1f8addd94c061->leave($__internal_72e7d994acd487d4ac2c34c079b03f34a1bd7b165e88fb753ef1f8addd94c061_prof);

        
        $__internal_e4e7518085aae256647e8f8500c84a5dac5df6d6e272879c7b3c42d97340dc4c->leave($__internal_e4e7518085aae256647e8f8500c84a5dac5df6d6e272879c7b3c42d97340dc4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
