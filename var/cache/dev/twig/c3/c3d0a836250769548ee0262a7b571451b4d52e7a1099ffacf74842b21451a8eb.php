<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig */
class __TwigTemplate_d59f7b1e21ccbe764e19489191422b9544695b921d7e16050f3b31407b409b83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79888e00d9fe43dc717db4467245af3f27d3d97f38a12e4b4e16008f25b24828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79888e00d9fe43dc717db4467245af3f27d3d97f38a12e4b4e16008f25b24828->enter($__internal_79888e00d9fe43dc717db4467245af3f27d3d97f38a12e4b4e16008f25b24828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $__internal_108bd28dddbc859696cab4c9587ba87163812de24eca688ef066de339c18a3f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_108bd28dddbc859696cab4c9587ba87163812de24eca688ef066de339c18a3f7->enter($__internal_108bd28dddbc859696cab4c9587ba87163812de24eca688ef066de339c18a3f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79888e00d9fe43dc717db4467245af3f27d3d97f38a12e4b4e16008f25b24828->leave($__internal_79888e00d9fe43dc717db4467245af3f27d3d97f38a12e4b4e16008f25b24828_prof);

        
        $__internal_108bd28dddbc859696cab4c9587ba87163812de24eca688ef066de339c18a3f7->leave($__internal_108bd28dddbc859696cab4c9587ba87163812de24eca688ef066de339c18a3f7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4282ee821ec9cc70f7745fc6ec697fb6dc5e7dbb867b000eb9f72c7d9e0b1173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4282ee821ec9cc70f7745fc6ec697fb6dc5e7dbb867b000eb9f72c7d9e0b1173->enter($__internal_4282ee821ec9cc70f7745fc6ec697fb6dc5e7dbb867b000eb9f72c7d9e0b1173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3f58fe65fef190fc82d3bb2876a4cd13649864310503a9ff8e0620cade0bbe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f58fe65fef190fc82d3bb2876a4cd13649864310503a9ff8e0620cade0bbe54->enter($__internal_3f58fe65fef190fc82d3bb2876a4cd13649864310503a9ff8e0620cade0bbe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if (((( !(($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array()), false)) : (false)) && $this->getAttribute(            // line 18
($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array())) && $this->getAttribute($this->getAttribute(            // line 19
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(            // line 20
($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 22
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 26
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 28
            echo "    ";
        }
        
        $__internal_3f58fe65fef190fc82d3bb2876a4cd13649864310503a9ff8e0620cade0bbe54->leave($__internal_3f58fe65fef190fc82d3bb2876a4cd13649864310503a9ff8e0620cade0bbe54_prof);

        
        $__internal_4282ee821ec9cc70f7745fc6ec697fb6dc5e7dbb867b000eb9f72c7d9e0b1173->leave($__internal_4282ee821ec9cc70f7745fc6ec697fb6dc5e7dbb867b000eb9f72c7d9e0b1173_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 28,  71 => 26,  65 => 23,  60 => 22,  58 => 20,  57 => 19,  56 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if not field_description.options.identifier|default(false) and
              field_description.hasAssociationAdmin and
              field_description.associationadmin.hasRoute(route_name) and
              field_description.associationadmin.hasAccess(route_name, value)
        %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_many_to_one.html.twig");
    }
}
