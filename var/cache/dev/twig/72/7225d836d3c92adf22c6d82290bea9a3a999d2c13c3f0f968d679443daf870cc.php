<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_4da0d465ef7b09819e0199d9198ddf28ba896e604979d7afe237542da8914c85 extends Twig_Template
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
        $__internal_55ef334ee1ebfb754dda3656b530d66e412d05ae95be116f776e32e8edf073ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ef334ee1ebfb754dda3656b530d66e412d05ae95be116f776e32e8edf073ae->enter($__internal_55ef334ee1ebfb754dda3656b530d66e412d05ae95be116f776e32e8edf073ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b56418b37023d0ffe06aff1271211807398e2b2b0747e7247a75d9cd3a84b799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56418b37023d0ffe06aff1271211807398e2b2b0747e7247a75d9cd3a84b799->enter($__internal_b56418b37023d0ffe06aff1271211807398e2b2b0747e7247a75d9cd3a84b799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_55ef334ee1ebfb754dda3656b530d66e412d05ae95be116f776e32e8edf073ae->leave($__internal_55ef334ee1ebfb754dda3656b530d66e412d05ae95be116f776e32e8edf073ae_prof);

        
        $__internal_b56418b37023d0ffe06aff1271211807398e2b2b0747e7247a75d9cd3a84b799->leave($__internal_b56418b37023d0ffe06aff1271211807398e2b2b0747e7247a75d9cd3a84b799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
