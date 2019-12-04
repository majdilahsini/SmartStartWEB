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

/* @Offre/Entreprise/read.html.twig */
class __TwigTemplate_f237646be926e5b23e9737a6498958258a5ecb686f6a6c782a743a9ebde8324e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@User/Default/entreprisehome.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/read.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/read.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "@Offre/Entreprise/read.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_banner($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 4
        echo "            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Liste des Offres
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
<section class=\"jobs\">
    <div class=\"container\">
        <div class=\"heading\">

        </div>

        <div class=\"companies\">
            ";
        // line 28
        if (twig_test_empty(($context["offres"] ?? $this->getContext($context, "offres")))) {
            // line 29
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/offre/mesoffres")) {
                // line 30
                echo "                    <p> Vous n'avez pas d'offre.</p>
                ";
            } else {
                // line 32
                echo "                    <p> Il n'y a aucune offre pour le moment</p>
                ";
            }
            // line 34
            echo "            ";
        }
        // line 35
        echo "
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["offres"] ?? $this->getContext($context, "offres")));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 37
            echo "

                <div class=\"company-list\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                            <img src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/megaphone_rose_250_2.jpg"), "html", null, true);
            echo "\" class=\"img-responsive\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "titre", []), "html", null, true);
            echo "</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["offre"], "datePublication", []), "d/m/Y"), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "entreprise", []), "fullname", []), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["offre"], "typePost", []), "name", []), "html", null, true);
            echo "</span>

                      <span class=\"package\"><i class=\"fa fa-money\">
                      </i>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "salaire", []), "html", null, true);
            echo " TND</span>

                      <span class=\"package\"><i class=\"fa fa-trophy\">
                      </i>BAC +";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["offre"], "niveauEtude", []), "html", null, true);
            echo " </span>
                            </p>
                        </div>
                    </div>
                   ";
            // line 67
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "pathinfo", []) == "/offre/mesoffres")) {
                // line 68
                echo "                    <div class=\"col-md-2 col-sm-2\">
                        <a href=";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("supprimer_offre", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "><button type=\"submit\" class=\"btn supprimer-offre\" name=\"View Job\">Supprimer</button></a>
                        <a href=";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("consulter_offre", ["id" => $this->getAttribute($context["offre"], "id", [])]), "html", null, true);
                echo "><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                    </div>
                    ";
            }
            // line 73
            echo "                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    </div>
</section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Entreprise/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 77,  194 => 73,  188 => 70,  184 => 69,  181 => 68,  179 => 67,  172 => 63,  166 => 60,  160 => 57,  154 => 54,  148 => 51,  142 => 48,  134 => 43,  126 => 37,  122 => 36,  119 => 35,  116 => 34,  112 => 32,  108 => 30,  105 => 29,  103 => 28,  93 => 20,  84 => 19,  61 => 4,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@User/Default/entreprisehome.html.twig' %}

        {% block banner %}
            <section class=\"banner-area relative\" id=\"home\">
                <div class=\"overlay overlay-bg\"></div>
                <div class=\"container\">
                    <div class=\"row d-flex align-items-center justify-content-center\">
                        <div class=\"about-content col-lg-12\">
                            <h1 class=\"text-white\">
                                Liste des Offres
                            </h1>
                            <p class=\"text-white link-nav\"><a href=\"../Default/index.html.twig\">Home </a>  <span class=\"lnr lnr-arrow-right\"></span>  <a href=\"category.html\"> Liste des Offre</a></p>
                        </div>
                    </div>
                </div>
            </section>
        {% endblock %}

        {% block content %}

<section class=\"jobs\">
    <div class=\"container\">
        <div class=\"heading\">

        </div>

        <div class=\"companies\">
            {% if offres is empty %}
                {% if app.request.pathinfo == \"/offre/mesoffres\" %}
                    <p> Vous n'avez pas d'offre.</p>
                {% else %}
                    <p> Il n'y a aucune offre pour le moment</p>
                {% endif %}
            {% endif %}

            {% for offre in offres %}


                <div class=\"company-list\">
                <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        <div class=\"company-logo\" align=\"center\" style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\">
                            <img src=\"{{asset('img/megaphone_rose_250_2.jpg')}}\" class=\"img-responsive\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>{{ offre.titre }}</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>{{ offre.datePublication | date(\"d/m/Y\") }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>{{ offre.entreprise.fullname }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>{{ offre.typePost.name }}</span>

                      <span class=\"package\"><i class=\"fa fa-money\">
                      </i>{{ offre.salaire }} TND</span>

                      <span class=\"package\"><i class=\"fa fa-trophy\">
                      </i>BAC +{{ offre.niveauEtude }} </span>
                            </p>
                        </div>
                    </div>
                   {% if  app.request.pathinfo == \"/offre/mesoffres\" %}
                    <div class=\"col-md-2 col-sm-2\">
                        <a href={{ path('supprimer_offre', {'id':offre.id}) }}><button type=\"submit\" class=\"btn supprimer-offre\" name=\"View Job\">Supprimer</button></a>
                        <a href={{ path('consulter_offre', {'id':offre.id}) }}><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Consulter</button></a>
                    </div>
                    {% endif %}
                </div>

            </div>
            {% endfor %}
        </div>
    </div>
</section>


        {% endblock %}

", "@Offre/Entreprise/read.html.twig", "C:\\wamp64\\www\\pidev\\src\\OffreBundle\\Resources\\views\\Entreprise\\read.html.twig");
    }
}
