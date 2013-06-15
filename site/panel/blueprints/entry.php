<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title: 
    label: Title
    type:  text
  date: 
    label: Date
    type:  date
    format: yy-mm-dd
  updated: 
    label: Updated
    type:  date
    format: yy-mm-dd
  tags: 
    label: Tags
    type:  text
  footnotes: 
    label: Footnotes
    type:  checkbox
    default: off
  text: 
    label: Text
    type:  textarea
    size:  large