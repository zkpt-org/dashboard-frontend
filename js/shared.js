/* Shared Javascript functions */
if( !window.isLoaded )
	window.addEventListener("load", function(){ onready(); }, false);
else
	onready();
	
function onready() {    
    $(function () {$("[data-toggle='tooltip']").tooltip(
       { delay: { show: 1000, hide: 0 } }
    );});

    $(function () {
/*
        $('body').popover({
            selector: '[data-toggle="popover"]'
        }).click(function(e) {e.preventDefault();});
*/

/*
        $('body').tooltip({
            delay: { show: 5000, hide: 0 },
            selector: 'a[rel="tooltip"], [data-toggle="tooltip"]'
        });
*/
    });
}

function fold(e){
    $(e+' .hide').toggle();
    $(e+' .show-hide-toggle i').toggleClass('icon-caret-right');
}
