<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Home/table/_setup.html.twig */
class __TwigTemplate_d4ede60b4903ea32ffc0485d1bb9f3b94da33fb6b7e2927ffce6ca9da3acacc7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/table/_setup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/table/_setup.html.twig"));

        // line 1
        echo "<div class=\"btn-group\" role=\"group\">
    <button type=\"button\" class=\"btn btn-default dropdown-toggle\" id=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_setup\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        <span class=\"glyphicon glyphicon-cog\"></span>
        <span class=\"caret\"></span>
    </button>

    <ul class=\"dropdown-menu pull-right\" aria-labelledby=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
        echo "_setup\">
        <li class=\"dropdown-header\">
            Mostrar Columnas
        </li>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "columns", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 13
            echo "            ";
            $context["label"] = $this->getAttribute($context["column"], "label", []);
            // line 14
            echo "            ";
            if ( !(null === $this->getAttribute($context["column"], "translateDomain", []))) {
                // line 15
                echo "                ";
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["column"], "label", []), [], $this->getAttribute($context["column"], "translateDomain", []));
                // line 16
                echo "                ";
                if ($this->getAttribute($context["column"], "capitalize", [])) {
                    // line 17
                    echo "                    ";
                    $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")));
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["column"], "name", []), "html", null, true);
            echo "\" data-setup=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "id", []), "html", null, true);
            echo "\" class=\"input\"> ";
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
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
        return "@Home/table/_setup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 27,  85 => 23,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  55 => 12,  47 => 7,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
</div>", "@Home/table/_setup.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/table/_setup.html.twig");
    }
}
