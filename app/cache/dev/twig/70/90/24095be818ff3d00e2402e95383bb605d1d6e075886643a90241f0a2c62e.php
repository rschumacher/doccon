<?php

/* WebProfilerBundle:Profiler:results.html.twig */
class __TwigTemplate_709024095be818ff3d00e2402e95383bb605d1d6e075886643a90241f0a2c62e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_panel($context, array $blocks = array())
    {
        // line 4
        echo "    <h2>Search Results</h2>

    ";
        // line 6
        if ((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens"))) {
            // line 7
            echo "        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Token</th>
                    <th scope=\"col\">IP</th>
                    <th scope=\"col\">Method</th>
                    <th scope=\"col\">URL</th>
                    <th scope=\"col\">Time</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tokens"]) ? $context["tokens"] : $this->getContext($context, "tokens")));
            foreach ($context['_seq'] as $context["_key"] => $context["elements"]) {
                // line 19
                echo "                    <tr>
                        <td><a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "token"), "html", null, true);
                echo "</a></td>
                        <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "ip"), "html", null, true);
                echo "</td>
                        <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "method"), "html", null, true);
                echo "</td>
                        <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "url"), "html", null, true);
                echo "</td>
                        <td>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), "time"), "r"), "html", null, true);
                echo "</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elements'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 30
            echo "        <p>
            <em>The query returned no result.</em>
        </p>
    ";
        }
        // line 34
        echo "
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  345 => 147,  340 => 145,  328 => 139,  290 => 119,  259 => 103,  363 => 153,  190 => 76,  672 => 345,  664 => 342,  640 => 334,  631 => 327,  622 => 452,  606 => 449,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 276,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 230,  412 => 222,  410 => 221,  376 => 205,  353 => 149,  295 => 178,  449 => 198,  446 => 197,  441 => 196,  380 => 158,  373 => 156,  226 => 84,  207 => 75,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 489,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  698 => 471,  677 => 465,  675 => 198,  671 => 196,  665 => 194,  661 => 191,  655 => 189,  651 => 337,  644 => 335,  642 => 238,  638 => 237,  635 => 236,  629 => 454,  626 => 325,  624 => 231,  619 => 228,  613 => 320,  608 => 223,  603 => 194,  596 => 189,  588 => 308,  584 => 174,  569 => 300,  566 => 167,  563 => 298,  521 => 154,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  378 => 157,  367 => 155,  357 => 123,  350 => 117,  330 => 105,  297 => 104,  598 => 188,  594 => 187,  586 => 184,  575 => 170,  573 => 179,  558 => 172,  554 => 171,  545 => 291,  529 => 409,  524 => 162,  517 => 404,  485 => 143,  478 => 127,  473 => 254,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  418 => 224,  404 => 126,  401 => 172,  394 => 168,  382 => 127,  334 => 141,  320 => 127,  317 => 185,  307 => 128,  195 => 54,  392 => 120,  389 => 160,  377 => 99,  349 => 90,  332 => 116,  324 => 113,  287 => 68,  282 => 66,  276 => 111,  234 => 48,  231 => 83,  218 => 59,  12 => 34,  710 => 475,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 464,  652 => 193,  649 => 462,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 317,  593 => 310,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  536 => 166,  533 => 284,  530 => 168,  527 => 408,  522 => 406,  507 => 157,  495 => 138,  477 => 127,  470 => 139,  464 => 147,  459 => 246,  450 => 141,  425 => 175,  411 => 129,  406 => 123,  400 => 214,  397 => 213,  395 => 118,  385 => 116,  371 => 156,  352 => 123,  344 => 119,  339 => 100,  336 => 99,  333 => 98,  329 => 188,  266 => 66,  244 => 65,  205 => 108,  200 => 72,  188 => 90,  178 => 59,  118 => 49,  306 => 107,  303 => 106,  300 => 105,  286 => 112,  280 => 131,  274 => 110,  263 => 95,  236 => 109,  216 => 79,  170 => 84,  553 => 162,  548 => 292,  541 => 290,  537 => 178,  525 => 280,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 149,  502 => 140,  499 => 268,  496 => 161,  489 => 262,  483 => 258,  479 => 256,  475 => 152,  462 => 202,  448 => 240,  421 => 126,  414 => 122,  408 => 176,  403 => 117,  399 => 124,  391 => 117,  388 => 132,  386 => 159,  375 => 106,  372 => 105,  354 => 92,  348 => 140,  342 => 137,  325 => 129,  313 => 183,  310 => 80,  308 => 88,  302 => 125,  296 => 121,  292 => 135,  255 => 101,  184 => 63,  146 => 99,  126 => 55,  194 => 68,  181 => 65,  161 => 63,  318 => 111,  316 => 89,  288 => 118,  284 => 72,  279 => 70,  275 => 105,  256 => 96,  250 => 60,  237 => 64,  222 => 83,  215 => 78,  191 => 67,  153 => 77,  150 => 55,  110 => 22,  694 => 470,  685 => 406,  680 => 200,  678 => 202,  668 => 344,  663 => 199,  658 => 190,  654 => 389,  647 => 336,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 319,  599 => 192,  592 => 351,  585 => 307,  581 => 305,  579 => 342,  577 => 303,  571 => 338,  567 => 414,  557 => 295,  550 => 161,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  518 => 153,  514 => 152,  509 => 272,  504 => 148,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 132,  439 => 195,  429 => 188,  424 => 88,  422 => 226,  420 => 127,  415 => 180,  396 => 141,  383 => 207,  366 => 210,  361 => 152,  346 => 102,  335 => 134,  331 => 140,  326 => 138,  321 => 135,  304 => 181,  291 => 102,  272 => 158,  267 => 101,  242 => 59,  232 => 88,  186 => 51,  152 => 46,  104 => 32,  70 => 15,  58 => 25,  155 => 47,  76 => 34,  124 => 49,  114 => 50,  358 => 151,  351 => 120,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  301 => 80,  299 => 72,  293 => 120,  289 => 113,  281 => 114,  277 => 78,  271 => 59,  265 => 105,  262 => 98,  260 => 63,  257 => 149,  251 => 67,  248 => 97,  239 => 97,  228 => 52,  225 => 58,  213 => 78,  211 => 81,  197 => 69,  174 => 65,  148 => 35,  134 => 39,  127 => 35,  270 => 102,  253 => 100,  233 => 87,  212 => 78,  210 => 77,  206 => 58,  202 => 94,  198 => 35,  192 => 53,  185 => 74,  180 => 49,  175 => 58,  172 => 57,  167 => 75,  165 => 83,  160 => 59,  137 => 46,  113 => 48,  100 => 39,  90 => 42,  81 => 23,  65 => 11,  129 => 56,  97 => 41,  84 => 27,  34 => 5,  53 => 12,  77 => 20,  20 => 1,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 130,  435 => 258,  430 => 130,  427 => 89,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 118,  379 => 126,  374 => 123,  368 => 96,  365 => 197,  362 => 178,  360 => 126,  355 => 150,  341 => 118,  337 => 87,  322 => 101,  314 => 85,  312 => 130,  309 => 129,  305 => 74,  298 => 120,  294 => 83,  285 => 175,  283 => 115,  278 => 98,  268 => 58,  264 => 2,  258 => 94,  252 => 70,  247 => 66,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 48,  169 => 69,  140 => 58,  132 => 57,  128 => 47,  107 => 44,  61 => 12,  273 => 174,  269 => 107,  254 => 102,  243 => 92,  240 => 65,  238 => 57,  235 => 89,  230 => 61,  227 => 86,  224 => 81,  221 => 67,  219 => 101,  217 => 79,  208 => 76,  204 => 57,  179 => 98,  159 => 90,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 16,  38 => 18,  94 => 21,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 41,  21 => 11,  26 => 9,  93 => 27,  88 => 25,  78 => 18,  46 => 34,  27 => 7,  44 => 11,  31 => 4,  28 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 63,  166 => 54,  163 => 82,  158 => 80,  156 => 62,  151 => 59,  142 => 58,  138 => 46,  136 => 71,  121 => 50,  117 => 39,  105 => 25,  91 => 33,  62 => 27,  49 => 14,  24 => 3,  25 => 35,  19 => 1,  79 => 18,  72 => 18,  69 => 17,  47 => 21,  40 => 6,  37 => 7,  22 => 11,  246 => 136,  157 => 89,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 47,  111 => 47,  108 => 19,  101 => 31,  98 => 45,  96 => 30,  83 => 33,  74 => 27,  66 => 23,  55 => 38,  52 => 12,  50 => 18,  43 => 12,  41 => 19,  35 => 6,  32 => 4,  29 => 3,  209 => 96,  203 => 73,  199 => 93,  193 => 33,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 72,  162 => 59,  154 => 60,  149 => 62,  147 => 75,  144 => 42,  141 => 73,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 38,  99 => 23,  95 => 34,  92 => 28,  86 => 33,  82 => 19,  80 => 27,  73 => 33,  64 => 13,  60 => 22,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 11,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}
