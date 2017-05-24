<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_06924a1356a8fa6502f04dabbc9691d0029bfeffc861796df5a68debcd11c7ce extends Twig_Template
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
        $__internal_611a52ba041f95576625c189ed53ba2618b1ecde9afe82dcc52e71d0018391c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611a52ba041f95576625c189ed53ba2618b1ecde9afe82dcc52e71d0018391c5->enter($__internal_611a52ba041f95576625c189ed53ba2618b1ecde9afe82dcc52e71d0018391c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ba296994deed78d873168d6020ff5dc2dcf7c9d37f40cb0997e2b1834d1e9813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba296994deed78d873168d6020ff5dc2dcf7c9d37f40cb0997e2b1834d1e9813->enter($__internal_ba296994deed78d873168d6020ff5dc2dcf7c9d37f40cb0997e2b1834d1e9813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_611a52ba041f95576625c189ed53ba2618b1ecde9afe82dcc52e71d0018391c5->leave($__internal_611a52ba041f95576625c189ed53ba2618b1ecde9afe82dcc52e71d0018391c5_prof);

        
        $__internal_ba296994deed78d873168d6020ff5dc2dcf7c9d37f40cb0997e2b1834d1e9813->leave($__internal_ba296994deed78d873168d6020ff5dc2dcf7c9d37f40cb0997e2b1834d1e9813_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
