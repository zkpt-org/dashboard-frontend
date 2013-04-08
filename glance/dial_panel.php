<div id="dial-panel">
    <div class="show-hide-toggle">
        <a href="javascript:;" onclick="fold('#dial-panel');">
        <i class=icon-caret-down></i></a>
        <hr/>
    </div>
    <div class="hide" style="display:block;">
        <!-- <h3>User Engagement Today</h3> -->
        <div id="big-dial" title="Percentage of users with 5 or more days of activity.">Pedometer</div>
        <table>
            <tr>
                <td title="Percentage of users with 4 or more days on which they logged in.">Logins</td>
                <td title="Percentage of users who answered 3 or more coach questions.">Questions</td>
                <td title="Percentage of users with weekend login activity.">Weekend Logins</td>
                <td title="Percentage of users who reported on the self tracker.">Self Tracking</td>
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