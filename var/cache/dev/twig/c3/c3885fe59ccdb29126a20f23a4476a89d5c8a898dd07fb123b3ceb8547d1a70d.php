<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0f6de42a1a53f5be1ea6a0d6c7606bb03e820e11f05ccf5451bde1458703062e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c63ec0e4d9d83b0bf54a8fe8e17ebb1396bad16748805a51b0c6a6110a7a2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c63ec0e4d9d83b0bf54a8fe8e17ebb1396bad16748805a51b0c6a6110a7a2ce->enter($__internal_1c63ec0e4d9d83b0bf54a8fe8e17ebb1396bad16748805a51b0c6a6110a7a2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0a788330711ce4e3c16fa5231271f7fc3f9fa10bb2c81e7d479ce1de35528efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a788330711ce4e3c16fa5231271f7fc3f9fa10bb2c81e7d479ce1de35528efb->enter($__internal_0a788330711ce4e3c16fa5231271f7fc3f9fa10bb2c81e7d479ce1de35528efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c63ec0e4d9d83b0bf54a8fe8e17ebb1396bad16748805a51b0c6a6110a7a2ce->leave($__internal_1c63ec0e4d9d83b0bf54a8fe8e17ebb1396bad16748805a51b0c6a6110a7a2ce_prof);

        
        $__internal_0a788330711ce4e3c16fa5231271f7fc3f9fa10bb2c81e7d479ce1de35528efb->leave($__internal_0a788330711ce4e3c16fa5231271f7fc3f9fa10bb2c81e7d479ce1de35528efb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_392b8778682d4983fa868667a4ce3cccae6c46787b245e1ef34391fbcb572212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392b8778682d4983fa868667a4ce3cccae6c46787b245e1ef34391fbcb572212->enter($__internal_392b8778682d4983fa868667a4ce3cccae6c46787b245e1ef34391fbcb572212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0506d23c73d8bdacd1e59cfcb645595ac30a5ea4c431f9eb8129e641fedc8254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0506d23c73d8bdacd1e59cfcb645595ac30a5ea4c431f9eb8129e641fedc8254->enter($__internal_0506d23c73d8bdacd1e59cfcb645595ac30a5ea4c431f9eb8129e641fedc8254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0506d23c73d8bdacd1e59cfcb645595ac30a5ea4c431f9eb8129e641fedc8254->leave($__internal_0506d23c73d8bdacd1e59cfcb645595ac30a5ea4c431f9eb8129e641fedc8254_prof);

        
        $__internal_392b8778682d4983fa868667a4ce3cccae6c46787b245e1ef34391fbcb572212->leave($__internal_392b8778682d4983fa868667a4ce3cccae6c46787b245e1ef34391fbcb572212_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d8b9d19de5449f25251f7110f84af4aadd7c9a711eb77b71e1a8004e2aa37d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d8b9d19de5449f25251f7110f84af4aadd7c9a711eb77b71e1a8004e2aa37d6->enter($__internal_5d8b9d19de5449f25251f7110f84af4aadd7c9a711eb77b71e1a8004e2aa37d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_95788e9d004b132b328e6c532ac21605191a048dbe676e8184b4fa6f03b25228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95788e9d004b132b328e6c532ac21605191a048dbe676e8184b4fa6f03b25228->enter($__internal_95788e9d004b132b328e6c532ac21605191a048dbe676e8184b4fa6f03b25228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_95788e9d004b132b328e6c532ac21605191a048dbe676e8184b4fa6f03b25228->leave($__internal_95788e9d004b132b328e6c532ac21605191a048dbe676e8184b4fa6f03b25228_prof);

        
        $__internal_5d8b9d19de5449f25251f7110f84af4aadd7c9a711eb77b71e1a8004e2aa37d6->leave($__internal_5d8b9d19de5449f25251f7110f84af4aadd7c9a711eb77b71e1a8004e2aa37d6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb91269b62eb1cc18d9bf7427a00faf4a2eba1c95b15e866d05fadd42769610d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb91269b62eb1cc18d9bf7427a00faf4a2eba1c95b15e866d05fadd42769610d->enter($__internal_cb91269b62eb1cc18d9bf7427a00faf4a2eba1c95b15e866d05fadd42769610d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_daffe56d0b7ac7864019c4cde9caba05e0bc3a1bbfcc2d2ed5cca986da58f8d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daffe56d0b7ac7864019c4cde9caba05e0bc3a1bbfcc2d2ed5cca986da58f8d4->enter($__internal_daffe56d0b7ac7864019c4cde9caba05e0bc3a1bbfcc2d2ed5cca986da58f8d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_daffe56d0b7ac7864019c4cde9caba05e0bc3a1bbfcc2d2ed5cca986da58f8d4->leave($__internal_daffe56d0b7ac7864019c4cde9caba05e0bc3a1bbfcc2d2ed5cca986da58f8d4_prof);

        
        $__internal_cb91269b62eb1cc18d9bf7427a00faf4a2eba1c95b15e866d05fadd42769610d->leave($__internal_cb91269b62eb1cc18d9bf7427a00faf4a2eba1c95b15e866d05fadd42769610d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
