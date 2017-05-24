<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c9d6a6f0b30e3bf0a84e383458e5961cb6e2def60cfba610286895ad10204785 extends Twig_Template
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
        $__internal_bd1cc8422a3ab53a02cbe6b60bff75298cb0603ddde83a1a3c57b88bdca59875 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1cc8422a3ab53a02cbe6b60bff75298cb0603ddde83a1a3c57b88bdca59875->enter($__internal_bd1cc8422a3ab53a02cbe6b60bff75298cb0603ddde83a1a3c57b88bdca59875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_30fbe235c5bf57b4e311226c778830589790e511580fa5193a4edccb669d47e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30fbe235c5bf57b4e311226c778830589790e511580fa5193a4edccb669d47e0->enter($__internal_30fbe235c5bf57b4e311226c778830589790e511580fa5193a4edccb669d47e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bd1cc8422a3ab53a02cbe6b60bff75298cb0603ddde83a1a3c57b88bdca59875->leave($__internal_bd1cc8422a3ab53a02cbe6b60bff75298cb0603ddde83a1a3c57b88bdca59875_prof);

        
        $__internal_30fbe235c5bf57b4e311226c778830589790e511580fa5193a4edccb669d47e0->leave($__internal_30fbe235c5bf57b4e311226c778830589790e511580fa5193a4edccb669d47e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
