<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig */
class __TwigTemplate_aac5fb0d20575e32127e2e7c21135402ce66c5f0233ff327722127919f19c426 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45e48bb42f75ab9b58237a532a191c6e5e1b4643e0abf1d024dfee8c48380772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e48bb42f75ab9b58237a532a191c6e5e1b4643e0abf1d024dfee8c48380772->enter($__internal_45e48bb42f75ab9b58237a532a191c6e5e1b4643e0abf1d024dfee8c48380772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $__internal_a09f84810bd65562f0bfd97478961eced80900cd75559f58db347b266cb6ed45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09f84810bd65562f0bfd97478961eced80900cd75559f58db347b266cb6ed45->enter($__internal_a09f84810bd65562f0bfd97478961eced80900cd75559f58db347b266cb6ed45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45e48bb42f75ab9b58237a532a191c6e5e1b4643e0abf1d024dfee8c48380772->leave($__internal_45e48bb42f75ab9b58237a532a191c6e5e1b4643e0abf1d024dfee8c48380772_prof);

        
        $__internal_a09f84810bd65562f0bfd97478961eced80900cd75559f58db347b266cb6ed45->leave($__internal_a09f84810bd65562f0bfd97478961eced80900cd75559f58db347b266cb6ed45_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8021b93ffd765f4abece338071dbd74d19408c4c809f64fe920a148afe5c516f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8021b93ffd765f4abece338071dbd74d19408c4c809f64fe920a148afe5c516f->enter($__internal_8021b93ffd765f4abece338071dbd74d19408c4c809f64fe920a148afe5c516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ce1e42ec640a8f0256d36fe25b217c8c9680ec2383b9ce80575684813ba0ccd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1e42ec640a8f0256d36fe25b217c8c9680ec2383b9ce80575684813ba0ccd2->enter($__internal_ce1e42ec640a8f0256d36fe25b217c8c9680ec2383b9ce80575684813ba0ccd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_ce1e42ec640a8f0256d36fe25b217c8c9680ec2383b9ce80575684813ba0ccd2->leave($__internal_ce1e42ec640a8f0256d36fe25b217c8c9680ec2383b9ce80575684813ba0ccd2_prof);

        
        $__internal_8021b93ffd765f4abece338071dbd74d19408c4c809f64fe920a148afe5c516f->leave($__internal_8021b93ffd765f4abece338071dbd74d19408c4c809f64fe920a148afe5c516f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 22,  57 => 20,  55 => 19,  54 => 18,  53 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% if field_description.hasAssociationAdmin
    and field_description.associationadmin.id(value)
    and field_description.associationadmin.hasRoute(route_name)
    and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\list_orm_one_to_one.html.twig");
    }
}
