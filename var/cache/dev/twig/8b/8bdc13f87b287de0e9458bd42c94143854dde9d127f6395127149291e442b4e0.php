<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_b31d61fbc66a07f32933300494549b2c83f18386e97a70509cef00e62ff26b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1edbf40ad94a9fbaaa6e1444850342015388f281d4ecc46494e8f247d0a93b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1edbf40ad94a9fbaaa6e1444850342015388f281d4ecc46494e8f247d0a93b30->enter($__internal_1edbf40ad94a9fbaaa6e1444850342015388f281d4ecc46494e8f247d0a93b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_9a81f79fde8c41c67d8df81a1e003cc873daf46816890595febb843a088989ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a81f79fde8c41c67d8df81a1e003cc873daf46816890595febb843a088989ae->enter($__internal_9a81f79fde8c41c67d8df81a1e003cc873daf46816890595febb843a088989ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1edbf40ad94a9fbaaa6e1444850342015388f281d4ecc46494e8f247d0a93b30->leave($__internal_1edbf40ad94a9fbaaa6e1444850342015388f281d4ecc46494e8f247d0a93b30_prof);

        
        $__internal_9a81f79fde8c41c67d8df81a1e003cc873daf46816890595febb843a088989ae->leave($__internal_9a81f79fde8c41c67d8df81a1e003cc873daf46816890595febb843a088989ae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6ac14c5657bd19406e44187dc44edfbd04a42a4fff7f2012f3d6684068624d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac14c5657bd19406e44187dc44edfbd04a42a4fff7f2012f3d6684068624d35->enter($__internal_6ac14c5657bd19406e44187dc44edfbd04a42a4fff7f2012f3d6684068624d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d76d77989b95f377a0e6cc312418fe0b503b3e1bea7962b0de78f1aa8699231a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76d77989b95f377a0e6cc312418fe0b503b3e1bea7962b0de78f1aa8699231a->enter($__internal_d76d77989b95f377a0e6cc312418fe0b503b3e1bea7962b0de78f1aa8699231a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_d76d77989b95f377a0e6cc312418fe0b503b3e1bea7962b0de78f1aa8699231a->leave($__internal_d76d77989b95f377a0e6cc312418fe0b503b3e1bea7962b0de78f1aa8699231a_prof);

        
        $__internal_6ac14c5657bd19406e44187dc44edfbd04a42a4fff7f2012f3d6684068624d35->leave($__internal_6ac14c5657bd19406e44187dc44edfbd04a42a4fff7f2012f3d6684068624d35_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/vincent/plateform/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
