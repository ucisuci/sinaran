<style>
h1 {
	color:#fff;
    font-size:152px;
    font-weight:bold;
    line-height:155px;
	margin:0;
    text-shadow: 0 5px 5px #162647;
}
</style>
<div id="page-wrapper-simple">
	<!--BEGIN TITLE & BREADCRUMB PAGE-->
    <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
        <div class="page-header pull-left">
            <div class="page-title">Oops...</div>
        </div>
		<div class="clearfix"></div>
    </div>
    <!--END TITLE & BREADCRUMB PAGE-->
		<!--BEGIN CONTENT-->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
					<div class="panel panel-red">
						<div class="panel-heading clearfix"><h1><?php echo $code; ?></h1></div>
						<div class="panel-body">
							<p>
								<?php echo CHtml::encode($message); ?><br class="mts mbm">
								<a href="<?php echo Yii::app()->baseUrl ?>" class="btn btn-danger"><i class="fa fa-home"></i>&nbsp;Kembali Ke Home</a>
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
            </div>
        </div>
        <!--END CONTENT-->
	<!--END PAGE WRAPPER-->
    </div>
</div>
