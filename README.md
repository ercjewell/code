# code



post_type=post&orderby={{dc:url:param key="orderby" fallback="title"}}&order={{dc:url:param key="order" fallback="asc"}}
https://chromaengstg.com/?post_type=post&orderby={{dc:url:param key="orderby" fallback="title"}}&order={{dc:url:param key="order" fallback="asc"}}&category_name=your-category-slug
{{dc:url:param key="orderby" fallback="title"}}&order={{dc:url:param key="order" fallback="asc"}}&category_name=your-category-slug


//the above query string works//

?orderby=title&order=asc
//News Button//

?orderby=title&order=desc
//releases button//

?orderby=date&order=asc
//blogs button//

?orderby=date&order=desc
//blogs 2 button//

post_type=post&orderby={{dc:url:param key="catagory_name" fallback="asc"}}&order={{dc:url:param key="order" fallback="title"}}
post_type=post&orderby={{dc:url:param key="catagory_name" fallback="asc"}}

//the above query string works//

?category=news&order=asc
//News Button, worked but still displayed both posts asc//

?category=press_releases&order=asc
//releases button, worked but still displayed both posts asc//

?category=blogs&order=asc
//blogs button, worked but still displayed both posts asc//
-----
?category_name=news&order=asc
//News Button, worked but still displayed both posts asc//

?category_name=press_releases&order=asc
//releases button, worked but still displayed both posts asc//

?category_name=blogs&order=asc
//blogs button, worked but still displayed both posts asc//
-----
?category=news
//News Button, worked but still displayed both posts, no filter//

?category=press_releases
//releases button, worked but still displayed both posts, no filter//

?category=blogs
//blogs button, worked but still displayed both posts, no filter//
-----

?category_name=news

?category_name=press_releases

?category_name=blogs



post_type=post&orderby={{dc:url:param key="news" fallback="asc"}}&orderby={{dc:url:param key="blogs" fallback="asc"}}&orderby={{dc:url:param key="press_releases" fallback="asc"}}&order={{dc:url:param key="order" fallback="title"}}



post_type=post&posts_per_page=-1&orderby={{dc:url:param key="orderby" fallback="title"}}&order={{dc:url:param key="order" fallback="asc"}}&category_name={{dc:url:param key="category" fallback=""}}&taxonomy={{dc:url:param key="taxonomy" fallback=""}}

post_type=post&posts_per_page=-1&orderby={{dc:url:param key="orderby" fallback="catagory_name"}}&order={{dc:url:param key="order" fallback="asc"}}&category_name={{dc:url:param key="category" fallback=""}}&taxonomy={{dc:url:param key="taxonomy" fallback=""}}

post_type=post&orderby=category_name={{dc:url:param key="category" fallback=""}}

?category=category_name&order=asc

?category=category_name&order=desc


?taxonomy=taxonomy_slug
