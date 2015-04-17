pyro-widget-select
===================

Create a dropdown for all the widget instances in your site.

How To Use
----------

### Basics

* Rename this folder to `widget_select`
* Add the field type as you would normally
* Choose "Widget" as the type
* Enjoy it on a page

### In the layout

This field returns the instance id that you selected. Here is the basic usage:

``` html
<!-- check if a widget was found -->
{{ if page:my_chosen_slug }}
  {{ widgets:instance id=page:my_chosen_slug }}
{{ endif }}
```

License
-------

(The MIT License)

Copyright (c) 2015 James Doyle(james2doyle) james2doyle@gmail.com

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
