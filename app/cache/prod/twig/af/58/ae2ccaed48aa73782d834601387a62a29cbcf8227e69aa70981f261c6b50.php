<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_af58ae2ccaed48aa73782d834601387a62a29cbcf8227e69aa70981f261c6b50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : null)), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : null), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : null), (isset($context["field_description"]) ? $context["field_description"] : null)), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 74,  553 => 186,  548 => 184,  541 => 180,  537 => 178,  525 => 172,  520 => 170,  516 => 169,  513 => 168,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  496 => 161,  489 => 157,  483 => 154,  479 => 153,  475 => 152,  462 => 146,  448 => 139,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  391 => 113,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  354 => 102,  348 => 100,  342 => 97,  325 => 93,  313 => 90,  310 => 89,  308 => 88,  302 => 84,  296 => 82,  292 => 81,  255 => 74,  184 => 64,  146 => 49,  126 => 42,  194 => 87,  181 => 80,  161 => 71,  318 => 122,  316 => 121,  288 => 107,  284 => 106,  279 => 104,  275 => 103,  256 => 96,  250 => 93,  237 => 70,  222 => 81,  215 => 78,  191 => 69,  153 => 56,  150 => 65,  110 => 77,  694 => 412,  685 => 406,  680 => 403,  678 => 398,  668 => 395,  663 => 393,  658 => 391,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  609 => 362,  599 => 355,  592 => 351,  585 => 347,  581 => 345,  579 => 342,  577 => 341,  571 => 338,  567 => 337,  557 => 330,  550 => 185,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  518 => 307,  514 => 306,  509 => 304,  504 => 302,  492 => 295,  486 => 292,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 137,  439 => 260,  429 => 255,  424 => 128,  422 => 250,  420 => 249,  415 => 247,  396 => 234,  383 => 224,  366 => 210,  361 => 208,  346 => 99,  335 => 188,  331 => 187,  326 => 185,  321 => 123,  304 => 174,  291 => 169,  272 => 158,  267 => 156,  242 => 140,  232 => 84,  186 => 82,  152 => 92,  104 => 67,  58 => 22,  155 => 53,  114 => 71,  76 => 57,  145 => 52,  139 => 60,  124 => 31,  83 => 30,  70 => 26,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 92,  315 => 123,  301 => 117,  299 => 83,  293 => 109,  289 => 112,  281 => 105,  277 => 78,  271 => 108,  265 => 99,  262 => 105,  260 => 77,  257 => 149,  251 => 101,  248 => 100,  239 => 97,  228 => 68,  225 => 87,  213 => 126,  211 => 81,  197 => 70,  174 => 60,  148 => 64,  134 => 59,  127 => 32,  270 => 4,  253 => 95,  233 => 81,  212 => 74,  210 => 75,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 68,  180 => 62,  175 => 77,  172 => 51,  167 => 75,  165 => 72,  160 => 70,  137 => 46,  120 => 42,  113 => 41,  100 => 36,  90 => 20,  81 => 25,  65 => 30,  129 => 57,  97 => 63,  84 => 39,  34 => 16,  53 => 27,  37 => 7,  52 => 17,  77 => 27,  74 => 34,  20 => 1,  23 => 18,  480 => 162,  474 => 285,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 142,  413 => 134,  409 => 132,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 121,  381 => 108,  379 => 119,  374 => 116,  368 => 103,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 117,  305 => 87,  298 => 173,  294 => 90,  285 => 111,  283 => 166,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 80,  214 => 69,  177 => 61,  169 => 57,  140 => 55,  132 => 58,  128 => 49,  111 => 39,  107 => 35,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  246 => 99,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 82,  227 => 134,  224 => 71,  221 => 67,  219 => 129,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  131 => 48,  119 => 28,  108 => 48,  102 => 38,  71 => 31,  67 => 27,  63 => 50,  59 => 23,  47 => 19,  38 => 17,  94 => 30,  89 => 40,  85 => 34,  79 => 37,  75 => 17,  68 => 31,  56 => 24,  50 => 20,  29 => 21,  87 => 33,  72 => 56,  55 => 22,  21 => 12,  26 => 13,  98 => 44,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 4,  40 => 22,  44 => 19,  35 => 16,  31 => 15,  43 => 18,  41 => 18,  28 => 14,  201 => 65,  196 => 65,  183 => 82,  171 => 63,  166 => 100,  163 => 45,  158 => 62,  156 => 68,  151 => 49,  142 => 61,  138 => 36,  136 => 45,  123 => 54,  121 => 53,  117 => 51,  115 => 50,  105 => 27,  101 => 73,  91 => 27,  69 => 50,  66 => 14,  62 => 29,  49 => 20,  24 => 13,  32 => 15,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 122,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 80,  176 => 77,  173 => 65,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 48,  133 => 55,  130 => 57,  125 => 45,  122 => 44,  116 => 45,  112 => 49,  109 => 40,  106 => 33,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 19,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 6,  30 => 15,);
    }
}