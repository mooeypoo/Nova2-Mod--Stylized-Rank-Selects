Mod Stylized Rank Selects
=========================
Nova2 Modification (Anodyne Productions)

Created by Moriel Schottlender (mooeypoo@gmail.com)

-
## Description
This modification adds background colors per rank image for the rank selectbox in Nova2.

## Installation
1. Upload [mod]/application/helpers/MY_form_helper.php to [yourdomain]/applications/helpers/

### NOTE!
If you already changed or edited MY_form_helper.php in your domain, do NOT upload this file. Instaed, add the "function form_dropdown_rank" contents to your existing My_form_helper.php file. 

**Notice that you will have to put this function ABOVE the line**

```
 require_once MODPATH.'core/helpers/Nova_form_helper.php';
```

**Otherwise, this function will not override the core function in nova.**

2. Upload [mod]/views/titan/admin/css/admin.css to [yourdomain]/views/[yourtemplate]/admin/css

### NOTE!
If you already have content in the [yourdomain]/views/[yourtemplate]/admin/css/admin.css file, you will need to copy the contents of the file in [mod]/views/titan/admin/css/admin.css and paste it into your css file in [yourdomain]/views/[yourtemplate]/admin/css/admin.css

## Tweaks and Edits
This was written for the ds9 version of nova, but it can work with any other rankset. The mod reads the first letter of the image-file, and determines the color from there. 

An image named **'r-a5.png'**, for instance, will get the CSS class value **'modsel_r'**. 
You can change the colors in the [yourdomain]/views/[yourtemplate]/admin/css/admin.css file. You can also add more colors there as well as long as you know your rank file hierarchy.

I am not sure how other ranksets work, so if you have specific rank sets that do not work with this extension, please let me know. If there's enough need, I'll work something out in the control panel and make the mod a bit more robust.

Credits and help
================
I apologize in advance, I'm a student and I have a full time job, so I don't have as much time as I'd like to help and correct bugs. However, it does matter to me, so please take the time to report whatever bug you find in the "issues" on github.

Alternatively, you can go to the Anodyne Productions forum and catch me up there.

Enjoy!

~mooeypoo 
mooeypoo@gmail.com