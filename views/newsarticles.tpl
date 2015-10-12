<section>

	{foreach $result item=newsarticles}
	<article>
		<h1>{$newsarticles.title}</h1>
		<p>{$newsarticles.content}<p>
	</article>
{/foreach}
</section>