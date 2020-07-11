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

/* inc/_cart_total.html.twig */
class __TwigTemplate_c99ae9ba835a9bfe4d54f7f5f789faad5cae73d3e85052f851829a45e658e98b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/_cart_total.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inc/_cart_total.html.twig"));

        // line 1
        echo "
    <div class=\"col-12  mb-1\">
        <div class=\"card border-white mb-1 float-right\" style=\"max-width: 20rem;\">
            <div class=\"card-body text-center\">
                <h4 class=\"card-title\">Cart Total: Rs ";
        // line 5
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["cart_total"]) || array_key_exists("cart_total", $context) ? $context["cart_total"] : (function () { throw new RuntimeError('Variable "cart_total" does not exist.', 5, $this->source); })()), 2, ".", ","), "html", null, true);
        echo "</h4>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("checkout");
        echo "\" type=\"button\" class=\"btn btn-danger btn-sm\">Checkout</a>
            </div>
        </div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "inc/_cart_total.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <div class=\"col-12  mb-1\">
        <div class=\"card border-white mb-1 float-right\" style=\"max-width: 20rem;\">
            <div class=\"card-body text-center\">
                <h4 class=\"card-title\">Cart Total: Rs {{ cart_total|number_format(2, '.', ',')  }}</h4>
                <a href=\"{{ url('checkout') }}\" type=\"button\" class=\"btn btn-danger btn-sm\">Checkout</a>
            </div>
        </div>
    </div>
", "inc/_cart_total.html.twig", "/mnt/b4e33210-d0d5-464b-bd55-b75dd455ba8d/book_store/templates/inc/_cart_total.html.twig");
    }
}
