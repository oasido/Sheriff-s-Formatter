// BBCode.js v0.1 by Kai Mallea
// https://github.com/kaimallea/bbcode
// License: http://www.opensource.org/licenses/mit-license.php
(function(){var d={},i;d.VERSION="0.1";i=function(e){return e.replace(/&/g,"&amp;").replace(/"/g,"&quot;").replace(/'/g,"&#39;").replace(/</g,"&lt;").replace(/>/g,"&gt;")};_render=function(e,d){var a={},f={escape:!0,newlines:!0};if(!e)return"";if(d)for(var g in d)d.hasOwnProperty(g)&&(f[g]=d[g]);f.escape&&(e=i(e));a.bold={re:/\[b\]([\s\S]*?)\[\/b\]/ig,sub:function(a,b){return"<strong>"+b+"</strong>"}};a.italic={re:/\[i\]([\s\S]*?)\[\/i\]/ig,sub:function(a,b){return"<em>"+b+"</em>"}};a.code={re:/\[code\]([\s\S]*?)\[\/code\]/ig,
sub:function(a,b){return"<pre><code>"+b+"</code></pre>"}};a.quote={re:/\[quote\]([\s\S]*?)\[\/quote\]/ig,sub:function(a,b){return"<blockquote><p>"+b+"<p></blockquote>"}};a.quotespecific={re:/\[quote=(?:"|&quot;)(.*?)(?:"|&quot;)\]([\s\S]*?)\[\/quote\]/ig,sub:function(a,b,c){return b+" wrote: <blockquote><p>"+c+"<p></blockquote>"}};a.size={re:/\[size=(\d+)\]([\s\S]*?)\[\/size\]/ig,sub:function(a,b,c){return'<span style="font-size:'+b+'%;">'+c+"</span>"}};a.strikethrough={re:/\[strike\]([\s\S]*?)\[\/strike\]/ig,
sub:function(a,b){return"<del>"+b+"</del>"}};a.underline={re:/\[u\]([\s\S]*?)\[\/u\]/ig,sub:function(a,b){return'<span style="text-decoration:underline;">'+b+"</span>"}};a.center={re:/\[center\]([\s\S]*?)\[\/center\]/ig,sub:function(a,b){return'<div style="text-align:center;">'+b+"</div>"}};a.color={re:/\[color=([#a-z0-9]+)\]([\s\S]*?)\[\/color\]/ig,sub:function(a,b,c){return'<span style="color:'+b+';">'+c+"</span>"}};a.email={re:/\[email\]([\s\S]*?)\[\/email\]/ig,sub:function(a,b){return'<a href="mailto:'+
b+'">'+b+"</a>"}};a.emailcustom={re:/\[email=(.*?)\]([\s\S]*?)\[\/email\]/ig,sub:function(a,b,c){return'<a href="mailto:'+b+'">'+c+"</a>"}};a.url={re:/\[url\]([\s\S]*?)\[\/url\]/ig,sub:function(a,b){return'<a href="'+b+'">'+b+"</a>"}};a.urlcustom={re:/\[url=(.*?)\]([\s\S]*?)\[\/url\]/ig,sub:function(a,b,c){return'<a href="'+b+'">'+c+"</a>"}};a.img={re:/\[img\]([\s\S]*?)\[\/img\]/ig,sub:function(a,b){return'<img src="'+b+'"/>'}};a.lists={re:/\[list\]([\s\S]*?)\[\/list\]/ig,sub:function(a,b){b=b.replace(/\[\*\]([^\[\*\]]*)/ig,
function(b,a){return"<li>"+a.replace(/[\n\r?]/,"")+"</li>"});return"<ul>"+b.replace(/[\n\r?]/,"")+"</ul>"}};a.lists2={re:/\[list=(1|a)\]([\s\S]*?)\[\/list\]/ig,sub:function(a,b,c){a="";a=b==="1"?"<ol>":b==="a"?'<ol style="list-style-type: lower-alpha">':"<ol>";c=c.replace(/\[\*\]([^\[\*\]]*)/ig,function(a,b){return"<li>"+b.replace(/[\n\r?]/,"")+"</li>"});return a+c.replace(/[\n\r?]/,"")+"</ol>"}};a.youtube={re:/\[youtube\](?:http?:\/\/)?(?:www\.)?youtu(?:\.be\/|be\.com\/watch\?v=)([A-Z0-9\-_]+)(?:&(.*?))?\[\/youtube\]/ig,
sub:function(a,b){return'<iframe class="youtube-player" type="text/html" width="640" height="385" src="http://www.youtube.com/embed/'+b+'" frameborder="0"></iframe>'}};if(f.newlines)a.newlines={re:/\n\r?/g,sub:function(){return"<br/>"}};for(var h in a)a.hasOwnProperty(h)&&(e=e.replace(a[h].re,a[h].sub));return e};d.render=_render;typeof module!=="undefined"&&module.exports?module.exports=d:this.bbcode=d})();


/**
 * Rangy Text Inputs, a cross-browser textarea and text input library plug-in for jQuery.
 * http://code.google.com/p/rangyinputs/
 * Copyright %%build:year%%, Tim Down
 * Licensed under the MIT license.
 */
(function($) {
    var UNDEF = "undefined";
    var getSelection, setSelection, deleteSelectedText, deleteText, insertText;
    var replaceSelectedText, surroundSelectedText, extractSelectedText, collapseSelection;

    // Trio of isHost* functions taken from Peter Michaux's article:
    // http://peter.michaux.ca/articles/feature-detection-state-of-the-art-browser-scripting
    function isHostMethod(object, property) {
        var t = typeof object[property];
        return t === "function" || (!!(t == "object" && object[property])) || t == "unknown";
    }

    function isHostProperty(object, property) {
        return typeof(object[property]) != UNDEF;
    }

    function isHostObject(object, property) {
        return !!(typeof(object[property]) == "object" && object[property]);
    }

    function fail(reason) {
        if (window.console && window.console.log) {
            window.console.log("RangyInputs not supported in your browser. Reason: " + reason);
        }
    }

    function adjustOffsets(el, start, end) {
        if (start < 0) {
            start += el.value.length;
        }
        if (typeof end == UNDEF) {
            end = start;
        }
        if (end < 0) {
            end += el.value.length;
        }
        return { start: start, end: end };
    }

    function makeSelection(el, start, end) {
        return {
            start: start,
            end: end,
            length: end - start,
            text: el.value.slice(start, end)
        };
    }

    function getBody() {
        return isHostObject(document, "body") ? document.body : document.getElementsByTagName("body")[0];
    }

    $(document).ready(function() {
        var testTextArea = document.createElement("textarea");

        getBody().appendChild(testTextArea);

        if (isHostProperty(testTextArea, "selectionStart") && isHostProperty(testTextArea, "selectionEnd")) {
            getSelection = function(el) {
                var start = el.selectionStart, end = el.selectionEnd;
                return makeSelection(el, start, end);
            };

            setSelection = function(el, startOffset, endOffset) {
                var offsets = adjustOffsets(el, startOffset, endOffset);
                el.selectionStart = offsets.start;
                el.selectionEnd = offsets.end;
            };

            collapseSelection = function(el, toStart) {
                if (toStart) {
                    el.selectionEnd = el.selectionStart;
                } else {
                    el.selectionStart = el.selectionEnd;
                }
            };
        } else if (isHostMethod(testTextArea, "createTextRange") && isHostObject(document, "selection") &&
                   isHostMethod(document.selection, "createRange")) {

            getSelection = function(el) {
                var start = 0, end = 0, normalizedValue, textInputRange, len, endRange;
                var range = document.selection.createRange();

                if (range && range.parentElement() == el) {
                    len = el.value.length;

                    normalizedValue = el.value.replace(/\r\n/g, "\n");
                    textInputRange = el.createTextRange();
                    textInputRange.moveToBookmark(range.getBookmark());
                    endRange = el.createTextRange();
                    endRange.collapse(false);
                    if (textInputRange.compareEndPoints("StartToEnd", endRange) > -1) {
                        start = end = len;
                    } else {
                        start = -textInputRange.moveStart("character", -len);
                        start += normalizedValue.slice(0, start).split("\n").length - 1;
                        if (textInputRange.compareEndPoints("EndToEnd", endRange) > -1) {
                            end = len;
                        } else {
                            end = -textInputRange.moveEnd("character", -len);
                            end += normalizedValue.slice(0, end).split("\n").length - 1;
                        }
                    }
                }

                return makeSelection(el, start, end);
            };

            // Moving across a line break only counts as moving one character in a TextRange, whereas a line break in
            // the textarea value is two characters. This function corrects for that by converting a text offset into a
            // range character offset by subtracting one character for every line break in the textarea prior to the
            // offset
            var offsetToRangeCharacterMove = function(el, offset) {
                return offset - (el.value.slice(0, offset).split("\r\n").length - 1);
            };

            setSelection = function(el, startOffset, endOffset) {
                var offsets = adjustOffsets(el, startOffset, endOffset);
                var range = el.createTextRange();
                var startCharMove = offsetToRangeCharacterMove(el, offsets.start);
                range.collapse(true);
                if (offsets.start == offsets.end) {
                    range.move("character", startCharMove);
                } else {
                    range.moveEnd("character", offsetToRangeCharacterMove(el, offsets.end));
                    range.moveStart("character", startCharMove);
                }
                range.select();
            };

            collapseSelection = function(el, toStart) {
                var range = document.selection.createRange();
                range.collapse(toStart);
                range.select();
            };
        } else {
            getBody().removeChild(testTextArea);
            fail("No means of finding text input caret position");
            return;
        }

        // Clean up
        getBody().removeChild(testTextArea);

        deleteText = function(el, start, end, moveSelection) {
            var val;
            if (start != end) {
                val = el.value;
                el.value = val.slice(0, start) + val.slice(end);
            }
            if (moveSelection) {
                setSelection(el, start, start);
            }
        };

        deleteSelectedText = function(el) {
            var sel = getSelection(el);
            deleteText(el, sel.start, sel.end, true);
        };

        extractSelectedText = function(el) {
            var sel = getSelection(el), val;
            if (sel.start != sel.end) {
                val = el.value;
                el.value = val.slice(0, sel.start) + val.slice(sel.end);
            }
            setSelection(el, sel.start, sel.start);
            return sel.text;
        };

        insertText = function(el, text, index, moveSelection) {
            var val = el.value, caretIndex;
            el.value = val.slice(0, index) + text + val.slice(index);
            if (moveSelection) {
                caretIndex = index + text.length;
                setSelection(el, caretIndex, caretIndex);
            }
        };

        replaceSelectedText = function(el, text) {
            var sel = getSelection(el), val = el.value;
            el.value = val.slice(0, sel.start) + text + val.slice(sel.end);
            var caretIndex = sel.start + text.length;
            setSelection(el, caretIndex, caretIndex);
        };

        surroundSelectedText = function(el, before, after) {
            if (typeof after == UNDEF) {
                after = before;
            }
            var sel = getSelection(el), val = el.value;
            el.value = val.slice(0, sel.start) + before + sel.text + after + val.slice(sel.end);
            var startIndex = sel.start + before.length;
            var endIndex = startIndex + sel.length;
            setSelection(el, startIndex, endIndex);
        };

        function jQuerify(func, returnThis) {
            return function() {
                var el = this.jquery ? this[0] : this;
                var nodeName = el.nodeName.toLowerCase();

                if (el.nodeType == 1 && (nodeName == "textarea" || (nodeName == "input" && el.type == "text"))) {
                    var args = [el].concat(Array.prototype.slice.call(arguments));
                    var result = func.apply(this, args);
                    if (!returnThis) {
                        return result;
                    }
                }
                if (returnThis) {
                    return this;
                }
            };
        }

        $.fn.extend({
            getSelection: jQuerify(getSelection, false),
            setSelection: jQuerify(setSelection, true),
            collapseSelection: jQuerify(collapseSelection, true),
            deleteSelectedText: jQuerify(deleteSelectedText, true),
            deleteText: jQuerify(deleteText, true),
            extractSelectedText: jQuerify(extractSelectedText, false),
            insertText: jQuerify(insertText, true),
            replaceSelectedText: jQuerify(replaceSelectedText, true),
            surroundSelectedText: jQuerify(surroundSelectedText, true)
        });

        $.fn.rangyInputs = {
            getSelection: getSelection,
            setSelection: setSelection,
            collapseSelection: collapseSelection,
            deleteSelectedText: deleteSelectedText,
            deleteText: deleteText,
            extractSelectedText: extractSelectedText,
            insertText: insertText,
            replaceSelectedText: replaceSelectedText,
            surroundSelectedText: surroundSelectedText
        };
    });
})(jQuery);


// jquery.bbcode by Kai Mallea
// https://github.com/kaimallea/jquery-bbcode
// License: http://www.opensource.org/licenses/mit-license.php
(function ($) {
    $.fn.bbcode = function () {
        var editor = '<div class="bbcode-editor"><ul class="bbcode-toolbar"><li class="bbcode-bold" title="Bold"><b>B</b></li><li class="bbcode-italic" title="Italic"><i>I</i></li><li class="bbcode-underline" title="Underline"><u>U</u></li><li class="bbcode-strikethrough" title="Strikethrough"><s>S</s></li><li class="bbcode-center" title="Center">-C-</li><li class="bbcode-image" title="Image">IMG</li><li class="bbcode-link" title="Link">URL</li><li class="bbcode-spoiler" title="Spoiler">Spoiler</li><li class="bbcode-quote" title="Quote">Quote</li><li class="bbcode-ooc" title="OOC">OOC</li></ul><textarea></textarea><div class="bbcode-preview"></div></div>';

        return this.each(function () {
            var $this = $(this);
            if ($this.is('textarea')) {
                var $editor = $(editor),
                    $cloned_textarea = $this.clone().addClass('bbcode-textarea'),
                    render_timer = 0;

                $editor.find('textarea').replaceWith($cloned_textarea);

                $cloned_textarea.bind('keyup', function () {
                    clearTimeout(render_timer);
                    render_timer = setTimeout(function () {
                        $cloned_textarea.next('.bbcode-preview').html(bbcode.render($cloned_textarea.val()));
                    }, 300);
                });

                $cloned_textarea.bind('focus', function () {
                    $cloned_textarea.next('.bbcode-preview').html(bbcode.render($cloned_textarea.val()));
                });

                $editor.find('.bbcode-bold').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[b]', '[/b]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-italic').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[i]', '[/i]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-underline').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[u]', '[/u]', true);
                    $$cloned_textarea.focus()
                });

                $editor.find('.bbcode-strikethrough').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[strike]', '[/strike]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-center').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[center]', '[/center]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-image').bind('click', function () {
                    var img_url = prompt('Image Direct URL', '');
                    if (!img_url) { return; }

                    $cloned_textarea.replaceSelectedText('[img]' + img_url + '[/img]', 0, true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-link').bind('click', function () {
                    var url = prompt('Direct URL', '');
                    if (!url) { return; }

                    $cloned_textarea.surroundSelectedText('[url='+ url +']', '[/url]', 0, true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-spoiler').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[spoiler]', '[/spoiler]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-quote').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[quote]', '[/quote]', true);
                    $cloned_textarea.focus()
                });

                $editor.find('.bbcode-ooc').bind('click', function () {
                    $cloned_textarea.surroundSelectedText('[ooc]', '[/ooc]', true);
                    $cloned_textarea.focus()
                });

                $this.replaceWith($editor);
            }
        });
    };
}(jQuery));
