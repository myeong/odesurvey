define(["react","widgets/SelectableItem"],function(e,t){"use strict";var n=React.createClass({displayName:"CompanyPopup",getInitialState:function(){return{visibleContent:this.props.keys.showContent}},handleChange:function(e){},changedTitle:function(e){this.setState({visibleContent:e.selected})},sendToEdit:function(){var e=this.props.keys.profileID.value,t="http://odetest.govready.org/map/company/"+e+"/edit";window.open(t,"_blank")},render:function(){var e=this.props.keys,n=this.state,a=(this.setState,e.items.map(function(e){var t={"font-weight":"bold"};return React.createElement("li",null,React.createElement("span",{style:t},e.label,": "),e.value)}));e.title.changed=this.changedTitle,e.title.classNames=["company-popup-title"];var i=n.visibleContent?{}:{display:"none"};return React.createElement("div",{className:"company-popup"},React.createElement(t,{keys:e.title}),React.createElement("div",{style:i,className:"company-popup-content"},a,React.createElement("div",{className:"edit-button-holder"},React.createElement("button",{className:"edit-button",onClick:this.sendToEdit},"Edit"))))}});return n});