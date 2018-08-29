<?php

/* themes/drupal8_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_db90ce103844c8e065d8b8dde6617ebdf016806284bcfe9d3f7988b7ce52fb83 extends Twig_Template
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
        $tags = array("if" => 74);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <nav class=\"navbar navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">
      <div class=\"navbar-header col-md-3\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 75
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 77
        echo "      </div>

      <!-- Navigation -->
      <div class=\"col-md-9\">
        ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 82
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
        ";
        }
        // line 83
        echo "      
      </div>
      <!--End Navigation -->

      </div>
    </div>
  </nav>

  <!-- Banner -->
  ";
        // line 92
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()))) {
            echo "  
    <div class=\"container welcome-banner-text\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 101
        echo "  <!-- End Banner -->

</header>
<!--End Header & Navbar -->


<!--Highlighted-->
  ";
        // line 108
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 109
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 117
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 121
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 122
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
                // line 123
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 129
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 130
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 131
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 133
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 136
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 137
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 138
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 140
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 143
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 144
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 145
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 147
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 154
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 158
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 159
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 163
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 168
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 177
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 178
            echo "        <div class=\"row\">
          ";
            // line 179
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 182
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 186
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 191
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 192
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 193
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 198
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 201
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 202
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 203
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 204
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 208
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 211
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 212
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 213
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 218
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 224
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 225
            echo "      <div class=\"row\">
        ";
            // line 226
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 229
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->






<!-- Start bottom -->
";
        // line 240
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 241
            if ((($this->getAttribute(($context["page"] ?? null), "bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "bottom_third", array()))) {
                // line 242
                echo "    <div class=\"bottom-widgets\">
      <!-- Start Container -->
      <div class=\"container\">
        
        <div class=\"row\">

          <!-- Start Bottom First Region -->
          <div class = ";
                // line 249
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 250
                if ($this->getAttribute(($context["page"] ?? null), "bottom_first", array())) {
                    // line 251
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 253
                echo "          </div>
          <!-- End Bottom First Region -->

          <!-- Start Bottom Second Region -->
          <div class = ";
                // line 257
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 258
                if ($this->getAttribute(($context["page"] ?? null), "bottom_second", array())) {
                    // line 259
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 261
                echo "          </div>
          <!-- End Bottom Second Region -->

          <!-- Start Bottom third Region -->
          <div class = ";
                // line 265
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 266
                if ($this->getAttribute(($context["page"] ?? null), "bottom_third", array())) {
                    // line 267
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 269
                echo "          </div>
          <!-- End Bottom Third Region -->

          <div class = ";
                // line 272
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["bottom_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 273
                if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", array())) {
                    // line 274
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_forth", array()), "html", null, true));
                    echo "
            ";
                }
                // line 276
                echo "          </div>

        </div>
      </div>
    </div>
  ";
            }
        }
        // line 283
        echo "<!--End Bottom -->




<!-- start: Footer -->
";
        // line 289
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 290
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 296
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 297
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 298
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 300
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 304
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 305
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 306
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 308
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 312
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 313
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 314
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 316
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 322
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 325
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 326
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 330
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        ";
            // line 332
            if (($context["show_social_icon"] ?? null)) {
                // line 333
                echo "        <div class=\"col-sm-6 col-md-6\">
          <div class=\"social-media\">
            ";
                // line 335
                if (($context["facebook_url"] ?? null)) {
                    // line 336
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
                }
                // line 338
                echo "            ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 339
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
                }
                // line 341
                echo "            ";
                if (($context["twitter_url"] ?? null)) {
                    // line 342
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
                }
                // line 344
                echo "            ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 345
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
                }
                // line 347
                echo "            ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 348
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
                }
                // line 350
                echo "            ";
                if (($context["rss_url"] ?? null)) {
                    // line 351
                    echo "              <a href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
                }
                // line 353
                echo "          </div>
        </div>
        ";
            }
            // line 356
            echo "      </div>
    </div>
  </div>
";
        }
        // line 360
        echo "<!-- End Footer Menu -->

";
        // line 362
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 363
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 369
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 370
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
                echo "</p>        
        ";
            }
            // line 372
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 376
            if (($context["show_credit_link"] ?? null)) {
                // line 377
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 381
            echo "      <!-- End Credit link -->
      
    </div>
  </div>
</div>
";
        }
        // line 387
        echo "

<!-- Google map -->
";
        // line 390
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "google_map", array()))) {
            // line 391
            echo "  <div class=\"google_map\">
    ";
            // line 392
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "google_map", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 395
        echo "<!-- End Google map -->";
    }

    public function getTemplateName()
    {
        return "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  666 => 395,  660 => 392,  657 => 391,  655 => 390,  650 => 387,  642 => 381,  636 => 377,  634 => 376,  628 => 372,  623 => 370,  619 => 369,  611 => 363,  609 => 362,  605 => 360,  599 => 356,  594 => 353,  588 => 351,  585 => 350,  579 => 348,  576 => 347,  570 => 345,  567 => 344,  561 => 342,  558 => 341,  552 => 339,  549 => 338,  543 => 336,  541 => 335,  537 => 333,  535 => 332,  530 => 330,  524 => 326,  522 => 325,  517 => 322,  509 => 316,  503 => 314,  501 => 313,  497 => 312,  491 => 308,  485 => 306,  483 => 305,  479 => 304,  473 => 300,  467 => 298,  465 => 297,  461 => 296,  453 => 290,  451 => 289,  443 => 283,  434 => 276,  428 => 274,  426 => 273,  422 => 272,  417 => 269,  411 => 267,  409 => 266,  405 => 265,  399 => 261,  393 => 259,  391 => 258,  387 => 257,  381 => 253,  375 => 251,  373 => 250,  369 => 249,  360 => 242,  358 => 241,  354 => 240,  341 => 229,  335 => 226,  332 => 225,  330 => 224,  322 => 218,  315 => 214,  311 => 213,  308 => 212,  306 => 211,  301 => 208,  294 => 204,  290 => 203,  287 => 202,  285 => 201,  280 => 198,  273 => 194,  269 => 193,  266 => 192,  264 => 191,  256 => 186,  250 => 182,  244 => 179,  241 => 178,  239 => 177,  228 => 168,  220 => 163,  214 => 159,  212 => 158,  206 => 154,  197 => 147,  191 => 145,  189 => 144,  185 => 143,  180 => 140,  174 => 138,  172 => 137,  168 => 136,  163 => 133,  157 => 131,  155 => 130,  151 => 129,  143 => 123,  141 => 122,  137 => 121,  131 => 117,  123 => 112,  118 => 109,  116 => 108,  107 => 101,  99 => 96,  92 => 92,  81 => 83,  75 => 82,  73 => 81,  67 => 77,  61 => 75,  59 => 74,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/drupal8_zymphonies_theme/templates/layout/page.html.twig", "/Users/adapttech/Sites/devdesktop/lightning-8.x-3.105/themes/drupal8_zymphonies_theme/templates/layout/page.html.twig");
    }
}
