<nav id="nav">
	<ul>
		<li><a href="?action=news&page=1"{if $action eq 'news'} class='currentnav' {/if}>nieuws</a></li>
		<li><a href="?action=upload"{if $action eq 'upload'} class='currentnav'{/if}>upload story</a></li>
		<li><a href="?action=aboutUs"{if $action eq 'aboutUs'} class='currentnav' {/if}>aboutUs</a></li>
		<li><a href="?action=contact"{if $action eq 'contact'} class='currentnav' {/if}>contact</a></li>
		<li><a href="?action=search&page=1"{if $action eq 'search'} class='currentnav' {/if}>search</a></li>
	</ul>
</nav>