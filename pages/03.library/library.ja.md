---
title: ライブラリー
template: library
content:
    items: '@self.descendants'
    pagination: true
    order:
        by: date
        dir: desc
simplesearch:
    process: true
    route: '@self'
    filters:
        - '@self'
    filter_combinator: and
---
