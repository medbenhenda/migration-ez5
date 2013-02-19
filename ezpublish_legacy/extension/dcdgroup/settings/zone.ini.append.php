<?php /* #?ini charset="utf-8"?
# Setting file for ezflow zones as used by the Layout datatype
# A layout is divided into zones and then blocks, take a look in
# block.ini for block definitions.

[General]
AllowedTypes[]
AllowedTypes[]=GroupLayout
AllowedTypes[]=GlobalZoneLayout
AllowedTypes[]=2ZonesLayout1
AllowedTypes[]=2ZonesLayout2
AllowedTypes[]=2ZonesLayout3
AllowedTypes[]=3ZonesLayout1
AllowedTypes[]=3ZonesLayout2
AllowedTypes[]=CallForActionLayout

[GroupLayout]
ZoneTypeName=Custom layout - 3 zones
Zones[]=left
Zones[]=main
Zones[]=right
ZoneName[left]=Left zone
ZoneName[main]=main zone
ZoneName[right]=Right zone
ZoneThumbnail=3zones_layout1.gif
Template=grouplayout.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[GlobalZoneLayout]
ZoneTypeName=Global zone layout
Zones[]=main
ZoneName[main]=Global zone
ZoneThumbnail=globalzone_layout.gif
Template=globalzonelayout.tpl
AvailableForClasses[]=global_layout

[2ZonesLayout1]
ZoneTypeName=2 zones (layout 1)
Zones[]=left
Zones[]=right
ZoneName[left]=Left zone
ZoneName[right]=Right zone
ZoneThumbnail=2zones_layout1.gif
Template=2zoneslayout1.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[2ZonesLayout2]
ZoneTypeName=2 zones (layout 2)
Zones[]=left
Zones[]=right
ZoneName[left]=Left zone
ZoneName[right]=Right zone
ZoneThumbnail=2zones_layout2.gif
Template=2zoneslayout2.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[2ZonesLayout3]
ZoneTypeName=2 zones (layout 3)
Zones[]=top
Zones[]=bottom
ZoneName[top]=Top zone
ZoneName[bottom]=Bottom zone
ZoneThumbnail=2zones_layout3.gif
Template=2zoneslayout3.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[3ZonesLayout1]
ZoneTypeName=3 zones (layout 1)
Zones[]=left
Zones[]=right
Zones[]=bottom
ZoneName[left]=Left zone
ZoneName[right]=Right zone
ZoneName[bottom]=Bottom zone
ZoneThumbnail=3zones_layout1.gif
Template=3zoneslayout1.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[3ZonesLayout2]
ZoneTypeName=3 zones (layout 2)
Zones[]=left
Zones[]=right
Zones[]=bottom
ZoneName[left]=Left zone
ZoneName[right]=Right zone
ZoneName[bottom]=Bottom zone
ZoneThumbnail=3zones_layout2.gif
Template=3zoneslayout2.tpl
AvailableForClasses[]=frontpage
AvailableForClasses[]=landing_page

[CallForActionLayout]
ZoneTypeName=Call For Action zone layout
Zones[]=main
ZoneName[main]=Call For Action zone
ZoneThumbnail=callforaction_layout.gif
Template=callforactionlayout.tpl
AvailableForClasses[]=folder

*/ ?>
