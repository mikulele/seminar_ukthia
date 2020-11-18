<?php
  function tampilkan() {
    global $link;
    $query = "SELECT * FROM user";
    $result = mysqli_query($link, $query) or die('gagal');

    return $result;
  }

  // manampilkan per id
  function tampilkan_per_id($id) {
    global $link;
    $query = "SELECT * FROM user WHERE id=$id";
    $result = mysqli_query($link, $query) or die('gagal');

    return $result;
  }

?>
