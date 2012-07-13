#!/ban/bash
# we need xsltproc and docbook-xsl
#    xsltproc /usr/share/xml/docbook/stylesheet/docbook-xsl/html/docbook.xsl ~/work_house/partclone/docs/partclone.xml > index.html
# AND set indent is yes in file docbook-xsl/html/docbook.xsl
#<xsl:output method="html"
#            encoding="UTF-8"
#            indent="yes"/>

partclone_docs="/home/thomas/work_house/partclone/docs"
partclone_usage_dir="/home/thomas/work_house/partclone.org/"

xsltproc="/usr/bin/xsltproc"
stylesheet="/usr/share/xml/docbook/stylesheet/docbook-xsl/html/docbook.xsl"
opt_css="--stringparam html.stylesheet stylesheets/styles.css"
#pushd $partclone_usage_dir
#    find $partclone_docs -name "*.xml" -exec $xsltproc $stylesheet '{}' \;
#popd
manpages=$(find $partclone_docs -name "*.xml")
pushd $partclone_usage_dir
for man in $manpages; do
    $xsltproc $opt_css $stylesheet $man > $(basename $man).html
    sed -i "s/<body.*/<!-- The start of edit area 2cce8a -->\n<h3>Welcome to Partclone Usage<\/h3>\n<p>partclone.[ <a href=\"partclone.xml.html\">[fstype]<\/a> | <a href=\"partclone.restore.xml.html\">restore<\/a> | <a href=\"partclone.dd.xml.html\">dd<\/a> | <a href=\"partclone.chkimg.xml.html\">chkimg<\/a> | <a href=\"partclone.info.xml.html\">info<\/a> ]<\/p>/" $(basename $man).html
    sed -i "s/<\/p><\/div><\/div>//" $(basename $man).html
    sed -i "s/<\/body>/<\!-- The end of edit area 2cce8a -->/" $(basename $man).html
done
#sed -i "s/<span class=\"refentrytitle\">\(partclone\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
sed -i "s/<span class=\"refentrytitle\">\(partclone.info\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
sed -i "s/<span class=\"refentrytitle\">\(partclone.chkimg\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
sed -i "s/<span class=\"refentrytitle\">\(partclone.dd\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
sed -i "s/<span class=\"refentrytitle\">\(partclone.restore\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
sed -i "s/<span class=\"refentrytitle\">\(partclone\)<\/span>/<span class=\"refentrytitle\"><a href=\"\1.xml.html\" alt=\"manual of \1\">\1<\/a><\/span>/g" *.xml.html
find . -name "*.xml.html" -exec perl apply_template.pl '{}' \;
popd
echo "done"
