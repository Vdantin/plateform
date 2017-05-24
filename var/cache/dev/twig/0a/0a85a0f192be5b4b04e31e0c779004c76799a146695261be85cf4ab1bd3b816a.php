<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0dae9d69b61000eb625c94d60271a2d75a87c1262c9bc71a62dc8aa260c9fa82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_870eb0c9e6247632469dace26e1851d18a91a539c423830e0a8328e67c49b99a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870eb0c9e6247632469dace26e1851d18a91a539c423830e0a8328e67c49b99a->enter($__internal_870eb0c9e6247632469dace26e1851d18a91a539c423830e0a8328e67c49b99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1836ad98a730cb2e62f41ed48b02eeb41aad09bc325e4501bc92bcbfbb679afd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1836ad98a730cb2e62f41ed48b02eeb41aad09bc325e4501bc92bcbfbb679afd->enter($__internal_1836ad98a730cb2e62f41ed48b02eeb41aad09bc325e4501bc92bcbfbb679afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_870eb0c9e6247632469dace26e1851d18a91a539c423830e0a8328e67c49b99a->leave($__internal_870eb0c9e6247632469dace26e1851d18a91a539c423830e0a8328e67c49b99a_prof);

        
        $__internal_1836ad98a730cb2e62f41ed48b02eeb41aad09bc325e4501bc92bcbfbb679afd->leave($__internal_1836ad98a730cb2e62f41ed48b02eeb41aad09bc325e4501bc92bcbfbb679afd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78177f0298ce4eeae5916e659e713bce477062ba0b6b2225614336228e9cfca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78177f0298ce4eeae5916e659e713bce477062ba0b6b2225614336228e9cfca8->enter($__internal_78177f0298ce4eeae5916e659e713bce477062ba0b6b2225614336228e9cfca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7cf48409b73241900b77782212c4a79c1126424e8c13668856433684c9d242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cf48409b73241900b77782212c4a79c1126424e8c13668856433684c9d242c->enter($__internal_b7cf48409b73241900b77782212c4a79c1126424e8c13668856433684c9d242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b7cf48409b73241900b77782212c4a79c1126424e8c13668856433684c9d242c->leave($__internal_b7cf48409b73241900b77782212c4a79c1126424e8c13668856433684c9d242c_prof);

        
        $__internal_78177f0298ce4eeae5916e659e713bce477062ba0b6b2225614336228e9cfca8->leave($__internal_78177f0298ce4eeae5916e659e713bce477062ba0b6b2225614336228e9cfca8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d89d6fff7e182afb278c518ea457244352a51b5d59fe55e158aa2f15a3c20c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d89d6fff7e182afb278c518ea457244352a51b5d59fe55e158aa2f15a3c20c6->enter($__internal_4d89d6fff7e182afb278c518ea457244352a51b5d59fe55e158aa2f15a3c20c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a703eaf37efce54d038bb90ec36cd02ebca93c5e9a2bcc1dd8c2988d94a64ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a703eaf37efce54d038bb90ec36cd02ebca93c5e9a2bcc1dd8c2988d94a64ce->enter($__internal_0a703eaf37efce54d038bb90ec36cd02ebca93c5e9a2bcc1dd8c2988d94a64ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0a703eaf37efce54d038bb90ec36cd02ebca93c5e9a2bcc1dd8c2988d94a64ce->leave($__internal_0a703eaf37efce54d038bb90ec36cd02ebca93c5e9a2bcc1dd8c2988d94a64ce_prof);

        
        $__internal_4d89d6fff7e182afb278c518ea457244352a51b5d59fe55e158aa2f15a3c20c6->leave($__internal_4d89d6fff7e182afb278c518ea457244352a51b5d59fe55e158aa2f15a3c20c6_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b54fbb454456e393fce808212fcb74aa60c32b313d604e403d242cb2682a08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b54fbb454456e393fce808212fcb74aa60c32b313d604e403d242cb2682a08->enter($__internal_c7b54fbb454456e393fce808212fcb74aa60c32b313d604e403d242cb2682a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb8f69ef997133d465d5c4e73ba72769f863bc153442abd57529038660cb931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb8f69ef997133d465d5c4e73ba72769f863bc153442abd57529038660cb931b->enter($__internal_fb8f69ef997133d465d5c4e73ba72769f863bc153442abd57529038660cb931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_fb8f69ef997133d465d5c4e73ba72769f863bc153442abd57529038660cb931b->leave($__internal_fb8f69ef997133d465d5c4e73ba72769f863bc153442abd57529038660cb931b_prof);

        
        $__internal_c7b54fbb454456e393fce808212fcb74aa60c32b313d604e403d242cb2682a08->leave($__internal_c7b54fbb454456e393fce808212fcb74aa60c32b313d604e403d242cb2682a08_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
