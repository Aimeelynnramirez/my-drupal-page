<?php

/* themes/minima/templates/page.html.twig */
class __TwigTemplate_b59295ada07b0fd4680b2b8a0a4fc3737482f171ef627ab60503f4bbe79cced8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'top_header' => array($this, 'block_top_header'),
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 64, "if" => 66, "block" => 67);
        $filters = array("clean_class" => 81, "t" => 90);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 64
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 66
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "top_header", array())) {
            // line 67
            echo "        ";
            $this->displayBlock('top_header', $context, $blocks);
            // line 72
            echo "      ";
        }
        // line 73
        echo "
";
        // line 75
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 76
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 107
        echo "
";
        // line 109
        $this->displayBlock('main', $context, $blocks);
        // line 188
        echo "
";
        // line 189
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 190
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 67
    public function block_top_header($context, array $blocks = array())
    {
        // line 68
        echo "          <div class=\"container\">
            ";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 76
    public function block_navbar($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        // line 78
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 80
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 81
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 84
        echo "    <header";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      <div class=\"navbar-header\">
        ";
        // line 86
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 88
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 89
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"sr-only\">";
            // line 90
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 96
        echo "      </div>

      ";
        // line 99
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 100
            echo "        <div class=\"navbar-collapse collapse\">
          ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 104
        echo "    </header>
  ";
    }

    // line 109
    public function block_main($context, array $blocks = array())
    {
        // line 110
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 114
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 115
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 120
            echo "      ";
        }
        // line 121
        echo "
      ";
        // line 123
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 124
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 129
            echo "      ";
        }
        // line 130
        echo "
      ";
        // line 132
        echo "      ";
        // line 133
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 134
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 135
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 136
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 137
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 140
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 143
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 144
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 147
            echo "        ";
        }
        // line 148
        echo "
        ";
        // line 150
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 151
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 154
            echo "        ";
        }
        // line 155
        echo "
        ";
        // line 157
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 158
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 161
            echo "        ";
        }
        // line 162
        echo "
        ";
        // line 164
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 165
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 168
            echo "        ";
        }
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 175
        echo "      </section>

      ";
        // line 178
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 179
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 184
            echo "      ";
        }
        // line 185
        echo "    </div>
  </div>
";
    }

    // line 115
    public function block_header($context, array $blocks = array())
    {
        // line 116
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 124
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 125
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 126
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 144
    public function block_highlighted($context, array $blocks = array())
    {
        // line 145
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 151
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 152
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 158
    public function block_action_links($context, array $blocks = array())
    {
        // line 159
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 165
    public function block_help($context, array $blocks = array())
    {
        // line 166
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 171
    public function block_content($context, array $blocks = array())
    {
        // line 172
        echo "          <a id=\"main-content\"></a>
          ";
        // line 173
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 179
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 180
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 181
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 190
    public function block_footer($context, array $blocks = array())
    {
        // line 191
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 192
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/minima/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 192,  371 => 191,  368 => 190,  361 => 181,  358 => 180,  355 => 179,  349 => 173,  346 => 172,  343 => 171,  336 => 166,  333 => 165,  326 => 159,  323 => 158,  316 => 152,  313 => 151,  306 => 145,  303 => 144,  296 => 126,  293 => 125,  290 => 124,  283 => 117,  280 => 116,  277 => 115,  271 => 185,  268 => 184,  265 => 179,  262 => 178,  258 => 175,  255 => 171,  252 => 169,  249 => 168,  246 => 165,  243 => 164,  240 => 162,  237 => 161,  234 => 158,  231 => 157,  228 => 155,  225 => 154,  222 => 151,  219 => 150,  216 => 148,  213 => 147,  210 => 144,  207 => 143,  201 => 140,  199 => 137,  198 => 136,  197 => 135,  196 => 134,  195 => 133,  193 => 132,  190 => 130,  187 => 129,  184 => 124,  181 => 123,  178 => 121,  175 => 120,  172 => 115,  169 => 114,  162 => 110,  159 => 109,  154 => 104,  148 => 101,  145 => 100,  142 => 99,  138 => 96,  129 => 90,  126 => 89,  123 => 88,  119 => 86,  113 => 84,  111 => 81,  110 => 80,  109 => 78,  107 => 77,  104 => 76,  97 => 69,  94 => 68,  91 => 67,  85 => 190,  83 => 189,  80 => 188,  78 => 109,  75 => 107,  71 => 76,  69 => 75,  66 => 73,  63 => 72,  60 => 67,  57 => 66,  55 => 64,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/minima/templates/page.html.twig", "/Users/adapttech/Sites/devdesktop/lightning-8.x-3.105/themes/minima/templates/page.html.twig");
    }
}
