<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bdc4a107988af3ffb1294e73c8b9d975e7e84f4fc2c4dd87d84f62dbabf6a5af extends Twig_Template
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
        $__internal_e3e81df6dc1f7e2014b93e09849859ba7218e8bc0cd86159d2f29ea56f17a1bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e81df6dc1f7e2014b93e09849859ba7218e8bc0cd86159d2f29ea56f17a1bc->enter($__internal_e3e81df6dc1f7e2014b93e09849859ba7218e8bc0cd86159d2f29ea56f17a1bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_10091652a3f78564c8f3dc065d8d682f0086f26d9820d9d174e5fee11f917144 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10091652a3f78564c8f3dc065d8d682f0086f26d9820d9d174e5fee11f917144->enter($__internal_10091652a3f78564c8f3dc065d8d682f0086f26d9820d9d174e5fee11f917144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e3e81df6dc1f7e2014b93e09849859ba7218e8bc0cd86159d2f29ea56f17a1bc->leave($__internal_e3e81df6dc1f7e2014b93e09849859ba7218e8bc0cd86159d2f29ea56f17a1bc_prof);

        
        $__internal_10091652a3f78564c8f3dc065d8d682f0086f26d9820d9d174e5fee11f917144->leave($__internal_10091652a3f78564c8f3dc065d8d682f0086f26d9820d9d174e5fee11f917144_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
