<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_69aeb742a2a0171da239a329bd3e34cc27cd7f0ecb86822e84daac69a1052133 extends Twig_Template
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
        $__internal_beef9eebfbd599c4bcd3861fdb73fd670c47098667faf5d3e86e4bdc06e983ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beef9eebfbd599c4bcd3861fdb73fd670c47098667faf5d3e86e4bdc06e983ed->enter($__internal_beef9eebfbd599c4bcd3861fdb73fd670c47098667faf5d3e86e4bdc06e983ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a5d21d2c0b6d3e188bd8bfba43fa6a514570aa75379303548f735ebd23295f4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5d21d2c0b6d3e188bd8bfba43fa6a514570aa75379303548f735ebd23295f4f->enter($__internal_a5d21d2c0b6d3e188bd8bfba43fa6a514570aa75379303548f735ebd23295f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_beef9eebfbd599c4bcd3861fdb73fd670c47098667faf5d3e86e4bdc06e983ed->leave($__internal_beef9eebfbd599c4bcd3861fdb73fd670c47098667faf5d3e86e4bdc06e983ed_prof);

        
        $__internal_a5d21d2c0b6d3e188bd8bfba43fa6a514570aa75379303548f735ebd23295f4f->leave($__internal_a5d21d2c0b6d3e188bd8bfba43fa6a514570aa75379303548f735ebd23295f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
