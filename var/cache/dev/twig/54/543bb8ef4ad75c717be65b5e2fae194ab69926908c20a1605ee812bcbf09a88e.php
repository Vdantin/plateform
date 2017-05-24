<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e4e71f926fdf95af45114576b779bcf46d1c2c8a44600236ee54b217b1ae579c extends Twig_Template
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
        $__internal_64ea5a8bd1dec23196969170ebd1730edb5f4e49fad3848656afff33e4bd8fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64ea5a8bd1dec23196969170ebd1730edb5f4e49fad3848656afff33e4bd8fa9->enter($__internal_64ea5a8bd1dec23196969170ebd1730edb5f4e49fad3848656afff33e4bd8fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_0ddc39f88e72aa5de7c62d9d2a42535e597f5ace816b041167bb6dbc45b6939e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddc39f88e72aa5de7c62d9d2a42535e597f5ace816b041167bb6dbc45b6939e->enter($__internal_0ddc39f88e72aa5de7c62d9d2a42535e597f5ace816b041167bb6dbc45b6939e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_64ea5a8bd1dec23196969170ebd1730edb5f4e49fad3848656afff33e4bd8fa9->leave($__internal_64ea5a8bd1dec23196969170ebd1730edb5f4e49fad3848656afff33e4bd8fa9_prof);

        
        $__internal_0ddc39f88e72aa5de7c62d9d2a42535e597f5ace816b041167bb6dbc45b6939e->leave($__internal_0ddc39f88e72aa5de7c62d9d2a42535e597f5ace816b041167bb6dbc45b6939e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
