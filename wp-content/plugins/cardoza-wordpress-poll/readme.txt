=== Wordpress Poll ===
Contributors: vinoj.cardoza
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=vinoj%2ecardoza%40gmail%2ecom&currency_code=GBP&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8
Tags: poll, cardoza, vote, widget, booth, polls, polling, votes, voting
Requires at least: 3.0
Tested up to: 4.6.1
Stable tag: trunk
License: GPLv2 or later

Wordpress Poll is completely ajax powered polling system. This poll plugin supports both single and multiple selection of answers.

== Description ==
This poll has the following features which uses both ajax and jquery.

1. Administrator have options to display more than one poll in the widget area.
2. Administrator can specify how many polls to be displayed in the archive page.
3. Administrator can view the poll statistics by date wise.
4. User logs can be seen in the admin section.
5. Image polls available.
6. Poll access can be locked by cookies, IP address or user id.
7. Translation enabled.

= Note =
1. If you find any bugs, please report in the following link, so that it will be fixed as quick as possible.
2. If you think any feature adding to this plugin can improve its features, please recommend it in the following link.
3. You can add any poll into your post or page by using the shortcode. For information how to do it, please go to Frequently asked questions.

= Donations =

Thanks for downloading and installing my plugin. You can show your appreciation and support future development by donating.

For more visit: http://www.vinojcardoza.com/blog/cardoza-wordpress-poll/

= Translation =
Some of the translation were done using a translation software. I am not sure about the correctness of the translation. If you find some mistakes in the translation in your language, please let me know through the following link comments section. Also, if you couldn't find your language and you can do it, please let me know.

= Translated Languages =
* Arabic (Translated by Naaser Mohammed and Ahmed Saif)
* Croatian (Translated by Bojan KS)
* Czech (Translated by Vaclav Cadek st.)
* Danish (Translated by Henrik van der Buchwald)
* Dutch (Translated by Niels de Bruin)
* French (Translated by Laurent Verpeet)
* German (Translated by Peter Kaulfuss)
* Greek (Translated by Kontosis Konstantinos)
* Italian (Translated by Roberto Bani)
* Polish (Translated by Robert Szymanski)
* Portuguese-Brazilian (Translated by Rodrigo)
* Romanian (Translated by Dachin Raul)
* Russian (Translated by Boris & Levatti)
* Slovak (Translated by Branco Radenovich)
* Spanish (Translated by Diego Silva Opazo)

== Installation ==

1. Download the plugin.
2. Upload to your blog (/wp-content/plugins/).
3. Activate it.
4. Click the 'Poll' menu.
6. Fill in the options.
a. Create new poll by clicking Add new poll.
b. You can setup the widget options by clicking 'Widget Options'.
c. Poll options should be filled and saved before starting to display the first poll.
d. Use 'Manage polls' to edit and delete polls.
7. Then go to widget and drag and drop Wordpress Poll in the area you want to display the plugin.

Important Note: It is mandatory to save all the mandatory field options in this plugin.

= Creating archive poll page =
1. Go to WP-Admin -> Pages -> Add New.
2. Type any title you like in the post's title area and paste the following shortcode in the page content [cardoza_wp_poll_archive]
3. WordPress will generate the link to the page. Copy the link.
4. Go to poll options in 'Poll'
5. Click the Poll options tab.
6. Paste the archive page link in 'Poll archive URL'.
7. Save the options.

You're done!

Uninstalling is as simple as deactivating the plugin.

== Screenshots ==

1. screenshot-1.gif
2. screenshot-2.gif
3. screenshot-3.gif
4. screenshot-4.gif
5. screenshot-5.gif
6. screenshot-6.gif
7. screenshot-7.gif

== Frequently Asked Questions ==

= How do I display a particular poll in a page or post? =
Its very simple to add poll in any page or post in your site.

Copy the following shortcode and paste it in your post or page for displaying the poll.

[cardoza_wp_poll id=poll_id]

poll_id - this the ID of the poll which you can find it on the 'Manage Polls' of your poll plugin page.

For eg: If you want to display the poll where the ID is 19 then the shortcode will be
[cardoza_wp_poll id=19]

That's it. Check your page or post now.

= How do I check the results without polling myself? =
1. Go to Polls in your Wordpress backend.
2. Click the Manage Polls tab.
3. Now you can see the list of polls.
4. The last colum of the table will have a button 'View Result'.
5. Click 'View Result'.
6. Once clicked it will display the poll result.

= How do I add images poll? =
1. Add the images in your media of wordpress backend.
2. Copy the 'File Url' of your uploaded image.
3. Paste the Url in the Answers of 'Add New Image Poll'.
4. Done

if you have any queries post it at http://www.vinojcardoza.com/blog/cardoza-wordpress-poll

== Change Log ==

= Version 35.7 =
* UI Bug fixed

= Version 35.6 =
* UI updated

= Version 35.5 =
* Tested compatibility with Wordpress 4.6.1

= Version 35.4 =
* Tested compatibility with Wordpress 4.5.3

= Version 35.2 =
* Tested compatibility with Wordpress 4.1.1

= Version 35.1 =
* Arabic translation added (Translated by Naaser Mohammed and Ahmed Saif).
* Security vulnerabilities removed (As suggested by Heikku Paananen).

= Version 35.0 =
* Security vulnerabilities removed.