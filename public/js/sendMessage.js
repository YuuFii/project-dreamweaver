$(document).ready(function () {
  $("#submit").click(function (e) { 
    let name = $('#nama').val();
    let email = $('#email').val();
    let msg = $('#isi').val();
    
    let data = 'name='+name+'&email='+email+'&message='+msg;
    console.log(data);
  });
});