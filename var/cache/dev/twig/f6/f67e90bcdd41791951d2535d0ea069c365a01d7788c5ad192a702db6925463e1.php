<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1c4122c91df9e1e57064f2fbaf9eb0a2cb645b74d003b6a471498370b1a7b48f extends Twig_Template
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
        $__internal_80c1900f6bd924a99a1c5375b941ed9e149425201580f76fa2bd88d150df684a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80c1900f6bd924a99a1c5375b941ed9e149425201580f76fa2bd88d150df684a->enter($__internal_80c1900f6bd924a99a1c5375b941ed9e149425201580f76fa2bd88d150df684a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2df94060c2a45915ff9c647381fe754abecb0fb6334dd4ae9e3b49f62bc54576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2df94060c2a45915ff9c647381fe754abecb0fb6334dd4ae9e3b49f62bc54576->enter($__internal_2df94060c2a45915ff9c647381fe754abecb0fb6334dd4ae9e3b49f62bc54576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_80c1900f6bd924a99a1c5375b941ed9e149425201580f76fa2bd88d150df684a->leave($__internal_80c1900f6bd924a99a1c5375b941ed9e149425201580f76fa2bd88d150df684a_prof);

        
        $__internal_2df94060c2a45915ff9c647381fe754abecb0fb6334dd4ae9e3b49f62bc54576->leave($__internal_2df94060c2a45915ff9c647381fe754abecb0fb6334dd4ae9e3b49f62bc54576_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
