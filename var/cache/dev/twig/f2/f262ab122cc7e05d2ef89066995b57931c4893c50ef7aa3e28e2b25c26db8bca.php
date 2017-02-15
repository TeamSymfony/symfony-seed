<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fe527007acf5d27a058d7cc714e187ad085376dff826d0e7e109bf7efeaf0710 extends Twig_Template
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
        $__internal_ba10fb0657160194e4267421a4fe778fd726b8a406313db3d66427d48fce70cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba10fb0657160194e4267421a4fe778fd726b8a406313db3d66427d48fce70cc->enter($__internal_ba10fb0657160194e4267421a4fe778fd726b8a406313db3d66427d48fce70cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_b5e8d0ad76b290574f9bc16dd9c582b71117928313b1b216f9f92019c3195908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5e8d0ad76b290574f9bc16dd9c582b71117928313b1b216f9f92019c3195908->enter($__internal_b5e8d0ad76b290574f9bc16dd9c582b71117928313b1b216f9f92019c3195908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_ba10fb0657160194e4267421a4fe778fd726b8a406313db3d66427d48fce70cc->leave($__internal_ba10fb0657160194e4267421a4fe778fd726b8a406313db3d66427d48fce70cc_prof);

        
        $__internal_b5e8d0ad76b290574f9bc16dd9c582b71117928313b1b216f9f92019c3195908->leave($__internal_b5e8d0ad76b290574f9bc16dd9c582b71117928313b1b216f9f92019c3195908_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/brian/projects/tht/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
