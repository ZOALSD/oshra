
$('.hero-area').height($(window).height());

$('i.fa.fa-chevron-down').click(function(){
    $("html, body").animate({ scrollTop: $(window).height()-80 }, 1000);

   
});

