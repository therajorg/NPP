var nppalldata;

$(function(){
	$("#enablejsID").hide();


	var tmpFN = "npp_prov_en.json";
	var tmpID = $.url().param('id');	
	
	if(tmpID != "prov" && tmpID != "plan") {
		tmpID = "prov";
	}
	
	if(lang != "en" && lang != "es") {
		lang = "en";
	}
	
	var tmpFN = "npp_"+tmpID+"_"+lang+".json";
	
	loadNPPData(tmpFN);
	
});

$(document).ready(function() {
	$('.section').responsiveEqualHeightGrid();	
});

function gotopage(tmpS) {
	switch(tmpS) {
		case "home":
			window.location.href = "./";
		break;
		case "main":
			gotomainpage();
			$.scrollTo($("#bodyID"));
		break;
		case "rights":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#rightscontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();	
			$.scrollTo($("#bodyID"));
		break;
		case "choices":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#choicescontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();	
			$.scrollTo($("#bodyID"));
		break;
		case "uses":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#usescontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();	
			$.scrollTo($("#bodyID"));
		break;
		case "more":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#morecontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();	
			$.scrollTo($("#bodyID"));
		break;
		case "responsibilities":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#morecontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();
			$.scrollTo($("#bodyID"));
			
		break;
		case "changes":
			makemenusforsubpage();
			hideallsubpages();
			$("#mpsection1containderID").fadeIn(1000);
			$("#morecontainerID").fadeIn(1000);	
			$('.section').responsiveEqualHeightGrid();	
			$.scrollTo($("#changesTopDivID"));
		break;
	}
	return false;
};

function gotomainpage() {	
	hideallsubpages();

	$("#mpsection1containderID").fadeIn(500);
	$("#mpiconscontainerID").fadeIn(500);
	$("#mpsubcontentdiv1ID").fadeIn(500);
	$("#mpsubcontentdiv2ID").fadeIn(500);
	$("#mpsubcontentdiv3ID").fadeIn(500);
	$("#mpsubcontentdiv4ID").fadeIn(500);

	$('.section').responsiveEqualHeightGrid();	
	
	return false;
};

function makemenusforsubpage() {
	$("#mpsection1containderID").hide;
	$("#mpiconscontainerID").hide();
	$("#mpsubcontentdiv1ID").hide();
	$("#mpsubcontentdiv2ID").hide();
	$("#mpsubcontentdiv3ID").hide();
	$("#mpsubcontentdiv4ID").hide();
};

function hideallsubpages() {
	$( "#rightscontainerID" ).hide();
	$( "#choicescontainerID" ).hide();
	$( "#usescontainerID" ).hide();
	$( "#morecontainerID" ).hide();
};

function loadNPPData(tmpFN) {
	
	//var jqxhr1 = $.getJSON("npp_plan_en.json", function(data) {
	var jqxhr1 = $.getJSON(tmpFN, function(data) {
	})
	.success(function(data) { 
		nppalldata = data;
		updateGeneralInfo();
		updateRightsInfo();
		updateChoicesInfo();
		updateUsesInfo();
		updateMoreInfo();
	})
	.error(function() { 
		alert("Error: Could not load data."); 
	})
	.complete(function() {
	});	
	jqxhr1.complete(function(){ 
	});
	
/*	
	
	alert(lang);
	
	
	$.ajax({
		 type: "GET",
		 url: "document.json",
		 async: false,
		 contentType: "application/json; charset=utf-8",
	     dataType: "json",		 
		 beforeSend: function(x) {
		  if(x && x.overrideMimeType) {
		   x.overrideMimeType("application/j-son;charset=UTF-8");
		  }
	 },
	 dataType: "json",
	 success: function(data){
		nppalldata = data;
		updateGeneralInfo();
		updateRightsInfo();
		updateChoicesInfo();
		updateUsesInfo();
		updateMoreInfo();
	 },
	 error: function() {
		alert("Error: Could not load data."); 
	 }
	});	
*/	
	
};

function updateGeneralInfo() {
	if(nppalldata == null || nppalldata == undefined) {
		return;
	}
	
	$("#companynameID").html(nppalldata.npp.general.companyname);
	$("#effectivedateID").html(nppalldata.npp.general.effectivedate);
	$("#websiteID").html(nppalldata.npp.general.website);
	$("#officernameID").html(nppalldata.npp.general.officername);
	$("#officertitleID").html(nppalldata.npp.general.officertitle);
	$("#addressID").html(nppalldata.npp.general.address);
	$("#phoneID").html(nppalldata.npp.general.phone);
	$("#emailID").html(nppalldata.npp.general.email);
};

