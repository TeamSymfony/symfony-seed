<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5f7f61921ec5c339e934589c7c52d155c10fe04a2a1cbf4f49455877d8fb9fa1 extends Twig_Template
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
        $__internal_38c143d078df16c8676a476f7aee242ba20d1b83c34fed1e4dcbbf490b6d7923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c143d078df16c8676a476f7aee242ba20d1b83c34fed1e4dcbbf490b6d7923->enter($__internal_38c143d078df16c8676a476f7aee242ba20d1b83c34fed1e4dcbbf490b6d7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7ce9eb04c2c1c083af4a9cbedf5068aa124e43207704eab491aedf9ae92cb6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce9eb04c2c1c083af4a9cbedf5068aa124e43207704eab491aedf9ae92cb6ae->enter($__internal_7ce9eb04c2c1c083af4a9cbedf5068aa124e43207704eab491aedf9ae92cb6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_38c143d078df16c8676a476f7aee242ba20d1b83c34fed1e4dcbbf490b6d7923->leave($__internal_38c143d078df16c8676a476f7aee242ba20d1b83c34fed1e4dcbbf490b6d7923_prof);

        
        $__internal_7ce9eb04c2c1c083af4a9cbedf5068aa124e43207704eab491aedf9ae92cb6ae->leave($__internal_7ce9eb04c2c1c083af4a9cbedf5068aa124e43207704eab491aedf9ae92cb6ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
