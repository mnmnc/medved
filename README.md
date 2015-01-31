# Mèdved

 [mêdved](http://en.wiktionary.org/wiki/medved) m anim (genitive medvéda, nominative plural medvédi or medvédje, feminine medvédka) 

==========


This is a web-based tool designed to automate the search for domain transfers. It has an intuitive interface and few helpful shortcuts. As an input it expects a domain or list of domains. Ideally the list should be comma-separated but it will handle space or CR-LF separated lists as well. Aside from normal results it gives you a log of performed searches and all successful transfers are archived.

[Extended description](http://wondershell.wordpress.com/2014/04/09/medved-web-based-dns-zone-transfer-automation/)

### Dependencies
* PHP5
* [Shortcut.js](http://www.mattytemple.com/projects/shortcut-js/)
* [JQuery.js](http://jquery.com/)
* [Bootstrap 3](http://getbootstrap.com/)

### Requirements
* Directory structure

![Directory structure](https://raw.githubusercontent.com/mnmnc/img/master/medved_tree.jpg)

### Functions available
![Functions available](https://raw.githubusercontent.com/mnmnc/img/master/Help.PNG)

### Interface
(The help is toggled in this one.)
![Interface](https://raw.githubusercontent.com/mnmnc/img/master/medved1.jpg)


### Mobile Interface

It has been implemented with responsive design so you can use it on your smartphone/tablet although the interface becomes slightly denser:

![Mobile Interface](https://raw.githubusercontent.com/mnmnc/img/master/medved2.jpg)

### Example usage
As you can see int the picture below the transfer for Microsoft is actively refused. All tested NS servers have separate tabs. The warning sign shown for other domain (which i removed from the picture) indicates that server do not accept TCP connections. The OK sign for one of the servers indicates successful transfer.
![Example usage](https://raw.githubusercontent.com/mnmnc/img/master/medved3.jpg)


### Build-in Archive
It is common to frequently test the same domain after some time, to see if new records have been added or if the server configuration has been corrected. That is why all the successful transfers are saved in the archive. An archive is a simple list of available transfer results.
You can filter the results to show the particular domain only, by clicking on a domain name. The list shows the date of the transfer, records discovered and the link to review the transfer data. If more than one server responded with transfer data for particular domain, the number of records shown will be the sum from all the servers.
This might give you a false idea that you might get 1000 records in the transfer when in fact you received 500 records but from two servers.

If you need unique records just save the file and use the command

    `cat records.txt | sort -u`

![Archive](https://raw.githubusercontent.com/mnmnc/img/master/medved4.jpg)

### TOP 500 domain list for easy paste
```python
Facebook.com, Twitter.com, Google.com, Youtube.com, Wordpress, Adobe.com, Blogspot.com, Wikipedia, Linkedin.com, Wordpress.com, Yahoo.com, Amazon.com, Flickr.com, Pinterest.com, Tumblr.com, W3, Apple.com, Myspace.com, Vimeo.com, Microsoft.com, Youtu.be, Qq.com, Digg.com, Baidu.com, Stumbleupon.com, Addthis.com, Statcounter.com, Feedburner.com, Miibeian.gov.cn, Delicious.com, Nytimes.com, Reddit.com, Weebly.com, Bbc.co.uk, Blogger.com, Msn.com, Macromedia.com, Goo.gl, Instagram.com, Gov.uk, Icio.us, Yandex.ru, Cnn.com, Webs.com, Google.de, T.co, Livejournal.com, Imdb.com, Mail.ru, Jimdo.com, Sourceforge.net, Go.com, Tinyurl.com, Vk.com, Google.co.jp, Fc2.com, Free.fr, Joomla, Creativecommons, Typepad.com, Networkadvertising, Technorati.com, Sina.com, Hugedomains.com, About.com, Theguardian.com, Yahoo.co.jp, Nih.gov, Huffingtonpost.com, Google.co.uk, Mozilla, 51.la, Aol.com, Ebay.com, Ameblo.jp, Wsj.com, Europa.eu, Taobao.com, Bing.com, Rambler.ru, Guardian.co.uk, Tripod.com, Godaddy.com, Issuu.com, Gnu, Geocities.com, Slideshare.net, Wix.com, Mapquest.com, Washingtonpost.com, Homestead.com, Reuters.com, 163.com, Photobucket.com, Forbes.com, Clickbank.net, Weibo.com, Etsy.com, Amazon.co.uk, Dailymotion.com, Soundcloud.com, Usatoday.com, Yelp.com, Cnet.com, Posterous.com, Telegraph.co.uk, Archive.org, Google.fr, Constantcontact.com, Phoca.cz, Phpbb.com, Latimes.com, E-recht24.de, Rakuten.co.jp, Amazon.de, Opera.com, Miitbeian.gov.cn, Php.net, Scribd.com, Bbb.org, Parallels.com, Ning.com, Dailymail.co.uk, Cdc.gov, Sohu.com, Wikimedia.org, Deviantart.com, Mit.edu, Sakura.ne.jp, Altervista.org, Addtoany.com, Time.com, Google.it, Stanford.edu, Live.com, Alibaba.com, Squidoo.com, Harvard.edu, Gravatar.com, Histats.com, Nasa.gov, Npr.org, Ca.gov, Eventbrite.com, Wired.com, Amazon.co.jp, Nbcnews.com, Blog.com, Amazonaws.com, Bloomberg.com, Narod.ru, Blinklist.com, Imageshack.us, Kickstarter.com, Hatena.ne.jp, Nifty.com, Angelfire.com, Google.es, Ocn.ne.jp, Over-blog.com, Dedecms.com, Google.ca, A8.net, Weather.com, Pbs.org, Ibm.com, Cpanel.net, Prweb.com, Bandcamp.com, Barnesandnoble.com, Mozilla.com, Noaa.gov, Goo.ne.jp, Comsenz.com, Xrea.com, Cbsnews.com, Foxnews.com, Discuz.net, Eepurl.com, Businessweek.com, Berkeley.edu, Newsvine.com, Bluehost.com, Geocities.jp, Loc.gov, Yolasite.com, Apache.org, Mashable.com, Usda.gov, Nationalgeographic.com, Whitehouse.gov, Tripadvisor.com, Ted.com, Sfgate.com, Biglobe.ne.jp, Epa.gov, Vkontakte.ru, Oracle.com, Seesaa.net, Examiner.com, Cornell.edu, Hp.com, Nps.gov, Disqus.com, Alexa.com, Mysql.com, House.gov, Sphinn.com, Boston.com, Techcrunch.com, Un.org, Squarespace.com, Icq.com, Freewebs.com, Ezinearticles.com, Ucoz.ru, Independent.co.uk, Mediafire.com, Xinhuanet.com, Google.nl, Reverbnation.com, Imgur.com, Irs.gov, Webnode.com, Wunderground.com, Bizjournals.com, Who.int, Soup.io, Cloudflare.com, People.com.cn, Ustream.tv, Senate.gov, Cbslocal.com, Ycombinator.com, Opensource.org, Spiegel.de, Oaic.gov.au, Nature.com, Businessinsider.com, Drupal.org, Last.fm, Privacy.gov.au, Skype.com, Wikia.com, About.me, Webmd.com, Youku.com, Gmpg.org, Fda.gov, Redcross.org, Github.com, Cbc.ca, Umich.edu, Jugem.jp, Shinystat.com, Google.com.br, Ifeng.com, Mac.com, Wiley.com, Discovery.com, Topsy.com, Paypal.com, Google.cn, Surveymonkey.com, Moonfruit.com, Dropbox.com, Exblog.jp, Google.pl, Prnewswire.com, Ft.com, Uol.com.br, Behance.net, Goodreads.com, Netvibes.com, Auda.org.au, Marketwatch.com, Ed.gov, Networksolutions.com, State.gov, Sitemeter.com, Liveinternet.ru, Ftc.gov, Census.gov, Quantcast.com, Economist.com, Nydailynews.com, Zdnet.com, Cafepress.com, Ow.ly, Meetup.com, Netscape.com, Chicagotribune.com, Theatlantic.com, Google.com.au, 1688.com, Skyrock.com, List-manage.com, Pagesperso-orange.fr, Cdbaby.com, Friendfeed.com, Ehow.com, Patch.com, Upenn.edu, Engadget.com, Diigo.com, Com.com, Slashdot.org, Washington.edu, Columbia.edu, Nhs.uk, Abc.net.au, Elegantthemes.com, Utexas.edu, Yale.edu, Marriott.com, Bigcartel.com, Ucla.edu, Usgs.gov, Jigsy.com, Hexun.com, Hubpages.com, Slate.com, Purevolume.com, Umn.edu, Bloglines.com, So-net.ne.jp, Wikispaces.com, Cargocollective.com, Howstuffworks.com, Plala.or.jp, Infoseek.co.jp, Jiathis.com, Usnews.com, Xing.com, Flavors.me, Desdev.cn, Hc360.com, Usa.gov, Edublogs.org, Lycos.com, Wisc.edu, Thetimes.co.uk, State.tx.us, Example.com, Shareasale.com, Biblegateway.com, Is.gd, Yellowbook.com, Samsung.com, Businesswire.com, G.co, Dion.ne.jp, Dagondesign.com, Theglobeandmail.com, Booking.com, Storify.com, Salon.com, Ucoz.com, Gizmodo.com, Psu.edu, Smh.com.au, Reference.com, Sun.com, Unicef.org, Devhub.com, Artisteer.com, Unesco.org, Istockphoto.com, Answers.com, Trellian.com, Cocolog-nifty.com, I2i.jp, T-online.de, Intel.com, 1und1.de, Ebay.co.uk, Sciencedaily.com, Paginegialle.it, Ask.com, Springer.com, Canalblog.com, Timesonline.co.uk, De.vu, Deliciousdays.com, Smugmug.com, Wufoo.com, Globo.com, Cmu.edu, Domainmarket.com, Odnoklassniki.ru, Twitpic.com, Ovh.net, Home.pl, Naver.com, Google.ru, Si.edu, Newyorker.com, Blogs.com, Sciencedirect.com, Hud.gov, Hhs.gov, Dmoz.org, Dot.gov, Cyberchimps.com, Google.com.hk, Jalbum.net, Craigslist.org, Zimbio.com, Chronoengine.com, Cnbc.com, Uiuc.edu, Vistaprint.com, Symantec.com, Prlog.org, 360.cn, Indiatimes.com, Mtv.com, Webeden.co.uk, Java.com, Cisco.com, Japanpost.jp, 4shared.com, Github.io, Mayoclinic.com, Studiopress.com, Admin.ch, Virginia.edu, Printfriendly.com, Mlb.com, Omniture.com, Simplemachines.org, Dell.com, Accuweather.com, Princeton.edu, Fotki.com, Comcast.net, Chron.com, Nyu.edu, Wp.com, Merriam-webster.com, Nba.com, Shop-pro.jp, Lulu.com, Furl.net, Indiegogo.com, Buzzfeed.com, Tuttocitta.it, Ox.ac.uk, Mapy.cz, Army.mil, Csmonitor.com, Bravesites.com, Tamu.edu, Rediff.com, Toplist.cz, Yellowpages.com, Va.gov, Tiny.cc, Netlog.com, Elpais.com, Oakley.com, Multiply.com, Tmall.com, Hostgator.com, Nymag.com, Fema.gov, Blogtalkradio.com, China.com.cn, Unblog.fr, Fastcompany.com, Earthlink.net, Vinaora.com, Msu.edu, Aboutads.info, Ucsd.edu, Sogou.com, Seattletimes.com, Dyndns.org, 123-reg.co.uk, Sbwire.com, Tinypic.com, Acquirethisname.com, Shutterfly.com, Walmart.com, Pen.io, Arizona.edu, Woothemes.com, Scientificamerican.com, Themeforest.net, Spotify.com, Cam.ac.uk, Unc.edu, Arstechnica.com, Hao123.com, Illinois.edu, Bloglovin.com, Nsw.gov.au, Ihg.com, 
```
