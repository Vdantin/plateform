<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_37e2d6b1e479e45b336ffb18168b36e3447a61133ed892d9a6f5501e1fb4345f extends Twig_Template
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
        $__internal_7c39a238a400dede9e5c5286977c44f6e48c8734b453801e4b2e82748f785436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c39a238a400dede9e5c5286977c44f6e48c8734b453801e4b2e82748f785436->enter($__internal_7c39a238a400dede9e5c5286977c44f6e48c8734b453801e4b2e82748f785436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_18d680ab6c717de921b685b1e0dcaba38ac9913147c3049afc3370dc986cc63d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18d680ab6c717de921b685b1e0dcaba38ac9913147c3049afc3370dc986cc63d->enter($__internal_18d680ab6c717de921b685b1e0dcaba38ac9913147c3049afc3370dc986cc63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7c39a238a400dede9e5c5286977c44f6e48c8734b453801e4b2e82748f785436->leave($__internal_7c39a238a400dede9e5c5286977c44f6e48c8734b453801e4b2e82748f785436_prof);

        
        $__internal_18d680ab6c717de921b685b1e0dcaba38ac9913147c3049afc3370dc986cc63d->leave($__internal_18d680ab6c717de921b685b1e0dcaba38ac9913147c3049afc3370dc986cc63d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
