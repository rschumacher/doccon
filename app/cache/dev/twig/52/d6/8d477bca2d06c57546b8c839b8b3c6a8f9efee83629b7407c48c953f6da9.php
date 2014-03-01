<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_52d68d477bca2d06c57546b8c839b8b3c6a8f9efee83629b7407c48c953f6da9 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();
                }
            });
        });
    }

    // handle the add link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                Admin.add_filters(field_dialog_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                field_dialog_form_list_handle_action_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 129
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 980,
                    modal: true,
                    resizable: true,
                    title: '";
        // line 134
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 136
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_list] close callback, removing js event');

                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 148
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {
        initialize_popup_";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_";
        // line 156
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html('');

        Admin.log('[";
        // line 158
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 166
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // populate the popup container
                field_dialog_";
        // line 169
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(html);

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
                jQuery('form', field_dialog_";
        // line 174
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 177
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog({
                    height: 'auto',
                    width: 850,
                    modal: true,
                    autoOpen: true,
                    resizable: true,
                    title: '";
        // line 183
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "translationdomain"));
        echo "',
                    close: function(event, ui) {
                        Admin.log('[";
        // line 185
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_add] dialog closed - removing  events');
                        // make sure we have a clean state
                        jQuery('a', field_dialog_";
        // line 187
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('click');
                        jQuery('form', field_dialog_";
        // line 188
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").off('submit');
                    }
                });
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 196
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 208
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 210
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 224
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 234
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 242
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 247
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".dialog('close');

                    ";
        // line 249
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 250
            echo "                        ";
            // line 254
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val(data.objectId);
                        jQuery('#";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').change();

                    ";
        } else {
            // line 258
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 260
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 261
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code")));
            // line 267
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 272
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 273
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 280
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 285
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_";
        // line 290
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ".html(data);

                Admin.add_pretty_errors(field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 295
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 302
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    function initialize_popup_";
        // line 304
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 306
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
            field_dialog_";
        // line 307
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 310
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");

            Admin.log('[";
        // line 312
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 319
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 321
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 326
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 330
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 337
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ") {
        Admin.add_pretty_errors(field_dialog_";
        // line 338
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ");
    }

    ";
        // line 341
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
            // line 342
            echo "        ";
            // line 345
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 347
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 351
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 355
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 362
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 367
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 374
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 377
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo " option').get(0)) {
                jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 381
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').val('');
            jQuery('#";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').trigger('change');

            return false;
        }
        ";
            // line 389
            echo "
        // update the label
        jQuery('#";
            // line 391
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "] update the label');

            jQuery('#field_widget_";
            // line 395
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 398
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : $this->getContext($context, "associationadmin")), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "link_parameters")));
            // line 403
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 406
            echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 412
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  685 => 406,  668 => 395,  647 => 382,  637 => 378,  633 => 377,  627 => 374,  609 => 362,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  492 => 295,  486 => 292,  481 => 290,  474 => 285,  466 => 280,  452 => 272,  445 => 267,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  415 => 247,  407 => 242,  396 => 234,  361 => 208,  331 => 187,  298 => 173,  291 => 169,  272 => 158,  267 => 156,  257 => 149,  213 => 126,  208 => 124,  135 => 81,  127 => 76,  97 => 63,  23 => 18,  275 => 103,  237 => 86,  232 => 136,  228 => 83,  201 => 72,  168 => 60,  145 => 52,  125 => 45,  113 => 41,  108 => 39,  102 => 37,  100 => 36,  82 => 33,  56 => 40,  21 => 12,  19 => 11,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  694 => 412,  689 => 137,  680 => 403,  675 => 132,  662 => 125,  658 => 391,  654 => 389,  643 => 381,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 367,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  557 => 330,  555 => 95,  550 => 326,  547 => 93,  529 => 92,  524 => 90,  515 => 85,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  467 => 72,  461 => 70,  456 => 273,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  366 => 210,  363 => 32,  350 => 26,  313 => 15,  311 => 14,  290 => 5,  285 => 3,  281 => 105,  278 => 410,  273 => 394,  258 => 354,  255 => 353,  253 => 148,  250 => 93,  245 => 335,  243 => 89,  238 => 139,  222 => 81,  217 => 79,  215 => 78,  212 => 279,  210 => 75,  207 => 269,  204 => 73,  202 => 266,  199 => 265,  191 => 69,  189 => 240,  181 => 232,  179 => 107,  174 => 64,  171 => 102,  169 => 210,  166 => 100,  164 => 203,  161 => 202,  159 => 196,  156 => 93,  154 => 189,  151 => 188,  134 => 161,  131 => 48,  129 => 148,  124 => 132,  116 => 116,  114 => 71,  111 => 110,  106 => 104,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  89 => 35,  61 => 25,  63 => 14,  45 => 9,  40 => 7,  31 => 22,  28 => 3,  26 => 20,  20 => 1,  710 => 149,  704 => 210,  701 => 209,  699 => 142,  693 => 205,  683 => 135,  678 => 398,  666 => 126,  663 => 393,  660 => 198,  652 => 193,  649 => 122,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 355,  593 => 105,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 91,  525 => 166,  522 => 165,  513 => 160,  509 => 304,  507 => 157,  504 => 302,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  480 => 75,  477 => 127,  470 => 73,  464 => 71,  462 => 146,  459 => 69,  453 => 142,  450 => 64,  448 => 140,  443 => 261,  427 => 136,  425 => 135,  422 => 250,  420 => 249,  411 => 126,  406 => 123,  400 => 47,  397 => 119,  395 => 118,  391 => 117,  385 => 41,  381 => 115,  371 => 35,  358 => 106,  355 => 27,  346 => 196,  344 => 24,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  323 => 92,  321 => 183,  316 => 121,  308 => 13,  304 => 174,  294 => 83,  288 => 107,  283 => 166,  269 => 100,  266 => 366,  251 => 67,  247 => 66,  244 => 65,  235 => 311,  233 => 304,  225 => 298,  220 => 80,  205 => 56,  200 => 55,  194 => 248,  188 => 49,  184 => 233,  178 => 45,  173 => 42,  152 => 92,  149 => 182,  146 => 181,  139 => 169,  121 => 75,  118 => 28,  115 => 27,  107 => 24,  79 => 32,  76 => 31,  64 => 3,  57 => 154,  49 => 111,  44 => 73,  42 => 8,  39 => 60,  37 => 53,  34 => 52,  32 => 15,  29 => 21,  312 => 177,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  280 => 131,  274 => 77,  265 => 99,  260 => 98,  256 => 96,  248 => 336,  242 => 140,  236 => 109,  230 => 303,  219 => 129,  214 => 99,  209 => 96,  197 => 119,  192 => 88,  187 => 87,  185 => 68,  182 => 85,  176 => 65,  170 => 79,  165 => 59,  160 => 58,  158 => 75,  153 => 56,  147 => 90,  144 => 176,  141 => 175,  138 => 50,  136 => 168,  132 => 59,  128 => 58,  123 => 30,  120 => 56,  110 => 40,  104 => 67,  86 => 46,  72 => 198,  54 => 12,  51 => 38,  35 => 16,  392 => 104,  389 => 103,  383 => 224,  377 => 37,  374 => 36,  368 => 34,  365 => 95,  362 => 94,  354 => 92,  352 => 104,  349 => 90,  342 => 23,  337 => 22,  335 => 188,  332 => 20,  326 => 185,  324 => 82,  318 => 122,  315 => 79,  309 => 117,  305 => 115,  302 => 73,  299 => 112,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 395,  271 => 374,  268 => 373,  263 => 365,  246 => 51,  240 => 326,  234 => 48,  231 => 47,  227 => 134,  224 => 103,  218 => 43,  216 => 100,  203 => 122,  186 => 111,  183 => 37,  180 => 36,  175 => 43,  157 => 41,  150 => 55,  143 => 26,  126 => 147,  122 => 44,  119 => 43,  112 => 26,  109 => 69,  105 => 106,  103 => 64,  95 => 20,  93 => 58,  90 => 18,  88 => 60,  85 => 34,  83 => 22,  80 => 41,  74 => 52,  71 => 19,  69 => 50,  66 => 12,  62 => 165,  55 => 12,  52 => 112,  46 => 21,  43 => 33,  41 => 6,  38 => 32,  36 => 4,  30 => 14,  24 => 1,  101 => 89,  98 => 21,  92 => 61,  87 => 17,  84 => 41,  81 => 40,  78 => 53,  75 => 39,  73 => 29,  70 => 33,  67 => 28,  59 => 164,  53 => 16,  50 => 22,  47 => 21,  12 => 34,);
    }
}
