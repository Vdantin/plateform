<?php

/* product/edit.html.twig */
class __TwigTemplate_2d2ce7583a7f8294d4f954b1352ebb2b8fc7599bd2654f2bc56dfcbddc9919d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/edit.html.twig", 1);
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
        $__internal_bfcf09adbe3ea0f573ba61ace22af2e857733635981e53e4b7b2d2d89c4b4405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcf09adbe3ea0f573ba61ace22af2e857733635981e53e4b7b2d2d89c4b4405->enter($__internal_bfcf09adbe3ea0f573ba61ace22af2e857733635981e53e4b7b2d2d89c4b4405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_f51ec8877701af741474de311c60c91c70d2b21f42bfb509a30995c6984181f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51ec8877701af741474de311c60c91c70d2b21f42bfb509a30995c6984181f4->enter($__internal_f51ec8877701af741474de311c60c91c70d2b21f42bfb509a30995c6984181f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcf09adbe3ea0f573ba61ace22af2e857733635981e53e4b7b2d2d89c4b4405->leave($__internal_bfcf09adbe3ea0f573ba61ace22af2e857733635981e53e4b7b2d2d89c4b4405_prof);

        
        $__internal_f51ec8877701af741474de311c60c91c70d2b21f42bfb509a30995c6984181f4->leave($__internal_f51ec8877701af741474de311c60c91c70d2b21f42bfb509a30995c6984181f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5331f5c7a1a0618fdda24962a86cfb692c58672cc9fa578b69567b3fce354955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5331f5c7a1a0618fdda24962a86cfb692c58672cc9fa578b69567b3fce354955->enter($__internal_5331f5c7a1a0618fdda24962a86cfb692c58672cc9fa578b69567b3fce354955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c5e98d6af82fc9dabb994b962aee9b61665d6dc16ea5684b0cca2dfb69f5962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c5e98d6af82fc9dabb994b962aee9b61665d6dc16ea5684b0cca2dfb69f5962->enter($__internal_7c5e98d6af82fc9dabb994b962aee9b61665d6dc16ea5684b0cca2dfb69f5962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_7c5e98d6af82fc9dabb994b962aee9b61665d6dc16ea5684b0cca2dfb69f5962->leave($__internal_7c5e98d6af82fc9dabb994b962aee9b61665d6dc16ea5684b0cca2dfb69f5962_prof);

        
        $__internal_5331f5c7a1a0618fdda24962a86cfb692c58672cc9fa578b69567b3fce354955->leave($__internal_5331f5c7a1a0618fdda24962a86cfb692c58672cc9fa578b69567b3fce354955_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "product/edit.html.twig", "/home/vincent/plateform/app/Resources/views/product/edit.html.twig");
    }
}
