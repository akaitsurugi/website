---
title: 'Porting ObjCSword'
template: article
taxonomy:
    category: news
    author: 'Luke Lollard'
publish_date: 2026/04/28
date: 2026/04/28
feed:
    skip: false
---

Around the time I started working on this website, I was also interested in working on [Eloquent](http://eloquent-bible-study.eu/?target=_blank&rel=noreferrer), a Bible study app for Mac OS X developed by [Manfred Bergmann](http://retro-style.software-by-mabe.com/?target=_blank&rel=noreferrer). I have used several open-source apps for SWORD modules, but was disappointed at how poorly they were designed compared to Eloquent. Yet, as much as I like Eloquent, I've also wanted to move away from Apple devices.

===

At first I investigated what it would take to create a Bible study app for Linux or the BSDs. There are two major frameworks for creating open-source GUI applications nowadays: GTK and Qt. When I looked more into these, I found many undesirable qualities—particularly that they lacked long-term stability. Experienced developers are sick of the maintenance required to keep their apps working over time because of the recurring breaking changes in these UI libraries, and I take care to avoid technologies that are [high-maintenance](/blog/news/moving_away_from_ipfs#newer-better).

It turns out that there is an alternative out there that's not as well-known: [GNUstep](https://www.gnustep.org/?target=_blank&rel=noreferrer), an open-source implementation of Cocoa. It seemed too good to be true, because this meant that I could port Eloquent to other platforms; instead of having to start developing an app from scratch. I decided to see if this would truly work, as it would save a great deal of time and allow me to build on a great foundation.

First, I'd need to get the [ObjCSword](https://github.com/mdbergmann/ObjCSword?target=_blank&rel=noreferrer) framework (an Objective-C wrapper for the SWORD C++ library) to build, as it's a dependency for Eloquent. Just the other day I was able to compile ObjCSword on FreeBSD using GNUstep's [libs-xcode](https://github.com/gnustep/libs-xcode/?target=_blank&rel=noreferrer), a library that builds Xcode projects on other platforms, and tested it with a prototype program. Click on the screenshot below to see the full-quality version.

![ObjCSword running on FreeBSD](2026-04-25-ObjCSword.png?lightbox)

There's probably still a bit of work left to get this fully functioning, but at least I know that it's truly possible to build software originally developed for Macs on other platforms. Porting Eloquent itself will certainly require more work, but this first milestone has encouraged me that there is hope that the best open-source Bible study app out there can be made available for more than Macs.
