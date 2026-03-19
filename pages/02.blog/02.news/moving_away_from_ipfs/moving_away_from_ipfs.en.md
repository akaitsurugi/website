---
title: 'Moving Away from IPFS'
subtitle: "Decentralization doesn't matter without availability"
template: article
taxonomy:
        category: news
        author: 'Luke Lollard'
date: 2025/01/18
feed:
    skip: false
---

Originally, the media on this website was hosted on a separate server using [IPFS](https://ipfs.tech/) (InterPlanetary File System). This new protocol had the promise of being a great system for distributing data. My initial hope for IPFS was to have the peer-to-peer benefits of BitTorrent, but accessible through a web browser so that any user could easily access the files. I was surprised by how complicated this turned out to be from the administration side and how unreliable it was from the user side. While reviewing the technologies used for this site, I found that it was unable to meet my requirements.

===

Please note that most of this is from the perspective of a website administrator. I may have also had a different use for IPFS than it's intended for. Instead of pinning a single file and linking to the hash on my website, I wanted to recursively share a directory using [IPNS](https://docs.ipfs.tech/concepts/ipns/) so that the URL would be human-readable and users could even browse the [Library](/library) like a computer folder. This directory would change any time a new file was added to the Library, increasing the overhead required to maintain it with IPFS.

As a user, I do find IPFS usable _sometimes_, though it's slow at best. I personally prefer BitTorrent. 

## Gateways

In order to reliably have the data from the Library accessible on IPFS, I was required to host my own IPFS gateway. The public gateways from Cloudflare or ipfs.io are slow and unreliable at best. These public providers can block your data, making the case for an uncensored system worthless. These public gateways often took hours, or even days, before files would become accessible; and even then the initial connection to my IPFS node took much longer than I would have liked. Sometimes files that were accessible yesterday would be inaccessible today.

The solutions I found proposed for these connectivity issues were to use _experimental_ features or paste your hash to a third-party cacher. (Why should I need to do this anyway? Why doesn't the IPFS network function properly without some third-party workaround?) Sometimes this would work at first, but ultimately it didn't solve the problem.

## Update Fatigue

Updates and database migrations can bring down your node. Since it's a rapidly changing technology, be prepared to read release notes often so that your data can still be reached after an update.

Even after about 10 years since the initial release in 2015, IPFS is still not stable or mature yet. At least the developers admit this, with the current release properly versioned at 0.32.1.

## Security Risks

After analyzing data from my firewall, IPFS was throwing more alerts than anything else on my network. I configured my gateway to only serve my files, but even after I removed the links from my website, the node was still pushing nearly the same amount of bandwidth (10-20 GB) a day.

Because of the way IPFS is designed, it's almost impossible to discover where this traffic is from. That's great for IPFS users, but as a systems administrator, I was left confused about how I was getting such regular traffic without public links to my files.

## `newer != better`

I prefer to use software that's stable, low-maintenance, and doesn't have many suprises. IPFS doesn't have any of these qualities (at least at this time).

Moving forward, media will now be hosted in the good, old-fashioned way: directly on this web server. We'll eventually also look into providing torrents as an alternative download source. In the long run, it doesn't look like the BitTorrent protocol is going anywhere.
