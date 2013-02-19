<?php /* #?ini charset="utf-8"?
# eZ Publish configuration file.
#

[TopAdminMenu]
Tabs[]=shop

[Topmenu_shop]
NavigationPartIdentifier=ezshopnavigationpart
Name=Webshop
#Tooltip=Manage customers, orders, discounts and VAT types; view sales statistics.
URL[]
URL[default]=shop/orderlist
Enabled[]
Enabled[default]=true
Enabled[browse]=false
Enabled[edit]=false
Shown[]
Shown[navigation]=true
Shown[default]=false
Shown[browse]=true
PolicyList[]=shop/administrate

[Leftmenu_my]
# Hidden by default as of 4.3
Links[my_shopping_basket]=shop/basket
PolicyList_my_shopping_basket[]=shop/buy

# Hidden by default as of 4.3
Links[my_wish_list]=shop/wishlist
PolicyList_my_wish_list[]=shop/buy


[Leftmenu_shop]
Name=shop
Links[]
LinkNames[]
Links[customers]=shop/customerlist
Links[discounts]=shop/discountgroup
Links[orders]=shop/orderlist
Links[archive]=shop/archivelist
Links[order_status]=shop/status
Links[product_statistics]=shop/statistics
Links[vat_types]=shop/vattype
Links[vat_rules]=shop/vatrules
Links[product_categories]=shop/productcategories
Links[currencies]=shop/currencylist
Links[preferred_currency]=shop/preferredcurrency
Links[products_overview]=shop/productsoverview

*/ ?>