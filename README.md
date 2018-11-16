#   Simple Comments for Rainlab/Blog 
## **The simplest and fastest way to get a comment system for each of your blog posts.**

  -  To implement a form box for each of your post simply add our component: "boxcomment" and add the next line anywhere in your html document: ** {% component 'boxcomment'%} **
  - To implement a list of comments associated with the active post simply add the component [listcomments] and add the following line anywhere in your html document: ** {% component 'listcomments'%} **

# Example for single post


     title = "Post"
     url = "/blog/post/:slug"
     layout = "default"
     is_hidden = 0

     [blogPost]
     slug = "{{ :slug }}"
     categoryPage = "blog/category"

     [boxcomment]

     [listcomments]
     ==
