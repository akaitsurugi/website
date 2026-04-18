---
title: Library
template: library
content:
    items: '@self.descendants'
    pagination: true
    order:
        by: publish_date
        dir: desc
simplesearch:
    process: true
    route: '@self'
    filters:
        - '@self'
    filter_combinator: and
---
