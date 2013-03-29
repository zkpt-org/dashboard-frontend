<div id="dial-panel">
    <div class="show-hide-toggle">
        <a href="javascript:;" onclick="fold('#dial-panel');">
        <i class=icon-caret-down></i></a>
        <hr/>
    </div>
    <div class="hide" style="display:block;">
        <div id="big-dial">Pedometer</div>
        <table>
            <tr>
                <td>Logins</td>
                <td>Questions</td>
                <td>Weekend Logins</td>
                <td>Self Tracking</td>
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