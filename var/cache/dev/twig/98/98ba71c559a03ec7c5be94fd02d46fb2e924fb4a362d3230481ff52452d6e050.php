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

/* @Offre/Entreprise/candidatures.html.twig */
class __TwigTemplate_f214ff30944c00dfa6539ee4cd85e8e6e7dbaaf3e2399b294cac8195b159c62d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/candidatures.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Offre/Entreprise/candidatures.html.twig"));

        $this->parent = $this->loadTemplate("@User/Default/entreprisehome.html.twig", "@Offre/Entreprise/candidatures.html.twig", 1);
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
        <div class=\"row top-pad\">

                <div class=\"col-md-2 col-sm-3\">
                    <p>Search By:</p>
                </div>

                <div class=\"col-md-10 col-sm-9 pull-right\">
                    <ul class=\"filter-list\">
                        <li>
                            <input id=\"checkbox-1\" class=\"checkbox-custom\" name=\"checkbox-1\" type=\"checkbox\" checked=\"\">
                            <label for=\"checkbox-1\" class=\"part-time checkbox-custom-label\">Part Time</label>
                        </li>

                        <li>
                            <input id=\"checkbox-2\" class=\"checkbox-custom\" name=\"checkbox-2\" type=\"checkbox\">
                            <label for=\"checkbox-2\" class=\"full-time checkbox-custom-label\">Full Time</label>
                        </li>

                        <li>
                            <input id=\"checkbox-3\" class=\"checkbox-custom\" name=\"checkbox-3\" type=\"checkbox\">
                            <label for=\"checkbox-3\" class=\"freelancing checkbox-custom-label\">Freelancing</label>
                        </li>

                        <li>
                            <input id=\"checkbox-4\" class=\"checkbox-custom\" name=\"checkbox-4\" type=\"checkbox\">
                            <label for=\"checkbox-4\" class=\"internship checkbox-custom-label\">Internship</label>
                        </li>

                    </ul>
                </div>

        </div>
        <div class=\"companies\">
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 60
            echo "

                ";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 63
                echo "                    ";
                if (($this->getAttribute($this->getAttribute($context["application"], "user", []), "id", []) == $this->getAttribute($context["user"], "id", []))) {
                    // line 64
                    echo "                        ";
                    if (($this->getAttribute($context["application"], "etat", []) == 0)) {
                        // line 65
                        echo "                <div class=\"company-list\">
                        ";
                    } elseif (($this->getAttribute(                    // line 66
$context["application"], "etat", []) == 1)) {
                        // line 67
                        echo "                    <div class=\"company-list\" style=\"background-color: #CAFFDC\">
                        ";
                    } elseif (($this->getAttribute(                    // line 68
$context["application"], "etat", []) == 2)) {
                        // line 69
                        echo "                     <div class=\"company-list\" style=\"background-color: #FFCACA\">
                         ";
                    }
                    // line 71
                    echo "                         ";
                }
                // line 72
                echo "                         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                        <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 76
                echo "                            ";
                if (($this->getAttribute($this->getAttribute($context["application"], "user", []), "id", []) == $this->getAttribute($context["user"], "id", []))) {
                    // line 77
                    echo "                                ";
                    if (($this->getAttribute($context["application"], "matchs", []) > 90)) {
                        // line 78
                        echo "                        <div  style=\"color: #026621; position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["application"], "matchs", [])), "html", null, true);
                        echo "</div>
                            ";
                    } elseif (($this->getAttribute(                    // line 79
$context["application"], "matchs", []) < 40)) {
                        // line 80
                        echo "                                <div  style=\"color: #DD0000; position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["application"], "matchs", [])), "html", null, true);
                        echo "</div>
                            ";
                    } else {
                        // line 82
                        echo "                                <div  style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">";
                        echo twig_escape_filter($this->env, twig_round($this->getAttribute($context["application"], "matchs", [])), "html", null, true);
                        echo "</div>
                                ";
                    }
                    // line 84
                    echo "                            ";
                }
                // line 85
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "fullname", []), "html", null, true);
            echo "</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "tel", []), "html", null, true);
            echo "</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", []), "html", null, true);
            echo "</span>

                               </p>
                        </div>
                    </div>


                        <div class=\"col-md-2 col-sm-2\">
                            ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["applications"] ?? $this->getContext($context, "applications")));
            foreach ($context['_seq'] as $context["_key"] => $context["application"]) {
                // line 107
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($context["application"], "user", []), "id", []) == $this->getAttribute($context["user"], "id", []))) {
                    // line 108
                    echo "                                    ";
                    if (($this->getAttribute($context["application"], "etat", []) == 0)) {
                        // line 109
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("accepter_candidature", ["id" => $this->getAttribute($context["application"], "id", [])]), "html", null, true);
                        echo "\"><button type=\"submit\" class=\"btn supprimer-offre\" name=\"View Job\">Accepter</button></a>
                            <a href=\"";
                        // line 110
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("refuser_candidature", ["id" => $this->getAttribute($context["application"], "id", [])]), "html", null, true);
                        echo "\"><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Refuser</button></a>
                                ";
                    }
                    // line 112
                    echo "                                ";
                }
                // line 113
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['application'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                        </div>


                </div>

            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </div>
    </div>
</section>


        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Offre/Entreprise/candidatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 121,  280 => 114,  274 => 113,  271 => 112,  266 => 110,  261 => 109,  258 => 108,  255 => 107,  251 => 106,  240 => 98,  234 => 95,  228 => 92,  222 => 89,  217 => 86,  211 => 85,  208 => 84,  202 => 82,  196 => 80,  194 => 79,  189 => 78,  186 => 77,  183 => 76,  179 => 75,  175 => 73,  169 => 72,  166 => 71,  162 => 69,  160 => 68,  157 => 67,  155 => 66,  152 => 65,  149 => 64,  146 => 63,  142 => 62,  138 => 60,  134 => 59,  93 => 20,  84 => 19,  61 => 4,  52 => 3,  30 => 1,);
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
        <div class=\"row top-pad\">

                <div class=\"col-md-2 col-sm-3\">
                    <p>Search By:</p>
                </div>

                <div class=\"col-md-10 col-sm-9 pull-right\">
                    <ul class=\"filter-list\">
                        <li>
                            <input id=\"checkbox-1\" class=\"checkbox-custom\" name=\"checkbox-1\" type=\"checkbox\" checked=\"\">
                            <label for=\"checkbox-1\" class=\"part-time checkbox-custom-label\">Part Time</label>
                        </li>

                        <li>
                            <input id=\"checkbox-2\" class=\"checkbox-custom\" name=\"checkbox-2\" type=\"checkbox\">
                            <label for=\"checkbox-2\" class=\"full-time checkbox-custom-label\">Full Time</label>
                        </li>

                        <li>
                            <input id=\"checkbox-3\" class=\"checkbox-custom\" name=\"checkbox-3\" type=\"checkbox\">
                            <label for=\"checkbox-3\" class=\"freelancing checkbox-custom-label\">Freelancing</label>
                        </li>

                        <li>
                            <input id=\"checkbox-4\" class=\"checkbox-custom\" name=\"checkbox-4\" type=\"checkbox\">
                            <label for=\"checkbox-4\" class=\"internship checkbox-custom-label\">Internship</label>
                        </li>

                    </ul>
                </div>

        </div>
        <div class=\"companies\">
            {% for user in users %}


                {% for application in applications %}
                    {% if application.user.id == user.id %}
                        {% if application.etat == 0 %}
                <div class=\"company-list\">
                        {% elseif application.etat == 1 %}
                    <div class=\"company-list\" style=\"background-color: #CAFFDC\">
                        {% elseif application.etat == 2 %}
                     <div class=\"company-list\" style=\"background-color: #FFCACA\">
                         {% endif %}
                         {% endif %}
                         {% endfor %}
                        <div class=\"row\">
                    <div class=\"col-md-2 col-sm-2\">
                        {% for application in applications %}
                            {% if application.user.id == user.id %}
                                {% if application.matchs > 90 %}
                        <div  style=\"color: #026621; position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">{{ application.matchs | round }}</div>
                            {% elseif application.matchs <40 %}
                                <div  style=\"color: #DD0000; position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">{{ application.matchs | round }}</div>
                            {% else %}
                                <div  style=\"position: absolute;   left: 50%;  top: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%);\" id=\"demoFont\">{{ application.matchs | round }}</div>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    </div>
                    <div class=\"col-md-8 col-sm-8\">
                        <div class=\"company-content\">
                            <h3>{{ user.fullname }}</h3>
                            <p>
                      <span class=\"company-name\">
                      <i class=\"fa fa-bookmark-o\"></i>{{ user.email }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-briefcase\"></i>{{ user.tel }}</span>

                      <span class=\"company-name\">
                      <i class=\"fa fa-dashcube\"></i>{{ user.adresse }}</span>

                               </p>
                        </div>
                    </div>


                        <div class=\"col-md-2 col-sm-2\">
                            {% for application in applications %}
                                {% if application.user.id == user.id %}
                                    {%  if application.etat == 0 %}
                            <a href=\"{{ path('accepter_candidature' , {'id':application.id}) }}\"><button type=\"submit\" class=\"btn supprimer-offre\" name=\"View Job\">Accepter</button></a>
                            <a href=\"{{ path('refuser_candidature', {'id':application.id}) }}\"><button type=\"submit\" class=\"btn consulter-c\" style=\"align-self: center\" name=\"View Job\">Refuser</button></a>
                                {% endif %}
                                {% endif %}
                            {% endfor %}
                        </div>


                </div>

            </div>
            {% endfor %}
        </div>
    </div>
</section>


        {% endblock %}

", "@Offre/Entreprise/candidatures.html.twig", "C:\\wamp64\\www\\pidev\\src\\OffreBundle\\Resources\\views\\Entreprise\\candidatures.html.twig");
    }
}
