/* Javascript used by the "At a Glance" page */
var hidden = [];
var _COLORS_ = ['#3ea4bf','#F6BB33', '#49bf92', '#a084bf', '#FF6A13'];
var colors   = ['#3ea4bf','#F6BB33', '#49bf92', '#a084bf', '#FF6A13'];

function onDocumentReady() {
    var gauges = {}
    for( var i=0; i<5; i++ ){
            gauges["g" + String(i)] = gauge("#gauge-" + String(i), {
    		size: 168,
    		clipWidth: 218,
    		clipHeight: 218,
    		ringWidth: 6,
    		maxValue: 100,
    		transitionMs: 4000,
    	});
    	gauges["g" + String(i)].render();
    	      
    } 	
		
	function updateReadings() {    		
		for( var n=0; n<5; n++ ){ 
    		var value = Math.round((Math.random() * 100)*100)/100;
    		gauges["g" + String(n)].update(value);
    		
    		$('#led-' + String(n)).removeClass('green orange yellow');
    		if(value < 40 )
                $('#led-' + String(n)).addClass('orange');
            else if(value<70)
                $('#led-' + String(n)).addClass('yellow');
            else
                $('#led-' + String(n)).addClass('green');
            var sNumber = value.toFixed(2);
            len = sNumber.length;
            
            if(value<10)
                sNumber = "0" + sNumber;
            sNumber = sNumber.replace(/\./g,'');
            
            for (var i = 0; i < len; i += 1) {
                $("#counter-" + String(n) + " li.count" + String(i+1)).text( function(){return sNumber.charAt(i);});
            }
        }
	}
	       	
	updateReadings();
    draw();
    
    /* 
     *  If the first child in the alert box is a real alert, then display alert. 
     */
    if($("#alerts-box").children().length > 0 && $("#alerts-box .alert").first().attr("id")!="no-alerts"){
        ToggleAlertsBox();
        $('#alerts-label').addClass("active-alerts");
    }
}

if( !window.isLoaded ) {
	window.addEventListener("load", function() {
		onDocumentReady();
	}, false);
}
else{
	onDocumentReady();
}


/*~~~~~~ Functions ~~~~~~*/

function ToggleAlertsBox(){
    if($("#alerts-box").css("display") == "none"){
        $("#alerts-box").css("display","block");
        $("#alerts-box").animate( {width:788, opacity:1}, 1000);
    }
    else{
        $("#alerts-box").animate( {width:0, opacity:0.5}, 1000, 
            function(){
                $("#alerts-box").css("display","none");
            }    
        );        
    }
}

function ToggleGraph(elem, line, index){
    if(!$(elem).hasClass("disabled")){
        $(elem).addClass("disabled");
        $(elem).find("i").removeClass("icon-ok");
        $(elem).find("i").addClass("icon-remove");
        
        if($.inArray(line, hidden)==-1)
            hidden.push(line);
        
        $('.line-'+line).fadeOut(500, function(){
            //$('#glance-graph ').remove();
            //$('.line-'+line).remove();
            //draw(hidden, index, colors, false);
        });
        $('#glance-graph').remove();
        draw(hidden, index, false);
       
    }
    else{
        $(elem).removeClass("disabled");
        $(elem).find("i").removeClass("icon-remove");
        $(elem).find("i").addClass("icon-ok");
        $('.line-'+line).fadeIn(500, function(){});
        hidden.splice(hidden.indexOf(line), 1);    
        $('#glance-graph').remove();
        draw(hidden, index, true);
    }
}

function ToggleEvent(label, id){
    
}
