<?php
require_once 'partials/header.php';
?>

<style>
    .img{
        border:groove;
    }
</style>

<div class="mt-5">
    <div color="black" align="center">
        <select  class="form-control mb-2" id="subject" name="author">
        </select>
    </div>
    <div align="center" id="actor"></div>
    <div align="center" id="content">
        <h1></h1>
        <h5></h5>
        <img   src="" width="500px" height="500px" align="center">
    </div>
</div>
<?php
require 'partials/footer.php';
?>

