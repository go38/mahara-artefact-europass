{include file="header.tpl"}

{if $missingextensions}
<p>{str tag='europassextensionmissing' section='artefact.europass'}</p>
<ul>
{foreach from=$missingextensions item=extension}
    <li><a href="http://www.php.net/{$extension|escape}">{$extension|escape}</a></li>
{/foreach}
</ul>
{else}
<link rel="stylesheet" type="text/css" href="{$WWWROOT}artefact/europass/europass.css">
<div id="europasswrap">
{include file="artefact:europass:buttons.tpl"}

{if $mahararelease}<div id="messages"><div class="info">
{str tag='newerversionforcompatibility' section='artefact.europass'}
</div></div>{/if}
<div style="background:#0373B5;"><img src="{$topbanner}"></div>

{include file="artefact:europass:fragments/mothertongue.tpl" controls="true"}
{include file="artefact:europass:fragments/otherlanguage.tpl" controls="true"}


<div><img src="{$rightlogo}" align="right"></div>
</div>
{/if}

{include file="footer.tpl"}
