
$(document).ready(function(){
$("#lets_start").click(function(){
$("#two").attr('style', 'display: block');
$("#one").attr('style', 'display: none');
});
});

$(document).ready(function(){
$("#three-box").click(function(){
$("#two").attr('style', 'display: none');
$("#three").attr('style', 'display: block');
});
});

$(document).ready(function(){
$("#four_button").click(function(){
$("#three").attr('style', 'display: none');
$("#four").attr('style', 'display: block');
});
});

$(document).ready(function(){
$("#five_button").click(function(){
$("#four").attr('style', 'display: none');
$("#five").attr('style', 'display: block');
});
});




