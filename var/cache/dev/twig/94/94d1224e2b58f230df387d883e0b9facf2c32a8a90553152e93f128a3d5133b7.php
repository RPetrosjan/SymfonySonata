<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig */
class __TwigTemplate_98659c95b53e2a5605f32689270facf5643fbb7ebfad651f6f53a0c6ca063c23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_172aa883605c12c18349795ac42668dd433caace02a30b4c4a4254ac66f0a082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172aa883605c12c18349795ac42668dd433caace02a30b4c4a4254ac66f0a082->enter($__internal_172aa883605c12c18349795ac42668dd433caace02a30b4c4a4254ac66f0a082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        $__internal_9f3b71a627355d1bd05696d22bdfb8953e10f7a67d5f271fa7e732f3c1cf116f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3b71a627355d1bd05696d22bdfb8953e10f7a67d5f271fa7e732f3c1cf116f->enter($__internal_9f3b71a627355d1bd05696d22bdfb8953e10f7a67d5f271fa7e732f3c1cf116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig"));

        // line 11
        echo "
<div class=\"modal fade\" id=\"field_dialog_";
        // line 12
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_172aa883605c12c18349795ac42668dd433caace02a30b4c4a4254ac66f0a082->leave($__internal_172aa883605c12c18349795ac42668dd433caace02a30b4c4a4254ac66f0a082_prof);

        
        $__internal_9f3b71a627355d1bd05696d22bdfb8953e10f7a67d5f271fa7e732f3c1cf116f->leave($__internal_9f3b71a627355d1bd05696d22bdfb8953e10f7a67d5f271fa7e732f3c1cf116f_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

<div class=\"modal fade\" id=\"field_dialog_{{ id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\"></h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>
", "SonataDoctrineORMAdminBundle:CRUD:edit_modal.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/edit_modal.html.twig");
    }
}
