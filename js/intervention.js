var payment;
var duration;
var steps;
var kudos;
var score;

$(document).ready(function() {
    // create Curerncy NumericTextBox from input HTML element
    $("#currency").kendoNumericTextBox({
        format: "c",
        decimals: 3,
        spin: onSpin
    });

    $("#days").kendoNumericTextBox({
        format: "# days",
        spin: onSpin
    });

    // create NumericTextBox from input HTML element using custom format
    $("#steps").kendoNumericTextBox({
        format: "#, steps",
        spin: onSpin
    });
    
    $("#kudos").kendoNumericTextBox({
        format: "#, kudos",
        spin: onSpin
    });
    
    function onSpin() {
        CalculateScore();
    }
    
    payment  = $("#currency").data("kendoNumericTextBox");
    duration = $("#days").data("kendoNumericTextBox");
    steps    = $("#steps").data("kendoNumericTextBox");
    kudos    = $("#kudos").data("kendoNumericTextBox");        
    SetDefaults(50,7,5000,50);
    CalculateScore();
});

function CalculateScore(){
    score = Math.round( ((payment.value()*10 + kudos.value()*10) / (steps.value() +  duration.value()*10)) *100);
    var size;
    var max = 120;
    var min = 15;
    
    if(score <= max/3 && score >= min/3)
        size = score *3;
    else if(score > 30)
        size = max;
    else
        size = min;
        
    font = size/2;
    
    $("#result").css("width", size+"px"); 
    $("#result").css("height", size+"px");
    $("#lift").text(score);
    $("#lift").css("font-size", font);
    
    console.log(score);
}

function SetDefaults(pay, dur, stp, kud){
    payment.value(pay);
    duration.value(dur);
    steps.value(stp);
    kudos.value(kud);
}
