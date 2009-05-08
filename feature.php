<?php include("header.php");?>

			<div class="bodytext" style="padding:12px;" align="justify">
<strong>Partclone is a project similar to the well-known backup utility "Partition Image" a.k.a partimage.</strong><br /><br />
<strong>Partclone</strong> provides utilities to back up and restore used-blocks of a partition and it is designed for higher compatibility of the file system by using existing library, e.g. e2fslibs is used to read and write the ext2 partition.
				</div>

			<div class="panel" align="justify">
				<span class="orangetitle">Supported Filesystem</span>
				<span class="bodytext"><br />
<table>
<tr>
<th>FS
<th>Library
<th>Utility
</tr>
<tr>
<td>Ext2
<td>e2fsprogs
<td>partclone.ext2 or partclone.extfs
</tr>
<tr>
<td>Ext3
<td>e2fsprogs
<td>partclone.ext3 or partclone.extfs
</tr>
<tr>
<td>Ext4
<td>e2fsprogs
<td>partclone.ext4 or partclone.extfs
</tr>
<tr>
<td>Reiserfs
<td>libreiserfs
<td>partclone.reiserfs
</tr>
<tr>
<td>Reiser4
<td>reiser4progs
<td>partclone.reiser4
</tr>
<tr>
<td>XFS
<td>xfslibs
<td>partclone.xfs
</tr>
<tr>
<td>NTFS
<td>ntfsprogs
<td>partclone.ntfs
</tr>
<tr>
<td>FAT 12
<td>X
<td>partclone.fat12 or partclone.vfat
</tr>
<tr>
<td>FAT 16
<td>X
<td>partclone.fat16 or partclone.vfat
</tr>
<tr>
<td>FAT 32
<td>X
<td>partclone.fat32 or partclone.vfat
</tr>
<tr>
<td>HFS plus
<td>X(ref:HFS Plus Volume Format)
<td>partclone.hfsplus , partclone.hfsp or partclone.hfs+
</tr>
</table>
				</span>
				</div>

<?php include("footer.php");?>
