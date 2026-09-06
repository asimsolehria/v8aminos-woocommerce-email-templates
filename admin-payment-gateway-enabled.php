<?php
/**
 * Admin payment gateway enabled email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-payment-gateway-enabled.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails\HTML
 * @version 10.7.0
 */

use Automattic\WooCommerce\Utilities\FeaturesUtil;

defined( 'ABSPATH' ) || exit;

$email_improvements_enabled = FeaturesUtil::feature_is_enabled( 'email_improvements' );

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<!-- Main V8 Aminos Card -->
<table role="presentation" cellpadding="0" cellspacing="0" border="0" style="margin: 0 auto;">
	<tr>
		<td bgcolor="#02102C" class="email-card" align="center" valign="middle" style="width: 600px; padding: 0 0px;">

			<table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">

				<!-- Hello -->
				<tr>
					<td align="center" style="padding: 40px 20px 0;">
						<table border="0" cellpadding="0" cellspacing="0" role="presentation">
							<tr>
								<td
									class="head-text"
									align="center"
									style="width: 500px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 28px; line-height: 34px; font-weight: bold; color: #ffffff;"
								>
									Hello <?php echo esc_html( $username ); ?>,
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<!-- Gateway Enabled Message -->
				<tr>
					<td align="center" style="padding: 18px 20px 24px;">
						<table border="0" cellpadding="0" cellspacing="0" role="presentation">
							<tr>
								<td
									class="p-text"
									align="center"
									style="width: 460px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 23px; font-weight: 400; color: #ffffff;"
								>
									The payment gateway
									<strong><?php echo esc_html( $gateway_title ); ?></strong>
									was just enabled on your V8 Aminos Research website.
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<!-- Gateway Name -->
				<tr>
					<td align="center" style="padding: 0px 20px 24px;">
						<table border="0" cellpadding="0" cellspacing="0" role="presentation">
							<tr>
								<td
									class="p-text"
									align="center"
									style="width: 460px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 23px; font-weight: 400; color: #ffffff;"
								>
									Payment Gateway:<br>
									<strong><?php echo esc_html( $gateway_title ); ?></strong>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<!-- Security Notice -->
				<tr>
					<td align="center" style="padding: 0 20px 30px;">
						<table border="0" cellpadding="0" cellspacing="0" role="presentation">
							<tr>
								<td
									class="p-text"
									align="center"
									style="width: 460px; font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 23px; font-weight: 400; color: #ffffff;"
								>
									If you did not enable this payment gateway, please log in to your site and review your payment gateway settings.

									<br><br>

									<a
										href="<?php echo esc_url( $gateway_settings_url ); ?>"
										target="_blank"
										style="color: #329DF8; text-decoration: none;"
									>
										Review gateway settings
									</a>
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
 * Show user-defined additional content - this is set in each email's settings.
 */
if ( $additional_content ) {
	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
}
?>

<!-- V8 Aminos Footer -->
<table style="padding-top: 20px; background-color: #00041A;" class="columnContainer" role="presentation" width="640" cellspacing="0" cellpadding="0" border="0">
	<tr>
		<td class="columnSingleLeft" align="center">
			<table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
				<tr>
					<td style="padding: 0px 20px 20px; text-align: center;" align="center">
						<table border="0" cellpadding="0" cellspacing="0" role="presentation" align="center">
							<tr>
								<td align="center" class="p-text" style="font-family: 'Inter', Arial, Helvetica, sans-serif; font-size: 18px; line-height: 24px; font-weight: 400; text-transform: none; mso-line-height-rule: exactly; text-align: center; color: #ffffff;">

									For any inquiries or assistance, feel free to reach out to
									<a style="color: #329DF8; text-decoration: none;" href="mailto:support@v8aminos.com">
										support@v8aminos.com
									</a>.

									<br><br>

									Thank you for choosing V8 Aminos Research!

									<br><br>

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
do_action( 'woocommerce_email_footer', $email );