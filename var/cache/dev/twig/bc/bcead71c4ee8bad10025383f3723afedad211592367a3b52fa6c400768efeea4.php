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

/* HomeBundle:table:_setup.html.twig */
class __TwigTemplate_f917d86e86ad671230057ced45f6f1b11ed38f078f87e3f58cff139e6726597a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:table:_setup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "HomeBundle:table:_setup.html.twig"));

        // line 1
        echo "<div class=\"btn-group\" role=\"group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <span class=\"glyphicon glyphicon-cog\"></span>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\" aria-labelledby=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "_setup\">
        <li class=\"dropdown-header\">
            Mostrar Columnas
        </li>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 12, $this->source); })()), "columns", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 13
            echo "            ";
            $context["label"] = twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 13);
            // line 14
            echo "            ";
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 14))) {
                // line 15
                echo "                ";
                $context["label"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 15), [], twig_get_attribute($this->env, $this->source, $context["column"], "translateDomain", [], "any", false, false, false, 15));
                // line 16
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["column"], "capitalize", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 17, $this->source); })()));
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "            ";
            }
            // line 20
            echo "
            <li>
                <a>
                    <input type=\"checkbox\" data-column=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"input\"> ";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "HomeBundle:table:_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  92 => 23,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  66 => 13,  62 => 12,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"btn-group\" role=\"group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"{{ table.id }}_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <span class=\"glyphicon glyphicon-cog\"></span>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\" aria-labelledby=\"{{ table.id }}_setup\">
        <li class=\"dropdown-header\">
            Mostrar Columnas
        </li>

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
                    <input type=\"checkbox\" data-column=\"{{ column.name }}\" data-setup=\"{{ table.id }}\" class=\"input\"> {{ label }}
                </a>
            </li>
        {% endfor %}
    </ul>
</div>", "HomeBundle:table:_setup.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/table/_setup.html.twig");
    }
}
