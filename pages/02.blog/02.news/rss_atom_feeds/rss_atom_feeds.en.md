---
title: 'RSS & Atom Feeds Now Available'
template: article
taxonomy:
        category: news
        author: 'Luke Lollard'
date: 2025/04/10
feed:
    skip: false
process:
    twig: true
twig_first: true
---

RSS and Atom feeds are now available for the [Blog](/blog) and [Library](/library) sections of the website.

===

<a href="/blog.rss"><span style="padding-right: 0.5em"><img src="{{ url('image://feed_icon.png') }}" alt="RSS Feed Icon" width="16px"></span>Blog RSS Feed</a>&ensp;&ensp;
<a href="/blog.atom"><span style="padding-right: 0.5em"><img src="{{ url('image://feed_icon.png') }}" alt="Atom Feed Icon" width="16px"></span>Blog Atom Feed</a>&ensp;&ensp;
<a href="/library.rss"><span style="padding-right: 0.5em"><img src="{{ url('image://feed_icon.png') }}" alt="RSS Feed Icon" width="16px"></span>Library RSS Feed</a>&ensp;&ensp;
<a href="/library.atom"><span style="padding-right: 0.5em"><img src="{{ url('image://feed_icon.png') }}" alt="Atom Feed Icon" width="16px"></span>Library Atom Feed</a>

I know that some folks prefer to use RSS feeds to be notified of updates, rather than periodically checking websites manually. Rather than having to visit the site to check for new content, RSS feeds provide the convenience that when a new update is available, your RSS reader pulls just that new page and you know of it right away.

If you're a Linux/BSD user, I personally recommend [`newsraft`](https://codeberg.org/newsraft/newsraft/) as an RSS reader. If a Mac or iOS user, [NetNewsWire](https://netnewswire.com/) has been the standard RSS reader for over a decade.
