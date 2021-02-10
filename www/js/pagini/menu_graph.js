$(document).ready(function() {
    //------------- Spark stats -------------//
    $('.spark>.positive').sparkline('html', { type:'bar', barColor:'#42b449'});
    $('.spark>.negative').sparkline('html', { type:'bar', barColor:'#db4a37'});
});