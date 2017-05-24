<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_d9fad801b0ea5b69b472ccdc3c0890c596ab2e2553cec0a9378e1a9c00740e7e extends Twig_Template
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
        $__internal_6179753348c30f7f3e9276b63e9d83808e1ec26c4abb5f2859c9f68d9acab456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6179753348c30f7f3e9276b63e9d83808e1ec26c4abb5f2859c9f68d9acab456->enter($__internal_6179753348c30f7f3e9276b63e9d83808e1ec26c4abb5f2859c9f68d9acab456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3ff1cf73066eeccbaae37dfe36f24aa15bca8cd7af6e21e02d824e847e8a4953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff1cf73066eeccbaae37dfe36f24aa15bca8cd7af6e21e02d824e847e8a4953->enter($__internal_3ff1cf73066eeccbaae37dfe36f24aa15bca8cd7af6e21e02d824e847e8a4953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6179753348c30f7f3e9276b63e9d83808e1ec26c4abb5f2859c9f68d9acab456->leave($__internal_6179753348c30f7f3e9276b63e9d83808e1ec26c4abb5f2859c9f68d9acab456_prof);

        
        $__internal_3ff1cf73066eeccbaae37dfe36f24aa15bca8cd7af6e21e02d824e847e8a4953->leave($__internal_3ff1cf73066eeccbaae37dfe36f24aa15bca8cd7af6e21e02d824e847e8a4953_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
