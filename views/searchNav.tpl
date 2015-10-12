<table border='0'>
	<tr>
		<td width='56px'>
			{if $page neq 1}
			<a href="?action=search&page={$page-1}&search={$search}">previous</a>
			{/if}
		</td>
		
		{for $x=1 to $pagecount}
		<td><a href="?action=search&page={$x}&search={$search}" {if $x eq $page} class="currentpage"{/if}>{$x}</a></td>
		{/for}
		<td width='56px'>
			{if $page neq $pagecount}
			<a href="?action=search&page={$page+1}&search={$search}">next</a>
			{/if}
		</td>
	</tr>
</table>