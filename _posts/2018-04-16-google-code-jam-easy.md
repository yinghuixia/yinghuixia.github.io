---
layout: post
title: "Simple Math tricks saves a lot of lines"
date: 2018-04-16
mathjax: true
---

<a href="https://codejam.withgoogle.com/2018/challenges/00000000000000cb/dashboard">Here is the question</a>

Instead of updating the current strength after each operation,

$$ D_{i} =  score \times \mathbf{1}_{'S'}$$

It simply boils down to a linear equation - reminds me of the first time I saw a normal equation!

$$ D =  N_{s} + C_{1} \times 1 + C_{2} \times 2 + ... + C_{N_{c}} \times 2^{N_{c} - 1} $$

It's not worth posting the code here, here is 
<a href="https://gist.github.com/yinghuixia/add2de5f60d09b8f8dde9d7dfe51ea44">my solution</a>