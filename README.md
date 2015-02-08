Manifesto
=====

Manifesto - A minimal, responsive theme for Anchor CMS designed for a distraction-free reading experience on any device.
Test drive it... [demo](http://dev.daveis.net/manifesto)

[Features](#features) | [Installation](#installation) | [Setup](#setup) | [Final Thoughts](#navigation--twitter-account) | [License & Copyright](#navigation--twitter-account)

### Features
- Responsive design built on a modified version of Skeleton (http://getskeleton.com) to have a percentage based grid system
- jPanelMenu drawer navigation
- Options to display/hide Anchor `Pages` in the main navigation
- Nice featured images for each post (requires additional setup)
- Estimated "read time" for each post, à la medium.com
- Supports post descriptions to display on `Posts` page and in article header as a teaser
- "Tweet This" button on posts

__* NOTE:__ Originally I was using the Anchor HTML function to return the content of a post, but this seems to be causing more confusion for people so I have gone back to Anchor's default behavior of rendering Markdown. The HTML was just my own personal preference.

### Installation
1. Download the theme from Github
2. Unzip and copy the theme folder into your `themes` directory
3. Set **Manifesto** as the `Current Theme:` on the **Extend > Metadata** menu in Anchor's admin
4. **Blamo!** You're done. Move along to setup customizations.

### Setup
A few extra customizations are required to take advantage of this themes extra features.

#### Featured Images and Image Credit
This theme can display one large featured image per post. Optionally, you can also setup an extra field to insert some HTML for crediting the image author. If images aren't for you then not to worry, the theme will simply load with a plain vanilla h1 title.

1. Create a new Custom Field in the **Extend > Custom Fields** menu in Anchor's admin
2. Fill in the form with the following:
	- Extend: post
	- Type: file
	- Unique Key: featured_image
	- Label: Featured Image
	- File Types: [blank]
3. Upload featured images when editing a post
4. (Optional) Create another Custom Field with the following settings:
	- Extend: post
	- Type: html
	- Unique Key: featured-image-credit
	- Label: Featured Image Credit
4. **Swish!** Ya done good, son.

#### Navigation & Twitter Account
You can control which pages (not posts) are visible in the main menu, and also setup a link to your Twitter account. The Twitter variable is also used to credit you in the "Tweet This" button in your posts.

1. Create a new Custom Field in the **Extend > Custom Fields** menu in Anchor's admin
	- Extend: page
	- Type: text
	- Unique Key: show-in-menu
	- Label: Show link in nav menu?
2. Click **Update**
3. If you want to hide any subsequent pages from the nav, simply uncheck that field in your post
4. Create a new variable to provide your Twitter username. **Extend > Site Variables** in Anchor's admin
	- Name: twitter_account
	- Value: YourTwitterUsername
5. Create a new variable to provide your Twitter URL. **Extend > Site Variables** in Anchor's admin
	- Name: twitter_url
	- Value: http://twitter.com/YourTwitterUsername
6. **That's it!** Finished.

### Final Thoughts
This theme is by no means perfect. I was looking to try some BEM techniques in organizing my code with this one, and in all likelihood I fucked it up royally. If you have any questions, submit an issue or shoot me a message: dave [at] daveis [dot] net.

### License & Copyright
Free to use and modify under the MIT license.
http://www.opensource.org/licenses/mit-license.php

&copy; 2013 David Gardner
