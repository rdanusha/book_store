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

/* shop/checkout.html.twig */
class __TwigTemplate_884c7eef815c5a7e7e99b8d161d57de22ea77b5cc4e2f70b6ef3dd20e44f5dd2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/checkout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shop/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "shop/checkout.html.twig", 1);
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

        echo "Checkout";
        
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
        <div class=\"row\">
            <div class=\"col-6\"><h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["page_title"]) || array_key_exists("page_title", $context) ? $context["page_title"] : (function () { throw new RuntimeError('Variable "page_title" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1></div>
        </div>
        <div class=\"row\">
            <div class=\"col-8\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                ";
        if ((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Item</th>
                            <th scope=\"col\">Item Category</th>
                            <th scope=\"col\" class=\"text-right\">Item Price</th>
                            <th scope=\"col\" class=\"text-right\">Quantity</th>
                            <th scope=\"col\" class=\"text-right\">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart_items"]) || array_key_exists("cart_items", $context) ? $context["cart_items"] : (function () { throw new RuntimeError('Variable "cart_items" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cart_item"]) {
                // line 30
                echo "                            <tr class=\"\">
                                <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 32), "productCategory", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                <td class=\"text-right\">";
                // line 33
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33), 2, ".", ","), "html", null, true);
                echo "</td>
                                <td class=\"text-right\">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart_item"], "quantity", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                ";
                // line 35
                $context["unit_price"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cart_item"], "product", [], "any", false, false, false, 35), "price", [], "any", false, false, false, 35) * twig_get_attribute($this->env, $this->source, $context["cart_item"], "quantity", [], "any", false, false, false, 35));
                // line 36
                echo "                                <td class=\"text-right\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["unit_price"]) || array_key_exists("unit_price", $context) ? $context["unit_price"] : (function () { throw new RuntimeError('Variable "unit_price" does not exist.', 36, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Total</b></td>
                            <td class=\"text-right\">";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 41, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</td>
                        </tr>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Children Books Discount</b></td>
                            <td class=\"text-right\">";
            // line 45
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["children_books_discount"]) || array_key_exists("children_books_discount", $context) ? $context["children_books_discount"] : (function () { throw new RuntimeError('Variable "children_books_discount" does not exist.', 45, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</td>
                        </tr>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Additional Discount</b></td>
                            <td class=\"text-right\">";
            // line 49
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["additional_discount"]) || array_key_exists("additional_discount", $context) ? $context["additional_discount"] : (function () { throw new RuntimeError('Variable "additional_discount" does not exist.', 49, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</td>
                        </tr>
                        ";
            // line 51
            if ((isset($context["coupon_code"]) || array_key_exists("coupon_code", $context) ? $context["coupon_code"] : (function () { throw new RuntimeError('Variable "coupon_code" does not exist.', 51, $this->source); })())) {
                // line 52
                echo "                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Coupon Discount</b></td>
                            <td class=\"text-right\">";
                // line 54
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["coupon_discount"]) || array_key_exists("coupon_discount", $context) ? $context["coupon_discount"] : (function () { throw new RuntimeError('Variable "coupon_discount" does not exist.', 54, $this->source); })()), 2, ".", ","), "html", null, true);
                echo "</td>
                        </tr>
                        ";
            }
            // line 57
            echo "                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Coupon Code</b></td>
                            <td class=\"text-right\">

                                <form action=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("checkout");
            echo "\" method=\"POST\">
                                    <input type=\"text\" name=\"coupon_code\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, (isset($context["coupon_code"]) || array_key_exists("coupon_code", $context) ? $context["coupon_code"] : (function () { throw new RuntimeError('Variable "coupon_code" does not exist.', 62, $this->source); })()), "html", null, true);
            echo "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Add Coupon</button>
                                </form>
                            </td>
                        </tr>
                        <tr class=\"table-primary\">
                            <td colspan=\"4\" class=\"text-right bt\"><b>Net Total</b></td>
                            <td class=\"text-right\"><b>";
            // line 69
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["net_total"]) || array_key_exists("net_total", $context) ? $context["net_total"] : (function () { throw new RuntimeError('Variable "net_total" does not exist.', 69, $this->source); })()), 2, ".", ","), "html", null, true);
            echo "</b></td>
                        </tr>
                        </tbody>
                    </table>
                ";
        } else {
            // line 74
            echo "                    <p>No products in cart</p>
                ";
        }
        // line 76
        echo "            </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "shop/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 76,  229 => 74,  221 => 69,  211 => 62,  207 => 61,  201 => 57,  195 => 54,  191 => 52,  189 => 51,  184 => 49,  177 => 45,  170 => 41,  166 => 39,  156 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  135 => 30,  131 => 29,  118 => 18,  115 => 17,  106 => 14,  103 => 13,  99 => 12,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout{% endblock %}

{% block body %}
    <section class=\"mt-3\">
        <div class=\"row\">
            <div class=\"col-6\"><h1>{{ page_title }}</h1></div>
        </div>
        <div class=\"row\">
            <div class=\"col-8\">
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
                {% if cart_items %}
                    <table class=\"table table-striped\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Item</th>
                            <th scope=\"col\">Item Category</th>
                            <th scope=\"col\" class=\"text-right\">Item Price</th>
                            <th scope=\"col\" class=\"text-right\">Quantity</th>
                            <th scope=\"col\" class=\"text-right\">Total</th>
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
                            </tr>
                        {% endfor %}
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Total</b></td>
                            <td class=\"text-right\">{{ cart_total |number_format(2, '.', ',') }}</td>
                        </tr>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Children Books Discount</b></td>
                            <td class=\"text-right\">{{ children_books_discount |number_format(2, '.', ',') }}</td>
                        </tr>
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Additional Discount</b></td>
                            <td class=\"text-right\">{{ additional_discount |number_format(2, '.', ',') }}</td>
                        </tr>
                        {% if (coupon_code) %}
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Coupon Discount</b></td>
                            <td class=\"text-right\">{{ coupon_discount |number_format(2, '.', ',') }}</td>
                        </tr>
                        {% endif %}
                        <tr class=\"\">
                            <td colspan=\"4\" class=\"text-right\"><b>Coupon Code</b></td>
                            <td class=\"text-right\">

                                <form action=\"{{ url('checkout') }}\" method=\"POST\">
                                    <input type=\"text\" name=\"coupon_code\" value=\"{{ coupon_code }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">Add Coupon</button>
                                </form>
                            </td>
                        </tr>
                        <tr class=\"table-primary\">
                            <td colspan=\"4\" class=\"text-right bt\"><b>Net Total</b></td>
                            <td class=\"text-right\"><b>{{ net_total  |number_format(2, '.', ',') }}</b></td>
                        </tr>
                        </tbody>
                    </table>
                {% else %}
                    <p>No products in cart</p>
                {% endif %}
            </div>
    </section>
{% endblock %}
", "shop/checkout.html.twig", "/mnt/b4e33210-d0d5-464b-bd55-b75dd455ba8d/book_store/templates/shop/checkout.html.twig");
    }
}
