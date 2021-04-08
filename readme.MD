# CSS var connector for Beaver Builder

## 1. About the plugin

This plugin adds a css var connector for Beaver Builder. It allows you to manually enter a css var that you can add to your site's `:root { }` element, and it will return it encapsuled in `var()`.


---
## 2. Current limitations


### BB is NOT expecting css variables

Beaver Builder is not expecting these kind of values using the connector. In most cases the values will be included in the stylesheet and it expects either a color (hex or rgb), an url or a unit. Beaver Builder will try to find a string `url` or `rgb` to determine what kind of value is coming in, and if it finds that, it will use that value as is.


### some modules-settings can not be used at all

Some Modules or module-settings are generating lighter or darker colors from the colors that are set. Because the var value isn't a color the underlying code can deal with, it will break the CSS and has undesired behavior as a result. In future updates we will try to add a list of compatible modules. 

Under #4 is a list of modules and their settings that work, and a list of settings that don't work. Don't use the connector on these settings, or your CSS might end up mangled.

---
## 3. The Hack to make (most of) it work
Because of what is written under 2, var-names need to have a certain string in them, otherwise it will fail. To have Beaver Builder accept the variables, you will need to use variablenames that have `rgb` in them. Some good names are:

    :root {
        --myrgbaby-primary-color: red;
        --myrgbro-secondary-color: #00f000;
        --rgbbb-custom-text-color: #000000;
    }

If you do not include this, it will NOT work, not even a bit. Because it does not compute to a hex color, Beaver Builder rules will discard the setting altogether.

---
## 4. Modules and settings that seem to work
Here's a list of modules and the properties that work with the CSS variables.



Module | Working | Not Working
|---:|:---|:---|
Heading | Text Color | -
Button | Text Color, Text Hover Color | Background Color, Background Hover Color 
Button Group | Text Color, Text Hover Color | Background Color, Background Hover Color
List | List Background Color, Icon Color, Heading Color, Content Color, Line Color | -
Text Editor | Color | -
Seperator | Color | -
Content Slider | Text Color, Text Background Color | -
Icon | Color, Hover Color, Background Color, Background Hover Color, Text Color | -
Icon Group | Color, Hover Color, Background Color, Background Hover Color, Text Color | -
Map | - | -
Slideshow | - | -
Testimonials | Text Color, Dot Color | -
Menu | Menu Background Color, Link Color, Link Hover Color, Link Hover Background Color,  Seperator Color, Dropdown Background Color | -
Callout | Background Color, Heading Color, Text Color | -
Contact Form | Button Text Color, Button Text Hover Color, Button Border Hover Color | Button Background Color, Button Background Hover Color
Accordion | Text Color (heading), Background Color, Text Color (content), Back Color (content) | -
Tabs | Background Color, Border Color, Text Color (label), Active Color (label), Text Color (content)
Pricing Table | Box Foreground, Accent Color, Accent Text Color | Box Border

Unlisted modules are not tested yet.

## Row settings

You can also use the following Row and Column settings:

 | | |
|---:|---|
Row | Color, Link Color, Link Hover Color, Heading Color, Background Color | -
Column | Color, Link Color, Link Hover Color, Heading Color, Background Color | -

That means that once you've set these, you can drag in Heading Modules, Texteditor Modules and more and the colors set in the row or column will be used.

---
# 5. The Connector
You can find the connector listed under "Toolbox > Toolbox CSS var"

---
## Version history

1.0.0   initial release (April 8th 2021)
