<div id=alerts-tab>
    <a href="javascript:;" onclick="ToggleAlertsBox();">
       <i class="icon-bell" 
          onmouseover="$(this).toggleClass('icon-bell');"
          onmouseout="$(this).toggleClass('icon-bell-alt');"></i>
    </a>
    <div id=alerts-label>alerts</div>
</div>
<div id="alerts-box">
<!-- EXAMPLE NO ALERT -->
    <div class="alert alert-info" id="no-alerts">
        <i class="icon-bell"></i>
        <strong>There are currently no alerts.</strong>
    </div>

<!-- EXAMPLE RED AND GREEN ALERT -->
<!--
    <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="icon-warning-sign"></i>
        <strong>10% of users in Program A are in the red zone.</strong>
    </div>

    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="icon-ok"></i>
        <strong>70% of users from Program B are now in the green zone.</strong>
    </div>   
-->     

<!-- EXAMPLE YELLOW ALERT -->
<!--
    <div class="alert alert-warning">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <i class="icon-bell"></i>
        <strong>60% of users in Program A are in the yellow zone.</strong>
    </div>
-->
</div>
