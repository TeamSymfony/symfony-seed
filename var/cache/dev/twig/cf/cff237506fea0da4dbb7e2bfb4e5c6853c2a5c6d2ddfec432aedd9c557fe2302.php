<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_ec0baa71115482ab6e4854145f4780a8cbbd41afabbc80ad2a6bb33c9d72a774 extends Twig_Template
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
        $__internal_21b69b22b9de1597eeb2a77b1bba26dc333c5a3a0d10ea91e75c91b83f73655b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b69b22b9de1597eeb2a77b1bba26dc333c5a3a0d10ea91e75c91b83f73655b->enter($__internal_21b69b22b9de1597eeb2a77b1bba26dc333c5a3a0d10ea91e75c91b83f73655b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_7f27cf8faa200bbc8239066d1e43d1b8096e629337d764e505fa72baca12d066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f27cf8faa200bbc8239066d1e43d1b8096e629337d764e505fa72baca12d066->enter($__internal_7f27cf8faa200bbc8239066d1e43d1b8096e629337d764e505fa72baca12d066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_21b69b22b9de1597eeb2a77b1bba26dc333c5a3a0d10ea91e75c91b83f73655b->leave($__internal_21b69b22b9de1597eeb2a77b1bba26dc333c5a3a0d10ea91e75c91b83f73655b_prof);

        
        $__internal_7f27cf8faa200bbc8239066d1e43d1b8096e629337d764e505fa72baca12d066->leave($__internal_7f27cf8faa200bbc8239066d1e43d1b8096e629337d764e505fa72baca12d066_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
