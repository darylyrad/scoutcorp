<?php 

snippet('header');

snippet('hero');

snippet('about', array('data' => page('home/about')));

snippet('services', array('data' => page('home/services')));

if(page('home/cases')->isVisible()) snippet('cases', array('data' => page('home/cases')));

if(page('home/listings')->isVisible()) snippet('listings', array('data' => page('home/listings')));

snippet('contact', array('data' => page('home/contact')));

snippet('partners', array('data' => page('home/partners')));

snippet('footer');