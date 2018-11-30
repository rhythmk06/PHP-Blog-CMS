<?php
include "includes/navbar.php";
$dir="../img/";
$files=scandir($dir);
if($files)
{
  ?>
  <div class="main">
    <div class="row">
      <?php
      foreach($files as $file)
      {
        if(strlen($file)>2)
        {
        ?>
          <div class="col xl2 l3 m4 s6">
            <div class="card grey lighten-1 lighten-3">
              <div class="card-image">
                <img src="../img/<?php echo $file;?>" class="center-align img-responsive" height="160px">
              </div>
              <div class="card-action text-white"><p><?php echo $file;?></p></div>
            </div>
          </div>
        <?php
        }
      }
}
?>
  </div>
</div>

<?php
include "includes/footer.php";
?>
