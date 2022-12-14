<article
    id="entry-{{ $entry->id }}"
    class="entry post box block"
    itemscope
    itemtype="https://schema.org/Article"
>
    <h2
        class="title is-2 entry-title"
        itemprop="headline"
    >
        <a href="{!! $entry->url !!}">
            {!! $entry->title !!}
        </a>
    </h2>

    <div class="entry-meta block">
        <span
            class="entry-published-at"
            itemprop="datePublished"
        >
            {{ $entry->published_at }}
        </span>

        <span
            class="entry-author"æ
            itemprop="author"
        >
            {{ $entry->author }}
        </span>
    </div>

    <div
        class="entry-content content block"
        itemprop="articleBody"
    >
        {!! $entry->content !!}
    </div>
</article>
