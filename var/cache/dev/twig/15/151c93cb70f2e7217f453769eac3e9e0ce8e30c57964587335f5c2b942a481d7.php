<?php

/* category/index.html.twig */
class __TwigTemplate_9bb1dea3922d529cf893ff771ec1583365960f12f98b4643bfb46b80eb8db766 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "category/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd3a2f2d4ce1647caa5a7f2f6c91de8dd8d7ddcb09322a26a62cf5cb56b2476d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd3a2f2d4ce1647caa5a7f2f6c91de8dd8d7ddcb09322a26a62cf5cb56b2476d->enter($__internal_dd3a2f2d4ce1647caa5a7f2f6c91de8dd8d7ddcb09322a26a62cf5cb56b2476d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $__internal_e633cb820a405d6e37149074e7f920ebf558f8235b144257255af0be607b5e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e633cb820a405d6e37149074e7f920ebf558f8235b144257255af0be607b5e9b->enter($__internal_e633cb820a405d6e37149074e7f920ebf558f8235b144257255af0be607b5e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "category/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3a2f2d4ce1647caa5a7f2f6c91de8dd8d7ddcb09322a26a62cf5cb56b2476d->leave($__internal_dd3a2f2d4ce1647caa5a7f2f6c91de8dd8d7ddcb09322a26a62cf5cb56b2476d_prof);

        
        $__internal_e633cb820a405d6e37149074e7f920ebf558f8235b144257255af0be607b5e9b->leave($__internal_e633cb820a405d6e37149074e7f920ebf558f8235b144257255af0be607b5e9b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_44eb1311c6c07570d8543e0026fe3a399e0c51f8056048d66e1eeb11b8342a53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44eb1311c6c07570d8543e0026fe3a399e0c51f8056048d66e1eeb11b8342a53->enter($__internal_44eb1311c6c07570d8543e0026fe3a399e0c51f8056048d66e1eeb11b8342a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0866c19b453fedcc5da9327f220147870a2856163062e0fbacee1a84c0fb5d41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0866c19b453fedcc5da9327f220147870a2856163062e0fbacee1a84c0fb5d41->enter($__internal_0866c19b453fedcc5da9327f220147870a2856163062e0fbacee1a84c0fb5d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Parentid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_show", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
        
        $__internal_0866c19b453fedcc5da9327f220147870a2856163062e0fbacee1a84c0fb5d41->leave($__internal_0866c19b453fedcc5da9327f220147870a2856163062e0fbacee1a84c0fb5d41_prof);

        
        $__internal_44eb1311c6c07570d8543e0026fe3a399e0c51f8056048d66e1eeb11b8342a53->leave($__internal_44eb1311c6c07570d8543e0026fe3a399e0c51f8056048d66e1eeb11b8342a53_prof);

    }

    public function getTemplateName()
    {
        return "category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  105 => 33,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Categories list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Parentid</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for category in categories %}
            <tr>
                <td><a href=\"{{ path('category_show', { 'id': category.id }) }}\">{{ category.id }}</a></td>
                <td>{{ category.name }}</td>
                <td>{{ category.parentId }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('category_show', { 'id': category.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('category_edit', { 'id': category.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('category_new') }}\">Create a new category</a>
        </li>
    </ul>
{% endblock %}
", "category/index.html.twig", "/home/vincent/plateform/app/Resources/views/category/index.html.twig");
    }
}
