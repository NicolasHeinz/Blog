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

                <h1 class=\"text-center\"><span class=\"badge badge-primary\">Perfil</span></h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">

                ";
        // line 11
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "session", [], "any", false, false, false, 11), "get", [0 => "rol"], "method", false, false, false, 11) == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ADMIN"))) {
            // line 12
            echo "
                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_rol\" name=\"_select_rol\">
                        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) || array_key_exists("roles", $context) ? $context["roles"] : (function () { throw new RuntimeError('Variable "roles" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 16
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "rol", [], "any", false, false, false, 16) == $context["r"])) {
                    // line 17
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 19
                    echo "                                <option>";
                    echo twig_escape_filter($this->env, $context["r"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 21
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                    </select>
                </div>

                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_active\" name=\"_select_active\">
                        ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 28
                echo "                            ";
                if (((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "active", [], "any", false, false, false, 28) == 1) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_ALTA")))) {
                    // line 29
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } elseif (((twig_get_attribute($this->env, $this->source,                 // line 30
(isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "active", [], "any", false, false, false, 30) == 0) && ($context["a"] == twig_constant("LoginBundle\\Repository\\usersRepository::USER_BAJA")))) {
                    // line 31
                    echo "                                <option selected>";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                } else {
                    // line 33
                    echo "                                <option> ";
                    echo twig_escape_filter($this->env, $context["a"], "html", null, true);
                    echo "</option>
                            ";
                }
                // line 35
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                    </select>
                </div>
                ";
        }
        // line 39
        echo "

                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), 'label');
        echo "
                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42)]);
        echo "

                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "surname", [], "any", false, false, false, 44), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "surname", [], "any", false, false, false, 45), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "surname", [], "any", false, false, false, 45)]);
        echo "

                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'label');
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "email", [], "any", false, false, false, 48)]);
        echo "

                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), 'label');
        echo "
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51)]);
        echo "

                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "username", [], "any", false, false, false, 53), 'label');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "username", [], "any", false, false, false, 54), 'widget', ["value" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "username", [], "any", false, false, false, 54)]);
        echo "

                <div class=\"col-md-12 text-center mt-3 mb-3\">
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 65
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
        return array (  233 => 65,  223 => 64,  204 => 54,  200 => 53,  195 => 51,  191 => 50,  186 => 48,  182 => 47,  177 => 45,  173 => 44,  168 => 42,  164 => 41,  160 => 39,  155 => 36,  149 => 35,  143 => 33,  137 => 31,  135 => 30,  130 => 29,  127 => 28,  123 => 27,  116 => 22,  110 => 21,  104 => 19,  98 => 17,  95 => 16,  91 => 15,  86 => 12,  84 => 11,  79 => 9,  73 => 6,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block content %}
    <div class=\"col-md-4 offset-md-4 mt-5 card\">
        <div class=\"col-md-12 mt-4\">
            <form action=\"{{ path(\"profile\") }}\" method=\"post\">

                <h1 class=\"text-center\"><span class=\"badge badge-primary\">Perfil</span></h1>
                <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ user.id }}\">

                {% if app.session.get('rol') == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ADMIN') %}

                <div class=\"form-group\">
                    <select class=\"form-control\" id=\"select_rol\" name=\"_select_rol\">
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
                    <select class=\"form-control\" id=\"select_active\" name=\"_select_active\">
                        {% for a in status %}
                            {% if (user.active == 1) and (a == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_ALTA')) %}
                                <option selected>{{ a }}</option>
                            {% elseif (user.active == 0) and (a == constant('LoginBundle\\\\Repository\\\\usersRepository::USER_BAJA')) %}
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
                    <button type=\"submit\" class=\"btn btn-primary\">Guardar</button>
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
