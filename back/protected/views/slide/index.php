

<ul class="breadcrumb">
    <li><a href="<?php echo HelperUrl::baseUrl(); ?>">Home</a> <span class="divider">/</span> </li>
    <li><a href="<?php echo HelperUrl::baseUrl(); ?>slide/">Sliders</a> <span class="divider">/</span> </li>
    <li class="active">All</li>
</ul>


<p class="clearfix">
    <a href="<?php echo HelperUrl::baseUrl(); ?>slide/add/" class="btn btn-primary pull-right">Add</a>
</p>
<?php $this->renderFile(Yii::app()->basePath . "/views/_shared/paging.php", array('total' => $total, 'paging' => $paging)); ?>
<table class="table table-bordered table-striped table-center category">
    <thead>
        <tr>      
            <th></th>
            <th>Title</th>
            <th>Date Added</th>
            <th class="row-list-action"></th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($sliders) < 1): ?>
            <tr>
                <td colspan="4" class="align-center">No results</td>
            </tr>
        <?php endif; ?>
        <?php foreach ($sliders as $v): ?>
            <tr>
                <td>
                    <a class="fancybox" href="<?php echo HelperApp::get_thumbnail($v['thumbnail'], 'full') ?>" title="<?php echo $v['title'] ?>">
                        <img src="<?php echo HelperApp::get_thumbnail($v['thumbnail'], 'small'); ?>"/>
                    </a>
                </td>
                <td><a href="<?php echo HelperUrl::baseUrl() . "slide/edit/id/" . $v['id']; ?>"><?php echo $v['title'] ?></a>
                    <?php if ($v['disabled'] == 0): ?>
                        <span class="label label-important">Active</span>
                    <?php endif; ?>
                </td>   
                <td><?php echo date('Y-m-d', $v['date_added']); ?></td>             
                <td class="align-left">
                    <div class="btn-group">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            Actions
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo HelperUrl::baseUrl() . "slide/edit/id/" . $v['id']; ?>">Edit</a></li>
                            <li><a class="delete-row" href="<?php echo HelperUrl::baseUrl() . "slide/delete/id/" . $v['id']; ?>">Delete</a></li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php $this->renderFile(Yii::app()->basePath . "/views/_shared/paging.php", array('total' => $total, 'paging' => $paging)); ?>