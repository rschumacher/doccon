<?php

/* SonataUserBundle:Security:base_login.html.twig */
class __TwigTemplate_d3973b8350485263ccf89867555931e23ea40f7d07c3c8fde2f7c24e97996644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_registration' => array($this, 'block_sonata_user_registration'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            ";
        // line 17
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 83
        echo "        </div>
        <div class=\"col-md-6\">
            ";
        // line 85
        $this->displayBlock('sonata_user_registration', $context, $blocks);
        // line 88
        echo "        </div>
    </div>
";
    }

    // line 17
    public function block_sonata_user_login($context, array $blocks = array())
    {
        // line 18
        echo "                <div class=\"panel panel-info\">

                <div class=\"panel-heading\">
                    <h2 class=\"panel-title\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                </div>

                <div class=\"panel-body\">

                    ";
        // line 26
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 31
        echo "
                    ";
        // line 32
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 80
        echo "                </div>
            </div>
            ";
    }

    // line 26
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 27
        echo "                        ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 28
            echo "                            <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 30
        echo "                    ";
    }

    // line 32
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 33
        echo "                        <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                              class=\"form-horizontal\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                            <div class=\"form-group\">
                                <label for=\"username\"
                                       class=\"col-lg-4 col-sm-4 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                                <div class=\"col-lg-8 col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                      name=\"_username\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                                      required=\"required\"/></div>
                            </div>


                            <div class=\"form-group control-group\">
                                <label for=\"password\"
                                       class=\"col-lg-4 col-sm-4 control-label\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

                                <div class=\"col-lg-8 col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                      name=\"_password\" required=\"required\"/></div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <div class=\"checkbox control-group\">
                                        <label for=\"remember_me\">
                                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                            ";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class=\"form-group control-group\">
                                <div class=\"controls col-sm-offset-4 col-sm-8\">
                                    <a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-4 col-sm-8\">
                                    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                           value=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                </div>
                            </div>
                        </form>
                    ";
    }

    // line 85
    public function block_sonata_user_registration($context, array $blocks = array())
    {
        // line 86
        echo "                ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("SonataUserBundle:RegistrationFOSUser1:register"), array());
        // line 87
        echo "            ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  76 => 80,  124 => 42,  114 => 39,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 48,  134 => 56,  127 => 43,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 75,  165 => 64,  160 => 44,  137 => 37,  113 => 44,  100 => 23,  90 => 20,  81 => 15,  65 => 25,  129 => 59,  97 => 47,  84 => 16,  34 => 5,  53 => 17,  77 => 27,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 51,  128 => 49,  107 => 35,  61 => 21,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 86,  159 => 61,  143 => 59,  135 => 44,  119 => 42,  102 => 32,  71 => 31,  67 => 19,  63 => 13,  59 => 14,  38 => 6,  94 => 30,  89 => 43,  85 => 27,  75 => 17,  68 => 14,  56 => 18,  87 => 25,  21 => 2,  26 => 2,  93 => 21,  88 => 28,  78 => 21,  46 => 32,  27 => 4,  44 => 18,  31 => 4,  28 => 3,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 63,  142 => 46,  138 => 57,  136 => 56,  121 => 46,  117 => 34,  105 => 36,  91 => 27,  62 => 24,  49 => 9,  24 => 6,  25 => 3,  19 => 1,  79 => 37,  72 => 16,  69 => 26,  47 => 88,  40 => 18,  37 => 19,  22 => 1,  246 => 99,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 42,  115 => 33,  111 => 30,  108 => 37,  101 => 33,  98 => 32,  96 => 33,  83 => 25,  74 => 32,  66 => 14,  55 => 79,  52 => 78,  50 => 8,  43 => 8,  41 => 83,  35 => 15,  32 => 14,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 87,  176 => 85,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 49,  149 => 51,  147 => 58,  144 => 60,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 45,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 31,  95 => 22,  92 => 31,  86 => 30,  82 => 26,  80 => 28,  73 => 26,  64 => 28,  60 => 12,  57 => 80,  54 => 10,  51 => 34,  48 => 11,  45 => 85,  42 => 8,  39 => 17,  36 => 8,  33 => 6,  30 => 1,);
    }
}
