<?php

/* SonataUserBundle:Admin/Security:two_step_form.html.twig */
class __TwigTemplate_229898fd804799f527b6d44c620e621dfc6ea7cebcd56eb3a0eb093f5b5ef9df extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" >
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/layout.css\" type=\"text/css\" media=\"all\">
        <link rel=\"stylesheet\" href=\"/bundles/sonataadmin/css/colors.css\" type=\"text/css\" media=\"all\">
    </head>

    <body class=\"sonata-bc\">
        <div class=\"container-fluid\">
            <div class=\"row-fluid\">
                <div class=\"connection\">

                    <form method=\"POST\">
                        ";
        // line 25
        if (((isset($context["state"]) ? $context["state"] : $this->getContext($context, "state")) == "error")) {
            // line 26
            echo "                            <div class=\"alert alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_two_step_code_error", array(), "SonataUserBundle"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 28
        echo "
                        <div class=\"control-group\">
                            <label for=\"code\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label_two_step_code", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                            <div class=\"controls\">
                                <input type=\"text\" id=\"username\" name=\"_code\" class=\"big sonata-medium\" autocomplete='off'/>
                                <span class=\"help-block sonata-ba-field-help\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_two_step_code_help", array(), "SonataUserBundle"), "html", null, true);
        echo "</span>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn primary\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Security:two_step_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 68,  76 => 35,  124 => 42,  114 => 39,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 48,  134 => 56,  127 => 43,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 75,  165 => 64,  160 => 44,  137 => 37,  113 => 44,  100 => 23,  90 => 20,  81 => 32,  65 => 39,  129 => 59,  97 => 47,  84 => 16,  34 => 16,  53 => 27,  77 => 27,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 51,  128 => 49,  107 => 35,  61 => 29,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 86,  159 => 61,  143 => 59,  135 => 44,  119 => 42,  102 => 32,  71 => 31,  67 => 32,  63 => 13,  59 => 14,  38 => 25,  94 => 30,  89 => 37,  85 => 27,  75 => 17,  68 => 22,  56 => 28,  87 => 28,  21 => 11,  26 => 3,  93 => 21,  88 => 28,  78 => 21,  46 => 28,  27 => 4,  44 => 18,  31 => 15,  28 => 14,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 63,  142 => 46,  138 => 57,  136 => 56,  121 => 46,  117 => 34,  105 => 36,  91 => 27,  62 => 24,  49 => 20,  24 => 14,  25 => 3,  19 => 11,  79 => 37,  72 => 16,  69 => 26,  47 => 88,  40 => 26,  37 => 7,  22 => 1,  246 => 99,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 42,  115 => 33,  111 => 30,  108 => 37,  101 => 33,  98 => 32,  96 => 33,  83 => 25,  74 => 32,  66 => 14,  55 => 79,  52 => 78,  50 => 30,  43 => 8,  41 => 17,  35 => 5,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 87,  176 => 85,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 49,  149 => 51,  147 => 58,  144 => 60,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 45,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 31,  95 => 22,  92 => 31,  86 => 30,  82 => 26,  80 => 28,  73 => 34,  64 => 28,  60 => 17,  57 => 34,  54 => 14,  51 => 26,  48 => 11,  45 => 10,  42 => 23,  39 => 8,  36 => 20,  33 => 6,  30 => 13,);
    }
}
