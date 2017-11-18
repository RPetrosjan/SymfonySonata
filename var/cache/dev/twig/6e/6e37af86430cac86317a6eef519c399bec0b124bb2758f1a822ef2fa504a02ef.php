<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_7f3e89b29b7551d62a5f1b5d814e742376a65f8dbf8a9a02cb55888861268105 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45a02cfd81d14d87625d3b35b3b8acc975f765ed926c85db049cd776a3bf8cce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a02cfd81d14d87625d3b35b3b8acc975f765ed926c85db049cd776a3bf8cce->enter($__internal_45a02cfd81d14d87625d3b35b3b8acc975f765ed926c85db049cd776a3bf8cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $__internal_c11ca7b94887243de3c17b0970f3395579f8007617c20fcb47b7cc405b2c6e7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c11ca7b94887243de3c17b0970f3395579f8007617c20fcb47b7cc405b2c6e7b->enter($__internal_c11ca7b94887243de3c17b0970f3395579f8007617c20fcb47b7cc405b2c6e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45a02cfd81d14d87625d3b35b3b8acc975f765ed926c85db049cd776a3bf8cce->leave($__internal_45a02cfd81d14d87625d3b35b3b8acc975f765ed926c85db049cd776a3bf8cce_prof);

        
        $__internal_c11ca7b94887243de3c17b0970f3395579f8007617c20fcb47b7cc405b2c6e7b->leave($__internal_c11ca7b94887243de3c17b0970f3395579f8007617c20fcb47b7cc405b2c6e7b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9bd6271f4d8c57955a3c4e6d92882268ac7248328c67ccf5b9084fd6f0efd7df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd6271f4d8c57955a3c4e6d92882268ac7248328c67ccf5b9084fd6f0efd7df->enter($__internal_9bd6271f4d8c57955a3c4e6d92882268ac7248328c67ccf5b9084fd6f0efd7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_30d6b7260ddf7a1d28909e1682e4d8f57bb21cc97e6a4c55e9eda31979b3a910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d6b7260ddf7a1d28909e1682e4d8f57bb21cc97e6a4c55e9eda31979b3a910->enter($__internal_30d6b7260ddf7a1d28909e1682e4d8f57bb21cc97e6a4c55e9eda31979b3a910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
                echo "
            ";
                // line 28
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 29
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
            // line 30
            echo "    ";
        }
        
        $__internal_30d6b7260ddf7a1d28909e1682e4d8f57bb21cc97e6a4c55e9eda31979b3a910->leave($__internal_30d6b7260ddf7a1d28909e1682e4d8f57bb21cc97e6a4c55e9eda31979b3a910_prof);

        
        $__internal_9bd6271f4d8c57955a3c4e6d92882268ac7248328c67ccf5b9084fd6f0efd7df->leave($__internal_9bd6271f4d8c57955a3c4e6d92882268ac7248328c67ccf5b9084fd6f0efd7df_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f5d6da62069a92c7b135bd8457aabe39bb406faa19d659d76c9a4b3b82d7db3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5d6da62069a92c7b135bd8457aabe39bb406faa19d659d76c9a4b3b82d7db3f->enter($__internal_f5d6da62069a92c7b135bd8457aabe39bb406faa19d659d76c9a4b3b82d7db3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_b77899c590a1444f0d660ff83db34a979d19ed9d9ed1739e787debbb8d15bd54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77899c590a1444f0d660ff83db34a979d19ed9d9ed1739e787debbb8d15bd54->enter($__internal_b77899c590a1444f0d660ff83db34a979d19ed9d9ed1739e787debbb8d15bd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_b77899c590a1444f0d660ff83db34a979d19ed9d9ed1739e787debbb8d15bd54->leave($__internal_b77899c590a1444f0d660ff83db34a979d19ed9d9ed1739e787debbb8d15bd54_prof);

        
        $__internal_f5d6da62069a92c7b135bd8457aabe39bb406faa19d659d76c9a4b3b82d7db3f->leave($__internal_f5d6da62069a92c7b135bd8457aabe39bb406faa19d659d76c9a4b3b82d7db3f_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_691af6298b8957a6e2eb771f13b96529a51840fa6351bdeeeec289d53810c78a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691af6298b8957a6e2eb771f13b96529a51840fa6351bdeeeec289d53810c78a->enter($__internal_691af6298b8957a6e2eb771f13b96529a51840fa6351bdeeeec289d53810c78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_186164a0e68fc46256660eeaf65017834323a35e10c16730e2e43a5a14ac6933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186164a0e68fc46256660eeaf65017834323a35e10c16730e2e43a5a14ac6933->enter($__internal_186164a0e68fc46256660eeaf65017834323a35e10c16730e2e43a5a14ac6933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_186164a0e68fc46256660eeaf65017834323a35e10c16730e2e43a5a14ac6933->leave($__internal_186164a0e68fc46256660eeaf65017834323a35e10c16730e2e43a5a14ac6933_prof);

        
        $__internal_691af6298b8957a6e2eb771f13b96529a51840fa6351bdeeeec289d53810c78a->leave($__internal_691af6298b8957a6e2eb771f13b96529a51840fa6351bdeeeec289d53810c78a_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 40,  180 => 39,  170 => 36,  168 => 35,  164 => 34,  155 => 33,  144 => 30,  130 => 29,  126 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
        {% for element in value%}
            {{ block('relation_value') }}
            {% if not loop.last %}, {% endif %}
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
