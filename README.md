#   Simple Comments for Rainlab/Blog 
## **The simplest and fastest way to get a comment system for each of your blog posts.**

  -  To implement a form box for each of your post simply add our component: "boxcomment" and add the next line anywhere in your html document: ** {% component 'boxcomment'%} **
  - To implement a list of comments associated with the active post simply add the component [listcomments] and add the following line anywhere in your html document: ** {% component 'listcomments'%} **
  
## Main features of the plugin

  - Easy installation and natively
  - No javascript No Jquery
  - Customizable error messages
  - Customizable success messages.
  - Administration of the comments associated with the post, search, filtering, modification and elimination.
  - The html structure is easy to modify and you can adapt the css styles of your theme to it.

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

## Administration of comments.
Additionally you can manage the existing comments, you can delete or modify the comments associated with the posts.

It is quite easy to manage the comments, if you have successfully installed the plugin you will see a new icon in its main menu, this will take you to the comments list where you can filter the comments by ** post ** or ** posts ** from there delete or modify.


