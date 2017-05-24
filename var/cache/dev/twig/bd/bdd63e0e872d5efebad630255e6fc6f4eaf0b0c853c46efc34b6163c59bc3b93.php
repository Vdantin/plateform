<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2ec45baad8a9b5b0b9843288b53f8e023e2378e47a88b5e1bd185e463192940c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4bab6d82ed0ee0bdf15348fe24a58db073ee3c46ab2c7418e69851267b559ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4bab6d82ed0ee0bdf15348fe24a58db073ee3c46ab2c7418e69851267b559ec->enter($__internal_b4bab6d82ed0ee0bdf15348fe24a58db073ee3c46ab2c7418e69851267b559ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0e7101faff69af4f18485c4f426ddf16cab246073b3ee9f0eeb22d130b9ddaf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e7101faff69af4f18485c4f426ddf16cab246073b3ee9f0eeb22d130b9ddaf5->enter($__internal_0e7101faff69af4f18485c4f426ddf16cab246073b3ee9f0eeb22d130b9ddaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b4bab6d82ed0ee0bdf15348fe24a58db073ee3c46ab2c7418e69851267b559ec->leave($__internal_b4bab6d82ed0ee0bdf15348fe24a58db073ee3c46ab2c7418e69851267b559ec_prof);

        
        $__internal_0e7101faff69af4f18485c4f426ddf16cab246073b3ee9f0eeb22d130b9ddaf5->leave($__internal_0e7101faff69af4f18485c4f426ddf16cab246073b3ee9f0eeb22d130b9ddaf5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_393b4a97caccb7cebab1530f79a1c405fabe967ae75f663fdeec81cd3c3b7e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393b4a97caccb7cebab1530f79a1c405fabe967ae75f663fdeec81cd3c3b7e0a->enter($__internal_393b4a97caccb7cebab1530f79a1c405fabe967ae75f663fdeec81cd3c3b7e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6e23e157e3f702a4632e27d51b358e98706369a2489dba17bc80e4110fe2779c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e23e157e3f702a4632e27d51b358e98706369a2489dba17bc80e4110fe2779c->enter($__internal_6e23e157e3f702a4632e27d51b358e98706369a2489dba17bc80e4110fe2779c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e23e157e3f702a4632e27d51b358e98706369a2489dba17bc80e4110fe2779c->leave($__internal_6e23e157e3f702a4632e27d51b358e98706369a2489dba17bc80e4110fe2779c_prof);

        
        $__internal_393b4a97caccb7cebab1530f79a1c405fabe967ae75f663fdeec81cd3c3b7e0a->leave($__internal_393b4a97caccb7cebab1530f79a1c405fabe967ae75f663fdeec81cd3c3b7e0a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
