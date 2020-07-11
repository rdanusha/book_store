<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart/index.html.twig */
class __TwigTemplate_b0e0be5ad885ded9f1c44a802f45a44ccbacd43c9d4cf46b79221d7a9747b9fb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Your Cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"mt-3\">
        ";
        // line 7
        echo twig_include($this->env, $context, "inc/_cart_total.html.twig");
        echo "
        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 10
        if ((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Item</th>
                            <th scope=\"col\">Item Category</th>
                            <th scope=\"col\" class=\"text-right\">Item Price</th>
                            <th scope=\"col\" class=\"text-right\">Quantity</th>
                            <th scope=\"col\" class=\"text-right\">Total</th>
                            <th scope=\"col\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cart_item"]) {
                // line 24
                echo "                            <tr class=\"\">
                                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                echo "</td>
                                <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 26), "productCategory", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                                <td class=\"text-right\">";
                // line 27
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), 2, ".", ","), "html", null, true);
                echo "</td>
                                <td class=\"text-right\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "quantity", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                                ";
                // line 29
                $context["unit_price"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 29), "price", [], "any", false, false, false, 29) * twig_get_attribute($this->env, $this->source, $context["cart_item"], "quantity", [], "any", false, false, false, 29));
                // line 30
                echo "                                <td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["unit_price"]) || array_key_exists("unit_price", $context) ? $context["unit_price"] : (function () { throw new RuntimeError('Variable "unit_price" does not exist.', 30, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete\" data-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart_item_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["cart_item"], "id", [], "any", false, false, false, 32)]), "html", null, true);
                echo "\">Delete</button>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                        </tbody>
                    </table>
                ";
        } else {
            // line 39
            echo "                    <p>No products in cart</p>
                ";
        }
        // line 41
        echo "            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 41,  159 => 39,  154 => 36,  144 => 32,  138 => 30,  136 => 29,  132 => 28,  128 => 27,  124 => 26,  120 => 25,  117 => 24,  113 => 23,  99 => 11,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Your Cart{% endblock %}

{% block body %}
    <section class=\"mt-3\">
        {{ include('inc/_cart_total.html.twig') }}
        <div class=\"row\">
            <div class=\"col-12\">
                {% if cart_items %}
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Item</th>
                            <th scope=\"col\">Item Category</th>
                            <th scope=\"col\" class=\"text-right\">Item Price</th>
                            <th scope=\"col\" class=\"text-right\">Quantity</th>
                            <th scope=\"col\" class=\"text-right\">Total</th>
                            <th scope=\"col\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for cart_item in cart_items %}
                            <tr class=\"\">
                                <td>{{ cart_item.product.name }}</td>
                                <td>{{ cart_item.product.productCategory }}</td>
                                <td class=\"text-right\">{{ cart_item.product.price|number_format(2, '.', ',') }}</td>
                                <td class=\"text-right\">{{ cart_item.quantity }}</td>
                                {% set unit_price = cart_item.product.price * cart_item.quantity %}
                                <td class=\"text-right\">{{ unit_price|number_format(2, '.', ',') }}</td>
                                <td>
                                    <button type=\"button\" class=\"btn btn-sm btn-outline-danger delete\" data-url=\"{{ url('cart_item_delete', {id: cart_item.id}) }}\">Delete</button>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                {% else %}
                    <p>No products in cart</p>
                {% endif %}
            </div>
    </section>
{% endblock %}
", "cart/index.html.twig", "/mnt/b4e33210-d0d5-464b-bd55-b75dd455ba8d/book_store/templates/cart/index.html.twig");
    }
}
