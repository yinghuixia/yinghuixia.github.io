---
layout: post
title: "An attempt to teach myself some code"
date: 2018-04-02
---

The question is part of the application process for OpenAI Scholar. An API attempting to iterate over the entire database. Average word length in English dictionary is 7.60 letters long, and 80% are between 4 and 10 letters long. In this specific use case, we want to query usernames, which is not bounded by common vocabs.

Plain version: Take prefix alter- as an example, my program calls the API 180 times for a 36 word list, and 18 calls returns a nonempty set. I maintain an additional prefix set to achieve the runtime efficiency. A smarter DFS would be implemented later, which should achieve the same runtime and no extra space.

{% gist 330afde9f11e3ca8dffdfa612a0d499b %}