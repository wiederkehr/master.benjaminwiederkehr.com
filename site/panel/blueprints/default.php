<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  text: 
    label: Text
    type:  textarea
    size:  large
  footnotes:
    label: Footnotes
    type: checkbox
    default: off
  version:
    label: Version
    type: text
