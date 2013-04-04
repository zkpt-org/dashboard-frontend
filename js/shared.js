/* Shared Javascript functions */

function fold(e){
    $(e+' .hide').toggle();
    $(e+' .show-hide-toggle i').toggleClass('icon-caret-right');
/*
    var txt = $(e+' .show-hide-toggle a').text()=='show' ? 'hide' : 'show';
    console.log($(e+' .show-hide-toggle a').text());
    $(e+' .show-hide-toggle :node[1]').text(txt);
*/ 
}

/*
Array.prototype.insert = function(index, item){
  this.splice(index, 0, item);
};
*/

// Remove the element at the given index
/*
Array.prototype.remove = function(index) {
	this.splice(index, 1);
}
*/