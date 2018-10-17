$(function(){
    $(function(){
    
        $('.moteharek .matn-moteharek:gt(0)').hide();
        setInterval(function(){
          $('.moteharek :first-child').fadeOut(0).next('.matn-moteharek').fadeIn(2000)
          .end().appendTo('.moteharek');
      }, 7000);
        
      });        
});