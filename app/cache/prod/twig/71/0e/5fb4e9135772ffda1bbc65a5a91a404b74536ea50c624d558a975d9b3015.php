<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_710e5fb4e9135772ffda1bbc65a5a91a404b74536ea50c624d558a975d9b3015 extends Twig_Template
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
        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : null)), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  139 => 46,  124 => 43,  83 => 30,  70 => 26,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 64,  160 => 44,  137 => 37,  120 => 36,  113 => 44,  100 => 23,  90 => 20,  81 => 15,  65 => 83,  129 => 59,  97 => 47,  84 => 16,  34 => 5,  53 => 35,  37 => 18,  52 => 78,  77 => 28,  74 => 27,  20 => 1,  23 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 44,  128 => 49,  111 => 39,  107 => 52,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  246 => 99,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 69,  159 => 61,  143 => 59,  135 => 53,  131 => 55,  119 => 42,  108 => 28,  102 => 36,  71 => 19,  67 => 19,  63 => 13,  59 => 24,  47 => 21,  38 => 6,  94 => 35,  89 => 31,  85 => 25,  79 => 37,  75 => 17,  68 => 14,  56 => 23,  50 => 8,  29 => 6,  87 => 25,  72 => 16,  55 => 79,  21 => 2,  26 => 11,  98 => 34,  93 => 33,  88 => 26,  78 => 21,  46 => 32,  27 => 4,  40 => 20,  44 => 20,  35 => 15,  31 => 4,  43 => 8,  41 => 10,  28 => 3,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 49,  142 => 59,  138 => 57,  136 => 45,  123 => 47,  121 => 42,  117 => 40,  115 => 33,  105 => 37,  101 => 49,  91 => 27,  69 => 15,  66 => 14,  62 => 25,  49 => 9,  24 => 6,  32 => 3,  25 => 3,  22 => 1,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 45,  112 => 42,  109 => 53,  106 => 33,  103 => 50,  99 => 31,  95 => 34,  92 => 21,  86 => 17,  82 => 21,  80 => 19,  73 => 19,  64 => 28,  60 => 12,  57 => 80,  54 => 10,  51 => 34,  48 => 11,  45 => 8,  42 => 8,  39 => 6,  36 => 8,  33 => 6,  30 => 1,);
    }
}
