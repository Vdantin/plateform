<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6433c15b8cce8609775c1d6f40f542b10dd83c95a66ac90f302beae12654d522 extends Twig_Template
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
        $__internal_38fb01df1bd253425e0528db2ee20e4fc1bd80f42045520abb270a2c714483d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fb01df1bd253425e0528db2ee20e4fc1bd80f42045520abb270a2c714483d2->enter($__internal_38fb01df1bd253425e0528db2ee20e4fc1bd80f42045520abb270a2c714483d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_b368e9834693eda76a590781af5a763f9330181d0b5cf4e7b2e0ca4395d98848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b368e9834693eda76a590781af5a763f9330181d0b5cf4e7b2e0ca4395d98848->enter($__internal_b368e9834693eda76a590781af5a763f9330181d0b5cf4e7b2e0ca4395d98848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_38fb01df1bd253425e0528db2ee20e4fc1bd80f42045520abb270a2c714483d2->leave($__internal_38fb01df1bd253425e0528db2ee20e4fc1bd80f42045520abb270a2c714483d2_prof);

        
        $__internal_b368e9834693eda76a590781af5a763f9330181d0b5cf4e7b2e0ca4395d98848->leave($__internal_b368e9834693eda76a590781af5a763f9330181d0b5cf4e7b2e0ca4395d98848_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
