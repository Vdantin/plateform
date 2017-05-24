<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_b685b16dfe6a86f2059a48079ac009145b60c691ad6abd8c154dc7c55aaa0dce extends Twig_Template
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
        $__internal_e07dae67e44efcf81d03644a5569012d99e957420d36e45bbe70583409332734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e07dae67e44efcf81d03644a5569012d99e957420d36e45bbe70583409332734->enter($__internal_e07dae67e44efcf81d03644a5569012d99e957420d36e45bbe70583409332734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4f2bdd15e55d0324e7e80dcb52ba7032612fbe5b68afb91d4109c8b20781860d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2bdd15e55d0324e7e80dcb52ba7032612fbe5b68afb91d4109c8b20781860d->enter($__internal_4f2bdd15e55d0324e7e80dcb52ba7032612fbe5b68afb91d4109c8b20781860d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e07dae67e44efcf81d03644a5569012d99e957420d36e45bbe70583409332734->leave($__internal_e07dae67e44efcf81d03644a5569012d99e957420d36e45bbe70583409332734_prof);

        
        $__internal_4f2bdd15e55d0324e7e80dcb52ba7032612fbe5b68afb91d4109c8b20781860d->leave($__internal_4f2bdd15e55d0324e7e80dcb52ba7032612fbe5b68afb91d4109c8b20781860d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
