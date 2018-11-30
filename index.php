<?php
	include "includes/header.php";
?>
<?php
	include "includes/navbar.php";
?>

<div class="row" style="height: auto; min-height: 80vh">
<!-- This is main content area-->
<div class="col l9 m9 s12">
<?php
$sql="select * from posts order by id DESC";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
  while($row=mysqli_fetch_assoc($res))
  {
?>
<div class="col m3 s6">

	<div class="card hoverable">
		<div class="card-image">
			<img src="img/<?php echo $row['feature_image'];?>" class="img-responsive" alt="">		
		</div>
		
		<div class="card-content">
			<span class="card-title black-text truncate"><?php echo $row['title']?></span>
			<?php echo substr($row['content'],0,50);?>....!
		</div>
		<div class="card-action teal center">
			<a href="post.php?id=<?php echo $row['id'];?>" class="white-text">Read More</a>
		</div>
	</div>
</div>
<?php
  }
}
?>
</div>
<!-- This is sidebar area-->
<div class="col l3 m3 s12" >
	<?php
	include "includes/sidebar.php";
	?>
</div>

<?php
	include "includes/footer.php";
?>
