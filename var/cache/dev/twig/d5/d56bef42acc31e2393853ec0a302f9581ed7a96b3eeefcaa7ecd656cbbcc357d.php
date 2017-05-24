<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f7f61c297d6a7c736ca87a082777a38766034271aac3973d25c72cca63a94419 extends Twig_Template
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
        $__internal_3c1e7d962db87a1886b9a0098f192c922b2ef7d247e8c25be801f362b71f6685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1e7d962db87a1886b9a0098f192c922b2ef7d247e8c25be801f362b71f6685->enter($__internal_3c1e7d962db87a1886b9a0098f192c922b2ef7d247e8c25be801f362b71f6685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_696cc43843dbdbaa781209faa43d27af38e6771f1438bc874a8878c873370dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696cc43843dbdbaa781209faa43d27af38e6771f1438bc874a8878c873370dc3->enter($__internal_696cc43843dbdbaa781209faa43d27af38e6771f1438bc874a8878c873370dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3c1e7d962db87a1886b9a0098f192c922b2ef7d247e8c25be801f362b71f6685->leave($__internal_3c1e7d962db87a1886b9a0098f192c922b2ef7d247e8c25be801f362b71f6685_prof);

        
        $__internal_696cc43843dbdbaa781209faa43d27af38e6771f1438bc874a8878c873370dc3->leave($__internal_696cc43843dbdbaa781209faa43d27af38e6771f1438bc874a8878c873370dc3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
