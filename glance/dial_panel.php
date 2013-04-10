<div id="dial-panel">
    <div class="show-hide-toggle">
        <a href="javascript:;" onclick="fold('#dial-panel');">
        <i class=icon-caret-down></i></a>
        <hr/>
    </div>
    <div class="hide" style="display:block;">
        <!-- <h3>User Engagement Today</h3> -->
        <div id="big-dial" data-toggle="tooltip" title="Percentage of users with five or more days of activity.">Pedometer</div>
        <table>
            <tr id="labels">
                <td data-toggle="tooltip" title="Percentage of users with four or more days on which they logged in."  id="d1">Logins</td>
                <td data-toggle="tooltip" title="Percentage of users who answered three or more coach questions." id="d2">Questions</td>
                <td data-toggle="tooltip" title="Percentage of users with weekend login activity." id="d3">Weekend Logins</td>
                <td data-toggle="tooltip" title="Percentage of users who reported on the self tracker." id="d4">Self Tracking</td>
            </tr>
        </table>
        
        <? for($g=0; $g<5; $g++ ): ?>               
            <div id=power-gauge-<? echo $g; echo $g==0 ? " class=gauge-lg" : " class=gauge-sm"; ?> >
                <? include('dial.php') ?>
                <? include('counter.php') ?>
            </div>
        <? endfor; ?>
    </div>
</div>