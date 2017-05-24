<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2e98fe9f5da46ac6e7f8af6de6e0aa7e0565143ddd0a8d2273f58ea244384af1 extends Twig_Template
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
        $__internal_e7fc5769f0f164c0cea9f295279c2a9071c358080e04ac1bd378f869ea5c3600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7fc5769f0f164c0cea9f295279c2a9071c358080e04ac1bd378f869ea5c3600->enter($__internal_e7fc5769f0f164c0cea9f295279c2a9071c358080e04ac1bd378f869ea5c3600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_50c5d456f53d4e8824fdf964068ee3b94f02a318105ee80b6f798d79240dc126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c5d456f53d4e8824fdf964068ee3b94f02a318105ee80b6f798d79240dc126->enter($__internal_50c5d456f53d4e8824fdf964068ee3b94f02a318105ee80b6f798d79240dc126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e7fc5769f0f164c0cea9f295279c2a9071c358080e04ac1bd378f869ea5c3600->leave($__internal_e7fc5769f0f164c0cea9f295279c2a9071c358080e04ac1bd378f869ea5c3600_prof);

        
        $__internal_50c5d456f53d4e8824fdf964068ee3b94f02a318105ee80b6f798d79240dc126->leave($__internal_50c5d456f53d4e8824fdf964068ee3b94f02a318105ee80b6f798d79240dc126_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
