<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_f87c4ea6125fc29e4c2ce4d7bac4c049c8019e8ea7359fea2b898a95fff91d95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1181acfc0b3b7121fce9966b145094fd23f52eaa9a9afa805906d2aa43d79c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1181acfc0b3b7121fce9966b145094fd23f52eaa9a9afa805906d2aa43d79c7->enter($__internal_f1181acfc0b3b7121fce9966b145094fd23f52eaa9a9afa805906d2aa43d79c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $__internal_092272d0290010ca322c05f31f75f9ed559186f3c81a61a68a8a35a676dae92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092272d0290010ca322c05f31f75f9ed559186f3c81a61a68a8a35a676dae92d->enter($__internal_092272d0290010ca322c05f31f75f9ed559186f3c81a61a68a8a35a676dae92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1181acfc0b3b7121fce9966b145094fd23f52eaa9a9afa805906d2aa43d79c7->leave($__internal_f1181acfc0b3b7121fce9966b145094fd23f52eaa9a9afa805906d2aa43d79c7_prof);

        
        $__internal_092272d0290010ca322c05f31f75f9ed559186f3c81a61a68a8a35a676dae92d->leave($__internal_092272d0290010ca322c05f31f75f9ed559186f3c81a61a68a8a35a676dae92d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\filter_admin_fields.html.twig");
    }
}
