<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig */
class __TwigTemplate_ec854886ba7890eb7b268d07bd52f90c4960303c243b14edc420a9ce9124c533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_794afca412efa5fa806ace7c8c8abd0061361e0f17b54cbd72aa2352af9cb398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794afca412efa5fa806ace7c8c8abd0061361e0f17b54cbd72aa2352af9cb398->enter($__internal_794afca412efa5fa806ace7c8c8abd0061361e0f17b54cbd72aa2352af9cb398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $__internal_3b490f8a3e87de06348be8065b7200ed58445d2b4e9202c911fff8c71f1ead4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b490f8a3e87de06348be8065b7200ed58445d2b4e9202c911fff8c71f1ead4b->enter($__internal_3b490f8a3e87de06348be8065b7200ed58445d2b4e9202c911fff8c71f1ead4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794afca412efa5fa806ace7c8c8abd0061361e0f17b54cbd72aa2352af9cb398->leave($__internal_794afca412efa5fa806ace7c8c8abd0061361e0f17b54cbd72aa2352af9cb398_prof);

        
        $__internal_3b490f8a3e87de06348be8065b7200ed58445d2b4e9202c911fff8c71f1ead4b->leave($__internal_3b490f8a3e87de06348be8065b7200ed58445d2b4e9202c911fff8c71f1ead4b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8295a5a7b0f5349ae2f3fdedad7cf8b4755b09926cf2fa2975fe9c9abc5d3e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8295a5a7b0f5349ae2f3fdedad7cf8b4755b09926cf2fa2975fe9c9abc5d3e22->enter($__internal_8295a5a7b0f5349ae2f3fdedad7cf8b4755b09926cf2fa2975fe9c9abc5d3e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_32f9f828573ca783e9733a700c4762811a113496ed6892cdbc435ab386a1d4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f9f828573ca783e9733a700c4762811a113496ed6892cdbc435ab386a1d4a1->enter($__internal_32f9f828573ca783e9733a700c4762811a113496ed6892cdbc435ab386a1d4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"]), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_32f9f828573ca783e9733a700c4762811a113496ed6892cdbc435ab386a1d4a1->leave($__internal_32f9f828573ca783e9733a700c4762811a113496ed6892cdbc435ab386a1d4a1_prof);

        
        $__internal_8295a5a7b0f5349ae2f3fdedad7cf8b4755b09926cf2fa2975fe9c9abc5d3e22->leave($__internal_8295a5a7b0f5349ae2f3fdedad7cf8b4755b09926cf2fa2975fe9c9abc5d3e22_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_120dc74bd058577706aca911f6872225f0f6c99ff15b05b7e42dd26849480468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120dc74bd058577706aca911f6872225f0f6c99ff15b05b7e42dd26849480468->enter($__internal_120dc74bd058577706aca911f6872225f0f6c99ff15b05b7e42dd26849480468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_5911904738ea4cda0123a3fe1b1dbac9db81361dbbbc51caa2d2ddfcb4ad2b67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5911904738ea4cda0123a3fe1b1dbac9db81361dbbbc51caa2d2ddfcb4ad2b67->enter($__internal_5911904738ea4cda0123a3fe1b1dbac9db81361dbbbc51caa2d2ddfcb4ad2b67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_5911904738ea4cda0123a3fe1b1dbac9db81361dbbbc51caa2d2ddfcb4ad2b67->leave($__internal_5911904738ea4cda0123a3fe1b1dbac9db81361dbbbc51caa2d2ddfcb4ad2b67_prof);

        
        $__internal_120dc74bd058577706aca911f6872225f0f6c99ff15b05b7e42dd26849480468->leave($__internal_120dc74bd058577706aca911f6872225f0f6c99ff15b05b7e42dd26849480468_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_3762e87d336c2ed8122de0f3c07c9ed4808815cfc549cebc34e473d647f8c2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3762e87d336c2ed8122de0f3c07c9ed4808815cfc549cebc34e473d647f8c2b6->enter($__internal_3762e87d336c2ed8122de0f3c07c9ed4808815cfc549cebc34e473d647f8c2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_75e834b20893009ecaa5661aed02d4d064c0d98d9f017bd5c89333a507a3e333 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e834b20893009ecaa5661aed02d4d064c0d98d9f017bd5c89333a507a3e333->enter($__internal_75e834b20893009ecaa5661aed02d4d064c0d98d9f017bd5c89333a507a3e333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_75e834b20893009ecaa5661aed02d4d064c0d98d9f017bd5c89333a507a3e333->leave($__internal_75e834b20893009ecaa5661aed02d4d064c0d98d9f017bd5c89333a507a3e333_prof);

        
        $__internal_3762e87d336c2ed8122de0f3c07c9ed4808815cfc549cebc34e473d647f8c2b6->leave($__internal_3762e87d336c2ed8122de0f3c07c9ed4808815cfc549cebc34e473d647f8c2b6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 39,  177 => 38,  167 => 35,  165 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, element) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value %}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{- element|render_relation_element(field_description) -}}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{- element|render_relation_element(field_description) -}}
{%- endblock -%}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_many.html.twig");
    }
}
