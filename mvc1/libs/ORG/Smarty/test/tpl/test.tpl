{$arr.title|capitalize} {$arr.author|cat:test}
{$arr['title']} {$arr['author']}   {$test|default:"no"}
{$time|date_format:"%H:%M:%S"}
{$url|escape:"url"}
<br/>
{$my->meth1(array('Æ»¹û','ÊìÁË'))}
{"Y-m-d"|date:$time}
{$str}  {'d'|str_replace:'j':$str}
<br/>
{test width=150 height=200}