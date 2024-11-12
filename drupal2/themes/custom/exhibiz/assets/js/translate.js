jQuery( document ).ready(function() {
  let pathname = window.location.pathname;
  const myArr = pathname.split("/");
  if (myArr[1]=="en"){
    jQuery(".btn-english").hide();
    jQuery(".btn-spanish").show();
  }
  else{
    jQuery(".btn-spanish").hide();
    jQuery(".btn-english").show();
  }
});
