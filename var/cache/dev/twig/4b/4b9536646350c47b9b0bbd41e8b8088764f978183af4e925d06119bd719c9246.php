<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_309d080f5974df84644bd4e4095d9e0c79c337c730538a651b6f3c6c15f236eb extends Twig_Template
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
        $__internal_fe9c5291763ffe72b11983a5ad54303dec8aa9f3da17ce14a7bd24991e31855d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9c5291763ffe72b11983a5ad54303dec8aa9f3da17ce14a7bd24991e31855d->enter($__internal_fe9c5291763ffe72b11983a5ad54303dec8aa9f3da17ce14a7bd24991e31855d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_711f1c9633c2347105496e95488ad8684553c018d5b2d2ff79adaf505f650205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711f1c9633c2347105496e95488ad8684553c018d5b2d2ff79adaf505f650205->enter($__internal_711f1c9633c2347105496e95488ad8684553c018d5b2d2ff79adaf505f650205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fe9c5291763ffe72b11983a5ad54303dec8aa9f3da17ce14a7bd24991e31855d->leave($__internal_fe9c5291763ffe72b11983a5ad54303dec8aa9f3da17ce14a7bd24991e31855d_prof);

        
        $__internal_711f1c9633c2347105496e95488ad8684553c018d5b2d2ff79adaf505f650205->leave($__internal_711f1c9633c2347105496e95488ad8684553c018d5b2d2ff79adaf505f650205_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
