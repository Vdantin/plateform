<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_b13b0fccfcf15b2ef04c635580a353ea5c6ec2d9577cb0ff668c8a5952c4f8e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a306de44b0aa14330e9a59476114ee6d06cc38dd2a83e7787fec7f6b1872303d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a306de44b0aa14330e9a59476114ee6d06cc38dd2a83e7787fec7f6b1872303d->enter($__internal_a306de44b0aa14330e9a59476114ee6d06cc38dd2a83e7787fec7f6b1872303d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_f5a15fdb8a194ead592dfa09b9d0e514ddb516cd539fe4497228ec7d95dc40cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a15fdb8a194ead592dfa09b9d0e514ddb516cd539fe4497228ec7d95dc40cf->enter($__internal_f5a15fdb8a194ead592dfa09b9d0e514ddb516cd539fe4497228ec7d95dc40cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a306de44b0aa14330e9a59476114ee6d06cc38dd2a83e7787fec7f6b1872303d->leave($__internal_a306de44b0aa14330e9a59476114ee6d06cc38dd2a83e7787fec7f6b1872303d_prof);

        
        $__internal_f5a15fdb8a194ead592dfa09b9d0e514ddb516cd539fe4497228ec7d95dc40cf->leave($__internal_f5a15fdb8a194ead592dfa09b9d0e514ddb516cd539fe4497228ec7d95dc40cf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8ffe02e9a55f3bc7d22f43ab7427c7fda33f0f7609bbcedf9146a17ad711ed7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ffe02e9a55f3bc7d22f43ab7427c7fda33f0f7609bbcedf9146a17ad711ed7b->enter($__internal_8ffe02e9a55f3bc7d22f43ab7427c7fda33f0f7609bbcedf9146a17ad711ed7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ed11ada7aca0da7a741df03461dba049056b29c51d46f9ab730542a9d58b2c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed11ada7aca0da7a741df03461dba049056b29c51d46f9ab730542a9d58b2c54->enter($__internal_ed11ada7aca0da7a741df03461dba049056b29c51d46f9ab730542a9d58b2c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_ed11ada7aca0da7a741df03461dba049056b29c51d46f9ab730542a9d58b2c54->leave($__internal_ed11ada7aca0da7a741df03461dba049056b29c51d46f9ab730542a9d58b2c54_prof);

        
        $__internal_8ffe02e9a55f3bc7d22f43ab7427c7fda33f0f7609bbcedf9146a17ad711ed7b->leave($__internal_8ffe02e9a55f3bc7d22f43ab7427c7fda33f0f7609bbcedf9146a17ad711ed7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc727f4ddcd44c830a2706a1c05b573f3dc4b3d83fc4f1a69142adece8ffbac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc727f4ddcd44c830a2706a1c05b573f3dc4b3d83fc4f1a69142adece8ffbac5->enter($__internal_cc727f4ddcd44c830a2706a1c05b573f3dc4b3d83fc4f1a69142adece8ffbac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cda8477143d28257117998f8845e10faf345c3faff988b11d8ff04fba60556ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda8477143d28257117998f8845e10faf345c3faff988b11d8ff04fba60556ef->enter($__internal_cda8477143d28257117998f8845e10faf345c3faff988b11d8ff04fba60556ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_cda8477143d28257117998f8845e10faf345c3faff988b11d8ff04fba60556ef->leave($__internal_cda8477143d28257117998f8845e10faf345c3faff988b11d8ff04fba60556ef_prof);

        
        $__internal_cc727f4ddcd44c830a2706a1c05b573f3dc4b3d83fc4f1a69142adece8ffbac5->leave($__internal_cc727f4ddcd44c830a2706a1c05b573f3dc4b3d83fc4f1a69142adece8ffbac5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
