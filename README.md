# Mèdved

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
![Interface](https://raw.githubusercontent.com/mnmnc/img/master/medved1.jpg)


### Mobile Interface

It has been implemented with responsive design so you can use it on your smartphone/tablet although the interface becomes slightly denser:

![Mobile Interface](https://raw.githubusercontent.com/mnmnc/img/master/medved2.jpg)

### Example usage
![Example usage](https://raw.githubusercontent.com/mnmnc/img/master/medved3.jpg)
As you can see the transfer for Microsoft is actively refused. All tested NS servers have separate tabs. The warning sign shown for other domain (which i removed from the picture) indicates that server do not accept TCP connections. The OK sign for one of the servers indicates successful transfer.

### Build-in Archive
It is common to frequently test the same domain after some time, to see if new records have been added or if the server configuration has been corrected. That is why all the successful transfers are saved in the archive. An archive is a simple list of available transfer results.
You can filter the results to show the particular domain only, by clicking on a domain name. The list shows the date of the transfer, records discovered and the link to review the transfer data. If more than one server responded with transfer data for particular domain, the number of records shown will be the sum from all the servers.
This might give you a false idea that you might get 1000 records in the transfer when in fact you received 500 records but from two servers.

If you need unique records just save the file and use the command

    `cat records.txt | sort -u`

![Archive](https://raw.githubusercontent.com/mnmnc/img/master/medved2.jpg)
