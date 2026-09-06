<?php
/**
 * Customer cancelled order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-cancelled-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 10.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook: woocommerce_email_header.
 *
 * @hooked WC_Emails::email_header() Output the email header
 * @since 2.5.0
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>


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
                                                  <td class="head-text" align="center" style="width: 500px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 28px; line-height: 34px; font-weight: bold; text-transform: none; mso-line-height-rule: exactly; color: #ffffff;">Hello <?php echo esc_html( $order->get_billing_first_name() ); ?>,
                                                  </td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>

                                          <tr>
                                            <td align="center" style="padding: 18px 20px 24px;">
                                              <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                                <tr>
                                                  <td class="p-text" align="center" style="width: 460px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 23px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; color: #ffffff;"><?php /* translators: %1$s: Order number */ printf( esc_html__( 'We are writing to confirm that your order #%1$s has been cancelled. If you believe this was a mistake, or if you have any questions, please contact our support team.', 'woocommerce' ), esc_html( $order->get_order_number() ) ); ?></td>
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

<?php
/**
 * Hook: woocommerce_email_order_details.
 *
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Hook: woocommerce_email_order_meta.
 *
 * @hooked WC_Emails::order_meta() Shows order meta data.
 * @since 2.5.0
 */
do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

/**
 * Hook: woocommerce_email_customer_details.
 *
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 * @since 2.5.0
 */
do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

/**
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) :
	?>
<table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td align="center" style="padding: 0px 20px 30px; text-align: center;">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
                              <tr>
                                <td align="center" class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 16px; line-height: 22px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: center; color: #ffffff;">
									<?php echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) ); ?>
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
endif;

/**
 * Hook: woocommerce_email_footer.
 *
 * @hooked WC_Emails::email_footer() Output the email footer
 * @since 2.5.0
 */
do_action( 'woocommerce_email_footer', $email );