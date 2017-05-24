<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8a31bbf6d27b61e74fed2c97266af7cf11e8909fb03298bf8178e142ab470eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bdf8d36a5b294737e4d1022403d632b519af597a6f2c9745614e5b676b3304db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdf8d36a5b294737e4d1022403d632b519af597a6f2c9745614e5b676b3304db->enter($__internal_bdf8d36a5b294737e4d1022403d632b519af597a6f2c9745614e5b676b3304db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c1809e0fe61d332e38a3c47922363f385c2e67d68a5918e0bafa2be3a952b671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1809e0fe61d332e38a3c47922363f385c2e67d68a5918e0bafa2be3a952b671->enter($__internal_c1809e0fe61d332e38a3c47922363f385c2e67d68a5918e0bafa2be3a952b671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf8d36a5b294737e4d1022403d632b519af597a6f2c9745614e5b676b3304db->leave($__internal_bdf8d36a5b294737e4d1022403d632b519af597a6f2c9745614e5b676b3304db_prof);

        
        $__internal_c1809e0fe61d332e38a3c47922363f385c2e67d68a5918e0bafa2be3a952b671->leave($__internal_c1809e0fe61d332e38a3c47922363f385c2e67d68a5918e0bafa2be3a952b671_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e915f5d0e00ddf5e5a6562e4d06e5f1290c5a5523b47d21f38977d71afbfbd09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e915f5d0e00ddf5e5a6562e4d06e5f1290c5a5523b47d21f38977d71afbfbd09->enter($__internal_e915f5d0e00ddf5e5a6562e4d06e5f1290c5a5523b47d21f38977d71afbfbd09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0ba2f97b4bbb1f69609e8f123248ef151b62751897ab66fb3dc1e3d2a4fe7c87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba2f97b4bbb1f69609e8f123248ef151b62751897ab66fb3dc1e3d2a4fe7c87->enter($__internal_0ba2f97b4bbb1f69609e8f123248ef151b62751897ab66fb3dc1e3d2a4fe7c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_0ba2f97b4bbb1f69609e8f123248ef151b62751897ab66fb3dc1e3d2a4fe7c87->leave($__internal_0ba2f97b4bbb1f69609e8f123248ef151b62751897ab66fb3dc1e3d2a4fe7c87_prof);

        
        $__internal_e915f5d0e00ddf5e5a6562e4d06e5f1290c5a5523b47d21f38977d71afbfbd09->leave($__internal_e915f5d0e00ddf5e5a6562e4d06e5f1290c5a5523b47d21f38977d71afbfbd09_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_54b88e26d82d0ff95f9060429a881d606f1d092a60c52ac47fee820f8c438439 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b88e26d82d0ff95f9060429a881d606f1d092a60c52ac47fee820f8c438439->enter($__internal_54b88e26d82d0ff95f9060429a881d606f1d092a60c52ac47fee820f8c438439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_509e2012445a0cc799410f228734f18e85bee78023d74729ae675cc21a4d89c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509e2012445a0cc799410f228734f18e85bee78023d74729ae675cc21a4d89c4->enter($__internal_509e2012445a0cc799410f228734f18e85bee78023d74729ae675cc21a4d89c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_509e2012445a0cc799410f228734f18e85bee78023d74729ae675cc21a4d89c4->leave($__internal_509e2012445a0cc799410f228734f18e85bee78023d74729ae675cc21a4d89c4_prof);

        
        $__internal_54b88e26d82d0ff95f9060429a881d606f1d092a60c52ac47fee820f8c438439->leave($__internal_54b88e26d82d0ff95f9060429a881d606f1d092a60c52ac47fee820f8c438439_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b11a4d2c01794574cf55fe676652b0688aff7585a580fc1f3e2e8e75ba3c63c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11a4d2c01794574cf55fe676652b0688aff7585a580fc1f3e2e8e75ba3c63c7->enter($__internal_b11a4d2c01794574cf55fe676652b0688aff7585a580fc1f3e2e8e75ba3c63c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_35737f2a2c4f99717b40891aaaf6075e1e2ca4c1d9c648fa83923349178feb79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35737f2a2c4f99717b40891aaaf6075e1e2ca4c1d9c648fa83923349178feb79->enter($__internal_35737f2a2c4f99717b40891aaaf6075e1e2ca4c1d9c648fa83923349178feb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_35737f2a2c4f99717b40891aaaf6075e1e2ca4c1d9c648fa83923349178feb79->leave($__internal_35737f2a2c4f99717b40891aaaf6075e1e2ca4c1d9c648fa83923349178feb79_prof);

        
        $__internal_b11a4d2c01794574cf55fe676652b0688aff7585a580fc1f3e2e8e75ba3c63c7->leave($__internal_b11a4d2c01794574cf55fe676652b0688aff7585a580fc1f3e2e8e75ba3c63c7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
