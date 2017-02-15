<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b92c25c5c9b2f32d8bbc27cab807545e111bb03e7b13183f129d14b34485e3a extends Twig_Template
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
        $__internal_e6f1a3bcfb9aa654ba13a264ee10faf9ab96fa9e00b7aed928bdfff25be3a33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6f1a3bcfb9aa654ba13a264ee10faf9ab96fa9e00b7aed928bdfff25be3a33b->enter($__internal_e6f1a3bcfb9aa654ba13a264ee10faf9ab96fa9e00b7aed928bdfff25be3a33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_dc257e443fc07eaf48b1e51fb8487c14b283bd2ccc4ce11724f903ad49581756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc257e443fc07eaf48b1e51fb8487c14b283bd2ccc4ce11724f903ad49581756->enter($__internal_dc257e443fc07eaf48b1e51fb8487c14b283bd2ccc4ce11724f903ad49581756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_e6f1a3bcfb9aa654ba13a264ee10faf9ab96fa9e00b7aed928bdfff25be3a33b->leave($__internal_e6f1a3bcfb9aa654ba13a264ee10faf9ab96fa9e00b7aed928bdfff25be3a33b_prof);

        
        $__internal_dc257e443fc07eaf48b1e51fb8487c14b283bd2ccc4ce11724f903ad49581756->leave($__internal_dc257e443fc07eaf48b1e51fb8487c14b283bd2ccc4ce11724f903ad49581756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
