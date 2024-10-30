<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_filter('template_include','clickblaze_header_notification_bar',1);
function clickblaze_header_notification_bar($template) {
	ob_start();
	return $template;
}
if ( ! is_admin() ) {
add_filter('shutdown','clickblaze_header_notification_bar_inject',0);
} else {}
function clickblaze_header_notification_bar_inject() {
	//$inject = "test";
  global $eliio;
  $header_promo_tracking =  $eliio ['eliio-header-notification-tracking'];
  $header_promo_copy =  $eliio ['eliio-header-notification-copy'];
  $header_promo =  $eliio ['eliio-header-notification-active'];
  $header_promo_back = $eliio ['eliio-header-notification_bck'];
  $header_promo_font = $eliio ['eliio-header-notification_font'];
  $header_promo_single = $eliio ['eliio-header-notification_single'];
  $header_promo_page = $eliio ['eliio-header-notification_page'];
  $header_promo_frontpage = $eliio ['eliio-header-notification_frontpage'];
  $header_promo_single_post_limit = $eliio ['eliio-header-notification_single-post-limit'];
  $header_promo_cta = $eliio['eliio-header-notification-cta'];
  $header_promo_cta_link = $eliio['eliio-header-notification-cta-link'];
  $header_promo_cta_bck = $eliio['eliio-header-notification_cta_bck'];
  $header_promo_cta_border = $eliio['eliio-header-notification_cta_border'];
  $header_promo_cta_font = $eliio['eliio-header-notification_cta_font'];
  $header_promo_cta_bck_hover = $eliio['eliio-header-notification_cta_bck_hover'];
  $header_promo_cta_border_hover = $eliio['eliio-header-notification_cta_border_hover'];
  $header_promo_cta_font_hover = $eliio['eliio-header-notification_cta_bck_font_hover'];

	clickblaze_headernotify_style ($header_promo_font,$header_promo_back,$header_promo_cta_bck,$header_promo_cta_font,$header_promo_cta_border,$header_promo_cta_bck_hover,$header_promo_cta_font_hover,$header_promo_cta_border_hover);

  global $wp_query;
  $postID = $wp_query->post->ID;
  add_post_meta($postID , 'hn_eliio_copy', '', true);
  add_post_meta($postID , 'hn_eliio_cta', '', true);
  add_post_meta($postID , 'hn_eliio_link', '', true);
  add_post_meta($postID , 'hn_eliio_tracking', '', true);
  $hn_copy=get_post_meta($postID,'hn_eliio_copy',true);
  $hn_cta=get_post_meta($postID,'hn_eliio_cta',true);
  $hn_link=get_post_meta($postID,'hn_eliio_link',true);
  $hn_tracking=get_post_meta($postID,'hn_eliio_tracking',true);

  //Post Limit
  $a = $eliio ['eliio-header-notification-single-number'];
  foreach ($a as $p) {
  $single[] = $p;
  }
   $post_array = $single;
   //Page Limit
   $header_promo_single_page_limit = $eliio ['eliio-header-notification_single-page-limit'];
   $display_pages = $eliio ['eliio-header-notification-page-number'];
   foreach ($display_pages as $page) {
   $selected_pages[] = $page;
   }
    $page_array = $selected_pages;

 if (($header_promo_frontpage == '1')) {
          if (is_front_page()){
            if (!empty ($hn_copy)) {
              $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
              <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
              <div class="hn_eliio_clear"></div>
                 <div class="hn_eliio_close">X</div>
              </div>';
            } else {
           $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
           <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
           <div class="hn_eliio_clear"></div>
              <div class="hn_eliio_close">X</div>
           </div>';
         }
         }
       } // end Front Page

if (($header_promo_single == '1') ) {
     if (($header_promo_single_post_limit  == '1')) {
        if (is_single($post_array)){
          if (!empty ($hn_copy)) {
            $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
            <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
            <div class="hn_eliio_clear"></div>
               <div class="hn_eliio_close">X</div>
            </div>';
          } else {
         $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
         <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
         <div class="hn_eliio_clear"></div>
            <div class="hn_eliio_close">X</div>
         </div>';
       }
         }
       } else {
         if (is_single( )){
           if (!empty ($hn_copy)) {
             $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
             <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
             <div class="hn_eliio_clear"></div>
                <div class="hn_eliio_close">X</div>
             </div>';
           } else {
          $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
          <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
          <div class="hn_eliio_clear"></div>
             <div class="hn_eliio_close">X</div>
          </div>';
        }
          }
       }
} //end Posts

if (($header_promo_page == '1') ) {
     if (($header_promo_single_page_limit  == '1')) {
        if (is_page($page_array)){
          if (!empty ($hn_copy)) {
            $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
            <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
            <div class="hn_eliio_clear"></div>
               <div class="hn_eliio_close">X</div>
            </div>';
          } else {
         $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
         <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
         <div class="hn_eliio_clear"></div>
            <div class="hn_eliio_close">X</div>
         </div>';
       }
         }
       } else {
         if (is_page( )){
           if (!empty ($hn_copy)) {
             $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
             <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
             <div class="hn_eliio_clear"></div>
                <div class="hn_eliio_close">X</div>
             </div>';
           } else {
          $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
          <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
          <div class="hn_eliio_clear"></div>
             <div class="hn_eliio_close">X</div>
          </div>';
        }
          }
       }
} //end Page
if (($header_promo == '1') ) {

  if (!empty ($hn_copy)) {
    $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $hn_copy . '</div>
    <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $hn_link .'"  onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $hn_tracking . '\');">' . $hn_cta . '</a></div>
    <div class="hn_eliio_clear"></div>
       <div class="hn_eliio_close">X</div>
    </div>';
  } else {
 $inject = '<div class="hn_header_promo"><div class="hn_eliio_span">' . $header_promo_copy . '</div>
 <div class="hn_eliio_span"><a class="hn_eliio_cta" href="' . $header_promo_cta_link .'" onclick="ga(\'send\', \'event\', \'eliio\', \'Click\', \'Header Notification' . $header_promo_tracking . '\');">' . $header_promo_cta. '</a></div>
 <div class="hn_eliio_clear"></div>
    <div class="hn_eliio_close">X</div>
 </div>';
}

} //end Site

	$content = ob_get_clean();
	$content = preg_replace('#<body([^>]*)>#i',"<body$1>{$inject}",$content);
echo $content;
}

