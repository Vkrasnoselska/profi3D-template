<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Print_shop
 */

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  

  <style>
	hr,img,legend{border:0}legend,td,th{padding:0}body,figure{margin:0}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,details,figcaption,figure,footer,header,hgroup,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent;color:#337ab7;text-decoration:none}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,optgroup,strong{font-weight:700}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background:#ff0;color:#000}.img-thumbnail,body{background-color:#fff}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-.5em}sub{bottom:-.25em}img{vertical-align:middle}svg:not(:root){overflow:hidden}hr{-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box;height:0}pre,textarea{overflow:auto}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type=button],input[type=reset],input[type=submit]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{height:auto}input[type=search]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type=search]::-webkit-search-cancel-button,input[type=search]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}table{border-collapse:collapse;border-spacing:0}*,:after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:transparent}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}a:focus,a:hover{color:#23527c;text-decoration:underline}a:focus{outline:dotted thin;outline:-webkit-focus-ring-color auto 5px;outline-offset:-2px}.img-responsive{display:block;max-width:100%;height:auto}.img-rounded{border-radius:6px}.img-thumbnail{padding:4px;line-height:1.42857143;border:1px solid #ddd;border-radius:4px;-webkit-transition:all .2s ease-in-out;-o-transition:all .2s ease-in-out;transition:all .2s ease-in-out;display:inline-block;max-width:100%;height:auto}.img-circle{border-radius:50%}hr{margin-top:20px;margin-bottom:20px;border-top:1px solid #eee}.sr-only{position:absolute;width:1px;height:1px;margin:-1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;margin:0;overflow:visible;clip:auto}.container,.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}[role=button]{cursor:pointer}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{float:left}.col-xs-12{width:100%}.col-xs-11{width:91.66666667%}.col-xs-10{width:83.33333333%}.col-xs-9{width:75%}.col-xs-8{width:66.66666667%}.col-xs-7{width:58.33333333%}.col-xs-6{width:50%}.col-xs-5{width:41.66666667%}.col-xs-4{width:33.33333333%}.col-xs-3{width:25%}.col-xs-2{width:16.66666667%}.col-xs-1{width:8.33333333%}.col-xs-pull-12{right:100%}.col-xs-pull-11{right:91.66666667%}.col-xs-pull-10{right:83.33333333%}.col-xs-pull-9{right:75%}.col-xs-pull-8{right:66.66666667%}.col-xs-pull-7{right:58.33333333%}.col-xs-pull-6{right:50%}.col-xs-pull-5{right:41.66666667%}.col-xs-pull-4{right:33.33333333%}.col-xs-pull-3{right:25%}.col-xs-pull-2{right:16.66666667%}.col-xs-pull-1{right:8.33333333%}.col-xs-pull-0{right:auto}.col-xs-push-12{left:100%}.col-xs-push-11{left:91.66666667%}.col-xs-push-10{left:83.33333333%}.col-xs-push-9{left:75%}.col-xs-push-8{left:66.66666667%}.col-xs-push-7{left:58.33333333%}.col-xs-push-6{left:50%}.col-xs-push-5{left:41.66666667%}.col-xs-push-4{left:33.33333333%}.col-xs-push-3{left:25%}.col-xs-push-2{left:16.66666667%}.col-xs-push-1{left:8.33333333%}.col-xs-push-0{left:auto}.col-xs-offset-12{margin-left:100%}.col-xs-offset-11{margin-left:91.66666667%}.col-xs-offset-10{margin-left:83.33333333%}.col-xs-offset-9{margin-left:75%}.col-xs-offset-8{margin-left:66.66666667%}.col-xs-offset-7{margin-left:58.33333333%}.col-xs-offset-6{margin-left:50%}.col-xs-offset-5{margin-left:41.66666667%}.col-xs-offset-4{margin-left:33.33333333%}.col-xs-offset-3{margin-left:25%}.col-xs-offset-2{margin-left:16.66666667%}.col-xs-offset-1{margin-left:8.33333333%}.col-xs-offset-0{margin-left:0}@media (min-width:768px){.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9{float:left}.col-sm-12{width:100%}.col-sm-11{width:91.66666667%}.col-sm-10{width:83.33333333%}.col-sm-9{width:75%}.col-sm-8{width:66.66666667%}.col-sm-7{width:58.33333333%}.col-sm-6{width:50%}.col-sm-5{width:41.66666667%}.col-sm-4{width:33.33333333%}.col-sm-3{width:25%}.col-sm-2{width:16.66666667%}.col-sm-1{width:8.33333333%}.col-sm-pull-12{right:100%}.col-sm-pull-11{right:91.66666667%}.col-sm-pull-10{right:83.33333333%}.col-sm-pull-9{right:75%}.col-sm-pull-8{right:66.66666667%}.col-sm-pull-7{right:58.33333333%}.col-sm-pull-6{right:50%}.col-sm-pull-5{right:41.66666667%}.col-sm-pull-4{right:33.33333333%}.col-sm-pull-3{right:25%}.col-sm-pull-2{right:16.66666667%}.col-sm-pull-1{right:8.33333333%}.col-sm-pull-0{right:auto}.col-sm-push-12{left:100%}.col-sm-push-11{left:91.66666667%}.col-sm-push-10{left:83.33333333%}.col-sm-push-9{left:75%}.col-sm-push-8{left:66.66666667%}.col-sm-push-7{left:58.33333333%}.col-sm-push-6{left:50%}.col-sm-push-5{left:41.66666667%}.col-sm-push-4{left:33.33333333%}.col-sm-push-3{left:25%}.col-sm-push-2{left:16.66666667%}.col-sm-push-1{left:8.33333333%}.col-sm-push-0{left:auto}.col-sm-offset-12{margin-left:100%}.col-sm-offset-11{margin-left:91.66666667%}.col-sm-offset-10{margin-left:83.33333333%}.col-sm-offset-9{margin-left:75%}.col-sm-offset-8{margin-left:66.66666667%}.col-sm-offset-7{margin-left:58.33333333%}.col-sm-offset-6{margin-left:50%}.col-sm-offset-5{margin-left:41.66666667%}.col-sm-offset-4{margin-left:33.33333333%}.col-sm-offset-3{margin-left:25%}.col-sm-offset-2{margin-left:16.66666667%}.col-sm-offset-1{margin-left:8.33333333%}.col-sm-offset-0{margin-left:0}}@media (min-width:992px){.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9{float:left}.col-md-12{width:100%}.col-md-11{width:91.66666667%}.col-md-10{width:83.33333333%}.col-md-9{width:75%}.col-md-8{width:66.66666667%}.col-md-7{width:58.33333333%}.col-md-6{width:50%}.col-md-5{width:41.66666667%}.col-md-4{width:33.33333333%}.col-md-3{width:25%}.col-md-2{width:16.66666667%}.col-md-1{width:8.33333333%}.col-md-pull-12{right:100%}.col-md-pull-11{right:91.66666667%}.col-md-pull-10{right:83.33333333%}.col-md-pull-9{right:75%}.col-md-pull-8{right:66.66666667%}.col-md-pull-7{right:58.33333333%}.col-md-pull-6{right:50%}.col-md-pull-5{right:41.66666667%}.col-md-pull-4{right:33.33333333%}.col-md-pull-3{right:25%}.col-md-pull-2{right:16.66666667%}.col-md-pull-1{right:8.33333333%}.col-md-pull-0{right:auto}.col-md-push-12{left:100%}.col-md-push-11{left:91.66666667%}.col-md-push-10{left:83.33333333%}.col-md-push-9{left:75%}.col-md-push-8{left:66.66666667%}.col-md-push-7{left:58.33333333%}.col-md-push-6{left:50%}.col-md-push-5{left:41.66666667%}.col-md-push-4{left:33.33333333%}.col-md-push-3{left:25%}.col-md-push-2{left:16.66666667%}.col-md-push-1{left:8.33333333%}.col-md-push-0{left:auto}.col-md-offset-12{margin-left:100%}.col-md-offset-11{margin-left:91.66666667%}.col-md-offset-10{margin-left:83.33333333%}.col-md-offset-9{margin-left:75%}.col-md-offset-8{margin-left:66.66666667%}.col-md-offset-7{margin-left:58.33333333%}.col-md-offset-6{margin-left:50%}.col-md-offset-5{margin-left:41.66666667%}.col-md-offset-4{margin-left:33.33333333%}.col-md-offset-3{margin-left:25%}.col-md-offset-2{margin-left:16.66666667%}.col-md-offset-1{margin-left:8.33333333%}.col-md-offset-0{margin-left:0}}@media (min-width:1200px){.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9{float:left}.col-lg-12{width:100%}.col-lg-11{width:91.66666667%}.col-lg-10{width:83.33333333%}.col-lg-9{width:75%}.col-lg-8{width:66.66666667%}.col-lg-7{width:58.33333333%}.col-lg-6{width:50%}.col-lg-5{width:41.66666667%}.col-lg-4{width:33.33333333%}.col-lg-3{width:25%}.col-lg-2{width:16.66666667%}.col-lg-1{width:8.33333333%}.col-lg-pull-12{right:100%}.col-lg-pull-11{right:91.66666667%}.col-lg-pull-10{right:83.33333333%}.col-lg-pull-9{right:75%}.col-lg-pull-8{right:66.66666667%}.col-lg-pull-7{right:58.33333333%}.col-lg-pull-6{right:50%}.col-lg-pull-5{right:41.66666667%}.col-lg-pull-4{right:33.33333333%}.col-lg-pull-3{right:25%}.col-lg-pull-2{right:16.66666667%}.col-lg-pull-1{right:8.33333333%}.col-lg-pull-0{right:auto}.col-lg-push-12{left:100%}.col-lg-push-11{left:91.66666667%}.col-lg-push-10{left:83.33333333%}.col-lg-push-9{left:75%}.col-lg-push-8{left:66.66666667%}.col-lg-push-7{left:58.33333333%}.col-lg-push-6{left:50%}.col-lg-push-5{left:41.66666667%}.col-lg-push-4{left:33.33333333%}.col-lg-push-3{left:25%}.col-lg-push-2{left:16.66666667%}.col-lg-push-1{left:8.33333333%}.col-lg-push-0{left:auto}.col-lg-offset-12{margin-left:100%}.col-lg-offset-11{margin-left:91.66666667%}.col-lg-offset-10{margin-left:83.33333333%}.col-lg-offset-9{margin-left:75%}.col-lg-offset-8{margin-left:66.66666667%}.col-lg-offset-7{margin-left:58.33333333%}.col-lg-offset-6{margin-left:50%}.col-lg-offset-5{margin-left:41.66666667%}.col-lg-offset-4{margin-left:33.33333333%}.col-lg-offset-3{margin-left:25%}.col-lg-offset-2{margin-left:16.66666667%}.col-lg-offset-1{margin-left:8.33333333%}.col-lg-offset-0{margin-left:0}}.clearfix:after,.clearfix:before,.container-fluid:after,.container-fluid:before,.container:after,.container:before,.row:after,.row:before{content:" ";display:table}.clearfix:after,.container-fluid:after,.container:after,.row:after{clear:both}.center-block{display:block;margin-left:auto;margin-right:auto}.pull-right{float:right!important}.pull-left{float:left!important}.hide{display:none!important}.show{display:block!important}.hidden,.visible-lg,.visible-lg-block,.visible-lg-inline,.visible-lg-inline-block,.visible-md,.visible-md-block,.visible-md-inline,.visible-md-inline-block,.visible-sm,.visible-sm-block,.visible-sm-inline,.visible-sm-inline-block,.visible-xs,.visible-xs-block,.visible-xs-inline,.visible-xs-inline-block{display:none!important}.invisible{visibility:hidden}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.affix{position:fixed}@-ms-viewport{width:device-width}@media (max-width:767px){.visible-xs{display:block!important}table.visible-xs{display:table}tr.visible-xs{display:table-row!important}td.visible-xs,th.visible-xs{display:table-cell!important}.visible-xs-block{display:block!important}.visible-xs-inline{display:inline!important}.visible-xs-inline-block{display:inline-block!important}}@media (min-width:768px) and (max-width:991px){.visible-sm{display:block!important}table.visible-sm{display:table}tr.visible-sm{display:table-row!important}td.visible-sm,th.visible-sm{display:table-cell!important}.visible-sm-block{display:block!important}.visible-sm-inline{display:inline!important}.visible-sm-inline-block{display:inline-block!important}}@media (min-width:992px) and (max-width:1199px){.visible-md{display:block!important}table.visible-md{display:table}tr.visible-md{display:table-row!important}td.visible-md,th.visible-md{display:table-cell!important}.visible-md-block{display:block!important}.visible-md-inline{display:inline!important}.visible-md-inline-block{display:inline-block!important}}@media (min-width:1200px){.visible-lg{display:block!important}table.visible-lg{display:table}tr.visible-lg{display:table-row!important}td.visible-lg,th.visible-lg{display:table-cell!important}.visible-lg-block{display:block!important}.visible-lg-inline{display:inline!important}.visible-lg-inline-block{display:inline-block!important}.hidden-lg{display:none!important}}@media (max-width:767px){.hidden-xs{display:none!important}}@media (min-width:768px) and (max-width:991px){.hidden-sm{display:none!important}}@media (min-width:992px) and (max-width:1199px){.hidden-md{display:none!important}}.visible-print{display:none!important}@media print{.visible-print{display:block!important}table.visible-print{display:table}tr.visible-print{display:table-row!important}td.visible-print,th.visible-print{display:table-cell!important}}.visible-print-block{display:none!important}@media print{.visible-print-block{display:block!important}}.visible-print-inline{display:none!important}@media print{.visible-print-inline{display:inline!important}}.visible-print-inline-block{display:none!important}@media print{.visible-print-inline-block{display:inline-block!important}.hidden-print{display:none!important}}.woocommerce a.button,.woocommerce button.button,.woocommerce input.button,</style><style>.woocommerce #respond input#submit{font-size:100%;margin:0;line-height:1;cursor:pointer;position:relative;text-decoration:none;overflow:visible;padding:.618em 1em;font-weight:700;border-radius:3px;left:auto;color:#515151;background-color:#ebe9eb;border:0;white-space:nowrap;display:inline-block;background-image:none;box-shadow:none;-webkit-box-shadow:none;text-shadow:none}.woocommerce #respond input#submit.loading,.woocommerce a.button.loading,.woocommerce button.button.loading,.woocommerce input.button.loading{opacity:.25;padding-right:2.618em}.woocommerce #respond input#submit.added:after,.woocommerce a.button.added:after,.woocommerce button.button.added:after,.woocommerce input.button.added:after{font-family:WooCommerce;content:"\e017";margin-left:.53em;vertical-align:bottom}
