<?php
class CWPViewUserLogs{
    function __construct() {?>
            <div id="tab7" class="tab-content">
                <div class="panel panel-primary" style="margin-top :15px;">
                    <div class="panel-heading">
                        <label><?php _e('Poll User Logs','cardozapolldomain');?></label>
                    </div>
                    <div class="panel-body">
                        <div id="all-polls">
                            <table class="table table-hover">
                                <thead>
                                <th>ID</th>
                                <th><?php _e('Name','cardozapolldomain');?></th>
                                <th><?php _e('Question','cardozapolldomain');?></th>
                                <th><?php _e('Answer type','cardozapolldomain');?></th>
                                <th><?php _e('Start date','cardozapolldomain');?></th>
                                <th><?php _e('End date','cardozapolldomain');?></th>
                                <th><?php _e('Status','cardozapolldomain');?></th>
                                <th><?php _e('Total votes','cardozapolldomain');?></th>
                                <th><?php _e('View User Logs','cardozapolldomain');?></th>
                                </thead>
                                <form id="manage-poll">
                                    <?php
                                    $controller = new CWPController();
                                    $polls = $controller->getPollList();
                                    $total_votes = 0;
                                    foreach($polls as $poll):?>
                                        <tr>
                                            <td><?php print $poll->id;?></td>
                                            <td><?php print $poll->name;?></td>
                                            <td><?php print $poll->question;?></td>
                                            <td><?php print $poll->answer_type;?></td>
                                            <td><?php print $poll->start_date;?></td>
                                            <td><?php print $poll->end_date;?></td>
                                            <td>
                                                <?php
                                                $timestamp = $controller->getStrToTime($poll->end_date);
                                                $current_time = time();
                                                if($current_time < $timestamp) _e('Open','cardozapolldomain');
                                                else  _e('Closed','cardozapolldomain');
                                                ?>
                                            </td>
                                            <td><?php print $poll->total_votes;?></td>
                                            <td>
                                                <button class="btn btn-xs btn-info" name="polluserlogs" type="button" onclick="javascript:userlogs(<?php echo $poll->id;?>)">
                                                    <?php _e('View User Logs','cardozapolldomain');?>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php
                                        $total_votes = $total_votes +  $poll->total_votes;
                                    endforeach;
                                    ?>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div id="poll-logs"></div>
            </div>
        </div>
<?php }
}
?>
