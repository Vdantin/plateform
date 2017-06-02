<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_81ad57dae5d77a5395d4da78e0fa5d110a3537d5c50e11b3b2ebe9b8582b1159 extends Twig_Template
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
        $__internal_882395325da20113407e614e3000e402a16e43b9ae6c79c76f55db5989a018b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882395325da20113407e614e3000e402a16e43b9ae6c79c76f55db5989a018b8->enter($__internal_882395325da20113407e614e3000e402a16e43b9ae6c79c76f55db5989a018b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_699c169c2056878c620e0b9ffad6d31f4f86e07e05fc3d78a8a59f4bb5fb72e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699c169c2056878c620e0b9ffad6d31f4f86e07e05fc3d78a8a59f4bb5fb72e4->enter($__internal_699c169c2056878c620e0b9ffad6d31f4f86e07e05fc3d78a8a59f4bb5fb72e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_882395325da20113407e614e3000e402a16e43b9ae6c79c76f55db5989a018b8->leave($__internal_882395325da20113407e614e3000e402a16e43b9ae6c79c76f55db5989a018b8_prof);

        
        $__internal_699c169c2056878c620e0b9ffad6d31f4f86e07e05fc3d78a8a59f4bb5fb72e4->leave($__internal_699c169c2056878c620e0b9ffad6d31f4f86e07e05fc3d78a8a59f4bb5fb72e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_60f14202f343fff963df4880f86d4c4396f0da6846d9c79cc33a8817b10830e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f14202f343fff963df4880f86d4c4396f0da6846d9c79cc33a8817b10830e1->enter($__internal_60f14202f343fff963df4880f86d4c4396f0da6846d9c79cc33a8817b10830e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1097d370a762464e4db2564cb79d0a18570de147d537b284e99af67a4561f0f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1097d370a762464e4db2564cb79d0a18570de147d537b284e99af67a4561f0f7->enter($__internal_1097d370a762464e4db2564cb79d0a18570de147d537b284e99af67a4561f0f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1097d370a762464e4db2564cb79d0a18570de147d537b284e99af67a4561f0f7->leave($__internal_1097d370a762464e4db2564cb79d0a18570de147d537b284e99af67a4561f0f7_prof);

        
        $__internal_60f14202f343fff963df4880f86d4c4396f0da6846d9c79cc33a8817b10830e1->leave($__internal_60f14202f343fff963df4880f86d4c4396f0da6846d9c79cc33a8817b10830e1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0c8500e1226f890dca6e4a759a8652b13e16e703d1bfc1a791614353749168bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8500e1226f890dca6e4a759a8652b13e16e703d1bfc1a791614353749168bb->enter($__internal_0c8500e1226f890dca6e4a759a8652b13e16e703d1bfc1a791614353749168bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4570a168ff15fe2b3cd9b85a2d02b731783424a7cef7dd4bc94d11a8de512b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4570a168ff15fe2b3cd9b85a2d02b731783424a7cef7dd4bc94d11a8de512b86->enter($__internal_4570a168ff15fe2b3cd9b85a2d02b731783424a7cef7dd4bc94d11a8de512b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4570a168ff15fe2b3cd9b85a2d02b731783424a7cef7dd4bc94d11a8de512b86->leave($__internal_4570a168ff15fe2b3cd9b85a2d02b731783424a7cef7dd4bc94d11a8de512b86_prof);

        
        $__internal_0c8500e1226f890dca6e4a759a8652b13e16e703d1bfc1a791614353749168bb->leave($__internal_0c8500e1226f890dca6e4a759a8652b13e16e703d1bfc1a791614353749168bb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e42ced32ec8550342ea9fe01d892595021f2840c89fd4049ef96f29cf0f04bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e42ced32ec8550342ea9fe01d892595021f2840c89fd4049ef96f29cf0f04bc7->enter($__internal_e42ced32ec8550342ea9fe01d892595021f2840c89fd4049ef96f29cf0f04bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_11238878fad84327fbee12524db6498401420696bf2c689b5e898f905a40c638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11238878fad84327fbee12524db6498401420696bf2c689b5e898f905a40c638->enter($__internal_11238878fad84327fbee12524db6498401420696bf2c689b5e898f905a40c638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_11238878fad84327fbee12524db6498401420696bf2c689b5e898f905a40c638->leave($__internal_11238878fad84327fbee12524db6498401420696bf2c689b5e898f905a40c638_prof);

        
        $__internal_e42ced32ec8550342ea9fe01d892595021f2840c89fd4049ef96f29cf0f04bc7->leave($__internal_e42ced32ec8550342ea9fe01d892595021f2840c89fd4049ef96f29cf0f04bc7_prof);

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
