<table border='0'>
	<tr id="newsNav">
		<td width='56px' id="navPrevious">
			{if $page neq 1}
			<a href="?action=news&page={$page-1}">previous</a>
			{/if}
		</td>
		<div id="navNumbers">
		{for $x=1 to $pagecount}
			<td><a href="?action=news&page={$x}" {if $x eq $page} class="currentpage"{/if}>{$x}</a></td>
		{/for}
		</div>
		<td width='56px' id="navNext">
			{if $page neq $pagecount}
			<a href="?action=news&page={$page+1}">next</a>
			{/if}
		</td>
	</tr>
</table>