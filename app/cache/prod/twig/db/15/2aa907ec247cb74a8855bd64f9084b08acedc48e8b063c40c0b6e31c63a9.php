<?php

/* SonataAdminBundle:CRUD:base_edit_form.html.twig */
class __TwigTemplate_db152aa907ec247cb74a8855bd64f9084b08acedc48e8b063c40c0b6e31c63a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
            'sonata_pre_fieldsets' => array($this, 'block_sonata_pre_fieldsets'),
            'sonata_tab_content' => array($this, 'block_sonata_tab_content'),
            'sonata_post_fieldsets' => array($this, 'block_sonata_post_fieldsets'),
            'formactions' => array($this, 'block_formactions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

    ";
        // line 4
        $context["url"] = (((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) ? ("edit") : ("create"));
        // line 5
        echo "
    ";
        // line 6
        if ((!$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasRoute", array(0 => (isset($context["url"]) ? $context["url"] : null)), "method"))) {
            // line 7
            echo "        <div>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form_not_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 11
            echo "        <form class=\"form-horizontal\"
              action=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => (isset($context["url"]) ? $context["url"] : null), 1 => array("id" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method"), "uniqid" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "subclass" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "subclass"), "method"))), "method"), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
            echo "
              method=\"POST\"
              ";
            // line 14
            if ((!$this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "html5_validate"), "method"))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 15
            echo "              >
            ";
            // line 16
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars"), "errors")) > 0)) {
                // line 17
                echo "                <div class=\"sonata-ba-form-error\">
                    ";
                // line 18
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
                echo "
                </div>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 35
            echo "
            ";
            // line 36
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 57
            echo "
            ";
            // line 58
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 61
            echo "
            ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "

            ";
            // line 64
            $this->displayBlock('formactions', $context, $blocks);
            // line 106
            echo "        </form>
    ";
        }
        // line 108
        echo "
    ";
        // line 109
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.edit.form.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : null), "object" => (isset($context["object"]) ? $context["object"] : null))));
        echo "

