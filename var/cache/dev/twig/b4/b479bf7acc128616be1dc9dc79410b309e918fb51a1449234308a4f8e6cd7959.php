<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_95dfecc2bc54143adf6739b230500a66d929caa10de6f5bfaf6ce3ad3a17378e extends Twig_Template
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
        $__internal_950c7d5342a55769a5d0fd1bc78b2199c997078ab8df4c6cafaca8b2b2bae5f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950c7d5342a55769a5d0fd1bc78b2199c997078ab8df4c6cafaca8b2b2bae5f0->enter($__internal_950c7d5342a55769a5d0fd1bc78b2199c997078ab8df4c6cafaca8b2b2bae5f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2aaef20e4a3aa99fe53be0300a6239f136c23cac105f783e6406ac95804b35db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aaef20e4a3aa99fe53be0300a6239f136c23cac105f783e6406ac95804b35db->enter($__internal_2aaef20e4a3aa99fe53be0300a6239f136c23cac105f783e6406ac95804b35db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_950c7d5342a55769a5d0fd1bc78b2199c997078ab8df4c6cafaca8b2b2bae5f0->leave($__internal_950c7d5342a55769a5d0fd1bc78b2199c997078ab8df4c6cafaca8b2b2bae5f0_prof);

        
        $__internal_2aaef20e4a3aa99fe53be0300a6239f136c23cac105f783e6406ac95804b35db->leave($__internal_2aaef20e4a3aa99fe53be0300a6239f136c23cac105f783e6406ac95804b35db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
