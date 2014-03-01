<?php

/* SonataAdminBundle:Form:form_admin_fields.html.twig */
class __TwigTemplate_d0ffff5ad55659a61e5055d6260668e18100f3eeba6509bd7cdb58f3acce16b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'widget_container_attributes_choice_widget' => array($this, 'block_widget_container_attributes_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'form_row' => array($this, 'block_form_row'),
            'label' => array($this, 'block_label'),
            'collection_widget_row' => array($this, 'block_collection_widget_row'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'sonata_type_immutable_array_widget' => array($this, 'block_sonata_type_immutable_array_widget'),
            'sonata_type_immutable_array_widget_row' => array($this, 'block_sonata_type_immutable_array_widget_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 13
        $this->displayBlock('form_label', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('widget_container_attributes_choice_widget', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 111
        echo "
";
        // line 112
        $this->displayBlock('form_row', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('collection_widget_row', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 183
        echo "
";
        // line 184
        $this->displayBlock('sonata_type_immutable_array_widget', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('sonata_type_immutable_array_widget_row', $context, $blocks);
    }

    // line 13
    public function block_form_label($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ((!((isset($context["label"]) ? $context["label"] : null) === false))) {
            // line 16
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " control-label")));
            // line 17
            echo "
        ";
            // line 18
            if ((!(isset($context["compound"]) ? $context["compound"] : null))) {
                // line 19
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
                // line 20
                echo "        ";
            }
            // line 21
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 22
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
                // line 23
                echo "        ";
            }
            // line 24
            echo "
        ";
            // line 25
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 26
                echo "            ";
                $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : null)));
                // line 27
                echo "        ";
            }
            // line 28
            echo "
        ";
            // line 29
            if (((array_key_exists("in_list_checkbox", $context) && (isset($context["in_list_checkbox"]) ? $context["in_list_checkbox"] : null)) && array_key_exists("widget", $context))) {
                // line 30
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 31
                echo (isset($context["widget"]) ? $context["widget"] : null);
                echo "
                <span>
                    ";
                // line 33
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 38
                echo "                </span>
            </label>
        ";
            } else {
                // line 41
                echo "            <label";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
                // line 42
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 43
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 45
                    echo "                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => (isset($context["label"]) ? $context["label"] : null), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method"), "html", null, true);
                    echo "
                ";
                }
                // line 47
                echo "            </label>
        ";
            }
            // line 49
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_widget_container_attributes_choice_widget($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        ob_start();
        // line 55
        echo "        id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\"
        ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : null), "html", null, true);
            echo "=\"";
            if (((isset($context["attrname"]) ? $context["attrname"] : null) == "class")) {
                echo "unstyled ";
            }
            echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : null), "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        ";
        if (!twig_in_filter("class", (isset($context["attr"]) ? $context["attr"] : null))) {
            echo "class=\"unstyled\"";
        }
        // line 58
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 61
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 62
        ob_start();
        // line 63
        echo "    <ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 65
            echo "            <li>
                ";
            // line 66
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
            echo "
                ";
            // line 67
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
            echo "
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 74
    public function block_choice_widget($context, array $blocks = array())
    {
        // line 75
        ob_start();
        // line 76
        echo "    ";
        if ((isset($context["compound"]) ? $context["compound"] : null)) {
            // line 77
            echo "        <ul ";
            $this->displayBlock("widget_container_attributes_choice_widget", $context, $blocks);
            echo ">
        ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 79
                echo "            <li>
                ";
                // line 80
                ob_start();
                // line 81
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
                echo "
                ";
                $context["form_widget_content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 83
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label', array("in_list_checkbox" => true, "widget" => (isset($context["form_widget_content"]) ? $context["form_widget_content"] : null)) + (twig_test_empty($_label_ = (($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["child"]) ? $context["child"] : null), "vars", array(), "any", false, true), "label"), null)) : (null))) ? array() : array("label" => $_label_)));
                echo "
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "        </ul>
    ";
        } else {
            // line 88
            echo "    <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                echo " multiple=\"multiple\"";
            }
            echo ">
        ";
            // line 89
            if ((!(null === (isset($context["empty_value"]) ? $context["empty_value"] : null)))) {
                // line 90
                echo "            <option value=\"\">
                ";
                // line 91
                if ((!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"))) {
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)), "html", null, true);
                } else {
                    // line 94
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : null), array(), $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "html", null, true);
                }
                // line 96
                echo "            </option>
        ";
            }
            // line 98
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null)) > 0)) {
                // line 99
                echo "            ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : null);
                // line 100
                echo "            ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
            ";
                // line 101
                if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : null)) > 0)) {
                    // line 102
                    echo "                <option disabled=\"disabled\">";
                    echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : null), "html", null, true);
                    echo "</option>
            ";
                }
                // line 104
                echo "        ";
            }
            // line 105
            echo "        ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : null);
            // line 106
            echo "        ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
    </select>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 112
    public function block_form_row($context, array $blocks = array())
    {
        // line 113
        echo "    ";
        if ((((!array_key_exists("sonata_admin", $context)) || (!(isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : null))) || (!$this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description")))) {
            // line 114
            echo "        <div class=\"control-group ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " error";
            }
            echo "\">
            ";
            // line 115
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
            <div class=\"controls ";
            // line 116
            if (((isset($context["label"]) ? $context["label"] : null) === false)) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">
                ";
            // line 117
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "
                ";
            // line 118
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 119
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 120
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 123
            echo "            </div>
        </div>
    ";
        } else {
            // line 126
            echo "        <div class=\"control-group";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo " error";
            }
            echo "\" id=\"sonata-ba-field-container-";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\">
            ";
            // line 127
            $this->displayBlock('label', $context, $blocks);
            // line 134
            echo "
            ";
            // line 135
            $context["has_label"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true) || (!((isset($context["label"]) ? $context["label"] : null) === false)));
            // line 136
            echo "            <div class=\"controls sonata-ba-field sonata-ba-field-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
            echo " ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                echo "sonata-ba-field-error";
            }
            echo " ";
            if ((!(isset($context["has_label"]) ? $context["has_label"] : null))) {
                echo "sonata-collection-row-without-label";
            }
            echo "\">

                ";
            // line 138
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
            echo "

                ";
            // line 140
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
                // line 141
                echo "                    <div class=\"help-inline sonata-ba-field-error-messages\">
                        ";
                // line 142
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                    </div>
                ";
            }
            // line 145
            echo "
                ";
            // line 146
            if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help")) {
                // line 147
                echo "                    <span class=\"help-block sonata-ba-field-help\">";
                echo $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "trans", array(0 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "help"), 1 => array(), 2 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "translationDomain")), "method");
                echo "</span>
                ";
            }
            // line 149
            echo "            </div>
        </div>
    ";
        }
    }

    // line 127
    public function block_label($context, array $blocks = array())
    {
        // line 128
        echo "                ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 129
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
            echo "
                ";
        } else {
            // line 131
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : null), null)) : (null))) ? array() : array("label" => $_label_)));
            echo "
                ";
        }
        // line 133
        echo "            ";
    }

    // line 154
    public function block_collection_widget_row($context, array $blocks = array())
    {
        // line 155
        ob_start();
        // line 156
        echo "    <div class=\"sonata-collection-row\">
        ";
        // line 157
        if ((isset($context["allow_delete"]) ? $context["allow_delete"] : null)) {
            // line 158
            echo "            <a href=\"#\" class=\"btn sonata-collection-delete\"><i class=\"icon-remove\"></i></a>
        ";
        }
        // line 160
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'row');
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 165
    public function block_collection_widget($context, array $blocks = array())
    {
        // line 166
        ob_start();
        // line 167
        echo "    ";
        if (array_key_exists("prototype", $context)) {
            // line 168
            echo "        ";
            $context["child"] = (isset($context["prototype"]) ? $context["prototype"] : null);
            // line 169
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : null), array("data-prototype" => $this->renderBlock("collection_widget_row", $context, $blocks), "data-prototype-name" => $this->getAttribute($this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "vars"), "name"), "class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class"), "")) : (""))));
            // line 170
            echo "    ";
        }
        // line 171
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        ";
        // line 173
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 174
            echo "            ";
            $this->displayBlock("collection_widget_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 176
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        ";
        // line 177
        if ((isset($context["allow_add"]) ? $context["allow_add"] : null)) {
            // line 178
            echo "            <div><a href=\"#\" class=\"btn sonata-collection-add\"><i class=\"icon-plus\"></i></a></div>
        ";
        }
        // line 180
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 184
    public function block_sonata_type_immutable_array_widget($context, array $blocks = array())
    {
        // line 185
        echo "    ";
        ob_start();
        // line 186
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

            ";
        // line 189
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : null));
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
        foreach ($context['_seq'] as $context["key"] => $context["child"]) {
            // line 190
            echo "                ";
            $this->displayBlock("sonata_type_immutable_array_widget_row", $context, $blocks);
            echo "
            ";
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "
            ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 198
    public function block_sonata_type_immutable_array_widget_row($context, array $blocks = array())
    {
        // line 199
        echo "    ";
        ob_start();
        // line 200
        echo "        <div class=\"control-group";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo " error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
        echo "\">

            ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'label');
        echo "

            <div class=\"controls sonata-ba-field sonata-ba-field-";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "inline"), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
                ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'widget');
        echo "
            </div>

            ";
        // line 208
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 209
            echo "                <div class=\"help-inline sonata-ba-field-error-messages\">
                    ";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : null), 'errors');
            echo "
                </div>
            ";
        }
        // line 213
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Form:form_admin_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 133,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 104,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  157 => 41,  118 => 28,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 125,  236 => 109,  216 => 100,  170 => 79,  553 => 186,  548 => 173,  541 => 180,  537 => 178,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 167,  506 => 166,  502 => 155,  499 => 154,  496 => 161,  489 => 131,  483 => 129,  479 => 153,  475 => 152,  462 => 146,  448 => 140,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 135,  255 => 74,  184 => 47,  146 => 34,  126 => 42,  194 => 53,  181 => 80,  161 => 71,  318 => 90,  316 => 89,  288 => 81,  284 => 106,  279 => 78,  275 => 103,  256 => 121,  250 => 93,  237 => 70,  222 => 81,  215 => 78,  191 => 69,  153 => 72,  150 => 65,  110 => 25,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 184,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 306,  509 => 158,  504 => 156,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 260,  429 => 255,  424 => 128,  422 => 134,  420 => 127,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  346 => 102,  335 => 188,  331 => 187,  326 => 94,  321 => 91,  304 => 86,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  232 => 84,  186 => 82,  152 => 38,  104 => 23,  58 => 23,  155 => 53,  114 => 71,  76 => 13,  145 => 52,  139 => 31,  124 => 31,  83 => 30,  70 => 33,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 92,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 109,  289 => 112,  281 => 105,  277 => 78,  271 => 76,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 60,  148 => 64,  134 => 59,  127 => 32,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 88,  185 => 86,  180 => 62,  175 => 43,  172 => 51,  167 => 75,  165 => 77,  160 => 76,  137 => 46,  120 => 56,  113 => 41,  100 => 36,  90 => 18,  81 => 15,  65 => 30,  129 => 57,  97 => 63,  84 => 16,  34 => 52,  53 => 27,  37 => 53,  52 => 112,  77 => 27,  74 => 34,  20 => 1,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 136,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 114,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 105,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 143,  309 => 117,  305 => 87,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 86,  268 => 127,  264 => 2,  258 => 81,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 57,  214 => 99,  177 => 61,  169 => 57,  140 => 55,  132 => 59,  128 => 58,  111 => 39,  107 => 24,  61 => 25,  273 => 96,  269 => 75,  254 => 102,  246 => 99,  243 => 89,  240 => 64,  238 => 139,  235 => 63,  230 => 61,  227 => 134,  224 => 103,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  131 => 48,  119 => 28,  108 => 48,  102 => 38,  71 => 31,  67 => 184,  63 => 24,  59 => 164,  47 => 74,  38 => 17,  94 => 30,  89 => 40,  85 => 34,  79 => 14,  75 => 39,  68 => 31,  56 => 24,  50 => 20,  29 => 11,  87 => 17,  72 => 198,  55 => 21,  21 => 11,  26 => 14,  98 => 21,  93 => 34,  88 => 60,  78 => 40,  46 => 21,  27 => 4,  40 => 13,  44 => 73,  35 => 16,  31 => 15,  43 => 20,  41 => 18,  28 => 14,  201 => 65,  196 => 65,  183 => 82,  171 => 63,  166 => 100,  163 => 45,  158 => 75,  156 => 68,  151 => 49,  142 => 61,  138 => 61,  136 => 60,  123 => 30,  121 => 29,  117 => 51,  115 => 27,  105 => 27,  101 => 22,  91 => 27,  69 => 197,  66 => 25,  62 => 165,  49 => 111,  24 => 12,  32 => 13,  25 => 3,  22 => 7,  19 => 2,  209 => 96,  203 => 93,  199 => 67,  193 => 73,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 42,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 36,  147 => 69,  144 => 33,  141 => 67,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 26,  109 => 40,  106 => 33,  103 => 46,  99 => 26,  95 => 20,  92 => 19,  86 => 43,  82 => 33,  80 => 41,  73 => 29,  64 => 183,  60 => 22,  57 => 154,  54 => 153,  51 => 24,  48 => 40,  45 => 19,  42 => 61,  39 => 60,  36 => 17,  33 => 6,  30 => 15,);
    }
}
