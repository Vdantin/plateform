<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_74e564f1cb5e9bfcbd77129f985d2a68529be74457b2dbc82a8ca4332f82f9f5 extends Twig_Template
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
        $__internal_ddc4180debb3cb22beec296cba14dc88d994bb9a17d2f87fcba2b34d69e77420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc4180debb3cb22beec296cba14dc88d994bb9a17d2f87fcba2b34d69e77420->enter($__internal_ddc4180debb3cb22beec296cba14dc88d994bb9a17d2f87fcba2b34d69e77420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_afb5bbd78cddd0a966eec6c29e45f7ca38a274efca90585958ce60d200d86b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb5bbd78cddd0a966eec6c29e45f7ca38a274efca90585958ce60d200d86b49->enter($__internal_afb5bbd78cddd0a966eec6c29e45f7ca38a274efca90585958ce60d200d86b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_ddc4180debb3cb22beec296cba14dc88d994bb9a17d2f87fcba2b34d69e77420->leave($__internal_ddc4180debb3cb22beec296cba14dc88d994bb9a17d2f87fcba2b34d69e77420_prof);

        
        $__internal_afb5bbd78cddd0a966eec6c29e45f7ca38a274efca90585958ce60d200d86b49->leave($__internal_afb5bbd78cddd0a966eec6c29e45f7ca38a274efca90585958ce60d200d86b49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
