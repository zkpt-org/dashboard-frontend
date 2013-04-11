<div id="intervention-builder-1" class="tab-pane active tabbed-box">

    <? include('filters.php') ?>
    <table>
        <tr id="parameters">        
        <td id="currency-box" >
            <label>Payment</label>
            <input id="currency" type="number" value="50" min="0" step="5" max="10000" onchange="CalculateScore('f1');"/>
        </td>
        <td class="operators">+</td>
        <td id="days-box" onchange="CalculateScore('f1');">
            <label>Duration</label>
            <input id="days" type="number" value="7" min="1" max="365" />
        </td>
        <td class="operators">+</td>
        <td id="steps-box" onchange="CalculateScore('f1');">
            <label>Number of Steps</label>
            <input id="steps" type="number" value="5000" min="100" step="100" />
        </td>
        <td class="operators">+</td>
        <td id="kudos-box" onchange="CalculateScore('f1');">
            <label>Kudos Earned</label>
            <input id="kudos" type="number" value="50" min="0" step="10" />
        </td>
        <td class="operators">=</td>
        <td id="result-box-1">
            <br />
            <div id="result-1" class="circle large">
                <div id="lift-box">
                    <div id="lift">0</div>
                </div>
            </div>
        </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div class="small" id="lift-label">point lift</div>
            </td>
        </tr>         
    </table>
    
</div>