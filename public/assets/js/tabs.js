$('.continue').click(function(){
  $('.nav-pills > .active').next('li').find('a').trigger('click');
});
$('.back').click(function(){
  $('.nav-pills > .active').prev('li').find('a').trigger('click');
});