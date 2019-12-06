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

/* @KilikTable/_columnNameNoTable.html.twig */
class __TwigTemplate_4fec9bafe954677ec3d1a7a915bc22c55ea3452cd362b89243930bb79c848c9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_columnNameNoTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_columnNameNoTable.html.twig"));

        // line 2
        $context["label"] = $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", []);
        // line 3
        if ( !(null === $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "translateDomain", []))) {
            // line 4
            echo "    ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", []), [], $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "translateDomain", []));
            // line 5
            echo "    ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "capitalize", [])) {
                // line 6
                echo "        ";
                $context["label"] = twig_capitalize_string_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")));
                // line 7
                echo "    ";
            }
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "sortable", [])) {
            // line 11
            echo "    <div class=\"columnSortable\" data-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "html", null, true);
            echo "\" data-sort-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", []), "html", null, true);
            echo "\" scope=\"col\">
        <a href=\"#\">
            ";
            // line 13
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </div>
";
        } else {
            // line 18
            echo "    <div data-column=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "html", null, true);
            echo "\" data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", []), "html", null, true);
            echo "\" scope=\"col\">
        ";
            // line 19
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
    </div>
";
        }
        // line 22
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KilikTable/_columnNameNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  83 => 19,  76 => 18,  68 => 13,  58 => 11,  56 => 10,  53 => 9,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  38 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_columnNameNoTable.html.twig #}
{% set label = column.label %}
{% if column.translateDomain is not null %}
    {% set label = (column.label | trans({}, column.translateDomain)) %}
    {% if column.capitalize %}
        {% set label = label | capitalize %}
    {% endif %}
{% endif %}

{% if column.sortable %}
    <div class=\"columnSortable\" data-column=\"{{ column.name }}\" data-sort-column=\"{{ column.name }}\" data-label=\"{{column.label}}\" scope=\"col\">
        <a href=\"#\">
            {{ label }}
        </a>
        <span class=\"glyphicon columnSortableIcon\"></span>
    </div>
{% else %}
    <div data-column=\"{{ column.name }}\" data-label=\"{{column.label}}\" scope=\"col\">
        {{ label }}
    </div>
{% endif %}

", "@KilikTable/_columnNameNoTable.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_columnNameNoTable.html.twig");
    }
}
