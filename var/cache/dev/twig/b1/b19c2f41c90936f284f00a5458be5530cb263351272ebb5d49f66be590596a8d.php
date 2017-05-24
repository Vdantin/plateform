<?php

/* category/new.html.twig */
class __TwigTemplate_c82d396b4682a817d1409905391ce07d6211a6969d8cb8ee6d4a3008144624c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/new.html.twig", 1);
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
        $__internal_4ff39945abd895d6618decc79cc92fa3a5527e28cce699415bd7df4d2dbd517f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff39945abd895d6618decc79cc92fa3a5527e28cce699415bd7df4d2dbd517f->enter($__internal_4ff39945abd895d6618decc79cc92fa3a5527e28cce699415bd7df4d2dbd517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $__internal_f021b4ea2c841aca59f79868149cef8df496191ab03257f7fea8611b2fe38d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f021b4ea2c841aca59f79868149cef8df496191ab03257f7fea8611b2fe38d06->enter($__internal_f021b4ea2c841aca59f79868149cef8df496191ab03257f7fea8611b2fe38d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff39945abd895d6618decc79cc92fa3a5527e28cce699415bd7df4d2dbd517f->leave($__internal_4ff39945abd895d6618decc79cc92fa3a5527e28cce699415bd7df4d2dbd517f_prof);

        
        $__internal_f021b4ea2c841aca59f79868149cef8df496191ab03257f7fea8611b2fe38d06->leave($__internal_f021b4ea2c841aca59f79868149cef8df496191ab03257f7fea8611b2fe38d06_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a842128e0eb06d509da4174a056a02abdf5d50dc9e71b6685f7ef2f80150719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a842128e0eb06d509da4174a056a02abdf5d50dc9e71b6685f7ef2f80150719->enter($__internal_9a842128e0eb06d509da4174a056a02abdf5d50dc9e71b6685f7ef2f80150719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9219412910dbf46046fd7bb4e5e6badba2081c4afd0cf111b92ce273ddb12d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9219412910dbf46046fd7bb4e5e6badba2081c4afd0cf111b92ce273ddb12d0e->enter($__internal_9219412910dbf46046fd7bb4e5e6badba2081c4afd0cf111b92ce273ddb12d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9219412910dbf46046fd7bb4e5e6badba2081c4afd0cf111b92ce273ddb12d0e->leave($__internal_9219412910dbf46046fd7bb4e5e6badba2081c4afd0cf111b92ce273ddb12d0e_prof);

        
        $__internal_9a842128e0eb06d509da4174a056a02abdf5d50dc9e71b6685f7ef2f80150719->leave($__internal_9a842128e0eb06d509da4174a056a02abdf5d50dc9e71b6685f7ef2f80150719_prof);

    }

    public function getTemplateName()
    {
        return "category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Category creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('category_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "category/new.html.twig", "/home/vincent/plateform/app/Resources/views/category/new.html.twig");
    }
}
