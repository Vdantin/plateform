<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2dc68a2e381a0d8a6a88bbe9c4e6504655ce5db859cf0383c25a40f16eb597fe extends Twig_Template
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
        $__internal_4c49dbead3f338418f75261312f041754eb8f35bdd7b3e2dd03e7ac21fe1ba85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c49dbead3f338418f75261312f041754eb8f35bdd7b3e2dd03e7ac21fe1ba85->enter($__internal_4c49dbead3f338418f75261312f041754eb8f35bdd7b3e2dd03e7ac21fe1ba85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_d4085df6db8866fa836e0dfde2d1dd30389f07ea3b895bc7f6ee0b3cf81b4eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4085df6db8866fa836e0dfde2d1dd30389f07ea3b895bc7f6ee0b3cf81b4eb5->enter($__internal_d4085df6db8866fa836e0dfde2d1dd30389f07ea3b895bc7f6ee0b3cf81b4eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_4c49dbead3f338418f75261312f041754eb8f35bdd7b3e2dd03e7ac21fe1ba85->leave($__internal_4c49dbead3f338418f75261312f041754eb8f35bdd7b3e2dd03e7ac21fe1ba85_prof);

        
        $__internal_d4085df6db8866fa836e0dfde2d1dd30389f07ea3b895bc7f6ee0b3cf81b4eb5->leave($__internal_d4085df6db8866fa836e0dfde2d1dd30389f07ea3b895bc7f6ee0b3cf81b4eb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
