// navbar button

// let b =  document.getElementById('toggleButton');
// let w =   document.getElementById('offCanvas');

// b.addEventListener('click',function(e){
//     if (w.style.width === "0px"){
//         this.style.transform = "rotate(45deg)";
//         this.style.marginLeft = "250px";
//         w.style.width = "250px";
//         b.style.border = 'none';
//     }else{
//         this.style.transform = "rotate(0)";
//         this.style.marginLeft = "0";
//         w.style.width = "0";
//     }
//     e.stopPropagation();
// });

$('#toggleButton').on('click',function(e){
    if($('#offCanvas').css('width') === '0px'){
        $(this).css('transform','rotate(45deg)');
        $(this).css('margin-left','250px');
        $('#offCanvas').css('width','250px');
        $(this).css('border','none');
    }
   else{
    $(this).css('transform','rotate(0)');
    $(this).css('margin-left','0px');
    $('#offCanvas').css('width','0px');


   }
   e.stopPropagation();
});





// see more button
$('#more').on('click',function()
{
    $('.see').slideToggle();
    $( ".seeToggle" ).toggle();
});

// course 
$('.upcoming ').click(function(){
    $('.course-button').removeClass('selected-catogary');
    $(this).addClass('selected-catogary');
    $('#all').css('display','none');
    $('.see').css('display','none');
    $('.more').css('display','none');
    $('.less').css('display','none');
    $('#upcoming').css('display','inline-block');

});

$('.design').click(function(){
    $('.course-button').removeClass('selected-catogary');
    $(this).addClass('selected-catogary');
    $('#all').css('display','none');
    $('.see').css('display','none');
    $('.more').css('display','none');
    $('.less').css('display','none');
    $('#design').css('display','inline-block');

});

$('.recent').click(function(){
    $('.course-button').removeClass('selected-catogary');
    $(this).addClass('selected-catogary');
    $('#all').css('display','none');
    $('.see').css('display','none');
    $('.more').css('display','none');
    $('.less').css('display','none');
    $('#recent').css('display','inline-block');

});

$('.all').click(function(){
    $('.course-button').removeClass('selected-catogary');
    $(this).addClass('selected-catogary');
    $('.see').css('display','none');
    $('#all').css('display','inline-block');
    $('.less').css('display','none');
    $('.more').css('display','block');
});










