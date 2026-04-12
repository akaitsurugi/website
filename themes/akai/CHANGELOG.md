# v1.3.1
## xx/xx/2026

1. [](#new)
    * Added librarySubItem template (used to filter items from the Library page)
1. [](#improved)
    * Filter Library collection with libraryItem template instead of library
    * Localize website title in head and header

# v1.3
## 03/21/2026

1. [](#improved)
    * Only use open-source fonts
    * Use woff2 fonts instead of ttf
    * Dates are now localized
    * Metadata is now translated using the languages files
    * Update Japanese translations

# v1.2.2
## 03/19/2026

1. [](#new)
    * Created a custom version of `nicefilsize` with rounding (`nicefilesizerounded`)
1. [](#improved)
    * Added animation to menu when on a mobile device
    * Cleaned up for public release
    * Fix filters for other languages

# v1.2.1
## 02/18/2026

1. [](#new)
    * Added `pre` and `p code` styles to custom.css
1. [](#improved)
    * Use `page.title|raw` instead of `page.title` so that HTML tags work
    * Only paginate with the library template if pagination is set to true
    * Fixed numbering of web books with prefaces
    * Fixed first-letter formatting for Bible books with only one chapter
    * Fixed whitespace in metadata sections
    * Changed formatting of quotes and Bible verses
    * Replaced almost all <i> and <b> tags with <em> and <strong>
    * Fixed formatting of subscribe images

# v1.2
## 09/28/2025

1. [](#new)
    * First iteration of responsive design
    * Text now only goes to ~80 columns
1. [](#improved)
    * Removed jQuery since it's not used, saving 85 KB
    * Removed pure-min CSS since it's not needed, saving 16 KB
    * Simplified navigation by making About one unified page
    * Changed the look of Library, removing the gray background
    * General code cleanup

# v1.1
##  12/24/2024

1. [](#new)
    * Locally host files, instead of using external IPFS links
    * New template for Books
    * Footnotes with `:target` are now highlighted
1. [](#improved)
    * Change Library links from whole div to title
    * Change hyphenation to only descriptions in a div for library-items
    * Make links more visible
    * Anchors for headers are now visible
    * CSS cleanup

# v1.0
##  04/13/2024

1. [](#new)
    * First 1.0 release
