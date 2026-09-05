<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

//do_action( 'woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email );

?>


<?php
if ($sent_to_admin) {
	$before = '<a class="link" href="' . esc_url($order->get_edit_order_url()) . '" style="text-decoration:none;color:#ffffff;display:block;line-height: 43px">';
	$after  = '</a>';
} else {
	$before = '<a class="link" href="' . esc_url($order->get_view_order_url()) . '" style="text-decoration:none;color:#ffffff;display:block;line-height: 43px">';
	$after  = '';
}

// wp_kses_post($before . sprintf(__('[Order #%s]', 'woocommerce') . $after . ' (<time datetime="%s">%s</time>)', $order->get_order_number(), $order->get_date_created()->format('c'), ));
?>






<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td align="center">
                            <table class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td class="columnSingleLeft" align="center">
                                  <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                      <td style="padding: 0px 20px 30px; text-align: left;">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                          <tr>
                                            <td style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: uppercase; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold;">Order Number:</span><br>
                                              <a class="p-text" href="#" target="_blank" style="font-family: 'Inter', Arial, Helvetica, sans-serif; text-decoration: none; color: #ffffff;" tabindex="-1"><?php echo $order->get_order_number(); ?></a>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="columnSingleLeft" align="center">
                                  <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                      <td style="padding: 0px 20px 30px; text-align: left;">
                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                          <tr>
                                            <td style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: uppercase; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold;">Order Date:</span><br>
                                              <span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif;"><?php echo wc_format_datetime($order->get_date_created()); ?></span>  </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                            
                            
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
            
                
                <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <table bgcolor="" role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td style="padding: 30px 5px 35px;" align="center">
                            <table role="presentation" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td class="head-text" style="color: #329DF8; width: 640px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 28px; line-height: 32px; font-weight: bold; text-transform: none; mso-line-height-rule: exactly;" align="center">Items Ordered </td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <div style="display: none;"> </div>
                      <table bgcolor="" role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">

                        <!-- Start AMPScript -->

                        <!-- End AMPScript -->
                        <tr>
                          <td align="center" style="padding: 20px 0px 0px;">
                            <table class="columnContainer" role="presentation" width="640" cellpadding="0" cellspacing="0" border="0" style="border-bottom: 2px solid #329DF8; padding: 0px;">
                                <!-- Order Item Strt -->
								<?php
									foreach ($order->get_items() as $item_id => $item) :
										$product       = $item->get_product();
										$sku           = '';
										$purchase_note = '';
										$image         = '';

										if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
											continue;
										}

										if (is_object($product)) {
											$sku           = $product->get_sku();
											$purchase_note = $product->get_purchase_note();
											$image         = $product->get_image($image_size);
											$image_id  = $product->get_image_id();
											$image_url = wp_get_attachment_image_url($image_id, 'full');
										}

									?>
                              <tr>
                                <td class="columnSingle" align="center">
                                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                      <td align="center">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                            <td class="">
                                              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                  <td align="center" style="padding: 0px 0px 20px;">
                                                    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                      <tr>
                                                        <td bgcolor="#00041A" class="" align="center" valign="middle" style="width: 320px;">
                                                          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                              <td align="center"> <img src="<?php echo $image_url; ?>" alt="Echo Clog" width="200" style="width: 200px; height: auto; display: block; margin: 0 auto; border: 0;"> </td>
                                                            </tr>
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                                <td class="columnSingle" align="center">
                                  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                      <td align="center">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                            <td class="">
                                              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                  <td align="center" style="padding: 0px 0px 20px;">
                                                    <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                      <tr>
                                                        <td bgcolor="#00041A" class="" align="center" valign="middle" style="width: 320px;">
                                                          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                                            <tr>
                                                              <td align="center" style="padding: 0px 15px 12px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                                  <tr>
                                                                    <td align="center" class="view-ord-btn" style="width: 320px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 22px; line-height: 34px; font-weight: bold; text-transform: uppercase; mso-line-height-rule: exactly; letter-spacing: 0px; text-align: left; color: #ffffff;"><?php

echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));?></td>
                                                                  </tr>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding: 0px 15px 12px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                                  <tr>
                                                                    <td class="p-text" align="center" style="width: 320px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: uppercase; mso-line-height-rule: exactly; letter-spacing: 0px; text-align: left; color: #ffffff;"><span style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; color: #ffffff;">Price:</span> <?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?> </td>
                                                                  </tr>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                            <tr>
                                                              <td align="center" style="padding: 0px 15px 12px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                                  <tr>
                                                                    <td class="p-text" align="center" style="width: 320px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: uppercase; mso-line-height-rule: exactly; letter-spacing: 0px; text-align: left; color: #ffffff;"><span style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; color: #ffffff;"><?php

