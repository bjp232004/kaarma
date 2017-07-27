<?php

/*
 * Filename : CWPViewWidget.class.php
 * This will display the options of widget for poll
 */
class CWPViewWidget{
    
    function __construct() {
        $controller = new CWPController();
		if(isset($_POST['save-widget-opt'])) $controller->saveWidgetOptions();
        $opts = $controller->cwpp_options();
        ?>
        <form method="post" action="">
			<div class="panel panel-primary" style="margin-top: 15px;">
				<div class="panel-heading">
					<label><?php _e('Widget options','cardozapolldomain');?></label>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<label><?php _e('Title','cardozapolldomain');?></label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="widget-title" name="widget_title" type="text" value="<?php if(!empty($opts['title'])) print $opts['title'];?>" />
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<label><?php _e('Display Older Polls Link','cardozapolldomain');?>*</label>
						</div>
						<div class="col-sm-12">
							<select class="form-control" name="poll-archive">
								<option value="yes"
									<?php
									if(!empty($opts['archive']) && $opts['archive']=='yes') echo " selected";
									?>
								><?php _e('Yes','cardozapolldomain');?></option>
								<option value="no"
									<?php
									if(!empty($opts['archive']) && $opts['archive']=='no') echo " selected";
									?>
								><?php _e('No','cardozapolldomain');?></option>
							</select>
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<label><?php _e('Select the latest number of polls to be displayed','cardozapolldomain');?>*</label>
						</div>
						<div class="col-sm-12">
							<select class="form-control" name="no_of_polls">
								<?php
								for($i=1; $i<=10; $i++){
									echo "<option value=".$i;
									if(!empty($opts['no_of_polls']) && $opts['no_of_polls']==$i) echo " selected";
									echo ">".$i."</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<label><?php _e('Width','cardozapolldomain');?>(px - only number)</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="widget-width" name="widget_width" type="text" value="<?php if(!empty($opts['width'])) print $opts['width'];?>" />
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<label><?php _e('Height','cardozapolldomain');?>(px - only number)</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="widget-height" name="widget_height" type="text" value="<?php if(!empty($opts['height'])) print $opts['height'];?>" />
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<input class="btn btn-success" name="save-widget-opt" type="submit" value="<?php _e('Save','cardozapolldomain');?>"/>
						</div>
					</div>
				</div>
			</div>
		</form>
<?php
    }
}
?>
