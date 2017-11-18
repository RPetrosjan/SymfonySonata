<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig */
class __TwigTemplate_4f048a2233eb911b5f8d10f342d938f6edccd41bdb67a607ffc85b0302421e5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", 12);
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
        $__internal_0577efa3d7cfa08c0e1d19ef514ed3358408ece3a42101c3fac8c42d3c036b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0577efa3d7cfa08c0e1d19ef514ed3358408ece3a42101c3fac8c42d3c036b48->enter($__internal_0577efa3d7cfa08c0e1d19ef514ed3358408ece3a42101c3fac8c42d3c036b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $__internal_aa10b480c5f8a7970d4833690e1eaad29b5c54e6a4bf24b635edf9051432fd13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa10b480c5f8a7970d4833690e1eaad29b5c54e6a4bf24b635edf9051432fd13->enter($__internal_aa10b480c5f8a7970d4833690e1eaad29b5c54e6a4bf24b635edf9051432fd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0577efa3d7cfa08c0e1d19ef514ed3358408ece3a42101c3fac8c42d3c036b48->leave($__internal_0577efa3d7cfa08c0e1d19ef514ed3358408ece3a42101c3fac8c42d3c036b48_prof);

        
        $__internal_aa10b480c5f8a7970d4833690e1eaad29b5c54e6a4bf24b635edf9051432fd13->leave($__internal_aa10b480c5f8a7970d4833690e1eaad29b5c54e6a4bf24b635edf9051432fd13_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b421637afc631f9fa511a7bf8536ba69618b309db42d0c6fd4ceaf442fd0b838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b421637afc631f9fa511a7bf8536ba69618b309db42d0c6fd4ceaf442fd0b838->enter($__internal_b421637afc631f9fa511a7bf8536ba69618b309db42d0c6fd4ceaf442fd0b838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_74c02155ac52bca27ba3f4fc4b9c7344b41f4b8608a7ba9ce682813f02e6e9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c02155ac52bca27ba3f4fc4b9c7344b41f4b8608a7ba9ce682813f02e6e9d2->enter($__internal_74c02155ac52bca27ba3f4fc4b9c7344b41f4b8608a7ba9ce682813f02e6e9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_74c02155ac52bca27ba3f4fc4b9c7344b41f4b8608a7ba9ce682813f02e6e9d2->leave($__internal_74c02155ac52bca27ba3f4fc4b9c7344b41f4b8608a7ba9ce682813f02e6e9d2_prof);

        
        $__internal_b421637afc631f9fa511a7bf8536ba69618b309db42d0c6fd4ceaf442fd0b838->leave($__internal_b421637afc631f9fa511a7bf8536ba69618b309db42d0c6fd4ceaf442fd0b838_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_one_to_one.html.twig");
    }
}
