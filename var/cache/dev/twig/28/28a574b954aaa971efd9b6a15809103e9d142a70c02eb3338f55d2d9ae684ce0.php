<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_48a9fb388dc0766d884c9606f4b4cc46b7a959692cb4fc2a88e9557df80e099b extends Twig_Template
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
        $__internal_4aa4ec72aa5802baa2d26ddfce21c5c52ab7c2f419009dc60e464424284578f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa4ec72aa5802baa2d26ddfce21c5c52ab7c2f419009dc60e464424284578f4->enter($__internal_4aa4ec72aa5802baa2d26ddfce21c5c52ab7c2f419009dc60e464424284578f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_eaf673d68439fdb281a0c0bd0242a31f9c6c50b4dd2bfa1cf4558c9fa9723805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf673d68439fdb281a0c0bd0242a31f9c6c50b4dd2bfa1cf4558c9fa9723805->enter($__internal_eaf673d68439fdb281a0c0bd0242a31f9c6c50b4dd2bfa1cf4558c9fa9723805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4aa4ec72aa5802baa2d26ddfce21c5c52ab7c2f419009dc60e464424284578f4->leave($__internal_4aa4ec72aa5802baa2d26ddfce21c5c52ab7c2f419009dc60e464424284578f4_prof);

        
        $__internal_eaf673d68439fdb281a0c0bd0242a31f9c6c50b4dd2bfa1cf4558c9fa9723805->leave($__internal_eaf673d68439fdb281a0c0bd0242a31f9c6c50b4dd2bfa1cf4558c9fa9723805_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
