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
    sed -i "s/<body.*/<!-- The start of edit area 2cce8a -->/" $(basename $man).html
    sed -i "s/<\/body>/<\!-- The end of edit area 2cce8a -->/" $(basename $man).html
    perl apply_template.pl $(basename $man).html
    #mv index.html $(basename $man).html
    #rm toc.hhc htmlhelp.hhp
done
popd
echo "done"
