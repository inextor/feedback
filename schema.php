<?php
namespace APP;
use \akou\DBTable;
class address extends \akou\DBTable
{
	var $address;
	var $city;
	var $country;
	var $created;
	var $email;
	var $id;
	var $lat;
	var $lng;
	var $name;
	var $note;
	var $phone;
	var $rfc;
	var $sat_regimen_capital;
	var $sat_regimen_fiscal;
	var $state;
	var $status;
	var $suburb;
	var $type;
	var $updated;
	var $user_id;
	var $zipcode;
}
class attachment extends \akou\DBTable
{
	var $content_type;
	var $created;
	var $file_type_id;
	var $filename;
	var $height;
	var $id;
	var $original_filename;
	var $size;
	var $status;
	var $updated;
	var $uploader_user_id;
	var $width;
}
class bank_account extends \akou\DBTable
{
	var $account;
	var $alias;
	var $bank;
	var $bank_rfc;
	var $created;
	var $currency;
	var $email;
	var $id;
	var $is_a_payment_method;
	var $name;
	var $updated;
	var $user_id;
}
class bank_movement extends \akou\DBTable
{
	var $amount_received;
	var $bank_account_id;
	var $card_ending;
	var $client_user_id;
	var $created;
	var $currency_id;
	var $id;
	var $invoice_attachment_id;
	var $note;
	var $origin_bank_name;
	var $paid_date;
	var $payment_id;
	var $provider_user_id;
	var $receipt_attachment_id;
	var $received_by_user_id;
	var $reference;
	var $status;
	var $total;
	var $transaction_type;
	var $type;
	var $updated;
}
class bank_movement_bill extends \akou\DBTable
{
	var $amount;
	var $bank_movement_id;
	var $bill_id;
	var $created;
	var $currency_amount;
	var $currency_id;
	var $exchange_rate;
	var $id;
	var $updated;
}
class bank_movement_order extends \akou\DBTable
{
	var $amount;
	var $bank_movement_id;
	var $created;
	var $created_by_user_id;
	var $currency_amount;
	var $currency_id;
	var $exchange_rate;
	var $id;
	var $order_id;
	var $status;
	var $updated;
	var $updated_by_user_id;
}
class bill extends \akou\DBTable
{
	var $accepted_status;
	var $amount_paid;
	var $aproved_by_user_id;
	var $bank_account_id;
	var $created;
	var $currency_id;
	var $due_date;
	var $folio;
	var $id;
	var $invoice_attachment_id;
	var $name;
	var $note;
	var $organization_id;
	var $paid_by_user_id;
	var $paid_date;
	var $paid_status;
	var $paid_to_bank_account_id;
	var $pdf_attachment_id;
	var $provider_user_id;
	var $purchase_id;
	var $receipt_attachment_id;
	var $status;
	var $store_id;
	var $total;
	var $updated;
}
class billing_data extends \akou\DBTable
{
	var $address;
	var $city;
	var $created;
	var $created_by_user_id;
	var $id;
	var $password;
	var $porcentaje_ISR;
	var $precision;
	var $razon_social;
	var $regimen_capital;
	var $regimen_fiscal;
	var $remaining_credits;
	var $rfc;
	var $state;
	var $updated;
	var $updated_by_user_id;
	var $usuario;
	var $zipcode;
}
class box extends \akou\DBTable
{
	var $created;
	var $id;
	var $production_item_id;
	var $serial_number_range_end;
	var $serial_number_range_start;
	var $status;
	var $store_id;
	var $type_item_id;
	var $updated;
}
class box_content extends \akou\DBTable
{
	var $box_id;
	var $id;
	var $initial_qty;
	var $item_id;
	var $qty;
	var $serial_number_range_end;
	var $serial_number_range_start;
}
class brand extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $description;
	var $id;
	var $image_id;
	var $name;
	var $updated;
	var $updated_by_user_id;
}
class cart_item extends \akou\DBTable
{
	var $created;
	var $id;
	var $item_id;
	var $qty;
	var $session_id;
	var $type;
	var $updated;
	var $user_id;
}
class cash_close extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $end;
	var $id;
	var $since;
	var $start;
	var $updated;
}
class cashier_withdrawal extends \akou\DBTable
{
	var $amount;
	var $created;
	var $currency_id;
	var $id;
	var $store_id;
	var $user_id;
}
class category extends \akou\DBTable
{
	var $background;
	var $code;
	var $created;
	var $created_by_user_id;
	var $default_clave_prod_serv;
	var $display_status;
	var $id;
	var $image_id;
	var $image_style;
	var $name;
	var $shadow_color;
	var $sort_weight;
	var $text_color;
	var $text_style;
	var $type;
	var $updated;
	var $updated_by_user_id;
}
class category_store extends \akou\DBTable
{
	var $category_id;
	var $created;
	var $created_by_user_id;
	var $id;
	var $pos_preference;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class category_tree extends \akou\DBTable
{
	var $child_category_id;
	var $created;
	var $created_by_user_id;
	var $depth;
	var $id;
	var $parent_category_id;
	var $path;
	var $updated;
	var $updated_by_user_id;
}
class category_type extends \akou\DBTable
{
	var $TYPE;
	var $id;
}
class commanda extends \akou\DBTable
{
	var $commanda_type_id;
	var $has_sound;
	var $id;
	var $name;
	var $order_display_preferences;
	var $print_preferences;
	var $store_id;
}
class commanda_type extends \akou\DBTable
{
	var $created;
	var $id;
	var $name;
	var $updated;
}
class currency extends \akou\DBTable
{
	var $id;
	var $name;
}
class currency_rate extends \akou\DBTable
{
	var $currency_id;
	var $id;
	var $rate;
	var $store_id;
}
class feedback extends \akou\DBTable
{
	var $created;
	var $created_by_user;
	var $id;
	var $name;
	var $updated;
	var $updated_by_user_id;
}
class feedback_question extends \akou\DBTable
{
	var $created;
	var $description;
	var $feedback_section_id;
	var $id;
	var $label_best;
	var $label_worst;
	var $n;
	var $post_question;
	var $question;
	var $type;
	var $updated;
	var $values;
}
class feedback_response extends \akou\DBTable
{
	var $id;
	var $session_hash;
	var $ip;
	var $gift_code;
    var $gift_product;
	var $redeemed_timestamp;
	var $response;
	var $created;
}
class feedback_section extends \akou\DBTable
{
	var $created;
	var $description;
	var $feedback_id;
	var $id;
	var $is_table;
	var $name;
	var $values;
}
class file_type extends \akou\DBTable
{
	var $content_type;
	var $created;
	var $extension;
	var $id;
	var $image_id;
	var $is_image;
	var $name;
	var $updated;
}
class fund extends \akou\DBTable
{
	var $amount;
	var $cashier_hour;
	var $created;
	var $created_by_user_id;
	var $currency_id;
	var $id;
	var $store_id;
	var $updated;
}
class image extends \akou\DBTable
{
	var $content_type;
	var $created;
	var $filename;
	var $height;
	var $id;
	var $is_private;
	var $original_filename;
	var $size;
	var $uploader_user_id;
	var $width;
}
class ingredient extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $name;
	var $order_type;
	var $qty;
	var $stock_item_id;
	var $updated;
	var $updated_by_user_id;
}
class item extends \akou\DBTable
{
	var $applicable_tax;
	var $availability_type;
	var $background;
	var $brand_id;
	var $category_id;
	var $clave_sat;
	var $code;
	var $commanda_type_id;
	var $commission;
	var $commission_currency_id;
	var $commission_type;
	var $created;
	var $created_by_user_id;
	var $currency_id;
	var $description;
	var $extra_name;
	var $has_serial_number;
	var $id;
	var $image_id;
	var $image_style;
	var $measurement_unit;
	var $name;
	var $note_required;
	var $on_sale;
	var $partial_sale;
	var $product_id;
	var $provider_user_id;
	var $reference_price;
	var $return_action;
	var $shadow_color;
	var $sort_weight;
	var $status;
	var $text_color;
	var $text_style;
	var $unidad_medida_sat_id;
	var $updated;
	var $updated_by_user_id;
}
class item_attribute extends \akou\DBTable
{
	var $id;
	var $item_id;
	var $name;
	var $value;
}
class item_exception extends \akou\DBTable
{
	var $created;
	var $description;
	var $id;
	var $item_id;
	var $list_as_exception;
	var $order_type;
	var $stock_item_id;
	var $stock_qty;
	var $updated;
}
class item_option extends \akou\DBTable
{
	var $id;
	var $included_extra_qty;
	var $included_options;
	var $item_id;
	var $max_extra_qty;
	var $max_options;
	var $min_options;
	var $name;
	var $status;
}
class item_option_value extends \akou\DBTable
{
	var $charge_type;
	var $extra_price;
	var $id;
	var $item_id;
	var $item_option_id;
	var $max_extra_qty;
	var $portion_amount;
	var $price;
	var $status;
}
class item_points extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $points_percent;
	var $updated;
	var $updated_by_user_id;
}
class item_recipe extends \akou\DBTable
{
	var $created;
	var $id;
	var $item_id;
	var $parent_item_id;
	var $portion_qty;
	var $print_on_recipe;
	var $updated;
}
class item_store extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $pos_preference;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class keyboard_shortcut extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $key_combination;
	var $name;
	var $updated;
	var $updated_by_user_id;
}
class merma extends \akou\DBTable
{
	var $box_id;
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $note;
	var $price;
	var $qty;
	var $shipping_id;
	var $store_id;
	var $updated;
}
class notification_token extends \akou\DBTable
{
	var $created;
	var $id;
	var $provider;
	var $status;
	var $token;
	var $updated;
	var $user_id;
}
class offer extends \akou\DBTable
{
	var $category_id;
	var $coupon_code;
	var $created;
	var $created_by_user_id;
	var $description;
	var $discount;
	var $gift_item_id;
	var $hour_end;
	var $hour_start;
	var $id;
	var $image_id;
	var $is_cumulative;
	var $is_valid_friday;
	var $is_valid_monday;
	var $is_valid_saturday;
	var $is_valid_sunday;
	var $is_valid_thursday;
	var $is_valid_tuesday;
	var $is_valid_wednesday;
	var $item_id;
	var $m;
	var $n;
	var $name;
	var $percent_qty;
	var $price;
	var $status;
	var $store_id;
	var $type;
	var $updated;
	var $updated_by_user_id;
	var $valid_from;
	var $valid_thru;
}
class order extends \akou\DBTable
{
	var $address;
	var $amount_paid;
	var $ares;
	var $authorized_by;
	var $billing_address_id;
	var $billing_data_id;
	var $cancellation_reason;
	var $cancellation_timestamp;
	var $cancelled_by_user_id;
	var $cashier_user_id;
	var $city;
	var $client_name;
	var $client_user_id;
	var $closed_timestamp;
	var $created;
	var $currency_id;
	var $delivery_status;
	var $delivery_user_id;
	var $discount;
	var $discount_calculated;
	var $facturacion_code;
	var $facturado;
	var $guests;
	var $id;
	var $lat;
	var $lng;
	var $marked_for_billing;
	var $note;
	var $paid_status;
	var $paid_timetamp;
	var $price_type_id;
	var $quote_id;
	var $sat_codigo_postal;
	var $sat_domicilio_fiscal_receptor;
	var $sat_forma_pago;
	var $sat_ieps;
	var $sat_isr;
	var $sat_pdf_attachment_id;
	var $sat_razon_social;
	var $sat_receptor_email;
	var $sat_receptor_rfc;
	var $sat_regimen_capital_receptor;
	var $sat_regimen_fiscal_receptor;
	var $sat_serie;
	var $sat_serie_consecutive;
	var $sat_uso_cfdi;
	var $sat_xml_attachment_id;
	var $service_type;
	var $shipping_address_id;
	var $shipping_cost;
	var $state;
	var $status;
	var $store_consecutive;
	var $store_id;
	var $subtotal;
	var $suburb;
	var $sync_id;
	var $system_activated;
	var $table_id;
	var $tag;
	var $tax;
	var $tax_percent;
	var $total;
	var $updated;
	var $version_created;
	var $version_updated;
}
class order_item extends \akou\DBTable
{
	var $commanda_id;
	var $commanda_status;
	var $created;
	var $created_by_user_id;
	var $delivered_qty;
	var $delivery_status;
	var $discount;
	var $discount_percent;
	var $exceptions;
	var $has_separator;
	var $id;
	var $id_payment;
	var $is_free_of_charge;
	var $is_item_extra;
	var $item_extra_id;
	var $item_group;
	var $item_id;
	var $item_option_id;
	var $item_option_qty;
	var $note;
	var $offer_id;
	var $order_id;
	var $original_unitary_price;
	var $paid_qty;
	var $preparation_status;
	var $price_id;
	var $qty;
	var $return_required;
	var $status;
	var $stock_status;
	var $subtotal;
	var $system_preparation_ended;
	var $system_preparation_started;
	var $tax;
	var $tax_included;
	var $total;
	var $type;
	var $unitary_price;
	var $unitary_price_meta;
	var $updated;
	var $updated_by_user_id;
}
class order_item_cost extends \akou\DBTable
{
	var $child_items_cost;
	var $cost;
	var $created;
	var $id;
	var $ingredients_cost;
	var $item_cost;
	var $item_id;
	var $name;
	var $order_id;
	var $order_item_id;
	var $qty;
	var $sale_profit;
	var $sale_total;
	var $store_id;
	var $total;
}
class order_item_exception extends \akou\DBTable
{
	var $created;
	var $description;
	var $id;
	var $item_exception_id;
	var $order_item_id;
	var $stock_item_id;
	var $updated;
}
class order_item_serial extends \akou\DBTable
{
	var $id;
	var $item_id;
	var $order_item_id;
	var $serial_id;
}
class order_offer extends \akou\DBTable
{
	var $amount;
	var $coupon_code;
	var $created;
	var $created_by_user_id;
	var $id;
	var $offer_id;
	var $order_id;
	var $updated;
	var $updated_by_user_id;
}
class pallet extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $production_item_id;
	var $store_id;
	var $updated;
}
class pallet_content extends \akou\DBTable
{
	var $box_id;
	var $created;
	var $created_by_user_id;
	var $id;
	var $pallet_id;
	var $status;
	var $updated;
	var $updated_by_user_id;
}
class payment extends \akou\DBTable
{
	var $change_amount;
	var $concept;
	var $created;
	var $created_by_user_id;
	var $currency_id;
	var $exchange_rate;
	var $facturado;
	var $id;
	var $paid_by_user_id;
	var $payment_amount;
	var $received_amount;
	var $sat_pdf_attachment_id;
	var $sat_uuid;
	var $sat_xml_attachment_id;
	var $status;
	var $store_id;
	var $sync_id;
	var $tag;
	var $type;
	var $updated;
}
class paypal_access_token extends \akou\DBTable
{
	var $access_token;
	var $created;
	var $expires;
	var $id;
	var $raw_response;
}
class paypal_order extends \akou\DBTable
{
	var $buyer_user_id;
	var $create_response;
	var $created;
	var $id;
	var $log;
	var $order_id;
	var $status;
}
class points_log extends \akou\DBTable
{
	var $client_user_id;
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $order_id;
	var $points;
	var $updated;
}
class post extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $images_ids;
	var $post;
	var $title;
	var $updated;
	var $updated_by_user_id;
}
class preferences extends \akou\DBTable
{
	var $ask_for_guests_number;
	var $background_image_id;
	var $background_image_size;
	var $btn_primary_bg_color;
	var $btn_primary_bg_color_hover;
	var $btn_primary_border_color;
	var $btn_primary_border_color_hover;
	var $btn_primary_border_width;
	var $btn_primary_text_color;
	var $btn_primary_text_color_hover;
	var $btn_secondary_bg_color;
	var $btn_secondary_bg_color_hover;
	var $btn_secondary_border_color;
	var $btn_secondary_border_color_hover;
	var $btn_secondary_border_width;
	var $btn_secondary_text_color;
	var $btn_secondary_text_color_hover;
	var $button_border_radius;
	var $button_style;
	var $card_background_color;
	var $card_background_image_id;
	var $card_background_opacity;
	var $card_border_color;
	var $card_border_radius;
	var $charts_colors;
	var $chat_upload_attachment_image_id;
	var $chat_upload_image_id;
	var $created;
	var $currency_price_preference;
	var $default_cash_close_receipt;
	var $default_file_logo_image_id;
	var $default_input_type;
	var $default_pos_availability_type;
	var $default_price_type_id;
	var $default_print_receipt;
	var $default_product_image_id;
	var $default_return_action;
	var $default_ticket_format;
	var $default_ticket_image_id;
	var $default_user_logo_image_id;
	var $display_categories_on_items;
	var $header_background_color;
	var $header_text_color;
	var $id;
	var $item_selected_background_color;
	var $item_selected_text_color;
	var $link_color;
	var $link_hover;
	var $login_background_image_id;
	var $login_background_image_size;
	var $login_image_id;
	var $logo_image_id;
	var $menu_background_color;
	var $menu_background_image_id;
	var $menu_background_image_size;
	var $menu_background_type;
	var $menu_color_opacity;
	var $menu_icon_color;
	var $menu_text_color;
	var $menu_title_color;
	var $name;
	var $pv_bar_background_color;
	var $pv_bar_text_color;
	var $pv_bar_total_color;
	var $pv_show_all_categories;
	var $pv_show_orders;
	var $radius_style;
	var $submenu_background_color;
	var $submenu_color_opacity;
	var $submenu_icon_color;
	var $submenu_text_color;
	var $text_color;
	var $titles_color;
	var $touch_size_button;
	var $touch_text_color;
	var $touch_text_shadow_color;
	var $update_prices_on_purchases;
	var $updated;
}
class price extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $currency_id;
	var $id;
	var $item_id;
	var $percent;
	var $price;
	var $price_list_id;
	var $price_type_id;
	var $tax_included;
	var $updated;
	var $updated_by_user_id;
}
class price_list extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $name;
	var $updated;
	var $updated_by_user_id;
}
class price_log extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $new_percent;
	var $new_price;
	var $old_percent;
	var $old_price;
	var $old_tax_included;
	var $price_list_id;
	var $price_type_id;
	var $tax_included;
	var $updated;
}
class price_type extends \akou\DBTable
{
	var $created;
	var $id;
	var $model;
	var $name;
	var $show_bill_code;
	var $sort_priority;
	var $tax_model;
	var $updated;
}
class product extends \akou\DBTable
{
	var $id;
	var $name;
}
class purchase extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $order_id;
	var $provider_name;
	var $provider_user_id;
	var $status;
	var $stock_status;
	var $store_id;
	var $total;
	var $updated;
	var $updated_by_user_id;
}
class purchase_detail extends \akou\DBTable
{
	var $created;
	var $description;
	var $id;
	var $item_id;
	var $purchase_id;
	var $qty;
	var $serial_number;
	var $status;
	var $stock_status;
	var $total;
	var $unitary_price;
	var $updated;
}
class push_notification extends \akou\DBTable
{
	var $app_path;
	var $body;
	var $created;
	var $icon_image_id;
	var $id;
	var $link;
	var $object_id;
	var $object_type;
	var $priority;
	var $push_notification_id;
	var $read_status;
	var $response;
	var $sent_status;
	var $title;
	var $updated;
	var $user_id;
}
class quote extends \akou\DBTable
{
	var $approved_status;
	var $approved_time;
	var $attachment_id;
	var $client_user_id;
	var $created;
	var $created_by_user_id;
	var $email;
	var $id;
	var $name;
	var $phone;
	var $price_type_id;
	var $store_id;
	var $sync_id;
	var $tax_percent;
	var $updated;
	var $valid_until;
}
class quote_item extends \akou\DBTable
{
	var $created;
	var $discount;
	var $discount_percent;
	var $id;
	var $item_id;
	var $original_unitary_price;
	var $provider_price;
	var $qty;
	var $quote_id;
	var $status;
	var $subtotal;
	var $tax;
	var $tax_included;
	var $total;
	var $unitary_price;
	var $updated;
}
class requisition extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $date;
	var $id;
	var $requested_to_store_id;
	var $required_by_store_id;
	var $status;
	var $updated;
	var $updated_by_user_id;
}
class requisition_item extends \akou\DBTable
{
	var $aproved_status;
	var $created;
	var $id;
	var $item_id;
	var $qty;
	var $requisition_id;
	var $status;
	var $updated;
}
class returned_item extends \akou\DBTable
{
	var $created;
	var $id;
	var $item_id;
	var $returned_qty;
	var $returns_id;
	var $total;
	var $updated;
}
class returns extends \akou\DBTable
{
	var $amount_paid;
	var $cashier_user_id;
	var $client_user_id;
	var $code;
	var $created;
	var $id;
	var $note;
	var $order_id;
	var $store_id;
	var $total;
	var $updated;
}
class sat_factura extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $order_id;
	var $pdf_attachment_id;
	var $updated;
	var $updated_by_user_id;
	var $uuid;
	var $xml_attachment_id;
}
class sat_response extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $id_order;
	var $request;
	var $response;
	var $updated;
	var $updated_by_user_id;
}
class serial extends \akou\DBTable
{
	var $additional_data;
	var $created;
	var $created_by_user_id;
	var $description;
	var $id;
	var $item_id;
	var $serial_number;
	var $status;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class serial_image extends \akou\DBTable
{
	var $created;
	var $description;
	var $id;
	var $image_id;
	var $serial_id;
	var $updated;
}
class serie_counter extends \akou\DBTable
{
	var $counter;
	var $created;
	var $id;
	var $updated;
}
class session extends \akou\DBTable
{
	var $created;
	var $id;
	var $status;
	var $updated;
	var $user_id;
}
class shipping extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $date;
	var $delivery_timestamp;
	var $from_store_id;
	var $id;
	var $note;
	var $purchase_id;
	var $received_by_user_id;
	var $requisition_id;
	var $shipping_company;
	var $shipping_guide;
	var $status;
	var $to_store_id;
	var $updated;
	var $updated_by_user_id;
}
class shipping_item extends \akou\DBTable
{
	var $box_id;
	var $created;
	var $id;
	var $item_id;
	var $pallet_id;
	var $qty;
	var $received_qty;
	var $requisition_item_id;
	var $serial_number;
	var $shipping_id;
	var $shrinkage_qty;
	var $updated;
}
class stock_alert extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $max;
	var $min;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class stock_record extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $description;
	var $id;
	var $is_current;
	var $item_id;
	var $movement_qty;
	var $movement_type;
	var $order_item_id;
	var $previous_qty;
	var $production_item_id;
	var $purchase_detail_id;
	var $qty;
	var $serial_number_record_id;
	var $shipping_item_id;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class stocktake extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $name;
	var $status;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class stocktake_item extends \akou\DBTable
{
	var $box_content_id;
	var $box_id;
	var $created;
	var $created_by_user_id;
	var $creation_qty;
	var $current_qty;
	var $id;
	var $item_id;
	var $pallet_id;
	var $stocktake_id;
	var $updated;
	var $updated_by_user_id;
}
class stocktake_scan extends \akou\DBTable
{
	var $box_content_id;
	var $box_id;
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $pallet_id;
	var $qty;
	var $stocktake_id;
	var $updated;
	var $updated_by_user_id;
}
class storage extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $section;
	var $shelf;
	var $sort_order;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class storage_item extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $id;
	var $item_id;
	var $storage_id;
	var $updated;
	var $updated_by_user_id;
}
class store extends \akou\DBTable
{
	var $address;
	var $autofacturacion_day_limit;
	var $autofacturacion_enabled;
	var $autofacturacion_settings;
	var $business_name;
	var $city;
	var $client_user_id;
	var $created;
	var $created_by_user_id;
	var $default_billing_data_id;
	var $default_claveprodserv;
	var $default_currency_id;
	var $default_sat_item_name;
	var $default_sat_serie;
	var $electronic_transfer_percent_fee;
	var $exchange_rate;
	var $id;
	var $image_id;
	var $lat;
	var $lng;
	var $max_cash_amount;
	var $modo_facturacion;
	var $name;
	var $paypal_email;
	var $phone;
	var $pos_category_preferences;
	var $price_list_id;
	var $printer_ticket_config;
	var $qr_size;
	var $rfc;
	var $show_facturacion_qr;
	var $state;
	var $status;
	var $suggested_tip;
	var $tax_percent;
	var $ticket_footer_text;
	var $ticket_image_id;
	var $updated;
	var $updated_by_user_id;
	var $zipcode;
}
class store_bank_account extends \akou\DBTable
{
	var $bank_account_id;
	var $created;
	var $id;
	var $name;
	var $store_id;
	var $updated;
}
class store_sale_report extends \akou\DBTable
{
	var $amount_description;
	var $ares_order_ids;
	var $average_order_amount;
	var $created;
	var $created_by_user_id;
	var $date;
	var $discounts;
	var $end;
	var $expense_payments;
	var $id;
	var $income_payments;
	var $localtime_end;
	var $localtime_start;
	var $order_count;
	var $order_ids;
	var $start;
	var $store_consecutive;
	var $store_id;
	var $total_sales;
	var $updated;
	var $updated_by_user_id;
}
class table extends \akou\DBTable
{
	var $attended_by_user_id;
	var $capacity;
	var $clean_status;
	var $created;
	var $created_by_user_id;
	var $id;
	var $is_dirty;
	var $name;
	var $order_id;
	var $ordered_status;
	var $status;
	var $store_id;
	var $updated;
	var $updated_by_user_id;
}
class unidad_medida_sat extends \akou\DBTable
{
	var $descripcion;
	var $id;
	var $nombre;
}
class user extends \akou\DBTable
{
	var $created;
	var $created_by_user_id;
	var $credit_days;
	var $credit_limit;
	var $default_billing_address_id;
	var $default_shipping_address_id;
	var $email;
	var $id;
	var $image_id;
	var $lat;
	var $lng;
	var $name;
	var $password;
	var $phone;
	var $platform_client_id;
	var $points;
	var $price_type_id;
	var $status;
	var $store_id;
	var $type;
	var $updated;
	var $updated_by_user_id;
	var $username;
}
class user_permission extends \akou\DBTable
{
	var $add_bills;
	var $add_commandas;
	var $add_items;
	var $add_marbetes;
	var $add_payments;
	var $add_providers;
	var $add_purchases;
	var $add_requisition;
	var $add_stock;
	var $add_user;
	var $advanced_order_search;
	var $approve_bill_payments;
	var $asign_marbetes;
	var $caldos;
	var $cancel_closed_orders;
	var $cancel_ordered_item;
	var $change_client_prices;
	var $created;
	var $created_by_user_id;
	var $currency_rates;
	var $discounts;
	var $edit_billing_data;
	var $fullfill_orders;
	var $global_add_stock;
	var $global_bills;
	var $global_order_delivery;
	var $global_pos;
	var $global_prices;
	var $global_purchases;
	var $global_receive_shipping;
	var $global_requisition;
	var $global_send_shipping;
	var $global_stats;
	var $hades;
	var $is_provider;
	var $open_cashier_box_anytime;
	var $order_delivery;
	var $pay_bills;
	var $pos;
	var $preferences;
	var $price_types;
	var $print_pre_receipt;
	var $production;
	var $purchases;
	var $pv_returns;
	var $quotes;
	var $receive_shipping;
	var $reports;
	var $send_shipping;
	var $stocktake;
	var $store_prices;
	var $updated;
	var $updated_by_user_id;
	var $user_id;
	var $view_commandas;
	var $view_stock;
}
