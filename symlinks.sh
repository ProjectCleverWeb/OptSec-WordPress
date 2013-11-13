slink () {
	ln -s $1 $2
	echo "$1 =>
   $2"
}

# sitemaps
slink public/wp-content/writable/sitemap.xml public/sitemap.xml
slink public/wp-content/writable/sitemap.xml.gz public/sitemap.xml.gz
