<H1>partclone.extfs</H1>

<A NAME="lbAB">&nbsp;</A>
<H2>NAME</H2>

partclone.extfs - The utility for clone and restore an etx2/ext3 partition.
<A NAME="lbAC">&nbsp;</A>
<H2>SYNOPSIS</H2>

partclone.extfs [options]... [MODE] [SOURCE FILE] [OUTPUT FILE]
<A NAME="lbAD">&nbsp;</A>
<H2>DESCRIPTION</H2>

<B>partclone.extfs</B>

is a part of Partclone project for ext2/3 file system.
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
<DT><B>-L,  --logfile FILE     </B>

<DD>
Log FILE
<DT><B>-c,  --clone            </B>

<DD>
Save to the special image format
<DT><B>-r,  --restore          </B>

<DD>
Restore from the special image format
<DT><B>-b,  --dev-to-dev       </B>

<DD>
Local device to device copy mode
<DT><B>-R,  --rescue           </B>

<DD>
Continue after disk read errors
<DT><B>-dX, --debug=X          </B>

<DD>
Set the debug level to X = [0|1|2]
<DT><B>-C,  --no_check         </B>

<DD>
Don't check device size and free space
<DT><B>-X,  --dialog           </B>

<DD>
Output message as Dialog Format
<DT><B>-I,  --ignore_fschk     </B>

<DD>
Ignore filesystem check
<DT><B>--ignore_crc       </B>

<DD>
Ignore crc check error
<DT><B>-F,  --force            </B>

<DD>
Force progress
<DT><B>-f,  --UI-fresh         </B>

<DD>
Fresh times of progress
<DT><B>-q,  --quiet            </B>

<DD>
quiet mode, no progress update
<DT><B>-v,  --version          </B>

<DD>
Display partclone version
<DT><B>-h,  --help             </B>

<DD>
Display this help
</DL>
<A NAME="lbAF">&nbsp;</A>
<H2>Examples:</H2>

<P>
clone /dev/hda1 to hda1.img and display debug information.
<P>
partclone.extfs -c -d -s /dev/hda1 -o hda1.img
<P>
restore /dev/hda1 from hda1.img and display debug information.
<P>
partclone.extfs -r -d -s hda1.img -o /dev/hda1
<P>
restore image from clonezilla(split, gzip,) with stdin source
<P>
<P>
<P>
cat sda1.ext3-ptcl-img.gz.a* &gt; gunzip -c | partclone.ext3 -d -r -s - -o /dev/sda1
<P>
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
Time: 07:15:53 GMT, April 13, 2011
</BODY>
</HTML>
