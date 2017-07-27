<?php
/*
 * Filename: CWPViewCreatePoll.class.php
 * This is the class file which will have all the markup for the 
 * user interface to create a new poll.
 */
class CWPViewCustomCSS{

    public function __construct() {
    	if(isset($_POST['save_css_code'])) update_option('poll_custom_css_code', ltrim($_POST['css_code']))
       	?>
        <form method="post" action="">
        	<div class="panel panel-primary" style="margin-top: 15px;">
				<div class="panel-heading">
					<label><?php _e('Put your custom CSS code here', 'cardozapolldomain');?></label>
				</div>
				<div class="panel-body">
					<textarea class="form-control" name="css_code" style="height: 300px;resize:none;"><?php print ltrim(get_option('poll_custom_css_code'));?></textarea>
					<input style="margin-top: 15px;" class="btn btn-primary" type="submit" name="save_css_code" value="<?php _e('Save', 'cardozapolldomain');?>" />
				</div>
			</div>
        </form>
        <?php
    }
}
?>