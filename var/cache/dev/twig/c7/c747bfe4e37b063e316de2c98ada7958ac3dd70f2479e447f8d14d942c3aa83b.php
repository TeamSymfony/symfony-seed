<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_800f4e1d615cc6e5b9bf0396d970c5c5af0ec9457cfb7f892033d5409c97b512 extends Twig_Template
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
        $__internal_1f1d0a1a581b2f28447c1fa7d91b1e465aa5d838d91c5e152cb4004c1a6dc3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f1d0a1a581b2f28447c1fa7d91b1e465aa5d838d91c5e152cb4004c1a6dc3d4->enter($__internal_1f1d0a1a581b2f28447c1fa7d91b1e465aa5d838d91c5e152cb4004c1a6dc3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_31830d6032b616fa8bef6f42e7dc1e14cbaf2405d530f605ee24828ecb86e458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31830d6032b616fa8bef6f42e7dc1e14cbaf2405d530f605ee24828ecb86e458->enter($__internal_31830d6032b616fa8bef6f42e7dc1e14cbaf2405d530f605ee24828ecb86e458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, ($context["year"] ?? $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["month"] ?? $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, ($context["day"] ?? $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f1d0a1a581b2f28447c1fa7d91b1e465aa5d838d91c5e152cb4004c1a6dc3d4->leave($__internal_1f1d0a1a581b2f28447c1fa7d91b1e465aa5d838d91c5e152cb4004c1a6dc3d4_prof);

        
        $__internal_31830d6032b616fa8bef6f42e7dc1e14cbaf2405d530f605ee24828ecb86e458->leave($__internal_31830d6032b616fa8bef6f42e7dc1e14cbaf2405d530f605ee24828ecb86e458_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/date_widget.html.php");
    }
}