function updateRightsInfo() {
	if(nppalldata == null || nppalldata == undefined) {
		return;
	}

	var rightsObj = nppalldata.npp.rights;
	
	$("#title1ID").html(rightsObj.title);
	$("#description1ID").html(rightsObj.description);
	
	
	var tmpFS = '';	
	if(rightsObj.items.length > 0) {
		for(var tmpi=0;tmpi<rightsObj.items.length;tmpi++) {
			
			var tmps1 = '\
				 <div class="panel panel-default">\
					<div class="panel-heading ccolor1" data-toggle="collapse" data-parent="#rightsaccordionID" href="#collapserights'+tmpi+'">\
					  <h4 class="panel-title ccolor1">\
						<a data-toggle="collapse" data-parent="#rightsaccordionID" href="#collapserights'+tmpi+'">';
			var tmps2 = '';
			var tmps3 = '\
						</a>\
					  </h4>\
					</div>\
					<div id="collapserights'+tmpi+'" class="panel-collapse collapse">\
					  <div class="panel-body">\
						<ul>';
			var tmps4 = '';
			var tmps5 = '\
						</ul>\
					  </div>\
					</div>\
				  </div>';
			
			tmps2 = (tmpi+1)+". "+rightsObj.items[tmpi].subtitle;
			var tmpss1 = '';
			var tmpss2 = '';
			var tmpss3 = '';
			for(var tmpj=0;tmpj<rightsObj.items[tmpi].content.length;tmpj++) {
				tmpss1 = tmpss1+'<li>'+rightsObj.items[tmpi].content[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<rightsObj.items[tmpi].notes.length;tmpj++) {
				tmpss2 = tmpss2+'<p class="note '+lang+' cc1">'+rightsObj.items[tmpi].notes[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<rightsObj.items[tmpi].examples.length;tmpj++) {
				tmpss3 = tmpss3+'<p class="example '+lang+' cc1">'+rightsObj.items[tmpi].examples[tmpj]+'</li>';
			}
			
			tmps4 = tmpss1+tmpss2+tmpss3;
			tmpFS = tmpFS+tmps1+tmps2+tmps3+tmps4+tmps5;
			
		}
	}
	
	$("#rightsaccordionDivID").html('<div class="panel-group" id="rightsaccordionID">'+tmpFS+'</div>');
	
};


function updateChoicesInfo() {
	if(nppalldata == null || nppalldata == undefined) {
		return;
	}

	var choicesObj = nppalldata.npp.choices;
	
	$("#title2ID").html(choicesObj.title);
	$("#description2ID").html(choicesObj.description);
	
	
	var tmpFS = '';	
	if(choicesObj.items.length > 0) {
		for(var tmpi=0;tmpi<choicesObj.items.length;tmpi++) {
			
			var tmps1 = '\
				 <div class="panel panel-default">\
					<div class="panel-heading ccolor2" data-toggle="collapse" data-parent="#choicesaccordionID" href="#collapsechoices'+tmpi+'">\
					  <h4 class="panel-title ccolor2">\
						<a data-toggle="collapse" data-parent="#choicesaccordionID" href="#collapsechoices'+tmpi+'">';
			var tmps2 = '';
			var tmps3 = '\
						</a>\
					  </h4>\
					</div>\
					<div id="collapsechoices'+tmpi+'" class="panel-collapse collapse">\
					  <div class="panel-body">\
						<ul>';
			var tmps4 = '';
			var tmps5 = '\
						</ul>\
					  </div>\
					</div>\
				  </div>';
			
			tmps2 = (tmpi+1)+". "+choicesObj.items[tmpi].subtitle;
			var tmpss1 = '';
			var tmpss2 = '';
			var tmpss3 = '';
			for(var tmpj=0;tmpj<choicesObj.items[tmpi].content.length;tmpj++) {
				tmpss1 = tmpss1+'<li>'+choicesObj.items[tmpi].content[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<choicesObj.items[tmpi].notes.length;tmpj++) {
				tmpss2 = tmpss2+'<p class="note '+lang+' cc2">'+choicesObj.items[tmpi].notes[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<choicesObj.items[tmpi].examples.length;tmpj++) {
				tmpss3 = tmpss3+'<p class="example '+lang+' cc2">'+choicesObj.items[tmpi].examples[tmpj]+'</li>';
			}
			
			tmps4 = tmpss1+tmpss2+tmpss3;
			tmpFS = tmpFS+tmps1+tmps2+tmps3+tmps4+tmps5;
			
		}
	}
	
	$("#choicesaccordionDivID").html('<div class="panel-group" id="choicesaccordionID">'+tmpFS+'</div>');
	
};

function updateUsesInfo() {
	if(nppalldata == null || nppalldata == undefined) {
		return;
	}

	var uses1Obj = nppalldata.npp.uses[0];
	var uses2Obj = nppalldata.npp.uses[1];
	
	$("#title3ID").html(uses1Obj.title);
	$("#description3ID").html(uses1Obj.description);
	
	$("#title4ID").html(uses2Obj.title);
	$("#description4ID").html(uses2Obj.description);	
	
	var tmpFS1 = '';	
	var tmpFS2 = '';	
	
	if(uses1Obj.items.length > 0) {
		for(var tmpi=0;tmpi<uses1Obj.items.length;tmpi++) {
			
			var tmps1 = '\
				 <div class="panel panel-default">\
					<div class="panel-heading ccolor3" data-toggle="collapse" data-parent="#uses1accordionID" href="#collapseuses1'+tmpi+'">\
					  <h4 class="panel-title ccolor3">\
						<a data-toggle="collapse" data-parent="#uses1accordionID" href="#collapseuses1'+tmpi+'">';
			var tmps2 = '';
			var tmps3 = '\
						</a>\
					  </h4>\
					</div>\
					<div id="collapseuses1'+tmpi+'" class="panel-collapse collapse">\
					  <div class="panel-body">\
						<ul>';
			var tmps4 = '';
			var tmps5 = '\
						</ul>\
					  </div>\
					</div>\
				  </div>';
			
			tmps2 = (tmpi+1)+". "+uses1Obj.items[tmpi].subtitle;
			var tmpss1 = '';
			var tmpss2 = '';
			var tmpss3 = '';
			for(var tmpj=0;tmpj<uses1Obj.items[tmpi].content.length;tmpj++) {
				tmpss1 = tmpss1+'<li>'+uses1Obj.items[tmpi].content[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<uses1Obj.items[tmpi].notes.length;tmpj++) {
				tmpss2 = tmpss2+'<p class="note '+lang+' cc3">'+uses1Obj.items[tmpi].notes[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<uses1Obj.items[tmpi].examples.length;tmpj++) {
				tmpss3 = tmpss3+'<p class="example '+lang+' cc3">'+uses1Obj.items[tmpi].examples[tmpj]+'</li>';
			}
			
			tmps4 = tmpss1+tmpss2+tmpss3;
			tmpFS1 = tmpFS1+tmps1+tmps2+tmps3+tmps4+tmps5;
			
		}
	}
	
	if(uses2Obj.items.length > 0) {
		for(var tmpi=0;tmpi<uses2Obj.items.length;tmpi++) {
			
			var tmps1 = '\
				 <div class="panel panel-default">\
					<div class="panel-heading ccolor3" data-toggle="collapse" data-parent="#uses2accordionID" href="#collapseuses2'+tmpi+'">\
					  <h4 class="panel-title ccolor3">\
						<a data-toggle="collapse" data-parent="#uses2accordionID" href="#collapseuses2'+tmpi+'">';
			var tmps2 = '';
			var tmps3 = '\
						</a>\
					  </h4>\
					</div>\
					<div id="collapseuses2'+tmpi+'" class="panel-collapse collapse">\
					  <div class="panel-body">\
						<ul>';
			var tmps4 = '';
			var tmps5 = '\
						</ul>\
					  </div>\
					</div>\
				  </div>';
			
			tmps2 = (tmpi+1)+". "+uses2Obj.items[tmpi].subtitle;
			var tmpss1 = '';
			var tmpss2 = '';
			var tmpss3 = '';
			for(var tmpj=0;tmpj<uses2Obj.items[tmpi].content.length;tmpj++) {
				tmpss1 = tmpss1+'<li>'+uses2Obj.items[tmpi].content[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<uses2Obj.items[tmpi].notes.length;tmpj++) {
				tmpss2 = tmpss2+'<p class="note '+lang+' cc3">'+uses2Obj.items[tmpi].notes[tmpj]+'</li>';
			}
			for(var tmpj=0;tmpj<uses2Obj.items[tmpi].examples.length;tmpj++) {
				tmpss3 = tmpss3+'<p class="example '+lang+' cc3">'+uses2Obj.items[tmpi].examples[tmpj]+'</li>';
			}
			
			tmps4 = tmpss1+tmpss2+tmpss3;
			tmpFS2 = tmpFS2+tmps1+tmps2+tmps3+tmps4+tmps5;
			
		}
	}
	
	$("#uses1accordionDivID").html('<div class="panel-group" id="uses1accordionID">'+tmpFS1+'</div>');
	$("#uses2accordionDivID").html('<div class="panel-group" id="uses2accordionID">'+tmpFS2+'</div>');
	
};


function updateMoreInfo() {
	if(nppalldata == null || nppalldata == undefined) {
		return;
	}

	var responsibilitiesObj = nppalldata.npp.responsibilities.content;
	var changesObj = nppalldata.npp.changes.content;
	
	
	var tmpS1 = '';	
	var tmpS2 = '';	
	
	if(responsibilitiesObj.length > 0) {
		for(var tmpi=0;tmpi<responsibilitiesObj.length;tmpi++) {
			tmpS1 = tmpS1 + '<li>' + responsibilitiesObj[tmpi] +'</li>';
		}		
		tmpS1 = '<ul>'+tmpS1+"</ul>";
		$("#responsibilitiesDivID").html(tmpS1);
	}

	if(changesObj.length > 0) {
		for(var tmpi=0;tmpi<changesObj.length;tmpi++) {
			tmpS2 = tmpS2 + '<li>' + changesObj[tmpi] +'</li>';
		}		
		tmpS2 = '<ul>'+tmpS2+"</ul>";
		$("#changesDivID").html(tmpS2);
	}
};