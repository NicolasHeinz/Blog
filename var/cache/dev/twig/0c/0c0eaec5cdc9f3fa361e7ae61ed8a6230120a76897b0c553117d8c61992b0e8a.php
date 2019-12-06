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

/* @Home/t/_columnCellNoTable.html.twig */
class __TwigTemplate_b81298bf432e7093aee73fad161b413c540a17fb630abe5369790d61180bda19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_columnCellNoTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/t/_columnCellNoTable.html.twig"));

        // line 2
        if ( !$this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "hidden", [])) {
            // line 3
            echo "    <div ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "displayClass", [])) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "displayClass", []), "html", null, true);
                echo "\"";
            }
            echo " data-label=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", []), "html", null, true);
            echo "\">
        ";
            // line 4
            $context["cellHtml"] = $this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "value", [0 => ($context["column"] ?? $this->getContext($context, "column")), 1 => ($context["row"] ?? $this->getContext($context, "row"))], "method");
            // line 5
            echo "        ";
            if ($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "raw", [])) {
                // line 6
                echo "            ";
                echo ($context["cellHtml"] ?? $this->getContext($context, "cellHtml"));
                echo "
        ";
            } else {
                // line 8
                echo "            ";
                echo twig_escape_filter($this->env, ($context["cellHtml"] ?? $this->getContext($context, "cellHtml")), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@Home/t/_columnCellNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  60 => 8,  54 => 6,  51 => 5,  49 => 4,  38 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_columnCell.html.twig #}
{% if not column.hidden %}
    <div {% if column.displayClass %}class=\"{{ column.displayClass }}\"{% endif %} data-label=\"{{column.label}}\">
        {% set cellHtml=table.value(column,row) %}
        {% if column.raw %}
            {{ cellHtml | raw }}
        {% else %}
            {{ cellHtml }}
        {% endif %}
    </div>
{% endif %}
", "@Home/t/_columnCellNoTable.html.twig", "/home/nicolas/blog/src/HomeBundle/Resources/views/t/_columnCellNoTable.html.twig");
    }
}
