**OctoberCMS Comments plugin**
----------
The plugin allows you to add comments to any page or module.
Users can login with RainLab.User plugin or guest.

**Features**
----------
 - Google recaptcha is optional, can enable in settings
 - Allow guests to comments
 - Set default status for add new comment

**Installation**
----------
 1. Add this plugin to a project.
 2. Also You must install [RainLab.User](http://octobercms.com/plugin/rainlab-user) plugin.
 3. Add Comments component to page.

**Comments post**
Use the commentsPost component to display a list comments on page. The component has the following variables:

 - **url** - the current url path without domain
 - **posts** - the list comments from database for current page
 - **count** - number comments for page

The comment list is coded in the component partial

    plugins/taras/comments/components/comments/list.htm.

The html form comments is coded in the component partial

     plugins/taras/comments/components/comments/form.htm

The default component which contains form.htm and list.htm located at

     plugins/taras/comments/components/comments/default.htm

