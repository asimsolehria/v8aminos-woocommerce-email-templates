<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

$text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>



<table style="padding-top: 30px" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td class="columnSingleLeft" align="center">
                          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr>
                              <td style=" text-align: center;" align="center">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                  <tr>
                                    <td align="center" class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: center; color: #ffffff;">

                                       
                                    <span class="view-ord-btn" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Delivery Coordinates
                                    </span>

                                    </td>

                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    
                  </table>



<table style="padding-top: 10px;" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                        
                        <tr>
                          <td class="columnSingleLeft" align="center">
                            <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td style="padding: 0px 20px 30px; text-align: left;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                    <tr>
                                      <td class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Billing address:</span><br>
									  <?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
																				<?php if ($order->get_billing_phone()) : ?>
																					<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
																				<?php endif; ?>
																				<?php if ($order->get_billing_email()) : ?>
																					<br /><?php echo esc_html($order->get_billing_email()); ?>
																				<?php endif; ?>
                                    </tr>
                            t    </table>
                                </td>
                              </tr>
                            </table>
                          </td>
						  <?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>
                          <td class="columnSingleLeft" align="center">
                            <table role="presentation" width="320" cellspacing="0" cellpadding="0" border="0">
                              <tr>
                                <td style="padding: 0px 20px 30px; text-align: left;">
                                  <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                    <tr>
                                      <td class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: left; color: #ffffff;"><span class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-weight: bold; text-transform: uppercase;">Shipping address:</span><br>
									  <?php echo wp_kses_post($shipping); ?>
																					<?php if ($order->get_shipping_phone()) : ?>
																						<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
																					<?php endif; ?>
                                    </tr>
                                  </table>
                                </td>
                              </tr>
                            </table>
                          </td>
						  <?php endif; ?>
                        </tr>
                      </table>