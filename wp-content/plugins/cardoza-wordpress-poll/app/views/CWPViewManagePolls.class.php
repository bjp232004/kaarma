<?php

/*
 * Filename : CWPViewManagePolls
 * This is will create an interface to manage polls
 */

class CWPViewManagePolls{

    function init() {?>
        <div id="all-polls">
            <div id="tab1" class="tab-content">
                <div id="manage-polls" style="margin-top: 15px;">
                    <button type="button" class="btn btn-sm btn-success" id="refresh-list" onclick="javascript:refreshPollList()">
                        <i class="fa fa-refresh"></i>
                        <?php _e("Refresh Poll List", "cardozapolldomain");?>
                    </button>
                    <button type="button" class="btn btn-sm btn-warning inpt" id="edit-poll" onclick="javascript:editPoll()">
                        <i class="fa fa-pencil"></i>
                        <?php _e("Edit a Poll", "cardozapolldomain");?>
                    </button>
                    <button type="button" class="btn btn-sm btn-danger inpt" id="delete-poll" onclick="javascript:deletePoll()">
                        <i class="fa fa-remove"></i>
                        <?php _e("Delete a Poll", "cardozapolldomain");?>
                    </button>
                    <div id="all-polls" style="margin-top: 15px;">
                        <table class="table table-hover">
                            <thead>
                            <th>ID</th>
                            <th><?php _e("Name", "cardozapolldomain");?></th>
                            <th><?php _e("Question", "cardozapolldomain");?></th>
                            <th><?php _e("Answer type", "cardozapolldomain");?></th>
                            <th><?php _e("Start date", "cardozapolldomain");?></th>
                            <th><?php _e("End date", "cardozapolldomain");?></th>
                            <th><?php _e("Status", "cardozapolldomain");?></th>
                            <th><?php _e("Total votes", "cardozapolldomain");?></th>
                            <th><?php _e("View Result", "cardozapolldomain");?></th>
                            </thead>
                            <form id="manage-poll">
                                <?php
                                $controller = new CWPController();
                                $polls = $controller->getPollList();
                                $total_votes = 0;
                                foreach($polls as $poll):?>
                                    <tr>
                                        <td align="center"><?php print $poll->id;?></td>
                                        <td style="padding-left:3px;"><?php print $poll->name;?></td>
                                        <td style="padding-left:3px;"><?php print $poll->question;?></td>
                                        <td style="padding-left:3px;"><?php print $poll->answer_type;?></td>
                                        <td align="center"><?php print $poll->start_date;?></td>
                                        <td align="center"><?php print $poll->end_date;?></td>
                                        <td align="center">
                                            <?php
                                            $stimestamp = $controller->getStrToTime($poll->start_date);
                                            $etimestamp = $controller->getStrToTime($poll->end_date);
                                            $current_time = time();
                                            if($current_time < $etimestamp && $current_time > $stimestamp)
                                                echo __("Open", "cardozapolldomain");
                                            elseif($current_time < $stimestamp)
                                                echo __("Not yet opened", "cardozapolldomain");
                                            else
                                                echo __("Closed", "cardozapolldomain");
                                            ?>
                                        </td>
                                        <td align="center"><?php print $poll->total_votes;?></td>
                                        <td align="center">
                                            <button class="btn btn-xs btn-info" name="view_poll_results" type="button" onclick="javascript:viewPollResults(<?php print $poll->id;?>)">
                                                <?php _e("View Result", "cardozapolldomain");?>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                    $total_votes = $total_votes +  $poll->total_votes;
                                endforeach;
                                ?>
                            </form>
                        </table>
                        <p><b><?php _e("Total voters", "cardozapolldomain");?>:</b> <?php print $total_votes;?></p>
                    </div>
                </div>
            </div>
        </div>
<?php }
}
?>