.store-hover-box a{height: 300px;overflow: hidden;}
@media only screen and (max-width : 768px) {.store-hover-box a{height: auto !important;overflow: auto !important;}}

.infinite-scroll-item .store-context > .store-short-description:after{background:none !important;background-image: url(http://www.profi-3d-printer.com/wp-content/uploads/2017/04/1.png) !important;}
.store-context > .store-short-description:after{background:none !important;background-image: url(http://www.profi-3d-printer.com/wp-content/uploads/2017/04/1.png) !important;}
.cat-box p:before{background:none !important;background-image: url(http://www.profi-3d-printer.com/wp-content/uploads/2017/04/1.png) !important;}
.header-view .header-view__container h2 {color: #fff;text-transform: uppercase;font-family: GothaProBol,Arial,sans-serif;font-size: 32px;position: relative;line-height: 42px;padding: 0 0 30px;margin-bottom: 40px;}.header-view .header-view__container h2::after {content: "";display: block;position: absolute;bottom: 0;left: 0;width: 150px;height: 3px;background-color: #ffe200;}
  .header-view .header-view__container h2,.header-view .header-view__container h1{text-shadow: 1px 1px 4px rgba(0,0,0,.9);}
.shop-inner-acardion table{width: 100%;}.shop-inner-acardion table,.shop-inner-acardion table tr,.shop-inner-acardion table td{text-align:left !important;}.shop-inner-acardion table tr{border-bottom:1px solid #cecece;}.shop-inner-acardion table tr:last-child{border-bottom:none;}.hover-bord .hover__box .hd-1 a span{font-size:36px !important;}footer.footer .footer-1 form input[type=submit],footer.footer .footer-2 form input[type=submit]{font-size:11px !important;}footer.footer .footer-2 form input[type=text], footer.footer .footer-2 form input[type=email]{width:150px !important;}
</style>
  <noscript>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/_main.min.css">
  </noscript>


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="body-top">
<style>
.loader svg{width:250px;height:auto;position: relative;left: 5px;}
.loader{
  background: #000;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flex;
  display: -o-flex;
  display: flex;
  flex-direction: column;
  -webkit-align-items: center;
          align-items: center;
  -webkit-justify-content: center;
          justify-content: center;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 999999999;
}
</style>
<div class="loader">
  <p>
    <svg width="210mm" height="210mm" viewBox="0 0 210 210" version="1.1" id="svg8" inkscape:version="0.92.1 r15371" sodipodi:docname="img1.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview id="base" pagecolor="#ffffff" bordercolor="#666666" borderopacity="1.0" inkscape:pageopacity="0.0" inkscape:pageshadow="2" inkscape:zoom="1.4" inkscape:cx="412.75615" inkscape:cy="656.15527" inkscape:document-units="mm" inkscape:current-layer="layer1" showgrid="false" inkscape:window-width="1920" inkscape:window-height="1027" inkscape:window-x="-8" inkscape:window-y="-8" inkscape:window-maximized="1" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g inkscape:label="Layer 1" inkscape:groupmode="layer" id="layer1">
    <path style="fill:#fee100;fill-opacity:1;stroke:#ffe200;stroke-width:0.26458332px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" d="M 139.28422,120.86309 H 66.901783 l 37.230657,49.70387 31.93899,-44.79018 -31.93899,35.52977 -22.300595,-35.71875 z" id="path4511" inkscape:connector-curvature="0" />
    <text xml:space="preserve" style="font-style:normal;font-weight:normal;font-size:10.58333302px;line-height:1.25;font-family:sans-serif;letter-spacing:0px;word-spacing:0px;fill:#000000;fill-opacity:1;stroke:none;stroke-width:0.26458332" x="8.3154755" y="150.34523" id="text4487"><tspan   sodipodi:role="line"   id="tspan4485"   x="8.3154755"   y="150.34523"   style="font-size:19.75555611px;stroke-width:0.26458332;fill:#ffffff">PROFI 3D PRINTER</tspan></text>
  </g>
</svg></p>
<p style="text-transform:uppercase;color: white;font-size:18px;position: relative;top:-25px;">Bitte warten…</p>
</div>
<div class="menu-mobile">
  <nav>

    <?php
    if (('primary') && ($locations = get_nav_menu_locations()) && isset($locations['primary'])) {
      $menu = get_term($locations['primary'], 'nav_menu');
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      $menu_list = '<ul>' . "\n";
      foreach ($menu_items as $key => $menu_item) {
        if ($menu_item->menu_item_parent == 0) {
          $parent = $menu_item->ID;
          $menu_array = array();
          foreach ($menu_items as $submenu) {
            if ($submenu->menu_item_parent == $parent) {
              $bool = true;
              $img_url = get_field('manu_image', 'product_cat_' . $submenu->object_id);
              if ($img_url) {
                $image_url = $img_url['sizes'][ 'menu-image' ];
              } else {
                $image_url = wp_get_attachment_image_url(get_option('dfi_image_id'), 'menu-image');
              }
              $menu_array[] = '<li><a href="' . $submenu->url . '"><img src="' . $image_url . '"><p>' . $submenu->title . '</p></a></li>' . "\n";
            }
          }
          if ($bool == true && count($menu_array) > 0) {
            $menu_list .= '<li>' . "\n";
            $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
            $menu_list .= '<ul>' . "\n";
            $menu_list .= implode("\n", $menu_array);
            $menu_list .= '</ul>' . "\n";
          } else {
            $menu_list .= '<li>' . "\n";
            $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
          }
        }
        // end <li>
        $menu_list .= '</li>' . "\n";
      }
      $menu_list .= '</ul>' . "\n";
    } else {
      $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
    ?>

  </nav>
</div>


<div class="menu-body">
  <nav class="clearfix">

    <a href="#mobile-menu" class="toggle-mnu">
      <span></span>
    </a>

    <div class="logo-wrap">
      <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"
                                                   alt="Logotype"></a>
    </div>

    <?php
    if (('primary') && ($locations = get_nav_menu_locations()) && isset($locations['primary'])) {
      $menu = get_term($locations['primary'], 'nav_menu');
      $menu_items = wp_get_nav_menu_items($menu->term_id);
      $menu_list = '<div class="desctop-menu"><ul class="sf-menu">' . "\n";
      foreach ($menu_items as $key => $menu_item) {
        if ($menu_item->menu_item_parent == 0) {
          $parent = $menu_item->ID;
          $menu_array = array();
          foreach ($menu_items as $submenu) {
            if ($submenu->menu_item_parent == $parent) {
              $bool = true;
              $img_url = get_field('manu_image', 'product_cat_' . $submenu->object_id);
              if ($img_url) {
                $image_url = $img_url['sizes'][ 'menu-image' ];
              } else {
                $image_url = wp_get_attachment_image_url(get_option('dfi_image_id'), 'menu-image');
              }
              $menu_array[] = '<li><a href="' . $submenu->url . '"><div class="menu-image-cut"><img src="' . $image_url . '"></div><p>' . $submenu->title . '</p></a></li>' . "\n";
            }
          }
          if ($bool == true && count($menu_array) > 0) {
            $menu_list .= '<li>' . "\n";
            $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
            $menu_list .= '<div class="sf-mega"><ul>' . "\n";
            $menu_list .= implode("\n", $menu_array);
            $menu_list .= '</ul></div>' . "\n";
          } else {
            $menu_list .= '<li>' . "\n";
            $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
          }
        }
        // end <li>
        $menu_list .= '</li>' . "\n";
      }
      $menu_list .= '</ul></div>' . "\n";
    } else {
      $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
    }
    echo $menu_list;
    ?>
  </nav>




</div>

<article class="article">

  <div class="phone-modal">
    <button class="phone-close-btn">
      <span></span>
    </button>
    <div class="modal-phone">
      <div class="phone-text">
        <p class="lead">
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('phone_title'); ?>
          <?php endif; ?>
        </p>
        <p>
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('phone_text'); ?>
          <?php endif; ?>
        </p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="150" title="Call to us"]'); ?>
    </div>
  </div>

  <div class="cart-container">
    <button class="close-cart">
      <span></span>
    </button>
    <div class="product-body" id="sidebar">
      <h2><?php echo ot_get_option('trl_side_cart'); ?></h2>
      <div class="widget_shopping_cart_content">
        <?php woocommerce_mini_cart(); ?>
      </div>
    </div>
  </div>

  <div class="search-container">
    <button class="close-search">
      <span></span>
    </button>
    <div class="flex-search">
      <form role="search" method="get" class="woocommerce-product-search"
            action="<?php echo esc_url(home_url('/')); ?>">
        <label class="screen-reader-text"
               for="woocommerce-product-search-field"><?php _e('Geben Sie ein, was Sie suchen...', 'woocommerce'); ?></label>
        <input type="search" id="woocommerce-product-search-field" class="search-field"
               placeholder="<?php echo esc_attr_x('Geben Sie ihren Suchbegriff ein?', 'placeholder', 'woocommerce'); ?>"
               name="s"
               title="<?php echo esc_attr_x('Search for:', 'label', 'woocommerce'); ?>"/>
        <input type="submit" value="<?php echo esc_attr_x('Search', 'submit button', 'woocommerce'); ?>"/>
        <input type="hidden" name="post_type" value="product"/>
      </form>
    </div>
  </div>

  <?php if (is_shop() || is_product_category() || is_product_tag()) : ?>
    <div class="filter-container">
      <button class="close-filter">
        <span></span>
      </button>
      <div class="filter-flex-boxing">
        <div class="filter-body">
          <h2>Filter</h2>
        </div>
        <div class="store-filter">
          <div class="store-filter-box">
            <ul>
              <?php dynamic_sidebar('shop-sidebar'); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>


