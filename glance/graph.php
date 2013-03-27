<div id="graph">
    <h3>User Engagement Over Timeline</h3>
    <? include('graph_js.php'); ?>
    <div id="events">
        <h4 id="events-label">Events Over Timeline</h4>
        <table>
            <tr onclick="ToggleEvent('A', 101);">
                <td class="date">05-25-2012</td>
                <td>10 week Challenge started for Program 2</td>
                <td class="event-key">A</td>
            </tr>
            <tr onclick="ToggleEvent('B', 102);">
                <td class="date">07-20-2012</td>
                <td>4 week Challenge started for Program 1</td>
                <td class="event-key">B</td>
            </tr>
            <tr onclick="ToggleEvent('C', 103);">
                <td class="date">8-11-2012</td>
                <td>Division ABC of company WXY started signing up on Program 2</td>
                <td class="event-key">C</td>
            </tr>
            <tr onclick="ToggleEvent('D', 104);">
                <td class="date">10-01-2012</td>
                <td>8 week Challenge started for Program 3</td>
                <td class="event-key">D</td>
            </tr>
            <tr onclick="ToggleEvent('E', 105);">
                <td class="date">10-27-2012</td>
                <td>10 week Challenge started for Program 4</td>
                <td class="event-key">E</td>
            </tr>
        </table>
    </div>
    <div id="graph-key">
        <ul>
            <li title="Used on 5 or more days">
                <a href="javascript:;" onclick="ToggleGraph(this);">
                    <div class="key-circle pedometer"></div>Pedometer<i class="icon-ok"></i>
                </a>
            </li>            
            <li  title="Logged in on 4 or more days">
                <a href="javascript:;" onclick="ToggleGraph(this);">
                    <div class="key-circle login"></div>Logins<i class="icon-ok"></i>
                </a>
            </li>
            
            <li title="Answered 3 or more coach questions">
                <a href="javascript:;" onclick="ToggleGraph(this);"> 
                    <div class="key-circle question"></div>Questions<i class="icon-ok"></i>
                </a>
            </li>
            <li title="Users who reported on self tracker">
                <a href="javascript:;" onclick="ToggleGraph(this);">
                    <div class="key-circle tracker"></div>Self Trackers<i class="icon-ok"></i>
                </a>
            </li>
            <li title="Logged in over the weekend">
                <a href="javascript:;" onclick="ToggleGraph(this);">
                    <div class="key-circle weekend"></div>Weekend Logins<i class="icon-ok"></i>
                </a>
            </li>
        </ul>
    </div>
</div>