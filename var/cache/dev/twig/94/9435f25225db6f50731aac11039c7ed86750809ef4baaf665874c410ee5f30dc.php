<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig */
class __TwigTemplate_b507b0bf71d06fb59f9b6b51376a5103a3e102e6c4894bda5489dfe621455abc extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0b365b62f1b4641025db7c308f95fd7305e2a6700a89ec98adc18b839ca51f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b365b62f1b4641025db7c308f95fd7305e2a6700a89ec98adc18b839ca51f8->enter($__internal_e0b365b62f1b4641025db7c308f95fd7305e2a6700a89ec98adc18b839ca51f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $__internal_5f2bc563bec26970657cb23caf6d2996cac193d0f6ee92901f3e8ae49700f89b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2bc563bec26970657cb23caf6d2996cac193d0f6ee92901f3e8ae49700f89b->enter($__internal_5f2bc563bec26970657cb23caf6d2996cac193d0f6ee92901f3e8ae49700f89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0b365b62f1b4641025db7c308f95fd7305e2a6700a89ec98adc18b839ca51f8->leave($__internal_e0b365b62f1b4641025db7c308f95fd7305e2a6700a89ec98adc18b839ca51f8_prof);

        
        $__internal_5f2bc563bec26970657cb23caf6d2996cac193d0f6ee92901f3e8ae49700f89b->leave($__internal_5f2bc563bec26970657cb23caf6d2996cac193d0f6ee92901f3e8ae49700f89b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b3aceb9ee44b508d29822f598bc9cd5736a574d3bab2df6c8faeeb5daae218fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3aceb9ee44b508d29822f598bc9cd5736a574d3bab2df6c8faeeb5daae218fb->enter($__internal_b3aceb9ee44b508d29822f598bc9cd5736a574d3bab2df6c8faeeb5daae218fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e460fbb2fd5ca50cb7b8b680d7251864407f97b6952f4c6d27b8d532327795cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e460fbb2fd5ca50cb7b8b680d7251864407f97b6952f4c6d27b8d532327795cd->enter($__internal_e460fbb2fd5ca50cb7b8b680d7251864407f97b6952f4c6d27b8d532327795cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_e460fbb2fd5ca50cb7b8b680d7251864407f97b6952f4c6d27b8d532327795cd->leave($__internal_e460fbb2fd5ca50cb7b8b680d7251864407f97b6952f4c6d27b8d532327795cd_prof);

        
        $__internal_b3aceb9ee44b508d29822f598bc9cd5736a574d3bab2df6c8faeeb5daae218fb->leave($__internal_b3aceb9ee44b508d29822f598bc9cd5736a574d3bab2df6c8faeeb5daae218fb_prof);

    }

    // line 33
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_e24ec0f3527a21f26fb31de89fc3a6d6cfd05e7677259cbcfe5f691240fab0be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24ec0f3527a21f26fb31de89fc3a6d6cfd05e7677259cbcfe5f691240fab0be->enter($__internal_e24ec0f3527a21f26fb31de89fc3a6d6cfd05e7677259cbcfe5f691240fab0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_fc368f6022ec1129752b969e3b3e5ee98c597625f6a954e44c5a28234b9ee9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc368f6022ec1129752b969e3b3e5ee98c597625f6a954e44c5a28234b9ee9b0->enter($__internal_fc368f6022ec1129752b969e3b3e5ee98c597625f6a954e44c5a28234b9ee9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 34
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        // line 36
        echo "</a>";
        
        $__internal_fc368f6022ec1129752b969e3b3e5ee98c597625f6a954e44c5a28234b9ee9b0->leave($__internal_fc368f6022ec1129752b969e3b3e5ee98c597625f6a954e44c5a28234b9ee9b0_prof);

        
        $__internal_e24ec0f3527a21f26fb31de89fc3a6d6cfd05e7677259cbcfe5f691240fab0be->leave($__internal_e24ec0f3527a21f26fb31de89fc3a6d6cfd05e7677259cbcfe5f691240fab0be_prof);

    }

    // line 39
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_a2ed2a2c3a4561170f76b115dccad5171b9ef8eb4500e274da632416192ce56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ed2a2c3a4561170f76b115dccad5171b9ef8eb4500e274da632416192ce56c->enter($__internal_a2ed2a2c3a4561170f76b115dccad5171b9ef8eb4500e274da632416192ce56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_357b4e625241b352890d8a5fe75c42a11cab6e1541db42f54508ef77b8522f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357b4e625241b352890d8a5fe75c42a11cab6e1541db42f54508ef77b8522f90->enter($__internal_357b4e625241b352890d8a5fe75c42a11cab6e1541db42f54508ef77b8522f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_357b4e625241b352890d8a5fe75c42a11cab6e1541db42f54508ef77b8522f90->leave($__internal_357b4e625241b352890d8a5fe75c42a11cab6e1541db42f54508ef77b8522f90_prof);

        
        $__internal_a2ed2a2c3a4561170f76b115dccad5171b9ef8eb4500e274da632416192ce56c->leave($__internal_a2ed2a2c3a4561170f76b115dccad5171b9ef8eb4500e274da632416192ce56c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_many_to_many.html.twig");
    }
}
