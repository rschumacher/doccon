<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_99fbb6d1426782c175cc41fc9a97fca78ede115a20552a2240586f2c928d3fdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : null) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : null))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : null), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  598 => 188,  594 => 187,  586 => 184,  575 => 180,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 129,  478 => 127,  473 => 110,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  418 => 113,  404 => 87,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 86,  307 => 82,  195 => 54,  392 => 104,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 166,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  157 => 29,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 55,  236 => 109,  216 => 42,  170 => 55,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 140,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 132,  386 => 111,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  342 => 88,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  146 => 47,  126 => 55,  194 => 53,  181 => 80,  161 => 71,  318 => 80,  316 => 89,  288 => 81,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  250 => 93,  237 => 64,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 27,  110 => 45,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 88,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 86,  331 => 187,  326 => 83,  321 => 91,  304 => 81,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  232 => 84,  186 => 51,  152 => 63,  104 => 43,  58 => 19,  155 => 38,  114 => 50,  76 => 33,  145 => 53,  139 => 51,  124 => 49,  83 => 32,  70 => 23,  358 => 106,  351 => 121,  347 => 134,  343 => 132,  338 => 130,  327 => 118,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 47,  148 => 35,  134 => 59,  127 => 32,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  202 => 77,  198 => 55,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 46,  167 => 75,  165 => 52,  160 => 59,  137 => 46,  120 => 46,  113 => 46,  100 => 43,  90 => 27,  81 => 26,  65 => 29,  129 => 56,  97 => 41,  84 => 34,  34 => 15,  53 => 24,  37 => 16,  52 => 17,  77 => 25,  74 => 29,  20 => 11,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 47,  111 => 40,  107 => 44,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  246 => 66,  243 => 89,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 46,  224 => 60,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  131 => 48,  119 => 44,  108 => 45,  102 => 43,  71 => 29,  67 => 19,  63 => 22,  59 => 27,  47 => 20,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  79 => 31,  75 => 31,  68 => 30,  56 => 25,  50 => 21,  29 => 16,  87 => 35,  72 => 30,  55 => 18,  21 => 11,  26 => 14,  98 => 36,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 16,  40 => 19,  44 => 21,  35 => 22,  31 => 17,  43 => 20,  41 => 20,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 60,  158 => 75,  156 => 68,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  123 => 47,  121 => 51,  117 => 45,  115 => 47,  105 => 44,  101 => 37,  91 => 39,  69 => 33,  66 => 23,  62 => 28,  49 => 20,  24 => 3,  32 => 21,  25 => 12,  22 => 11,  19 => 11,  209 => 96,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 44,  164 => 72,  162 => 40,  154 => 67,  149 => 62,  147 => 52,  144 => 51,  141 => 67,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 145,  109 => 108,  106 => 45,  103 => 38,  99 => 30,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 31,  73 => 24,  64 => 27,  60 => 26,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 13,  39 => 12,  36 => 17,  33 => 16,  30 => 17,);
    }
}
