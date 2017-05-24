<?php

/* product/new.html.twig */
class __TwigTemplate_bf3e1ca99f160d0ce66561890ac334ac9dceea8941349a1600fa587fa35d4749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/new.html.twig", 1);
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
        $__internal_3d1a4a235138c42d17646a879cf03e6b7cf65044f30803a1785a4eca889a9001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d1a4a235138c42d17646a879cf03e6b7cf65044f30803a1785a4eca889a9001->enter($__internal_3d1a4a235138c42d17646a879cf03e6b7cf65044f30803a1785a4eca889a9001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $__internal_bde03e2e6edaaf7d6dbff87815aab298628083c2183db56cd6ce5934237bece2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde03e2e6edaaf7d6dbff87815aab298628083c2183db56cd6ce5934237bece2->enter($__internal_bde03e2e6edaaf7d6dbff87815aab298628083c2183db56cd6ce5934237bece2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d1a4a235138c42d17646a879cf03e6b7cf65044f30803a1785a4eca889a9001->leave($__internal_3d1a4a235138c42d17646a879cf03e6b7cf65044f30803a1785a4eca889a9001_prof);

        
        $__internal_bde03e2e6edaaf7d6dbff87815aab298628083c2183db56cd6ce5934237bece2->leave($__internal_bde03e2e6edaaf7d6dbff87815aab298628083c2183db56cd6ce5934237bece2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b51075dc0d8936e5fd674caea6b5de051d11ea6018bb9968ec67c08b46e39b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b51075dc0d8936e5fd674caea6b5de051d11ea6018bb9968ec67c08b46e39b2->enter($__internal_8b51075dc0d8936e5fd674caea6b5de051d11ea6018bb9968ec67c08b46e39b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ec07e2c12a01d4ec9227226cc9a978da6da22cd2f64f2083ab59ec0c5b229b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec07e2c12a01d4ec9227226cc9a978da6da22cd2f64f2083ab59ec0c5b229b5->enter($__internal_3ec07e2c12a01d4ec9227226cc9a978da6da22cd2f64f2083ab59ec0c5b229b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Product creation</h1>

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
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



    <ul>
        <li>
            <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3ec07e2c12a01d4ec9227226cc9a978da6da22cd2f64f2083ab59ec0c5b229b5->leave($__internal_3ec07e2c12a01d4ec9227226cc9a978da6da22cd2f64f2083ab59ec0c5b229b5_prof);

        
        $__internal_8b51075dc0d8936e5fd674caea6b5de051d11ea6018bb9968ec67c08b46e39b2->leave($__internal_8b51075dc0d8936e5fd674caea6b5de051d11ea6018bb9968ec67c08b46e39b2_prof);

    }

    public function getTemplateName()
    {
        return "product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  64 => 11,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Product creation</h1>

    {{ form_start(form) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Create\" />


    {{ form_end(form) }}



    <ul>
        <li>
            <a href=\"{{ path('product_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "product/new.html.twig", "/home/vincent/plateform/app/Resources/views/product/new.html.twig");
    }
}
