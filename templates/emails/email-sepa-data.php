<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
            <h2><?php _e( 'SEPA direct debit data', 'ibantest-for-woocommerce' ); ?></h2>
<table id="sepa" cellspacing="0" cellpadding="0" style="width: 100%; vertical-align: top;" border="0">
    <tr>
        <td class="td" style="text-align:left; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;" valign="top" width="50%">

            <p class="text" style="margin: 0">
				<?php foreach ( $fields as $label => $data ) : ?>
                    <span class="text-label"><?php echo wptexturize( $label ); ?>: </span>
                    <span class="text-data"><?php echo wptexturize( $data ); ?></span><br/>
				<?php endforeach; ?>
            </p>
        <?php /*
            <p class="text">
				<?php echo $pre_notification_text; ?>
            </p>
            <h3><?php _e( 'SEPA direct debit mandate', 'ibantest-for-woocommerce' ); ?></h3>
            <p class="text">
              <?php echo $mandate; ?>
            </p>
         */ ?>
        </td>
    </tr>
</table>
<br/>