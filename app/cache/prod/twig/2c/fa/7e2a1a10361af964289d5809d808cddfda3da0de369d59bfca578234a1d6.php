<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_2cfa7e2a1a10361af964289d5809d808cddfda3da0de369d59bfca578234a1d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu_before' => array($this, 'block_sonata_nav_menu_before'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'sonata_top_bar_search' => array($this, 'block_sonata_top_bar_search'),
            'sonata_nav_menu_after' => array($this, 'block_sonata_nav_menu_after'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'notice' => array($this, 'block_notice'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta charset=\"UTF-8\">

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
        <title>
            ";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 86
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : null)))) {
            // line 87
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : null);
            echo "
            ";
        } else {
            // line 89
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 90
                echo "                    -
                    ";
                // line 91
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 92
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "first"))) {
                        // line 93
                        echo "                            &gt;
                        ";
                    }
                    // line 95
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "                ";
            }
            // line 98
            echo "            ";
        }
        // line 99
        echo "        </title>
    </head>
    <body ";
        // line 101
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 103
        echo "
        ";
        // line 104
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 186
        echo "
        <div class=\"container-fluid\">
            ";
        // line 188
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 281
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" media=\"all\">

            <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/css/bootstrap-editable.css"), "html", null, true);
        echo "\" media=\"all\">

            ";
        // line 37
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 38
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.css"), "html", null, true);
            echo "\" media=\"all\">
                <style>
                    div.select2-container {
                        margin-left: 0px !important;
                    }

                    div.select2-drop ul {
                        margin: 0px !important;
                    }
                </style>
            ";
        }
        // line 49
        echo "
            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" media=\"all\">
            <link rel=\"stylesheet\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" media=\"all\">

        ";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 59
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 60
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 61
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 63
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/x-editable/js/bootstrap-editable.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 74
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "use_select2"), "method"))) {
            // line 75
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/select2/select2.min.js"), "html", null, true);
            echo "\"></script>
            ";
        }
        // line 77
        echo "
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\"></script>
            ";
        // line 79
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\"></script>";
        }
        // line 80
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 101
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc ";
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\"";
    }

    // line 104
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 105
        echo "            <div class=\"navbar navbar-fixed-top\">
                <div class=\"navbar-inner\">
                    <div class=\"container-fluid\">
                        <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </a>

                        ";
        // line 114
        if (array_key_exists("admin_pool", $context)) {
            // line 115
            echo "                            <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                            ";
            // line 117
            $this->displayBlock('logo', $context, $blocks);
            // line 123
            echo "
                            ";
            // line 124
            $this->displayBlock('sonata_nav_menu_before', $context, $blocks);
            // line 125
            echo "
                            ";
            // line 126
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 178
            echo "
                            ";
            // line 179
            $this->displayBlock('sonata_nav_menu_after', $context, $blocks);
            // line 180
            echo "
                        ";
        }
        // line 182
        echo "                    </div>
                </div>
            </div>
        ";
    }

    // line 117
    public function block_logo($context, array $blocks = array())
    {
        // line 118
        echo "                                <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                    <img src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "\">
                                    ";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "title"), "html", null, true);
        echo "
                                </a>
                            ";
    }

    // line 124
    public function block_sonata_nav_menu_before($context, array $blocks = array())
    {
    }

    // line 126
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 127
        echo "                                <div class=\"nav-collapse\">
                                    <ul class=\"nav\">
                                        ";
        // line 129
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 130
        echo "                                        ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 163
        echo "                                        ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 164
        echo "                                    </ul>

                                    ";
        // line 166
        $this->displayBlock('sonata_top_bar_search', $context, $blocks);
        // line 175
        echo "
                                </div>
                            ";
    }

    // line 129
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 130
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 131
        echo "                                            ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 132
            echo "                                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : null), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 133
                echo "                                                    ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 134
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : null))) {
                        // line 135
                        echo "                                                        ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : null));
                        // line 136
                        echo "                                                    ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "
                                                    ";
                // line 139
                echo "                                                    ";
                $context["item_count"] = 0;
                // line 140
                echo "                                                    ";
                if ((isset($context["display"]) ? $context["display"] : null)) {
                    // line 141
                    echo "                                                        ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : null) == 0)) {
                            // line 142
                            echo "                                                            ";
                            if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                                // line 143
                                echo "                                                                ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : null) + 1);
                                // line 144
                                echo "                                                            ";
                            }
                            // line 145
                            echo "                                                        ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 146
                    echo "                                                    ";
                }
                // line 147
                echo "
                                                    ";
                // line 148
                if (((isset($context["display"]) ? $context["display"] : null) && ((isset($context["item_count"]) ? $context["item_count"] : null) > 0))) {
                    // line 149
                    echo "                                                    <li class=\"dropdown\">
                                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 150
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                        <ul class=\"dropdown-menu\">
                                                            ";
                    // line 152
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : null), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 153
                        echo "                                                                ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 154
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "code"))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 156
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 157
                    echo "                                                        </ul>
                                                    </li>
                                                    ";
                }
                // line 160
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                                            ";
        }
        // line 162
        echo "                                        ";
    }

    // line 163
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 166
    public function block_sonata_top_bar_search($context, array $blocks = array())
    {
        // line 167
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 168
            echo "                                            <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\"  class=\"navbar-search\">
                                                <div class=\"input-append\">
                                                    <input type=\"text\" name=\"q\" value=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"input-large search-query\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                </div>
                                            </form>
                                        ";
        }
        // line 174
        echo "                                    ";
    }

    // line 179
    public function block_sonata_nav_menu_after($context, array $blocks = array())
    {
    }

    // line 188
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 189
        echo "                ";
        $this->displayBlock('notice', $context, $blocks);
        // line 192
        echo "
                <div class=\"row-fluid\">
                    ";
        // line 194
        $this->displayBlock('sonata_breadcrumb', $context, $blocks);
        // line 222
        echo "
                    ";
        // line 223
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : null)))) {
            // line 224
            echo "                        <div class=\"span4 offset2\">
                            ";
            // line 225
            echo (isset($context["_actions"]) ? $context["_actions"] : null);
            echo "
                        </div>
                    ";
        }
        // line 228
        echo "                </div>

                <div class=\"row-fluid\">
                    ";
        // line 231
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) {
            // line 232
            echo "                        <div class=\"sidebar span2\">
                            <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 233
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : null);
            echo "</div>
                        </div>
                    ";
        }
        // line 236
        echo "
                    <div class=\"content ";
        // line 237
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : null)))) ? (" span10") : ("span12"));
        echo "\">
                        ";
        // line 238
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 270
        echo "                    </div>
                </div>

                ";
        // line 273
        $this->displayBlock('footer', $context, $blocks);
        // line 280
        echo "            ";
    }

    // line 189
    public function block_notice($context, array $blocks = array())
    {
        // line 190
        echo "                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 191
        echo "                ";
    }

    // line 194
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 195
        echo "                        ";
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) || array_key_exists("action", $context))) {
            // line 196
            echo "                            <div class=\"span6\">
                                <ul class=\"breadcrumb\">
                                    ";
            // line 198
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null))) {
                // line 199
                echo "                                        ";
                if (array_key_exists("action", $context)) {
                    // line 200
                    echo "                                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : null)), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 201
                        echo "                                                ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                            // line 202
                            echo "                                                    <li>
                                                        ";
                            // line 203
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri")))) {
                                // line 204
                                echo "                                                            <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "</a>
                                                        ";
                            } else {
                                // line 206
                                echo "                                                            ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                                echo "
                                                        ";
                            }
                            // line 208
                            echo "                                                        <span class=\"divider\">/</span>
                                                    </li>
                                                ";
                        } else {
                            // line 211
                            echo "                                                    <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "label"), "html", null, true);
                            echo "</li>
                                                ";
                        }
                        // line 213
                        echo "                                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 214
                    echo "                                        ";
                }
                // line 215
                echo "                                    ";
            } else {
                // line 216
                echo "                                        ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : null);
                echo "
                                    ";
            }
            // line 218
            echo "                                </ul>
                            </div>
                        ";
        }
        // line 221
        echo "                    ";
    }

    // line 238
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 239
        echo "
                            ";
        // line 240
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : null)))) {
            // line 241
            echo "                                <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : null);
            echo "</div>
                            ";
        }
        // line 243
        echo "
                            ";
        // line 244
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : null)))) {
            // line 245
            echo "                                <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : null);
            echo "</div>
                            ";
        }
        // line 247
        echo "
                            ";
        // line 248
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : null)))) {
            // line 249
            echo "                                <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : null);
            echo "</div>
                            ";
        }
        // line 251
        echo "
                            ";
        // line 252
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : null)))) {
            // line 253
            echo "                                <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : null);
            echo "</div>
                            ";
        }
        // line 255
        echo "
                            ";
        // line 256
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : null))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : null))))) {
            // line 257
            echo "                                <div class=\"row-fluid\">
                                    <div class=\"sonata-ba-list ";
            // line 258
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                echo "span10";
            } else {
                echo "span12";
            }
            echo "\">
                                        ";
            // line 259
            echo (isset($context["_list_table"]) ? $context["_list_table"] : null);
            echo "
                                    </div>
                                    ";
            // line 261
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : null))) {
                // line 262
                echo "                                        <div class=\"sonata-ba-filter span2\">
                                            ";
                // line 263
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : null);
                echo "
                                        </div>
                                    ";
            }
            // line 266
            echo "                                </div>
                            ";
        }
        // line 268
        echo "
                        ";
    }

    // line 273
    public function block_footer($context, array $blocks = array())
    {
        // line 274
        echo "                    <div class=\"row-fluid\">
                        <div class=\"span2 offset10 pull-right\">
                            <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                        </div>
                    </div>
                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  677 => 199,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  297 => 77,  96 => 90,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 143,  478 => 127,  473 => 140,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 113,  404 => 126,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 101,  307 => 82,  195 => 54,  392 => 120,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 156,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 182,  352 => 123,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 66,  244 => 65,  205 => 38,  200 => 55,  188 => 49,  178 => 28,  157 => 104,  118 => 49,  306 => 141,  303 => 140,  300 => 78,  286 => 80,  280 => 131,  274 => 68,  263 => 55,  236 => 109,  216 => 42,  170 => 55,  553 => 162,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 133,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 119,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  342 => 88,  325 => 93,  313 => 90,  310 => 80,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 30,  146 => 99,  126 => 55,  194 => 53,  181 => 29,  161 => 71,  318 => 80,  316 => 89,  288 => 81,  284 => 72,  279 => 70,  275 => 73,  256 => 61,  250 => 60,  237 => 64,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 101,  110 => 45,  694 => 412,  685 => 406,  680 => 200,  678 => 202,  668 => 195,  663 => 199,  658 => 190,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 192,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 163,  550 => 161,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 153,  514 => 152,  509 => 150,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 132,  439 => 100,  429 => 255,  424 => 88,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 86,  331 => 187,  326 => 83,  321 => 91,  304 => 79,  291 => 75,  272 => 158,  267 => 156,  242 => 59,  232 => 84,  186 => 51,  152 => 63,  104 => 43,  58 => 19,  155 => 38,  114 => 50,  76 => 82,  145 => 53,  139 => 51,  124 => 49,  83 => 32,  70 => 23,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 63,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 52,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 47,  148 => 35,  134 => 59,  127 => 32,  270 => 67,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  202 => 77,  198 => 35,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 22,  167 => 75,  165 => 281,  160 => 59,  137 => 46,  120 => 46,  113 => 46,  100 => 43,  90 => 27,  81 => 26,  65 => 29,  129 => 56,  97 => 41,  84 => 34,  34 => 15,  53 => 19,  37 => 11,  52 => 17,  77 => 25,  74 => 56,  20 => 11,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 99,  177 => 48,  169 => 69,  140 => 97,  132 => 57,  128 => 47,  111 => 40,  107 => 44,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  246 => 66,  243 => 89,  240 => 65,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 45,  131 => 48,  119 => 93,  108 => 45,  102 => 43,  71 => 55,  67 => 19,  63 => 22,  59 => 27,  47 => 16,  38 => 7,  94 => 40,  89 => 34,  85 => 86,  79 => 31,  75 => 31,  68 => 30,  56 => 25,  50 => 21,  29 => 16,  87 => 87,  72 => 30,  55 => 20,  21 => 11,  26 => 14,  98 => 36,  93 => 89,  88 => 33,  78 => 36,  46 => 19,  27 => 16,  40 => 19,  44 => 21,  35 => 22,  31 => 17,  43 => 14,  41 => 13,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 188,  158 => 75,  156 => 68,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 95,  121 => 51,  117 => 45,  115 => 47,  105 => 44,  101 => 37,  91 => 39,  69 => 28,  66 => 23,  62 => 28,  49 => 17,  24 => 3,  32 => 21,  25 => 12,  22 => 11,  19 => 11,  209 => 96,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 44,  164 => 72,  162 => 40,  154 => 103,  149 => 62,  147 => 52,  144 => 51,  141 => 67,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 92,  112 => 145,  109 => 108,  106 => 45,  103 => 38,  99 => 91,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 84,  73 => 24,  64 => 27,  60 => 22,  57 => 21,  54 => 22,  51 => 18,  48 => 22,  45 => 15,  42 => 13,  39 => 12,  36 => 17,  33 => 16,  30 => 17,);
    }
}
