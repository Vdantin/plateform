<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d83fc4eeb34c2db7cefba8177afa574c0dec1224418bc67d0a80bad939b7b2b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_477213e932f532bc138a02f441a12aba462036aba0f830f0f7c5d9f514bb06c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477213e932f532bc138a02f441a12aba462036aba0f830f0f7c5d9f514bb06c2->enter($__internal_477213e932f532bc138a02f441a12aba462036aba0f830f0f7c5d9f514bb06c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ed5aa15783cd98d58aa06b44d461b218ebcaeb7f342cf9ea88a976ea5a9e261c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5aa15783cd98d58aa06b44d461b218ebcaeb7f342cf9ea88a976ea5a9e261c->enter($__internal_ed5aa15783cd98d58aa06b44d461b218ebcaeb7f342cf9ea88a976ea5a9e261c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_477213e932f532bc138a02f441a12aba462036aba0f830f0f7c5d9f514bb06c2->leave($__internal_477213e932f532bc138a02f441a12aba462036aba0f830f0f7c5d9f514bb06c2_prof);

        
        $__internal_ed5aa15783cd98d58aa06b44d461b218ebcaeb7f342cf9ea88a976ea5a9e261c->leave($__internal_ed5aa15783cd98d58aa06b44d461b218ebcaeb7f342cf9ea88a976ea5a9e261c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a047a8ceef353f7c5959ea2a3b93e90ff6dbbb65fda76d5fc5c40cd6808a722c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a047a8ceef353f7c5959ea2a3b93e90ff6dbbb65fda76d5fc5c40cd6808a722c->enter($__internal_a047a8ceef353f7c5959ea2a3b93e90ff6dbbb65fda76d5fc5c40cd6808a722c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_281ff2087d5afda43d218a3f36a05ab2f5fd7ff660599ba62109a03f7055cf95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_281ff2087d5afda43d218a3f36a05ab2f5fd7ff660599ba62109a03f7055cf95->enter($__internal_281ff2087d5afda43d218a3f36a05ab2f5fd7ff660599ba62109a03f7055cf95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_281ff2087d5afda43d218a3f36a05ab2f5fd7ff660599ba62109a03f7055cf95->leave($__internal_281ff2087d5afda43d218a3f36a05ab2f5fd7ff660599ba62109a03f7055cf95_prof);

        
        $__internal_a047a8ceef353f7c5959ea2a3b93e90ff6dbbb65fda76d5fc5c40cd6808a722c->leave($__internal_a047a8ceef353f7c5959ea2a3b93e90ff6dbbb65fda76d5fc5c40cd6808a722c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
