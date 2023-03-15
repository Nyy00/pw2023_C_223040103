<style>
  .box {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 25px;
    height: 25px;
    border: 1px solid black;
    background-color:aqua;
  }
</style>

<?php
for ($i = 10; $i >= 1; $i--) {
  for ($j = 1; $j <= $i; $j++) {
    echo "<div class='box'> $j</div>";
  }
  echo "<br/>";
}
?>



