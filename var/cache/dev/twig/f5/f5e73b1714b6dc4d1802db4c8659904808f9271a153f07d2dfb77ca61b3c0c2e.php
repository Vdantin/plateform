<?php

/* category/show.html.twig */
class __TwigTemplate_bf1853d3a6763f374ff273fb0293ce6125d753aa01af63d0c72b9ff52bd45059 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e63314a68a2e6ba43d0c3e08c24477130cb4203f56ccb569f474c6204950d481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63314a68a2e6ba43d0c3e08c24477130cb4203f56ccb569f474c6204950d481->enter($__internal_e63314a68a2e6ba43d0c3e08c24477130cb4203f56ccb569f474c6204950d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $__internal_11656893edd85313ac1d8877680fa4c52877bf36c933b5f03ea59a0a9a1aa218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11656893edd85313ac1d8877680fa4c52877bf36c933b5f03ea59a0a9a1aa218->enter($__internal_11656893edd85313ac1d8877680fa4c52877bf36c933b5f03ea59a0a9a1aa218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e63314a68a2e6ba43d0c3e08c24477130cb4203f56ccb569f474c6204950d481->leave($__internal_e63314a68a2e6ba43d0c3e08c24477130cb4203f56ccb569f474c6204950d481_prof);

        
        $__internal_11656893edd85313ac1d8877680fa4c52877bf36c933b5f03ea59a0a9a1aa218->leave($__internal_11656893edd85313ac1d8877680fa4c52877bf36c933b5f03ea59a0a9a1aa218_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfc25120904463edf426a54d6d2bcfb8fd4912c195ae5d42060d9676f294d63d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc25120904463edf426a54d6d2bcfb8fd4912c195ae5d42060d9676f294d63d->enter($__internal_dfc25120904463edf426a54d6d2bcfb8fd4912c195ae5d42060d9676f294d63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e8adceb09c6fecf91203b0bd17d3f635f13ee5f50f1b8cd1d1eecc5099dc6e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8adceb09c6fecf91203b0bd17d3f635f13ee5f50f1b8cd1d1eecc5099dc6e18->enter($__internal_e8adceb09c6fecf91203b0bd17d3f635f13ee5f50f1b8cd1d1eecc5099dc6e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Parentid</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "parentId", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e8adceb09c6fecf91203b0bd17d3f635f13ee5f50f1b8cd1d1eecc5099dc6e18->leave($__internal_e8adceb09c6fecf91203b0bd17d3f635f13ee5f50f1b8cd1d1eecc5099dc6e18_prof);

        
        $__internal_dfc25120904463edf426a54d6d2bcfb8fd4912c195ae5d42060d9676f294d63d->leave($__internal_dfc25120904463edf426a54d6d2bcfb8fd4912c195ae5d42060d9676f294d63d_prof);

    }

    public function getTemplateName()
    {
        return "category/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 31,  87 => 28,  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Category</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ category.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ category.name }}</td>
            </tr>
            <tr>
                <th>Parentid</th>
                <td>{{ category.parentId }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "category/show.html.twig", "/home/vincent/plateform/app/Resources/views/category/show.html.twig");
    }
}
