define([],function(){var e="https://services5.arcgis.com/w1WEecz5ClslKH2Q/ArcGIS/rest/services",a="develop",t={develop:"odesurvey_organizations_dev",staging:"odesurvey_organizations_staging",production:"odesurvey_organizations_dev"},r=[e,t[a],"FeatureServer/0"].join("/"),l=[e,"country_centroids","FeatureServer/0"].join("/"),s=[e,"Countries","FeatureServer/0"].join("/");return{pannel_state:!0,default_basemap:"streets",tempCountryURL:"http://services.arcgis.com/EDxZDh4HqQ1a9KvA/ArcGIS/rest/services/Countries_ISO2/FeatureServer/0",features:r,countries:l,countryPolys:s,clusterStatFields:["org_type"],countryFields:{target:"org_hq_country_locode",source:"ISO3136"},panels:[{selected:!0,value:"map",label:"Map Results"},{selected:!1,value:"Table",label:"Table Results"}],filters:[{label:"Region",value:"Region",selected:!0,source:[],items:[]},{label:"Country",value:"Country",selected:!1,source:{url:l,field:"org_hq_country_locode",groupBy:["SHORT_NAME","ISO3136"],labelField:"SHORT_NAME",valueField:"ISO3136"},items:[{selected:!1,value:"value1",label:"country 1"},{selected:!0,value:"value2",label:"country 2"}]},{label:"Organization Type",value:"orgtype",source:{url:r,field:"org_type"},showStats:!0,selected:!1,items:[{selected:!1,value:"value1",label:"radio 1"}]},{label:"Industry Category",value:"industry",selected:!1,source:{url:r,field:"industry_id"},items:[]},{label:"Data Type",value:"datatype",selected:!1,source:{url:r,field:"data_type"},items:[]},{label:"Data Source",value:"datasource",selected:!1,source:{url:r,field:"data_src_gov_level"},items:[]}],basemaps_options:[{name:"Imagery",thumbnail:"http://www.arcgis.com/sharing/rest/content/items/413fd05bbd7342f5991d5ec96f4f8b18/info/thumbnail/imagery_labels.jpg"},{name:"Streets",thumbnail:"http://www.arcgis.com/sharing/rest/content/items/d8855ee4d3d74413babfb0f41203b168/info/thumbnail/world_street_map.jpg"},{name:"Gray",thumbnail:"http://www.arcgis.com/sharing/rest/content/items/8b3b470883a744aeb60e5fff0a319ce7/info/thumbnail/light_gray_canvas.jpg"},{name:"GrayLabels",thumbnail:"http://www.arcgis.com/sharing/rest/content/items/8b3b470883a744aeb60e5fff0a319ce7/info/thumbnail/light_gray_canvas.jpg"},{name:"DarkGray",thumbnail:"http://www.arcgis.com/sharing/rest/content/items/8b3b470883a744aeb60e5fff0a319ce7/info/thumbnail/light_gray_canvas.jpg"}],layers:[{name:"Layer1",url:"#url"},{name:"Layer2",url:"#url"},{name:"Layer2",url:"#url"}]}});