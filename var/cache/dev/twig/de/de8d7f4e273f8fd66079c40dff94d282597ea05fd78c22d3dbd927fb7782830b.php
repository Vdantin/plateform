<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0992200e561741c94855ec9c52355578c09f2c1fbf44ef79972620a1370059fc extends Twig_Template
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
        $__internal_8bbb8c47deead4e0626703a47f917c7c3c8966ec6e6ae89831b852cbfd8ce21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bbb8c47deead4e0626703a47f917c7c3c8966ec6e6ae89831b852cbfd8ce21d->enter($__internal_8bbb8c47deead4e0626703a47f917c7c3c8966ec6e6ae89831b852cbfd8ce21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_568a89e026fa02696d322d2f3bf19c1f56f15efdb160356413bce9515e7acac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_568a89e026fa02696d322d2f3bf19c1f56f15efdb160356413bce9515e7acac9->enter($__internal_568a89e026fa02696d322d2f3bf19c1f56f15efdb160356413bce9515e7acac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8bbb8c47deead4e0626703a47f917c7c3c8966ec6e6ae89831b852cbfd8ce21d->leave($__internal_8bbb8c47deead4e0626703a47f917c7c3c8966ec6e6ae89831b852cbfd8ce21d_prof);

        
        $__internal_568a89e026fa02696d322d2f3bf19c1f56f15efdb160356413bce9515e7acac9->leave($__internal_568a89e026fa02696d322d2f3bf19c1f56f15efdb160356413bce9515e7acac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
