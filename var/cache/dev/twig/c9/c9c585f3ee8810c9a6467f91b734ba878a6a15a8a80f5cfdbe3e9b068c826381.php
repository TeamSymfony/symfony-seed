<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3bad7450074ba7743855011c96717adf4a3b177996b5c74cc2aa439f6c0a2c28 extends Twig_Template
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
        $__internal_819ea55a652902709daa13c501ea04834ffa2df219e9e56a20f7eddf3fec6cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819ea55a652902709daa13c501ea04834ffa2df219e9e56a20f7eddf3fec6cde->enter($__internal_819ea55a652902709daa13c501ea04834ffa2df219e9e56a20f7eddf3fec6cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_952623143bb37928d7a4465b6c9f2b006c9a8106ad92705c321429350f279113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952623143bb37928d7a4465b6c9f2b006c9a8106ad92705c321429350f279113->enter($__internal_952623143bb37928d7a4465b6c9f2b006c9a8106ad92705c321429350f279113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_819ea55a652902709daa13c501ea04834ffa2df219e9e56a20f7eddf3fec6cde->leave($__internal_819ea55a652902709daa13c501ea04834ffa2df219e9e56a20f7eddf3fec6cde_prof);

        
        $__internal_952623143bb37928d7a4465b6c9f2b006c9a8106ad92705c321429350f279113->leave($__internal_952623143bb37928d7a4465b6c9f2b006c9a8106ad92705c321429350f279113_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
