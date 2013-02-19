<?php /* #?ini charset="utf-8"?
# Setting file for ezflow blocks as used by the Layout datatype
# A layout is divided into zones and then blocks, take a look in
# zone.ini for zone definitions.

[General]
AllowedTypes[]
AllowedTypes[]=DemoBlock
AllowedTypes[]=Manual2Items
AllowedTypes[]=Manual3Items
AllowedTypes[]=Manual4Items
AllowedTypes[]=Manual5Items
AllowedTypes[]=Dynamic3Items
AllowedTypes[]=Gallery
AllowedTypes[]=Video
AllowedTypes[]=ItemList
AllowedTypes[]=MainStory
AllowedTypes[]=Banner
AllowedTypes[]=TagCloud
AllowedTypes[]=Poll
AllowedTypes[]=FlashRecorder
AllowedTypes[]=FeedReader
AllowedTypes[]=Keyword
AllowedTypes[]=GMap
AllowedTypes[]=OnlineUsers
AllowedTypes[]=MultimediaCarousel
AllowedTypes[]=Search
AllowedTypes[]=Ads
AllowedTypes[]=LatestContent
AllowedTypes[]=TopRated
AllowedTypes[]=GMapItems
AllowedTypes[]=DcdZones
AllowedTypes[]=Archives
AllowedTypes[]=MainTop
AllowedTypes[]=BannerRight
AllowedTypes[]=Regions
AllowedTypes[]=HeadlinesFeedReader
AllowedTypes[]=NewsFeedReader
AllowedTypes[]=FeaturesFeedReader
AllowedTypes[]=FeaturedVideoFeedReader
AllowedTypes[]=BannerMainBottom
AllowedTypes[]=BlogsAndFeaturedRightFeedReader
AllowedTypes[]=WhitepapersFeedReader
AllowedTypes[]=BannerLeft
AllowedTypes[]=VideoLeft

[VideoLeft]
Name=VideoLeft (dynamic)
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
ViewList[]=video_left
ViewName[video_left]=Video Left

[WhitepapersFeedReader]
Name=Whitepapers Feed Reader
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
CustomAttributes[]=link
ViewList[]=whitepapers_feed_reader
ViewName[whitepapers_feed_reader]=Whitepapers Feed Reader

[BlogsAndFeaturedRightFeedReader]
Name=Blogs And Featured Right Feed Reader
ManualAddingOfItems=disabled
CustomAttributes[]=source_blog
CustomAttributes[]=limit_blog
CustomAttributes[]=offset_blog
CustomAttributes[]=link_blog
CustomAttributes[]=source_featured
CustomAttributes[]=limit_featured
CustomAttributes[]=offset_featured
CustomAttributes[]=link_featured
ViewList[]=blogs_featured_right_feed_reader
ViewName[blogs_featured_right_feed_reader]=Blogs And Featured Right Feed Reader

[BannerLeft]
Name=Banner Left
ManualAddingOfItems=enabled
CustomAttributes[]
ViewList[]=banner_left
ViewName[banner_left]=Banner Left

[BannerRight]
Name=Banner Right
ManualAddingOfItems=enabled
CustomAttributes[]
ViewList[]=banner_right
ViewName[banner_right]=Banner Right

[BannerMainBottom]
Name=Banner Main Bottom
ManualAddingOfItems=enabled
CustomAttributes[]
ViewList[]=banner_main_bottom
ViewName[banner_main_bottom]=Banner Main Bottom

[FeaturedVideoFeedReader]
Name=Featured Videos
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
CustomAttributes[]=link
ViewList[]=featured_video_feed_reader
ViewName[featured_video_feed_reader]=Features Video Feed Reader

[FeaturesFeedReader]
Name=Features and Opinion
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
CustomAttributes[]=link
ViewList[]=features_feed_reader
ViewName[features_feed_reader]=Features Feed Reader

[NewsFeedReader]
Name=News And Analysis
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
CustomAttributes[]=link
ViewList[]=news_feed_reader
ViewName[news_feed_reader]=News And Analysis

[HeadlinesFeedReader]
Name=HeadLines Feed reader
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
ViewList[]=headlines_feed_reader
ViewName[headlines_feed_reader]=Headlines

[Regions]
Name=Regions(Dynamic)
NumberOfValidItems=6
NumberOfArchivedItems=6
ManualAddingOfItems=disabled
FetchClass=eZFlowLatestObjects
FetchFixedParameters[Class]=region
FetchFixedParameters[Source]=135
FetchFixedParameters[Limit]=6
ViewList[]=regions
ViewName[regions]=Regions

[MainTop]
Name=Main Top (Dynamic)
NumberOfValidItems=3
NumberOfArchivedItems=3
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
CustomAttributes[]=link
ViewList[]=maintop
ViewName[maintop]=Main Top

[Archives]
Name=Archives (Dynamic)
NumberOfValidItems=20
NumberOfArchivedItems=0
ManualAddingOfItems=disabled
FetchClass=eZFlowLatestObjects
FetchFixedParameters[Class]=link
FetchFixedParameters[Source]=103
FetchFixedParameters[Limit]=20
ViewList[]=archives
ViewName[archives]=Archives

[DcdZones]
Name=Zones (Dynamic)
NumberOfValidItems=20
NumberOfArchivedItems=0
ManualAddingOfItems=disabled
FetchClass=eZFlowLatestObjects
FetchFixedParameters[Class]=link
FetchFixedParameters[Source]=143
FetchFixedParameters[Limit]=20
ViewList[]=dcd_zones
ViewName[zones]=Dcd Zones


[DemoBlock]
Name=Demo Block
ManualAddingOfItems=disabled
CustomAttributes[]
ViewList[]=demoblock
ViewName[demoblock]=Demo Block

[Manual2Items]
Name=2 items (Manual)
NumberOfValidItems=2
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=2_items1
ViewList[]=2_items2
ViewName[2_items1]=2 items (1)
ViewName[2_items2]=2 items (2)

[Manual3Items]
Name=3 items (Manual)
NumberOfValidItems=3
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=3_items1
ViewList[]=3_items2
ViewList[]=3_items3
ViewName[3_items1]=3 items (1)
ViewName[3_items2]=3 items (2)
ViewName[3_items3]=3 items (3 cols)

[Manual4Items]
Name=4 items (Manual)
NumberOfValidItems=4
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=4_items1
ViewList[]=4_items2
ViewList[]=4_items3
ViewName[4_items1]=4 items (1)
ViewName[4_items2]=4 items (2)
ViewName[4_items3]=4 items (3)

[Manual5Items]
Name=5 items (Manual)
NumberOfValidItems=5
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=5_items1
ViewList[]=5_items2
ViewName[5_items1]=5 items (1)
ViewName[5_items2]=5 items (2)

[Dynamic3Items]
Name=3 items (Dynamic)
NumberOfValidItems=3
NumberOfArchivedItems=5
ManualAddingOfItems=disabled
FetchClass=eZFlowLatestObjects
FetchFixedParameters[Class]=article
FetchFixedParameters[Source]=74
FetchFixedParameters[Limit]=3
ViewList[]=3_items1
ViewName[3_items1]=3 items (1)

[Gallery]
Name=Gallery (Manual)
NumberOfValidItems=4
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=gallery1
ViewName[gallery1]=Gallery (1)

[Video]
Name=Video (Manual)
NumberOfValidItems=1
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=video
ViewName[video]=Video player

[ItemList]
Name=Item list
NumberOfValidItems=12
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=itemlist1
ViewList[]=itemlist2
ViewList[]=itemlist3
ViewName[itemlist1]=List (1 col)
ViewName[itemlist2]=List (2 cols)
ViewName[itemlist3]=List (3 cols)

[MainStory]
Name=Main story (Manual)
NumberOfValidItems=1
NumberOfArchivedItems=5
ManualAddingOfItems=enabled
ViewList[]=main_story1
ViewList[]=main_story2
ViewList[]=main_story3
ViewName[main_story1]=Main story (1)
ViewName[main_story2]=Main story (2)
ViewName[main_story3]=Main story (3)

[Banner]
Name=Banner
NumberOfValidItems=1
NumberOfArchivedItems=5
ManualAddingOfItems=disabled
ViewList[]=banner1
ViewList[]=banner2
ViewName[banner1]=Banner (medium)
ViewName[banner2]=Banner (small)

[TagCloud]
Name=Tag cloud
ManualAddingOfItems=disabled
CustomAttributes[]=subtree_node_id
UseBrowseMode[subtree_node_id]=true
ViewList[]=tag_cloud
ViewName[tag_cloud]=Tag cloud

[Poll]
Name=Poll
ManualAddingOfItems=disabled
CustomAttributes[]=poll_node_id
UseBrowseMode[poll_node_id]=true
ViewList[]=poll
ViewName[poll]=Poll

[FlashRecorder]
Name=Flash Recorder
NumberOfValidItems=8
NumberOfArchivedItems=4
ManualAddingOfItems=enabled
ViewList[]=flash_recorder
ViewName[flash_recorder]=Flash Recorder

[FeedReader]
Name=Feed reader
ManualAddingOfItems=disabled
CustomAttributes[]=source
CustomAttributes[]=limit
CustomAttributes[]=offset
ViewList[]=feed_reader
ViewName[feed_reader]=Feed reader

[Keyword]
Name=Keyword
NumberOfValidItems=5
NumberOfArchivedItems=5
ManualAddingOfItems=disabled
FetchClass=eZFlowKeywordsFetch
FetchParameters[Source]=NodeID
FetchParametersSelectionType[Source]=single
FetchParametersIsRequired[Source]=true
FetchParameters[Keywords]=string
FetchParameters[Classes]=string
ViewList[]=keyword
ViewName[keyword]=Keyword

[GMap]
Name=Google Map
ManualAddingOfItems=disabled
CustomAttributes[]=location
CustomAttributes[]=key
ViewList[]=gmap
ViewName[gmap]=Google Map

[OnlineUsers]
Name=Online Users
ManualAddingOfItems=disabled
ViewList[]=onlineusers
ViewName[onlineusers]=Online Users

[MultimediaCarousel]
Name=Multimedia carousel
NumberOfValidItems=5
NumberOfArchivedItems=5
ManualAddingOfItems=disabled
FetchClass=eZFlowMCFetch
FetchParameters[Source]=NodeID
FetchParametersSelectionType[Source]=single
FetchParametersIsRequired[Source]=true
FetchParameters[Classes]=string
ViewList[]=multimediacarousel
ViewName[multimediacarousel]=Multimedia carousel

[Search]
Name=Search
ManualAddingOfItems=disabled
ViewList[]=search
ViewName[search]=Search

[Ads]
Name=Advertisement
ManualAddingOfItems=disabled
CustomAttributes[]=code
CustomAttributeTypes[code]=text
ViewList[]=ads
ViewName[ads]=Advertisement

[LatestContent]
Name=Latest content
NumberOfValidItems=3
NumberOfArchivedItems=5
ManualAddingOfItems=disabled
FetchClass=eZFlowLatestContent
FetchParameters[Source]=NodeID
FetchParametersSelectionType[Source]=single
FetchParametersIsRequired[Source]=true
FetchParameters[Classes]=string
FetchFixedParameters[Limit]=3
ViewList[]=latest_content
ViewName[latest_content]=Latest content

[TopRated]
Name=Top Rated
ManualAddingOfItems=disabled
CustomAttributes[]=source_node_id
CustomAttributes[]=limit
UseBrowseMode[source_node_id]=true
ViewList[]=toprated
ViewName[toprated]=TopRated

[GMapItems]
Name=Google Map Items
ManualAddingOfItems=disabled
CustomAttributes[]=parent_node_id
CustomAttributes[]=class
CustomAttributes[]=attribute
CustomAttributes[]=limit
CustomAttributes[]=width
CustomAttributes[]=height
UseBrowseMode[parent_node_id]=true
ViewList[]=geo_located_content
ViewName[geo_located_content]=Geo-Located Content

*/ ?>