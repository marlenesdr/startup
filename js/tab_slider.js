/*document.addEventListener('DOMContentLoaded', function() {
   var elems = document.querySelectorAll('.slider');
   var instances = M.slider.init(elems, { });

 var elems = document.querySelectorAll('.materialboxed');
 var instances = M.materialboxed.init(elems);

 var elems = document.querySelectorAll('.sidenav');
 var instances = M.sidenav.init(elems);
*/
document.addEventListener('DOMContentLoaded', function() {
  var elems = document.querySelectorAll('select');
  var instances = M.FormSelect.init(elems, options);
});
