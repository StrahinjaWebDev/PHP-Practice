<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script>

function login() {

  var email = $("email").val();
  var password = $("pass").val();
  $.ajax({
    type: "POST",
    url:'ajax/ajax_z6_1.php',
    data: {email:email, password:password},
    success: function (response) {
      if (response =="success") {
        window.location.href = "welcome.php";
      } else {
        $("error").html(response);
      }
    }

  })

}


</script>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method='post'>

  <input type="text" id='email'>
  <input type="text" id='pass'>
  <button name='login' onclick='login()' > Login</button>


  </form>
  <div id='error'>


  </div>
</body>
</html>