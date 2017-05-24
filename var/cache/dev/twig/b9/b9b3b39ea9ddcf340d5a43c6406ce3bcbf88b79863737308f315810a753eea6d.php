<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_fe57c777a999d78c814327b35f450c63aea346a0ace73ee043f6e0cdd0048cd0 extends Twig_Template
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
        $__internal_ae084ebc696694e155cda6dbeb67ed9cd0f9c22845c4b8c53805c3568bc55378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae084ebc696694e155cda6dbeb67ed9cd0f9c22845c4b8c53805c3568bc55378->enter($__internal_ae084ebc696694e155cda6dbeb67ed9cd0f9c22845c4b8c53805c3568bc55378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_661b10208b6844ee64db1eaf6b8aad2cb494afbc951b5c6f2e7c016ec3e42c78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661b10208b6844ee64db1eaf6b8aad2cb494afbc951b5c6f2e7c016ec3e42c78->enter($__internal_661b10208b6844ee64db1eaf6b8aad2cb494afbc951b5c6f2e7c016ec3e42c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ae084ebc696694e155cda6dbeb67ed9cd0f9c22845c4b8c53805c3568bc55378->leave($__internal_ae084ebc696694e155cda6dbeb67ed9cd0f9c22845c4b8c53805c3568bc55378_prof);

        
        $__internal_661b10208b6844ee64db1eaf6b8aad2cb494afbc951b5c6f2e7c016ec3e42c78->leave($__internal_661b10208b6844ee64db1eaf6b8aad2cb494afbc951b5c6f2e7c016ec3e42c78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/vincent/plateform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
