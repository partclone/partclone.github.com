<?php include("header.php");?>

			<div class="bodytext" style="padding:12px;" align="justify">
<strong>Partclone is a project similar to the well-known backup utility "Partition Image" a.k.a partimage.</strong><br /><br />

			<div class="panel" align="justify">
				<span class="orangetitle">Usage</span>
				<a href="usage.php?usage=chkimg">partclone.chkimg</a> | 
				<a href="usage.php?usage=dd">partclone.dd</a> | 
				<a href="usage.php?usage=extfs">partclone.extfs(ext2|btrfs|reiserfs...)</a> | 
				<a href="usage.php?usage=info">partclone.info</a> | 
				<a href="usage.php?usage=restore">partclone.restore</a>
			</div>
			</div>
			<div class="bodytext" style="padding:12px;" align="justify">
				<?php
				$usage=$_GET['usage'];
				if ($usage == 'extfs')
				    include("usage_extfs.php");
				elseif ($usage == 'chkimg')
				    include("usage_chkimg.php");
				elseif ($usage == 'dd')
				    include("usage_dd.php");
				elseif ($usage == 'restore')
				    include("usage_restore.php");
				elseif ($usage == 'info')
				    include("usage_info.php");
				?>
			</div>

<?php include("footer.php");?>
