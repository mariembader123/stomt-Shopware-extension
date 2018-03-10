{extends file="parent:frontend/index/index.tpl"}

{block name="frontend_index_navigation_categories_top_include"}

  

        {literal}


    <script type="text/javascript"> 

var options = {
  appId: {/literal}"{$stomtContent}"{literal},
  position: {/literal}"{$stomtContentPosition}"{literal}, 
  label:{/literal}"{$stomttitle}"{literal}, 
  colorText: {/literal}"{$stomtContentTextColor}"{literal}, 
  colorBackground: {/literal}"{$stomtContentBackgroundColor}"{literal}, 
  colorHover: {/literal}"{$stomtContentHoverColor}"{literal}, 
  preload: {/literal}"{$stomtContentPreload}"{literal}, 
  showClose: true
};

      (function(w, d, n, r, t, s){
    w.Stomt = w.Stomt||[];
    t = d.createElement(n);
    s = d.getElementsByTagName(n)[0];
    t.async=1;
    t.src=r;
    s.parentNode.insertBefore(t,s);
  })(window, document, 'script', 'https://www.stomt.com/widget.js');
  
  // Adjust the 'APP_ID' to your application id 
  // you can find it here: https://www.stomt.com/YOUR_PAGE/apps
  Stomt.push(['addTab',options]);
  Stomt.push(['addFeed',options]);
  Stomt.push(['addCreate',options]);

</script>
{/literal}

{/block}
