<nav>
<ul>
    <li <? echo $page=="glance"       ? "class=selected " : " "; ?>><a href="../glance">At a Glance</a></li>
    <li <? echo $page=="outlook"      ? "class=selected " : " "; ?>><a href="../outlook">Future Outlook</a></li>
    <li <? echo $page=="outcomes"     ? "class=selected " : " "; ?>><a href="../outcomes">Outcomes</a></li>
    <li <? echo $page=="intervention" ? "class=selected " : " "; ?>><a href="../intervention">Intervention Builder</a></li>
    <li <? echo $page=="benchmark"    ? "class=selected " : " "; ?>><a href="../benchmarks">Benchmarks</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="webfont">U </i>
        Ramesh Kumar
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu dropdown-menu-arrow">
      <li><a><i class=icon-dashboard></i> Account</a></li>
      <li><a><i class=icon-wrench></i> Settings</a></li>
      <li><a><i class=icon-question-sign></i> Help</a></li>
      <li class="divider"></li>
      <li><a> <i class=icon-off></i> Logout</a></li>
    </ul>
    </li>
</ul>
</nav>