<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_55a5149e4c3f35b2e9ab226b627a8df7a316c89d6f089ff996f9327a2a8339a7 extends Twig_Template
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
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 30,  33 => 16,  27 => 14,  22 => 12,  685 => 406,  668 => 395,  647 => 382,  637 => 378,  633 => 377,  627 => 374,  609 => 362,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  542 => 321,  538 => 319,  531 => 312,  526 => 310,  518 => 307,  514 => 306,  492 => 295,  486 => 292,  481 => 290,  474 => 285,  466 => 280,  452 => 272,  445 => 267,  439 => 260,  435 => 258,  429 => 255,  424 => 254,  415 => 247,  407 => 242,  396 => 234,  361 => 208,  331 => 187,  298 => 173,  291 => 169,  272 => 158,  267 => 156,  257 => 149,  213 => 126,  208 => 124,  135 => 81,  127 => 76,  97 => 63,  23 => 18,  275 => 103,  237 => 86,  232 => 136,  228 => 83,  201 => 72,  168 => 60,  145 => 52,  125 => 45,  113 => 41,  108 => 39,  102 => 37,  100 => 36,  82 => 33,  56 => 40,  21 => 12,  19 => 11,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  694 => 412,  689 => 137,  680 => 403,  675 => 132,  662 => 125,  658 => 391,  654 => 389,  643 => 381,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 367,  614 => 111,  598 => 107,  596 => 106,  576 => 101,  564 => 99,  557 => 330,  555 => 95,  550 => 326,  547 => 93,  529 => 92,  524 => 90,  515 => 85,  512 => 84,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  467 => 72,  461 => 70,  456 => 273,  442 => 62,  437 => 61,  433 => 60,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  390 => 43,  388 => 42,  366 => 210,  363 => 32,  350 => 26,  313 => 15,  311 => 14,  290 => 5,  285 => 3,  281 => 105,  278 => 410,  273 => 394,  258 => 354,  255 => 353,  253 => 148,  250 => 93,  245 => 335,  243 => 89,  238 => 139,  222 => 81,  217 => 79,  215 => 78,  212 => 279,  210 => 75,  207 => 269,  204 => 73,  202 => 266,  199 => 265,  191 => 69,  189 => 240,  181 => 232,  179 => 107,  174 => 64,  171 => 102,  169 => 210,  166 => 100,  164 => 203,  161 => 202,  159 => 196,  156 => 93,  154 => 189,  151 => 188,  134 => 161,  131 => 48,  129 => 148,  124 => 132,  116 => 116,  114 => 71,  111 => 110,  106 => 104,  99 => 68,  96 => 67,  94 => 57,  91 => 56,  89 => 35,  61 => 25,  63 => 14,  45 => 9,  40 => 7,  31 => 22,  28 => 3,  26 => 20,  20 => 1,  710 => 149,  704 => 210,  701 => 209,  699 => 142,  693 => 205,  683 => 135,  678 => 398,  666 => 126,  663 => 393,  660 => 198,  652 => 193,  649 => 122,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 355,  593 => 105,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 173,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 91,  525 => 166,  522 => 165,  513 => 160,  509 => 304,  507 => 157,  504 => 302,  502 => 155,  499 => 154,  495 => 133,  489 => 131,  483 => 129,  480 => 75,  477 => 127,  470 => 73,  464 => 71,  462 => 146,  459 => 69,  453 => 142,  450 => 64,  448 => 140,  443 => 261,  427 => 136,  425 => 135,  422 => 250,  420 => 249,  411 => 126,  406 => 123,  400 => 47,  397 => 119,  395 => 118,  391 => 117,  385 => 41,  381 => 115,  371 => 35,  358 => 106,  355 => 27,  346 => 196,  344 => 24,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  323 => 92,  321 => 183,  316 => 121,  308 => 13,  304 => 174,  294 => 83,  288 => 107,  283 => 166,  269 => 100,  266 => 366,  251 => 67,  247 => 66,  244 => 65,  235 => 311,  233 => 304,  225 => 298,  220 => 80,  205 => 56,  200 => 55,  194 => 248,  188 => 49,  184 => 233,  178 => 45,  173 => 42,  152 => 92,  149 => 182,  146 => 181,  139 => 169,  121 => 75,  118 => 28,  115 => 27,  107 => 24,  79 => 32,  76 => 31,  64 => 3,  57 => 27,  49 => 111,  44 => 73,  42 => 8,  39 => 60,  37 => 53,  34 => 52,  32 => 15,  29 => 21,  312 => 177,  306 => 141,  303 => 140,  300 => 139,  292 => 135,  286 => 80,  280 => 131,  274 => 77,  265 => 99,  260 => 98,  256 => 96,  248 => 336,  242 => 140,  236 => 109,  230 => 303,  219 => 129,  214 => 99,  209 => 96,  197 => 119,  192 => 88,  187 => 87,  185 => 68,  182 => 85,  176 => 65,  170 => 79,  165 => 59,  160 => 58,  158 => 75,  153 => 56,  147 => 90,  144 => 176,  141 => 175,  138 => 50,  136 => 168,  132 => 59,  128 => 58,  123 => 30,  120 => 56,  110 => 40,  104 => 67,  86 => 46,  72 => 198,  54 => 26,  51 => 38,  35 => 16,  392 => 104,  389 => 103,  383 => 224,  377 => 37,  374 => 36,  368 => 34,  365 => 95,  362 => 94,  354 => 92,  352 => 104,  349 => 90,  342 => 23,  337 => 22,  335 => 188,  332 => 20,  326 => 185,  324 => 82,  318 => 122,  315 => 79,  309 => 117,  305 => 115,  302 => 73,  299 => 112,  293 => 109,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 395,  271 => 374,  268 => 373,  263 => 365,  246 => 51,  240 => 326,  234 => 48,  231 => 47,  227 => 134,  224 => 103,  218 => 43,  216 => 100,  203 => 122,  186 => 111,  183 => 37,  180 => 36,  175 => 43,  157 => 41,  150 => 55,  143 => 26,  126 => 147,  122 => 44,  119 => 43,  112 => 26,  109 => 69,  105 => 106,  103 => 64,  95 => 20,  93 => 58,  90 => 18,  88 => 60,  85 => 34,  83 => 22,  80 => 41,  74 => 52,  71 => 19,  69 => 50,  66 => 12,  62 => 165,  55 => 12,  52 => 112,  46 => 21,  43 => 21,  41 => 6,  38 => 18,  36 => 4,  30 => 15,  24 => 13,  101 => 89,  98 => 21,  92 => 61,  87 => 17,  84 => 41,  81 => 40,  78 => 53,  75 => 39,  73 => 29,  70 => 33,  67 => 28,  59 => 164,  53 => 16,  50 => 25,  47 => 21,  12 => 34,);
    }
}
