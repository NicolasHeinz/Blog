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

/* HomeBundle:t:_setup.html.twig */
class __TwigTemplate_093b07a46f050355d5409d6c7dbac86fa36000b387cc641fe972ac5187b9d26d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:t:_setup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:t:_setup.html.twig"));

        // line 2
        echo "
<span class=\"dropdown\">
    <button class=\"btn btn-normal dropdown-toggle\" id=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-cog\"></span> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.setup"), "html", null, true);
        echo "</button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "_setup\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 6, $this->source); })()), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            ";
            $context["label"] = twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7);
            // line 8
            echo "            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 8))) {
                // line 9
                echo "                ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 9), [], twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 9));
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "capitalize", [], "any", false, false, false, 10)) {
                    // line 11
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 11, $this->source); })()));
                    // line 12
                    echo "                ";
                }
                // line 13
                echo "            ";
            }
            // line 14
            echo "
            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"input\"></input> ";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</span>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 21,  87 => 17,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  61 => 7,  57 => 6,  53 => 5,  47 => 4,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_setup.html.twig #}

<span class=\"dropdown\">
    <button class=\"btn btn-normal dropdown-toggle\" id=\"{{ table.id }}_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><span class=\"glyphicon glyphicon-cog\"></span> {{ \"kiliktable.setup\" |trans }}</button>
    <ul class=\"dropdown-menu\" aria-labelledby=\"{{ table.id }}_setup\">
        {% for column in table.columns %}
            {% set label = column.label %}
            {% if column.translateDomain is not null %}
                {% set label = (column.label | trans({}, column.translateDomain)) %}
                {% if column.capitalize %}
                    {% set label = label | capitalize %}
                {% endif %}
            {% endif %}

            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"{{ column.name }}\" data-setup=\"{{ table.id }}\" class=\"input\"></input> {{ label }}
                </a>
            </li>
        {% endfor %}
    </ul>
</span>
", "HomeBundle:t:_setup.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_setup.html.twig");
    }
}
