<?php
/*
 * Filename: CWPViewCreatePoll.class.php
 * This is the class file which will have all the markup for the 
 * user interface to create a new poll.
 */

class CWPViewCreatePoll{

    public function __construct() {?>
		<form id="create-poll" name="create_poll" style="margin-top: 15px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<label><?php _e('Add New Poll', 'cardozapolldomain');?></label>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12">
							<label><?php _e('Poll Friendly Name','cardozapolldomain');?>*</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="poll-name" name="poll_name" type="text" value="" />
						</div>
					</div>
					<div class="row" style="margin-top: 15px;">
						<div class="col-sm-12">
							<label><?php _e('Poll Question','cardozapolldomain');?>*</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="poll-question" name="poll_question" type="text" value="" />
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
							<button type="button" class="btn btn-sm btn-success" id="add-answer" onclick="javascript:appendAnswers()">
								<i class="fa fa-plus"></i>
								<?php _e('Add answer','cardozapolldomain');?>
							</button>
							<button type="button" class="btn btn-sm btn-danger" id="remove-answer" onclick="javascript:removeAnswers()">
								<i class="fa fa-remove"></i>
								<?php _e('Remove Answer','cardozapolldomain');?>
							</button>
						</div>
					</div>
					<div class="answers">
						<div class="row" style="margin-top: 15px;">
							<div class="col-sm-12">
								<label><?php _e('Answer','cardozapolldomain');?> 1*</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="ans1" name="answer1" type="text" value="" />
							</div>
						</div>
						<div class="row" style="margin-top: 15px;">
							<div class="col-sm-12">
								<label><?php _e('Answer','cardozapolldomain');?> 2*</label>
							</div>
							<div class="col-sm-12">
								<input class="form-control" id="ans2" name="answer2" type="text" value="" />
							</div>
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
							<select class="form-control" name="poll_answer_type" id="poll-answer-type" onchange="javascript:showanswers(this.value)">
								<option value="one"> <?php _e('Only one answer','cardozapolldomain');?></option>
								<option value="multiple"><?php _e('More than one answer','cardozapolldomain');?></option>
							</select>
						</div>
					</div>
					<div class="row" style="margin-top: 15px;display:none;" id="nanswers">
						<div class="col-sm-12">
							<label><?php _e('No of answers to allow','cardozapolldomain');?>*</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="no-of-answers" style="max-width:150px" name="no_of_answers" type="text" value="" />
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
							<input class="form-control" id="start_date" type="text" name="s_date"/>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<label><?php _e('End date','cardozapolldomain');?>* (mm/dd/yyyy)</label>
						</div>
						<div class="col-sm-12">
							<input class="form-control" id="end_date" type="text" name="e_date"/>
						</div>
					</div>
				</div>
			</div>
			<input type="hidden" name="action" value="save_poll" />
			<button type="button" id="add-answer" class="btn btn-primary"
					onclick="javascript:validateAddNewPollForm()"
					onblur="javascript:setBorderDefault('add-answer');"
					onfocus="javascript:setBorder('add-answer');"><?php _e('Save','cardozapolldomain');?></button>
		</form>
        <?php
    }

}
?>