<H1>partclone.dd</H1>
<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

partclone.dd - The utility to clone/restore raw file like dd.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

partclone.dd [options]... [MODE] [SOURCE FILE] [OUTPUT FILE]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B>partclone.dd</B>

is a part of Partclone project.
Partclone is a project like the well-known backup utility &quot;Partition Image&quot; a.k.a partimage. Partclone provide utilities to back up used blocks and design for higher compatibility of the file system using supported library like e2fslibs.
<A NAME="lbAE">&nbsp;</A>
<H2>OPTIONS</H2>

<DL COMPACT>
<DT><B>-o,  --output FILE</B>

<DD>
Output FILE
<DT><B>-O   --overwrite FILE</B>

<DD>
Output FILE, overwriting if exists
<DT><B>-s,  --source FILE</B>

<DD>
Source FILE
<DT>
<DD>
-L,  --logfile FILE     
Log FILE
<DT>
<DD>
-c,  --clone            
Save to the special image format
<DT>
<DD>
-r,  --restore          
Restore from the special image format
<DT>
<DD>
-b,  --dev-to-dev       
Local device to device copy mode
<DT>
<DD>
-R,  --rescue           
Continue after disk read errors
<DT>
<DD>
-dX, --debug=X          
Set the debug level to X = [0|1|2]
<DT>
<DD>
-C,  --no_check         
Don't check device size and free space
<DT>
<DD>
-X,  --dialog           
Output message as Dialog Format
<DT>
<DD>
-I,  --ignore_fschk     
Ignore filesystem check
<DT>
<DD>
--ignore_crc       
Ignore crc check error
<DT>
<DD>
-F,  --force            
Force progress
<DT>
<DD>
-f,  --UI-fresh         
Fresh times of progress
<DT>
<DD>
-q,  --quiet            
quiet mode, no progress update
<DT>
<DD>
-v,  --version          
Display partclone version
<DT>
<DD>
-h,  --help             
Display this help
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>Examples:</H2>

<P>
clone /dev/hda1 to hda1.dd.img and display debug information.
<P>
partclone.dd -c -d -s /dev/hda1 -o hda1.dd.img
<P>
restore /dev/hda1 from hda1.dd.img and display debug information.
<P>
partclone.dd -r -d -s hda1.dd.img -o /dev/hda1
<P>
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
Time: 05:37:24 GMT, April 13, 2011
