<?php

/* product/index.html.twig */
class __TwigTemplate_51dfa145c6a2fad1cdcca8af07f626da50aa7f85a713984637ddbb1828f6bf11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 1);
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
        $__internal_9c45795c51bc3cc2deaec0c73584953866c2b935385abcd559a6a459a784dcbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c45795c51bc3cc2deaec0c73584953866c2b935385abcd559a6a459a784dcbc->enter($__internal_9c45795c51bc3cc2deaec0c73584953866c2b935385abcd559a6a459a784dcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_882979413746401bb947723806b48727281036d2b3b9fd337ae69959ac93c2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882979413746401bb947723806b48727281036d2b3b9fd337ae69959ac93c2f6->enter($__internal_882979413746401bb947723806b48727281036d2b3b9fd337ae69959ac93c2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c45795c51bc3cc2deaec0c73584953866c2b935385abcd559a6a459a784dcbc->leave($__internal_9c45795c51bc3cc2deaec0c73584953866c2b935385abcd559a6a459a784dcbc_prof);

        
        $__internal_882979413746401bb947723806b48727281036d2b3b9fd337ae69959ac93c2f6->leave($__internal_882979413746401bb947723806b48727281036d2b3b9fd337ae69959ac93c2f6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d007e9e658019841098c6ead4d761d6851dc27e4c9ace024d8ac9836acedc790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d007e9e658019841098c6ead4d761d6851dc27e4c9ace024d8ac9836acedc790->enter($__internal_d007e9e658019841098c6ead4d761d6851dc27e4c9ace024d8ac9836acedc790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ec3c3b119919dde0e6f34e4cb468f74a4718dff4552502a975bc06d1ed2c593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec3c3b119919dde0e6f34e4cb468f74a4718dff4552502a975bc06d1ed2c593->enter($__internal_9ec3c3b119919dde0e6f34e4cb468f74a4718dff4552502a975bc06d1ed2c593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
                <th>Category</th>

            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "categoryId", array()), "html", null, true);
            echo "</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_edit", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_new");
        echo "\">Create a new product</a>
        </li>
    </ul>
";
        
        $__internal_9ec3c3b119919dde0e6f34e4cb468f74a4718dff4552502a975bc06d1ed2c593->leave($__internal_9ec3c3b119919dde0e6f34e4cb468f74a4718dff4552502a975bc06d1ed2c593_prof);

        
        $__internal_d007e9e658019841098c6ead4d761d6851dc27e4c9ace024d8ac9836acedc790->leave($__internal_d007e9e658019841098c6ead4d761d6851dc27e4c9ace024d8ac9836acedc790_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 44,  117 => 39,  105 => 33,  99 => 30,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  73 => 21,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Products list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
                <th>Category</th>

            </tr>
        </thead>
        <tbody>
        {% for product in products %}
            <tr>
                <td><a href=\"{{ path('product_show', { 'id': product.id }) }}\">{{ product.id }}</a></td>
                <td>{{ product.title }}</td>
                <td>{{ product.description }}</td>
                <td>{{ product.price }}</td>
                <td>{{ product.categoryId }}</td>

                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('product_show', { 'id': product.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('product_edit', { 'id': product.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('product_new') }}\">Create a new product</a>
        </li>
    </ul>
{% endblock %}
", "product/index.html.twig", "/home/vincent/plateform/app/Resources/views/product/index.html.twig");
    }
}
