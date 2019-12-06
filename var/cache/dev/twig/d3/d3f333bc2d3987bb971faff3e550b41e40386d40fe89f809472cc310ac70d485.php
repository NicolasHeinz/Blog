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

/* @KilikTable/_columnFilterNoTable.html.twig */
class __TwigTemplate_b0c1903bc38937e97eb5ac6602a0a158a3fdc2324585c6edc4d80ec01d123e2a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_columnFilterNoTable.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KilikTable/_columnFilterNoTable.html.twig"));

        // line 2
        echo "<div data-column=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "html", null, true);
        echo "\">
    ";
        // line 3
        if ( !(null === $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", []))) {
            // line 4
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["table"] ?? $this->getContext($context, "table")), "formView", []), $this->getAttribute($this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "filter", []), "name", [])), 'widget', ["attr" => ["class" => "form-control refreshOnKeyup refreshOnChange", "data-column" => $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "name", []), "data-label" => $this->getAttribute(($context["column"] ?? $this->getContext($context, "column")), "label", [])]]);
            echo "
    ";
        }
        // line 6
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@KilikTable/_columnFilterNoTable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 4,  41 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @KilikTable/_columnFilterNoTable.html.twig #}
<div data-column=\"{{ column.name }}\">
    {% if column.filter is not null %}
        {{ form_widget(attribute(table.formView,column.filter.name ),{\"attr\": {\"class\": \"form-control refreshOnKeyup refreshOnChange\",\"data-column\": column.name,\"data-label\": column.label} }) }}
    {% endif %}
</div>
", "@KilikTable/_columnFilterNoTable.html.twig", "/home/nicolas/blog/vendor/kilik/table/Resources/views/_columnFilterNoTable.html.twig");
    }
}
