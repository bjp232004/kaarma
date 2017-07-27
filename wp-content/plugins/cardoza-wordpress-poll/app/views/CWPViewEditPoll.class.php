<?php

/*
 * 
 */
class CWPViewEditPoll {

    function init() {
        $controller = new CWPController();
        $poll_data = $controller->getPollByID();
        $poll = $poll_data[0];
        $poll_answers = $poll_data[1];
        ?>
		<div id="all-polls">
			<form id="edit-poll-form" name="create_poll">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<label><?php _e('Edit Poll', 'cardozapolldomain');?></label>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<label><?php _e('Poll Friendly Name','cardozapolldomain');?>*</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="poll-name" name="poll_name" style="width:350px;" type="text" value="<?php echo $poll[0]->name; ?>" />
							</div>
						</div>
						<div class="row" style="margin-top: 15px;">
							<div class="col-sm-12">
								<label><?php _e('Poll Question','cardozapolldomain');?>*</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="poll-question" name="poll_question" style="width:350px;" type="text" value="<?php print $poll[0]->question; ?>" />
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<label><?php _e('Poll Answers','cardozapolldomain');?></label>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<input class="btn btn-sm btn-success" onclick="javascript:addAnswer(<?php echo $poll[0]->id;?>)" type="button" value="<?php _e("Add more answers", "cardozapolldomain");?>"/>
								<?php foreach($poll_answers as $answers):?>
									<div class="row" style="margin-top: 10px;">
										<div class="col-sm-12">
											<?php echo $answers->answer;?>
											<a class="btn btn-xs btn-warning" href="javascript:editAnswer(<?php echo $answers->id.','.$poll[0]->id;?>)"><?php _e("Edit", "cardozapolldomain");?></a>
											<a class="btn btn-xs btn-danger" href="javascript:deleteAnswer(<?php echo $answers->id.','.$poll[0]->id;?>)"><?php _e("Delete", "cardozapolldomain");?></a>
										</div>
									</div>
								<?php endforeach;?>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<label><?php _e('Poll Answer type','cardozapolldomain');?></label>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<label><?php _e('Allow users to select','cardozapolldomain');?>*</label>
							</div>
							<div class="col-sm-12">
								<select class="form-control" name="poll_answer_type" id="poll-answer-type">
									<option value="one" <?php if($poll[0]->answer_type == "one") echo "selected";?>><?php _e("Only one answer", "cardozapolldomain");?></option>
									<option value="multiple" <?php if($poll[0]->answer_type == "multiple") echo "selected";?>><?php _e("More than one answer", "cardozapolldomain");?></option>
								</select>
							</div>
						</div>
						<div class="row" style="margin-top: 15px;display:none;" id="nanswers">
							<div class="col-sm-12">
								<label><?php _e('No of answers to allow','cardozapolldomain');?>*</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="no-of-answers" style="width:40px" name="no_of_answers" type="text" value="<?php print $poll[0]->no_of_answers; ?>" />
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-primary">
					<div class="panel-heading">
						<label><?php _e('Poll Start/End Date','cardozapolldomain');?></label>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								<label><?php _e('Start date','cardozapolldomain');?>* (mm/dd/yyyy)</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="edit_start_date" type="text" name="s_date" value="<?php print $poll[0]->start_date; ?>" style="margin-right:10px;width:100px;"/>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<label><?php _e('End date','cardozapolldomain');?>* (mm/dd/yyyy)</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="edit_end_date" type="text" name="e_date" value="<?php print $poll[0]->end_date; ?>" style="margin-right:10px;width:100px;"/>
							</div>
						</div>
					</div>
				</div>
				<input type="hidden" name="action" value="save_changes" />
				<input type="hidden" name="pollid" value="<?php print $poll[0]->id; ?>" />

				<input class="btn btn-primary" id="save-changes" onclick="javascript:save_changes()"
					   type="button" value="<?php _e("Save", "cardozapolldomain");?>"/>
				<label>* <?php _e("Mandatory fields", "cardozapolldomain"); ?>.</label>
			</form>
		</div>
        <?php
    }
}
?>
