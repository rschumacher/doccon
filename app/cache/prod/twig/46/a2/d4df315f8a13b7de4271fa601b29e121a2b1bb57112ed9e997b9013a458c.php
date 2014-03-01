<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_46a2d4df315f8a13b7de4271fa601b29e121a2b1bb57112ed9e997b9013a458c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["revisions"]) ? $context["revisions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["changedEntity"]) ? $context["changedEntity"] : null), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 22,  155 => 68,  114 => 39,  76 => 33,  145 => 48,  139 => 46,  124 => 43,  83 => 30,  70 => 26,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 75,  165 => 64,  160 => 44,  137 => 37,  120 => 42,  113 => 44,  100 => 23,  90 => 20,  81 => 32,  65 => 39,  129 => 59,  97 => 47,  84 => 16,  34 => 17,  53 => 27,  37 => 7,  52 => 78,  77 => 27,  74 => 32,  20 => 1,  23 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 44,  128 => 49,  111 => 39,  107 => 35,  61 => 27,  273 => 96,  269 => 94,  254 => 102,  246 => 99,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 86,  159 => 61,  143 => 59,  135 => 53,  131 => 55,  119 => 42,  108 => 28,  102 => 36,  71 => 31,  67 => 30,  63 => 14,  59 => 23,  47 => 88,  38 => 17,  94 => 30,  89 => 37,  85 => 30,  79 => 37,  75 => 17,  68 => 22,  56 => 24,  50 => 11,  29 => 14,  87 => 28,  72 => 16,  55 => 22,  21 => 11,  26 => 2,  98 => 32,  93 => 33,  88 => 28,  78 => 21,  46 => 20,  27 => 4,  40 => 22,  44 => 19,  35 => 5,  31 => 14,  43 => 8,  41 => 18,  28 => 13,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 49,  142 => 59,  138 => 57,  136 => 45,  123 => 47,  121 => 42,  117 => 40,  115 => 33,  105 => 37,  101 => 33,  91 => 27,  69 => 26,  66 => 14,  62 => 24,  49 => 21,  24 => 14,  32 => 15,  25 => 3,  22 => 12,  19 => 11,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 87,  176 => 85,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 40,  149 => 51,  147 => 58,  144 => 60,  141 => 48,  133 => 55,  130 => 49,  125 => 44,  122 => 43,  116 => 45,  112 => 42,  109 => 53,  106 => 33,  103 => 50,  99 => 31,  95 => 34,  92 => 21,  86 => 17,  82 => 26,  80 => 19,  73 => 34,  64 => 36,  60 => 17,  57 => 34,  54 => 23,  51 => 26,  48 => 20,  45 => 19,  42 => 18,  39 => 8,  36 => 21,  33 => 6,  30 => 18,);
    }
}
