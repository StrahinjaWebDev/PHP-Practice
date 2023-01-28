<?php
  function logout()
  {
    session_destroy();
  }

  function login()
  {
    if (isset($_SESSION['user']) and isset($_SESSION['status']))
{
  return true;
  else {
    return false;
  }
}
  }
?>