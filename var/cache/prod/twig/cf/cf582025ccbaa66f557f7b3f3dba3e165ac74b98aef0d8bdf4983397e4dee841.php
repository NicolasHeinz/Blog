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

/* HomeBundle:Tablas:userlista.html.twig */
class __TwigTemplate_e6fb28a7655295829b8ceb8a95492b72ecd379a653c1766610bb60412c6db711 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "HomeBundle:Tablas:userlista.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    <section class=\"container\">
        <div class=\"row\">
            <div class=\"sm-12\">
                ";
        // line 8
        $this->loadTemplate("HomeBundle:Tablas:userlista.html.twig", "HomeBundle:Tablas:userlista.html.twig", 8, "94932558")->display(twig_array_merge($context, ["table" => ($context["table"] ?? null)]));
        // line 28
        echo "            </div>
        </div>
    </section>

";
    }

    // line 34
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" type=\"text/css\"  href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">
    <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-2.2.0.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/bundles/kiliktable/js/KilikTable.js"), "html", null, true);
        echo "\"></script>

    <script>
        \$(document).ready(function () {
        var table = new KilikTable(\"";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "id", [], "any", false, false, false, 44), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "path", [], "any", false, false, false, 44), "html", null, true);
        echo "\", JSON.parse('";
        echo json_encode(twig_get_attribute($this->env, $this->source, ($context["table"] ?? null), "options", [], "any", false, false, false, 44));
        echo "'));

        table.init();
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "HomeBundle:Tablas:userlista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 44,  80 => 40,  71 => 35,  67 => 34,  59 => 28,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:Tablas:userlista.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Tablas/userlista.html.twig");
    }
}


/* HomeBundle:Tablas:userlista.html.twig */
class __TwigTemplate_e6fb28a7655295829b8ceb8a95492b72ecd379a653c1766610bb60412c6db711___94932558 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tableTitle' => [$this, 'block_tableTitle'],
            'tableHeadStdColumns' => [$this, 'block_tableHeadStdColumns'],
            'tableHeadStdFilters' => [$this, 'block_tableHeadStdFilters'],
            'tableBodyStdColumns' => [$this, 'block_tableBodyStdColumns'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return "@Home/t/_defaultTable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@Home/t/_defaultTable.html.twig", "HomeBundle:Tablas:userlista.html.twig", 8);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_tableTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "                        <b>Listado de Usuarios</b>
                        <div class=\"navbar navbar-right\">
                            <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"></span> Home</a>
                        </div>
                    ";
    }

    // line 16
    public function block_tableHeadStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "                        <th>&nbsp;</th>
                        ";
        // line 18
        $this->displayParentBlock("tableHeadStdColumns", $context, $blocks);
        echo "
                    ";
    }

    // line 20
    public function block_tableHeadStdFilters($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "                        <td>&nbsp;</td>
                        ";
        // line 22
        $this->displayParentBlock("tableHeadStdFilters", $context, $blocks);
        echo "
                    ";
    }

    // line 24
    public function block_tableBodyStdColumns($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "HomeBundle:Tablas:userlista.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 25,  198 => 24,  192 => 22,  189 => 21,  185 => 20,  179 => 18,  176 => 17,  172 => 16,  165 => 12,  161 => 10,  157 => 9,  146 => 8,  87 => 44,  80 => 40,  71 => 35,  67 => 34,  59 => 28,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HomeBundle:Tablas:userlista.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Tablas/userlista.html.twig");
    }
}
