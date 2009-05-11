<?php include("header.php");?>

			<div class="bodytext" style="padding:12px;" align="justify">
<strong>Partclone is a project similar to the well-known backup utility "Partition Image" a.k.a partimage.</strong><br /><br />
<strong>Partclone</strong> provides utilities to back up and restore used-blocks of a partition and it is designed for higher compatibility of the file system by using existing library, e.g. e2fslibs is used to read and write the ext2 partition.
				</div>

			<div class="panel" align="justify">
				<span class="orangetitle">Supported Filesystem</span>
<table>
<tr>
<th>FS</th>
<th>Library</th>
<th>Utility</th>
</tr>
<tr>
<td>Ext2</td>
<td>e2fsprogs</td>
<td>partclone.ext2 or partclone.extfs</td>
</tr>
<tr>
<td>Ext3</td>
<td>e2fsprogs</td>
<td>partclone.ext3 or partclone.extfs</td>
</tr>
<tr>
<td>Ext4</td>
<td>e2fsprogs</td>
<td>partclone.ext4 or partclone.extfs</td>
</tr>
<tr>
<td>Reiserfs</td>
<td>libreiserfs</td>
<td>partclone.reiserfs</td>
</tr>
<tr>
<td>Reiser4</td>
<td>reiser4progs</td>
<td>partclone.reiser4</td>
</tr>
<tr>
<td>XFS</td>
<td>xfslibs</td>
<td>partclone.xfs</td>
</tr>
<tr>
<td>NTFS</td>
<td>ntfsprogs</td>
<td>partclone.ntfs</td>
</tr>
<tr>
<td>FAT 12</td>
<td>X</td>
<td>partclone.fat12 or partclone.vfat</td>
</tr>
<tr>
<td>FAT 16</td>
<td>X</td>
<td>partclone.fat16 or partclone.vfat</td>
</tr>
<tr>
<td>FAT 32</td>
<td>X</td>
<td>partclone.fat32 or partclone.vfat</td>
</tr>
<tr>
<td>HFS plus</td>
<td>X(ref:HFS Plus Volume Format)</td>
<td>partclone.hfsplus , partclone.hfsp or partclone.hfs+</td>
</tr>
</table>
				</div>

<?php include("footer.php");?>