// SKU.
if ($show_sku && $sku) {
	echo wp_kses_post(' (#' . $sku . ')');
}

// allow other plugins to add additional product information here.
do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

wc_display_item_meta(
	$item,
	array(
		'label_before' => '<strong class="wc-item-meta-label" style="padding-right: 5px; float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
	)
);

// allow other plugins to add additional product information here.
do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);


?>
</span></td>
                                                                  </tr>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                            
                                                            <tr>
                                                              <td align="center" style="padding: 0px 15px 12px;">
                                                                <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                                  <tr>
                                                                    <td class="p-text" align="center" style="width: 320px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: uppercase; mso-line-height-rule: exactly; letter-spacing: 0px; text-align: left; color: #ffffff;"><span style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold;">Quantity:</span> <?php
																$qty          = $item->get_quantity();
																$refunded_qty = $order->get_qty_refunded_for_item($item_id);

																if ($refunded_qty) {
																	$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
																} else {
																	$qty_display = esc_html($qty);
																}
																echo wp_kses_post(apply_filters('woocommerce_email_order_item_quantity', $qty_display, $item));
																?></td>
                                                                  </tr>
                                                                </table>
                                                              </td>
                                                            </tr>
                                                          </table>
                                                        </td>
                                                      </tr>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
							  <?php endforeach; ?>
                              <!-- Order Item End -->
                            </table>


                            <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                                <tr>
                                  <td class="stylingblock-content-wrapper camarker-inner">
                                    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                      <tr>
                                        <td align="center">
                                          <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                            <tr>
                                              <td align="center" style="padding: 15px 20px 0px;">
                                                <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                  <tr>
                                                    <td class="view-ord-btn" align="center" valign="middle" style="width: 560px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 22px; font-weight: bold; text-transform: uppercase; padding: 0px; text-align: left; color: #ffffff; padding: 20px 0px;">Your payment summary </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>
											<?php
									$item_totals = $order->get_order_item_totals();

									if ($item_totals) {
										$i = 0;
										foreach ($item_totals as $total) {
											$i++;
									?>

                                            <tr>
                                              <td align="center" style="padding: 0px 20px 0px;">
                                                <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                  <tr>
                                                    <td class="p-text" align="center" valign="middle" style="width: 280px; border-bottom: 2px solid #55BBFF; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 22px; font-weight: 400; text-transform: uppercase; padding: 0px; text-align: left; color: #ffffff; padding: 10px 0px;"><?php echo $total['label']; ?> </td>
                                                    <td class="p-text" align="center" valign="middle" style="width: 280px; border-bottom: 2px solid #55BBFF; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 22px; font-weight: 400; text-transform: uppercase; padding: 0px; text-align: right; color: #ffffff; padding: 10px 0px;"><?php echo $total['value']; ?> </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>

											<?php
										}
									}
									if ($order->get_customer_note()) {
										?>
							<tr>
                                              <td align="center" style="padding: 0px 20px 0px;">
                                                <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                                  <tr>
                                                    <td class="p-text" align="center" valign="middle" style="width: 280px; border-bottom: 2px solid #55BBFF; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 22px; font-weight: 400; text-transform: uppercase; padding: 0px; text-align: left; color: #ffffff; padding: 10px 0px;"><?php echo 'Note:'; ?> </td>
                                                    <td class="p-text" align="center" valign="middle" style="width: 280px; border-bottom: 2px solid #55BBFF; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 22px; font-weight: 400; text-transform: uppercase; padding: 0px; text-align: right; color: #ffffff; padding: 10px 0px;"><?php echo nl2br(wptexturize($order->get_customer_note())); ?> </td>
                                                  </tr>
                                                </table>
                                              </td>
                                            </tr>




									
									<?php
									}
									?>
                                            
                                            
                                            
                                          </table>
                                        </td>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </table>




                            
                          </td>
                        </tr>
                      </table>


					  <?php do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email); ?>
                      <!-- Email Addresses -->
                     
                      <!-- Email Addresses End -->




                      



                      
                    </td>
                  </tr>
                </table>












									