function clickblaze_headernotify_style ($header_promo_font,$header_promo_back,$header_promo_cta_bck,$header_promo_cta_font,$header_promo_cta_border,$header_promo_cta_bck_hover,$header_promo_cta_font_hover,$header_promo_cta_border_hover) {

	?>
<style>
  .hn_eliio_close {position: absolute; top:3px; right:6px; color:<?php echo $header_promo_font; ?>; font-size:13px;cursor:pointer;}
   @media (min-width: 768px) {
   .hn_header_promo {padding: 10px 5px; font-size: 18px; color:<?php echo $header_promo_font; ?>; background-color:<?php echo $header_promo_back; ?>; text-align: center;
     position:relative; z-index:9999; }
     .hn_eliio_span {position: relative; float: left; padding:0 10px; width:50%;}
     .hn_eliio_clear {clear: both;}
     a.hn_eliio_cta {padding:4px 7px; background-color:<?php echo $header_promo_cta_bck; ?>; color:<?php echo $header_promo_cta_font; ?>!important; font-size:14px; border:1px solid <?php echo $header_promo_cta_border; ?>; text-decoration: none!important;}
    a.hn_eliio_cta:hover {background-color:<?php echo $header_promo_cta_bck_hover; ?>; color:<?php echo $header_promo_cta_font_hover; ?>; border:1px solid <?php echo $header_promo_cta_border_hover; ?>;text-decoration:none!important;}
   }
   @media (max-width: 767px) {
   .hn_header_promo {padding: 10px 5px; font-size: 15px; color:<?php echo $header_promo_font; ?>; background-color:<?php echo $header_promo_back; ?>; text-align: center;position:relative; z-index:9999; }
   .hn_eliio_span {position: relative; float: left; padding:0 10px; width:50%;}
   .hn_eliio_clear {clear: both;}
   a.hn_eliio_cta {padding:4px 7px; background-color:<?php echo $header_promo_cta_bck; ?>; color:<?php echo $header_promo_cta_font; ?>!important; font-size:14px; border:1px solid <?php echo $header_promo_cta_border; ?>; text-decoration: none!important;}
  a.hn_eliio_cta:hover {background-color:<?php echo $header_promo_cta_bck_hover; ?>; color:<?php echo $header_promo_cta_font_hover; ?>; border:1px solid <?php echo $header_promo_cta_border_hover; ?>;text-decoration:none!important;}
   }
   .header_promo a {color:<?php echo $header_promo_font; ?>; text-decoration: underline;}
   </style>
<?php
}
 ?>
