<?php

/* SonataAdminBundle:Pager:base_links.html.twig */
class __TwigTemplate_44c5e7be88f307b724e496aaf2dee3321d43ac2f177314b54ad4fc4bd21f368e extends Twig_Template
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
<tr>
    <td colspan=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "elements")), "html", null, true);
        echo "\">
        <div class=\"pagination pagination-centered\">
            <ul>
                ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") > 2)) {
            // line 17
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => 1), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_first_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&laquo;</a></li>
                ";
        }
        // line 19
        echo "
                ";
        // line 20
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage"))) {
            // line 21
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "previouspage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&lsaquo;</a></li>
                ";
        }
        // line 23
        echo "
                ";
        // line 25
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "getLinks", array(0 => $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "pager_links"), "method")), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                    ";
            if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"))) {
                // line 27
                echo "                        <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            } else {
                // line 29
                echo "                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page"))), "method")), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                echo "</a></li>
                    ";
            }
            // line 31
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage"))) {
            // line 34
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&rsaquo;</a></li>
                ";
        }
        // line 36
        echo "
                ";
        // line 37
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")) && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nextpage")))) {
            // line 38
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "modelmanager"), "paginationparameters", array(0 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), 1 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage")), "method")), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_last_pager", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">&raquo;</a></li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 188,  594 => 187,  586 => 184,  575 => 180,  573 => 179,  558 => 172,  554 => 171,  545 => 169,  529 => 164,  524 => 162,  517 => 161,  485 => 129,  478 => 127,  473 => 110,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  418 => 113,  404 => 87,  401 => 86,  394 => 136,  382 => 127,  334 => 120,  320 => 115,  317 => 86,  307 => 82,  195 => 54,  392 => 104,  389 => 103,  377 => 99,  349 => 90,  332 => 85,  324 => 82,  287 => 68,  282 => 66,  276 => 64,  234 => 48,  231 => 47,  218 => 59,  12 => 34,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  666 => 200,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 172,  539 => 171,  536 => 166,  533 => 169,  530 => 168,  527 => 167,  522 => 165,  507 => 157,  495 => 138,  477 => 127,  470 => 149,  464 => 147,  459 => 145,  450 => 141,  425 => 135,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  385 => 116,  371 => 113,  352 => 91,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 119,  266 => 74,  244 => 65,  205 => 56,  200 => 55,  188 => 49,  178 => 45,  118 => 49,  306 => 141,  303 => 140,  300 => 139,  286 => 80,  280 => 131,  274 => 77,  263 => 55,  236 => 109,  216 => 42,  170 => 55,  553 => 186,  548 => 170,  541 => 168,  537 => 178,  525 => 166,  520 => 170,  516 => 169,  513 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  496 => 161,  489 => 136,  483 => 129,  479 => 153,  475 => 152,  462 => 108,  448 => 140,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 117,  388 => 132,  386 => 111,  375 => 106,  372 => 105,  354 => 92,  348 => 100,  342 => 88,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 73,  296 => 77,  292 => 135,  255 => 71,  184 => 47,  146 => 47,  126 => 55,  194 => 53,  181 => 80,  161 => 71,  318 => 80,  316 => 89,  288 => 81,  284 => 67,  279 => 65,  275 => 73,  256 => 121,  250 => 93,  237 => 64,  222 => 81,  215 => 78,  191 => 69,  153 => 49,  150 => 27,  110 => 45,  694 => 412,  685 => 406,  680 => 403,  678 => 202,  668 => 395,  663 => 199,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 190,  599 => 184,  592 => 351,  585 => 347,  581 => 182,  579 => 342,  577 => 341,  571 => 338,  567 => 175,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 160,  509 => 158,  504 => 156,  492 => 137,  486 => 292,  481 => 128,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 138,  439 => 100,  429 => 255,  424 => 88,  422 => 134,  420 => 127,  415 => 112,  396 => 141,  383 => 101,  366 => 210,  361 => 208,  346 => 102,  335 => 86,  331 => 187,  326 => 83,  321 => 91,  304 => 81,  291 => 169,  272 => 158,  267 => 156,  242 => 113,  232 => 84,  186 => 51,  152 => 63,  104 => 43,  70 => 23,  58 => 25,  155 => 38,  76 => 33,  124 => 49,  114 => 50,  358 => 106,  351 => 121,  347 => 134,  343 => 132,  338 => 130,  327 => 118,  323 => 116,  319 => 92,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 78,  271 => 59,  265 => 126,  262 => 105,  260 => 70,  257 => 149,  251 => 67,  248 => 116,  239 => 97,  228 => 68,  225 => 58,  213 => 126,  211 => 81,  197 => 54,  174 => 47,  148 => 35,  134 => 59,  127 => 32,  270 => 4,  253 => 95,  233 => 62,  212 => 74,  210 => 75,  206 => 58,  202 => 77,  198 => 55,  192 => 53,  185 => 86,  180 => 49,  175 => 33,  172 => 46,  167 => 75,  165 => 52,  160 => 59,  137 => 46,  113 => 46,  100 => 43,  90 => 34,  81 => 33,  65 => 29,  129 => 56,  97 => 41,  84 => 34,  34 => 15,  53 => 24,  77 => 30,  20 => 11,  23 => 13,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 142,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 115,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 105,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 173,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 57,  214 => 99,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 47,  107 => 44,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  243 => 89,  240 => 65,  238 => 139,  235 => 63,  230 => 61,  227 => 46,  224 => 60,  221 => 67,  219 => 101,  217 => 79,  208 => 124,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 44,  102 => 43,  71 => 29,  67 => 19,  63 => 27,  59 => 27,  38 => 7,  94 => 40,  89 => 34,  85 => 32,  75 => 31,  68 => 30,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  93 => 39,  88 => 33,  78 => 36,  46 => 19,  27 => 14,  44 => 21,  31 => 17,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 60,  158 => 75,  156 => 68,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 20,  24 => 3,  25 => 13,  19 => 11,  79 => 31,  72 => 30,  69 => 33,  47 => 20,  40 => 19,  37 => 16,  22 => 2,  246 => 66,  157 => 29,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 25,  52 => 23,  50 => 21,  43 => 20,  41 => 20,  35 => 20,  32 => 5,  29 => 16,  209 => 96,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 87,  182 => 85,  176 => 82,  173 => 71,  168 => 44,  164 => 72,  162 => 40,  154 => 67,  149 => 62,  147 => 52,  144 => 51,  141 => 67,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 145,  109 => 108,  106 => 45,  103 => 38,  99 => 41,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 31,  73 => 32,  64 => 27,  60 => 26,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 19,  36 => 17,  33 => 16,  30 => 15,);
    }
}
