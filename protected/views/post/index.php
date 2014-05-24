<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
	  'pager'=>array(
        'header'=>'',
        'prevPageLabel'=>'Prev',
        'nextPageLabel'=>'Next',
        'firstPageLabel'=>'First',
        'lastPageLabel'=>'Last',
        // css class         
        'firstPageCssClass'=>'pager_first',//default "first"
        'lastPageCssClass'=>'pager_last',//default "last"
        //'previousPageCssClass'=>'pager_previous',//default "previours"
        //'nextPageCssClass'=>'pager_next',//default "next"
        //'internalPageCssClass'=>'pager_li',//default "page"
        //'selectedPageCssClass'=>'pager_selected_li',//default "selected"
        //'hiddenPageCssClass'=>'pager_hidden_li'//default "hidden"                                    
    ),
)); ?>
