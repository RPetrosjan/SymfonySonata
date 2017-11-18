<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig */
class __TwigTemplate_4a108cf9b3263d3a55125bdde1fb4cb8b7f2658c74d313ef9417541a1ca658d9 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc219ae2af3226f50aad5a2d9ee1d5791549cd61e4218a33ed0eaa36e6bedc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc219ae2af3226f50aad5a2d9ee1d5791549cd61e4218a33ed0eaa36e6bedc05->enter($__internal_bc219ae2af3226f50aad5a2d9ee1d5791549cd61e4218a33ed0eaa36e6bedc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $__internal_ff3ecabed4f7d1719805981d88fc1482409332e8d3c9a92dd32137286403ede0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3ecabed4f7d1719805981d88fc1482409332e8d3c9a92dd32137286403ede0->enter($__internal_ff3ecabed4f7d1719805981d88fc1482409332e8d3c9a92dd32137286403ede0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc219ae2af3226f50aad5a2d9ee1d5791549cd61e4218a33ed0eaa36e6bedc05->leave($__internal_bc219ae2af3226f50aad5a2d9ee1d5791549cd61e4218a33ed0eaa36e6bedc05_prof);

        
        $__internal_ff3ecabed4f7d1719805981d88fc1482409332e8d3c9a92dd32137286403ede0->leave($__internal_ff3ecabed4f7d1719805981d88fc1482409332e8d3c9a92dd32137286403ede0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d4d43d4302096c85ecea59b0f52a3f943383f3702120372f410c96d97e1da36a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d43d4302096c85ecea59b0f52a3f943383f3702120372f410c96d97e1da36a->enter($__internal_d4d43d4302096c85ecea59b0f52a3f943383f3702120372f410c96d97e1da36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_602326df235723fba552ffcc735a05b196f46e8277bd4edf5cbca91852195a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602326df235723fba552ffcc735a05b196f46e8277bd4edf5cbca91852195a7b->enter($__internal_602326df235723fba552ffcc735a05b196f46e8277bd4edf5cbca91852195a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_602326df235723fba552ffcc735a05b196f46e8277bd4edf5cbca91852195a7b->leave($__internal_602326df235723fba552ffcc735a05b196f46e8277bd4edf5cbca91852195a7b_prof);

        
        $__internal_d4d43d4302096c85ecea59b0f52a3f943383f3702120372f410c96d97e1da36a->leave($__internal_d4d43d4302096c85ecea59b0f52a3f943383f3702120372f410c96d97e1da36a_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_7163eab768e2860e78e41bc00e0c93dec34a38054b421e8c75b03a7539ccbc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7163eab768e2860e78e41bc00e0c93dec34a38054b421e8c75b03a7539ccbc85->enter($__internal_7163eab768e2860e78e41bc00e0c93dec34a38054b421e8c75b03a7539ccbc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_438b3f942cafc15168d75725056e3064cc61c21ee32d3e26d4523b37e4041d92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438b3f942cafc15168d75725056e3064cc61c21ee32d3e26d4523b37e4041d92->enter($__internal_438b3f942cafc15168d75725056e3064cc61c21ee32d3e26d4523b37e4041d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 35
        echo "</a>";
        
        $__internal_438b3f942cafc15168d75725056e3064cc61c21ee32d3e26d4523b37e4041d92->leave($__internal_438b3f942cafc15168d75725056e3064cc61c21ee32d3e26d4523b37e4041d92_prof);

        
        $__internal_7163eab768e2860e78e41bc00e0c93dec34a38054b421e8c75b03a7539ccbc85->leave($__internal_7163eab768e2860e78e41bc00e0c93dec34a38054b421e8c75b03a7539ccbc85_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_e8588aff8325c78dc6830d0e9bffdeacce95601ca349fb6f338b8c779d074d91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8588aff8325c78dc6830d0e9bffdeacce95601ca349fb6f338b8c779d074d91->enter($__internal_e8588aff8325c78dc6830d0e9bffdeacce95601ca349fb6f338b8c779d074d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_63c1f06192daf4359e06a8563077b685832f3fcf1e92cb17f09735af610c1033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c1f06192daf4359e06a8563077b685832f3fcf1e92cb17f09735af610c1033->enter($__internal_63c1f06192daf4359e06a8563077b685832f3fcf1e92cb17f09735af610c1033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_63c1f06192daf4359e06a8563077b685832f3fcf1e92cb17f09735af610c1033->leave($__internal_63c1f06192daf4359e06a8563077b685832f3fcf1e92cb17f09735af610c1033_prof);

        
        $__internal_e8588aff8325c78dc6830d0e9bffdeacce95601ca349fb6f338b8c779d074d91->leave($__internal_e8588aff8325c78dc6830d0e9bffdeacce95601ca349fb6f338b8c779d074d91_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig";
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
", "SonataDoctrineORMAdminBundle:CRUD:list_orm_one_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
