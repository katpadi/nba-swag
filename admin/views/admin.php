<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Nba_Swag_admin
 * @author    Kat Padilla <hello@katpadi.ph>
 * @license   GPL-2.0+
 * @link      http://example.com
 * @copyright 2014 Kat Padilla
 */
?>

<div class="wrap">

	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
  <h3>Configure the shizzles of your NBA Swag widget here.</h3>
  <hr/>
  <!-- FORM is HERE!!! -->
  <form method="post" action="options.php">
      <?php settings_fields( 'nba-swag-settings-group' ); ?>
      <?php do_settings_sections( 'nba-swag-settings-group' ); ?>
      <table class="form-table">
          <tr valign="top">
          <th scope="row">Answer</th>
            <td>
              <input type="text" name="nba_swag_answer" value="<?php echo get_option('nba_swag_answer'); ?>" /></td>
            </td>
          </tr>
      </table>
      <?php submit_button(); ?>

  </form>
</div>
