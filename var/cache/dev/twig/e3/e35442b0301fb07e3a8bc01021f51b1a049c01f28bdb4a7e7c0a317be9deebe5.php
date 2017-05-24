<?php

/* category/edit.html.twig */
class __TwigTemplate_5d9faa7dcf557b0870081d275ab5fcc8da3793db6d5ef87009be2900adb8ea38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/edit.html.twig", 1);
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
        $__internal_2a5d36e8003c81e2f416e6c18c591aa3c0715579cb8811d810f3893d793c5db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5d36e8003c81e2f416e6c18c591aa3c0715579cb8811d810f3893d793c5db9->enter($__internal_2a5d36e8003c81e2f416e6c18c591aa3c0715579cb8811d810f3893d793c5db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $__internal_d04850e8a0afbb2f390e17592f10b1738c94d5c92b8060148df390e243783cc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04850e8a0afbb2f390e17592f10b1738c94d5c92b8060148df390e243783cc2->enter($__internal_d04850e8a0afbb2f390e17592f10b1738c94d5c92b8060148df390e243783cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a5d36e8003c81e2f416e6c18c591aa3c0715579cb8811d810f3893d793c5db9->leave($__internal_2a5d36e8003c81e2f416e6c18c591aa3c0715579cb8811d810f3893d793c5db9_prof);

        
        $__internal_d04850e8a0afbb2f390e17592f10b1738c94d5c92b8060148df390e243783cc2->leave($__internal_d04850e8a0afbb2f390e17592f10b1738c94d5c92b8060148df390e243783cc2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_32fe3936a5cfab0a58d168c3b37ecf272278266bf602f826c66026657081742d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fe3936a5cfab0a58d168c3b37ecf272278266bf602f826c66026657081742d->enter($__internal_32fe3936a5cfab0a58d168c3b37ecf272278266bf602f826c66026657081742d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7eef9eec1865b551bb67eec997e06ec65f43205a08d5d37b4776d5ebb424d454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eef9eec1865b551bb67eec997e06ec65f43205a08d5d37b4776d5ebb424d454->enter($__internal_7eef9eec1865b551bb67eec997e06ec65f43205a08d5d37b4776d5ebb424d454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
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
        
        $__internal_7eef9eec1865b551bb67eec997e06ec65f43205a08d5d37b4776d5ebb424d454->leave($__internal_7eef9eec1865b551bb67eec997e06ec65f43205a08d5d37b4776d5ebb424d454_prof);

        
        $__internal_32fe3936a5cfab0a58d168c3b37ecf272278266bf602f826c66026657081742d->leave($__internal_32fe3936a5cfab0a58d168c3b37ecf272278266bf602f826c66026657081742d_prof);

    }

    public function getTemplateName()
    {
        return "category/edit.html.twig";
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
    <h1>Category edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "category/edit.html.twig", "/home/vincent/plateform/app/Resources/views/category/edit.html.twig");
    }
}
