<?php
if ( !defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


function clickblaze_page_tabs( $current = 'general' ) {
    $tabs = array(
        'general'   => __( 'General', 'clickblaze' ),
        'header'  => __( 'Click Blaze Header Notification', 'clickblaze' ),
        'optin'  => __( 'Click Blaze Opt-In', 'ellio' ),
        'nobounce'  => __( 'Click Blaze NoBounce', 'clickblaze' )

    );
    $html = '<nav class="nav-tab-wrapper">';
    foreach( $tabs as $tab => $name ){
        $class = ( $tab == $current ) ? 'nav-tab-active' : '';
        $html .= '<a class="nav-tab ' . $class . '" href="?page=clickblaze_settings&tab=' . $tab . '">' . $name . '</a>';
    }
    $html .= '</nav>';
    echo $html;
}

function clickblaze_display_setting_panels(){
	?>
<div class="wrap">
      <h2>Click Blaze - a Marketing Tool for WordPress</h2>
	  <?php
  if ( isset( $_GET['m'] ) && $_GET['m'] == '1' )
  {
?>
   <div id='message' class='updated fade'><p><strong>You have successfully updated your email.</strong></p></div>
<?php
  }
//tabs
	$tab = ( !empty( $_GET['tab'] ) ) ? esc_attr( $_GET['tab'] ) : 'general';
clickblaze_page_tabs( $tab );
if ( $tab == 'general' ) { ?>
   <div style="padding:20px;">
     <h2>Click Blaze Marketing Tool Activation</h2>

     <p>Please enter the license key for this product to activate it. You were given a license key when you purchased this item. <strong>PRO Version ONLY</strong><br/>
     <a href="https://clickblaze.io" target="_blank">GO PRO</a></p>
     <form action="" method="post">
         <table class="form-table">
             <tr>
                 <th style="width:100px;"><label for="sample_license_key">License Key</label></th>
                 <td ><input class="regular-text" type="text" id="cb_license_key" name="cb_license_key"  value="<?php echo get_option('cb_license_key'); ?>" disabled ></td>
             </tr>
         </table>
         <p class="submit">
             <input type="submit" name="activate_license" value="Activate" class="button-primary" disabled />
             <input type="submit" name="deactivate_license" value="Deactivate" class="button" disabled />
         </p>
     </form>
    </div>
    <div style="padding:20px;">
      <h2>IMPORTANT</h2>
        <p>If you feel the Default settings did not save to the database, please click the 'Reset All' button within the Click Blaze Admin dashboard.</p>
        </div>
    <?php } // end tab 1
	  else if ($tab == 'nobounce') { ?>
      <div style="padding:20px;">
        <h2>Click Blaze NoBounce</h2>
          <p>Click Blaze NoBounce allows you to add an exit offer pop up lightbox to your conversion pages. Click Blaze NoBounce can be triggered by time on page (which you set the duration until the exit offer appears on the page) and as the visitor's mouse moves towards the top navigation.</p>
          <h3>Available in Pro Version</h3>
          <a href="https://clickblaze.io" target="_blank">GO PRO</a>

      </div>
    <?php } // end nobounce tab
	  else if ($tab == 'optin') { ?>
        <div style="padding:20px;">
          <h2>Click Blaze OptIn</h2>
            <p>Click Blaze OptIn allows you to add an email opt-in slide over to any page on your website. </p>
            <h3>Available in Pro Version</h3>
            <a href="https://clickblaze.io" target="_blank">GO PRO</a>
			</div>
<?php }
	   else if ($tab == 'header') { ?>
  <div style="padding:20px;">
    <h2>Click Blaze Header Notification</h2>
      <p>Click Blaze Header Notification allows you to add a notification call to action across the top of your website. </p>
      <h3>Setup</h3>
      <p>Use the <a href="admin.php?page=_clickblaze&tab=3">Website Notification tool</a> to configure the look and feel as well as where you would
        like Click Blaze Header Notification to appear on your website. </p>
        <h3>Pro Version</h3>
        <p><a href="https://clickblaze.io" target="_blank">Upgrade</a> to Click Blaze Pro to schedule header notifications to exact pages and posts. Add page and post specific messaging using Custom Fields.</p>

  </div>
<?php } ?>
</div>
<?php
}
?>
