<?php
header('Content-type: text/html; charset=utf-8');
include_once('app.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$dDIR = "http://".$_SERVER["SERVER_NAME"]."";

$msg = "";

$mail = new PHPMailer(true);


$mail->isSMTP();
$mail->Host = "secure195.servconfig.com";
$mail->SMTPAuth = true;
$mail->Username = "send@capaing.com";
$mail->Password = "capaing2020#!";
$mail->SMTPSecure = "ssl";
$mail->SMTPDebug = 0;
$mail->Port = 465;
$mail->CharSet = 'UTF-8';


$codigo = (isset($_POST['g-recaptcha-response'])) ? $_POST['g-recaptcha-response'] : '';

$response = $recaptcha->verify($codigo);

if($response->isSuccess()) {
    if (isset($_POST['nombref']) &&
        isset($_POST['telefonof'])&&
        isset($_POST['emailf'])){


        $nombre = htmlentities($_POST['nombref'], ENT_QUOTES);
        $telefono = htmlentities($_POST['telefonof'], ENT_QUOTES);
        $email = htmlentities($_POST['emailf'], ENT_QUOTES);
        $message = htmlentities($_POST['messagef'], ENT_QUOTES);


        $mail->setFrom($email, html_entity_decode($nombre));
        $mail->addAddress('contacto@capaing.com', 'CAPAING');
        //$mail->AddBCC('email@example.com', 'Jhon Doe');


        $mail->isHTML(true);

        $mail->Subject = 'Contacto desde la de pagina | Capaing';

        $mail->Body = '
           <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
            <html xmlns="http://www.w3.org/1999/xhtml">
            <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                
                <title>Artp</title>
                <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,500" rel="stylesheet">
                <style type="text/css">
                    /* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
                    #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
                    .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
                    .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
                    body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
                    table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
                    img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */
            
                    /* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
                    body{margin:0; padding:0;}
                    html {
                        height: 100%;
                    }
                    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
                    table{border-collapse:collapse !important;}
                    body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}
            
                    /* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */
            
                    /* ========== Page Styles ========== */
            
                    #bodyCell{padding:20px;}
                    #templateContainer{width:600px;}
            
                    /**
                    * @tab Page
                    * @section background style
                    * @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
                    * @theme page
                    */
                    body, #bodyTable{
                        /*@editable*/ background-color: #1f3c88;
                    }
            
                    /**
                    * @tab Page
                    * @section background style
                    * @tip Set the background color and top border for your email. You may want to choose colors that match your company\'s branding.
                    * @theme page
                    */
                    #bodyCell{
                        /*@editable*/ /*border-top:4px solid #FFFFFF;*/
                    }
            
                    /**
                    * @tab Page
                    * @section email border
                    * @tip Set the border for your email.
                    */
                    #templateContainer{
                        /*@editable*/ border:1px solid #FFFFFF;
                    }
            
                    /**
                    * @tab Page
                    * @section heading 1
                    * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
                    * @style heading 1
                    */
                    h1{
                        /*@editable*/ color:#383737 !important;
                        display:block;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:16px;
                        /*@editable*/ font-style:normal;
                        /*@editable*/ font-weight:500;
                        /*@editable*/ line-height:100%;
                        /*@editable*/ letter-spacing:normal;
                        margin-top:0;
                        margin-right:0;
                        margin-bottom:10px;
                        margin-left:0;
                        /*@editable*/ text-align:center;
                    }
            
                    /**
                    * @tab Page
                    * @section heading 2
                    * @tip Set the styling for all second-level headings in your emails.
                    * @style heading 2
                    */
                    h2{
                        /*@editable*/ color:#ffc10e !important;
                        display:block;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:14px;
                        text-transform: uppercase;
                        /*@editable*/ font-style:normal;
                        /*@editable*/ font-weight:400;
                        /*@editable*/ line-height:100%;
                        /*@editable*/ letter-spacing:normal;
                        margin-top:0;
                        margin-right:0;
                        margin-bottom:10px;
                        margin-left:0;
                        /*@editable*/ text-align:center;
                    }
            
                    /**
                    * @tab Page
                    * @section heading 3
                    * @tip Set the styling for all third-level headings in your emails.
                    * @style heading 3
                    */
                    h3{
                        /*@editable*/ color:#606060 !important;
                        display:block;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:16px;
                        /*@editable*/ font-style:italic;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ line-height:100%;
                        /*@editable*/ letter-spacing:normal;
                        margin-top:0;
                        margin-right:0;
                        margin-bottom:10px;
                        margin-left:0;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Page
                    * @section heading 4
                    * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
                    * @style heading 4
                    */
                    h4{
                        /*@editable*/ color:#808080 !important;
                        display:block;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:14px;
                        /*@editable*/ font-style:italic;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ line-height:100%;
                        /*@editable*/ letter-spacing:normal;
                        margin-top:0;
                        margin-right:0;
                        margin-bottom:10px;
                        margin-left:0;
                        /*@editable*/ text-align:left;
                    }
            
                    /* ========== Header Styles ========== */
            
                    /**
                    * @tab Header
                    * @section preheader style
                    * @tip Set the background color and bottom border for your email\'s preheader area.
                    * @theme header
                    */
                    #templatePreheader{
                        /*@editable*/ background-color:#F4F4F4;
                        /*@editable*/ border-bottom:1px solid #CCCCCC;
                    }
            
                    /**
                    * @tab Header
                    * @section preheader text
                    * @tip Set the styling for your email\'s preheader text. Choose a size and color that is easy to read.
                    */
                    .preheaderContent{
                        /*@editable*/ color:#808080;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:10px;
                        /*@editable*/ line-height:125%;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Header
                    * @section preheader link
                    * @tip Set the styling for your email\'s preheader links. Choose a color that helps them stand out from your text.
                    */
                    .preheaderContent a:link, .preheaderContent a:visited, /* Yahoo! Mail Override */ .preheaderContent a .yshortcuts /* Yahoo! Mail Override */{
                        /*@editable*/ color:#606060;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    /**
                    * @tab Header
                    * @section header style
                    * @tip Set the background color and borders for your email\'s header area.
                    * @theme header
                    */
                    #templateHeader{
                        /*@editable*/ background-color:#FFFFFF;
                        /*@editable*/ border-top:1px solid #FFFFFF;
                        /*@editable*/ border-bottom:1px solid #CCCCCC;
                    }
            
                    /**
                    * @tab Header
                    * @section header text
                    * @tip Set the styling for your email\'s header text. Choose a size and color that is easy to read.
                    */
                    .headerContent{
                        /*@editable*/ color:#1c1c1c;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:20px;
                        /*@editable*/ font-weight:bold;
                        /*@editable*/ line-height:100%;
                        /*@editable*/ padding-top:0;
                        /*@editable*/ padding-right:0;
                        /*@editable*/ padding-bottom:0;
                        /*@editable*/ padding-left:0;
                        /*@editable*/ text-align:left;
                        /*@editable*/ vertical-align:middle;
                    }
            
                    /**
                    * @tab Header
                    * @section header link
                    * @tip Set the styling for your email\'s header links. Choose a color that helps them stand out from your text.
                    */
                    .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
                        /*@editable*/ color:#EB4102;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    #headerImage{
                        height:auto;
                        max-width:600px;
                    }
            
                    /* ========== Body Styles ========== */
            
                    /**
                    * @tab Body
                    * @section body style
                    * @tip Set the background color and borders for your email\'s body area.
                    */
                    #templateBody{
                        /*@editable*/ background-color:#F4F4F4;
                        /*@editable*/ border-top:1px solid #FFFFFF;
                        /*@editable*/ border-bottom:1px solid #CCCCCC;
                    }
            
                    /**
                    * @tab Body
                    * @section body text
                    * @tip Set the styling for your email\'s main content text. Choose a size and color that is easy to read.
                    * @theme main
                    */
                    .bodyContent{
                        /*@editable*/ color:#505050;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:16px;
                        /*@editable*/ line-height:150%;
                        padding-top:20px;
                        padding-right:20px;
                        padding-bottom:20px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    .bodyContentTd{
                        /*@editable*/ color:#505050;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:16px;
                        /*@editable*/ line-height:150%;
                        padding-right:20px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Body
                    * @section body link
                    * @tip Set the styling for your email\'s main content links. Choose a color that helps them stand out from your text.
                    */
                    .bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
                        /*@editable*/ color:#EB4102;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    .bodyContent img{
                        display:inline;
                        height:auto;
                        max-width:560px;
                    }
            
                    /* ========== Column Styles ========== */
            
                    .templateColumnContainer{width:260px;}
            
                    /**
                    * @tab Columns
                    * @section column style
                    * @tip Set the background color and borders for your email\'s column area.
                    */
                    #templateColumns{
                        /*@editable*/ background-color:#F4F4F4;
                        /*@editable*/ border-top:1px solid #FFFFFF;
                        /*@editable*/ border-bottom:1px solid #CCCCCC;
                    }
            
                    /**
                    * @tab Columns
                    * @section left column text
                    * @tip Set the styling for your email\'s left column content text. Choose a size and color that is easy to read.
                    */
                    .leftColumnContent{
                        /*@editable*/ color:#505050;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:14px;
                        /*@editable*/ line-height:150%;
                        padding-top:0;
                        padding-right:20px;
                        padding-bottom:20px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    .leftColumnContentContact{
                        /*@editable*/ color:#505050;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:14px;
                        /*@editable*/ line-height:150%;
                        padding-top:0;
                        padding-right:20px;
                        padding-bottom:10px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Columns
                    * @section left column link
                    * @tip Set the styling for your email\'s left column content links. Choose a color that helps them stand out from your text.
                    */
                    .leftColumnContent a:link, .leftColumnContent a:visited, /* Yahoo! Mail Override */ .leftColumnContent a .yshortcuts /* Yahoo! Mail Override */{
                        /*@editable*/ color:#ffc10e;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    /**
                    * @tab Columns
                    * @section right column text
                    * @tip Set the styling for your email\'s right column content text. Choose a size and color that is easy to read.
                    */
                    .rightColumnContent{
                        /*@editable*/ color:#505050;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:14px;
                        /*@editable*/ line-height:150%;
                        padding-top:0;
                        padding-right:20px;
                        padding-bottom:20px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Columns
                    * @section right column link
                    * @tip Set the styling for your email\'s right column content links. Choose a color that helps them stand out from your text.
                    */
                    .rightColumnContent a:link, .rightColumnContent a:visited, /* Yahoo! Mail Override */ .rightColumnContent a .yshortcuts /* Yahoo! Mail Override */{
                        /*@editable*/ color:#EB4102;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    .leftColumnContent img, .rightColumnContent img{
                        display:inline;
                        height:auto;
                        max-width:260px;
                    }
            
                    /* ========== Footer Styles ========== */
            
                    /**
                    * @tab Footer
                    * @section footer style
                    * @tip Set the background color and borders for your email\'s footer area.
                    * @theme footer
                    */
                    #templateFooter{
                        /*@editable*/ background-color:#F4F4F4;
                        /*@editable*/ border-top:1px solid #FFFFFF;
                    }
            
                    /**
                    * @tab Footer
                    * @section footer text
                    * @tip Set the styling for your email\'s footer text. Choose a size and color that is easy to read.
                    * @theme footer
                    */
                    .footerContent{
                        /*@editable*/ color:#808080;
                        /*@editable*/ font-family:Helvetica;
                        /*@editable*/ font-size:10px;
                        /*@editable*/ line-height:150%;
                        padding-top:20px;
                        padding-right:20px;
                        padding-bottom:20px;
                        padding-left:20px;
                        /*@editable*/ text-align:left;
                    }
            
                    /**
                    * @tab Footer
                    * @section footer link
                    * @tip Set the styling for your email\'s footer links. Choose a color that helps them stand out from your text.
                    */
                    .footerContent a:link, .footerContent a:visited, /* Yahoo! Mail Override */ .footerContent a .yshortcuts, .footerContent a span /* Yahoo! Mail Override */{
                        /*@editable*/ color:#606060;
                        /*@editable*/ font-weight:normal;
                        /*@editable*/ text-decoration:underline;
                    }
            
                    /* /\/\/\/\/\/\/\/\/ MOBILE STYLES /\/\/\/\/\/\/\/\/ */
            
                    @media only screen and (max-width: 480px){
                        /* /\/\/\/\/\/\/ CLIENT-SPECIFIC MOBILE STYLES /\/\/\/\/\/\/ */
                        body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                        body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */
            
                        /* /\/\/\/\/\/\/ MOBILE RESET STYLES /\/\/\/\/\/\/ */
                        #bodyCell{padding:10px !important;}
            
                        /* /\/\/\/\/\/\/ MOBILE TEMPLATE STYLES /\/\/\/\/\/\/ */
            
                        /* ======== Page Styles ======== */
            
                        /**
                        * @tab Mobile Styles
                        * @section template width
                        * @tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn\'t work for you, set the width to 300px instead.
                        */
                        #templateContainer{
                            max-width:600px !important;
                            /*@editable*/ width:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section heading 1
                        * @tip Make the first-level headings larger in size for better readability on small screens.
                        */
                        h1{
                            /*@editable*/ font-size:24px !important;
                            /*@editable*/ line-height:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section heading 2
                        * @tip Make the second-level headings larger in size for better readability on small screens.
                        */
                        h2{
                            /*@editable*/ font-size:20px !important;
                            /*@editable*/ line-height:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section heading 3
                        * @tip Make the third-level headings larger in size for better readability on small screens.
                        */
                        h3{
                            /*@editable*/ font-size:18px !important;
                            /*@editable*/ line-height:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section heading 4
                        * @tip Make the fourth-level headings larger in size for better readability on small screens.
                        */
                        h4{
                            /*@editable*/ font-size:16px !important;
                            /*@editable*/ line-height:100% !important;
                        }
            
                        /* ======== Header Styles ======== */
            
                        #templatePreheader{display:none !important;} /* Hide the template preheader to save space */
            
                        /**
                        * @tab Mobile Styles
                        * @section header image
                        * @tip Make the main header image fluid for portrait or landscape view adaptability, and set the image\'s original width as the max-width. If a fluid setting doesn\'t work, set the image width to half its original size instead.
                        */
                        #headerImage{
                            height:auto !important;
                            /*@editable*/ max-width:600px !important;
                            /*@editable*/ width:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section header text
                        * @tip Make the header content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
                        .headerContent{
                            /*@editable*/ font-size:20px !important;
                            /*@editable*/ line-height:125% !important;
                        }
            
                        /* ======== Body Styles ======== */
            
                        /**
                        * @tab Mobile Styles
                        * @section body text
                        * @tip Make the body content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
                        .bodyContent{
                            /*@editable*/ font-size:18px !important;
                            /*@editable*/ line-height:125% !important;
                        }
            
                        /* ======== Column Styles ======== */
            
                        .templateColumnContainer{display:block !important; width:100% !important;}
            
                        /**
                        * @tab Mobile Styles
                        * @section column image
                        * @tip Make the column image fluid for portrait or landscape view adaptability, and set the image\'s original width as the max-width. If a fluid setting doesn\'t work, set the image width to half its original size instead.
                        */
                        .columnImage{
                            height:auto !important;
                            /*@editable*/ max-width:480px !important;
                            /*@editable*/ width:100% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section left column text
                        * @tip Make the left column content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
                        .leftColumnContent{
                            /*@editable*/ font-size:16px !important;
                            /*@editable*/ line-height:125% !important;
                        }
            
                        /**
                        * @tab Mobile Styles
                        * @section right column text
                        * @tip Make the right column content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
                        .rightColumnContent{
                            /*@editable*/ font-size:16px !important;
                            /*@editable*/ line-height:125% !important;
                        }
            
                        /* ======== Footer Styles ======== */
            
                        /**
                        * @tab Mobile Styles
                        * @section footer text
                        * @tip Make the body content text larger in size for better readability on small screens.
                        */
                        .footerContent{
                            /*@editable*/ font-size:14px !important;
                            /*@editable*/ line-height:115% !important;
                        }
            
                        .footerContent a{display:block !important;} /* Place footer social and utility links on their own lines, for easier access */
                    }
                </style>
            </head>
            <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
            <center>
                <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
                    <tr>
                        <td align="center" valign="top" id="bodyCell">
                            <!-- BEGIN TEMPLATE // -->
                            <table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- BEGIN HEADER // -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateHeader">
                                            <tr>
                                                <td valign="top" class="headerContent">
                                                    <center>
                                                        <img src="'.$dDIR.'/images/logo-email.jpg" style="max-width:600px;" id="headerImage" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                                                    </center>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // END HEADER -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- BEGIN BODY // -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                            <tr>
                                                <td valign="top" class="bodyContent" mc:edit="body_content">
                                                    <h1>DATOS DE CONTACTO</h1>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // END BODY -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- BEGIN COLUMNS // -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateColumns">
                                            <tr mc:repeatable>
                                                <td align="center" valign="top" class="templateColumnContainer" style="padding-top:20px;">
                                                    <table border="0" cellpadding="20" cellspacing="0" width="100%">
                                                        <tr>
                                                            <td valign="top" class="leftColumnContentContact" mc:edit="left_column_content">
                                                                <strong>Nombre:</strong> '.html_entity_decode($nombre).'
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" class="leftColumnContentContact" mc:edit="left_column_content">
                                                                <strong>Tel??fono:</strong> '.$telefono.'
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" class="leftColumnContentContact" mc:edit="left_column_content">
                                                                <strong>Correo electr??nico:</strong> '.$email.'
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td valign="top" class="leftColumnContentContact" mc:edit="left_column_content">
                                                                <strong>Mensaje:</strong>
                                                                '.$message.'
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // END COLUMNS -->
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" valign="top">
                                        <!-- BEGIN FOOTER // -->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateFooter">
                                            <tr>
                                                <td valign="top" class="footerContent" style="padding-top:0; text-align: center" mc:edit="footer_content01">
                                                    <em>Copyright &copy; 2020 Capaing, Todos los derechos reservados.</em>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- // END FOOTER -->
                                    </td>
                                </tr>
                            </table>
                            <!-- // END TEMPLATE -->
                        </td>
                    </tr>
                </table>
            </center>
            </body>
            </html>';


        if ($mail->send()) {
            //if(true){

            ob_clean();

            echo "<script language='javascript'>
                setTimeout(function(){ window.location.href = 'gracias' }, 2000);
              </script>";
            exit();


        } else {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

    }else{

        $msg = "<p>Tus datos son incorrecto</p>";
    }
}else{
    $msg = "<p>Captcha incorrecto</p>";
}
echo $msg;