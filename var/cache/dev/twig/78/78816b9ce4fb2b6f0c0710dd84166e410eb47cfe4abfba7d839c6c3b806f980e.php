<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_65cb3bc12bd1b53dab53bf8e0ca50a6d93882bad2bd31d200cde2cb8bf1ab86c extends Twig_Template
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
        $__internal_450c6f679b697f5b2ec5738b3bba41dc649fb87454fc6b977683964e8d1f5cf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_450c6f679b697f5b2ec5738b3bba41dc649fb87454fc6b977683964e8d1f5cf7->enter($__internal_450c6f679b697f5b2ec5738b3bba41dc649fb87454fc6b977683964e8d1f5cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2e5b73dc060a4e7e5734bce5ef44d45e5d44d19993c864bafb3c9b7e2ebec6f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5b73dc060a4e7e5734bce5ef44d45e5d44d19993c864bafb3c9b7e2ebec6f6->enter($__internal_2e5b73dc060a4e7e5734bce5ef44d45e5d44d19993c864bafb3c9b7e2ebec6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_450c6f679b697f5b2ec5738b3bba41dc649fb87454fc6b977683964e8d1f5cf7->leave($__internal_450c6f679b697f5b2ec5738b3bba41dc649fb87454fc6b977683964e8d1f5cf7_prof);

        
        $__internal_2e5b73dc060a4e7e5734bce5ef44d45e5d44d19993c864bafb3c9b7e2ebec6f6->leave($__internal_2e5b73dc060a4e7e5734bce5ef44d45e5d44d19993c864bafb3c9b7e2ebec6f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
