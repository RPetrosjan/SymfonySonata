<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig */
class __TwigTemplate_e418f30c11a4e1bbd5494f19051daa883c9ae6805b2cf4c763b9eae2402f7a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", 12);
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
        $__internal_ce819fefac652b34b546366ae7a325665ed52030f848df82a4e62750a0e11464 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce819fefac652b34b546366ae7a325665ed52030f848df82a4e62750a0e11464->enter($__internal_ce819fefac652b34b546366ae7a325665ed52030f848df82a4e62750a0e11464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $__internal_c004d8466029032440f7476a0af6a68b4ccea7e3c70c76dd8fad65c78942b3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c004d8466029032440f7476a0af6a68b4ccea7e3c70c76dd8fad65c78942b3e7->enter($__internal_c004d8466029032440f7476a0af6a68b4ccea7e3c70c76dd8fad65c78942b3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce819fefac652b34b546366ae7a325665ed52030f848df82a4e62750a0e11464->leave($__internal_ce819fefac652b34b546366ae7a325665ed52030f848df82a4e62750a0e11464_prof);

        
        $__internal_c004d8466029032440f7476a0af6a68b4ccea7e3c70c76dd8fad65c78942b3e7->leave($__internal_c004d8466029032440f7476a0af6a68b4ccea7e3c70c76dd8fad65c78942b3e7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_becf0e35b78910123abbed920329702a74a6e0e053ed92913461744231e77b32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_becf0e35b78910123abbed920329702a74a6e0e053ed92913461744231e77b32->enter($__internal_becf0e35b78910123abbed920329702a74a6e0e053ed92913461744231e77b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f41f4f7e49d217d5266813da1e8316d7656fc8891025fc603f57578f885d4d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41f4f7e49d217d5266813da1e8316d7656fc8891025fc603f57578f885d4d6c->enter($__internal_f41f4f7e49d217d5266813da1e8316d7656fc8891025fc603f57578f885d4d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 21
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 22
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 26
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                ";
            }
            // line 28
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_f41f4f7e49d217d5266813da1e8316d7656fc8891025fc603f57578f885d4d6c->leave($__internal_f41f4f7e49d217d5266813da1e8316d7656fc8891025fc603f57578f885d4d6c_prof);

        
        $__internal_becf0e35b78910123abbed920329702a74a6e0e053ed92913461744231e77b32->leave($__internal_becf0e35b78910123abbed920329702a74a6e0e053ed92913461744231e77b32_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  83 => 28,  77 => 26,  71 => 23,  66 => 22,  64 => 21,  63 => 20,  62 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
        {% for element in value %}
            <li>
                {% if field_description.hasassociationadmin
                and field_description.associationadmin.hasRoute(route_name)
                and field_description.associationadmin.hasAccess(route_name, element) %}
                    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                        {{ element|render_relation_element(field_description) }}
                    </a>
                {% else %}
                    {{ element|render_relation_element(field_description) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
