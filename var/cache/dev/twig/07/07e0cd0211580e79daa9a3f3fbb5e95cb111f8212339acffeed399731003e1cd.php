<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3be2048eedc56ffa44862edaa6324fb9c0d440f212a8caef551b56568ae97948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c200d1fe87fd5548dcc94cb1c848c5b486f9f4c090ca4dd42c2f8314f6a12e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c200d1fe87fd5548dcc94cb1c848c5b486f9f4c090ca4dd42c2f8314f6a12e1->enter($__internal_3c200d1fe87fd5548dcc94cb1c848c5b486f9f4c090ca4dd42c2f8314f6a12e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_38e4aae0ee08be4621d9ce3017a42a0aef6e04516525ba45ad9a7f1d0a1dd811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38e4aae0ee08be4621d9ce3017a42a0aef6e04516525ba45ad9a7f1d0a1dd811->enter($__internal_38e4aae0ee08be4621d9ce3017a42a0aef6e04516525ba45ad9a7f1d0a1dd811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3c200d1fe87fd5548dcc94cb1c848c5b486f9f4c090ca4dd42c2f8314f6a12e1->leave($__internal_3c200d1fe87fd5548dcc94cb1c848c5b486f9f4c090ca4dd42c2f8314f6a12e1_prof);

        
        $__internal_38e4aae0ee08be4621d9ce3017a42a0aef6e04516525ba45ad9a7f1d0a1dd811->leave($__internal_38e4aae0ee08be4621d9ce3017a42a0aef6e04516525ba45ad9a7f1d0a1dd811_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
