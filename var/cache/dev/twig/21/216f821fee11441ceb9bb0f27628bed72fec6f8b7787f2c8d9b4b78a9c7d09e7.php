<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_bbc52713541d035994e8865cb299655a6527c2d9a87235596b02f0d9ec8ee303 extends Twig_Template
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
        $__internal_1a3689f81a8fc5142c933a61d80468b2ae5e003053bb0f608b52301db4d6cc4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3689f81a8fc5142c933a61d80468b2ae5e003053bb0f608b52301db4d6cc4f->enter($__internal_1a3689f81a8fc5142c933a61d80468b2ae5e003053bb0f608b52301db4d6cc4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_3533d78df446544761f78fde3e26c2dde22ad8a0afc39a8d46892458c1762a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3533d78df446544761f78fde3e26c2dde22ad8a0afc39a8d46892458c1762a97->enter($__internal_3533d78df446544761f78fde3e26c2dde22ad8a0afc39a8d46892458c1762a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_1a3689f81a8fc5142c933a61d80468b2ae5e003053bb0f608b52301db4d6cc4f->leave($__internal_1a3689f81a8fc5142c933a61d80468b2ae5e003053bb0f608b52301db4d6cc4f_prof);

        
        $__internal_3533d78df446544761f78fde3e26c2dde22ad8a0afc39a8d46892458c1762a97->leave($__internal_3533d78df446544761f78fde3e26c2dde22ad8a0afc39a8d46892458c1762a97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