";
    }

    // line 22
    public function block_sonata_pre_fieldsets($context, array $blocks = array())
    {
        // line 23
        echo "                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs\">
                        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 26
            echo "                            <li class=\"";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo "active";
            }
            echo "\">
                                <a href=\"#";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\" data-toggle=\"tab\">
                                    <i class=\"icon-exclamation-sign has-errors hide\"></i>
                                    ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "trans", array(0 => (isset($context["name"]) ? $context["name"] : null), 1 => array(), 2 => $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "translation_domain")), "method"), "html", null, true);
            echo "
                                </a>
                            </li>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </ul>
            ";
    }

    // line 36
    public function block_sonata_tab_content($context, array $blocks = array())
    {
        // line 37
        echo "                <div class=\"tab-content\">
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formgroups"));
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
        foreach ($context['_seq'] as $context["name"] => $context["form_group"]) {
            // line 39
            echo "                        <div class=\"tab-pane ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first")) {
                echo " active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index"), "html", null, true);
            echo "\">
                            <fieldset>
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
            // line 42
            if (($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description") != false)) {
                // line 43
                echo "                                        <p>";
                echo $this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "description");
                echo "</p>
                                    ";
            }
            // line 45
            echo "
                                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_group"]) ? $context["form_group"] : null), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 47
                echo "                                        ";
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "formfielddescriptions", array(), "any", false, true), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array", true, true)) {
                    // line 48
                    echo "                                            ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), (isset($context["field_name"]) ? $context["field_name"] : null), array(), "array"), 'row');
                    echo "
                                        ";
                }
                // line 50
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                                </div>
                            </fieldset>
                        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </div>
            ";
    }

    // line 58
    public function block_sonata_post_fieldsets($context, array $blocks = array())
    {
        // line 59
        echo "                </div>
            ";
    }

    // line 64
    public function block_formactions($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"well well-small form-actions\">
                    ";
        // line 66
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "isxmlhttprequest")) {
            // line 67
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 68
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            } else {
                // line 70
                echo "                            <input type=\"submit\" class=\"btn\" name=\"btn_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            }
            // line 72
            echo "                    ";
        } else {
            // line 73
            echo "                        ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "supportsPreviewMode")) {
                // line 74
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"icon-eye-open\"></i>
                                ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_preview", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 79
            echo "                        ";
            if ((!(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "id", array(0 => (isset($context["object"]) ? $context["object"] : null)), "method")))) {
                // line 80
                echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"btn_update_and_edit\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">

                            ";
                // line 82
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
                    // line 83
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_update_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_update_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 85
                echo "
                            ";
                // line 86
                if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "delete"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "DELETE", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 87
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_delete", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 90
                echo "
                            ";
                // line 91
                if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isAclEnabled", array(), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "acl"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "MASTER", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"))) {
                    // line 92
                    echo "                                <a class=\"btn\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateObjectUrl", array(0 => "acl", 1 => (isset($context["object"]) ? $context["object"] : null)), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_edit_acl", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 94
                echo "                        ";
            } else {
                // line 95
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "edit"), "method")) {
                    // line 96
                    echo "                                <input class=\"btn btn-primary\" type=\"submit\" name=\"btn_create_and_edit\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_edit_again", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 98
                echo "                            ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method")) {
                    // line 99
                    echo "                                <input type=\"submit\" class=\"btn\" name=\"btn_create_and_list\" value=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_return_to_list", array(), "SonataAdminBundle"), "html", null, true);
                    echo "\">
                            ";
                }
                // line 101
                echo "                            <input class=\"btn\" type=\"submit\" name=\"btn_create_and_create\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_create_and_create_a_new_one", array(), "SonataAdminBundle"), "html", null, true);
                echo "\">
                        ";
            }
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  392 => 104,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 43,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 133,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  157 => 29,  118 => 46,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 55,  236 => 109,  216 => 42,  170 => 55,  553 => 186,  548 => 173,  541 => 180,  537 => 178,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 167,  506 => 166,  502 => 155,  499 => 154,  496 => 161,  489 => 131,  483 => 129,  479 => 153,  475 => 152,  462 => 146,  448 => 140,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  342 => 88,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 73,  296 => 82,  292 => 135,  255 => 74,  184 => 47,  146 => 47,  126 => 25,  194 => 53,  181 => 80,  161 => 71,  318 => 80,  316 => 89,  288 => 81,  284 => 67,  279 => 65,  275 => 103,  256 => 121,  250 => 93,  237 => 70,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 27,  110 => 42,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 184,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 306,  509 => 158,  504 => 156,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 260,  429 => 255,  424 => 128,  422 => 134,  420 => 127,  415 => 247,  396 => 234,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 86,  331 => 187,  326 => 83,  321 => 91,  304 => 86,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  232 => 84,  186 => 38,  152 => 63,  104 => 42,  58 => 23,  155 => 53,  114 => 71,  76 => 28,  145 => 56,  139 => 59,  124 => 49,  83 => 22,  70 => 23,  358 => 106,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 92,  319 => 92,  315 => 79,  301 => 117,  299 => 72,  293 => 70,  289 => 112,  281 => 105,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 60,  148 => 64,  134 => 59,  127 => 32,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 88,  185 => 86,  180 => 36,  175 => 33,  172 => 51,  167 => 75,  165 => 52,  160 => 59,  137 => 46,  120 => 48,  113 => 46,  100 => 40,  90 => 57,  81 => 27,  65 => 26,  129 => 57,  97 => 33,  84 => 28,  34 => 16,  53 => 16,  37 => 53,  52 => 11,  77 => 27,  74 => 18,  20 => 1,  23 => 18,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 136,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 115,  379 => 119,  374 => 98,  368 => 96,  365 => 95,  362 => 94,  360 => 109,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 99,  312 => 143,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 86,  268 => 58,  264 => 2,  258 => 81,  252 => 80,  247 => 66,  241 => 77,  229 => 73,  220 => 57,  214 => 99,  177 => 61,  169 => 69,  140 => 53,  132 => 59,  128 => 47,  111 => 43,  107 => 36,  61 => 28,  273 => 96,  269 => 75,  254 => 102,  246 => 51,  243 => 89,  240 => 50,  238 => 139,  235 => 63,  230 => 61,  227 => 46,  224 => 45,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 66,  179 => 72,  159 => 51,  143 => 26,  135 => 45,  131 => 43,  119 => 22,  108 => 42,  102 => 42,  71 => 17,  67 => 22,  63 => 27,  59 => 18,  47 => 14,  38 => 5,  94 => 39,  89 => 37,  85 => 35,  79 => 35,  75 => 25,  68 => 31,  56 => 25,  50 => 15,  29 => 15,  87 => 29,  72 => 30,  55 => 12,  21 => 11,  26 => 14,  98 => 62,  93 => 58,  88 => 36,  78 => 26,  46 => 8,  27 => 14,  40 => 13,  44 => 21,  35 => 16,  31 => 15,  43 => 7,  41 => 6,  28 => 14,  201 => 65,  196 => 65,  183 => 37,  171 => 63,  166 => 100,  163 => 60,  158 => 75,  156 => 68,  151 => 61,  142 => 58,  138 => 46,  136 => 58,  123 => 48,  121 => 51,  117 => 50,  115 => 45,  105 => 106,  101 => 37,  91 => 39,  69 => 16,  66 => 15,  62 => 14,  49 => 111,  24 => 1,  32 => 13,  25 => 3,  22 => 12,  19 => 11,  209 => 96,  203 => 39,  199 => 67,  193 => 73,  189 => 71,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 62,  147 => 52,  144 => 51,  141 => 67,  133 => 51,  130 => 57,  125 => 42,  122 => 23,  116 => 47,  112 => 109,  109 => 108,  106 => 44,  103 => 64,  99 => 17,  95 => 61,  92 => 32,  86 => 36,  82 => 36,  80 => 21,  73 => 24,  64 => 25,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 40,  45 => 20,  42 => 19,  39 => 18,  36 => 4,  33 => 16,  30 => 2,);
    }
}
