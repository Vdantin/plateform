<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_2eff544ccf817e726e5d29d9d78d9ce3b3cea1355772dc5e0929c778b0f020a8 extends Twig_Template
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
        $__internal_d5bf5fd935c12d67b73a56f870dc32ffc850f30a4b8a058b88381e96fba89e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5bf5fd935c12d67b73a56f870dc32ffc850f30a4b8a058b88381e96fba89e4c->enter($__internal_d5bf5fd935c12d67b73a56f870dc32ffc850f30a4b8a058b88381e96fba89e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_12daeef1ca7b2afda3f8e24167d92dd562567c6e18b6d3fa1675b65c3402aca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12daeef1ca7b2afda3f8e24167d92dd562567c6e18b6d3fa1675b65c3402aca7->enter($__internal_12daeef1ca7b2afda3f8e24167d92dd562567c6e18b6d3fa1675b65c3402aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d5bf5fd935c12d67b73a56f870dc32ffc850f30a4b8a058b88381e96fba89e4c->leave($__internal_d5bf5fd935c12d67b73a56f870dc32ffc850f30a4b8a058b88381e96fba89e4c_prof);

        
        $__internal_12daeef1ca7b2afda3f8e24167d92dd562567c6e18b6d3fa1675b65c3402aca7->leave($__internal_12daeef1ca7b2afda3f8e24167d92dd562567c6e18b6d3fa1675b65c3402aca7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
