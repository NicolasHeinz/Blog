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

/* KilikTableBundle::_rowsPerPage.html.twig */
class __TwigTemplate_ff62104688e2f7dd19f36bc1567a08e59578eced2e9a79b442057e119834f185 extends \Twig\Template
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
        echo "<span>
    <select id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "_rows_per_page\" class=\"input-sm\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "rowsPerPageOptions", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["rowsPerPage"]) {
            // line 5
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["rowsPerPage"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["rowsPerPage"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowsPerPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </select>
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("kiliktable.rows_per_page"), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "KilikTableBundle::_rowsPerPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  59 => 7,  48 => 5,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "KilikTableBundle::_rowsPerPage.html.twig", "/home/nicolas/Documentos/Blog/vendor/kilik/table/Resources/views/_rowsPerPage.html.twig");
    }
}
