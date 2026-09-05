<?php

/**
 * Customer processing order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-processing-order.php.
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

if (!defined('ABSPATH')) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>

<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td class="" style="padding: 0px 0px 30px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td align="center" style="padding: 0px 0px 0px;">
                                  <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                    <tr>
                                      <td bgcolor="#02102C" class="email-card" align="center" valign="middle" style="width: 600px; padding: 0 0px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                          <tr>
                                            <td align="center" style="padding: 40px 20px 0;">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                  <td class="head-text" align="center" style="width: 500px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 28px; line-height: 34px; font-weight: bold; text-transform: none; mso-line-height-rule: exactly; color: #ffffff;">Hello <?php echo $order->get_billing_first_name(); ?>,
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          
                                          <!-- <tr>
                                            <td align="center" style="padding: 0 20px;"><img src="http://image.crocs-email.com/lib/fe66157070650c797512/m/2/054d7bf8-c250-4fc3-9ffc-2899fe9e221d.png" alt="Order Confirmed" width="340" style="width: 100%; max-width: 340px; display: block; margin: 0 auto; border: 0;"></td>
                                          </tr> -->
                                          <tr>
                                            <td align="center" style="padding: 18px 20px 24px;">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                  <td class="p-text" align="center" style="width: 460px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 23px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; color: #ffffff;"><?php printf( esc_html__( 'Thank you for your order. We have received order #%s, and our team is now preparing it for fulfillment. You will receive a further update once it has shipped.', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?></td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                        </table>
                                      </td>
                                    </tr>
                                  </table>
                                  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                    <tr>
                                      <td align="center" style="padding: 50px 15px 50px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
                                          <tr>
                                            <td bgcolor="#00041A" class="view-ord-btn" height="60" align="center" valign="middle" style="width: 270px; height: 60px; border: 2px solid #329DF8; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 20px; line-height: 24px; font-weight: bold; text-transform: uppercase; padding: 0 10px;"><a class="" href="<?php echo $order->get_view_order_url(); ?>" target="_blank" style="width: 100%; display: inline-block; padding: 5px 0; text-decoration: none; color: #ffffff;">View order details</a></td>
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





<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

/*
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */
do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);
?>


<table style="padding-top: 20px; background-color: #00041A;" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
                    <tr>
                        <td class="columnSingleLeft" align="center">
                          <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                            <tr>
                              <td style="padding: 0px 20px 20px; text-align: center;" align="center">
                                <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                                  <tr>
                                    <td align="center" class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: center; color: #ffffff;">

                                        We'll keep you updated as your order progresses through fulfillment. If you have any questions or need assistance, please contact us at <a style="color: #329DF8; text-decoration: none;" href="mailto:support@v8aminos.com">support@v8aminos.com</a>. <br> <br>

                                        Thank you for choosing V8 Aminos Research! <br><br>

                                        Best regards, <br>
                                        The V8 Aminos Team


                                    </td>

                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
                    
                  </table>


<?php

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);














