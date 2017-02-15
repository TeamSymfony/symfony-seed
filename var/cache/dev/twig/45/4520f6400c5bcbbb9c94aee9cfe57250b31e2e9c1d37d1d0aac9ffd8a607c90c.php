<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_c68e8f3556d491c6a7920c412510dd2829b44d6b0957808f7a1412d0e2a0a883 extends Twig_Template
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
        $__internal_eeca9cdd900ccc9abe8d236f5b56c33ddb61606190be09a2fbd8934af81b3193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeca9cdd900ccc9abe8d236f5b56c33ddb61606190be09a2fbd8934af81b3193->enter($__internal_eeca9cdd900ccc9abe8d236f5b56c33ddb61606190be09a2fbd8934af81b3193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_0944f8ee9d031c4d58fc11d5e26b02c27ed5f59f29fd6b8ab6273c2a0bea6173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0944f8ee9d031c4d58fc11d5e26b02c27ed5f59f29fd6b8ab6273c2a0bea6173->enter($__internal_0944f8ee9d031c4d58fc11d5e26b02c27ed5f59f29fd6b8ab6273c2a0bea6173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_eeca9cdd900ccc9abe8d236f5b56c33ddb61606190be09a2fbd8934af81b3193->leave($__internal_eeca9cdd900ccc9abe8d236f5b56c33ddb61606190be09a2fbd8934af81b3193_prof);

        
        $__internal_0944f8ee9d031c4d58fc11d5e26b02c27ed5f59f29fd6b8ab6273c2a0bea6173->leave($__internal_0944f8ee9d031c4d58fc11d5e26b02c27ed5f59f29fd6b8ab6273c2a0bea6173_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
