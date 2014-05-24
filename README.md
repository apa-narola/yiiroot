## Usage

The `mkscroll` method is called on scroll a window for example.

```javascript
	jQuery(window).mkscroll({
             limit:10,              
             total:100,             
         });
```
The `mkcroll` method have two compulsory object `limit` and `total`. `limit` is for a initial limit of your query. and `total` is a count of your total number of records.

The `mkcroll` method takes an optional object literal as a parameter for overriding the default options. An example of how this can be done is shown below.

```javascript
jQuery(window).mkscroll({
             limit:10,              
             total:100,             
             offset:5,              
             appendon:"#main",      
             loader:".loader",      
         });
});
```

## Options

 * `limit` (ex:- 10)(Numeric value) This is a compulsory for mkscroll in this you have to define limit of your first query. 
 * `total`(ex:-25)(Numeric value)  This is a compulsory for mkscroll in this you have to define total number of records of your table.
 * `offset`:(ex:-5)(Numeric value) This a optional  for mkscroll default values is `3`. this is for how many records you want to fetch// number of records you want to get
 * `appendon`(ex:-"#main") This is for on which element you want to append response data. by default it will append on `<body>`.
 * `loader` (ex-".loader") selector of your loader image by default its a null.      
 * `url` : (ex:- "ajax.php") this is a url on which you want to execute pagination query. By default its `ajax.php`.
 * `jqueryfunction` (ex:-before) this is a for jQuery functions `before = jQuery(appendon).before();` there are four options in this as per below.
	
        1)`append` For jQuery(appendon).append();  this is a default value.
        2)`before` For jQuery(appendon).before(); 
        3)`after` For jQuery(appendon).after();
        4)`html` For jQuery(appendon).html();