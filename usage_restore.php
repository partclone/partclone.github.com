<H1>partclone.restore</H1>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

partclone.restore - The utility to restore an etx2/ext3 partition.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

partclone.restore [options]... [MODE] [SOURCE FILE] [OUTPUT FILE]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B>partclone.restore</B>

is a part of Partclone project.
Partclone is a project like the well-known backup utility &quot;Partition Image&quot; a.k.a partimage. Partclone provide utilities to back up used blocks and design for higher compatibility of the file system using supported library like e2fslibs.
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>

<DL COMPACT>
<DT><B>-o,  --output FILE</B>

<DD>
Output FILE
<DT><B>-O   --overwrite FILE   Output FILE, overwriting if exists</B>

<DD>
--restore_raw_file create special raw file for loop device
<DT><B>-s,  --source FILE</B>

<DD>
Source FILE
<DT><B>-L,  --logfile FILE</B>

<DD>
Log FILE
<DT><B>-dX, --debug=X</B>

<DD>
Set the debug level to X = [0|1|2]
<DT><B>-C,  --no_check</B>

<DD>
Don't check device size and free space
<DT><B>-X,  --dialog</B>

<DD>
Output message as Dialog Format
<DT><B>-I,  --ignore_fschk</B>

<DD>
Ignore filesystem check
<DT><B>--ignore_crc</B>

<DD>
Ignore crc check error
<DT><B>-F,  --force</B>

<DD>
Force progress
<DT><B>-f,  --UI-fresh</B>

<DD>
Fresh times of progress
<DT><B>-m,  --max_block_cache</B>

<DD>
The used block will be cache until max number
<DT><B>-q,  --quiet</B>

<DD>
Disable progress message
<DT><B>-v,  --version</B>

<DD>
Display partclone version
<DT><B>-h,  --help</B>

<DD>
Display this help
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>Examples:</H2>

<P>
restore /dev/hda1 from hda1.img and display debug information.
<P>
partclone.restore -d -s hda1.img -o /dev/hda1
<P>
restore image from clonezilla(split, gzip,) with stdin source
<P>
cat sda1.ext3-ptcl-img.gz.a* &gt; gunzip -c | partclone.restore -d -s - -o /dev/sda1
<P>
restore raw image from partclone.dd
<P>
partclone.dd -d -c -s /dev/sda1 -o - | partclone.restore -d -s - -o /dev/sdb1
<A NAME="lbAG">&nbsp;</A>
<H2>REPORTING BUGS</H2>

Report bugs to &lt;<A HREF="mailto:thomas@nchc.org.tw">thomas@nchc.org.tw</A>&gt;
<A NAME="lbAH">&nbsp;</A>
<H2>SUPPORT</H2>

You can get support at <A HREF="http://partclone.org">http://partclone.org</A>
<A NAME="lbAI">&nbsp;</A>
<H2>AUTHOR</H2>

This manual page was written by Thomas Tsai &lt;<A HREF="mailto:thomas@nchc.org.tw">thomas@nchc.org.tw</A>&gt;
<P>
<P>

<HR>
<A NAME="index">&nbsp;</A><H2>Index</H2>
<DL>
<DT><A HREF="#lbAB">NAME</A><DD>
<DT><A HREF="#lbAC">SYNOPSIS</A><DD>
<DT><A HREF="#lbAD">DESCRIPTION</A><DD>
<DT><A HREF="#lbAE">OPTIONS</A><DD>
<DT><A HREF="#lbAF">Examples:</A><DD>
<DT><A HREF="#lbAG">REPORTING BUGS</A><DD>
<DT><A HREF="#lbAH">SUPPORT</A><DD>
<DT><A HREF="#lbAI">AUTHOR</A><DD>
</DL>
<HR>
This document was created by
<A HREF="/cgi-bin/man/man2html">man2html</A>,
using the manual pages.<BR>
Time: 05:37:04 GMT, April 13, 2011
