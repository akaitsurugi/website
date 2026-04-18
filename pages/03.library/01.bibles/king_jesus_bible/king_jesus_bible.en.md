---
title: "King Jesus Bible"
subtitle: "A KJV Reader's Bible"
template: libraryItem
taxonomy:
    category: bibles
    language: english
    author: 'Akai Tsurugi'
    format: text
publish_date: 2023/9/23
date: 2023/9/23
process:
    twig: true
feed:
    skip: false
---

<div class="quote"><p>If we would destroy the Christian religion, we must first of all destroy man's belief in the Bible.<br/><span class="text-right">- Voltaire</span></p></div>

In recent decades there has been a great attack on the Bible, specifically the King James. This has resulted in many Americans turning away from it. The #1 reason people say they don't read the KJV now is because it is "too hard" to read.

===

## A Vision

> But he answered and said, It is written, Man shall not live by bread alone, but by every word that proceedeth out of the mouth of God.  
<span class="reference">- Matthew 4:4</span>

There hasn't been a widely accepted update to the King James since the 18<sup>th</sup> century. Our hope is to make it more accessible, especially for those of the Millennial generation and younger. The King Jesus Bible aims to be a Bible that both old and young will use. Additional information about this project can be found in the News article, [Introducing the King Jesus Bible](/blog/news/introducing_the_king_jesus_bible).

<br />![King Jesus Bible Sketch](2up.png?lightbox&width=100%)

### Features

- Updated spellings, but words will not be changed (shew -> show)
  - OT names used in NT (Esaias -> Isaiah)
  - American spellings (honour -> honor)
- Quotation marks to identify speech
- No study notes, footnotes, marginal notes, or cross-references to clutter the page
- Study aids: definitions of words, name meanings, etc. will be in a section separate from the testaments
- Black letter only
- Copyleft: under CC BY-SA ("the love of money is the root of all evil")

## Roadmap

This will begin with an OSIS file that can be used with SWORD software. John and Romans will be first, then the New Testament, and finally the Old Testament. It will be available for free digitally. When it is released on paper, it will be affordable. The Bible is meant to be read by people, not to be a collector's item.

1. Update spellings
2. Add quotation marks
3. Release SWORD module
4. Release free digital PDF, epub, and web versions
   1. Classic Edition: two-column, verse-by-verse study format
   2. Reader's Edition: Paragraph prose, metrical poetry format, with or without verse numbers
5. Create study aids
6. Release a paper version

## Update Examples

Changes are bolded and underlined in the comparison below.

<table>
  <thead>
    <tr>
      <th>Verse</th>
      <th>King James</th>
      <th>King Jesus</th>
    </tr>
  </thead>
  <tr>
    <td>I Samuel 9:27</td>
    <td><em>And</em> as they were going down to the end of the city, Samuel said to Saul, Bid the servant pass on before us, (and he passed on,) but stand thou still a while, that I may <u><strong>shew</strong></u> thee the word of God.</td>
    <td><em>And</em> as they were going down to the end of the city, Samuel said to Saul, <u><strong>"</strong></u>Bid the servant pass on before us,<u><strong>"</strong></u> (and he passed on,) <u><strong>"</strong></u>but stand thou still a while, that I may <u><strong>show</strong></u> thee the word of God.<u><strong>"</strong></u></td>
  </tr>
  <tr>
    <td>Lamentations 5:14</td>
    <td>The elders have ceased from the gate, the young men from their <strong><u>musick</strong></u>.</td>
    <td>The elders have ceased from the gate, the young men from their <strong><u>music</strong></u>.</td>
  </tr>
  <tr>
    <td>John 1:21</td>
    <td>And they asked him, What then? Art thou <u><strong>Elias</u></strong>? And he saith, I am not. Art thou that prophet? And he answered, No.</td>
    <td>And they asked him, <u><strong>"</u></strong>What then? Art thou <u><strong>Elijah</u></strong>?<u><strong>"</u></strong> And he saith, <u><strong>"</u></strong>I am not.<u><strong>"</u></strong> <u><strong>"</u></strong>Art thou that prophet?<u><strong>"</u></strong> And he answered, <u><strong>"</u></strong>No.<u><strong>"</u></strong></td>
  </tr>
</table>


{# Other notes:
Names will be changed to what they are commonly known as. For instance, "Esaias" will be updated to "Isaiah," as most people refer to this prophet in English as Isaiah. "Judas" will be updated to "Judah," except when referring to Judas Iscariot, because in daily speech "Judas" is used to refer to Judas Iscariot.

- Built in OSIS for SWORD study at first
  - Web, PDF, epub versions
- Includes the original preface (the translator's to the reader)?
- Explain -eth, -est, thou, ye, etc. (a primer on the English in the new preface)
- Italics are a dark grey
_- Pure Cambridge Edition text, with endings of epistles_

Study aids:
- Definitions of words (some Webster's 1828?) with etymology (check Wiktionary)
- Maps
- Name meanings
- Genealogical charts (1611)
- Chronology of the OT

Releases:
- First: hardcover, "pew" edition (no art gilding or rounded corners)
- Editions: classic/study (2 column, verse by verse), reader (paragraph/metrical)
- Sizes: S (pocket), M (regalar), L (large print)
- Regular and wide margin

Possible additions:
- Simple headings (check 1611), could be an add-on

Purpose:
- To bring glory to God.
- To _**get more people to read**_ the Bible.
- To make it _**easier**_ for Bible translation.
- To finance translations into other languages. #}
