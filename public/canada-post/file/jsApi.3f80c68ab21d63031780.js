webpackJsonp([29],{215:function(module,exports,__webpack_require__){var __WEBPACK_AMD_DEFINE_ARRAY__,__WEBPACK_AMD_DEFINE_RESULT__;__WEBPACK_AMD_DEFINE_ARRAY__=[__webpack_require__(4),__webpack_require__(0),__webpack_require__(2),__webpack_require__(1),__webpack_require__(770),__webpack_require__(19),__webpack_require__(3)],void 0!==(__WEBPACK_AMD_DEFINE_RESULT__=function(Promise,dejavu,utils,$,QBuilder,Qualtrics,log){"use strict";return function(Page,$window){var prototypePromise=Page.getPageTemplate().getFeatureFlag("JFE_BlockPrototypeJS")?Promise.resolve():Promise.resolve(__webpack_require__.e(39).then(__webpack_require__.bind(null,771))).then(function(prototypeLoader){return prototypeLoader(Page,$window)});return $window.Qualtrics=Qualtrics,utils.deepMixIn(Qualtrics,{Browser:{IE:!(!$window.attachEvent||$window.opera),Opera:!!$window.opera,WebKit:navigator.userAgent.indexOf("AppleWebKit/")>-1,Safari:navigator.userAgent.indexOf("Safari/")>-1,MobileWebKit:navigator.userAgent.indexOf("AppleWebKit/")>-1&&navigator.userAgent.indexOf("Mobile/")>-1,Gecko:navigator.userAgent.indexOf("Gecko")>-1&&-1==navigator.userAgent.indexOf("KHTML"),Firefox:navigator.userAgent.indexOf("Firefox")>-1,Version:null,Features:null,getVersion:function(){var ua=navigator.userAgent.toLowerCase(),v="99";return Qualtrics.Browser.Firefox?v=ua.substring(ua.lastIndexOf("firefox/")+8,ua.lastIndexOf("firefox/")+10):Qualtrics.Browser.WebKit?v=ua.substring(ua.indexOf("applewebkit/")+12,ua.indexOf(" (khtml")):Qualtrics.Browser.IE&&(v=ua.substring(ua.indexOf("msie ")+5,ua.indexOf("; w"))),-1!=v.indexOf(".")&&(v=v.substring(0,v.indexOf("."))),Number(v)},getFeatures:function(){var b=Qualtrics.Browser;return{onPaste:!(b.Firefox&&b.Version<3||b.Opera)}}},uniformLabelHeight:function(){if(Page&&Page.getPageTemplate()){var questionIds=Page.getPageTemplate().getQuestionIDs();utils.each(questionIds,function(questionId){var q=Page.getQuestion(questionId);q&&q.makeLablesUniformHeight()})}}}),Qualtrics.Browser.Version=Qualtrics.Browser.getVersion(),Qualtrics.Browser.Features=Qualtrics.Browser.getFeatures(),$window.QualtricsSETools={killHighlighter:function(){},questionHighlighter:function(){},replaceButtons:function(){var transliterate=function(realButton){if(realButton.length){var type=realButton.prop("id");type=type.replace(/Button$/,"");var realButtonId=type+"ButtonReal";realButton.prop("id",realButtonId),realButton.hide();var newButton=$("<div tabindex='0' id='"+type+"Button' role='button' aria-labelledby='"+type+"Label' page-id='"+realButton.attr("page-id")+"'><label id='"+type+"Label' class='offScreen'></label><span class='ButtonLeft'></span><span class='ButtonText' id='"+type+"ButtonText'></span><span class='ButtonRight'></span></div>");newButton.children("label, .ButtonText").text(realButton.val()),newButton.prop("className",realButton.prop("className"));for(var events=["mousedown","click","mouseup","keypress","keydown","keyup"],evCallback=function(ev){ev.target&&(ev.target=realButton[0]),realButton.trigger(ev)},i=0;i<events.length;i++)newButton.on(events[i],evCallback);newButton.appendTo(realButton.parent())}};$('[id="NextButton"]').each(function(idx,el){transliterate($(el))}),$('[id="PreviousButton"]').each(function(idx,el){transliterate($(el))}),$('[id="SaveButton"]').each(function(idx,el){transliterate($(el))}),$('[id="JumpButton"]').each(function(idx,el){transliterate($(el))})}},Qualtrics.SurveyEngine||(Qualtrics.SurveyEngine={}),Qualtrics.SurveyEngine.Page=Page,utils.deepMixIn(Qualtrics.SurveyEngine,{registry:{},getInstance:function(id){return this.registry[id]},addOnload:function(callback){var questionObj=new Qualtrics.SurveyEngine.QuestionData;Page.once("preready",function(){try{callback.apply(questionObj)}catch(e){log.error("SE API Error: ",e,callback)}})},addOnUnload:function(callback){var questionObj=new Qualtrics.SurveyEngine.QuestionData;Page.once("pageunload",function(){try{callback.apply(questionObj)}catch(e){log.error("SE API Error: ",e,callback)}})},addOnPageSubmit:function(callback){var questionObj=new Qualtrics.SurveyEngine.QuestionData;Qualtrics.SurveyEngine.savedPageSubmitData={callback:callback,questionObj:questionObj},Page.addOnPageSubmit(callback,questionObj)},addOnReady:function(callback){var questionObj=new Qualtrics.SurveyEngine.QuestionData;Page.once("ready",function(){try{callback.apply(questionObj)}catch(e){log.error("SE API Error: ",e,callback)}})},setAccessibleSkin:function(){},addEmbeddedData:function(key,value){this.setEmbeddedData(key,value)},setEmbeddedData:function(key,value){Page.setED(key,value)},getEmbeddedData:function(key){var ed=Page.getED(key);return void 0!==ed?ed:null},navClick:function(event,buttonName){return event=$.Event(event),"NextButton"==buttonName&&Page&&Page.next(),"PreviousButton"==buttonName&&Page&&Page.prev(),event.preventDefault(),!1}}),Qualtrics.SurveyEngine.QuestionData=dejavu.Class.declare({questionId:null,question:null,questionContainer:null,questionclick:null,$statics:{getInstance:function(questionId){return Qualtrics.SurveyEngine.registry[questionId]?Qualtrics.SurveyEngine.registry[questionId]:new Qualtrics.SurveyEngine.QuestionData(questionId)}},initialize:function(questionId){questionId=questionId||$window.Q_CustomJSContextQID,this.questionContainer=$("#"+Page.id()+" #"+questionId)[0],this.questionContainer&&(this.questionId=this.questionContainer.getAttribute("questionid")||this.questionContainer.getAttribute("posttag"),this.addOnClick(),Qualtrics.SurveyEngine.registry[this.questionId]=this),this.question=Page.getQuestion(this.questionId)},addOnClick:function(){this.questionclick=function(){},$(this.questionContainer).click(function(evt){setTimeout(function(){this.questionclick(evt.originalEvent,evt.target)}.$bind(this),0)}.$bind(this))},disableNextButton:function(){Page.pageButtons.disableNextButton()},enableNextButton:function(){Page.pageButtons.enableNextButton()},showNextButton:function(){Page.pageButtons.showNextButton()},hideNextButton:function(){Page.pageButtons.hideNextButton()},clickNextButton:function(){Page.isReady()?Page.pageButtons.clickNextButton():Page.once("ready",function(){Page.pageButtons.clickNextButton()})},disablePreviousButton:function(){Page.pageButtons.disablePreviousButton()},enablePreviousButton:function(){Page.pageButtons.enablePreviousButton()},enablePreviousButtonForFlowLogic:function(){Page.setSM("EnablePrevForFL",!0)},showPreviousButton:function(){Page.pageButtons.showPreviousButton()},hidePreviousButton:function(){Page.pageButtons.hidePreviousButton()},clickPreviousButton:function(){Page.isReady()?Page.pageButtons.clickPreviousButton():Page.once("ready",function(){Page.pageButtons.clickPreviousButton()})},hideChoices:function(){$(this.getChoiceContainer()).hide()},getQuestionContainer:function(){return this.questionContainer},getQuestionTextContainer:function(){return $(this.questionContainer).find(".QuestionText")[0]},getChoiceContainer:function(){return $(this.questionContainer).find(".ChoiceStructure")[0]},getSelection:function(choiceId,answerId){var selection=this.question.runtime;if(choiceId){if(!selection.Choices||!selection.Choices[choiceId])return null;selection=selection.Choices[choiceId]}return answerId&&selection.Answers&&(selection=selection.Answers[answerId]),selection},setChoiceValueByRecodeValue:function(){for(var choiceIds=this.getChoicesFromRecodeValue(arguments[0]),i=0,ilen=choiceIds.length;i<ilen;i++){var cid=choiceIds[i];3==arguments.length?this.setChoiceAnswerValue(cid,arguments[1],arguments[2]):this.setChoiceAnswerValue(cid,null,arguments[1])}},setChoiceValueByVariableName:function(){for(var choiceIds=this.getChoicesFromVariableName(arguments[0]),i=0,ilen=choiceIds.length;i<ilen;i++){var cid=choiceIds[i];3==arguments.length?this.setChoiceAnswerValue(cid,arguments[1],arguments[2]):this.setChoiceAnswerValue(cid,null,arguments[1])}},setChoiceValue:function(){return arguments.length>2?this.setChoiceAnswerValue.apply(this,arguments):this.setChoiceAnswerValue(arguments[0],null,arguments[1])},setChoiceAnswerValue:function(choiceId,answerId,value){return this.question.setChoiceAnswerValue(choiceId+"",answerId+"",value)},getChoiceAnswerValue:function(choiceId,answerId){return this.getChoiceValue(choiceId,answerId)},getChoiceValue:function(choiceId,answerId){return this.question.getChoiceValue&&this.question.getChoiceValue(choiceId,answerId)},getTextValue:function(choiceId){var selection=this.getSelection(choiceId);return selection&&selection.Text||""},getQuestionDisplayed:function(){return this.question.displayed()},getChoiceDisplayed:function(choiceId,answerId){return!!this.getSelection(choiceId,answerId).Displayed},getQuestionInfo:function(){return Qualtrics.SurveyEngine&&Qualtrics.SurveyEngine.QuestionInfo&&Qualtrics.SurveyEngine.QuestionInfo[this.questionId]?Qualtrics.SurveyEngine.QuestionInfo[this.questionId]:null},getPostTag:function(){var questionInfo=this.getQuestionInfo();return questionInfo&&questionInfo.postTag?questionInfo.postTag:null},getCurrentVisualTime:function(){try{return this.question.getCurrentTime()}catch(e){}},getChoiceRecodeValue:function(choiceId){var questionInfo=this.getQuestionInfo();if(questionInfo&&questionInfo.Choices[choiceId])return questionInfo.Choices[choiceId].RecodeValue},getChoiceVariableName:function(choiceId){var questionInfo=this.getQuestionInfo();if(questionInfo&&questionInfo.Choices[choiceId])return questionInfo.Choices[choiceId].VariableName},getChoicesFromVariableName:function(varName){return this.getChoices("VariableName",varName)},getChoicesFromRecodeValue:function(recodeVal){return this.getChoices("RecodeValue",recodeVal)},getChoices:function(type,val){var choiceIds=[];try{for(var i in this.question.runtime.Choices){this.question.runtime.Choices[i][type]==val&&choiceIds.push(i)}}catch(e){}return choiceIds},getAnswers:function(){try{return Object.keys(this.question.runtime.Answers)}catch(e){return[]}},getSelectedChoices:function(){for(var choices=this.getChoices(),selectedChoices=[],i=0,len=choices.length;i<len;++i)this.getChoiceValue(choices[i])&&selectedChoices.push(choices[i]);return selectedChoices},getSelectedAnswers:function(){for(var choices=this.getChoices(),answers=this.getAnswers(),selectedAnswers={},i=0,len=choices.length;i<len;++i)for(var a=0,alen=answers.length;a<alen;++a)this.getChoiceValue(choices[i],answers[a])&&(selectedAnswers[answers[a]]||(selectedAnswers[answers[a]]=0),selectedAnswers[answers[a]]++);return selectedAnswers},getSelectedAnswerValue:function(choiceId){for(var answers=this.getAnswers(),selectedAnswerValue=null,a=0,alen=answers.length;a<alen;++a)this.getChoiceValue(choiceId,answers[a],answers[a])&&(null===selectedAnswerValue||selectedAnswerValue>answers[a])&&(selectedAnswerValue=answers[a]);return selectedAnswerValue},searchSupplementalData:function(searchPrefix){return this.question._page.adapter.searchAutocomplete("sds",this.questionId,searchPrefix,this.question.runtime.SearchSourceSignature)}}),Qualtrics.openPageInPDF=function(){},prototypePromise}}.apply(exports,__WEBPACK_AMD_DEFINE_ARRAY__))&&(module.exports=__WEBPACK_AMD_DEFINE_RESULT__)},770:function(module,exports,__webpack_require__){var __WEBPACK_AMD_DEFINE_ARRAY__,__WEBPACK_AMD_DEFINE_RESULT__;__WEBPACK_AMD_DEFINE_ARRAY__=[__webpack_require__(19)],void 0!==(__WEBPACK_AMD_DEFINE_RESULT__=function(Qualtrics){"use strict";function QBuilder(nodeName,options,children,ext){var el;if(browserInfo&&browserInfo.IE&&browserInfo.Version<9&&("input"==nodeName||"textarea"==nodeName)||"select"==nodeName)el=QInputBuilder(nodeName,options,children);else{var doc=document;if(options&&options.document&&(doc=options.document),el=doc.createElement(nodeName),children||"object"==typeof options)for(var nom in options)if("className"==nom)el.className=options.className;else if("id"==nom)el.id=options.id;else if("name"==nom)el.name=options.name;else if("checked"==nom)options[nom]&&(el.defaultChecked=!0,el.setAttribute("checked","checked"));else if("htmlFor"==nom)el.htmlFor=options[nom],el.setAttribute("for",options[nom]);else if("style"==nom){var $=window.$;$?$.fn&&$.fn.jquery?$(el).attr("style",options[nom]):$(el).setStyle(options[nom]):el.setAttribute("style",options[nom])}else void 0!==options[nom]&&"document"!=nom&&el.setAttribute(nom,options[nom]);else children=options;if(children)if("object"==typeof children){if(children.length)for(var i=0,len=children.length;i<len;++i){var ch=children[i];void 0===ch&&(ch="undefined"),"string"!=typeof ch&&"number"!=typeof ch||""===ch?ch&&(ch.nodeType?el.appendChild(ch):el.appendChild(doc.createTextNode(String(ch)))):el.appendChild(doc.createTextNode(ch))}}else{var node;node="string"==typeof children||"number"==typeof children?doc.createTextNode(children):children,el.appendChild(node)}}return ext&&el&&Object.extend(el,ext),el}function QInputBuilder(nodeName,options,children){var attr="",doc=document;options&&options.document&&(doc=options.document);for(var nom in options){var val=options[nom],key="";switch(nom){case"className":key="class";break;case"id":key="id";break;case"checked":options[nom]&&(key="checked");break;case"htmlFor":key="for";break;default:key=nom}attr+=key+'="'+val+'" '}var parent=QBuilder("div");parent.innerHTML="<"+nodeName+" "+attr+" />";var el=parent.firstChild.cloneNode(!0);if(removeElement(parent),children){var type=typeof children;if("object"===type)for(var i=0,len=children.length;i<len;++i){var node,ch=children[i];node="string"==typeof ch||"number"==typeof ch?doc.createTextNode(ch):ch,node&&el.appendChild(node)}else"string"!=type&&"number"!=type||el.appendChild(doc.createTextNode(children))}return el}function removeElement(element){if(element){var garbageBin=document.getElementById("IELeakGarbageBin");garbageBin||(garbageBin=QBuilder("DIV"),garbageBin.id="IELeakGarbageBin",garbageBin.style.display="none",document.body.appendChild(garbageBin)),garbageBin.appendChild(element),garbageBin.innerHTML=""}}var browserInfo;return Qualtrics&&Qualtrics.Browser&&(browserInfo=Qualtrics.Browser),window.QBuilder=QBuilder,QBuilder}.apply(exports,__WEBPACK_AMD_DEFINE_ARRAY__))&&(module.exports=__WEBPACK_AMD_DEFINE_RESULT__)}});