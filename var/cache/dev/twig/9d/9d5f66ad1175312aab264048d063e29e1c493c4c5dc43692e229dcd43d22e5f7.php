<?php

/* base.html.twig */
class __TwigTemplate_d81bae7d5325a7f23ba92e849144467ab8ed2421c201cbf1d70c17582ad76de7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_675c9b77a7cd2dc806512e28ba16dfece030650f162d64179f4f3842654a79db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675c9b77a7cd2dc806512e28ba16dfece030650f162d64179f4f3842654a79db->enter($__internal_675c9b77a7cd2dc806512e28ba16dfece030650f162d64179f4f3842654a79db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_5bb3de93317e57cf12650ddfe9919c215a005c0608bd34f70dea56ea7d113705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb3de93317e57cf12650ddfe9919c215a005c0608bd34f70dea56ea7d113705->enter($__internal_5bb3de93317e57cf12650ddfe9919c215a005c0608bd34f70dea56ea7d113705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_675c9b77a7cd2dc806512e28ba16dfece030650f162d64179f4f3842654a79db->leave($__internal_675c9b77a7cd2dc806512e28ba16dfece030650f162d64179f4f3842654a79db_prof);

        
        $__internal_5bb3de93317e57cf12650ddfe9919c215a005c0608bd34f70dea56ea7d113705->leave($__internal_5bb3de93317e57cf12650ddfe9919c215a005c0608bd34f70dea56ea7d113705_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4905e82e3d0f5e01904aa902fdd2da59a55fd6189c4f5232e8db7cac3c59ba23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4905e82e3d0f5e01904aa902fdd2da59a55fd6189c4f5232e8db7cac3c59ba23->enter($__internal_4905e82e3d0f5e01904aa902fdd2da59a55fd6189c4f5232e8db7cac3c59ba23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e90ca21ab082929d0aacc09dc286213e3f8cb02771762cbdec69ab57a8a2e13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90ca21ab082929d0aacc09dc286213e3f8cb02771762cbdec69ab57a8a2e13c->enter($__internal_e90ca21ab082929d0aacc09dc286213e3f8cb02771762cbdec69ab57a8a2e13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e90ca21ab082929d0aacc09dc286213e3f8cb02771762cbdec69ab57a8a2e13c->leave($__internal_e90ca21ab082929d0aacc09dc286213e3f8cb02771762cbdec69ab57a8a2e13c_prof);

        
        $__internal_4905e82e3d0f5e01904aa902fdd2da59a55fd6189c4f5232e8db7cac3c59ba23->leave($__internal_4905e82e3d0f5e01904aa902fdd2da59a55fd6189c4f5232e8db7cac3c59ba23_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_521341ccaa3727fc3af9d5e7eeeedc892995668c688593384602e4121cd3c811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521341ccaa3727fc3af9d5e7eeeedc892995668c688593384602e4121cd3c811->enter($__internal_521341ccaa3727fc3af9d5e7eeeedc892995668c688593384602e4121cd3c811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c15c77e2001e7bca3222c84c6d46e2188458aa696652ae12c48a50465c98de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c15c77e2001e7bca3222c84c6d46e2188458aa696652ae12c48a50465c98de0->enter($__internal_5c15c77e2001e7bca3222c84c6d46e2188458aa696652ae12c48a50465c98de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c15c77e2001e7bca3222c84c6d46e2188458aa696652ae12c48a50465c98de0->leave($__internal_5c15c77e2001e7bca3222c84c6d46e2188458aa696652ae12c48a50465c98de0_prof);

        
        $__internal_521341ccaa3727fc3af9d5e7eeeedc892995668c688593384602e4121cd3c811->leave($__internal_521341ccaa3727fc3af9d5e7eeeedc892995668c688593384602e4121cd3c811_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e27f535e0dbd7dfdc315d1e3e1b79756f51e3ec540c0706d4a3d62303ca67c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e27f535e0dbd7dfdc315d1e3e1b79756f51e3ec540c0706d4a3d62303ca67c99->enter($__internal_e27f535e0dbd7dfdc315d1e3e1b79756f51e3ec540c0706d4a3d62303ca67c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9df74acf22f3c7a9099a8023a8f99a71747bedfdaf75851cefdd1e0cdb6d3724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df74acf22f3c7a9099a8023a8f99a71747bedfdaf75851cefdd1e0cdb6d3724->enter($__internal_9df74acf22f3c7a9099a8023a8f99a71747bedfdaf75851cefdd1e0cdb6d3724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9df74acf22f3c7a9099a8023a8f99a71747bedfdaf75851cefdd1e0cdb6d3724->leave($__internal_9df74acf22f3c7a9099a8023a8f99a71747bedfdaf75851cefdd1e0cdb6d3724_prof);

        
        $__internal_e27f535e0dbd7dfdc315d1e3e1b79756f51e3ec540c0706d4a3d62303ca67c99->leave($__internal_e27f535e0dbd7dfdc315d1e3e1b79756f51e3ec540c0706d4a3d62303ca67c99_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_32ef4bd2307cf96d99ff97cfea8facd569a34b96f2344c493a9c67be88746f23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ef4bd2307cf96d99ff97cfea8facd569a34b96f2344c493a9c67be88746f23->enter($__internal_32ef4bd2307cf96d99ff97cfea8facd569a34b96f2344c493a9c67be88746f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88818cefcff5977440f26ab95e945c393b54211b79ecd1bbca8e25dcb7db9452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88818cefcff5977440f26ab95e945c393b54211b79ecd1bbca8e25dcb7db9452->enter($__internal_88818cefcff5977440f26ab95e945c393b54211b79ecd1bbca8e25dcb7db9452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88818cefcff5977440f26ab95e945c393b54211b79ecd1bbca8e25dcb7db9452->leave($__internal_88818cefcff5977440f26ab95e945c393b54211b79ecd1bbca8e25dcb7db9452_prof);

        
        $__internal_32ef4bd2307cf96d99ff97cfea8facd569a34b96f2344c493a9c67be88746f23->leave($__internal_32ef4bd2307cf96d99ff97cfea8facd569a34b96f2344c493a9c67be88746f23_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/brian/projects/tht/app/Resources/views/base.html.twig");
    }
}
