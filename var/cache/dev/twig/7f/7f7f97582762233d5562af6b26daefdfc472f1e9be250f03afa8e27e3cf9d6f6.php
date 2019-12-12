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

/* @Home/Perfil/perfil.html.twig */
class __TwigTemplate_0f12a8f1b0a511cff7eb1ea6658aee22f9b3dcf4c0782732719537bc287949db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/perfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Home/Perfil/perfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "@Home/Perfil/perfil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo "\" method=\"post\">

                <h1 class=\"text-center\">
                    <span class=\"badge badge-primary\">Perfil</span>
                </h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">

                ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => "user"], "method", false, false, false, 13), "rol", [], "any", false, false, false, 13) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN"))) {
            // line 18
            echo "
                <div class=\"form-group\">
                    <select class=\"form-control\"
                            id=\"select_rol\"
                            name=\"_select_rol\">
                        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 24
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "rol", [], "any", false, false, false, 24) == $context["r"])) {
                    // line 25
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 27
                    echo "                                <option>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 29
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\"
                            id=\"select_active\"
                            name=\"_select_active\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 37, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 38
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "active", [], "any", false, false, false, 38) == 1) && (                // line 39
$context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ALTA")))) {
                    // line 45
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 46
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "active", [], "any", false, false, false, 46) == 0) && (                // line 47
$context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_BAJA")))) {
                    // line 53
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 55
                    echo "                                <option> ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 57
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </select>
                </div>
                ";
        }
        // line 61
        echo "
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "name", [], "any", false, false, false, 62), 'label');
        echo "
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "name", [], "any", false, false, false, 63)]);
        echo "

                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "surname", [], "any", false, false, false, 65), 'label');
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "surname", [], "any", false, false, false, 66), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "surname", [], "any", false, false, false, 66)]);
        echo "

                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label');
        echo "
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69)]);
        echo "

                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "password", [], "any", false, false, false, 71), 'label');
        echo "
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "password", [], "any", false, false, false, 72)]);
        echo "

                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "username", [], "any", false, false, false, 74), 'label');
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "username", [], "any", false, false, false, 75), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "username", [], "any", false, false, false, 75)]);
        echo "

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 88
        echo "<script>
    \$(document).ready(function() {

        \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
        \$(\".perfil\").addClass(\"active\");

    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Home/Perfil/perfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 88,  232 => 87,  211 => 75,  207 => 74,  202 => 72,  198 => 71,  193 => 69,  189 => 68,  184 => 66,  180 => 65,  175 => 63,  171 => 62,  168 => 61,  163 => 58,  157 => 57,  151 => 55,  145 => 53,  143 => 47,  142 => 46,  137 => 45,  135 => 39,  133 => 38,  129 => 37,  120 => 30,  114 => 29,  108 => 27,  102 => 25,  99 => 24,  95 => 23,  88 => 18,  86 => 13,  81 => 11,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"{{ path(\"profile\") }}\" method=\"post\">

                <h1 class=\"text-center\">
                    <span class=\"badge badge-primary\">Perfil</span>
                </h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ user.id }}\">

                {% if app.session.get('user').rol ==
                    constant(
                    'LoginBundle\\\\Repository\\\\usersRepository::USER_ADMIN'
                    )
                %}

                <div class=\"form-group\">
                    <select class=\"form-control\"
                            id=\"select_rol\"
                            name=\"_select_rol\">
                        {% for r in roles %}
                            {% if user.rol == r %}
                                <option selected>{{ r }}</option>
                            {% else %}
                                <option>{{ r }}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\"
                            id=\"select_active\"
                            name=\"_select_active\">
                        {% for a in status %}
                            {% if (user.active == 1) and
                                (a ==
                                constant(
                                'LoginBundle\\\\Repository\\\\usersRepository::USER_ALTA'
                                )
                                )
                            %}
                                <option selected>{{ a }}</option>
                            {% elseif (user.active == 0) and
                                (a ==
                                constant(
                                'LoginBundle\\\\Repository\\\\usersRepository::USER_BAJA'
                                )
                                )
                            %}
                                <option selected>{{ a }}</option>
                            {% else %}
                                <option> {{ a }}</option>
                            {% endif %}
                        {% endfor %}
                    </select>
                </div>
                {% endif %}

                {{ form_label(form.name) }}
                {{ form_widget(form.name,{'value':user.name}) }}

                {{ form_label(form.surname) }}
                {{ form_widget(form.surname,{'value':user.surname}) }}

                {{ form_label(form.email) }}
                {{ form_widget(form.email,{'value':user.email}) }}

                {{ form_label(form.password) }}
                {{ form_widget(form.password,{'value':user.password}) }}

                {{ form_label(form.username) }}
                {{ form_widget(form.username,{'value':user.username}) }}

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
{% endblock %}

{% block scripts %}
<script>
    \$(document).ready(function() {

        \$(\".navbar-nav\").find(\".active\").removeClass(\"active\");
        \$(\".perfil\").addClass(\"active\");

    });
</script>
{% endblock %}", "@Home/Perfil/perfil.html.twig", "/home/nicolas/Documentos/Blog/src/HomeBundle/Resources/views/Perfil/perfil.html.twig");
    }
}
