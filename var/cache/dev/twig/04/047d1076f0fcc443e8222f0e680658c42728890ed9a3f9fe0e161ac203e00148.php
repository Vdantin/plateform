<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_dc1c62e7f97d3db95972fb296fdf6de7976737d02c4ac47b68461e781a5aa705 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_591d532be80ba67f9a1090d266c23bcc374ebf840b00842970e1308771126681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591d532be80ba67f9a1090d266c23bcc374ebf840b00842970e1308771126681->enter($__internal_591d532be80ba67f9a1090d266c23bcc374ebf840b00842970e1308771126681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_45bc5e4917cb66806f8d4e50255e0d5dc6c25ec3c237ae0b6c1f7013251e47de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bc5e4917cb66806f8d4e50255e0d5dc6c25ec3c237ae0b6c1f7013251e47de->enter($__internal_45bc5e4917cb66806f8d4e50255e0d5dc6c25ec3c237ae0b6c1f7013251e47de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591d532be80ba67f9a1090d266c23bcc374ebf840b00842970e1308771126681->leave($__internal_591d532be80ba67f9a1090d266c23bcc374ebf840b00842970e1308771126681_prof);

        
        $__internal_45bc5e4917cb66806f8d4e50255e0d5dc6c25ec3c237ae0b6c1f7013251e47de->leave($__internal_45bc5e4917cb66806f8d4e50255e0d5dc6c25ec3c237ae0b6c1f7013251e47de_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6c3fd5fbff36cb19ee8e114f3065b934470a25bb73b357c0ef702bc35217f13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3fd5fbff36cb19ee8e114f3065b934470a25bb73b357c0ef702bc35217f13b->enter($__internal_6c3fd5fbff36cb19ee8e114f3065b934470a25bb73b357c0ef702bc35217f13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_44317148ef6453cc6bdc4cdc387117812eef039f534a6712034f42adf14d5b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44317148ef6453cc6bdc4cdc387117812eef039f534a6712034f42adf14d5b39->enter($__internal_44317148ef6453cc6bdc4cdc387117812eef039f534a6712034f42adf14d5b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_44317148ef6453cc6bdc4cdc387117812eef039f534a6712034f42adf14d5b39->leave($__internal_44317148ef6453cc6bdc4cdc387117812eef039f534a6712034f42adf14d5b39_prof);

        
        $__internal_6c3fd5fbff36cb19ee8e114f3065b934470a25bb73b357c0ef702bc35217f13b->leave($__internal_6c3fd5fbff36cb19ee8e114f3065b934470a25bb73b357c0ef702bc35217f13b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c748d4718b88bb3dfbd3d9d8b0ff169906315bd9fe098b96118e9cf7df84c3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c748d4718b88bb3dfbd3d9d8b0ff169906315bd9fe098b96118e9cf7df84c3b1->enter($__internal_c748d4718b88bb3dfbd3d9d8b0ff169906315bd9fe098b96118e9cf7df84c3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d23de2196fa26aca3c3ca40cd3ead77624204a586d6edd3e7fb1b72cd3a255d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d23de2196fa26aca3c3ca40cd3ead77624204a586d6edd3e7fb1b72cd3a255d->enter($__internal_4d23de2196fa26aca3c3ca40cd3ead77624204a586d6edd3e7fb1b72cd3a255d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4d23de2196fa26aca3c3ca40cd3ead77624204a586d6edd3e7fb1b72cd3a255d->leave($__internal_4d23de2196fa26aca3c3ca40cd3ead77624204a586d6edd3e7fb1b72cd3a255d_prof);

        
        $__internal_c748d4718b88bb3dfbd3d9d8b0ff169906315bd9fe098b96118e9cf7df84c3b1->leave($__internal_c748d4718b88bb3dfbd3d9d8b0ff169906315bd9fe098b96118e9cf7df84c3b1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
