define(["react","widgets/SelectableItem"],function(e,t){"use strict";var a=React.createClass({displayName:"CompanyPopup",getInitialState:function(){return{visibleContent:this.props.keys.showContent}},handleChange:function(e){},changedTitle:function(e){this.setState({visibleContent:e.selected})},sendToEdit:function(){var e=this.props.keys.profileID.value,t="http://"+location.host+"/map/survey/edit/"+e;console.log(t),window.open(t,"_blank")},render:function(){var e=this.props.keys,a=this.state,n=(this.setState,e.items.map(function(e){var t={"font-weight":"bold"};return"URL"==e.label?React.createElement("li",null,React.createElement("span",{style:t},e.label,": "),React.createElement("a",{href:e.value,target:"_black"},e.value)):React.createElement("li",null,React.createElement("span",{style:t},e.label,": "),e.value)}));e.title.changed=this.changedTitle,e.title.classNames=["company-popup-title"];var l=a.visibleContent?{}:{display:"none"};return React.createElement("div",{className:"company-popup"},React.createElement(t,{keys:e.title}),React.createElement("div",{style:l,className:"company-popup-content"},n,React.createElement("div",{className:"edit-button-holder"},React.createElement("button",{className:"edit-button",onClick:this.sendToEdit},"Edit"))))}});return a});