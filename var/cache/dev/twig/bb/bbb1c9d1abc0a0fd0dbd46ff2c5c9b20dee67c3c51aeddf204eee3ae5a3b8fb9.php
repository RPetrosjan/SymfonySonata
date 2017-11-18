<?php

/* SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig */
class __TwigTemplate_2122a8d987273edad0371643b3163d826c0751035bafd8a3362ca0de3ec66f26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f0746e882304e5c87112c077667524e8b8c6d4c1dfe923f480d39769b10c12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f0746e882304e5c87112c077667524e8b8c6d4c1dfe923f480d39769b10c12->enter($__internal_96f0746e882304e5c87112c077667524e8b8c6d4c1dfe923f480d39769b10c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $__internal_c78a652fb5fcaf82654175eeaa74b4baa408b1d6cdf19cf1d4d411f630ecb5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78a652fb5fcaf82654175eeaa74b4baa408b1d6cdf19cf1d4d411f630ecb5a7->enter($__internal_c78a652fb5fcaf82654175eeaa74b4baa408b1d6cdf19cf1d4d411f630ecb5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f0746e882304e5c87112c077667524e8b8c6d4c1dfe923f480d39769b10c12->leave($__internal_96f0746e882304e5c87112c077667524e8b8c6d4c1dfe923f480d39769b10c12_prof);

        
        $__internal_c78a652fb5fcaf82654175eeaa74b4baa408b1d6cdf19cf1d4d411f630ecb5a7->leave($__internal_c78a652fb5fcaf82654175eeaa74b4baa408b1d6cdf19cf1d4d411f630ecb5a7_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "SonataDoctrineORMAdminBundle:Form:filter_admin_fields.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
