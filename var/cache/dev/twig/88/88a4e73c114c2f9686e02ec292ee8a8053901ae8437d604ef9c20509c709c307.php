<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_433e2ea3e52165e8df8dee4526a176f3d2a615947455ef007141e68fd142ec61 extends Twig_Template
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
        $__internal_128e01fe1a4d95999bb0d9fdd35cc21419cede7aa18e3e372406c4f5487b5079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128e01fe1a4d95999bb0d9fdd35cc21419cede7aa18e3e372406c4f5487b5079->enter($__internal_128e01fe1a4d95999bb0d9fdd35cc21419cede7aa18e3e372406c4f5487b5079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e2da4455bd4e326597dd1b9dfdb61d2105496e45dfb1efd36049074379058004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2da4455bd4e326597dd1b9dfdb61d2105496e45dfb1efd36049074379058004->enter($__internal_e2da4455bd4e326597dd1b9dfdb61d2105496e45dfb1efd36049074379058004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_128e01fe1a4d95999bb0d9fdd35cc21419cede7aa18e3e372406c4f5487b5079->leave($__internal_128e01fe1a4d95999bb0d9fdd35cc21419cede7aa18e3e372406c4f5487b5079_prof);

        
        $__internal_e2da4455bd4e326597dd1b9dfdb61d2105496e45dfb1efd36049074379058004->leave($__internal_e2da4455bd4e326597dd1b9dfdb61d2105496e45dfb1efd36049074379058004_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
