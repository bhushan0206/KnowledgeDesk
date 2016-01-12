<header class="intro-header" style="background-image: url(<?php echo base_url('img/home-bg.jpg'); ?>)">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading page-header">
                    <h1>KnowledgeDesk</h1>
                    <hr class="small">
                    <span class="subheading">Learn, Explore and Share</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
<div class="jumbotron">
	<h1>Welcome to KnowledgeDesk</h1>

	<p class="lead">Its not just a blogging or news feed or question-answer site, it has everything for everyone.<br/>Learn, Explore and Share.</p>

	<?php if (isset($current_user->email)) : ?>
		<a href="<?php echo site_url(SITE_AREA) ?>" class="btn btn-large btn-success">Go to the Admin area</a>
	<?php else :?>
		<a href="<?php echo site_url(LOGIN_URL); ?>" class="btn btn-large btn-primary"><?php echo lang('bf_action_login'); ?></a>
	<?php endif;?>

	<br/><br/><a href="<?php echo site_url('/docs') ?>" class="btn btn-large btn-info">Browse the Docs</a>
</div>

<hr />

<div class="row-fluid">

	<div class="col-md-6 col-md-offset-0">
		<h4>What can i gain here?</h4>

		<p>KnowledgeDesk is a technology centric platform which can help you keep up-to-date of latest trends and happening in the world of information technology. You can get to know various informative articles by reading our blogs, forums, news feed and case studies.</p>

		<p><i>Role-Based Access Control </i>that provides as much fine-grained control as your modules need.</p><br><br/>
	</div>

	<div class="col-md-6 col-md-offset-0">
		<h4>Why do i need to register?</h4>
		<p>Using our site you can evaluate your skills on various programming languages. To judge skill and technical expertise we use various adaptive algoritms to analyze your answers and decide on the deficulty level. Difficulty level for questions which are presented to you from specific technology is decided based on your historical performance and previous answers. </p>
		<p>You can share your ideas and contribute to blogs and forums only if you are subscribed member.</p><br><br/>
	</div>

	<div class="col-md-6 col-md-offset-0">
	<h4>How is this maintained?</h4>
		<p>KnowledgeDesk has an ever-growing community of users that are there to help you get unstuck, or make the best use of this powerful system. </p>
		<p>Many passionate IGATOR's are putting in their efforts to make this learning experience better</p><br><br/>				
	</div>

</div>	

</div>