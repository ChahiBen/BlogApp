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

/* blog/show.html.twig */
class __TwigTemplate_4fcb5d198cb935ffc6214de2effe452f61c43fdc125f2eb51a18c7079005ac61 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <article>
        <h2>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        <div class=\"metadata\">Ecrit le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "createdAt", [], "any", false, false, false, 8), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "category", [], "any", false, false, false, 8), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</div>
        <div class=\"content\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "image", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"\">
            ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11);
        echo "
        </div>
    </article>

    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) {
            // line 16
            echo "        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)))) {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Modifier</a>
            <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteArticle", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
        ";
            }
            // line 20
            echo "    ";
        } else {
            // line 21
            echo "        <h2>Vous ne pouvezpas editer si vous n'etes pas connecter !</h2>
        <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">
            Connexion
        </a>
    ";
        }
        // line 26
        echo "
    <section id=\"commentires\">
        <h1>";
        // line 28
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "comments", [], "any", false, false, false, 28)), "html", null, true);
        echo " commentaires : </h1>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "comments", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 30
            echo "        <div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-3\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 33), "d/m/Y à H:i"), "html", null, true);
            echo " </small>)
                </div>
                <div class=\"col\">
                    ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "conetnt", [], "any", false, false, false, 36);
            echo "
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 43, $this->source); })()), 'form_start');
            echo "
        ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 44, $this->source); })()), "conetnt", [], "any", false, false, false, 44), 'row', ["attr" => ["placeholder" => "votre Commentaire"], "label" => "Votre commentaire :"]);
            echo "
        <button type=\"submit\" class=\"btn btn-success\">
            Commenter
        </button>
        ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 48, $this->source); })()), 'form_end');
            echo "
        ";
        } else {
            // line 50
            echo "            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecter !</h2>
            <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">
                Connexion
            </a>
        ";
        }
        // line 55
        echo "    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 55,  184 => 51,  181 => 50,  176 => 48,  169 => 44,  164 => 43,  162 => 42,  159 => 41,  148 => 36,  140 => 33,  135 => 30,  131 => 29,  127 => 28,  123 => 26,  116 => 22,  113 => 21,  110 => 20,  105 => 18,  100 => 17,  97 => 16,  95 => 15,  88 => 11,  84 => 10,  75 => 8,  71 => 7,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block body %}
    <article>
        <h2>{{ article.title }}</h2>
        <div class=\"metadata\">Ecrit le {{ article.createdAt|date('d/m/Y') }} à {{ article.createdAt|date('H:i') }} dans la catégorie {{ article.category.title }}</div>
        <div class=\"content\">
            <img src=\"{{ article.image }}\" alt=\"\">
            {{ article.content|raw }}
        </div>
    </article>

    {% if app.user %}
        {% if article.user.id == app.user.id %}
            <a href=\"{{ path(\"blog_edit\", {'slug': article.slug})}}\" class=\"btn btn-primary\">Modifier</a>
            <a href=\"{{ path(\"deleteArticle\", {'slug': article.slug})}}\" class=\"btn btn-danger\">Supprimer</a>
        {% endif %}
    {% else %}
        <h2>Vous ne pouvezpas editer si vous n'etes pas connecter !</h2>
        <a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">
            Connexion
        </a>
    {% endif %}

    <section id=\"commentires\">
        <h1>{{ article.comments|length }} commentaires : </h1>
        {% for comment in article.comments %}
        <div class=\"comment\">
            <div class=\"row\">
                <div class=\"col-3\">
                    {{ comment.user.username }} (<small>{{ comment.createdAt|date('d/m/Y à H:i') }} </small>)
                </div>
                <div class=\"col\">
                    {{ comment.conetnt|raw }}
                </div>
            </div>
        </div>
        {% endfor %}

        {% if app.user %}
        {{ form_start(commentForm) }}
        {{ form_row(commentForm.conetnt, {'attr': {'placeholder': \"votre Commentaire\"},'label':\"Votre commentaire :\" }) }}
        <button type=\"submit\" class=\"btn btn-success\">
            Commenter
        </button>
        {{ form_end(commentForm) }}
        {% else %}
            <h2>Vous ne pouvez pas commenter si vous n'etes pas connecter !</h2>
            <a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">
                Connexion
            </a>
        {% endif %}
    </section>

{% endblock %}", "blog/show.html.twig", "C:\\Users\\Chahinez\\Desktop\\302\\Symfony\\BlogApp\\myBog\\templates\\blog\\show.html.twig");
    }
}
