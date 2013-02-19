{default $max_length=false()}
{def $contentText = $attribute.content.output.output_text|nl2br}
{if and($max_length,$contentText|count_chars()|gt($max_length))}
    {$contentText|strip_tags|shorten($max_length,'...')}
{else}
    {$attribute.content.output.output_text}
{/if}
{undef $contentText}