<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_fea3a793720e7e3ca582497db3bcbbd044a3fdefbfd6759e0bc06bfffe26ad1b extends Twig_Template
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
        $__internal_78f6e3b629672ce21cac634eb6f398b325ee2ab172684e52132a48a7ca58d80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78f6e3b629672ce21cac634eb6f398b325ee2ab172684e52132a48a7ca58d80e->enter($__internal_78f6e3b629672ce21cac634eb6f398b325ee2ab172684e52132a48a7ca58d80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_7dbbfe47398dd041265a114acca8f69ac65b6f3fbc96f891375dfe3ee3891148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbbfe47398dd041265a114acca8f69ac65b6f3fbc96f891375dfe3ee3891148->enter($__internal_7dbbfe47398dd041265a114acca8f69ac65b6f3fbc96f891375dfe3ee3891148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_78f6e3b629672ce21cac634eb6f398b325ee2ab172684e52132a48a7ca58d80e->leave($__internal_78f6e3b629672ce21cac634eb6f398b325ee2ab172684e52132a48a7ca58d80e_prof);

        
        $__internal_7dbbfe47398dd041265a114acca8f69ac65b6f3fbc96f891375dfe3ee3891148->leave($__internal_7dbbfe47398dd041265a114acca8f69ac65b6f3fbc96f891375dfe3ee3891148_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
