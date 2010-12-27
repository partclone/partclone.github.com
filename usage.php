<?php include("header.php");?>

			<div class="bodytext" style="padding:12px;" align="justify">
<strong>Partclone is a project similar to the well-known backup utility "Partition Image" a.k.a partimage.</strong><br /><br />
<strong>Partclone</strong> provides utilities to back up and restore used-blocks of a partition and it is designed for higher compatibility of the file system by using existing library, e.g. e2fslibs is used to read and write the ext2 partition.
				</div>

			<div class="panel" align="justify">
				<span class="orangetitle">Usage</span>
<pre>
NAME
       partclone.extfs - The utility for clone and restore an etx2/ext3 partition.

SYNOPSIS
       partclone.extfs [options]... [MODE] [SOURCE FILE] [OUTPUT FILE]

DESCRIPTION
       partclone.extfs  is a part of Partclone project for ext2/3 file system.  
       Partclone is a project like the well-known backup utility "Partition Image" a.k.a
       partimage. Partclone provide utilities to back up used blocks and design for 
       higher  compatibility  of  the  file  system  using  supported  library  like
       e2fslibs.

OPTIONS
       -V, --version
              prints program version.

       -c, --clone
              Back used block to the special image format.

       -r, --restore
              Restore from the special image format.

       -b, --dev-to-dev
              Local device to device copy mode

       -d, --debug
              Show debug information.

       -h, --help
              Display help information.

       -s, --source
              Source FILE can be a partition or image file.

       -o, --output
              Output FILE can be a partition

       -O, --overwrite
              Output FILE, overwriting if exists

       -C, --no_check
	      Don't check device size and free space

       -N, --ncurses
	      Using Ncurses User Interface

       -X, --dialog
	      output message as Dialog Format

       -q,  --quiet
	      Disable progress message

       -F, --force
	      force progress

              Examples 1:
              clone /dev/hda1 to hda1.img and display debug information.
              $ partclone.extfs -c -d -s /dev/hda1 -o hda1.img
              
	      Examples 2:
              restore /dev/hda1 from hda1.img and display debug information.
              $ partclone.extfs -r -d -s hda1.img -o /dev/hda1

	      Examples 3:
              clone /dev/hda1 to /dev/hdb1 directly  and display debug information.
	      $ partclone.extfs -b -d -s /dev/hda1 -o /dev/hdb1

REPORTING BUGS
       Report bugs to thomas at nchc dot org dot tw

SUPPORT
       You can get support at http://partclone.sf.net

SEE ALSO
       partclone.reiser4(8), partclone.reiserfs(8), partclone.hfsp(8), partclone.xfs(8)...

AUTHOR
       This manual page was written by Thomas Tsai thomas at nchc dot org dot tw

partclone 0.1.0                        Nov 2007                     partclone.extfs(8)
</pre>
				</div>
<?php include("footer.php");?>
