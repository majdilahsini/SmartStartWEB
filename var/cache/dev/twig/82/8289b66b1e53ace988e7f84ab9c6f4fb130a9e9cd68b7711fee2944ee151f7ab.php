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

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_512ce4374a41b31b508ee544ac4d84c1a11d69cd3efadbadc700c8807780ff6c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', ["method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register")]);
        echo "

<img class=\"img\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/logo.jpg"), "html", null, true);
        echo "\" style=\"width:245px;height:113px;\">
<p class=\"text\">Votre carrière professionnelle démare ici.</p>


<div class=\"form-group\"> ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Username"]]);
        echo " </div>

<div class=\"form-group\"> ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", []), "first", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        echo " </div>

    <div class=\"form-group\"> ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", []), "second", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Confirmer Password"]]);
        echo " </div>

        <div class=\"form-group\"> ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        echo " </div>

        <div class=\"form-group\"> ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullname", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom et Prénom"]]);
        echo " </div>

        <div class=\"form-group\"> ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        echo " </div>

        <div class=\"form-group\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tel", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Telephone"]]);
        echo " </div>
        <div class=\"form-group\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", []), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " </div>


<div>
        <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  92 => 26,  85 => 22,  81 => 21,  76 => 19,  71 => 17,  66 => 15,  61 => 13,  56 => 11,  51 => 9,  44 => 5,  39 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register')}) }}

<img class=\"img\" src=\"{{asset('assets/img/logo.jpg')}}\" style=\"width:245px;height:113px;\">
<p class=\"text\">Votre carrière professionnelle démare ici.</p>


<div class=\"form-group\"> {{ form_widget(form.username, {'attr' : {'class':'form-control', 'placeholder':'Username'}}) }} </div>

<div class=\"form-group\"> {{ form_widget(form.plainPassword.first, {'attr' : {'class':'form-control', 'placeholder':'Password'}}) }} </div>

    <div class=\"form-group\"> {{ form_widget(form.plainPassword.second, {'attr' : {'class':'form-control', 'placeholder':'Confirmer Password'}}) }} </div>

        <div class=\"form-group\"> {{ form_widget(form.email, {'attr' : {'class':'form-control', 'placeholder':'Email'}}) }} </div>

        <div class=\"form-group\"> {{ form_widget(form.fullname, {'attr' : {'class':'form-control', 'placeholder':'Nom et Prénom'}}) }} </div>

        <div class=\"form-group\"> {{ form_widget(form.adresse, {'attr' : {'class':'form-control', 'placeholder':'Adresse'}}) }} </div>

        <div class=\"form-group\">{{ form_widget(form.tel, {'attr' : {'class':'form-control', 'placeholder':'Telephone'}}) }} </div>
        <div class=\"form-group\">{{ form_widget(form.roles, {'attr' : {'class':'form-control'}}) }} </div>


<div>
        <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\pidev2\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register_content.html.twig");
    }
}
