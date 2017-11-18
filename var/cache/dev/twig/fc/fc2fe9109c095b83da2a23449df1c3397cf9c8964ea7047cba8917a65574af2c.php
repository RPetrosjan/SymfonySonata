<?php

/* SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig */
class __TwigTemplate_c2f1b6a1fea02089606e8e227c9ea61a37fb93439e1f504b0cde49245ba08842 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", 12);
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
        $__internal_ffac087a24a8aa0b7756640e1dd74ed61057574a26809638d113e743553ca27c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffac087a24a8aa0b7756640e1dd74ed61057574a26809638d113e743553ca27c->enter($__internal_ffac087a24a8aa0b7756640e1dd74ed61057574a26809638d113e743553ca27c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $__internal_d1c6bf7d2ef92c063ec92b2e48558036581ef33dbb4f0e6c722afc09b8c1b12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1c6bf7d2ef92c063ec92b2e48558036581ef33dbb4f0e6c722afc09b8c1b12f->enter($__internal_d1c6bf7d2ef92c063ec92b2e48558036581ef33dbb4f0e6c722afc09b8c1b12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffac087a24a8aa0b7756640e1dd74ed61057574a26809638d113e743553ca27c->leave($__internal_ffac087a24a8aa0b7756640e1dd74ed61057574a26809638d113e743553ca27c_prof);

        
        $__internal_d1c6bf7d2ef92c063ec92b2e48558036581ef33dbb4f0e6c722afc09b8c1b12f->leave($__internal_d1c6bf7d2ef92c063ec92b2e48558036581ef33dbb4f0e6c722afc09b8c1b12f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2bc24f5181a23b7c9293d302a47b488eb9180691aadccac73e46f87f20de235d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc24f5181a23b7c9293d302a47b488eb9180691aadccac73e46f87f20de235d->enter($__internal_2bc24f5181a23b7c9293d302a47b488eb9180691aadccac73e46f87f20de235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_842e6a6ad2a36e0d5889ef2de870a5070789fdb75473cb7d607239c45b12ad23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842e6a6ad2a36e0d5889ef2de870a5070789fdb75473cb7d607239c45b12ad23->enter($__internal_842e6a6ad2a36e0d5889ef2de870a5070789fdb75473cb7d607239c45b12ad23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(            // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "            <a href=\"";
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
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 26
            echo "    ";
        }
        
        $__internal_842e6a6ad2a36e0d5889ef2de870a5070789fdb75473cb7d607239c45b12ad23->leave($__internal_842e6a6ad2a36e0d5889ef2de870a5070789fdb75473cb7d607239c45b12ad23_prof);

        
        $__internal_2bc24f5181a23b7c9293d302a47b488eb9180691aadccac73e46f87f20de235d->leave($__internal_2bc24f5181a23b7c9293d302a47b488eb9180691aadccac73e46f87f20de235d_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  71 => 24,  65 => 21,  60 => 20,  58 => 19,  57 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:CRUD:show_orm_many_to_one.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_one.html.twig");
    }
}
