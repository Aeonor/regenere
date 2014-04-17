String.prototype.truncate = function(length, delimiter) {
  var str = this;
  length = length || 30; 
  delimiter = delimiter || "";
  if (str.length > length)
  {
    str = str.substring(0, length + 1);
    str = str.substring(0, Math.min(str.length, str.lastIndexOf(" ")));
    str = str + delimiter;
  }
  return str;
};


$(function() {

  /****************************************************************************/
  /* LAYOUT 
   /****************************************************************************/

  // Footer text collapse  
  var restrictions = $('body>footer .restrictions');
  var footerTextEl =  restrictions.find('p');
  var length = restrictions.attr('data-length') || 400;
  var learnMore = restrictions.attr('data-learn-more') || "lire la suite";
          
  var footerText = footerTextEl.text();
  var notTruncated = footerText.truncate(length);
  var truncated = footerText.substr(notTruncated.length);
  
  footerTextEl.empty();
  $('<span class="not-truncated">'+notTruncated+'</span>').appendTo(footerTextEl);
  var t = $('<span class="truncated">'+truncated+' </span>').hide().appendTo(footerTextEl);
  $('<a href="#" class="learn-more">'+learnMore+'</a>').appendTo(footerTextEl).click(function() {
    t.show();
    $(this).remove();
    return false;
  });

  /****************************************************************************/
});