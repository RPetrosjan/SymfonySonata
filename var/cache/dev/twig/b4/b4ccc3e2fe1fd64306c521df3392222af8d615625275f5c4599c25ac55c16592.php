<?php

/* @SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig */
class __TwigTemplate_112d3dbee203720943ec16b85eb2fb30dcd5533561878c7a15b4c8ca41879ee7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:form_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 12);
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
        $__internal_5cb8466d847a9e011532ac03644e098ec923f19aec22840e46ba449c27e48b2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb8466d847a9e011532ac03644e098ec923f19aec22840e46ba449c27e48b2f->enter($__internal_5cb8466d847a9e011532ac03644e098ec923f19aec22840e46ba449c27e48b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig"));

        $__internal_ac86a02103bdbd79d027ff05e899f5cc44516a123f4052e7d33205c71a2fd723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac86a02103bdbd79d027ff05e899f5cc44516a123f4052e7d33205c71a2fd723->enter($__internal_ac86a02103bdbd79d027ff05e899f5cc44516a123f4052e7d33205c71a2fd723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cb8466d847a9e011532ac03644e098ec923f19aec22840e46ba449c27e48b2f->leave($__internal_5cb8466d847a9e011532ac03644e098ec923f19aec22840e46ba449c27e48b2f_prof);

        
        $__internal_ac86a02103bdbd79d027ff05e899f5cc44516a123f4052e7d33205c71a2fd723->leave($__internal_ac86a02103bdbd79d027ff05e899f5cc44516a123f4052e7d33205c71a2fd723_prof);

    }

    // line 16
    public function block_sonata_admin_orm_one_to_one_widget($context, array $blocks = array())
    {
        $__internal_340974708962414e2cd7f8af4d7caf0e509c917c9f1c54bd7e3f682deae71bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340974708962414e2cd7f8af4d7caf0e509c917c9f1c54bd7e3f682deae71bd6->enter($__internal_340974708962414e2cd7f8af4d7caf0e509c917c9f1c54bd7e3f682deae71bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        $__internal_eb202759bf1ca81cc127d69e8bfcf575e6cb3b17d5614c23a77e58d5f0d9752e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb202759bf1ca81cc127d69e8bfcf575e6cb3b17d5614c23a77e58d5f0d9752e->enter($__internal_eb202759bf1ca81cc127d69e8bfcf575e6cb3b17d5614c23a77e58d5f0d9752e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_one_widget"));

        // line 17
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_one.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 17)->display($context);
        
        $__internal_eb202759bf1ca81cc127d69e8bfcf575e6cb3b17d5614c23a77e58d5f0d9752e->leave($__internal_eb202759bf1ca81cc127d69e8bfcf575e6cb3b17d5614c23a77e58d5f0d9752e_prof);

        
        $__internal_340974708962414e2cd7f8af4d7caf0e509c917c9f1c54bd7e3f682deae71bd6->leave($__internal_340974708962414e2cd7f8af4d7caf0e509c917c9f1c54bd7e3f682deae71bd6_prof);

    }

    // line 20
    public function block_sonata_admin_orm_many_to_many_widget($context, array $blocks = array())
    {
        $__internal_e29a61a92f8435f7ef2caa0252ad8a7c1f7b252861689c66fa18046e49a622fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29a61a92f8435f7ef2caa0252ad8a7c1f7b252861689c66fa18046e49a622fa->enter($__internal_e29a61a92f8435f7ef2caa0252ad8a7c1f7b252861689c66fa18046e49a622fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        $__internal_9ffa56afe4d1a28946c498565a2d4a9698ef19f08263e8f48b606ce15b8c863c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffa56afe4d1a28946c498565a2d4a9698ef19f08263e8f48b606ce15b8c863c->enter($__internal_9ffa56afe4d1a28946c498565a2d4a9698ef19f08263e8f48b606ce15b8c863c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_many_widget"));

        // line 21
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_many.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 21)->display($context);
        
        $__internal_9ffa56afe4d1a28946c498565a2d4a9698ef19f08263e8f48b606ce15b8c863c->leave($__internal_9ffa56afe4d1a28946c498565a2d4a9698ef19f08263e8f48b606ce15b8c863c_prof);

        
        $__internal_e29a61a92f8435f7ef2caa0252ad8a7c1f7b252861689c66fa18046e49a622fa->leave($__internal_e29a61a92f8435f7ef2caa0252ad8a7c1f7b252861689c66fa18046e49a622fa_prof);

    }

    // line 24
    public function block_sonata_admin_orm_many_to_one_widget($context, array $blocks = array())
    {
        $__internal_85e10022694a25ee4e9d6fa9cb3204b739429526a0f5c959dd2f56234d142da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e10022694a25ee4e9d6fa9cb3204b739429526a0f5c959dd2f56234d142da5->enter($__internal_85e10022694a25ee4e9d6fa9cb3204b739429526a0f5c959dd2f56234d142da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        $__internal_ca9cc62c04b2ab8061299cd338d4610afce3ef625d28587b5a925d4e8eaff4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9cc62c04b2ab8061299cd338d4610afce3ef625d28587b5a925d4e8eaff4de->enter($__internal_ca9cc62c04b2ab8061299cd338d4610afce3ef625d28587b5a925d4e8eaff4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_many_to_one_widget"));

        // line 25
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 25)->display($context);
        
        $__internal_ca9cc62c04b2ab8061299cd338d4610afce3ef625d28587b5a925d4e8eaff4de->leave($__internal_ca9cc62c04b2ab8061299cd338d4610afce3ef625d28587b5a925d4e8eaff4de_prof);

        
        $__internal_85e10022694a25ee4e9d6fa9cb3204b739429526a0f5c959dd2f56234d142da5->leave($__internal_85e10022694a25ee4e9d6fa9cb3204b739429526a0f5c959dd2f56234d142da5_prof);

    }

    // line 28
    public function block_sonata_admin_orm_one_to_many_widget($context, array $blocks = array())
    {
        $__internal_21a4092951b9d40956f246bbf26ef5dea865033ef0a4cb4b75ca9f1d1017b523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a4092951b9d40956f246bbf26ef5dea865033ef0a4cb4b75ca9f1d1017b523->enter($__internal_21a4092951b9d40956f246bbf26ef5dea865033ef0a4cb4b75ca9f1d1017b523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        $__internal_c4c1c147264a762daa298e4814dbd66dbd851e677dbdc62e2c38e98ecd0b541f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4c1c147264a762daa298e4814dbd66dbd851e677dbdc62e2c38e98ecd0b541f->enter($__internal_c4c1c147264a762daa298e4814dbd66dbd851e677dbdc62e2c38e98ecd0b541f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_admin_orm_one_to_many_widget"));

        // line 29
        echo "    ";
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_to_many.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 29)->display($context);
        
        $__internal_c4c1c147264a762daa298e4814dbd66dbd851e677dbdc62e2c38e98ecd0b541f->leave($__internal_c4c1c147264a762daa298e4814dbd66dbd851e677dbdc62e2c38e98ecd0b541f_prof);

        
        $__internal_21a4092951b9d40956f246bbf26ef5dea865033ef0a4cb4b75ca9f1d1017b523->leave($__internal_21a4092951b9d40956f246bbf26ef5dea865033ef0a4cb4b75ca9f1d1017b523_prof);

    }

    // line 32
    public function block_sonata_type_model_widget($context, array $blocks = array())
    {
        $__internal_4c890c06ec576751e05914c0fb2be01fb7bcfdef4f26a8c379b56af623a7f8cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c890c06ec576751e05914c0fb2be01fb7bcfdef4f26a8c379b56af623a7f8cd->enter($__internal_4c890c06ec576751e05914c0fb2be01fb7bcfdef4f26a8c379b56af623a7f8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

        $__internal_06c620cd6fd589676606280890a1ceaa9ff1827d847ed3a655ad84cad4d3a1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c620cd6fd589676606280890a1ceaa9ff1827d847ed3a655ad84cad4d3a1ee->enter($__internal_06c620cd6fd589676606280890a1ceaa9ff1827d847ed3a655ad84cad4d3a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_widget"));

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
        
        $__internal_06c620cd6fd589676606280890a1ceaa9ff1827d847ed3a655ad84cad4d3a1ee->leave($__internal_06c620cd6fd589676606280890a1ceaa9ff1827d847ed3a655ad84cad4d3a1ee_prof);

        
        $__internal_4c890c06ec576751e05914c0fb2be01fb7bcfdef4f26a8c379b56af623a7f8cd->leave($__internal_4c890c06ec576751e05914c0fb2be01fb7bcfdef4f26a8c379b56af623a7f8cd_prof);

    }

    // line 56
    public function block_sonata_type_model_list_widget($context, array $blocks = array())
    {
        $__internal_fb6407911bc7eb464f772c1e3ab2ffc94de4361467a6df8f5d8357d5d94d5a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6407911bc7eb464f772c1e3ab2ffc94de4361467a6df8f5d8357d5d94d5a01->enter($__internal_fb6407911bc7eb464f772c1e3ab2ffc94de4361467a6df8f5d8357d5d94d5a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

        $__internal_5fa78b54128d9d32008ca549f898f72630ff8e8d07983bc701f021bfe5448461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fa78b54128d9d32008ca549f898f72630ff8e8d07983bc701f021bfe5448461->enter($__internal_5fa78b54128d9d32008ca549f898f72630ff8e8d07983bc701f021bfe5448461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_model_list_widget"));

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
        $this->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", 132)->display($context);
        
        $__internal_5fa78b54128d9d32008ca549f898f72630ff8e8d07983bc701f021bfe5448461->leave($__internal_5fa78b54128d9d32008ca549f898f72630ff8e8d07983bc701f021bfe5448461_prof);

        
        $__internal_fb6407911bc7eb464f772c1e3ab2ffc94de4361467a6df8f5d8357d5d94d5a01->leave($__internal_fb6407911bc7eb464f772c1e3ab2ffc94de4361467a6df8f5d8357d5d94d5a01_prof);

    }

    // line 135
    public function block_sonata_type_admin_widget($context, array $blocks = array())
    {
        $__internal_e90cf1fabf2a7ce6bd04cc5144cc94c2bf7f050d6358cb2dd637bdc7b3547834 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90cf1fabf2a7ce6bd04cc5144cc94c2bf7f050d6358cb2dd637bdc7b3547834->enter($__internal_e90cf1fabf2a7ce6bd04cc5144cc94c2bf7f050d6358cb2dd637bdc7b3547834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

        $__internal_6e14997d5e3cda698f5f6486dc03897a64ed70e16ca51a092fccc66332b4f814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e14997d5e3cda698f5f6486dc03897a64ed70e16ca51a092fccc66332b4f814->enter($__internal_6e14997d5e3cda698f5f6486dc03897a64ed70e16ca51a092fccc66332b4f814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_admin_widget"));

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
        
        $__internal_6e14997d5e3cda698f5f6486dc03897a64ed70e16ca51a092fccc66332b4f814->leave($__internal_6e14997d5e3cda698f5f6486dc03897a64ed70e16ca51a092fccc66332b4f814_prof);

        
        $__internal_e90cf1fabf2a7ce6bd04cc5144cc94c2bf7f050d6358cb2dd637bdc7b3547834->leave($__internal_e90cf1fabf2a7ce6bd04cc5144cc94c2bf7f050d6358cb2dd637bdc7b3547834_prof);

    }

    // line 150
    public function block_sonata_type_collection_widget($context, array $blocks = array())
    {
        $__internal_8b8e31983d8afe066668c356cbc972f7154b459f327ffe3e1f8d8e2fda4112e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b8e31983d8afe066668c356cbc972f7154b459f327ffe3e1f8d8e2fda4112e8->enter($__internal_8b8e31983d8afe066668c356cbc972f7154b459f327ffe3e1f8d8e2fda4112e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

        $__internal_84c84a7292e7e399d89c3cb85d99fb71eb672cc2466552f731f7757cab0eeb19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c84a7292e7e399d89c3cb85d99fb71eb672cc2466552f731f7757cab0eeb19->enter($__internal_84c84a7292e7e399d89c3cb85d99fb71eb672cc2466552f731f7757cab0eeb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_collection_widget"));

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
        
        $__internal_84c84a7292e7e399d89c3cb85d99fb71eb672cc2466552f731f7757cab0eeb19->leave($__internal_84c84a7292e7e399d89c3cb85d99fb71eb672cc2466552f731f7757cab0eeb19_prof);

        
        $__internal_8b8e31983d8afe066668c356cbc972f7154b459f327ffe3e1f8d8e2fda4112e8->leave($__internal_8b8e31983d8afe066668c356cbc972f7154b459f327ffe3e1f8d8e2fda4112e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig";
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
", "@SonataDoctrineORMAdmin/Form/form_admin_fields.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle\\Resources\\views\\Form\\form_admin_fields.html.twig");
    }
}
