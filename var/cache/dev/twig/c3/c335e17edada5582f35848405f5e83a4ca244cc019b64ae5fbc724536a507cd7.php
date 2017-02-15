<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9c854dee4c01cfc49af56dcdb13b73fdc20856c51455b844d0c3a16eefcc6a8e extends Twig_Template
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
        $__internal_db1e30bdf7e5383b063a9c89005300bf22d62adac302daa9f5747ceb1e70568c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1e30bdf7e5383b063a9c89005300bf22d62adac302daa9f5747ceb1e70568c->enter($__internal_db1e30bdf7e5383b063a9c89005300bf22d62adac302daa9f5747ceb1e70568c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4deef2f3322798c13aaec22b4d48659cbbf7d70c5c10ea1e6d09bd6f05cc9775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4deef2f3322798c13aaec22b4d48659cbbf7d70c5c10ea1e6d09bd6f05cc9775->enter($__internal_4deef2f3322798c13aaec22b4d48659cbbf7d70c5c10ea1e6d09bd6f05cc9775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db1e30bdf7e5383b063a9c89005300bf22d62adac302daa9f5747ceb1e70568c->leave($__internal_db1e30bdf7e5383b063a9c89005300bf22d62adac302daa9f5747ceb1e70568c_prof);

        
        $__internal_4deef2f3322798c13aaec22b4d48659cbbf7d70c5c10ea1e6d09bd6f05cc9775->leave($__internal_4deef2f3322798c13aaec22b4d48659cbbf7d70c5c10ea1e6d09bd6f05cc9775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
