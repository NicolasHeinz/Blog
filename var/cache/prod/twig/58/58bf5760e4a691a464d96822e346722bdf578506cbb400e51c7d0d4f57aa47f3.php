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

/* HomeBundle:t:_stats.html.twig */
class __TwigTemplate_3126249da05ee817d4367c174d9402dd8353b93bf4dd05487182b28284c712f5 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        if ((isset($context["tableRenderStats"]) || array_key_exists("tableRenderStats", $context))) {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("kiliktable.showing_entries", twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "filteredRows", [], "any", false, false, false, 4), ["%firstRow%" => twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "firstRow", [], "any", false, false, false, 4), "%lastRow%" => twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "lastRow", [], "any", false, false, false, 4), "%filteredRows%" => twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "filteredRows", [], "any", false, false, false, 4)])), "html", null, true);
            echo "
    ";
            // line 5
            if (((twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "filteredRows", [], "any", false, false, false, 5) != twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "totalRows", [], "any", false, false, false, 5)) && (twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "totalRows", [], "any", false, false, false, 5) > 0))) {
                // line 6
                echo "        (";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("kiliktable.filtered_from", twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "totalRows", [], "any", false, false, false, 6), ["%totalRows%" => twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "totalRows", [], "any", false, false, false, 6)])), "html", null, true);
                echo ")
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "HomeBundle:t:_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  47 => 5,  42 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:t:_stats.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/t/_stats.html.twig");
    }
}
