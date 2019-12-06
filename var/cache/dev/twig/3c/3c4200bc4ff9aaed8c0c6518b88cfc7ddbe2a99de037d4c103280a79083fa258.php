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

/* @Home/t/_stats.html.twig */
class __TwigTemplate_f05ffb8c7eee9951a05573fa446cd79076be9667b45b2d1e717bb41b625416c5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_stats.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_stats.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["tableRenderStats"]) || array_key_exists("tableRenderStats", $context))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("kiliktable.showing_entries", $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", []), ["%firstRow%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "firstRow", []), "%lastRow%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "lastRow", []), "%filteredRows%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", [])])), "html", null, true);
            echo "
    ";
            // line 5
            if ((($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "filteredRows", []) != $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", [])) && ($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", []) > 0))) {
                // line 6
                echo "        (";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("kiliktable.filtered_from", $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", []), ["%totalRows%" => $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "totalRows", [])])), "html", null, true);
                echo ")
    ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Home/t/_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  46 => 5,  41 => 4,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_stats.html.twig #}

{% if tableRenderStats is defined %}
    {{ \"kiliktable.showing_entries\"|transchoice(table.filteredRows,{\"%firstRow%\": table.firstRow,\"%lastRow%\": table.lastRow,\"%filteredRows%\":table.filteredRows})|capitalize }}
    {% if table.filteredRows != table.totalRows and table.totalRows > 0%}
        ({{ \"kiliktable.filtered_from\"|transchoice(table.totalRows,{\"%totalRows%\":table.totalRows})|capitalize }})
    {% endif %}
{% endif %}
", "@Home/t/_stats.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/t/_stats.html.twig");
    }
}
