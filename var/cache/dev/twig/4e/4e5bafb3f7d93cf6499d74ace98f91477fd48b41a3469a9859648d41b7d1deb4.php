<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_aaed8ca818405347a2620ac281df8e69369700b88422d780af3aaca33f973f08 extends Twig_Template
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
        $__internal_de3313376aaa6b1df8d0658352343f4f2fe594d7832f66fc908c57b92bdf9736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3313376aaa6b1df8d0658352343f4f2fe594d7832f66fc908c57b92bdf9736->enter($__internal_de3313376aaa6b1df8d0658352343f4f2fe594d7832f66fc908c57b92bdf9736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig"));

        $__internal_c9d038ad5fa70ce3863a2f040ac611535bcff21696a644e07d03312c02c0e46e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d038ad5fa70ce3863a2f040ac611535bcff21696a644e07d03312c02c0e46e->enter($__internal_c9d038ad5fa70ce3863a2f040ac611535bcff21696a644e07d03312c02c0e46e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig"));

        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 36
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "code", array()), "elementId" =>         // line 37
($context["id"] ?? $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 38
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "subject", array())), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 39
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "admin", array()), "root", array()), "uniqid", array()), "subclass" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 40
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "subclass"), "method")) + $this->getAttribute($this->getAttribute(        // line 41
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "field_description", array()), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }
                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_";
        // line 50
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_";
        // line 60
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 66
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 67
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 74
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 78
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 83
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 87
        echo ($context["id"] ?? $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
        
        $__internal_de3313376aaa6b1df8d0658352343f4f2fe594d7832f66fc908c57b92bdf9736->leave($__internal_de3313376aaa6b1df8d0658352343f4f2fe594d7832f66fc908c57b92bdf9736_prof);

        
        $__internal_c9d038ad5fa70ce3863a2f040ac611535bcff21696a644e07d03312c02c0e46e->leave($__internal_c9d038ad5fa70ce3863a2f040ac611535bcff21696a644e07d03312c02c0e46e_prof);

    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 87,  121 => 83,  113 => 78,  106 => 74,  96 => 67,  92 => 66,  83 => 60,  70 => 50,  58 => 41,  57 => 40,  56 => 39,  55 => 38,  54 => 37,  53 => 36,  52 => 35,  40 => 26,  32 => 20,  29 => 18,  25 => 11,);
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


{#

This code manage the one-to-many association field popup

#}

{% autoescape false %}

<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_{{ id }} = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '{{ path('sonata_admin_append_form_element', {
                'code':      sonata_admin.admin.root.code,
                'elementId': id,
                'objectId':  sonata_admin.admin.root.id(sonata_admin.admin.root.subject),
                'uniqid':    sonata_admin.admin.root.uniqid,
                'subclass': app.request.query.get('subclass'),
            } + sonata_admin.field_description.getOption('link_parameters', {})) }}',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }
                var \$newForm = jQuery(html);
                var \$oldForm = jQuery('#field_container_{{ id }}');

                // Maintain state of file inputs
                \$oldForm.find('input[type=\"file\"]').each(function(){
                    var id = '#'+\$(this).attr('id');
                    \$newForm.find(id).replaceWith(\$(this));
                });

                \$oldForm.replaceWith(\$newForm); // replace the html

                Admin.shared_setup(jQuery('#field_container_{{ id }}'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-{{ id }}').trigger('sonata.add_element');
                jQuery('#field_container_{{ id }}').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_{{ id }} = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_{{ id }}(link) {

        link.onclick = null;

        // initialize component
        field_widget_{{ id }} = jQuery(\"#field_widget_{{ id }}\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_{{ id }})
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

{% endautoescape %}
", "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig", "C:\\Users\\Win10\\Sites\\devdesktop\\symfony\\symfony2\\symfony3\\vendor\\sonata-project\\doctrine-orm-admin-bundle/Resources/views/CRUD/edit_orm_one_association_script.html.twig");
    }
}
