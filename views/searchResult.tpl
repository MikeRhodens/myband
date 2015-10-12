{foreach $resultTitle item=searchResult}
<article>
		<h1>{$searchResult.title}</h1>
		<p>{$searchResult.content}</p>
</article>
{/foreach}
