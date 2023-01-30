$(document).ready(function () {
  $("#btnPretraga").click(function(){
    let pretraga=$("#pretraga").val();
    $.post("ajax/ajax_index2.php?funkcija=pretraga", {termin:pretraga}, function(response){
      $("#odgovor").html(response);
    })
  })

})