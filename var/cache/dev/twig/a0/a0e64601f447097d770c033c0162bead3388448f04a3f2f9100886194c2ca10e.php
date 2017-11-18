<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig */
class __TwigTemplate_91f1d0e1e402bc70032a857f01820d04f51aa0da3838442c61133d1d5c16bed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94ddb2ee52e684be0ac13f25e92e676726ec6f3b24c28663dfc7cdbb4949a942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ddb2ee52e684be0ac13f25e92e676726ec6f3b24c28663dfc7cdbb4949a942->enter($__internal_94ddb2ee52e684be0ac13f25e92e676726ec6f3b24c28663dfc7cdbb4949a942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig"));

        $__internal_84d8352fa004bc22c712f3bbc1326cae7c5bb43daa63dee9fe0efea2bdd980cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d8352fa004bc22c712f3bbc1326cae7c5bb43daa63dee9fe0efea2bdd980cf->enter($__internal_84d8352fa004bc22c712f3bbc1326cae7c5bb43daa63dee9fe0efea2bdd980cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ddb2ee52e684be0ac13f25e92e676726ec6f3b24c28663dfc7cdbb4949a942->leave($__internal_94ddb2ee52e684be0ac13f25e92e676726ec6f3b24c28663dfc7cdbb4949a942_prof);

        
        $__internal_84d8352fa004bc22c712f3bbc1326cae7c5bb43daa63dee9fe0efea2bdd980cf->leave($__internal_84d8352fa004bc22c712f3bbc1326cae7c5bb43daa63dee9fe0efea2bdd980cf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cf1c69db09489b151edb1a401039b4ecd740e963bf49581647849551a8888978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1c69db09489b151edb1a401039b4ecd740e963bf49581647849551a8888978->enter($__internal_cf1c69db09489b151edb1a401039b4ecd740e963bf49581647849551a8888978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_33901c811797ad663754a79e9565f1b6ba06afe9c4e8a5f6cb348474c1174e59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33901c811797ad663754a79e9565f1b6ba06afe9c4e8a5f6cb348474c1174e59->enter($__internal_33901c811797ad663754a79e9565f1b6ba06afe9c4e8a5f6cb348474c1174e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(        // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(        // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
            // line 20
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_33901c811797ad663754a79e9565f1b6ba06afe9c4e8a5f6cb348474c1174e59->leave($__internal_33901c811797ad663754a79e9565f1b6ba06afe9c4e8a5f6cb348474c1174e59_prof);

        
        $__internal_cf1c69db09489b151edb1a401039b4ecd740e963bf49581647849551a8888978->leave($__internal_cf1c69db09489b151edb1a401039b4ecd740e963bf49581647849551a8888978_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  63 => 21,  58 => 20,  56 => 19,  55 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_one_to_one.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_one_to_one.html.twig");
    }
}
