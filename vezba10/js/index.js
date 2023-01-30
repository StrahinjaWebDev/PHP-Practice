$(document).ready(function () {
  $("#dugme").click(function () {
    $("#odgovor").load("test.txt");
  })

  $("#btnDugme").click(function () {
    let unetoIme = $("#ime").val();
    let unetoPrezime = $("#prezime").val();
    $.get("ajax/ajax_get.php",
      { ime: unetoIme, prezime: unetoPrezime },
      function (response) {
        $("#odgovor").html(response);
      }
    )
  })
  $("#btnDugme2").click(function () {
    let unetoIme = $("#ime").val();
    let unetoPrezime = $("#prezime").val();
    $.post(
      "ajax/ajax_post.php",
      { ime: unetoIme, prezime: unetoPrezime },
      function (response) {
        $("#odgovor").html(response);
      }
    )
  })
  $("#btnDugme3").click(function () {
    let unetoIme = $("#ime").val();
    let unetoPrezime = $("#prezime").val();
    $.get("ajax/funkcije_post.php?metoda=get",
      { ime: unetoIme, prezime: unetoPrezime },
      function (response) {
        $("#odgovor").html(response);
      }
    )
  })
  $("#btnDugme4").click(function () {
    let unetoIme = $("#ime").val();
    let unetoPrezime = $("#prezime").val();
    $.get("ajax/funkcije_post.php?metoda=post",
      { ime: unetoIme, prezime: unetoPrezime },
      function (response) {
        $("#odgovor").html(response);
      }
    )
  })
})
