<?php

/* extension/payment/kingspays.twig */
class __TwigTemplate_7a8cf9f3a4deb8df347190736bdae4c403314d5dad0cc39df9e5477ce73ee7a3 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "

<div id=\"content\">
    <ul class=\"breadcrumb\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>

    <div class=\"page-header\">
        <div class=\"container-fluid\">

            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
        // line 14
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 15
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1><i class=\"fa fa-credit-card\"></i> ";
        // line 16
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
        </div>
    </div>
    <div class=\"container-fluid\">
        <div class=\"panel-body\">
            <form action=\"";
        // line 21
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
                <ul class=\"nav nav-tabs\">
                    <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 23
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</a></li>
                    <li><a href=\"#tab-order-status\" data-toggle=\"tab\">";
        // line 24
        echo (isset($context["tab_order_status"]) ? $context["tab_order_status"] : null);
        echo "</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div class=\"tab-pane active\" id=\"tab-general\">
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-service-key\">";
        // line 29
        echo (isset($context["entry_service_key"]) ? $context["entry_service_key"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_kingspays_production_secret_key\" value=\"";
        // line 31
        echo (isset($context["payment_kingspays_production_secret_key"]) ? $context["payment_kingspays_production_secret_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_service_key"]) ? $context["entry_service_key"] : null);
        echo "\" id=\"input-service-key\" class=\"form-control\" />
                                ";
        // line 32
        if ((isset($context["error_service_key"]) ? $context["error_service_key"] : null)) {
            // line 33
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_service_key"]) ? $context["error_service_key"] : null);
            echo "</div>
                                ";
        }
        // line 34
        echo " </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"col-sm-2 control-label\" for=\"input-client-key\">";
        // line 37
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_kingspays_test_secret_key\" value=\"";
        // line 39
        echo (isset($context["payment_kingspays_test_secret_key"]) ? $context["payment_kingspays_test_secret_key"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_client_key"]) ? $context["entry_client_key"] : null);
        echo "\" id=\"input-client-key\" class=\"form-control\" />
                                ";
        // line 40
        if ((isset($context["error_client_key"]) ? $context["error_client_key"] : null)) {
            // line 41
            echo "                                    <div class=\"text-danger\">";
            echo (isset($context["error_client_key"]) ? $context["error_client_key"] : null);
            echo "</div>
                                ";
        }
        // line 42
        echo " </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-card\">";
        // line 46
        echo (isset($context["test_payout"]) ? $context["test_payout"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_test_payout\" id=\"input-card\" class=\"form-control\">

                                    ";
        // line 50
        if ((isset($context["payment_kingspays_test_payout"]) ? $context["payment_kingspays_test_payout"] : null)) {
            // line 51
            echo "
                                        <option value=\"1\" selected=\"selected\">";
            // line 52
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\">";
            // line 53
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>

                                    ";
        } else {
            // line 56
            echo "
                                        <option value=\"1\">";
            // line 57
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 58
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>

                                    ";
        }
        // line 61
        echo "
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-total\">";
        // line 67
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo " </label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_kingspays_total\" value=\"";
        // line 69
        echo (isset($context["payment_kingspays_total"]) ? $context["payment_kingspays_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\" />
                                <span class=\"help-block\">";
        // line 70
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "</span> </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 74
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>

                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_currency\" id=\"input-currency\" class=\"form-control\">
                                    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currencies"]) ? $context["currencies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["currency"]) {
            // line 79
            echo "                                        ";
            if (($this->getAttribute($context["currency"], "code", array()) == (isset($context["payment_kingspays_currency"]) ? $context["payment_kingspays_currency"] : null))) {
                // line 80
                echo "                                            <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                                        ";
            } else {
                // line 82
                echo "                                            <option value=\"";
                echo $this->getAttribute($context["currency"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["currency"], "title", array());
                echo "</option>
                                        ";
            }
            // line 84
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 90
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                                    <option value=\"0\">";
        // line 93
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>

                                    ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 96
            echo "                                        ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_kingspays_geo_zone_id"]) ? $context["payment_kingspays_geo_zone_id"] : null))) {
                // line 97
                echo "
                                            <option value=\"";
                // line 98
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 101
                echo "
                                            <option value=\"";
                // line 102
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>

                                        ";
            }
            // line 105
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 112
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_status\" id=\"input-status\" class=\"form-control\">

                                    ";
        // line 116
        if ((isset($context["payment_kingspays_status"]) ? $context["payment_kingspays_status"] : null)) {
            // line 117
            echo "
                                        <option value=\"1\" selected=\"selected\">";
            // line 118
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\">";
            // line 119
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>

                                    ";
        } else {
            // line 122
            echo "
                                        <option value=\"1\">";
            // line 123
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                                        <option value=\"0\" selected=\"selected\">";
            // line 124
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>

                                    ";
        }
        // line 127
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 132
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <input type=\"text\" name=\"payment_kingspays_sort_order\" value=\"";
        // line 134
        echo (isset($context["payment_kingspays_sort_order"]) ? $context["payment_kingspays_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane\" id=\"tab-order-status\">
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 140
        echo (isset($context["entry_success_status"]) ? $context["entry_success_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_success_status_id\" class=\"form-control\">

                                    ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 145
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_success_status_id"]) ? $context["payment_kingspays_entry_success_status_id"] : null))) {
                // line 146
                echo "
                                            <option value=\"";
                // line 147
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 150
                echo "
                                            <option value=\"";
                // line 151
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 154
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 160
        echo (isset($context["entry_failed_status"]) ? $context["entry_failed_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_failed_status_id\" class=\"form-control\">

                                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 165
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_failed_status_id"]) ? $context["payment_kingspays_entry_failed_status_id"] : null))) {
                // line 166
                echo "
                                            <option value=\"";
                // line 167
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 170
                echo "
                                            <option value=\"";
                // line 171
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 174
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 180
        echo (isset($context["entry_settled_status"]) ? $context["entry_settled_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_settled_status_id\" class=\"form-control\">

                                    ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 185
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_settled_status_id"]) ? $context["payment_kingspays_entry_settled_status_id"] : null))) {
                // line 186
                echo "
                                            <option value=\"";
                // line 187
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 190
                echo "
                                            <option value=\"";
                // line 191
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 194
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 200
        echo (isset($context["entry_refunded_status"]) ? $context["entry_refunded_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_refunded_status_id\" class=\"form-control\">

                                    ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 205
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_refunded_status_id"]) ? $context["payment_kingspays_refunded_status_id"] : null))) {
                // line 206
                echo "
                                            <option value=\"";
                // line 207
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 210
                echo "
                                            <option value=\"";
                // line 211
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 214
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 215
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 220
        echo (isset($context["entry_partially_refunded_status"]) ? $context["entry_partially_refunded_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_partially_refunded_status_id\" class=\"form-control\">

                                    ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 225
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_partially_refunded_status_id"]) ? $context["payment_kingspays_entry_partially_refunded_status_id"] : null))) {
                // line 226
                echo "
                                            <option value=\"";
                // line 227
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 230
                echo "
                                            <option value=\"";
                // line 231
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 234
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 240
        echo (isset($context["entry_charged_back_status"]) ? $context["entry_charged_back_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_charged_back_status_id\" class=\"form-control\">

                                    ";
        // line 244
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 245
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_charged_back_status_id"]) ? $context["payment_kingspays_entry_charged_back_status_id"] : null))) {
                // line 246
                echo "
                                            <option value=\"";
                // line 247
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 250
                echo "
                                            <option value=\"";
                // line 251
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 254
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 260
        echo (isset($context["entry_information_requested_status"]) ? $context["entry_information_requested_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_information_requested_status_id\" class=\"form-control\">

                                    ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 265
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_information_requested_status_id"]) ? $context["payment_kingspays_entry_information_requested_status_id"] : null))) {
                // line 266
                echo "
                                            <option value=\"";
                // line 267
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 270
                echo "
                                            <option value=\"";
                // line 271
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 274
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 275
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 280
        echo (isset($context["entry_information_supplied_status"]) ? $context["entry_information_supplied_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_information_supplied_status_id\" class=\"form-control\">

                                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 285
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_information_supplied_status_id"]) ? $context["payment_kingspays_entry_information_supplied_status_id"] : null))) {
                // line 286
                echo "
                                            <option value=\"";
                // line 287
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 290
                echo "
                                            <option value=\"";
                // line 291
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 294
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"col-sm-2 control-label\">";
        // line 300
        echo (isset($context["entry_chargeback_reversed_status"]) ? $context["entry_chargeback_reversed_status"] : null);
        echo "</label>
                            <div class=\"col-sm-10\">
                                <select name=\"payment_kingspays_entry_chargeback_reversed_status_id\" class=\"form-control\">

                                    ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 305
            echo "                                        ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_kingspays_entry_chargeback_reversed_status_id"]) ? $context["payment_kingspays_entry_chargeback_reversed_status_id"] : null))) {
                // line 306
                echo "
                                            <option value=\"";
                // line 307
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            } else {
                // line 310
                echo "
                                            <option value=\"";
                // line 311
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>

                                        ";
            }
            // line 314
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 315
        echo "
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
";
        // line 325
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/payment/kingspays.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  798 => 325,  786 => 315,  780 => 314,  772 => 311,  769 => 310,  761 => 307,  758 => 306,  755 => 305,  751 => 304,  744 => 300,  737 => 295,  731 => 294,  723 => 291,  720 => 290,  712 => 287,  709 => 286,  706 => 285,  702 => 284,  695 => 280,  688 => 275,  682 => 274,  674 => 271,  671 => 270,  663 => 267,  660 => 266,  657 => 265,  653 => 264,  646 => 260,  639 => 255,  633 => 254,  625 => 251,  622 => 250,  614 => 247,  611 => 246,  608 => 245,  604 => 244,  597 => 240,  590 => 235,  584 => 234,  576 => 231,  573 => 230,  565 => 227,  562 => 226,  559 => 225,  555 => 224,  548 => 220,  541 => 215,  535 => 214,  527 => 211,  524 => 210,  516 => 207,  513 => 206,  510 => 205,  506 => 204,  499 => 200,  492 => 195,  486 => 194,  478 => 191,  475 => 190,  467 => 187,  464 => 186,  461 => 185,  457 => 184,  450 => 180,  443 => 175,  437 => 174,  429 => 171,  426 => 170,  418 => 167,  415 => 166,  412 => 165,  408 => 164,  401 => 160,  394 => 155,  388 => 154,  380 => 151,  377 => 150,  369 => 147,  366 => 146,  363 => 145,  359 => 144,  352 => 140,  341 => 134,  336 => 132,  329 => 127,  323 => 124,  319 => 123,  316 => 122,  310 => 119,  306 => 118,  303 => 117,  301 => 116,  294 => 112,  286 => 106,  280 => 105,  272 => 102,  269 => 101,  261 => 98,  258 => 97,  255 => 96,  251 => 95,  246 => 93,  240 => 90,  233 => 85,  227 => 84,  219 => 82,  211 => 80,  208 => 79,  204 => 78,  195 => 74,  188 => 70,  182 => 69,  177 => 67,  169 => 61,  163 => 58,  159 => 57,  156 => 56,  150 => 53,  146 => 52,  143 => 51,  141 => 50,  134 => 46,  128 => 42,  122 => 41,  120 => 40,  114 => 39,  109 => 37,  104 => 34,  98 => 33,  96 => 32,  90 => 31,  85 => 29,  77 => 24,  73 => 23,  68 => 21,  60 => 16,  54 => 15,  50 => 14,  42 => 8,  31 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* */
/* <div id="content">*/
/*     <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* */
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/* */
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1><i class="fa fa-credit-card"></i> {{ heading_title }}</h1>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         <div class="panel-body">*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*                 <ul class="nav nav-tabs">*/
/*                     <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_settings }}</a></li>*/
/*                     <li><a href="#tab-order-status" data-toggle="tab">{{ tab_order_status }}</a></li>*/
/*                 </ul>*/
/*                 <div class="tab-content">*/
/*                     <div class="tab-pane active" id="tab-general">*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-service-key">{{ entry_service_key }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_kingspays_production_secret_key" value="{{ payment_kingspays_production_secret_key }}" placeholder="{{ entry_service_key }}" id="input-service-key" class="form-control" />*/
/*                                 {% if error_service_key %}*/
/*                                     <div class="text-danger">{{ error_service_key }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="col-sm-2 control-label" for="input-client-key">{{ entry_client_key }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_kingspays_test_secret_key" value="{{ payment_kingspays_test_secret_key }}" placeholder="{{ entry_client_key }}" id="input-client-key" class="form-control" />*/
/*                                 {% if error_client_key %}*/
/*                                     <div class="text-danger">{{ error_client_key }}</div>*/
/*                                 {% endif %} </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-card">{{ test_payout }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_test_payout" id="input-card" class="form-control">*/
/* */
/*                                     {% if payment_kingspays_test_payout %}*/
/* */
/*                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                         <option value="0">{{ text_disabled }}</option>*/
/* */
/*                                     {% else %}*/
/* */
/*                                         <option value="1">{{ text_enabled }}</option>*/
/*                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* */
/*                                     {% endif %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-total">{{ entry_total }} </label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_kingspays_total" value="{{ payment_kingspays_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control" />*/
/*                                 <span class="help-block">{{ help_total }}</span> </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/* */
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_currency" id="input-currency" class="form-control">*/
/*                                     {% for currency in currencies %}*/
/*                                         {% if currency.code == payment_kingspays_currency %}*/
/*                                             <option value="{{ currency.code }}" selected="selected">{{ currency.title }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="{{ currency.code }}">{{ currency.title }}</option>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                                     <option value="0">{{ text_all_zones }}</option>*/
/* */
/*                                     {% for geo_zone in geo_zones %}*/
/*                                         {% if geo_zone.geo_zone_id == payment_kingspays_geo_zone_id %}*/
/* */
/*                                             <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_status" id="input-status" class="form-control">*/
/* */
/*                                     {% if payment_kingspays_status %}*/
/* */
/*                                         <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                                         <option value="0">{{ text_disabled }}</option>*/
/* */
/*                                     {% else %}*/
/* */
/*                                         <option value="1">{{ text_enabled }}</option>*/
/*                                         <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* */
/*                                     {% endif %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <input type="text" name="payment_kingspays_sort_order" value="{{ payment_kingspays_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="tab-pane" id="tab-order-status">*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_success_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_success_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_success_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_failed_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_failed_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_failed_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_settled_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_settled_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_settled_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_refunded_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_refunded_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_refunded_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_partially_refunded_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_partially_refunded_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_partially_refunded_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_charged_back_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_charged_back_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_charged_back_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_information_requested_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_information_requested_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_information_requested_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_information_supplied_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_information_supplied_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_information_supplied_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="col-sm-2 control-label">{{ entry_chargeback_reversed_status }}</label>*/
/*                             <div class="col-sm-10">*/
/*                                 <select name="payment_kingspays_entry_chargeback_reversed_status_id" class="form-control">*/
/* */
/*                                     {% for order_status in order_statuses %}*/
/*                                         {% if order_status.order_status_id == payment_kingspays_entry_chargeback_reversed_status_id %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/* */
/*                                         {% else %}*/
/* */
/*                                             <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/* */
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/* */
/*                                 </select>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
