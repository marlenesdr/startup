$( document ).ready(function() {

    function valoresFB(){
      var url=window.location.href;
      url='https://facebook.com/sharer/sharer.php?u='+url;
      $('#fb').attr('href',url);
  };
});
