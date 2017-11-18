<?php

/* SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_04e876cad460526708cb672487f672d5b949636bff45763409d3575bd2f7d8ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 12);
        $this->blocks = array(
            'sonata_admin_orm_one_to_one_widget' => array($this, 'block_sonata_admin_orm_one_to_one_widget'),
            'sonata_admin_orm_many_to_many_widget' => array($this, 'block_sonata_admin_orm_many_to_many_widget'),
            'sonata_admin_orm_many_to_one_widget' => array($this, 'block_sonata_admin_orm_many_to_one_widget'),
            'sonata_admin_orm_one_to_many_widget' => array($this, 'block_sonata_admin_orm_one_to_many_widget'),
            'sonata_type_model_widget' => array($this, 'block_sonata_type_model_widget'),
            'sonata_type_model_list_widget' => array($this, 'block_sonata_type_model_list_widget'),
            'sonata_type_admin_widget' => array($this, 'block_sonata_type_admin_widget'),
            'sonata_type_collection_widget' => array($this, 'block_sonata_type_collection_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb68e05eddd0b0a4ff1ae2e03ab825c4df2558bd3e49eed03da9f8c313b29594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb68e05eddd0b0a4ff1ae2e03ab825c4df2558bd3e49eed03da9f8c313b29594->enter($__internal_cb68e05eddd0b0a4ff1ae2e03ab825c4df2558bd3e49eed03da9f8c313b29594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $__internal_7340008529ab7204cc382aec44f294b92eff345ee171208015e30b0733174e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7340008529ab7204cc382aec44f294b92eff345ee171208015e30b0733174e6e->enter($__internal_7340008529ab7204cc382aec44f294b92eff345ee171208015e30b0733174e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb68e05eddd0b0a4ff1ae2e03ab825c4df2558bd3e49eed03da9f8c313b29594->leave($__internal_cb68e05eddd0b0a4ff1ae2e03ab825c4df2558bd3e49eed03da9f8c313b29594_prof);

        
        $__internal_7340008529ab7204cc382aec44f294b92eff345ee171208015e30b0733174e6e->leave($__internal_7340008529ab7204cc382aec44f294b92eff345ee171208015e30b0733174e6e_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_7ec00c0f042598b6a70176755c4b3820b2d77b3a5e19121fae22b6d3dedeef86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec00c0f042598b6a70176755c4b3820b2d77b3a5e19121fae22b6d3dedeef86->enter($__internal_7ec00c0f042598b6a70176755c4b3820b2d77b3a5e19121fae22b6d3dedeef86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        $__internal_d45c7dfacb8e01ff217aba23f53d0e225a29927e82cb30ac17fc02df501b6156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45c7dfacb8e01ff217aba23f53d0e225a29927e82cb30ac17fc02df501b6156->enter($__internal_d45c7dfacb8e01ff217aba23f53d0e225a29927e82cb30ac17fc02df501b6156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_d45c7dfacb8e01ff217aba23f53d0e225a29927e82cb30ac17fc02df501b6156->leave($__internal_d45c7dfacb8e01ff217aba23f53d0e225a29927e82cb30ac17fc02df501b6156_prof);

        
        $__internal_7ec00c0f042598b6a70176755c4b3820b2d77b3a5e19121fae22b6d3dedeef86->leave($__internal_7ec00c0f042598b6a70176755c4b3820b2d77b3a5e19121fae22b6d3dedeef86_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_61cf9b8f4521521d0e35805f4bbb67c3a0ebcc92cc5f8ec16736f9cf6f1de69b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61cf9b8f4521521d0e35805f4bbb67c3a0ebcc92cc5f8ec16736f9cf6f1de69b->enter($__internal_61cf9b8f4521521d0e35805f4bbb67c3a0ebcc92cc5f8ec16736f9cf6f1de69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        $__internal_dbfc0e481ae104d110832a7bb419e5842bc0a01ca504a27073bb8fc69264848a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbfc0e481ae104d110832a7bb419e5842bc0a01ca504a27073bb8fc69264848a->enter($__internal_dbfc0e481ae104d110832a7bb419e5842bc0a01ca504a27073bb8fc69264848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_dbfc0e481ae104d110832a7bb419e5842bc0a01ca504a27073bb8fc69264848a->leave($__internal_dbfc0e481ae104d110832a7bb419e5842bc0a01ca504a27073bb8fc69264848a_prof);

        
        $__internal_61cf9b8f4521521d0e35805f4bbb67c3a0ebcc92cc5f8ec16736f9cf6f1de69b->leave($__internal_61cf9b8f4521521d0e35805f4bbb67c3a0ebcc92cc5f8ec16736f9cf6f1de69b_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_92adf84be7627a0739bd6598b183ff7afed21c64223534581f35260a39006b91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92adf84be7627a0739bd6598b183ff7afed21c64223534581f35260a39006b91->enter($__internal_92adf84be7627a0739bd6598b183ff7afed21c64223534581f35260a39006b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        $__internal_c5f6a9968e4273e49a2a493a2321d0236f6f603094b4380474e82b6da82bca2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f6a9968e4273e49a2a493a2321d0236f6f603094b4380474e82b6da82bca2c->enter($__internal_c5f6a9968e4273e49a2a493a2321d0236f6f603094b4380474e82b6da82bca2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_c5f6a9968e4273e49a2a493a2321d0236f6f603094b4380474e82b6da82bca2c->leave($__internal_c5f6a9968e4273e49a2a493a2321d0236f6f603094b4380474e82b6da82bca2c_prof);

        
        $__internal_92adf84be7627a0739bd6598b183ff7afed21c64223534581f35260a39006b91->leave($__internal_92adf84be7627a0739bd6598b183ff7afed21c64223534581f35260a39006b91_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_1f5dc2b07c20e337a4fcea0f6840744a0c17e295e3107dad81a165288c87fe22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5dc2b07c20e337a4fcea0f6840744a0c17e295e3107dad81a165288c87fe22->enter($__internal_1f5dc2b07c20e337a4fcea0f6840744a0c17e295e3107dad81a165288c87fe22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        $__internal_0613032da188049355a9950c674ea9ee6789b46f356a14ab309aac2d81a1f7a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0613032da188049355a9950c674ea9ee6789b46f356a14ab309aac2d81a1f7a6->enter($__internal_0613032da188049355a9950c674ea9ee6789b46f356a14ab309aac2d81a1f7a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_0613032da188049355a9950c674ea9ee6789b46f356a14ab309aac2d81a1f7a6->leave($__internal_0613032da188049355a9950c674ea9ee6789b46f356a14ab309aac2d81a1f7a6_prof);

        
        $__internal_1f5dc2b07c20e337a4fcea0f6840744a0c17e295e3107dad81a165288c87fe22->leave($__internal_1f5dc2b07c20e337a4fcea0f6840744a0c17e295e3107dad81a165288c87fe22_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_1162e24c27d573314cc10fda7bf2b8d5f5d43f74e9399d04864cee99c97ad03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1162e24c27d573314cc10fda7bf2b8d5f5d43f74e9399d04864cee99c97ad03f->enter($__internal_1162e24c27d573314cc10fda7bf2b8d5f5d43f74e9399d04864cee99c97ad03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        $__internal_f2a21672a3f288345a1ba7e4dc16d73e6b5343167deafc5c3f883e2f8b38e95b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a21672a3f288345a1ba7e4dc16d73e6b5343167deafc5c3f883e2f8b38e95b->enter($__internal_f2a21672a3f288345a1ba7e4dc16d73e6b5343167deafc5c3f883e2f8b38e95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        // line 33
        echo "    ";
        // line 37
        echo "
    ";
        // line 39
        echo "
    ";
        // line 40
        if (twig_test_empty($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()))) {
            // line 41
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 42
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 43
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 44
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 45
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 46
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 47
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 48
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 49
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            // line 52
            echo "        ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_f2a21672a3f288345a1ba7e4dc16d73e6b5343167deafc5c3f883e2f8b38e95b->leave($__internal_f2a21672a3f288345a1ba7e4dc16d73e6b5343167deafc5c3f883e2f8b38e95b_prof);

        
        $__internal_1162e24c27d573314cc10fda7bf2b8d5f5d43f74e9399d04864cee99c97ad03f->leave($__internal_1162e24c27d573314cc10fda7bf2b8d5f5d43f74e9399d04864cee99c97ad03f_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_990028e2831941029d8a25cea75d7e0b7f1a2dc159b3f2b6ae2bd81bfe7356f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990028e2831941029d8a25cea75d7e0b7f1a2dc159b3f2b6ae2bd81bfe7356f5->enter($__internal_990028e2831941029d8a25cea75d7e0b7f1a2dc159b3f2b6ae2bd81bfe7356f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_3d8a115a9823efcad2766bfe89091d4b1f4d28e694ab5cf66d4a68ce4dde5bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d8a115a9823efcad2766bfe89091d4b1f4d28e694ab5cf66d4a68ce4dde5bd7->enter($__internal_3d8a115a9823efcad2766bfe89091d4b1f4d28e694ab5cf66d4a68ce4dde5bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        // line 57
        echo "    <div id=\"field_container_";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-container\">
        <span id=\"field_widget_";
        // line 58
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-short-description\">
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "value", array())), "method")) {
            // line 60
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 61
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "code", array()), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 62
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "id", array(0 => $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "value", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 63
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "uniqid", array()), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "link_parameters", array()))));
            // line 65
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 66
($context["sonata_admin"] ?? null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()))) {
            // line 67
            echo "                <span class=\"inner-field-short-description\">
                    ";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "options", array()), "placeholder", array()), array(), "SonataAdminBundle"), "html", null, true);
            echo "
                </span>
            ";
        }
        // line 71
        echo "        </span>
        <span id=\"field_actions_";
        // line 72
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
        // line 74
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "LIST"), "method")) && ($context["btn_list"] ?? $this->getContext($context, "btn_list")))) {
            // line 75
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_list_";
            // line 76
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? $this->getContext($context, "btn_list")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-list\"></i>
                        ";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_list"] ?? $this->getContext($context, "btn_list")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 84
        echo "
                ";
        // line 85
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "CREATE"), "method")) && ($context["btn_add"] ?? $this->getContext($context, "btn_add")))) {
            // line 86
            echo "                    <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "generateUrl", array(0 => "create"), "method"), "html", null, true);
            echo "\"
                        onclick=\"return start_field_dialog_form_add_";
            // line 87
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        ";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_add"] ?? $this->getContext($context, "btn_add")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 95
        echo "            </span>

            <span class=\"btn-group\">
                ";
        // line 98
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "hasRoute", array(0 => "delete"), "method") && $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "associationadmin", array()), "isGranted", array(0 => "DELETE"), "method")) && ($context["btn_delete"] ?? $this->getContext($context, "btn_delete")))) {
            // line 99
            echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
            // line 100
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? $this->getContext($context, "btn_delete")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        ";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["btn_delete"] ?? $this->getContext($context, "btn_delete")), array(), ($context["btn_catalogue"] ?? $this->getContext($context, "btn_catalogue"))), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 108
        echo "            </span>
        </span>

        <span style=\"display: none\" >
            ";
        // line 113
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget', array("required" => false));
        echo "
        </span>

        ";
        // line 116
        $this->displayBlock("sonata_help", $context, $blocks);
        echo "

        <div class=\"modal fade\" id=\"field_dialog_";
        // line 118
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
    </div>

    ";
        // line 132
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", 132)->display($context);
        
        $__internal_3d8a115a9823efcad2766bfe89091d4b1f4d28e694ab5cf66d4a68ce4dde5bd7->leave($__internal_3d8a115a9823efcad2766bfe89091d4b1f4d28e694ab5cf66d4a68ce4dde5bd7_prof);

        
        $__internal_990028e2831941029d8a25cea75d7e0b7f1a2dc159b3f2b6ae2bd81bfe7356f5->leave($__internal_990028e2831941029d8a25cea75d7e0b7f1a2dc159b3f2b6ae2bd81bfe7356f5_prof);

    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_0aca188c92ba7c7d53e43a3050c6b945571266ff8e7333bf74345aa408fc87fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aca188c92ba7c7d53e43a3050c6b945571266ff8e7333bf74345aa408fc87fa->enter($__internal_0aca188c92ba7c7d53e43a3050c6b945571266ff8e7333bf74345aa408fc87fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        $__internal_76f38e959887590f317fca4c2640afde3acb5160b6e9f17b6a4d52d92ebe4e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f38e959887590f317fca4c2640afde3acb5160b6e9f17b6a4d52d92ebe4e1f->enter($__internal_76f38e959887590f317fca4c2640afde3acb5160b6e9f17b6a4d52d92ebe4e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        // line 136
        echo "    ";
        // line 137
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_ONE"))) {
            // line 138
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 139
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_ONE"))) {
            // line 140
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_one_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 141
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 142
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 143
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 144
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 146
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_76f38e959887590f317fca4c2640afde3acb5160b6e9f17b6a4d52d92ebe4e1f->leave($__internal_76f38e959887590f317fca4c2640afde3acb5160b6e9f17b6a4d52d92ebe4e1f_prof);

        
        $__internal_0aca188c92ba7c7d53e43a3050c6b945571266ff8e7333bf74345aa408fc87fa->leave($__internal_0aca188c92ba7c7d53e43a3050c6b945571266ff8e7333bf74345aa408fc87fa_prof);

    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_8320e387ceefddb5685594e1c914b2c4482b5988bc8614b3cada3ce434a27dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8320e387ceefddb5685594e1c914b2c4482b5988bc8614b3cada3ce434a27dff->enter($__internal_8320e387ceefddb5685594e1c914b2c4482b5988bc8614b3cada3ce434a27dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        $__internal_51111f05e677650f1b25ac5d148a13cf56c069115319a0c889edbbd3fcf48ae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51111f05e677650f1b25ac5d148a13cf56c069115319a0c889edbbd3fcf48ae0->enter($__internal_51111f05e677650f1b25ac5d148a13cf56c069115319a0c889edbbd3fcf48ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        // line 151
        echo "    ";
        if (($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::ONE_TO_MANY"))) {
            // line 152
            echo "        ";
            $this->displayBlock("sonata_admin_orm_one_to_many_widget", $context, $blocks);
            echo "
    ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 153
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()) == twig_constant("Doctrine\\ORM\\Mapping\\ClassMetadataInfo::MANY_TO_MANY"))) {
            // line 154
            echo "        ";
            $this->displayBlock("sonata_admin_orm_many_to_many_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 156
            echo "        INVALID MODE : ";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo " - type : sonata_type_collection - mapping : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "mappingtype", array()), "html", null, true);
            echo "
    ";
        }
        
        $__internal_51111f05e677650f1b25ac5d148a13cf56c069115319a0c889edbbd3fcf48ae0->leave($__internal_51111f05e677650f1b25ac5d148a13cf56c069115319a0c889edbbd3fcf48ae0_prof);

        
        $__internal_8320e387ceefddb5685594e1c914b2c4482b5988bc8614b3cada3ce434a27dff->leave($__internal_8320e387ceefddb5685594e1c914b2c4482b5988bc8614b3cada3ce434a27dff_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 156,  442 => 154,  440 => 153,  435 => 152,  432 => 151,  423 => 150,  409 => 146,  403 => 144,  401 => 143,  396 => 142,  394 => 141,  389 => 140,  387 => 139,  382 => 138,  379 => 137,  377 => 136,  368 => 135,  358 => 132,  341 => 118,  336 => 116,  329 => 113,  323 => 108,  317 => 105,  311 => 102,  306 => 100,  303 => 99,  301 => 98,  296 => 95,  290 => 92,  284 => 89,  279 => 87,  274 => 86,  272 => 85,  269 => 84,  263 => 81,  257 => 78,  252 => 76,  247 => 75,  245 => 74,  240 => 72,  237 => 71,  231 => 68,  228 => 67,  226 => 66,  223 => 65,  221 => 64,  220 => 63,  219 => 62,  218 => 61,  216 => 60,  214 => 59,  210 => 58,  205 => 57,  196 => 56,  182 => 52,  180 => 51,  174 => 49,  172 => 48,  167 => 47,  165 => 46,  160 => 45,  158 => 44,  153 => 43,  151 => 42,  146 => 41,  144 => 40,  141 => 39,  138 => 37,  136 => 33,  127 => 32,  116 => 29,  107 => 28,  96 => 25,  87 => 24,  76 => 21,  67 => 20,  56 => 17,  47 => 16,  11 => 12,);
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

{% extends 'SonataAdminBundle:Form:form_admin_fields.html.twig' %}


{# Custom Sonata Admin Extension #}
{% block sonata_admin_orm_one_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_many_to_one_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig' %}
{% endblock %}

{% block sonata_admin_orm_one_to_many_widget %}
    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig' %}
{% endblock %}

{% block sonata_type_model_widget %}
    {#
        This is not the best way to do if
        TODO : improve this part
    #}

    {#model {{ sonata_admin.field_description.mappingtype }}#}

    {% if sonata_admin.field_description is empty %}
        {{ block('choice_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        {#INVALID MODE : {{ id }}#}
        {{ block('choice_widget') }}
    {% endif %}
{% endblock %}

{% block sonata_type_model_list_widget %}
    <div id=\"field_container_{{ id }}\" class=\"field-container\">
        <span id=\"field_widget_{{ id }}\" class=\"field-short-description\">
            {% if sonata_admin.field_description.associationadmin.id(sonata_admin.value) %}
                {{ render(path('sonata_admin_short_object_information', {
                    'code':     sonata_admin.field_description.associationadmin.code,
                    'objectId': sonata_admin.field_description.associationadmin.id(sonata_admin.value),
                    'uniqid':   sonata_admin.field_description.associationadmin.uniqid,
                    'linkParameters': sonata_admin.field_description.options.link_parameters
                })) }}
            {% elseif sonata_admin.field_description.options.placeholder is defined and sonata_admin.field_description.options.placeholder %}
                <span class=\"inner-field-short-description\">
                    {{ sonata_admin.field_description.options.placeholder|trans({}, 'SonataAdminBundle') }}
                </span>
            {% endif %}
        </span>
        <span id=\"field_actions_{{ id }}\" class=\"field-actions\">
            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasroute('list') and sonata_admin.field_description.associationadmin.isGranted('LIST') and btn_list %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('list') }}\"
                        onclick=\"return start_field_dialog_form_list_{{ id }}(this);\"
                        class=\"btn btn-info btn-sm sonata-ba-action\"
                        title=\"{{ btn_list|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-list\"></i>
                        {{ btn_list|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}

                {% if sonata_admin.field_description.associationadmin.hasroute('create') and sonata_admin.field_description.associationadmin.isGranted('CREATE') and btn_add %}
                    <a  href=\"{{ sonata_admin.field_description.associationadmin.generateUrl('create') }}\"
                        onclick=\"return start_field_dialog_form_add_{{ id }}(this);\"
                        class=\"btn btn-success btn-sm sonata-ba-action\"
                        title=\"{{ btn_add|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-plus-circle\"></i>
                        {{ btn_add|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>

            <span class=\"btn-group\">
                {% if sonata_admin.field_description.associationadmin.hasRoute('delete') and sonata_admin.field_description.associationadmin.isGranted('DELETE') and btn_delete %}
                    <a  href=\"\"
                        onclick=\"return remove_selected_element_{{ id }}(this);\"
                        class=\"btn btn-danger btn-sm sonata-ba-action\"
                        title=\"{{ btn_delete|trans({}, btn_catalogue) }}\"
                            >
                        <i class=\"fa fa-minus-circle\"></i>
                        {{ btn_delete|trans({}, btn_catalogue) }}
                    </a>
                {% endif %}
            </span>
        </span>

        <span style=\"display: none\" >
            {# Hidden text input cannot be required, because browser will throw error \"An invalid form control with name='' is not focusable\"  #}
            {{ form_widget(form, {'required':false}) }}
        </span>

        {{ block('sonata_help') }}

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
    </div>

    {% include 'SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig' %}
{% endblock %}

{% block sonata_type_admin_widget %}
    {#admin {{ sonata_admin.field_description.mappingtype }}#}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_ONE') %}
        {{ block('sonata_admin_orm_one_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_ONE') %}
        {{ block('sonata_admin_orm_many_to_one_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }}
    {% endif %}
{% endblock %}

{% block sonata_type_collection_widget %}
    {% if sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::ONE_TO_MANY') %}
        {{ block('sonata_admin_orm_one_to_many_widget') }}
    {% elseif sonata_admin.field_description.mappingtype == constant('Doctrine\\\\ORM\\\\Mapping\\\\ClassMetadataInfo::MANY_TO_MANY') %}
        {{ block('sonata_admin_orm_many_to_many_widget') }}
    {% else %}
        INVALID MODE : {{ id }} - type : sonata_type_collection - mapping : {{ sonata_admin.field_description.mappingtype }}
    {% endif %}
{% endblock %}
", "SonataDoctrineORMAdminBundle:Form:form_admin_fields.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/Form/form_admin_fields.html.twig");
    }
}
