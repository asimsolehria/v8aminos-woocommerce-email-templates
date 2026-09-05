<?php

/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 7.4.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
    <tr>
      <td class="stylingblock-content-wrapper camarker-inner">

        <!--  -->

        <!-- -->
        <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
          <tr>
            <td class="stylingblock-content-wrapper camarker-inner"></td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <head>

    <!-- Shared Templates/2018/Responsive Template -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
    <title></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,700&display=swap" rel="stylesheet">



    <link rel="stylesheet" type="text/css" media="screen" href="https://www.crocs.com/on/demandware.static/Sites-crocs_us-Site/-/default/v1519623210574/css/proxima.css">
    <style>
      body {
        margin: 0 !important;
        min-width: 100% !important;
        padding: 0 !important;
        width: 100% !important;
      }
      body,
      table,
      td,
      a {
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
      }
      img {
        border: 0;
        height: auto;
        line-height: 100%;
      }
      a[x-apple-data-detectors] {
        color: inherit !important;
        font-family: inherit !important;
        font-size: inherit !important;
        font-weight: inherit !important;
        line-height: inherit !important;
        text-decoration: none !important;
      }
      sup {
        font-size: 45%;
        line-height: 0;
      }
      u+.email-body #new-gmail-hack {
        display: block !important;
      }
      #MessageViewBody,
      #MessageWebViewDiv {
        margin: 0 !important;
        min-width: 100vw;
        padding: 0 !important;
        zoom: 1 !important;
      }
      #MessageViewBody #backgroundTable {
        min-width: 100vw;
      }
      .main div.contentcell {
        width: 640px;
      }
    </style>
    <style>
      a,
      a:link {
        color: #55BBFF;
        text-decoration: none;
      }
      .email-body {
        background-color: #ffffff;
      }
      .barcode-headline .headline {
        font-size: 105px !important;
      }
      .barcode-image img {
        width: 100% !important;
      }
      .copyBarcode-copy .subcopy-wrapper {
        width: 600px !important;
      }
      .free-shipping-banner {
        font-size: 18px !important;
        line-height: 21px !important;
      }
      .photoGallery .leftImageColumn {
        width: 322px !important;
      }
      .photoGallery .linkText {
        font-size: 20px !important;
        line-height: 23px !important;
      }
      .photoGallery .rightImageColumn {
        width: 312px !important;
      }
      .photoGallery .rightImageWrapper {
        display: inline-block !important;
        max-height: 100% !important;
      }
      .shipped_label{
        color: #ffffff !important;
      }
      .tracking_number{
        color: #ffffff !important;
      }
      .tracking_provider{
        color: #ffffff !important;
      }
      .shipped_on{
        color: #ffffff !important;
      }
      /* V8 Aminos brand: pill-shaped buttons, matching site nav */
      .view-ord-btn {
        border-radius: 30px !important;
        -webkit-border-radius: 30px !important;
        -moz-border-radius: 30px !important;
        font-family: 'Inter', Arial, Helvetica, sans-serif !important;
        text-transform: none !important;
        letter-spacing: 0.3px !important;
      }
      .view-ord-btn a {
        font-family: 'Inter', Arial, Helvetica, sans-serif !important;
      }
      /* V8 Aminos brand: rounded bordered content cards */
      .email-card {
        border: 1px solid #329DF8 !important;
        border-radius: 16px !important;
        -webkit-border-radius: 16px !important;
        -moz-border-radius: 16px !important;
      }
      @media only screen and (max-width: 639px) {

		.head-text{
			font-size: 20px !important;
		}
		.view-ord-btn{
			font-size: 16px !important;
		}

    .p-text{
      font-size: 14px !important;
    }

        .barcode-headline .headline {
          font-size: 60px !important;
        }
        .barcode-image img {
          width: 75% !important;
        }
        .copyBarcode-copy .subcopy-wrapper {
          width: 235px !important;
        }
        .free-shipping-banner {
          font-size: 12px !important;
          line-height: 15px !important;
        }
        .photoGallery .leftImageColumn,
        .photoGallery .rightImageColumn {
          width: 640px !important;
        }
        .photoGallery .linkText {
          font-size: 13px !important;
          line-height: 17px !important;
        }
        .photoGallery .rightImageWrapper {
          display: none !important;
          max-height: 0 !important;
        }
        .columnContainer {
          width: 100% !important;
        }
        .columnSingle {
          display: block !important;
          width: 100% !important;
          text-align: center !important;
        }
        .columnSingleLeft {
          display: block !important;
          width: 100% !important;
          text-align: left !important;
        }
        .mobileHide {
          display: none !important;
          width: 0 !important;
          height: 0 !important;
          overflow: hidden !important;
        }
        .mobileView {
          display: block !important;
          width: auto !important;
          height: auto !important;
          max-height: inherit !important;
          max-width: inherit !important;
          float: none !important;
          overflow: visible !important;
          visibility: visible !important;
          mso-hide: none !important;
          font-size: inherit !important;
        }
      }
    </style>

    <!--[if !mso]>

    <!-->
    <style>
      
      @-moz-document url-prefix() {
        .headline,
        .subheadline,
        .headline-black,
        .subheadline-black {
          font-weight: normal !important;
        }
      }
    </style>

    <!--<![endif]-->

    <!--[if (gte mso 9)|(IE)]>    <style>     table { border-collapse: collapse; }          table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }          sup { font-size: 75%; mso-text-raise: 12%; }          .headline, .subheadline, .headline-black, .subheadline-black { line-height: 80% !important; }          .photoGallery .rightImageWrapper { display: block !important; }    </style>    <![endif]-->

    <!--[if gte mso 9]>    <xml>     <o:OfficeDocumentSettings>      <o:AllowPNG/>      <o:PixelsPerInch>96</o:PixelsPerInch>     </o:OfficeDocumentSettings>    </xml>    <![endif]-->
  </head>
  <body class="email-body">
    <style type="text/css">
      div.preheader {
        display: none !important;
      }
    </style>
    
    
    <table id="backgroundTable" role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #00041A;">
      <tr>
        <td align="center">
          <table role="presentation" cellpadding="0" cellspacing="0" border="0">
            <tr>
              <td class="main" align="center" style="width: 640px;">
                <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <div itemscope="" itemtype="http://schema.org/Organization">
                        <meta itemprop="name" content="V8 Aminos Research">
                        <meta itemprop="logo" content="https://v8aminos.com/wp-content/uploads/2026/05/Research-Logo-2-scaled.png">
                      </div>
                    </td>
                  </tr>
                </table>
                <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <div style="display: none; max-height: 0px; overflow: hidden;">
                        &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;
                        &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
                      </div>
                    </td>
                  </tr>
                </table>
                
                <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="min-width: 100%; " class="stylingblock-content-wrapper">
                  <tr>
                    <td class="stylingblock-content-wrapper camarker-inner">
                      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                        <tr>
                          <td align="center" bgcolor="#00041A" style="padding: 25px 0px;">
                            <a href="https://v8aminos.com/" target="_blank">
                              <img src="https://v8aminos.com/wp-content/uploads/2026/05/Research-Logo-2-scaled.png" alt="V8 Aminos Research" style="width: 200px; height: auto; display: block; margin: 0 auto; border: 0;" width="200">
                            </a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
                <!-- Header End -->