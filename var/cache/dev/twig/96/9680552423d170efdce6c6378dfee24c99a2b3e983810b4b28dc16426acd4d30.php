<?php

/* @SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig */
class __TwigTemplate_75d11bd5d0e2286a023bb0ba83c2ce401b79f0f443a76dc48322cccdb8426c3b extends Twig_Template
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
        $__internal_adeddabc47ce521c09ee09a39d7d98fbcd0b4df794eaaef8237f267a9b4ccd6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adeddabc47ce521c09ee09a39d7d98fbcd0b4df794eaaef8237f267a9b4ccd6d->enter($__internal_adeddabc47ce521c09ee09a39d7d98fbcd0b4df794eaaef8237f267a9b4ccd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

        $__internal_b26d567728e89965129f26f7fd014a17c76dc39d920ae51724ec8a2c8d0d0f03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b26d567728e89965129f26f7fd014a17c76dc39d920ae51724ec8a2c8d0d0f03->enter($__internal_b26d567728e89965129f26f7fd014a17c76dc39d920ae51724ec8a2c8d0d0f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig"));

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
        
        $__internal_adeddabc47ce521c09ee09a39d7d98fbcd0b4df794eaaef8237f267a9b4ccd6d->leave($__internal_adeddabc47ce521c09ee09a39d7d98fbcd0b4df794eaaef8237f267a9b4ccd6d_prof);

        
        $__internal_b26d567728e89965129f26f7fd014a17c76dc39d920ae51724ec8a2c8d0d0f03->leave($__internal_b26d567728e89965129f26f7fd014a17c76dc39d920ae51724ec8a2c8d0d0f03_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/edit_modal.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\CRUD\\edit_modal.html.twig");
    }
}
