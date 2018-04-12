---
layout: post
title: "An attempt to teach myself some code"
date: 2018-04-02
---

An API attempting to iterate over the entire database. Average word length in English dictionary is 7.60 letters long, and 80% are between 4 and 10 letters long. 

Plain version: Take prefix alter- as an example, my program calls the API 2,343 times for a 36 word list, and 213 calls returns a nonempty set. This is quite expensive. Since every call returns 5 words top, the lower bound is approximately 6 * n (the size of the dict). My guess is that Trie structure could improve the runtime. I will update if better method is implemented.
{% gist 330afde9f11e3ca8dffdfa612a0d499b %}


The orginal post is here
{% gist 4ec57fa1574099339b356f0274787e93 %}