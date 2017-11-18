<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig */
class __TwigTemplate_6031d071f14c26f55b80e966d31985d4a269d295ee58e64b0541fc0f217e7b1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig", 12);
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
        $__internal_2bdb269bb931ef4910c4f529dc4c79c73053f6c4a636529e22fb1bfe6374e321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bdb269bb931ef4910c4f529dc4c79c73053f6c4a636529e22fb1bfe6374e321->enter($__internal_2bdb269bb931ef4910c4f529dc4c79c73053f6c4a636529e22fb1bfe6374e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig"));

        $__internal_20125195816b2895a3da2e5517e0ee6fa38fe5e7affce97a1c080e517d9c2798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20125195816b2895a3da2e5517e0ee6fa38fe5e7affce97a1c080e517d9c2798->enter($__internal_20125195816b2895a3da2e5517e0ee6fa38fe5e7affce97a1c080e517d9c2798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bdb269bb931ef4910c4f529dc4c79c73053f6c4a636529e22fb1bfe6374e321->leave($__internal_2bdb269bb931ef4910c4f529dc4c79c73053f6c4a636529e22fb1bfe6374e321_prof);

        
        $__internal_20125195816b2895a3da2e5517e0ee6fa38fe5e7affce97a1c080e517d9c2798->leave($__internal_20125195816b2895a3da2e5517e0ee6fa38fe5e7affce97a1c080e517d9c2798_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f95698c6a862817781a3fff5df3ead700b246bc1f2c993ca3752161cbab1cd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f95698c6a862817781a3fff5df3ead700b246bc1f2c993ca3752161cbab1cd91->enter($__internal_f95698c6a862817781a3fff5df3ead700b246bc1f2c993ca3752161cbab1cd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8729d944e5dd863edb2c2d384442d5eca682eb5483783eb976e1fb3b81808cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8729d944e5dd863edb2c2d384442d5eca682eb5483783eb976e1fb3b81808cf7->enter($__internal_8729d944e5dd863edb2c2d384442d5eca682eb5483783eb976e1fb3b81808cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method"))) {
                // line 21
                echo "            <li>
                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                    ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                </a>
            </li>
        ";
            } else {
                // line 27
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 29
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </ul>
";
        
        $__internal_8729d944e5dd863edb2c2d384442d5eca682eb5483783eb976e1fb3b81808cf7->leave($__internal_8729d944e5dd863edb2c2d384442d5eca682eb5483783eb976e1fb3b81808cf7_prof);

        
        $__internal_f95698c6a862817781a3fff5df3ead700b246bc1f2c993ca3752161cbab1cd91->leave($__internal_f95698c6a862817781a3fff5df3ead700b246bc1f2c993ca3752161cbab1cd91_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 30,  84 => 29,  78 => 27,  71 => 23,  67 => 22,  64 => 21,  62 => 20,  61 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin
        and field_description.associationadmin.hasRoute(route_name)
        and field_description.associationadmin.hasAccess(route_name, element) %}
            <li>
                <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                    {{ element|render_relation_element(field_description) }}
                </a>
            </li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\show_orm_one_to_many.html.twig");
    }
}
